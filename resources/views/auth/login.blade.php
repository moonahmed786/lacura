@extends('layouts.index')

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
{{--    @if(activeTemp()  == 1)--}}


        <!-- page title end -->
        <div class="ast_pagetitle">
            <div class="ast_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>@lang('Login')</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul class="breadcrumb">
                            <li><a href="/">@lang('Home')</a></li>
                            <li>//</li>
                            <li>@lang('Login')</li>
                        </ul>
                        {{--                        <p style="font-size: 19px;">@lang('精神的な病気を癒し、聖なる魂の助けを借りて起こる内面の変化の奇跡的な命です。')</p>--}}

                    </div>
                </div>
            </div>
        </div>


        <!-- login begin-->
        <div class="contact">
            <div class="container">
                <div class="row text-center">
                    <div class="col-4">
                        <div class=" text-center">
                            <h2>@lang('マイアカウント')</h2>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                <div class="col-5  ">

                    <div style="max-width: 600px; ">

                            <form class="" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="row">
                                    @if (count($errors) > 0)

                                        @foreach ($errors->all() as $error)
                                            <div class="col-md-12">
                                                <div class="alert alert-danger alert-dismissible fade show"
                                                     role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                        &times;
                                                    </button>
                                                    <p>{{ __($error) }}</p>
                                                </div>
                                            </div>
                                        @endforeach

                                    @endif

                                    <div class="">
                                        <div class="form-group">
                                            <label for="InputName">@lang('メールアドレス')<span
                                                    class="requred">*</span></label>
                                            <input type="text" class="form-control" name="email" id="InputName"
                                                   placeholder="@lang('Enter Your E-mail Address')" required>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="form-group">
                                            <label for="InputAmount">@lang('パスワード')<span
                                                    class="requred">*</span></label>
                                            <input type="password" class="form-control" name="password" id="InputAmount"
                                                   placeholder="@lang('パスワードを入力してください')" required>
                                        </div>
                                    </div>

                                    <div class="">

                                        <div class="form-group mb-0 checkbox">

                                            <div class="form-check pl-0">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember">
                                                <label class="form-check-label" for="remember">
                                                    @lang('自動ログインを保持する')
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="row d-flex">
                                            <div class="col-xl-6 col-lg-6">
                                                <button type="submit" class="ast_btn"> @lang('ログイ')</button>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                                                <a href="{{ route('password.request') }}"
                                                   class="forgetting-password">@lang('パスワードを忘れた場合はこちら')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if($general->social_login == 1)
                                    <br>
                                    <div class="row">

                                        <div class="col-md-6" style="margin-top: 20px">
                                            <a href="{{route('social.login', 'facebook')}}"
                                               class="btn btn-success btn-block"
                                               style="background:#4267b2; border: #4267b2;padding: 12px 0px 12px;">
                                                @if(request()->session()->get('lang') == 'ja' ) <i
                                                    class="fa fa-facebook"></i> @lang('Join With') @else @lang('Join With')
                                                <i class="fa fa-facebook"></i> @endif
                                            </a>
                                        </div>

                                        <div class="col-md-6" style="margin-top: 20px">
                                            <a href="{{route('social.login', 'google')}}"
                                               class="btn btn-danger btn-block" style="padding: 12px 0px 12px;">
                                                @if(request()->session()->get('lang') == 'ja' ) <i
                                                    class="fa fa-google"></i> @lang('Join With') @else @lang('Join With')
                                                <i class="fa fa-google"></i> @endif
                                            </a>
                                        </div>

                                    </div>
                                @endif
                            </form>

                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- login end -->
{{--    @endif--}}

@endsection

@section('script')

@stop
