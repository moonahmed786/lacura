@extends('layouts.user_layout')

@section('header')
    <link href="assets/css/authentication/form-1.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">

@stop
@section('SEO')
    <meta name="description" content="ログイン後に予約日を入れてください、次に希望時間と都道府県を選択してください。">
    <meta name="keywords" content="予約、相談、時間、都道府県、病気の治癒、魂の浄化、精神的な妨害、解放と精神的保護、">
@stop

@section('lang')

    {{--    @if(request()->session()->get('lang') == 'en' )--}}

    {{--        <meta http-equiv="refresh" content="0;{{url('/')}}/change-lang/ja/">--}}

    {{--    @elseif(request()->session()->get('lang') == 'pt' )--}}

    {{--        <meta http-equiv="refresh" content="0;{{url('/')}}/change-lang/ja/">--}}

    {{--    @else--}}

    <div class="col-xl-12">
        <div class="lang-wrapper">
            <div class="lang">
                <a href="{{route('lang','jp')}}" class=" active ">
                    <img src="{{url('/')}}/assets/images/1560174798.png">
                    日本語
                </a>
            </div>
            <div class="lang">
                <a href="{{route('lang','pt-br')}}/pt-br/login" class="">
                    <img src="{{url('/')}}/assets/images/1560174834.png">
                    Português
                </a>
            </div>

        </div>
    </div>

    {{--    @endif--}}

@stop

@section('facebook')
    <meta property="og:title" content="La Cura - 奇跡 | ログイン"/>
    <meta property="og:site_name" content="La Cura - 奇跡 | ログイン"/>
    <meta property="og:description" content="ログイン後に予約日を入れてください、次に希望時間と都道府県を選択してください。"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="100"/>
@stop

@section('titulo')
    <title>La Cura - 奇跡 | ログイン</title>
@stop

@section('content')

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">@lang('auth_pages.Login') <a href="{{route('root')}}"><br><span class="brand-name">La Cura</span></a>
                        </h1>
                        <p class="signup-link">@lang('auth_pages.New here')? <a
                                href="{{route('register')}}">@lang('auth_pages.Create a New Account')</a></p>
                        <form class="text-left" action="{{ route('login') }}" method="post">

                            @csrf
                            @if (count($errors) > 0)

                                @foreach ($errors->all() as $error)
                                    <div class="col-md-12">
                                        <div class="alert alert-danger "
                                             role="alert">
                                            <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                &times;
                                            </button>
                                            {{ __($error) }}
                                        </div>
                                    </div>
                                @endforeach

                            @endif
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="username" name="email" type="text" class="form-control"
                                           placeholder="@lang('auth_pages.Enter Your E-mail Address')">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password" name="password" type="password" class="form-control"
                                           placeholder="@lang('auth_pages.Please enter your password.')">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">@lang('auth_pages.Show Password')</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary"
                                                value=""> @lang('auth_pages.Login')</button>
                                    </div>

                                </div>

                                <div class="field-wrapper text-center keep-logged-in">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                            <input type="checkbox" name="remember" class="new-control-input">
                                            <span
                                                class="new-control-indicator"></span> @lang('auth_pages.Keep me logged in.')
                                        </label>
                                    </div>
                                </div>

                                <div class="field-wrapper">
                                    <a href="{{ route('password.request') }}" class="forgot-pass-link"
                                       style="color: white">@lang('auth_pages.Forgot your password?')</a>
                                </div>

                            </div>
                            @if($general->social_login == 1)
                                <br>
                                <div class="row">

                                    <div class="col-md-6" style="margin-top: 20px">
                                        <a href="{{route('social.login', 'facebook')}}"
                                           class="btn btn-success btn-block"
                                           style="background:#4267b2; border: #4267b2;padding: 12px 0px 12px;">
                                            <i
                                                class="fa fa-facebook"></i> @lang('auth_pages.Join With')

                                        </a>
                                    </div>

                                    <div class="col-md-6" style="margin-top: 20px">
                                        <a href="{{route('social.login', 'google')}}"
                                           class="btn btn-danger btn-block" style="padding: 12px 0px 12px;">
                                            <i
                                                class="fa fa-google"></i> @lang('auth_pages.Join With')

                                        </a>
                                    </div>

                                </div>
                            @endif
                        </form>
                        <p class="terms-conditions">@lang('auth_pages.© 2021 All rights reserved'). <a
                                href="{{route('root')}}">La
                                Cura</a> @lang('auth_pages.is a Project to Change the World'). <a
                                href="javascript:void(0);">@lang('auth_pages.Cookie Preferences')</a>, <a
                                href="javascript:void(0);">@lang('auth_pages.Privacy and Terms & Condition')</a>.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="assets/js/authentication/form-1.js"></script>
@stop
