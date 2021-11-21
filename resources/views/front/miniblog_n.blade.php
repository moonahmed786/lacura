@extends('layouts.index')

@section('SEO')
    <meta name="description" content="{!!(session('lang') == 'pt-br')? $page->descriptions_pt : $page->description!!}">
    <meta name="keywords" content="{!!(session('lang') == 'pt-br')? $page->keywords_pt : $page->keywords!!}">
@stop
@section('facebook')
    <meta property="og:title"
          content="La Cura - 奇跡 | {!!(session('lang') == 'pt-br')? $page->title_pt : $page->title!!}"/>
    <meta property="og:site_name" content="La Cura - 奇跡 {{  '| '.__($pt) }}"/>
    <meta property="og:description"
          content="{!!(session('lang') == 'pt-br')? $page->descriptions_pt : $page->description!!}"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="100"/>
@stop

@section('titulo')
    <title>La Cura - 奇跡 {!!(session('lang') == 'pt-br')? $page->title_pt : $page->title!!}</title>
    <meta name="title" Content="{!!(session('lang') == 'pt-br')? $page->title_pt : $page->title!!}">
@stop


@section('content')
    <style>
        .card-img {
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        .card-title {
            margin-bottom: 1.3rem;
        }

        .cat {
            display: inline-block;
            margin-bottom: 1rem;
        }

        .fa-users {
            margin-left: 1rem;
        }

        .card-footer {
            font-size: 0.8rem;
        }

        .card-text {
            margin-bottom: 10px;
        }

        .detailbtn {
            margin-top: 10px;
        }
    </style>

    <!--Breadcrumb start-->
    <div class="ast_pagetitle">
        <div class="ast_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>@lang('miniblog.blog')</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="/">@lang('miniblog.Home')</a></li>
                        <li>//</li>
                        <li>@lang('miniblog.blog')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    @include('front.partials.slider_n')
    <!--Blog section start-->
    <div class="ast_blog_wrapper ast_toppadder70 ast_bottompadder70">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        @if(session('lang')=='ja')

                            @foreach($allblogs as $blogs)

                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-11">
                                    <div class="ast_blog_box">
                                        <div class="ast_blog_img">
                                            <span
                                                class="ast_date_tag">{{ \Carbon\Carbon::parse($blogs->updated_at)->format('F dS, Y ') }}</span>
                                            <a href="{{ route('miniblogdetail.front',$blogs->id)}}"><img
                                                    class="img-fluid"
                                                    src="{{url('/')}}/assets/images/blog/{{$blogs->image}}"
                                                    alt="Blog" title="Blog" style="height: 198px;" ></a>
                                        </div>
                                        <div class="ast_blog_info">
                                            <ul class="ast_blog_info_text">
                                                <li>
{{--                                                    <a href="{{ route('miniblogdetail.front',$blogs->id)}}"><i--}}
{{--                                                            class="fa fa-comments-o"--}}
{{--                                                            aria-hidden="true"></i> 28 comments</a>--}}
                                                </li>
                                                <li>
{{--                                                    <a href="{{ route('miniblogdetail.front',$blogs->id)}}"><i--}}
{{--                                                            class="fa fa-user" aria-hidden="true"></i>--}}
{{--                                                        Andrew Coyne</a>--}}
                                                </li>
                                            </ul>
                                            <h3 class="ast_blog_info_heading"><a
                                                    href="{{ route('miniblogdetail.front',$blogs->id)}}">{{$blogs->title_ja}}</a>
                                            </h3>
                                            <p class="ast_blog_info_details" style=".limited-text{
    white-space: nowrap;
    height: 300px;
    overflow: hidden;
    text-overflow: ellipsis;
}">{!! str_limit($blogs->description_ja,100), $end = '...' !!}
                                                "</p>
                                            <a class="ast_btn" href="{{ route('miniblogdetail.front',$blogs->id)}}">@lang('miniblog.Read More')</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        @else
                            @foreach($allblogs as $blogs)

                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-11">
                                    <div class="ast_blog_box">
                                        <div class="ast_blog_img">
                                            <span
                                                class="ast_date_tag">{{ \Carbon\Carbon::parse($blogs->updated_at)->format('F dS, Y ') }}</span>
                                            <a href="{{ route('miniblogdetail.front',$blogs->id)}}"><img
                                                    class="img-fluid"
                                                    src="{{url('/')}}/assets/images/blog/{{$blogs->image}}"
                                                    alt="Blog" title="Blog" style="height: 198px;"></a>
                                        </div>
                                        <div class="ast_blog_info">
                                            <ul class="ast_blog_info_text">
                                                <li><a href="{{ route('miniblogdetail.front',$blogs->id)}}">                                                        </a>
                                                </li>
                                                <li><a href="{{ route('miniblogdetail.front',$blogs->id)}}">
                                                         </a></li>
                                            </ul>
                                            <h3 class="ast_blog_info_heading"><a
                                                    href="">{{$blogs->title_pt}}</a></h3>
                                            <p class="ast_blog_info_details">{!! str_limit($blogs->description_pt,100), $end = '...' !!}
                                                "</p>
                                            <a class="ast_btn"
                                               href="{{ route('miniblogdetail.front',$blogs->id)}}">@lang('miniblog.Read More')</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        @endif

                        <div class="col-lg-12">
                            <div class="ast_pagination">

                                <ul class="pagination">
                                    {{$allblogs->links()}}

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="sidebar_wrapper">
                        {{--                        <aside class="widget widget_search">--}}
                        {{--                            <input type="text" placeholder="Search...">--}}
                        {{--                            <button type="button"><i class="fa fa-search"></i></button>--}}
                        {{--                        </aside>--}}

                        <aside class="widget widget_categories">
                            <h4 class="widget-title">@lang('miniblog.Categories')</h4>
                            <ul>
                                @foreach($categories as $cat )
                                    <li><a href="{{route('miniblog.category',$cat->id)}}">
                                            @if(session('lang')=='ja')
                                                {{$cat->title}}
                                            @else
                                                {{$cat->title_pt}}
                                            @endif


                                        </a></li>
                                @endforeach
                                <ul>
                                    <li><a href="{{route('miniblog')}}">
                                            @lang('miniblog.View All')

                                        </a></li>
                                </ul>
                            </ul>
                        </aside>

                        {{--                        <aside class="widget widget_archive">--}}
                        {{--                            <h4 class="widget-title">Archives</h4>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="#">January 2018 (8)</a></li>--}}
                        {{--                                <li><a href="#">February 2018 (6)</a></li>--}}
                        {{--                                <li><a href="#">December 2016 (5)</a></li>--}}
                        {{--                                <li><a href="#">October 2016 (3)</a></li>--}}
                        {{--                                <li><a href="#">May 2016 (8)</a></li>--}}
                        {{--                                <li><a href="#">August 2015 (7)</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </aside>--}}

                        {{--                        <aside class="widget widget_recent_entries">--}}
                        {{--                            <h4 class="widget-title">Recent Blogs</h4>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="#">Hello world!</a></li>--}}
                        {{--                                <li><a href="#">zodiac Sign</a></li>--}}
                        {{--                                <li><a href="#">cultures look</a></li>--}}
                        {{--                                <li><a href="#">symbolic associations</a></li>--}}
                        {{--                                <li><a href="#">outer planets</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </aside>--}}

                        {{--                        <aside class="widget widget_tag_cloud">--}}
                        {{--                            <h4 class="widget-title">Tags</h4>--}}
                        {{--                            <a href="#" class="ed_btn">Zodiac</a>--}}
                        {{--                            <a href="#" class="ed_btn">Planets</a>--}}
                        {{--                            <a href="#" class="ed_btn">stars</a>--}}
                        {{--                            <a href="#" class="ed_btn">astrology</a>--}}
                        {{--                            <a href="#" class="ed_btn">Earth</a>--}}
                        {{--                            <a href="#" class="ed_btn">moon</a>--}}
                        {{--                            <a href="#" class="ed_btn">future</a>--}}
                        {{--                            <a href="#" class="ed_btn">magical</a>--}}
                        {{--                            <a href="#" class="ed_btn">sun</a>--}}
                        {{--                        </aside>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Blog section end-->


@stop


