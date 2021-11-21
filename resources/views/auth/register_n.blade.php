@extends('layouts.user_layout')

<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = Explode('/', $actual_link);
//echo $parts;
$id = $parts[count($parts) - 1];

if ($id == 1) {
    $id_nova = $parts[count($parts) - 2];

} else {
    $id_nova = $id;
}

//echo $id_nova;
?>

@section('SEO')
    <meta name="description" content="登録後に予約日を入れてください、希望時間と都道府県を選択してください。">
    <meta name="keywords" content="予約、相談、時間、都道府県、病気の治癒、魂の浄化、精神的な妨害、解放と精神的保護、">
@stop
@section('header')
    <link href="assets/css/authentication/form-2.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
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
                    <a href="/register" class=" active ">
                        <img src="{{url('/')}}/assets/images/1560174798.png">
                        日本語
                    </a>
                </div>
                <div class="lang">
                    <a href="/pt-br/register/<?php echo $id_nova; ?>/1" class="">
                        <img src="{{url('/')}}/assets/images/1560174834.png">
                        Português
                    </a>
                </div>

            </div>
        </div>

    @endif

@stop

@section('facebook')
    <meta property="og:title" content="La Cura ・奇跡 – 今すぐに登録"/>
    <meta property="og:site_name" content="La Cura ・奇跡 – 今すぐに登録"/>
    <meta property="og:description" content="治療を受けると人生を生きる、幸せになり、あなたへあなたの人生に捧げる"/>
    <meta property="og:image" content="https://lacura.me/assets/images/blog/img/15682919185d7a3c4ee6f57.jpg"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="551"/>
    <meta property="og:image:height" content="346"/>
@stop

@section('titulo')
    <title>La Cura - 奇跡 {{  '| '.__($pt) }}</title>
@stop

@section('style')
    <link rel="stylesheet" href="{{url('/')}}/assets/front/build/css/intlTelInput.css">
@stop

@section('content')

    <!-- page title end -->


    <!-- register begin-->

    <!-- register end -->
    <div class="form">

        <div class="form-container outer">
        </div>
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">@lang('auth_pages.Register')</h1>
                        <p class="signup-link register">
                            @lang('auth_pages.Create a new account') <a href="{{route('login')}}">@lang('auth_pages.Login')</a></p>
                        @if(request()->is('register'))

                            <div class="card">
                                <div class="card-body">
                                    <h3>@lang('auth_pages.Sorry, Registration without referal is currently not allowed')</h3>
                                </div>
                            </div>
                        @else
                            @if (count($errors) > 0)

                                <div class="row">
                                    @foreach ($errors->all() as $error)

                                        <div class="col-md-12">
                                            <div class="alert alert-danger alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-hidden="true">&times;
                                                </button>
                                                {{ __($error) }}
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            @endif
                            <form class="text-left" action="{{ route('register') }}" method="post">
                                @csrf
                                <input type="hidden" name="lang" value="{{ session()->get('lang') }}">


                                <div class="form">
                                    @if(isset($ref_user))
                                        @if(!isset($not_refer_user))

                                            <div class="col-xl-12 col-lg-12">
                                                <div class="form-group">
                                                <!-- <label  for="InputRef">@lang('auth_pages.Referred By')<span class="requred">*</span></label> -->
                                                <!-- REMOVED VALUE INPUT THAT SHOWS REFEREAL NAME {{$ref_user->name}}-->
                                                    <input type="hidden" style="background: #b6b9c1;"
                                                           class="form-control" id="InputRef" value="" disabled readonly
                                                           required>
                                                </div>
                                            </div>
                                            <input type="hidden" value="{{$ref_user->id}}" name="ref_id">
                                        @else

                                            <input type="hidden" id="InputRef" value="{{$ref_user->name}}">
                                            <input type="hidden" value="{{$ref_user->id}}" name="ref_id">
                                        @endif
                                    @else
                                        <input type="hidden" value="0" name="ref_id">

                                    @endif

                                    <div id="username-field" class="field-wrapper input">
                                        <label for="name">@lang('auth_pages.Name, Full Name')</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <input id="name" name="name" value="{{old('name')}}" type="text"
                                               class="form-control" placeholder="@lang('auth_pages.Please enter your name.')" required>
                                    </div>
                                    <div id="nickname-field" class="field-wrapper input">
                                        <label for="nickname">@lang('auth_pages.Nickname')</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <input id="nickname" name="nickname" value="{{old('nickname')}}" type="text"
                                               class="form-control" placeholder="@lang('auth_pages.Please enter your nickname.')" required>
                                        <p class="text-info mt-1">@lang('auth_pages.This nickname will be publicly available.')</p>

                                    </div>
                                    <input type="hidden" id="track" name="country_code">
                                    <div id="email-field" class="field-wrapper input">
                                        <label for="email">@lang('auth_pages.Email address')</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-at-sign register">
                                            <circle cx="12" cy="12" r="4"></circle>
                                            <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                        </svg>
                                        <input id="email" name="email" type="email" class="form-control"
                                               value="{{old('email')}}" placeholder="@lang('auth_pages.Please enter your email address')"
                                               required>
                                    </div>
                                    <div id="mobile-field" class="field-wrapper input">
                                        <label for="mobile">@lang('auth_pages.Mobile Number')</label>


                                        <input name="mobile" type="tel" id="mobile" class="form-control pranto-control"
                                               value="{{old('phone')}}" required>
                                    </div>
                                    <div id="country-field" class="field-wrapper input">
                                        <label for="country">@lang('auth_pages.Country')<span class="requred">*</span></label>
                                        <input type="text" class="form-control" id="country" name="country" required>


                                    </div>

                                    <div id="password-field" class="field-wrapper input mb-2">
                                        <div class="d-flex justify-content-between">
                                            <label for="password">@lang('auth_pages.Password')<span class="requred">*</span></label>


                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-lock">
                                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>

                                        <input type="password" class="form-control" id="password" name="password"
                                               placeholder="@lang('auth_pages.Please enter your password.')"
                                               required>


                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round" id="toggle-password"
                                             class="feather feather-eye">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </div>
                                    <div id="password_confirmation-field" class="field-wrapper input mb-2">
                                        <div class="d-flex justify-content-between">
                                            <label for="password_confirmation">@lang('auth_pages.Please enter your password again.')<span
                                                    class="requred">*</span></label>


                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-lock">
                                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>

                                        <input type="password" class="form-control" name="password_confirmation"
                                               id="InputRetypepassword" placeholder="@lang('auth_pages.Please enter your password again.')"
                                               required>


                                    </div>

                                    <div class="field-wrapper terms_condition">
                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input" id="gridCheck1">
                                                <span class="new-control-indicator"></span><span>   @lang('auth_pages.I agree to the Terms of Use')

                                                    {{--                                                 <a href="@if(request()->session()->get('lang') == 'ja' ) https://lacura.me/terms/5/terms @else https://lacura.me/terms/2/terms @endif"--}}
                                                    {{--                                                    target="_blank" style="color: red;">@lang('auth_pages.受診条件参照ください')</a>--}}
                                                    <a href="{{route('menu.index.front')}}"
                                                       target="_blank" style="color: red;">@lang('auth_pages.Please refer to the conditions of medical examination.')</a>
                                                </span>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="d-sm-flex justify-content-between">
                                        <div class="field-wrapper">
                                            <button type="submit" class="btn btn-primary" value="">@lang('auth_pages.Submit')</button>
                                        </div>
                                    </div>
                                    @if(false)
                                        <div class="division">
                                            <span>OR</span>
                                        </div>

                                        <div class="social">
                                            <a href="javascript:void(0);" class="btn social-fb">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2"
                                                     stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-facebook">
                                                    <path
                                                        d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                                </svg>
                                                <span class="brand-name">Facebook</span>
                                            </a>
                                            <a href="javascript:void(0);" class="btn social-github">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2"
                                                     stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-github">
                                                    <path
                                                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                </svg>
                                                <span class="brand-name">Github</span>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="assets/js/authentication/form-2.js"></script>
    <script src="{{url('/')}}/assets/front/build/js/intlTelInput.js"></script>
    <script>
        $("#mobile").on("countrychange", function (e, countryData) {

            var data = $(this).val('+' + countryData.dialCode);
            $('#track').val(data);
            var country = countryData.name;
            var country = country.split('(')[0];
            $('#country').val(country);
        });
        $("#mobile").intlTelInput({
            geoIpLookup: function (callback) {
                $.get("https://ipinfo.io", function () {
                }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            initialCountry: "auto",
            utilsScript: "{{url('/')}}/assets/front/build/js/utils.js"
        });
    </script>
@stop
