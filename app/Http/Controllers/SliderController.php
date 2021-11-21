<?php

namespace App\Http\Controllers;

use App\GeneralSettings;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Image;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('temp', null)->latest()->get();
        $page_title = 'Sliders';
        return view('admin.slider', compact('page_title', 'sliders'));
    }

    public function create()
    {
        $page_title = 'New Slider';
        return view('admin.new_slider', compact('page_title'));
    }

    public function store(Request $request)
    {
        $validation_rule = [
            'title' => 'nullable|max:60',
            'lang' => 'required|in:ja,pt-br',
            'temp' => 'required|exists:sliders',
        ];

        $validator = \Validator::make($request->all(), $validation_rule, ['temp.*' => 'Cannot process form request']);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $temp_path = 'assets/images/slider/temp/' . $request->temp;
        $up_path = 'assets/images/slider';

        try {
            $filelist = glob($temp_path . '/*');

            foreach ($filelist as $file) {
                if (is_file($file)) {
                    rename($file, $up_path . '/' . basename($file));
                }
            }
            if (is_dir($temp_path)) {
                @rmdir($temp_path);
            }

            Slider::where('temp', $request->temp)->update([
                'title' => $request->title,
                'lang' => $request->lang,
                'temp' => null,
                'batch_no' => Slider::max('batch_no') + 1,
            ]);
        } catch (\Exception $exp) {
            return back()->withErrors($exp->getMessage());
            return back()->withErrors(['Could not save sliders.']);
        }
        return redirect()->route('slider.index')->withSuccess('Slider has been added');
    }

    public function setting(Request $request)
    {
        $this->validate($request, [
            'speed' => 'nullable|integer',
            'slider_number' => 'integer|min:1|max:5',
        ]);
        $general = GeneralSettings::first();
        $general->update([
            'slider_text' => $request->slider_text,
            'slider_textpt' => $request->slider_textpt,
            'slider_speed' => $request->speed,
            'slider_show_method' => $request->slider_show_method,
            'slider_number' => $request->slider_number,
            'slidesPerView' => $request->slidesPerView,
            'slider_loop' => $request->slider_loop,
            'autoplay_delay' => $request->autoplay_delay,
        ]);
        return redirect()->route('slider.index')->withSuccess('Slider has been updated.');
    }

    public function remove(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);

        $slider = Slider::findOrFail($request->id);
        $image = 'assets/images/slider/' . $slider->image_name;
        try {
            @unlink($image);
        } catch (Exception $exp) {
            return back()->withErrors(['sliderErr' => 'Slider could not be removed.']);
        }
        $slider->delete();
        return redirect()->route('slider.index')
            ->with('success', 'Slider has been successfully removed.');
    }
    public function massRemove(Request $req)
    {


        $message = 'Please select any item to delete!';
        $path = 'assets/images/slider';
        $sliders = Slider::all();

        foreach ($sliders as $slider) {

            if($req['check-'.$slider->id] != null) {

                $file = $path . '/' . $slider->image_name;
                $thumb_file = $path . '/thumb_' . $slider-> image_name;
                if (is_file($thumb_file)) {
                    @unlink($thumb_file);
                }
                if (is_file($file)) {
                    @unlink($file);
                }



                $slider->delete();
                $message = 'Items Has Been Removed Successfully.';
            }
        }
        return back()->withSuccess($message);

    }


    public function uploadImage(Request $request)
    {
        $validation_rule = ['image' => 'required|image|mimes:jpeg,jpg,png', 'temp' => 'required'];
        $error_message = ['image.*' => 'must be an image', 'temp.*' => 'Invalid path'];
        $validator = Validator::make($request->all(), $validation_rule, $error_message);
        if ($validator->fails()) {
            return response()->json(['error' => true, 'error_msg' => $validator->messages()]);
        }


        if ($request->hasFile('image')) {
            try {
                $path = 'assets/images/slider/temp/' . $request->temp;
                if (!file_exists($path)) mkdir($path, 0755, true);

                $filename = DB::table('sliders')->max('id') . $request->image->getClientOriginalName();;

                Image::make($request->image)->resize(1110, 335)->save($path . '/' . $filename);
                Image::make($request->image)->resize(120, 36)->save($path . '/thumb_' . $filename);

                $album = Slider::create([
                    'temp' => $request->temp,
                    'image_name' => $filename,
                ]);
            } catch (\Exception $exp) {
                return response()->json(['error' => true, 'error_msg' => ['Could not upload the file']]);
            }
        }

        return response()->json(['success' => true]);
    }
}
