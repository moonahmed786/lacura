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

    <!--Slider Start-->
    <div class="ast_slider_wrapper">
        <div class="ast_banner_text">
            <div class="starfield">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="ast_waves">
                <div class="ast_wave"></div>
                <div class="ast_wave"></div>
                <div class="ast_wave"></div>
            </div>
            <div class="ast_waves2">
                <div class="ast_wave"></div>
                <div class="ast_wave"></div>
                <div class="ast_wave"></div>
            </div>
            <div class="ast_waves3">
                <div class="ast_wave"></div>
                <div class="ast_wave"></div>
                <div class="ast_wave"></div>
            </div>
            <div class="container">
                <div class="ast_bannertext_wrapper">
                    <h1>@lang("home_page.Communicating God's Will")</h1>
                    <ul class="ast_toppadder40 ast_bottompadder50">
                        {{--                        <li>horoscopes</li>--}}
                        {{--                        <li>gemstones</li>--}}
                        {{--                        <li>numerology</li>--}}
                    </ul>
                    {{--                    <a class="ast_btn">make it now</a>--}}
                </div>
            </div>
        </div>
    </div>
    <!--Slider End-->
    <!--About Us Start-->
    <div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">
        <div class="container">
            <div class="row">
                <div
                    class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">
                        <h1>@lang('home_page.About God')</h1>
                        {{--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have--}}
                        {{--                            suffered alteration in some form, by injected hummer.</p>--}}
                    </div>
                </div>
                <div
                    class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-lg-push-7 col-md-push-7 col-sm-push-7 col-xs-push-0">
                    <div class="ast_about_info_img">
                        <img src="https://lacura.me/assets/storage/about/5d6704fa295591567032570.jpg"
                             style="  width: 60%;">
                        {{--                        @if(session('lang') == 'ja' && $general->news_ja_image)--}}
                        {{--                            <a href="{{ url('/') }}">--}}
                        {{--                                <img src="{{ asset('assets/images/blog/img') .'/'. $general->news_ja_image }}"--}}
                        {{--                                     alt="@lang('News Image')"> </a>--}}

                        {{--                        @elseif(session('lang') == 'pt-br' && $general->news_ja_image)--}}


                        {{--                            <a href="{{ url('/') }}">--}}
                        {{--                                <img src="{{ asset('assets/images/blog/img') .'/'. $general->news_pt_image }}"--}}
                        {{--                                     alt="@lang('News Image')">--}}
                        {{--                            </a>--}}

                        {{--                        @endif--}}
                    </div>
                </div>
                <div
                    class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col-lg-pull-5 col-md-pull-5 col-sm-pull-5 col-xs-pull-0">
                    <div class="ast_about_info">
                        {{--                        <h4>神について</h4>--}}
                        @if(session('lang') == 'pt-br')
                            <p> {!! $page->pt !!}</p>
                        @else
                            <p> {!! $page->ja !!}</p>

                        @endif
                        <p>{{$page->$page}}</p>

                        <a href="{{route('about')}}" class="ast_btn">@lang('home_page.Learn more')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- banner begin WD 1 -->
    <div id="home" class="banner">
        <div class="banner-content" style="display: none;">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-6 col-lg-9 d-flex align-items-center">
                        <div class="part-text">
                            <h1>{{__($general->banner_title)}}</h1>
                            <p>{{__($general->banner_sub_title)}}</p>
                            @guest

                                <div class="row ">
                                    <div class="col-md-6 text-center">
                                        <a href="{{url('login')}}">@lang('home_page.Sign In')</a>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <a href="{{url('register')}}">@lang('home_page.Register')</a>
                                    </div>
                                </div>
                            @else

                                <a href="{{url('/home')}}">@lang('home_page.Dashboard')</a>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">@lang('home_page.Logout')</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            @endguest

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 ">
                        <div class="part-img">
                            <img src="{{asset('assets/images/banner.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->
    @include('front.partials.slider_n')

    {{--		@include('front.partials.slider')--}}

    <!--Services Start-->
    <div class="ast_service_wrapper ast_toppadder70 ast_bottompadder50">
        <div class="container">
            <div class="row">
                <div
                    class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">
                        <h1><span> @lang('home_page.Our Services')</span></h1>
                        <p>@lang('home_page.Heal and forget all your anger')</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ast_service_slider">
                        <div class="owl-carousel owl-theme">
                            @foreach($know as $know1)

                                <div class="item">
                                    <div class="ast_service_box">
                                        <img src="{{asset('assets/images/blog')}}/{{$know1->image}}"  style="max-width: 120px ; max-height: 120px " alt="Service">
                                       <br> <a style="font-size: 10px" href="{{($know1->link) ?? route('blog.detail', $know1->id, str_slug(__($know1->title) )) }}">
                                            @if(session('lang') == 'pt-br')

                                                {{--                                    <p>{!!  !!}</p>--}}
                                                {!!   str_limit($know1->header_pt , $limit = 50, $end = '...') !!}

                                            @else
                                                {!!  str_limit($know1->title , $limit = 100, $end = '...') !!}

                                            @endif


                                        </a>
                                        <p style="font-size: 10px" >
                                            @if(session('lang') == 'pt-br')

                                                {{--                                    <p>{!!  !!}</p>--}}
                                                {!!   str_limit($know1->textpt , $limit = 100, $end = '...') !!}

                                            @else
                                                {!!  str_limit($know1->text , $limit = 100, $end = '...') !!}

                                            @endif
                                        </p>
                                        <div class="clearfix"></div>
                                        <a href="{{$know1->link}}" class="ast_btn">@lang('home_page.Learn more')</a>
                                    </div>
                                </div>





                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--Services End-->

    <!--About Us Start-->
    <div class="ast_about_wrapper  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-push-7 col-md-push-7 col-sm-push-0 col-xs-push-0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="ast_vedic_astrology">
                            <div class="">
                                <section class="swiper-container loading" id="inswiper-container_serv">
                                    <div class="swiper-wrapper">

                                        <?php
                                        $lang = session('lang');

                                        $general = App\GeneralSettings::first();
                                        if ($general->in_slider_show_method == 'newest') {
                                            $slider_batch = \App\InstSlider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->orderByDesc('batch_no')->first(['batch_no']);
                                            $Ins_sliders = \App\InstSlider::where('batch_no', $slider_batch['batch_no'])->where('lang', $lang)->orderBy('created_at', 'desc')->limit($general->in_slider_number)->get();
                                        } else {
                                            $slider_batch = \App\InstSlider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->inRandomOrder()->first(['batch_no']);
                                            $Ins_sliders = \App\InstSlider::where('batch_no', $slider_batch['batch_no'])->where('lang', $lang)->inRandomOrder()->limit($general->in_slider_number)->get();
                                        }
                                        ?>

                                        @foreach($Ins_sliders as $inslider)
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/inslider') .'/'. $inslider->image_name }}"
                                                     alt="{{$inslider->image_name}}" class="img-responsive"/>
                                                <div class="content">
                                                    {{--                @if(($general->slider_text && session('lang') == 'ja') || ($general->slider_textpt && session('lang') == 'pt-br'))--}}

                                                    {{--                    <span class="caption" data-swiper-parallax="-20%">--}}
                                                    {{--                        @if(session('lang') == 'ja')--}}
                                                    {{--                            {!! $general->slider_text !!}--}}
                                                    {{--                        @else--}}
                                                    {{--                            {!! $general->slider_textpt !!}--}}
                                                    {{--                        @endif--}}

                                                    {{--</span>--}}
                                                    {{--                @endif--}}
                                                    {{--                <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Shaun Matthews</p>--}}
                                                    {{--                <span class="caption" data-swiper-parallax="-20%">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>--}}
                                                </div>
                                                <div
                                                    style="   background: #25d5be; max-width: 130px; border-radius: 33%; justify-content: center;">

                                                    <span>@lang('home_page.Share'):</span>
                                                    <span
                                                        data-href="{{ asset('assets/images/slider') .'/'. $inslider->image_name }}"
                                                        data-layout="button_count" data-size="small"><a target="_blank"
                                                                                                        href="https://www.facebook.com/sharer/sharer.php?u={{ asset('assets/images/slider') .'/'. $inslider->image_name }}&amp;src=sdkpreparse"
                                                                                                        class="fb-xfbml-parse-ignore"><i
                                                                class="fa fa-fw fa-facebook"></i></a></span>
                                                    <span><a class="twitter-share-button"
                                                             href="https://twitter.com/intent/tweet?text={{ $general->sitename }}&amp;url={{ asset('assets/images/slider') .'/'. $inslider->image_name }}"
                                                             target="_blank"><i class="fa fa-fw fa-twitter"></i></a></span>
                                                    <span><a class="linkedinShareBtn"
                                                             href="http://www.linkedin.com/shareArticle?mini=true&url={{ url('/') }}&title={{ $general->sitename }}&summary={{ $inslider->title }}"
                                                             data-image="{{ $inslider->image_name }}"
                                                             data-title="{{ $inslider->title }}" target="_blank"><i
                                                                class="fa fa-fw fa-linkedin"></i></a></span>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>


                                    <!-- If we need pagination -->
                                    <div class="swiper-pagination" id="inswiper-pagination"></div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev swiper-button-white" id="inswiper-button-prev"></div>
                                    <div class="swiper-button-next swiper-button-white" id="#inswiper-button-next"></div>
                                </section>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-lg-pull-5 col-md-pull-5 col-sm-pull-0 col-xs-pull-0">
                    <div class="ast_about_info">
                <?php $blogdata= \App\Miniblog::where('Status',1)->latest('id')->first()
                        ?>
                        @if(session('lang') == 'pt-br')
                            <h4> {{ $blogdata->title_pt }}</h4>

                        {!!   str_limit($blogdata->description_pt  , $limit = 900, $end = '...') !!}

                        @else
                            <h4> {{ $blogdata->title_ja }}</h4>

                        {!!   str_limit($blogdata->description_ja  , $limit = 900, $end = '...') !!}

                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--About Us End-->

    <!--Services Start-->
    <div class="ast_service_wrapper ">
        <div class="container">
            <div class="row">
                <div
                    class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">

{{--                        <h2>{{ __($general->gallery_title) }}</h2>--}}
{{--                        <p>{{ __($general->gallery_detail) }}</p>--}}
                    </div>
                </div>
                <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                    <div class="ast_service_slider">
                        <div class="owl-carousel owl-theme row">
                            @foreach($album_items as $item)

                                <div class="col text-center">

                                    <a href="{{route('user.album')}}">

                                        @if($item->filetype == 1)

                                            <img src="{{ asset('assets/storage/album/thumb_'. $item->filename) }}"
                                                 data-src="{{ asset('assets/storage/album/thumb_'. $item->filename) }}"
                                                 alt="" class="img-thumbnail" style="min-height: 300px">

                                        @else
                                            <video src="{{ 'assets/storage/album'.'/'. $item->filename }}"></video>

                                        @endif
                                    </a>


                                    {{--                                        <a href="service_single.html" class="ast_btn">read more</a>--}}
                                </div>


                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ast_palm_wrapper   ast_toppadder30 ">
        <div class="container">
            <div class="row">
                <div
                    class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">
                        <h1><span>{{session('lang')=='ja'?'
すべてのコメント':'
Todos os Comentários'}}</span></h1>
                    </div>
                </div>

                @php
                    $count= 0;
                @endphp
                @foreach($homecomment as $comment)
                    @php
                        $count += 1;
                    @endphp
                    @if($count % 2 == 0)
                        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1  mb-2">
                            <div class="ast_palm_section">
                                <div class="ast_palm_img">
                                    <img class="img-fluid" alt="" src="{{url('/')}}/assets/images/user/no_user.png">
                                    <img src="" alt="" class="img-responsive">
                                </div>
                                <div class="ast_palm_content mb-2">
                                    <a href="/allcomments">
                                        <h4>{{ \Carbon\Carbon::parse($comment->updated_at)->format('F dS, Y ') }}</h4>
                                        <p>  {{$comment->comment}}</p>
                                    </a>


                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12  mt-2">
                            <div class="ast_palm_section ast_palm_right">
                                <div class="ast_palm_img">
                                    <img class="img-fluid" alt="" src="{{url('/')}}/assets/images/user/no_user.png">


                                </div>
                                <div class="ast_palm_content">
                                    <a href="/allcomments">
                                        <h4>{{ \Carbon\Carbon::parse($comment->updated_at)->format('F dS, Y ') }}</h4>
                                        <p>  {{$comment->comment}}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif


                @endforeach

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mb-3">
                    <a class="ast_btn" href="/allcomments"
                    >{{session('lang')=='ja'?'すべてのコメントを見る':'Ver todos os comentários'}}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="faq" id="faq" style="display:none;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="section-title">
                        <h2 class="add-space">よくあるご質問</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <h5 class="mb-0">
                                        <p class="pranto-break">新規登録は、紹介によって登録できます。紹介がなければ直接登録してください。</p>
                                        <p class="pranto-break">抽選機能がついており、他のお客様が登録された際に、ランダムで割り振る機能が付いています。</p>
                                    </h5>
                                    <br>
                                    <a href="/questions" class="btn btn-info detailbtn">もっと見る</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq end -->

    <!-- page title end -->
    <div class="container " style="display: none">
        @if(session('lang')=='ja')
            <div class="row" style="padding: 80px 0px;">
                @foreach($allblogs as $blogs)
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img" src="assets/images/blog/{{$blogs->image}}" style="height: 300px;">
                            <div class="card-body">
                                <h2 class="card-title">{{$blogs->title_ja}}</h2>
                                <p class="card-text">{!! str_limit($blogs->description_ja,300), $end = '...' !!}</p>
                                <a href="{{ route('miniblogdetail.front',$blogs->id)}}" class="btn btn-info detailbtn">もっと見る</a>
                            </div>
                            <div
                                class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                            <!--    <div class="views">{{$blogs->created_at}}</div>   -->
                                <div
                                    class="views">{{date('Y年n月j日' . ' ' . 'g:i午後', strtotime($blogs->created_at)) }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        @else

            <div class="row" style="padding: 80px 0px;">
                @foreach($allblogs as $blogs)
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img" src="assets/images/blog/{{$blogs->image}}" style="height: 300px;">
                            <div class="card-body">
                                <h2 class="card-title">{{$blogs->title_pt}}</h2>
                                <p class="card-text">{!! str_limit($blogs->description_pt,300), $end = '...' !!}</p>
                                <a href="{{ route('miniblogdetail.front',$blogs->id)}}" class="btn btn-info detailbtn">Leia
                                    Mais</a>
                            </div>
                            <div
                                class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                            <!--    <div class="views">{{$blogs->created_at}}</div>   -->
                                <div class="views">{{date('d/m/Y' . ' ' . 'H:i', strtotime($blogs->created_at)) }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        @endif
    </div>
    @guest
    @else
        <div class="container ">
            <div class="product_desc_tabs">
                <ul class="tabs">

                    <li class="tab-link current"
                        data-tab="tab-2"> {{session('lang')=='ja'?'コメントセクション':'Seção de comentários'}}</li>
                </ul>
                <div class="product_tab_content">
                    <form class="ast_review_form" method="post" action="{{route('submithomecomment')}}">
                        <textarea name="homecomment" rows="6"
                                  placeholder="{{session('lang')=='ja'?'コメントを書く...':'Escreva um comentário...'}}"
                                  rows="6" required></textarea>

                        @csrf
                        {{--                    <div class="row">--}}
                        {{--                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
                        {{--                            <input type="text" placeholder="Your Name">--}}
                        {{--                        </div>--}}
                        {{--                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
                        {{--                            <input type="text" placeholder="Your Email">--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}

                        <button type="submit" class="ast_btn">@lang('home_page.Submit')</button>
                    </form>
                    {{--                <div id="tab-2" class="tab_content">--}}

                    {{--                  --}}
                    {{--                </div>--}}
                </div>
            </div>

        </div>
    @endguest

    <!--Team Start-->
    <!--Team end-->
    <div class="ast_team_wrapper  ">
        <div class="container">
            <div class="row">
                <div
                    class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">
                        <h1>@lang('home_page.follower')</h1>
                        <p>{{ __($general->new_user_sub_title) }} </p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($new_users as $user)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="ast_team_box">
                            @if (file_exists(asset('assets/images/user/'.$user->image)))
                                <img class="img-fluid"  src="{{ asset('assets/images/user/'.$user->image) }}">
                            @else
                                <img  class="img-fluid" src="{{asset('assets/images/user/no_user.png') }}">
                            @endif

                            {{--                        <h4><a href="#"></a></h4>--}}
                            {{--                        <p>New User</p>--}}
                            {{--                        <ul>--}}
                            {{--                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
                            {{--                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>--}}
                            {{--                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
                            {{--                        </ul>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>



    @auth
        {{-- <div class="modal fade" id="ratingModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">@lang('Give Rating')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.album.item.rating') }}" method="post">
                        @csrf
                        <input type="hidden" name="id">
                        <input type="hidden" name="rating">
                    </form>
                    <div class="starrr rating"></div>
                </div>
            </div>
            </div>
        </div> --}}
    @endauth

@endsection

@push('light-gallery')
    {{--	<script src="{{ asset('assets/front/js/lightgallery.min.js') }}"></script>--}}
    {{--	<script src="{{ asset('assets/front/js/lg-fullscreen.js') }}"></script>--}}
    {{--	<script src="{{ asset('assets/front/js/lg-thumbnail.js') }}"></script>--}}
    {{--	<script src="{{ asset('assets/front/js/lg-video.js') }}"></script>--}}
    {{--	<script src="{{ asset('assets/front/js/lg-autoplay.js') }}"></script>--}}
    {{--	<script src="{{ asset('assets/front/js/lg-zoom.js') }}"></script>--}}
    {{--	<script src="{{ asset('assets/front/js/jquery.mousewheel.min.js') }}"></script>--}}
@endpush

@push('style-lib')
    {{--	<link rel="stylesheet" href="{{ asset('assets/front/css/lightgallery.min.css') }}">--}}
@endpush

@section('style')
    {{--	<style>--}}
    {{--		.rating a {--}}
    {{--			font-size: 2rem;--}}
    {{--			padding: 1rem;--}}
    {{--			line-height: 2rem;--}}
    {{--		}--}}
    {{--	</style>--}}
@stop

@section('script')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                newdata: {
                    subscribe_email: ''
                }
            },
            methods: {
                subsribe() {
                    var input = this.newdata;
                    axios.post('{{route('subscriber.store')}}', input).then(function (res) {
                        if (res.data.success == true) {
                            swal(res.data.message, "", "success");
                            app.newdata.subscribe_email = '';
                        } else {
                            swal(res.data.message, "", "warning");
                        }
                    });
                }
            },
            mounted() {
                $('.ratingBtn').on('click', function () {
                    var modal = $('#ratingModal');
                    var id = $(this).data('id');
                    modal.modal('show');
                    $('.rating').starrr({
                        rating: 0,
                        change: function (e, value) {
                            if (value) {
                                modal.find('input[name=id]').val(id);
                                modal.find('input[name=rating]').val(value);
                                modal.find('form').submit();
                            }
                        }
                    });
                });

                $('.rating_view').each(function (key, elem) {
                    $(elem).starrr({
                        rating: $(elem).data('rating'),
                        readOnly: true,
                    });
                });
                //
                // $('#imageGallery').lightGallery({
                //     thumbnail: true,
                // });

                $('.popup-video').magnificPopup({});
            }
        });
    </script>
@stop
{{--@section('footer_slider')--}}
{{--    @include('front.partials.int_slider')--}}
{{--    @endsection--}}
