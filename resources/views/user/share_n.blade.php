@extends('layouts.user_layout')

@section('SEO')
    <meta name="description" content="投資参加との治療プランの仕組み">
    <meta name="keywords" content="投資、プラン、治療、参加">
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
                    <a href="/questions" class=" active ">
                        <img src="{{url('/')}}/assets/images/1560174798.png">
                        日本語
                    </a>
                </div>
                <div class="lang">
                    <a href="/pt-br/questions" class="">
                        <img src="{{url('/')}}/assets/images/1560174834.png">
                        Português
                    </a>
                </div>

            </div>
        </div>

    @endif

@stop

@section('titulo')
    <title>La Cura - 奇跡 | について</title>
@stop
@section('header')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/forms/theme-checkbox-radio.css")}}">
    <link href="{{asset("assets/plugins/lightbox/photoswipe.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/plugins/lightbox/default-skin/default-skin.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/plugins/lightbox/custom-photswipe.css")}}" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
@endsection
@section('content')
    <!--  BEGIN MAIN CONTAINER  -->

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">


                <div class="col-xl-12 col-lg-12 col-sm-12  ">
                    <div class="widget-content widget-content-area ">
                        <h1>@lang('user_dashboard.Share (Post)')</h1>


                        <!-- slider begin-->
                        <div id="donate" class="price">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-12 col-lg-12">
                                        <ul id="slider">

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slider end -->

                        <style type="text/css">

                            #share-buttons img {
                                width: 50px;
                                padding: 10px;
                                border: 0;
                                box-shadow: 0;
                                display: inline;
                            }

                        </style>

                        <!-- treatments-2 begin -->
                        <div id="treatments-2" class="about">
                            <div class="container">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">

                                                    <div class="col-xl-12 col-lg-12">

                                                      @lang('album.This tool makes it easy') <br/>
                                                        <br/>
                                                        @lang('album.Your referral link') <b>{{url('/')}}/register/{{Auth::user()->reference_link}}</b>
                                                        <br/><br/>
                                                        <h3>@lang('album.Social media list')</h3>
                                                        <!-- I got these buttons from simplesharebuttons.com -->
                                                        <div id="share-buttons">

                                                            <!-- Buffer -->
                                                            <a href="https://bufferapp.com/add?url={{url('/')}}/register/{{Auth::user()->reference_link}}&amp;text=La Cura ・奇跡 – 今すぐに登録"
                                                               target="_blank">
                                                                <img src="{{url('/')}}/img/rs/buffer.png" alt="Buffer"/>
                                                            </a>

                                                            <!-- Digg -->
                                                            <a href="http://www.digg.com/submit?url={{url('/')}}/register/{{Auth::user()->reference_link}}"
                                                               target="_blank">
                                                                <img src="{{url('/')}}/img/rs/diggit.png" alt="Digg"/>
                                                            </a>

                                                            <!-- Email -->
                                                            <a href="mailto:?Subject=La Cura ・奇跡 – 今すぐに登録&amp;Body=治療を受けると人生を生きる、幸せになり、あなたへあなたの人生に捧げる {{url('/')}}/register/{{Auth::user()->reference_link}}">
                                                                <img src="{{url('/')}}/img/rs/email.png" alt="Email"/>
                                                            </a>

                                                            <!-- Facebook -->
                                                            <a href="http://www.facebook.com/sharer.php?u={{url('/')}}/register/{{Auth::user()->reference_link}}"
                                                               target="_blank">
                                                                <img src="{{url('/')}}/img/rs/facebook.png"
                                                                     alt="Facebook"/>
                                                            </a>

                                                            <!-- LinkedIn -->
                                                            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{url('/')}}/register/{{Auth::user()->reference_link}}"
                                                               target="_blank">
                                                                <img src="{{url('/')}}/img/rs/linkedin.png"
                                                                     alt="LinkedIn"/>
                                                            </a>

                                                            <!-- Pinterest -->
                                                            <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
                                                                <img src="{{url('/')}}/img/rs/pinterest.png"
                                                                     alt="Pinterest"/>
                                                            </a>

                                                            <!-- Print -->
                                                            <a href="javascript:;" onclick="window.print()">
                                                                <img src="{{url('/')}}/img/rs/print.png" alt="Print"/>
                                                            </a>

                                                            <!-- Reddit -->
                                                            <a href="http://reddit.com/submit?url={{url('/')}}/register/{{Auth::user()->reference_link}}&amp;title=La Cura ・奇跡 – 今すぐに登録"
                                                               target="_blank">
                                                                <img src="{{url('/')}}/img/rs/reddit.png" alt="Reddit"/>
                                                            </a>

                                                            <!-- StumbleUpon-->
                                                            <a href="http://www.stumbleupon.com/submit?url={{url('/')}}/register/{{Auth::user()->reference_link}}&amp;title=La Cura ・奇跡 – 今すぐに登録"
                                                               target="_blank">
                                                                <img src="{{url('/')}}/img/rs/stumbleupon.png"
                                                                     alt="StumbleUpon"/>
                                                            </a>

                                                            <!-- Tumblr-->
                                                            <a href="http://www.tumblr.com/share/link?url={{url('/')}}/register/{{Auth::user()->reference_link}}&amp;title=La Cura ・奇跡 – 今すぐに登録"
                                                               target="_blank">
                                                                <img src="{{url('/')}}/img/rs/tumblr.png" alt="Tumblr"/>
                                                            </a>

                                                            <!-- Twitter -->
                                                            <a href="https://twitter.com/share?url={{url('/')}}/register/{{Auth::user()->reference_link}}&amp;text=La Cura ・奇跡 – 今すぐに登録&amp;hashtags=lacura.me"
                                                               target="_blank">
                                                                <img src="{{url('/')}}/img/rs/twitter.png"
                                                                     alt="Twitter"/>
                                                            </a>

                                                            <!-- VK -->
                                                            <a href="http://vkontakte.ru/share.php?url={{url('/')}}/register/{{Auth::user()->reference_link}}"
                                                               target="_blank">
                                                                <img src="{{url('/')}}/img/rs/vk.png" alt="VK"/>
                                                            </a>

                                                            <!-- Yummly -->
                                                            <a href="http://www.yummly.com/urb/verify?url={{url('/')}}/register/{{Auth::user()->reference_link}}&amp;title=La Cura ・奇跡 – 今すぐに登録"
                                                               target="_blank">
                                                                <img src="{{url('/')}}/img/rs/yummly.png" alt="Yummly"/>
                                                            </a>

                                                            <a onclick="shareit()">@lang('album.Share on Facebook')</a>
                                                        </div>

                                                    </div>

                                                    <div class="col-xl-12 col-lg-12">
                                                     @lang('album.Upload it to SNS')
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- treatments 2 end -->
                    </div>
                </div>

            </div>

            <div class="row mt-2" id="cancel-row">
                <div class="col-lg-12 layout-spacing ">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>@lang('album.Banners')</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="1">

                                {{--                                    @foreach($albums as $album)--}}

                                {{--                                        @foreach($album->items as $item)--}}



                                {{--                                            <a class="img-1" href="{{ asset('assets/storage/album/thumb_'. $item->filename) }}" data-size="1600x1068" data-med="assets/img/lightbox-1.jpg" data-med-size="1024x683" data-author="Samuel Rohl">--}}
                                {{--                                                <img src="{{ asset('assets/storage/album/thumb_'. $item->filename) }}" alt="image-gallery">--}}
                                {{--                                                <figure>This is dummy caption. It has been placed here solely to demonstrate the look and feel of finished, typeset text.</figure>--}}
                                {{--                                            </a>--}}




                                {{--                                        @endforeach--}}
                                {{--                                    @endforeach--}}


                                @foreach($sliders as $slider)





                                    <a class="img-1"
                                       href="{{ asset('assets/images/slider') .'/'. $slider->image_name }}"
                                       data-size="1110x335" data-med="a{{ asset('assets/images/slider') .'/'. $slider->image_name }}"
                                       data-med-size="1110x335" data-author="Samuel Rohl">
                                        <img src="{{ asset('assets/images/slider') .'/'. $slider->image_name }}"
                                             alt="image-gallery">
                                        {{--                                            <figure>This is dummy caption. It has been placed here solely to demonstrate--}}
                                        {{--                                                the look and feel of finished, typeset text.--}}
                                        {{--                                            </figure>--}}
                                    </a>




                                @endforeach



                            </div>
                            <div class="style-select">
                                <h5 style="visibility: hidden;">Demo gallery style</h5>
                                <div class="radio mb-4">
                                    <div class="d-flex">
                                        <div class="n-chk">
                                            <label class="new-control new-radio radio-info">
                                                <input type="radio" id="radio-all-controls"
                                                       class="new-control-input" name="gallery-style" checked>
                                                <span class="new-control-indicator"></span>
                                                <span class="">

                                                        <span>@lang('album.All controls All controls caption, share and fullscreen buttons, tap to toggle controls')</span>
                                                    </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="radio mb-4">
                                    <div class="d-flex">
                                        <div class="n-chk">
                                            <label class="new-control new-radio radio-info">
                                                <input type="radio" id="radio-minimal-black"
                                                       class="new-control-input" name="gallery-style">
                                                <span class="new-control-indicator"></span>
                                                <span class="">

                                                        <span>@lang('album.Minimal no caption, transparent background, tap to close')</span>
                                                    </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <style>
                                .pswp__button--like {
                                    background: inherit !important;
                                }
                            </style>
                            <!-- Root element of PhotoSwipe. Must have class pswp. -->
                            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                                <!-- Background of PhotoSwipe. It's a separate element, as animating opacity is faster than rgba(). -->
                                <div class="pswp__bg"></div>

                                <!-- Slides wrapper with overflow:hidden. -->
                                <div class="pswp__scroll-wrap">
                                    <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                                    <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                                    <div class="pswp__container">
                                        <div class="pswp__item"></div>
                                        <div class="pswp__item"></div>
                                        <div class="pswp__item"></div>
                                    </div>

                                    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                    <div class="pswp__ui pswp__ui--hidden">

                                        <div class="pswp__top-bar">

                                            <!--  Controls are self-explanatory. Order can be changed. -->
                                            <div class="pswp__counter"></div>
                                            <button class="pswp__button pswp__button--close"
                                                    title="Close (Esc)"></button>
                                            <button class="pswp__button pswp__button--share" title="Share"></button>
                                            <button class="pswp__button pswp__button--fs"
                                                    title="Toggle fullscreen"></button>
                                            <button class="pswp__button pswp__button--zoom"
                                                    title="Zoom in/out"></button>
                                            <button class="pswp__button pswp__button--like" title="Like" onclick="shareit()">
                                                Like
                                            </button>

                                            <!-- element will get class pswp__preloader--active when preloader is running -->
                                            <div class="pswp__preloader">
                                                <div class="pswp__preloader__icn">
                                                    <div class="pswp__preloader__cut">
                                                        <div class="pswp__preloader__donut"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                            <div class="pswp__share-tooltip"></div>
                                        </div>
                                        <button class="pswp__button pswp__button--arrow--left"
                                                title="Previous (arrow left)">
                                        </button>
                                        <button class="pswp__button pswp__button--arrow--right"
                                                title="Next (arrow right)">
                                        </button>
                                        <div class="pswp__caption">
                                            <div class="pswp__caption__center"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>




                        </div> <div class="widget-header mt-3">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>@lang('album.Instagram Posters')</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="1">

                                {{--                                    @foreach($albums as $album)--}}

                                {{--                                        @foreach($album->items as $item)--}}



                                {{--                                            <a class="img-1" href="{{ asset('assets/storage/album/thumb_'. $item->filename) }}" data-size="1600x1068" data-med="assets/img/lightbox-1.jpg" data-med-size="1024x683" data-author="Samuel Rohl">--}}
                                {{--                                                <img src="{{ asset('assets/storage/album/thumb_'. $item->filename) }}" alt="image-gallery">--}}
                                {{--                                                <figure>This is dummy caption. It has been placed here solely to demonstrate the look and feel of finished, typeset text.</figure>--}}
                                {{--                                            </a>--}}




                                {{--                                        @endforeach--}}
                                {{--                                    @endforeach--}}



                                <?php
                                $lang = session('lang');

                                $general = App\GeneralSettings::first();
                                if ($general->in_slider_show_method == 'newest') {
                                    $slider_batch = \App\InstSlider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->orderByDesc('batch_no')->first(['batch_no']);
                                    $Ins_sliders = \App\InstSlider::where('lang', $lang)->orderBy('created_at', 'desc')->limit($general->in_slider_number)->get();
                                } else {
                                    $slider_batch = \App\InstSlider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->inRandomOrder()->first(['batch_no']);
                                    $Ins_sliders = \App\InstSlider::where('lang', $lang)->inRandomOrder()->limit($general->in_slider_number)->get();
                                }
                                ?>

                                @foreach($Ins_sliders as $inslider)

                                    <a class="img-1"
                                       href="{{ asset('assets/images/inslider') .'/'. $inslider->image_name }}"
                                       data-size="600x600" data-med="{{ asset('assets/images/inslider') .'/'. $inslider->image_name }}"
                                       data-med-size="600x600" data-author="Samuel Rohl">
                                        <img src="{{ asset('assets/images/inslider') .'/'. $inslider->image_name }}"
                                             alt="image-gallery">
                                        {{--                                            <figure>This is dummy caption. It has been placed here solely to demonstrate--}}
                                        {{--                                                the look and feel of finished, typeset text.--}}
                                        {{--                                            </figure>--}}
                                    </a>


                                @endforeach


                            </div>
                            <div class="style-select">
                                <h5 style="visibility: hidden;">gallery style</h5>
                                <div class="radio mb-4">
                                    <div class="d-flex">
                                        <div class="n-chk">
                                            <label class="new-control new-radio radio-info">
                                                <input type="radio" id="radio-all-controls"
                                                       class="new-control-input" name="gallery-style" checked>
                                                <span class="new-control-indicator"></span>
                                                <span class="">

                                                                                                            <span>@lang('album.All controls All controls caption, share and fullscreen buttons, tap to toggle controls')</span>





                                                    </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="radio mb-4">
                                    <div class="d-flex">
                                        <div class="n-chk">
                                            <label class="new-control new-radio radio-info">
                                                <input type="radio" id="radio-minimal-black"
                                                       class="new-control-input" name="gallery-style">
                                                <span class="new-control-indicator"></span>
                                                <span class="">

                                                         <span>@lang('album.Minimal no caption, transparent background, tap to close')</span>
                                                    </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>







                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN CONTENT AREA  -->

            <div class="layout-px-spacing">

            </div>

        </div>
        <!--  END CONTENT AREA  -->




@stop
@section('script')


    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('assets/plugins/lightbox/photoswipe.min.js')}}"></script>
    <script src="{{asset('assets/plugins/lightbox/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('assets/plugins/lightbox/custom-photswipe.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->


    <script type="text/javascript">
        $(document).ready(function () {
            App.init();
        });

        function shareit() {
            console.log('share');
            var url = "{{url('/')}}/register/{{Auth::user()->reference_link}}"; //Set desired URL here
            var img = "{{url('/')}}/assets/images/slider/5f2a1306d43ba1596592902.jpg"; //Set Desired Image here
            var totalurl = encodeURIComponent(url+'?&picture=' + img);
            // window.open('http://www.facebook.com/sharer.php?u=' + url+'&title=ddddd&picture='+img+'');

            window.open('http://www.facebook.com/sharer.php?u=' + totalurl,'' , 'width=500, height=500, scrollbars=yes, resizable=no');

        }
        `<a href="http://www.facebook.com/share.php?u=[URL]&title=[TITLE]&picture=[IMAGE]">FB Share</a>`
    </script>
@endsection
