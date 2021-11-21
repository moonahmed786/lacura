<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\ValidateFileType;
use App\AboutMe;
use Image;

class AboutMeController extends Controller
{
    public function index()
    {
        $page_title = 'About Me';
        $abouts = AboutMe::all();
        return view('admin.general.about', compact('page_title', 'abouts'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => ['nullable', 'file', new ValidateFileType],
        ]);

        if (empty($request->title) && empty($request->detail) && empty($request->image)) {
            return back()->withErrors(['Nothing to save, provide at least one field']);
        }

        try {
            $me = new AboutMe;
            if ($request->hasFile('image')) {
                $ext = $request->image->getClientOriginalExtension();
                $filename = uniqid() . time() . '.' . $ext;
                $filetype = 0;
                $path = 'assets/storage/about';
                if (!file_exists($path)) {
                    mkdir($path, 0755, true);
                }
                if (in_array($ext, ['mp4'])) {
                    $filetype = 2;
                    $request->image->move($path, $filename);
                } elseif (in_array($ext, ['jpeg', 'jpg', 'png', 'gif'])) {
                    $filetype = 1;
                    Image::make($request->image)->save($path . '/' . $filename);
                } else {
                    return back()->withErrors(['File is not supported.']);
                }
                $me->filename = $filename;
                $me->filetype = $filetype;
            }

            $me->title = $request->title;
            $me->detail = $request->detail;
            $me->save();
        } catch (\Exception $exp) {
            return back()->withErrors(['File is not supported.']);
        }

        return redirect()->route('about.index')->withSuccess('Section has been saved.');
    }

    public function remove(Request $request)
    {
        $about = AboutMe::findOrFail($request->id);
        try {
            if ($about->filetype > 0) {
                $path = 'assets/storage/about';
                unlink($path . '/' . $about->filename);
            }
            $about->delete();
        } catch (\Exception $exp) {
            return back()->withErrors(['Something went wrong, cannot remove file.']);
        }
        return redirect()->route('about.index')->withSuccess('Section has been removed.');
    }
}
