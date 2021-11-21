@extends('layouts.user_layout')

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
    <meta property="og:description"
          content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="100"/>
@stop

@section('titulo')
    <title>La Cura - 奇跡 {{  '| '.__($pt) }}</title>
@stop

@section('header')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/pages/privacy/privacy.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
@stop
@section('content')
    <body class="sidebar-noneoverflow">

    <div class="fq-header-wrapper">
        <nav class="navbar navbar-expand">
            <div class="container">
                <a class="navbar-brand" href="https://lacura.test"><img style="max-width: 38% !important;" alt="logo image" src=" https://lacura.test/assets/images/logo/logo.png ">
                    <span class="navbar-brand-name"></span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">

                            <a class="nav-link" href="{{url('/')}}">@lang('ホーム')</a>
                        </li>
                        <li class="nav-item">
                            {{--                            <a class="nav-link" target="_blank" href="">Contact Us</a>--}}
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="headerWrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12 text-center mb-5">

                    </div>
                    <div class="col-md-12 col-sm-12 col-12 text-center">
                        <h2 class="main-heading">@lang('Terms.terms and conditions')</h2>
                        <p class="">@lang('Terms.Please refer to the consultation conditions')</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="faq container">

        <div class="faq-layouting layout-spacing">


            <div class="fq-comman-question-wrapper" style="display: none">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Installation Based Problems</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="">
                                    <li class="list-unstyled">
                                        <div class="icon-svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-check">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </div>
                                        How to Install CORK
                                    </li>
                                    <li class="list-unstyled">
                                        <div class="icon-svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-check">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </div>
                                        Gulp not running
                                    </li>
                                    <li class="list-unstyled">
                                        <div class="icon-svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-check">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </div>
                                        Browser Sync not working
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="">
                                    <li class="list-unstyled">
                                        <div class="icon-svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-check">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </div>
                                        File Strucutre
                                    </li>
                                    <li class="list-unstyled">
                                        <div class="icon-svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-check">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </div>
                                        Demo Detail
                                    </li>
                                    <li class="list-unstyled">
                                        <div class="icon-svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-check">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </div>
                                        Build website and webapps
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fq-tab-section">
                <div class="row">
                    <div class="col-md-12 mb-5 mt-5">

                        <h2>@lang('Terms.Some common questions')</h2>

                        <div class="accordion" id="accordionExample">
                            @foreach($know as $faq)
                                <div class="card">
                                    <div class="card-header" id="fqheading{{$faq->id}}">
                                        <div class="mb-0" data-toggle="collapse" role="navigation"
                                             data-target="#fqcollapse{{$faq->id}}" aria-expanded="false"
                                             aria-controls="fqcollapse{{$faq->id}}">
                                            <span class="fa fa-ticket"></span> <span class="faq-q-title ml-2">
                                                @if(session()->get('lang')=='pt-br')

                                                    {!! $faq->title  !!}
                                                @else
                                                    {!!$faq->title_jp!!}

                                                @endif
</span>
{{--                                            <div class="like-faq"><span class="fa fa-thumbs-up"></span> <span--}}
{{--                                                    class="faq-like-count">1</span></div>--}}
                                        </div>
                                    </div>
                                    <div id="fqcollapse{{$faq->id}}" class="collapse"
                                         aria-labelledby="fqheading{{$faq->id}}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @if(session()->get('lang')=='pt-br')
                                                <p>{!! $faq->text !!}</p>
                                            @else
                                                <p>{!! $faq->text_jp !!}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>

                    </div>
                </div>
            </div>

            <div class="fq-article-section" style="display: none">
                <h2>Popular Topics</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                        <div class="card">
                            <img src="assets/img/masonry-blog-style-3.jpg" class="card-img-top"
                                 alt="faq-video-tutorials">
                            <div class="card-body">
                                <div class="fq-rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                </div>
                                <h5 class="card-title">Coding Angular</h5>
                                <p class="card-text">Some quick example text to build on the card title.</p>
                                <p class="meta-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-calendar">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                    Jan 6, 2020
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                        <div class="card">
                            <img src="assets/img/grid-blog-style-2.jpg" class="card-img-top" alt="faq-video-tutorials">
                            <div class="card-body">
                                <div class="fq-rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                </div>
                                <h5 class="card-title">Creative Photography</h5>
                                <p class="card-text">Some quick example text to build on the card title.</p>
                                <p class="meta-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-calendar">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                    Jan 9, 2020
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                        <div class="card">
                            <img src="assets/img/list-blog-style-3.jpg" class="card-img-top" alt="faq-video-tutorials">
                            <div class="card-body">
                                <div class="fq-rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                </div>
                                <h5 class="card-title">Trending Style</h5>
                                <p class="card-text">Some quick example text to build on the card title.</p>
                                <p class="meta-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-calendar">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                    Feb 6, 2020
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="assets/img/masonry-blog-style-4.jpg" class="card-img-top"
                                 alt="faq-video-tutorials">
                            <div class="card-body">
                                <div class="fq-rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star checked">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-star">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                </div>
                                <h5 class="card-title">Latest Tweet</h5>
                                <p class="card-text">Some quick example text to build on the card title.</p>
                                <p class="meta-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-calendar">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                    Feb 7, 2020
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div id="miniFooterWrapper" class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="position-relative">
                        <div class="arrow text-center">
                            <p class="">@lang('Terms.Up')</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="assets/js/pages/faq/faq.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    </body>


@endsection
@section('script')
{{--    <script>--}}
{{--        var app = new Vue({--}}
{{--            el: '#app',--}}
{{--            data: {--}}
{{--                showData: {},--}}
{{--                newdata: {--}}
{{--                    amount: '',--}}
{{--                    wallet_type: '',--}}
{{--                    username: '',--}}
{{--                },--}}
{{--                codeData: {--}}
{{--                    code: ''--}}
{{--                },--}}
{{--                balance: {},--}}
{{--                hasmsg: '',--}}
{{--                wallet_name: null,--}}
{{--                errors: ''--}}
{{--            },--}}
{{--            computed: {--}}
{{--                amount() {--}}
{{--                    return {{intval($general->bal_trans_fixed_charge)}}+(parseInt(this.newdata.amount) * parseInt({{ intval($general->bal_trans_per_charge) }})) / 100--}}
{{--                }--}}
{{--            },--}}
{{--            methods: {--}}

{{--                wallet(val) {--}}
{{--// val == 1 (Deposit Wallet) & val == 2 (Interest Wallet)--}}
{{--                    if (val == 1) {--}}
{{--                        this.balance = '{{ Auth::user()->balance  }}';--}}
{{--                        this.wallet_name = '{{__($general->deposit_wallet_name) }}';--}}
{{--                    } else {--}}
{{--                        this.balance = '{{ Auth::user()->interest_balance }}';--}}
{{--                        this.wallet_name = '{{ __($general->interest_wallet_name) }}';--}}
{{--                    }--}}
{{--                },--}}
{{--                submitSearch() {--}}
{{--                    var input = this.newdata;--}}
{{--                    axios.post('{{route('search.user')}}', input).then(function (e) {--}}
{{--                        app.hasmsg = e.data;--}}
{{--                        if (e.data.success == true) {--}}
{{--                            $('#InputMailUser').css('box-shadow', '1px 1px 0px #039f08, 0 0 4px #039f08, 0 0 4px #039f08');--}}
{{--                            $('#bal').css('display', 'block');--}}
{{--                        } else {--}}
{{--                            $('#InputMailUser').css('box-shadow', '1px 1px 0px #de0015, 0 0 4px #de0015, 0 0 4px #de0015');--}}
{{--                            $('#bal').css('display', 'none');--}}
{{--                        }--}}
{{--                    });--}}
{{--                },--}}
{{--                submitCode() {--}}
{{--                    var input = this.codeData;--}}
{{--                    axios.post('{{route('check_two_facetor')}}', input).then(function (e) {--}}

{{--                        if (e.data.success == true) {--}}
{{--                            $("#balanceTransfer").submit();--}}
{{--                        } else {--}}
{{--                            swal(e.data.message, "", "warning");--}}
{{--                        }--}}

{{--                    }).catch(function (error) {--}}
{{--                        app.errors = error.response.data.errors.code;--}}
{{--                    })--}}
{{--                }--}}
{{--            }--}}


{{--        });--}}
{{--    </script>--}}
@stop
