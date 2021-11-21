<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlbumItem;
use App\Album;
use App\Rules\ValidateFileType;
use Image;
use App\User;
use App\Admin;
use App\GeneralSettings;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{

    public function upload()
    {
        $page_title = 'Upload Album';
        return view('admin.gallery.upload', compact('page_title'));
    }

    public function uploadStore(Request $request)
    {
        $request->validate([
            'temp' => 'required',
            'title' => 'required|string',
        ]);

        $user = \Auth::guard('admin')->user();

        $album = Album::where('temp', $request->temp)->first();
        $temp_path = 'assets/images/album/temp/' . $album->temp;
        $up_path = 'assets/storage/album';

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

            $album->update([
                'title' => $request->title,
                'public' => 0,
                'temp' => null,
            ]);
        } catch (\Exception $exp) {
            return back()->withErrors(['Could not save album']);
        }

        return redirect()->route('upload')->withSuccess('Successfully uploaded files.');
    }

    public function albums()
    {
        $page_title = 'Albums';
        $albums = Album::where('public', '!=', 9)->latest()->paginate(config('constants.paginate.admin'));
        return view('admin.gallery.album', compact('page_title', 'albums'));
    }

    public function albumItemsRemove(Request $request, $id)
    {
        $request->validate(['id' => 'required']);
        $album_item = Album::find($id)->items()->find($request->id);
        @unlink('assets/storage/album/' . $album_item->filename);
        $album_item->delete();
        return back()->withSuccess('Album item has been remove');
    }

    // public function uploadUpdate(Request $request)
    // {
    //     $validation_rule = [
    //         'album_item_id' => 'required|integer',
    //         'comment' => 'required|string',
    //     ];

    //     $validator = \Validator::make($request->all(), $validation_rule);

    //     if ($validator->fails()) {
    //         return back()->withErrors($validator->errors());
    //     }

    //     $item = AlbumItem::findOrFail($request->album_item_id);
    //     $user = \Auth::guard('admin')->user();

    //     if (empty($user->album_items()->find($item->id))) {
    //         return back()->withErrors(['You are not owner of this content']);
    //     }

    //     $item->comment = $request->comment;
    //     $item->save();

    //     return redirect()->route('upload')->withSuccess('Successfully uploaded files.');
    // }

    // public function recentUpload()
    // {
    //     $page_title = 'Recent Uploads';
    //     $uploads = AlbumItem::orderByDesc('created_at')->paginate(config('constants.paginate.admin'));
    //     return view('admin.gallery.recent_upload', compact('page_title', 'uploads'));
    // }

    // public function recentAlbum()
    // {
    //     $page_title = 'Recent Albums';
    //     $albums = Album::orderByDesc('created_at')->paginate(config('constants.paginate.admin'));
    //     return view('admin.gallery.recent_album', compact('page_title', 'albums'));
    // }

    // By username and upload date
    // public function uploadSearch(Request $request)
    // {
    //     $page_title = 'Recent Uploads Search : ';

    //     $username = $request->username;
    //     $uploaded = empty($request->uploaded) ? '' : \Carbon\Carbon::parse($request->uploaded)->toDateString();

    //     if (!empty($username)) {
    //         $user = Admin::where('username', $username)->first();
    //         if (empty($user)) {
    //             $user = User::where('username', $username)->first();
    //         }

    //         if (!empty($user)) {
    //             $uploads = $user->album_items()->paginate(config('constants.paginate.admin'));
    //         } else {
    //             return redirect()->route('recent.upload')->withErrors(['Found nothing, showing all result.']);
    //         }

    //         $page_title .= $username;
    //     } else if (!empty($uploaded)) {
    //         $uploads = AlbumItem::whereDate('created_at', $uploaded)->paginate(config('constants.paginate.admin'));

    //         $page_title .= $uploaded;
    //     } else {
    //         return redirect()->route('recent.upload')->withErrors(['Found nothing, showing all result.']);
    //     }

    //     return view('admin.gallery.recent_upload', compact('page_title', 'uploads'));
    // }

    // public function albumSearch(Request $request)
    // {
    //     $page_title = 'Recent Album Search : ';

    //     $username = $request->username;
    //     $uploaded = empty($request->uploaded) ? '' : \Carbon\Carbon::parse($request->uploaded)->toDateString();
    //     $albums = collect();

    //     if (!empty($username)) {
    //         $user = Admin::where('username', $username)->first();
    //         if (empty($user)) {
    //             $user = User::where('username', $username)->first();
    //         }

    //         if (!empty($user)) {
    //             $albums = $user->albums()->paginate(config('constants.paginate.admin'));
    //         } else {
    //             return back()->withErrors(['Found nothing, showing all result.']);
    //         }

    //         $page_title .= $username;
    //     } else if (!empty($uploaded)) {
    //         $albums = Album::whereDate('created_at', $uploaded)->paginate(config('constants.paginate.admin'));

    //         $page_title .= $uploaded;
    //     } else {
    //         return back()->withErrors(['Found nothing, showing all result.']);
    //     }

    //     return view('admin.gallery.album', compact('page_title', 'albums'));
    // }

    public function albumSearch(Request $request)
    {
        $validation_rule = [
            'search' => 'required_without_all:uploaded,title',
        ];
        $error_message = ['search.*' => 'Nothing has been searched.'];
        $validator = Validator::make($request->all(), $validation_rule, $error_message);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
        $page_title = 'Album Search : ';
        $page_title .= $request->title ?: '';
        $page_title .= $request->uploaded ? ' uploaded at ' . $request->uploaded : '';

        $albums = Album::when($request->uploaded, function ($query) use ($request, $page_title) {
            return $query->whereDate('created_at', $request->uploaded);
        })->when($request->title, function ($query) use ($request, $page_title) {
            return $query->where('title', 'LIKE', '%' . $request->title . '%');
        })->paginate(config('constants.paginate.admin'));

        return view('admin.gallery.album', compact('page_title', 'albums'));
    }

    public function albumItems($id)
    {
        $album = Album::with('items')->where('public', '!=', 9)->findOrFail($id);
        $page_title = 'Album : ' . $album->title;
        return view('admin.gallery.album_items', compact('page_title', 'album'));
    }

    public function remove(Request $request)
    {
        $request->validate(['id' => 'required']);
        $album = Album::findOrFail($request->id);
        $path = 'assets/storage/album';
        foreach ($album->items() as $item) {
            $file = $path . '/' . $item->filename;
            if (is_file($file)) {
                @unlink($file);
            }
        }
        $title = $album->title;
        $album->items()->delete();
        $album->delete();
        return back()->withSuccess($title . ' album has been removed');
    }
    public function massRemove(Request $req, $id)
    {

        $album = Album::with('items')->findOrFail($id);
        $message = 'Please select any item to delete!';
        $path = 'assets/storage/album';

        foreach ($album->items as $item) {

            if($req['check-'.$item->id] != null) {

                $file = $path . '/' . $item->filename;
                $thumb_file = $path . '/thumb_' . $item-> image_name;
                if (is_file($thumb_file)) {
                    @unlink($thumb_file);
                }
                if (is_file($file)) {
                    @unlink($file);
                }
                $item_to_delete=AlbumItem::find($item->id);
                $item_to_delete->delete();
                $message = 'Items Has Been Removed Successfully.';
            }
        }
        return back()->withSuccess($message);






        $ids = $request->id;
//       dd($request->all());
        $album_id = $request->album_id;
        $request->validate([
            'id' => 'required',
            'album_id' => 'required'
            ]
        );
        $album =  Album::where('id',$album_id)->first();
//        dd($album);
        $path = 'assets/storage/album';
        foreach ($album->items as $item) {
            $file = $path . '/' . $item->filename;
            if (is_file($file)) {
                @unlink($file);
            }
        }
        $title = $album->title;
        $album->items()->delete();
        $album->delete();
        return back()->withSuccess($title . ' album has been removed');
    }

    // public function uploadRemove(Request $request)
    // {
    //     $this->validate($request, ['album_item_id' => 'required|integer']);
    //     $upload = AlbumItem::findOrFail($request->album_item_id);

    //     $path = 'assets/storage/album';

    //     try {
    //         unlink($path . '/' . $upload->filename);
    //         $upload->delete();
    //     } catch (\Exception $exp) {
    //         return back()->withErrors(['Something went wrong, cannot remove file.']);
    //     }
    //     return back()->withSuccess('Successfully removed.');
    // }

    public function public($id)
    {
        $album = Album::findOrFail($id);

        $album->public = 1;
        $album->save();
        return back()->withSuccess($album->title . ' is now public.');
    }

    public function private($id)
    {
        $album = Album::findOrFail($id);

        $album->public = 0;
        $album->save();
        return back()->withSuccess($album->title . ' is now private.');
    }

    public function setting()
    {
        $page_title = 'Gallery Setting';
        return view('admin.gallery.setting', compact('page_title'));
    }

    public function uploadImage(Request $request)
    {
        $validation_rule = ['image' => ['required', 'file', new ValidateFileType], 'temp' => 'required'];
        $error_message = ['image.*' => 'must be a file', 'temp.*' => 'Invalid path'];
        $validator = Validator::make($request->all(), $validation_rule, $error_message);
        if ($validator->fails()) {
            return response()->json(['error' => true, 'error_msg' => $validator->messages()]);
        }


        if ($request->hasFile('image')) {
            try {
                $path = 'assets/images/album/temp/' . $request->temp;
                if (!file_exists($path)) mkdir($path, 0755, true);
                $filename = uniqid() . time() . '.' . $request->image->getClientOriginalExtension();

                $filetype = 0;
                if (in_array($request->image->getClientOriginalExtension(), ['mp4', 'avi', 'gif'])) {
                    $request->image->move($path, $filename);
                    $filetype = 2;
                } else {
                    Image::make($request->image)->resize(312, 360)->save($path . '/' . $filename);
                    Image::make($request->image)->resize(104, 120)->save($path . '/thumb_' . $filename);
                    $filetype = 1;
                }

                $user = auth()->guard('admin')->user();

                $album = $user->albums()->firstOrCreate(
                    ['temp' => $request->temp],
                    [
                        'title' => '',
                        'public' => 9,
                    ]
                );

                $user->album_items()->save(new AlbumItem([
                    'filename' => $filename,
                    'filetype' => $filetype,
                    'album_id' => $album->id,
                ]));
            } catch (\Exception $exp) {
                return response()->json(['error' => true, 'error_msg' => ['Could not upload the file']]);
            }
        }

        return response()->json(['success' => true]);
    }

    public function showAbout($id)
    {
        $album = Album::findOrFail($id);
        $album->update([
            'show_about' => 1
        ]);
        return back()->withSuccess('Album has been added to about page.');
    }

    public function hideAbout($id)
    {
        $album = Album::findOrFail($id);
        $album->update([
            'show_about' => 0
        ]);
        return back()->withSuccess('Album has been removed to about page.');
    }
    public function customizeItemsView($id){
        $album = Album::with('items')->where('public', '!=', 9)->findOrFail($id);
        $page_title = 'Album : ' . $album->title;
        return view('admin.gallery.customize_items', compact('page_title', 'album'));
    }
    public function customizeItems(Request $req, $id){
//        dd($req->all(),$id);
        $album = Album::with('items')->findOrFail($id);
        $message = '';
        foreach ($album->items as $item) {

            if($req['check-'.$item->id] == null){
                $item->update([
                    'show_about'=>0
                ]);
                $message = 'Items setting updated.';
            }else {
                $item->update([
                    'show_about'=>1
                ]);
                $message = 'Items setting updated.';
            }
        }
        return back()->withSuccess($message);
    }
}
