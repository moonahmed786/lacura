<?php

namespace App\Http\Controllers;

use App\Album;
use App\AlbumItem;
use App\Blog;
use App\Miniblog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use URL;

class SitemapController extends Controller
{
    public function sitemap () {

        // create new sitemap object
        $sitemap_contents = App::make("sitemap");
        // set cache
//        $sitemap_contents->setCache('laravel.sitemap_contents', 3600);
        // get all posts from db
        $Miniblog =Miniblog::where('Status',1)->orderBy('created_at', 'desc')->get();
        $blogs =Blog::orderBy('created_at', 'desc')->get();
        $AlbumItem =AlbumItem::orderBy('created_at', 'desc')->get();

//            Blog::where('published',1)->orderBy('created_at', 'desc')->get();
        // add every post to the sitemap

        // add this first


// then this
        foreach ($Miniblog as $minblog)
        {
            $url = url('/miniblogdetail/'.$minblog->id);
            $images = [['url' => URL::to('assets/images/blog/'.$minblog->image), 'title' => $minblog->title_pt, 'caption' => str_limit($minblog->description_pt, $limit = 100, $end = '...')]];
            $sitemap_contents->add($url, $minblog->updated_at,'1.0','daily',$images);
        }
        foreach ($blogs as $blog)
        {
            $url = $blog->link;
            $images = [['url' =>$url, 'title' => $blog->title, 'caption' => str_limit($blog->text, $limit = 100, $end = '...')]];
            $sitemap_contents->add($url, $blog->updated_at,'1.0','daily',$images);
        }
        foreach ($AlbumItem as $AlbumIt)
        {
            $url = asset('assets/storage/album/thumb_'. $AlbumIt->filename);
            $images = [['url' =>$url, 'title' => $AlbumIt->filename, 'caption' => str_limit($AlbumIt->filename, $limit = 100, $end = '...')]];
            $sitemap_contents->add($url, $AlbumIt->updated_at,'1.0','daily',$images);
        }

//        foreach ($blogs as $blog)
//        {
//            $url = url('/miniblogdetail/'.$blog->id);
//
//            $sitemap_contents->add($url, $blog->updated_at,'1.0','daily');
//        }
        // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
        return $sitemap_contents->render('html');
    }
}
