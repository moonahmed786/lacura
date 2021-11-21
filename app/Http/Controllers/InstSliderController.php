<?php

namespace App\Http\Controllers;

use App\InstSlider;
use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\DB;
use Image;
use App\GeneralSettings;
use Illuminate\Support\Facades\Validator;


class InstSliderController extends Controller
{
    public function index()
    {
        $sliders = InstSlider::where('temp', null)->latest()->get();
        $page_title = 'Social Sliders';
        return view('admin.inst_slider', compact('page_title', 'sliders'));
    }

    public function create()
    {
        $page_title = 'New Slider';
        return view('admin.new_inst_slider', compact('page_title'));
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $validation_rule = [
            'title' => 'nullable|max:60',
            'lang' => 'required|in:ja,pt-br',
            'temp' => 'required|exists:inst_sliders',
        ];

        $validator = \Validator::make($request->all(), $validation_rule, ['temp.*' => 'Cannot process form request']);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $temp_path = 'assets/images/slider/temp/' . $request->temp;
        $up_path = 'assets/images/inslider';

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

            InstSlider::where('temp', $request->temp)->update([
                'title_jp' => $request->title,
                'lang' => $request->lang,
                'temp' => null,
                'batch_no' => Slider::max('batch_no') + 1,
            ]);
        } catch (\Exception $exp) {
            return back()->withErrors($exp->getMessage());
            return back()->withErrors(['Could not save sliders.']);
        }
        return redirect()->route('inslider.index')->withSuccess('Slider has been added');
    }

    public function setting(Request $request)
    {

        $this->validate($request, [
            'in_slider_speed' => 'nullable|integer|min:200|max:1000',
            'in_slider_number' => 'integer|min:1|max:10',
            'in_slidesPerView' => 'nullable|integer|min:1|max:3',
            'in_autoplay_delay' => 'nullable|integer|min:30|max:800',
        ]);
        $general = GeneralSettings::first();
        $general->update([
            'in_slider_text' => $request->in_slider_text,
            'in_slider_textpt' => $request->in_slider_textpt,
            'in_slider_speed' => $request->in_slider_speed,
            'in_slider_show_method' => $request->in_slider_show_method,
            'in_slider_number' => $request->in_slider_number,
            'in_slidesPerView' => $request->in_slidesPerView,
            'in_slider_loop' => $request->in_slider_loop,
            'in_autoplay_delay' => $request->in_autoplay_delay,
            'mission_enable' => $request->mission_enable,
            'footer_slider_enable' => $request->footer_slider_enable,
        ]);
        return redirect()->route('inslider.index')->withSuccess('Slider has been updated.');
    }

    public function remove(Request $request)
    {

        $this->validate($request, [
            'id' => 'required',
        ]);

        $slider = InstSlider::findOrFail($request->id);
        $image = 'assets/images/inslider/' . $slider->image_name;
        try {
            @unlink($image);
        } catch (Exception $exp) {
            return back()->withErrors(['sliderErr' => 'Slider could not be removed.']);
        }
        $slider->delete();
        return redirect()->route('inslider.index')
            ->with('success', 'Slider has been successfully removed.');
    }

    public function massRemove(Request $req)
    {


        $message = 'Please select any item to delete!';
        $path = 'assets/images/inslider';
        $sliders = InstSlider::all();

        foreach ($sliders as $slider) {

            if($req['check-'.$slider->id] != null) {
                $thumb_file = $path . '/thumb_' . $slider-> image_name;
                if (is_file($thumb_file)) {
                    @unlink($thumb_file);
                }
                $file = $path . '/' . $slider->image_name;
                if (is_file($file)) {
                    @unlink($file);
                }

                $slider->delete();
                $message = 'Items Has Been Removed Successfully.';
            }
        }
        return back()->withSuccess($message);





//
//        $ids = $request->id;
////       dd($request->all());
//        $album_id = $request->album_id;
//        $request->validate([
//                'id' => 'required',
//                'album_id' => 'required'
//            ]
//        );
//        $album =  Album::where('id',$album_id)->first();
////        dd($album);
//        $path = 'assets/storage/album';
//        foreach ($album->items as $item) {
//            $file = $path . '/' . $item->filename;
//            if (is_file($file)) {
//                @unlink($file);
//            }
//        }
//        $title = $album->title;
//        $album->items()->delete();
//        $album->delete();
//        return back()->withSuccess($title . ' album has been removed');
    }


    public function uploadImage(Request $request)
    {
//dd($request->all());
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
                $filename = DB::table('inst_sliders')->max('id') . $request->image->getClientOriginalName();;

                Image::make($request->image)->resize(600, 600)->save($path . '/' . $filename);
//                Image::make($request->image)->resize(120, 36)->save($path . '/thumb_' . $filename);

                $album = InstSlider::create([
                    'temp' => $request->temp,
                    'image_name' => $filename,
                ]);

            } catch (\Exception $exp) {
                return response()->json(['error' => true, 'error_msg' => $exp->getMessage(),]);
            }
        }

        return response()->json(['success' => true]);
    }

}
