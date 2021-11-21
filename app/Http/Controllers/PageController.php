<?php

namespace App\Http\Controllers;

use App\Comment;
use App\GeneralSettings;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public static function get_replies($parent_id)
    {

        $replies = Comment::where('reply_id', $parent_id)->select('comment')->get();
        return $replies;
    }

    public function index()
    {

        $page_title = 'Page: Home';

        $page = Page::where('idx', 'index_page')->first();
        return view('admin.page.index_page', compact('page_title', 'page'));
    }
    public function alcoholics()
    {
        $page_title = 'Page: Alcoholics and Addictions';
        $comments = Comment::where('page_id', 'treatments')->where('reply_id', 0)->get();
        $page = Page::where('idx', 'alcoholics')->first();
        return view('admin.page.alcoholics', compact('page_title', 'page', 'comments'));
    }

    public function mental()
    {
        $page_title = 'Page: Mental Trauma';
        $page = Page::where('idx', 'mental')->first();
        $comments = Comment::where('page_id', 'treatments-2')->where('reply_id', 0)->get();


        return view('admin.page.mental', compact('page_title', 'page', 'comments'));
    }

    public function spiritual()
    {
        $page_title = 'Page: Spiritual Purification';
        $page = Page::where('idx', 'spiritual')->first();
        $comments = Comment::where('page_id', 'treatments-3')->where('reply_id', 0)->get();
        return view('admin.page.spiritual', compact('page_title', 'page', 'comments'));
    }

    public function influence()
    {
        $page_title = 'Page: Influence of Work';
        $page = Page::where('idx', 'influence')->first();
        $comments = Comment::where('page_id', 'treatments-4')->where('reply_id', 0)->get();
        return view('admin.page.influence', compact('page_title', 'page', 'comments'));
    }

    public function purification()
    {
        $page_title = 'Page: Purification Soul';
        $page = Page::where('idx', 'purification')->first();
        $comments = Comment::where('page_id', 'treatments-5')->where('reply_id', 0)->get();
        return view('admin.page.purification', compact('page_title', 'page', 'comments'));
    }

    public function about()
    {
        $page_title = 'Page: About';
        $page = Page::where('idx', 'about')->first();
        $general = GeneralSettings::first(['about_map']);
        return view('admin.page.about', compact('page_title', 'page', 'general'));
    }

    public function aboutConfig(Request $request)
    {
        $request->validate([
            'app_key' => 'required',
            'long' => 'required|numeric',
            'lat' => 'required|numeric',
        ]);
        $general = GeneralSettings::first();
        $general->update([
            'about_map' => $request->only('app_key', 'long', 'lat')
        ]);
        return back()->withSuccess('Map configuration has been updated.');
    }

    public function update(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'key' => 'required',
            'textja' => 'required',
            'textpt' => 'required',
        ]);

        $page = Page::updateOrCreate(
             [   'idx' => $request->key],
            [
                'ja' => $request->textja,
                'pt' => $request->textpt,
                'title' => $request->title,
                'description' => $request->description,
                'keywords' => $request->keywords,
                'header_text' => $request->header_text,
                'title_pt' => $request->title_pt,
                'descriptions_pt' => $request->descriptions_pt,
                'keywords_pt' => $request->keywords_pt,
                'header_text_pt' => $request->header_text_pt,
                'heading_2_jp'=>$request->heading_2_jp,
                'heading_2_pt'=>$request->heading_2_pt,
                'details_2_jap'=>$request->details_2_jap,
                'details_2_pt'=>$request->details_2_pt,
            ]
        );

        return back()->withSuccess('Page has been updated');
    }
}
