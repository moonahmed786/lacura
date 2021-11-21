<?php

namespace App\Http\Controllers;

use App\MinBlogCategory;
use Illuminate\Http\Request;
use App\Miniblog;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
class MiniblogController extends Controller
{
    public function addMiniBlog()
    {
        $blog_cat= MinBlogCategory::all();
    	$page_title = "Create Blog";
    	return view('admin.miniblog.adminiblogs',compact('page_title','blog_cat'));
    }
    public function addCategories()
    {
        $blog_cat= MinBlogCategory::all();

    	$page_title = "Create Mini Blog Category";
    	return view('admin.miniblog.add_Mini_blog_category',compact('page_title','blog_cat'));
    }
    public function storeMiniBlogCategories(Request $request)
    {
        Validator::make($request->all(), [
            'title_pt' => 'required',
            'title' => 'required',
            'status'=> 'required',


        ])->validate();
    	$storeMiniBlogData = new MinBlogCategory();
    	$storeMiniBlogData->title = $request->title;
    	$storeMiniBlogData->title_pt = $request->title_pt;
        $storeMiniBlogData->Status = $request->status;

        $storeMiniBlogData->save();
        return back()->with('message', 'Inserted Successfully');
    }
    public function StoreMiniBlog(Request $request)
    {
        Validator::make($request->all(), [
            'image' => 'required',
            'title_pt' => 'required',
            'title_ja' => 'required',
            'pt_text' => 'required',
            'ja_text' => 'required',
            'status'=> 'required',
            'category_id'=> 'required',


        ])->validate();
    	$storeMiniBlogData = new Miniblog();
    	$storeMiniBlogData->title_ja = $request->title_ja;
    	$storeMiniBlogData->title_pt = $request->title_pt;
    	$storeMiniBlogData->description_ja = $request->ja_text;
    	$storeMiniBlogData->description_pt = $request->pt_text;
    	$storeMiniBlogData->tags = $request->tags;
    	$storeMiniBlogData->category_id = $request->category_id;

    	if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.jpg';
            $location = 'assets/images/blog/' . $filename;
            Image::make($image)->save($location);
            $storeMiniBlogData['image'] = $filename;
            $storeMiniBlogData->image = $filename;
        }

        $storeMiniBlogData->Status = $request->status;
        $storeMiniBlogData->save();
        return back()->with('message', 'Inserted Successfully');
    }
    public function ManageMiniBlog()
    {
    	$blog = Miniblog::paginate(12);
    	$page_title = "All Blogs";
    	return view('admin.miniblog.manageblog',compact('page_title','blog'));
    }
    public function EditminiBlog($id)
    {
        $blog_cat= MinBlogCategory::all();
    	$editMiniBlog = Miniblog::find($id);
    	$page_title = "All Blogs";
    	return view('admin.miniblog.editblog',compact('page_title','editMiniBlog','blog_cat'));
    }
    public function UpdateMiniBlog(Request $request,$id)
    {
        Validator::make($request->all(), [
            'title_pt' => 'required',
            'title_ja' => 'required',
            'pt_text' => 'required',
            'ja_text' => 'required',
            'status'=> 'required',
            'category_id'=> 'required',
        ])->validate();

    	$updateMiniBlog = Miniblog::find($id);
    	$updateMiniBlog->title_ja = $request->title_ja;
    	$updateMiniBlog->title_pt = $request->title_pt;
    	$updateMiniBlog->description_ja = $request->ja_text;
    	$updateMiniBlog->description_pt = $request->pt_text;
    	$updateMiniBlog->tags = $request->tags;
    	$updateMiniBlog->category_id = $request->category_id;
    	if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.jpg';
            $location = 'assets/images/blog/' . $filename;
            Image::make($image)->save($location);
            $updateMiniBlog['image'] = $filename;
        }
        $updateMiniBlog->Status = $request->status;
        $updateMiniBlog->update();
        return back()->with('message', __('Update Successfully'));
    }
    public function DeleteMiniBlog($id)
    {

    	$delMiniBlog = Miniblog::find($id);
    	@unlink('assets/images/blog/' . $delMiniBlog->image);
        $delMiniBlog->delete();
        return back()->with('message', 'Delete Successfully');
    }
    public function ChangeStatus(Request $request,$id)
    {

    	$chStatMiniBlog = Miniblog::find($id);
    	$chStatMiniBlog->Status = $request->selectStatus;
    	$chStatMiniBlog->update();
    	return back()->with('message', __('Update Successfully'));
    }
}
