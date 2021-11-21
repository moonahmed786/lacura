@extends('layouts.master')

@section('SEO')
<meta name="description" content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。">
	<meta name="keywords" content="精神的, トラウマ, 中毒, 病気, 魂の償い, 依存, 浄化, 開運, お祓い">
@stop

@section('lang')

	@if(request()->session()->get('lang') == 'en' )

		<meta http-equiv="refresh" content="0;{{url('/')}}/change-lang/ja/">

	@elseif(request()->session()->get('lang') == 'pt' )

	<meta http-equiv="refresh" content="0;{{url('/')}}/change-lang/ja/">

	@else

						<div class="col-xl-12">
							<div class="lang-wrapper">
								<div class="lang">
									<a href="/" class=" active ">
										<img src="{{url('/')}}/assets/images/1560174798.png">
										日本語
									</a>
								</div>
								<div class="lang">
									<a href="/pt-br/" class="">
										<img src="{{url('/')}}/assets/images/1560174834.png">
										Português
									</a>
								</div>
															
							</div>
						</div>

	@endif
                    
@stop

@section('facebook')	
	<meta property="og:title" content="La Cura - 奇跡 {{  '| '.__($pt) }}"/>
    <meta property="og:site_name" content="La Cura - 奇跡 {{  '| '.__($pt) }}"/>
    <meta property="og:description" content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="100" />
@stop

@section('titulo')	
	<title>La Cura - 奇跡 {{  '| '.__($pt) }}</title>
@stop

@section('content')
    @if(activeTemp()  == 1)
    <!-- page title begin-->
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <h2 class="extra-margin">{{__($know->title)}}</h2>

                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- blog post begin-->
    <div class="blog-post single-blog-post">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-8">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="single-blog blog-details">
                                <div class="post-shadow">
                                    <div class="part-img">
                                        <img src="{{asset('assets/images/blog/'.$know->image)}}" alt="">
                                    </div>
                                    <div class="part-text">
                                        <h3><a href="{{url()->current()}}">{{__($know->title)}}</a></h3>
                                        <h4>
                                            <span class="admin">@lang('By Admin') </span>.
                                        <!--    <span class="date">{{date('d M, Y', strtotime($know->created_at)) }} </span>. -->
                                            <span class="date">{{date('Y年n月j日', strtotime($know->created_at)) }} </span>.
                                        </h4>
                                        <p>{!! $know->text !!}</p>

                                        <br>
                                        <div class="post-share-area"><!-- post share area -->
                                            <!-- //.left content area -->
                                            <div class="right-conent-area list-inline"><!-- eight content area -->
                                                <ul class="share">
                                                    <li  class="list-inline-item">@lang('Share'):</li>
                                                    <li  class="list-inline-item">
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(url()->current()) }}">
                                                            <i class="fa fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li  class="list-inline-item">
                                                        <a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{urlencode(url()->current()) }}">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li  class="list-inline-item">
                                                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{urlencode(url()->current()) }}&amp;title=my share text&amp;summary=dit is de linkedin summary">
                                                            <i class="fa fa-linkedin"></i>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div><!-- //.eight content area -->
                                        </div><!-- //.post share area -->
                                    </div>


                                </div>

                                {{-- <div class="comment-area" >
                                    <div class="comment-shadow" style="width: 100%">
                                        <h3 class="comment-area-title"> @lang('Comments')</h3>
                                            <div class="comment-list" style="width: 100%">
                                                <div id="fb-root"></div>
                                                <script>(function(d, s, id) {
                                                        var js, fjs = d.getElementsByTagName(s)[0];
                                                        if (d.getElementById(id)) return;
                                                        js = d.createElement(s); js.id = id;
                                                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1421567158073949";
                                                        fjs.parentNode.insertBefore(js, fjs);
                                                    }(document, 'script', 'facebook-jssdk'));
                                                </script>
                                                <div class="fb-comments" data-href="{{ url()->current() }}" data-width="100%" data-numposts="5"></div>
                                            </div>
                                    </div>

                                </div> --}}


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12">

                    <div class="sidebar">
                        <div class="row">

                            <div class="col-xl-12 col-lg-12 col-md-6">
                                <div class="widget widget-popular-post">
                                    <h6 class="widgettitle">
                                        <span>@lang('Related Posts')</span>
                                    </h6>
                                    @foreach($know_rev as $data)

                                        <div class="single-post">
                                            <div class="part-img">
                                                <img src="{{asset('assets/images/blog/'.$data->image)}}" alt="">
                                            </div>
                                            <div class="part-text">
                                                <h4><a href="{{route('blog.detail', ['id'=>$data->id,'any'=> Replace($data->title)])}}">{{__($data->title)}}</a></h4>
                                                <h5>{{date('d M, Y', strtotime($data->created_at)) }}</h5>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>


                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- blog post end -->
    @elseif(activeTemp()  == 2)
        <section class="tools-section pranto-tool">
            <div class="thm-container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="tools-content pranto-bread">
                            <h3>{{__($know->title)}}</h3>
                        </div><!-- /.tools-content -->
                    </div><!-- /.col-md-6 -->

                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </section><!-- /.tools-section -->

        <div class="blog-post single-blog-post">
            <div class="container">
                <div class="row">

                    <div class="col-xl-8 col-lg-8">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="single-blog blog-details">
                                    <div class="post-shadow">
                                        <div class="part-img">
                                            <img src="{{asset('assets/images/blog/'.$know->image)}}" alt="">
                                        </div>
                                        <div class="part-text">
                                            <h3><a href="{{url()->current()}}">{{__($know->title)}}</a></h3>
                                            <h4>
                                                <span class="admin">@lang('By Admin') </span>.
                                                <span class="date">{{date('d M, Y', strtotime($know->created_at)) }} </span>.
                                            </h4>
                                            <p>{!! $know->text !!}</p>

                                            <br>
                                            <div class="post-share-area"><!-- post share area -->
                                                <!-- //.left content area -->
                                                <div class="right-conent-area list-inline"><!-- eight content area -->
                                                    <ul class="share">
                                                        <li  class="list-inline-item">@lang('Share'):</li>
                                                        <li  class="list-inline-item">
                                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(url()->current()) }}">
                                                                <i class="fa fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li  class="list-inline-item">
                                                            <a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{urlencode(url()->current()) }}">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li  class="list-inline-item">
                                                            <a href="https://plus.google.com/share?url={{urlencode(url()->current()) }}">
                                                                <i class="fa fa-google"></i>
                                                            </a>
                                                        </li>
                                                        <li  class="list-inline-item">
                                                            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{urlencode(url()->current()) }}&amp;title=my share text&amp;summary=dit is de linkedin summary">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div><!-- //.eight content area -->
                                            </div><!-- //.post share area -->
                                        </div>


                                    </div>

                                    <div class="comment-area" >
                                        <div class="comment-shadow" style="width: 100%">
                                            <h3 class="comment-area-title"> @lang('Comments')</h3>
                                            <div class="comment-list" style="width: 100%">
                                                <div id="fb-root"></div>
                                                <script>(function(d, s, id) {
                                                        var js, fjs = d.getElementsByTagName(s)[0];
                                                        if (d.getElementById(id)) return;
                                                        js = d.createElement(s); js.id = id;
                                                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1421567158073949";
                                                        fjs.parentNode.insertBefore(js, fjs);
                                                    }(document, 'script', 'facebook-jssdk'));
                                                </script>
                                                <div class="fb-comments" data-href="{{ url()->current() }}" data-width="100%" data-numposts="5"></div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12">

                        <div class="sidebar">
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="widget widget-popular-post">
                                        <h6 class="widgettitle">
                                            <span>@lang('Related Posts')</span>
                                        </h6>
                                        @foreach($know_rev as $data)

                                            <div class="single-post">
                                                <div class="part-img">
                                                    <img src="{{asset('assets/images/blog/'.$data->image)}}" alt="">
                                                </div>
                                                <div class="part-text">
                                                    <h4><a href="{{route('blog.detail', ['id'=>$data->id,'any'=> Replace($data->title)])}}">{{__($data->title)}}</a></h4>
                                                    <h5>{{date('d M, Y', strtotime($data->created_at)) }}</h5>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    @elseif(activeTemp()  == 3)
        <!--Start Page Content-->
        <section class="page-content">
            <!--Start Page Heading-->
            <div class="page-heading page-heading-bg faq-page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1 class="title">{{__($know->title)}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Heading-->

            <!--Start Blog Wrap-->
            <div class="blog-single-wrap blog-single-page">
                <!--Start Container-->
                <div class="container">
                    <!--Start Row-->
                    <div class="row">
                        <!--Start Blog Post Col-->
                        <div class="col-md-8">
                            <!--Start div-->

                            <div class="blog-post">
                                <div class="post-media">
                                    <img class="img-responsive" src="{{asset('assets/images/blog/'.$know->image)}}" alt="image">
                                </div>
                                <div class="post-meta">
                                    <h2 class="post-title">{{__($know->title)}}</h2>
                                    <span><a href="{{url()->current()}}"><i class="icofont icofont-ui-calendar"></i> {{date('d M, Y', strtotime($know->created_at)) }}</a></span>
                                </div>
                                <div class="post-content">
                                    <blockquote class="blocquote">
                                        <p>{!! $know->text !!}</p>
                                    </blockquote>
                                </div>
                            </div>

                            <!--End div-->
                            <div class="blog-social">
                                <h4 class="title">@lang('Share Post'):</h4>
                                <ul>
                                    <li><a class="fb" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(url()->current()) }}">Facebook</a></li>
                                    <li><a class="tw" href="https://twitter.com/intent/tweet?text=my share text&amp;url={{urlencode(url()->current()) }}">Twitter</a></li>
                                    <li><a class="gp" href="https://plus.google.com/share?url={{urlencode(url()->current()) }}">Google Plus</a></li>
                                    <li><a class="lk" href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{urlencode(url()->current()) }}&amp;title=my share text&amp;summary=dit is de linkedin summary">Linkedin</a></li>
                                </ul>
                            </div>
                            <!--Start Blog Comments-->
                            <div class="post-comments">
                                <h3 class="title">@lang('Comments')</h3>
                                <!--Start Comments List-->
                                <div class="comment-list" style="width: 100%">
                                    <div id="fb-root"></div>
                                    <script>(function(d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) return;
                                            js = d.createElement(s); js.id = id;
                                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1421567158073949";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));
                                    </script>
                                    <div class="fb-comments" data-href="{{ url()->current() }}" data-width="100%" data-numposts="5"></div>
                                </div>
                                <!--End Comments List-->
                            </div>
                            <!--End Blog Comments-->
                        </div>
                        <!--End Blog Post Col-->

                        <!--Start Blog Sidebar Col-->
                        <div class="col-md-4">
                            <!--Start Sidebar-->
                            <div class="blog-sidebar">

                                <!--Start Recent Post-->
                                <div class="recent-post-widget widget">
                                    <h3 class="widget-title">@lang('Related Posts')</h3>
                                    <div class="widget-body">
                                        @foreach($know_rev as $data)
                                        <div class="recent-post-item">
                                            <div class="thumb">
                                                <a href="{{route('blog.detail', ['id'=>$data->id,'any'=> Replace($data->title)])}}"><img src="{{asset('assets/images/blog/'.$data->image)}}" style="max-width: 80px" class="img-responsive" alt="Image"></a>
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><a href="{{route('blog.detail', ['id'=>$data->id,'any'=> Replace($data->title)])}}">{{__($data->title)}}</a></h4>
                                                <span><i class="icofont icofont-ui-calendar"></i> {{date('d M, Y', strtotime($data->created_at)) }}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!--End Recent Post-->

                            </div>
                            <!--End Sidebar-->
                        </div>
                        <!--End Blog Sidebar Col-->
                    </div>
                    <!--End Row-->
                </div>
                <!--End Container-->
            </div>
            <!--End Blog Wrap-->

        </section>
        <!--End Page Content-->
    @elseif(activeTemp()  == 4)
        <!-- breadcrump begin-->
        <div class="hyip-breadcrump" style="background-image: url({{asset('assets/images/bred.jpg')}}); background-size: cover; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="breadcrump-title text-center">
                            <h2 class="add-space">{{__($know->title)}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrump end -->

        <!-- blog begin -->
        <div class="blog-area">
            <div class="container">
                <div class="row">

                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details-area">
                            <div class="part-img">
                                <img src="{{asset('assets/images/blog/'.$know->image)}}" alt="">
                            </div>
                            <div class="part-text">
                                <h2>{{__($know->title)}}</h2>
                                <p>{!! $know->text !!}</p>
                            </div>

                            <div class="part-meta text-center">
                                <ul>
                                    <li><a class="fb" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(url()->current()) }}">Facebook</a></li>
                                    <li><a class="tw" href="https://twitter.com/intent/tweet?text=my share text&amp;url={{urlencode(url()->current()) }}">Twitter</a></li>
                                    <li><a class="gp" href="https://plus.google.com/share?url={{urlencode(url()->current()) }}">Google Plus</a></li>
                                    <li><a class="lk" href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{urlencode(url()->current()) }}&amp;title=my share text&amp;summary=dit is de linkedin summary">Linkedin</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="comments-area">
                            <h3>@lang('Comments')</h3>
                            <div class="single-comment">
                                <div class="comment-list" style="width: 100%">
                                    <div id="fb-root"></div>
                                    <script>(function(d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) return;
                                            js = d.createElement(s); js.id = id;
                                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1421567158073949";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));
                                    </script>
                                    <div class="fb-comments" data-href="{{ url()->current() }}" data-width="100%" data-numposts="5"></div>
                                </div>
                            </div>


                        </div>


                    </div>


                    <div class="col-xl-4 col-lg-5">
                        <div class="row">

                            <div class="col-xl-12 col-lg-12 col-md-6">

                                <div class="single-widget" id="recent-post">
                                    <h3>@lang('Related Posts')</h3>

                                    @foreach($know_rev as $data)
                                    <div class="single-recent">
                                        <div class="part-img">
                                            <img style="max-width: 360px; max-height: 240px" src="{{asset('assets/images/blog/'.$data->image)}}" alt="{{$data->title}}">
                                        </div>
                                        <div class="part-text">
                                            <h4><a href="{{route('blog.detail', ['id'=>$data->id,'any'=> Replace($data->title)])}}">{{__($data->title)}}</a></h4>
                                            <span>{{date('d M, Y', strtotime($data->created_at)) }}</span>
                                        </div>
                                    </div><br>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- blog end -->
    @endif
@stop
