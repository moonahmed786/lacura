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
                    <h2 class="extra-margin">{{__($general->blog_title)}}</h2>
                    <p>{{__($general->blog_sub_title)}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- blog post begin-->
    <div class="blog-post">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    @foreach($know->chunk(2) as $chunk)
                    <div class="row">
                        @foreach($chunk as $data)
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-blog">
                                <div class="part-img">
                                    <img src="{{asset('assets/images/blog/'.$data->image)}}" alt="">
                                </div>
                                <div class="part-text">
                                    <h3><a href="{{route('blog.detail', ['id'=>$data->id,'any'=> Replace($data->title)])}}">{{__($data->title)}}</a></h3>
                                    <h4>
                                        <span class="admin">@lang('By Admin') </span>.
                                        <!--    <span class="date">{{date('d M, Y', strtotime($know->created_at)) }} </span>. -->
                                        <span class="date">{{date('Y年n月j日', strtotime($know->created_at)) }} </span>.

                                    </h4>
                                    <p>{{short_text($data->text, 50)}}</p>
                                    <a class="read-more" href="{{route('blog.detail', ['id'=>$data->id,'any'=> Replace($data->title)])}}"><span><i class="fas fa-book-reader"></i></span>@lang('続きを読む')</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach

                   <div class="row">
                       <div class="col-md-12">
                           {{$know->links()}}
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
                            <h3>{{__($general->blog_title)}}</h3>
                            <p>{{__($general->blog_sub_title)}}</p>
                        </div><!-- /.tools-content -->
                    </div><!-- /.col-md-6 -->

                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </section><!-- /.tools-section -->


        <div class="blog-post">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        @foreach($know->chunk(2) as $chunk)
                            <div class="row">
                                @foreach($chunk as $data)
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="single-blog">
                                            <div class="part-img">
                                                <img src="{{asset('assets/images/blog/'.$data->image)}}" alt="">
                                            </div>
                                            <div class="part-text">
                                                <h3><a href="{{route('blog.detail', ['id'=>$data->id,'any'=> Replace($data->title)])}}">{{__($data->title)}}</a></h3>
                                                <h4>
                                                    <span class="admin">@lang('By Admin') </span>.
                                                    <span class="date">{{date('d M, Y', strtotime($data->created_at)) }} </span>.

                                                </h4>
                                                <p>{{short_text($data->text, 50)}}</p>
                                                <a class="read-more" href="{{route('blog.detail', ['id'=>$data->id,'any'=> Replace($data->title)])}}"><span><i class="fas fa-book-reader"></i></span> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach

                        <div class="row">
                            <div class="col-md-12">
                                {{$know->links()}}
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
                        <div class="col-lg-12">
                            <h1 class="title">{{__($general->blog_title)}}</h1>
                            <p>{{__($general->blog_sub_title)}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Heading-->

            <!--Start Blog Wrap-->
            <div class="blog-wrap blog-page">
                <!--Start Container-->
                <div class="container">
                    <!--Start Blog Post Row-->
                    <div class="row">
                        <div class="col-md-8">

                        @foreach($know as $data)
                            <!--Start Blog Post-->
                            <div class="single-blog-post">
                                <div class="post-media">
                                    <a href="{{route('blog.detail', ['id'=>$data->id,'any'=> Replace($data->title)])}}"><img class="img-responsive" src="{{asset('assets/images/blog/'.$data->image)}}" alt="image"></a>
                                </div>

                                <div class="content">
                                    <div class="post-meta">
                                        <h2 class="post-title">
                                            <a href="{{route('blog.detail', ['id'=>$data->id,'any'=> Replace($data->title)])}}">General House Construction</a>
                                        </h2>
                                        <span><a href=""><i class="icofont icofont-ui-calendar"></i> {{date('d M, Y', strtotime($data->created_at)) }} </a></span>

                                    </div>
                                    <div class="post-content">
                                        <p>{{short_text($data->text, 50)}} </p>
                                        <a href="{{route('blog.detail', ['id'=>$data->id,'any'=> Replace($data->title)])}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Blog Post-->
                        @endforeach

                            <!--End Blog Post-->
                            <!--Start Pagination-->
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="blog-pagination text-center">
                                    {{$know->links()}}
                                    </div>
                                </div>
                            </div>
                            <!--End Pagination-->
                        </div>

                        <!--Start Blog Sidebar Col-->
                        <div class="col-md-4">

                                <!--Start Recent Post-->
                                <div class="recent-post-widget widget">
                                    <h3 class="widget-title">@lang('Related Posts')</h3>
                                    <div class="widget-body">
                                        @foreach($know_rev as $data)
                                        <div class="recent-post-item" style="margin-top: 20px;">
                                            <div class="thumb">
                                                <a href="{{route('blog.detail', ['id'=>$data->id,'any'=> Replace($data->title)])}}"><img style="max-width: 80px" src="{{asset('assets/images/blog/'.$data->image)}}" class="img-responsive" alt="Blog Image"></a>
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><a href="{{route('blog.detail', ['id'=>$data->id,'any'=> Replace($data->title)])}}">{{__($data->title)}}</a></h4>
                                                <span><i class="icofont icofont-ui-calendar"></i> {{date('d M, Y', strtotime($data->created_at)) }}</span>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                                <!--End Recent Post-->


                            </div>
                            <!--End Sidebar-->
                        </div>
                        <!--End Blog Sidebar Col-->
                    </div>
                    <!--End Blog Post Row-->
                </div>
                <!--End Container-->
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
                            <h2 class="add-space">{{__($general->blog_title)}}</h2>
                            <span>{{__($general->blog_sub_title)}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrump end -->

        <!-- blog begin -->
        <div class="blog-area blog-grid-page">
            <div class="container">
                @foreach($know->chunk(3) as $chunk)
                <div class="row">
                    @foreach($chunk as $data)
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-blog">
                            <div class="part-img">
                                <img src="{{asset('assets/images/blog/'.$data->image)}}" alt="{{$data->title}}">

                            </div>
                            <div class="part-text">
                                <span>{{date('d M, Y', strtotime($data->created_at)) }}</span>
                                <h3><a href="{{route('blog.detail', ['id'=>$data->id,'any'=> Replace($data->title)])}}">Complete Corporate Office near that to sabestian villa</a></h3>
                                <p>{{short_text($data->text, 50)}}</p>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
                <div class="row">
                    <div class="col-md-12">
                        {{$know->links()}}
                    </div>
                </div>
            </div>
        </div>
        <!-- blog end -->
    @endif
@stop
