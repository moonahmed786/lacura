<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\ValidateFileType;
use Illuminate\Support\Facades\Auth;
use App\Album;
use App\AlbumItem;
use Image;

class AlbumController extends Controller
{

    public function index()
    {

        $pt = "User Album";
        $albums = Album::where('public', 1)->latest()->paginate(config('constants.paginate.user.album'));
        // $albums = Auth::user()->albums()->orderByDesc('created_at')->get();
        // $uploads = Auth::user()->album_items()->orderByDesc('created_at')->get();

//        dd($albums->items);
        return view('user.album_n', compact('pt', 'albums'));
    }

    public function store(Request $request)
    {
        $validation_rule = [
            'title' => 'required|max:60',
            'comment' => 'nullable|string',
            'item' => 'required|array|min:1',
            'item.*' => ['required', 'file', new ValidateFileType],
        ];

        $validator = \Validator::make($request->all(), $validation_rule);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $user = Auth::user();

        $album = new Album([
            'title' => $request->title,
            'comment' => $request->comment,
        ]);
        $user->albums()->save($album);

        if ($request->hasFile('item')) {
            foreach ($request->file('item') as $item) {
                try {
                    $ext = $item->getClientOriginalExtension();
                    $filename = uniqid() . time() . '.' . $ext;
                    $path = 'assets/storage/album';
                    if (!file_exists($path)) {
                        mkdir($path, 0755, true);
                    }

                    if (in_array($ext, ['mp4'])) {
                        $filetype = 2;
                        $item->move($path, $filename);
                    } else if (in_array($ext, ['jpeg', 'jpg', 'JPG', 'png', 'gif'])) {
                        $filetype = 1;
                        Image::make($item)->save($path . '/' . $filename);
                    } else {
                        return back()->withErrors(['File is not supported.']);
                    }
                    $user->album_items()->save(new AlbumItem([
                        'filename' => $filename,
                        'filetype' => $filetype,
                        'album_id' => $album->id,
                        'comment' => $album->comment,
                    ]));
                } catch (\Exception $exp) {
                    return back()->withErrors(['Files are cannot be uploaded.']);
                }
            }
        }


        return redirect()->route('user.album')->withSuccess('Album has been created');
    }

    public function update(Request $request)
    {
        $validation_rule = [
            'album_id' => 'required|integer',
            'title' => 'required|max:60',
            'comment' => 'nullable|string',
            'item' => 'nullable|array|min:1',
            'item.*' => ['nullable', 'file', new ValidateFileType],
        ];

        $validator = \Validator::make($request->all(), $validation_rule);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $album = Album::findOrFail($request->album_id);
        $user = Auth::user();

        if (empty($user->albums()->find($album->id))) {
            return back()->withErrors(['You are not owner of this content']);
        }

        $album->title = $request->title;
        $album->comment = $request->comment;
        $album->save();

        if ($request->hasFile('item')) {
            foreach ($request->file('item') as $item) {
                try {
                    $ext = $item->getClientOriginalExtension();
                    $filename = uniqid() . time() . '.' . $ext;
                    $path = 'assets/storage/album';
                    if (!file_exists($path)) {
                        mkdir($path, 0755, true);
                    }

                    if (in_array($ext, ['mp4'])) {
                        $filetype = 2;
                        $item->move($path, $filename);
                    } else if (in_array($ext, ['jpeg', 'jpg', 'JPG', 'png', 'gif'])) {
                        $filetype = 1;
                        Image::make($item)->save($path . '/' . $filename);
                    } else {
                        return back()->withErrors(['File is not supported.']);
                    }
                    $user->album_items()->save(new AlbumItem([
                        'filename' => $filename,
                        'filetype' => $filetype,
                        'album_id' => $album->id,
                        'comment' => $album->comment,
                    ]));
                } catch (\Exception $exp) {
                    return back()->withErrors(['Files are cannot be uploaded.']);
                }
            }
        }

        return redirect()->route('user.album')->withSuccess($album->title . ' has been updated successfully');
    }

    public function itemRemove(Request $request)
    {
        $this->validate($request, ['album_item_id' => 'required|integer']);

        $album_item = AlbumItem::findOrFail($request->album_item_id);
        $user = Auth::user();

        if (empty($user->album_items()->find($album_item->id))) {
            return back()->withErrors(['You are not owner of this content']);
        }
        $album_name = $album_item->album->title;

        $path = 'assets/storage/album';
        try {
            unlink($path . '/' . $album_item->filename);
            $album_item->delete();
        } catch (\Exception $exp) {
            return back()->withErrors(['Something went wrong, cannot remove file.']);
        }

        return redirect()->route('user.album')->withSuccess('Item has been removed from ' . $album_name);
    }

    public function remove(Request $request)
    {
        $this->validate($request, ['album_id' => 'required|integer']);

        $album = Album::findOrFail($request->album_id);
        $user = Auth::user();

        if (empty($user->albums()->find($album->id))) {
            return back()->withErrors(['You are not owner of this content']);
        }
        $album_name = $album->title;

        $path = 'assets/storage/album';
        try {
            foreach ($album->items as $item) {
                unlink($path . '/' . $item->filename);
                $item->delete();
            }
            $album->delete();
        } catch (\Exception $exp) {
            // return $exp;
            return back()->withErrors(['Something went wrong, cannot remove album.']);
        }

        return redirect()->route('user.album')->withSuccess('Album ' . $album_name . ' has been removed.');
    }

    public function itemStore(Request $request)
    {
        $validation_rule = [
            'comment' => 'nullable|string',
            'item' => 'required|array|min:1',
            'item.*' => ['required', 'file', new ValidateFileType],
        ];

        $validator = \Validator::make($request->all(), $validation_rule);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $user = Auth::user();

        if ($request->hasFile('item')) {
            foreach ($request->file('item') as $item) {
                try {
                    $ext = $item->getClientOriginalExtension();
                    $filename = uniqid() . time() . '.' . $ext;
                    $path = 'assets/storage/album';
                    if (!file_exists($path)) {
                        mkdir($path, 0755, true);
                    }

                    if (in_array($ext, ['mp4'])) {
                        $filetype = 2;
                        $item->move($path, $filename);
                    } else if (in_array($ext, ['jpeg', 'jpg', 'JPG', 'png', 'gif'])) {
                        $filetype = 1;
                        Image::make($item)->save($path . '/' . $filename);
                    } else {
                        return back()->withErrors(['File is not supported.']);
                    }
                    $user->album_items()->save(new AlbumItem([
                        'filename' => $filename,
                        'filetype' => $filetype,
                        'album_id' => 0,
                        'comment' => $request->comment,
                    ]));
                } catch (\Exception $exp) {
                    return back()->withErrors(['Files are cannot be uploaded.']);
                }
            }
        }

        return redirect()->route('user.album')->withSuccess('Successfully uploaded files.');
    }

    public function itemUpdate(Request $request)
    {
        $validation_rule = [
            'album_item_id' => 'required|integer',
            'comment' => 'required|string',
        ];

        $validator = \Validator::make($request->all(), $validation_rule);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $item = AlbumItem::findOrFail($request->album_item_id);
        $user = Auth::user();

        if (empty($user->album_items()->find($item->id))) {
            return back()->withErrors(['You are not owner of this content']);
        }

        $item->comment = $request->comment;
        $item->save();

        return redirect()->route('user.album')->withSuccess('Successfully uploaded files.');
    }

    public function itemDelete(Request $request)
    {
        $this->validate($request, ['album_item_id' => 'required|integer']);

        $album_item = AlbumItem::findOrFail($request->album_item_id);
        $user = Auth::user();

        if (empty($user->album_items()->find($album_item->id))) {
            return back()->withErrors(['You are not owner of this content']);
        }
        $path = 'assets/storage/album';
        try {
            unlink($path . '/' . $album_item->filename);
            $album_item->delete();
        } catch (\Exception $exp) {
            return back()->withErrors(['Something went wrong, cannot remove file.']);
        }

        return redirect()->route('user.album')->withSuccess('Item has been removed');
    }

    public function public($id)
    {
        $user = Auth::user();
        $album = Album::findOrFail($id);

        if ($user->albums()->where('id', $album->id)->count() == 0) {
            return back()->withErrors(['You are not owner of this content']);
        }

        $album->public = 1;
        $album->save();
        return redirect()->route('user.album')->withSuccess($album->title . ' is now public.');
    }

    public function private($id)
    {
        $user = Auth::user();
        $album = Album::findOrFail($id);

        if ($user->albums()->where('id', $album->id)->count() == 0) {
            return back()->withErrors(['You are not owner of this content']);
        }

        $album->public = 0;
        $album->save();
        return redirect()->route('user.album')->withSuccess($album->title . ' is now private.');
    }

    public function itemRating(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $album_item = AlbumItem::findOrFail($request->id);
        $album_item->increment('rating_count');
        $album_item->rating = bcdiv(bcadd($album_item->rating, $request->rating, 1), $album_item->rating_count);
        $album_item->save();

        return back()->withSuccess('Thank you for your feedback.');
    }

    public function itemProfile($id)
    {
        $item = AlbumItem::findOrFail($id);
        if ($item->filetype == 1 && Auth::user()->album_items()->find($item->id)) {
            try {
                $src = 'assets/storage/album/' . $item->filename;
                $path = 'assets/storage/user';

                if (!file_exists($path)) {
                    mkdir($path, 0755, true);
                }
                if (Auth::user()->image) {
                    unlink($path . '/' . Auth::user()->image);
                }
                copy($src, $path . '/' . $item->filename);
                Auth::user()->update(['image' => $item->filename]);
            } catch (\Exception $exp) {
                return back()->withErrors(['Could not set this image as profile picture.']);
            }
        } else {
            return back()->withErrors(['You cannot set this as profile picture.']);
        }
        return redirect()->route('user.album')->withSuccess('Your profile picture has been updated.');
    }
}
