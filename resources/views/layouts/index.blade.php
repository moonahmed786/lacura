<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="{{ $general->sitename }}">
    <meta charset="UTF-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R1H7N5CV2Q"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-R1H7N5CV2Q');
    </script>


    {{--   new--}}
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="MobileOptimized" content="320">
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('/index_layout/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/index_layout/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/index_layout/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/index_layout/css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/index_layout/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/index_layout/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/index_layout/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/index_layout/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
    <style>
        .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet::before, .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet, [class^=swiper-button-] {
            transition: all 0.3s ease;
        }

        *, *:before, *:after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .swiper-container {
            width: 100%;
            max-height: 500px !important;

            transition: opacity 0.6s ease;
        }

        .swiper-container.swiper-container-coverflow {
            padding-top: 2%;
        }

        .swiper-container.loading {
            opacity: 0;
            visibility: hidden;
        }

        .swiper-container:hover .swiper-button-prev,
        .swiper-container:hover .swiper-button-next {
            transform: translateX(0);
            opacity: 1;
            visibility: visible;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
        }

        .swiper-slide .entity-img {
            display: none;
        }

        .swiper-slide .content {
            position: absolute;
            top: 40%;
            left: 0;
            width: 50%;
            padding-left: 5%;
            color: #fff;
        }

        .swiper-slide .content .title {
            font-size: 2.6em;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .swiper-slide .content .caption {
            display: block;
            font-size: 13px;
            line-height: 1.4;
        }

        [class^=swiper-button-] {
            width: 44px;
            opacity: 0;
            visibility: hidden;
        }

        .swiper-button-prev {
            transform: translateX(50px);
        }

        .swiper-button-next {
            transform: translateX(-50px);
        }

        .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 9px;
            position: relative;
            width: 12px;
            height: 12px;
            background-color: #fff;
            opacity: 0.4;
        }

        .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 18px;
            height: 18px;
            transform: translate(-50%, -50%);
            border: 0px solid #fff;
            border-radius: 50%;
        }

        .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet:hover, .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active {
            opacity: 1;
        }

        .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active::before {
            border-width: 1px;
        }

        @media (max-width: 1180px) {
            .swiper-slide .content .title {
                font-size: 25px;
            }

            .swiper-slide .content .caption {
                font-size: 12px;
            }
        }

        @media (max-width: 1023px) {
            .swiper-container {
                height: 58vw;
            }

            .swiper-container .swiper-container-coverflow {
                padding-top: 0;
            }
        }

        /*.swiper-slide {*/
        /*    width: 100px;*/
        /*}*/
        .img-responsive {
            display: block;
            max-width: 100%;
            height: 92%;

        }
    </style>
    {{--    SEO--}}
    @yield('SEO')

    @yield('facebook')

    @yield('titulo')

<!-- favicon -->
    <link rel="shortcut icon" href="{{asset('index_layout/images/logo/favicon.png')}}" type="image/x-icon">
    <!-- bootstrap -->

    <!-- old -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/starrr.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/album.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/front/css/jquery-ui.min.css') }}">
    @stack('style-lib')
<!-- color by admin setting  -->
    <link rel="stylesheet"
          href="{{url('/')}}/assets/front/css/color.php?color={{$general->color}}&color2={{$general->color_two}}">

    @yield('style')
    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

</head>
<body>
<!-- Header Start -->
<div class="ast_top_header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ast_contact_details">
                    {{--                    <ul>--}}
                    {{--                        <li><i class="fa fa-phone" aria-hidden="true"></i> {{$general->phone}}</li>--}}
                    {{--                        <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{$general->email}}</a></li>--}}
                    {{--                    </ul>--}}


                </div>
                <div class="ast_autho_wrapper">
                    <ul>
                        @if (!Auth::guest())
                            <li>
                                <a href="{{route('login')}}"><i
                                        class="fa fa-sign-in"
                                    ></i> @lang('home_page.Dashboard')
                                </a>
                            </li>
                        @else

                            <li>

                                <a href="{{route('login')}}"><i
                                        class="fa fa-sign-in"
                                    ></i> @lang('home_page.Login')
                                </a>
                            </li>
{{--                            <a class="popup-with-zoom-anim" href="#login-dialog"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In</a>--}}
{{--                            <li><a href="{{route('register')}}"><i class="fa fa-user-plus"></i> @lang('Sign Up')--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        @endif
                            <div id="login-dialog" class="zoom-anim-dialog mfp-hide">
                                <h1>Login Form</h1>
                                <form>
                                    <input type="text" placeholder="Email">
                                    <input type="password" placeholder="Password">
                                    <div class="ast_login_data">
                                        <label class="tp_custom_check" for="remember_me">Remember me <input type="checkbox" name="ast_remember_me" value="yes" id="ast_remember_me"><span class="checkmark"></span>
                                        </label>
                                        <a href="#">Forgot password ?</a>
                                    </div>
                                    <button type="submit" class="ast_btn">Login</button>
                                    <p>Create An Account ? <a href="#">SignUp</a></p>
                                </form>
                            </div>

                        <li>
                            @if(session()->get('lang')=='pt-br')
                                <a href="{{url('/')}}/change-lang/ja" class=" active ">
                                    <img src="{{url('/')}}/assets/images/1560174798.png" style="max-width: 22px">
                                    日本語
                                </a>
                            @else

                                <a href="{{url('/')}}/change-lang/pt-br" class="">
                                    <img src="{{url('/')}}/assets/images/1560174834.png" style="max-width: 22px">
                                    Português
                                </a>
                            @endif
                        </li>

                    </ul><!---->

                    <div id="signup-dialog" class="zoom-anim-dialog mfp-hide">
                        <h1>signup form</h1>
                        <form>
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Email">
                            <input type="password" placeholder="Password">
                            <input type="text" placeholder="Mobile Number">
                            <select>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <button type="submit" class="ast_btn">submit</button>
                            <p>Have An Account ? <a href="#">Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ast_header_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="ast_logo">
                    <a href="{{url('/')}}">
                        <img style="max-width: 160px;"
                             src="@if(request()->session()->get('lang') == 'ja' ) {{asset('assets/images/logo/logo.png')}} @else {{asset('assets/images/logo/logo-pt.png')}} @endif"
                             alt="logo image">
                    </a>
                    <button class="ast_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="ast_main_menu_wrapper">
                    <div class="ast_menu">
                        <ul>
                            @if(request()->path() != '/')
                            <li>
                                <a href="{{url('/')}}" >@lang('home_page.Home')</a>

                            </li>

                            @endif
                            <li><a href="{{ route('about') }}">@lang('home_page.About God')</a></li>

                            <li><a href="{{ route('front.schedule') }}">@lang('home_page.Reservation・Consultation') </a></li>
                            <li><a href="#">@lang('home_page.Medical Treatment')</a>
                                <ul class="submenu">
                                    <li><a href="{{url('/')}}/alcoholics-and-addictions">@lang('home_page.Addiction Treatment')</a></li>
                                    <li><a href="{{url('/')}}/mental-trauma">@lang('home_page.Psychological trauma')</a></li>
                                    <li><a href="{{url('/')}}/spiritual-purification">@lang('home_page.Purification of the mind')</a></li>
                                    <li><a href="{{url('/')}}/influence-of-work">@lang('home_page.Impact of work Injury/illness')</a></li>
                                    <li><a href="{{url('/')}}/purification-soul">@lang('home_page.The Atonement of the Soul')</a></li>


                                </ul>
                            </li>
                            <li><a href="{{url('miniblog')}}">@lang('home_page.Blog')</a></li>
                            <li><a href="{{route('user.faq.index')}}">@lang('home_page.FAQ')</a></li>

                            {{--                            <li><a href="#">@lang('疾患')</a>--}}
                            {{--                                <ul class="submenu">--}}


                            {{--                                </ul>--}}
                            {{--                            </li>--}}

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<div id="app">
    @yield('content')

</div>

<!-- Footer wrapper start-->
<div class="ast_footer_wrapper ast_toppadder70 ast_bottompadder20" style="position: relative !important;">
    <div class="container">
        <div class="row">
            <div
                class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                <div class="ast_footer_info">

                    <a href="{{url('/')}}">
                        <img style="max-width: 180px"
                             src="@if(request()->session()->get('lang') == 'ja' ) {{asset('index_layout/images/logo/logo.png')}}
                             @else {{asset('index_layout/images/logo/logo-pt.png')}} @endif"
                             alt="">
                    </a>
                    @if(request()->session()->get('lang') == 'ja' )
                        <p>{{$general->footer_text_jp}}</p>
                    @else
                        <p>{{$general->footer_text}}</p>
                    @endif
                    <ul>
                        @foreach($social as $key=> $data)
                            <li><a href="{{$data->link}}" style="background-color: rgba(255, 255, 255, 0.8);"><i
                                        style="color:#{{$general->color}}"><i class="fa fa-{{$data->icon}}"
                                                                              aria-hidden="true"></i></a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="widget text-widget">
                    <h4 class="widget-title">@lang('home_page.mission')</h4>
                    <div class="ast_newsletter">
                        @if(request()->session()->get('lang') == 'ja' )
                            <p>
                                {{$general->footer_message_jp}}
                            </p>
                        @else
                            <p>
                                {{$general->footer_message_p}}
                            </p>
                        @endif
                        {{--                        <div class="ast_newsletter_box">--}}
                        {{--                            <input type="text" placeholder="Email">--}}
                        {{--                            <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="widget text-widget">
                    <h4 class="widget-title"> @lang('home_page.Our Services')</h4>
                    <div class="ast_servicelink">
                        <ul>
                            <li><a href="{{url('/')}}/alcoholics-and-addictions">@lang('home_page.Addiction Treatment')</a></li>
                            <li><a href="{{url('/')}}/mental-trauma">@lang('home_page.Psychological trauma')</a></li>
                            <li><a href="{{url('/')}}/spiritual-purification">@lang('home_page.Purification of the mind')</a></li>
                            <li><a href="{{url('/')}}/influence-of-work">@lang('home_page.Impact of work Injury/illness')</a></li>
                            <li><a href="{{url('/')}}/purification-soul">@lang('home_page.The Atonement of the Soul')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="widget text-widget">
                    <h4 class="widget-title">@lang('home_page.Quick Links')</h4>
                    <div class="ast_sociallink">
                        <ul>
                            <li><a href="{{ route('about') }}">@lang('home_page.About God')</a></li>
                            <li><a href="{{ route('front.schedule') }}">@lang('home_page.Reservation・Consultation') </a></li>
                            <li><a href="{{route('user.faq.index')}}">@lang('home_page.FAQ') </a></li>
                            <li><a href="{{ route('support.index.customer') }}">@lang('home_page.Support Ticket')</a></li>
                            <li><a href="{{ route('front.schedule') }}">@lang('home_page.Reservation・Consultation')</a></li>
                            <li><a href="{{ route('sitemap') }}">@lang('home_page.Site Map') </a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    @if($general->footer_slider_enable=='on')
                        <div style="min-width: 250px; min-height: auto">

                            @include('front.partials.int_slider')
                        </div>

                    @else
                        <div class="widget text-widget">
                            <h4 class="widget-title">@lang('home_page.Get In Touch')</h4>
                            <div class="ast_gettouch">
                                <ul>
                                    <li><i class="fa fa-home" aria-hidden="true"></i>
                                        <p>{{$general->address}}</p></li>
                                    <li>
                                        <i class="fa fa-at" aria-hidden="true"></i>

                                        <a href="#">{{$general->email}}</a></li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>
                                        <p>{{$general->phone}}</p>

                                    </li>
                                </ul>
                                {{--                        @yield('footer_slider')--}}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ast_copyright_wrapper">
                    @if(request()->session()->get('lang') == 'ja' )
                        <p>   {{$general->footer_jp}}</p>
                    @else
                        <p>   {{$general->footer}}</p>
                    @endif
                </div>
            </div>

        </div>
    </div>
    <!-- Footer wrapper End-->
    <!--Main js file Style-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>

    {{--<script type="text/javascript" src="index_layout/js/jquery.js"></script>--}}
    <script type="text/javascript" src="index_layout/js/bootstrap.js"></script>
    <script type="text/javascript" src="index_layout/js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="index_layout/js/owl.carousel.js"></script>
    <script type="text/javascript" src="index_layout/js/jquery.countTo.js"></script>
    <script type="text/javascript" src="index_layout/js/jquery.appear.js"></script>
    <script type="text/javascript" src="index_layout/js/custom.js"></script>
    <!--Main js file End-->

    <!-- old -->
    <script src="{{ asset('assets/front/js/moment.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/lang/datepicker-'. Session::get('lang') .'.js') }}"></script>

    {{-- Lightgallery --}}
    <script src="{{ asset('assets/front/js/prettify.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.justifiedGallery.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/transition.js') }}"></script>
    <script src="{{ asset('assets/front/js/collapse.js') }}"></script>
    @stack('light-gallery')


<!-- magnific popup -->
    <script src="{{url('/')}}/assets/front/js/jquery.magnific-popup.js"></script>
    <!-- way poin js-->
    {{--<script src="{{url('/')}}/assets/front/js/waypoints.min.js"></script>--}}
<!-- wow js-->
    <script src="{{url('/')}}/assets/front/js/wow.min.js"></script>

    <script src="{{asset('assets/front/js/starrr.js')}}"></script>
    <script src="{{asset('assets/admin/js/sweetalert.js')}}"></script>
    <!-- main -->
    <script src="{{url('/')}}/assets/front/js/main.js"></script>

    <script src="{{url('/')}}/assets/vue/vue.js"></script>

    <script src="{{url('/')}}/assets/vue/axios.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>

    <script>
        /* $(document).on('change', '#langSel', function () {
             var code = $(this).val();
             window.location.href = "{{url('/')}}/change-lang/" + code;
    });
    */
    </script>

    @yield('script')

    <script>
        window.Laravel = {!!json_encode(['csrfToken'=>csrf_token()])!!};
    </script>

    <script>
        $(document).ready(function () {
            var winheight = $(window).height() - 150;
            $('#justify-height').css('min-height', winheight + 'px');
        });
    </script>

    @if (Session::has('message'))

        <script type="text/javascript">
            $(document).ready(function () {
                swal("{{ __(Session::get('message')) }}", "", "success");
            });
        </script>
    @endif

    @if (Session::has('success'))
        <script type="text/javascript">
            $(document).ready(function () {
                swal("{{ __(Session::get('success')) }}", "", "success");
            });
        </script>
    @endif

    @if (Session::has('alert'))
        <script type="text/javascript">
            $(document).ready(function () {
                swal("{{ __(Session::get('alert')) }}", "", "warning");
            });
        </script>
    @endif

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147749074-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-147749074-1');

    </script>


    <style>
        body {
            font-family: 'Varela Round', sans-serif;
        }

        .modal-login {
            width: 320px;
        }

        .modal-login .modal-content {
            border-radius: 1px;
            border: none;
        }

        .modal-login .modal-header {
            position: relative;
            justify-content: center;
            background: #f2f2f2;
        }

        .modal-login .modal-body {
            padding: 30px;
        }

        .modal-login .modal-footer {
            background: #f2f2f2;
        }

        .modal-login h4 {
            text-align: center;
            font-size: 26px;
        }

        .modal-login label {
            font-weight: normal;
            font-size: 13px;
        }

        .modal-login .form-control, .modal-login .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .modal-login .hint-text {
            text-align: center;
        }

        .modal-login .close {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .modal-login .checkbox-inline {
            margin-top: 12px;
        }

        .modal-login input[type="checkbox"] {
            position: relative;
            top: 1px;
        }

        .modal-login .btn {
            min-width: 100px;
            background: #3498db;
            border: none;
            line-height: normal;
        }

        .modal-login .btn:hover, .modal-login .btn:focus {
            background: #248bd0;
        }

        .modal-login .hint-text a {
            color: #999;
        }

        .trigger-btn {
            display: inline-block;
            margin: 100px auto;
        }
    </style>
    <!-- Modal HTML -->
    <div id="login-model" class="modal ">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <form method="post" id="login_form">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">@lang("Login")</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>@lang('Email Address')</label>
                            <input type="text" class="form-control" name="email" id="InputName"
                                   placeholder="@lang('Enter Your E-mail')" required>
                        </div>
                        <div class="form-group">
                            <div class="clearfix">
                                <label>@lang('Password')</label>

                            </div>

                            <input type="password" class="form-control" name="password"
                                   placeholder="@lang('Enter Password')" required="required">
                        </div>
                        <div class="form-group">

                            <a href="{{ route('password.request') }}"
                               class="float-right text-muted"><small>@lang('Forgot password?')</small></a>
                            <a href=""
                               class="forgetting-password"></a>
                        </div>
                        <div class="form-group">
                            <a class="popup-with-zoom-anim" href="#signup-dialog"><i class="fa fa-user-plus"
                                                                                     aria-hidden="true"></i>@lang('Sign Up')
                            </a>
                        </div>

                        @if($general->social_login == 1)
                            <div class="row">

                                <div class="col-md-6" style="margin-top: 20px">
                                    <a href="{{route('social.login', 'facebook')}}"
                                       class="btn btn-success btn-block"
                                       style="background:#4267b2; border: #4267b2;padding: 12px 0px 12px;">
                                        <i class="fa fa-facebook"></i> @lang('Join With')
                                    </a>
                                </div>

                                <div class="col-md-6" style="margin-top: 20px">
                                    <a href="{{route('social.login', 'google')}}"
                                       class="btn btn-danger btn-block" style="padding: 12px 0px 12px;">
                                        <i class="fa fa-google"></i> @lang('Join With')</a>
                                </div>

                            </div>
                        @endif
                        <div id="error_message" style="display: none">
                            <div class="alert alert-danger alert-dismissible"
                                 role="alert">
                                <p id="error">error</p>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <label class="form-check-label"><input type="checkbox" name="remember"
                                                               id="remember"> @lang('keep me login')</label>
                        <input type="submit" class="ast_btn " value="@lang('Login')">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>

        $('#login_btn').on('click', function () {
            console.log('clicked');
            $('#login-model').modal('show');

        });
        $('#login_form').on('submit', function (e) {
            e.preventDefault();

            var cover_img = $('#cover_img').val();
            // var cover_img = $('#cover_img').prop('files')[0];
            // var form_data = new FormData();
            // form_data.append('file', cover_img);
            $.ajax({
                    cache: false,
                    contentType: false,
                    processData: false,
                    url: " {{ route('user.ajax.login') }}",
                    method: "post",
                    // data: {
                    //     title: title, price: price, ISBN: ISBN, Staff_id: Staff_id,
                    //     Supplier_id: Supplier_id, Publisher_id: Publisher_id,
                    //     category_id: category_id, subject: subject, number_of_coypies: number_of_coypies,
                    //     cover_img: cover_img
                    // },
                    // data: $('#add_form').serialize(),
                    data: new FormData(this),

                    beforeSend: (function () {
                        $('#error_message').hide();


                    }),

                    success: function (data) {
                        window.location.replace("/");
                        $('#login-model').modal('hide');


                    }
                    ,
                    error: function (data) {
                        if (data.status === 422) {
                            var errors = $.parseJSON(data.responseText);
                            console.table(data.responseText);
                            $.each(errors, function (key, value) {
                                // $('#category_id_error').show().append(value + "<br/>"); //this is my div with messages
                                if ($.isPlainObject(value)) {
                                    $.each(value, function (key, value) {

                                        if (key == 'email') {

                                            $('#error').html(value);
                                            $('#error_message').show();
                                        }

                                        // $('#category_id_error').show().append(value + "<br/>");
                                    });

                                }

                            });
                        }

                    }

                }
            );
        })


    </script>


    <script type="text/javascript">
        // Params
        console.log('loading ');


        var slider_url = "{{ asset('assets/images/slider') }}";
        $('.linkedinShareBtn').on('click', function (event) {
            event.preventDefault();
            $('meta[name=linkedin_image]').attr('content', slider_url + '/' + $(this).data('image'));
            $('meta[name=linkedin_description]').attr('content', $(this).data('title'));
            window.open($(this).attr('href'), '_blank');
        });
        // Params


        options = {
            init: true,
            loop: {{($general->slider_loop)?$general->slider_loop:0}},
            speed:{{ ($general->slider_speed)?$general->slider_speed:800 }},
            slidesPerView: {{($general->slidesPerView)?$general->slidesPerView:2}}, // or 'auto'
            // spaceBetween: 10,
            centeredSlides: true,
            effect: 'coverflow', // 'cube', 'fade', 'coverflow',
            coverflowEffect: {
                rotate: 50, // Slide rotate in degrees
                depth: 0, // Depth offset in px (slides translate in Z axis)
                modifier: 1, // Effect multipler
                slideShadows: true, // Enables slides shadows
            },
            grabCursor: true,
            parallax: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1023: {
                    slidesPerView: 1,
                    spaceBetween: 0
                }
            },
            // Events
            on: {
                imagesReady: function () {
                    this.el.classList.remove('loading');
                }
            },
            autoplay: {
                delay: {{($general->autoplay_delay)?$general->autoplay_delay:500}},
            },

        };
        var oldswiper = new Swiper('#header_slider', options);


        // Initialize slider
        // oldswiper.init();
        // var mySwiper = new Swiper('.swiper-container', {
        //
        //     loop: true,
        //     slidesPerView: 1,
        //     grabCursor: true,
        //     effect: 'fade',
        //     preloadImages: true,
        //     updateOnImagesReady: true,
        //
        //     navigation: {
        //         nextEl: '.swiper-button-next',
        //         prevEl: '.swiper-button-prev',
        //     },
        //
        //     on: {
        //         init: function() {
        //             console.log('initialized.'); // this works
        //         },
        //         imagesReady: function() {
        //             console.log('images ready.'); // this works now, too!
        //         }
        //     }
        //
        // });
    </script>
    @if($general->footer_slider_enable=='on')
        <script>
            var insliderSelector = '#inswiper-container',
                inoptions = {
                    init: true,
                    loop: {{($general->in_slider_loop)?$general->in_slider_loop:1}},
                    speed:{{ ($general->in_slider_speed)?$general->in_slider_speed:800 }},


                    slidesPerView: {{ ($general->in_slidesPerView)?$general->in_slidesPerView:1 }}, // or 'auto'
                    // spaceBetween: 10,
                    centeredSlides: false,
                    effect: 'fade', // 'cube', 'fade', 'coverflow',
                    coverflowEffect: {
                        rotate: 50, // Slide rotate in degrees
                        depth: 0, // Depth offset in px (slides translate in Z axis)
                        modifier: 1, // Effect multipler
                        slideShadows: true, // Enables slides shadows
                    },
                    grabCursor: true,
                    parallax: true,
                    pagination: {
                        el: '#inswiper-pagination',
                        clickable: true,
                        dynamicBullets: true
                    },
                    navigation: {
                        nextEl: '#inswiper-button-next',
                        prevEl: '#inswiper-button-prev',
                    },
                    breakpoints: {
                        1023: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        }
                    },
                    // Events
                    on: {
                        imagesReady: function () {
                            this.el.classList.remove('loading');
                        }
                    },
                    autoplay: {
                        delay: {{($general->in_autoplay_delay)?$general->in_autoplay_delay:500}},
                    },

                };
            var inmySwiper = new Swiper(insliderSelector, inoptions);

            // Initialize slider
            // inmySwiper.init();
        </script>
    @endif
    {{--        @if($general->footer_slider_enable=='on')--}}
    <script>
        var insliderSelector = '#inswiper-container_serv',
            inoptions = {
                init: true,
                loop: {{($general->in_slider_loop)?$general->in_slider_loop:1}},
                speed:{{ ($general->in_slider_speed)?$general->in_slider_speed:800 }},


                slidesPerView: {{ ($general->in_slidesPerView)?$general->in_slidesPerView:1 }}, // or 'auto'
                // spaceBetween: 10,
                centeredSlides: false,
                effect: 'fade', // 'cube', 'fade', 'coverflow',
                coverflowEffect: {
                    rotate: 50, // Slide rotate in degrees
                    depth: 0, // Depth offset in px (slides translate in Z axis)
                    modifier: 1, // Effect multipler
                    slideShadows: true, // Enables slides shadows
                },
                grabCursor: true,
                parallax: true,
                pagination: {
                    el: '#inswiper-pagination',
                    clickable: true,
                    dynamicBullets: true
                },
                navigation: {
                    nextEl: '#inswiper-button-next',
                    prevEl: '#inswiper-button-prev',
                },
                breakpoints: {
                    1023: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    }
                },
                // Events
                on: {
                    imagesReady: function () {
                        this.el.classList.remove('loading');
                    }
                },
                autoplay: {
                    delay: {{($general->in_autoplay_delay)?$general->in_autoplay_delay:500}},
                },

            };
        var inmySwiper = new Swiper(insliderSelector, inoptions);

        // Initialize slider
        // inmySwiper.init();
    </script>
    {{--@endif--}}
</div>

</body>

</html>
<!-- FIM WD1 -->


