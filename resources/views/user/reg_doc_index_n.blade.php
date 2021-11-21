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

@section('style')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/users/user-profile.css" rel="stylesheet" type="text/css"/>
    <!--  END CUSTOM STYLE FILE  --
@stop
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-spacing">

                <!-- Content -->
    <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

        <div class="user-profile layout-spacing">
            <div class="widget-content widget-content-area" style="height: 874px;">
                <div class="d-flex justify-content-between">
                    <h3 class="">Info</h3>
                    <a  class="mt-2 edit-profile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-edit-3">
                            <path d="M12 20h9"></path>
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                    </a>
                </div>

                <div class="text-center user-info">
                    <img alt="{{auth()->user()->name}}" class="img" height="200px"
                         src="@if(Auth::user()->image) {{ asset('assets/images/user') .'/'. Auth::user()->image }} @else {{ asset('assets/images/user/no_user.png') }} @endif">


                    <p class="">{{auth()->user()->name}}</p>
                </div>
                <div class="user-info-list">

                    <div class="">
                        <ul class="contacts-block list-unstyled">
                            <li class="contacts-block__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-coffee">
                                    <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                    <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                    <line x1="6" y1="1" x2="6" y2="4"></line>
                                    <line x1="10" y1="1" x2="10" y2="4"></line>
                                    <line x1="14" y1="1" x2="14" y2="4"></line>
                                </svg> {{auth()->user()->nickname}}
                            </li>
                            <li class="contacts-block__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-calendar">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>{{auth()->user()->created_at}}
                            </li>
                            <li class="contacts-block__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>{{auth()->user()->country}}
                            </li>
                            <li class="contacts-block__item">
                                <a href="mailto:example@mail.com">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-mail">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>{{auth()->user()->email}}</a>
                            </li>
                            <li class="contacts-block__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-phone">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg> {{auth()->user()->mobile}}
                            </li>
                            <li class="contacts-block__item">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <div class="social-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-facebook">
                                                <path
                                                    d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                            </svg>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="social-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-twitter">
                                                <path
                                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                            </svg>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="social-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-linkedin">
                                                <path
                                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                                <rect x="2" y="9" width="4" height="12"></rect>
                                                <circle cx="4" cy="4" r="2"></circle>
                                            </svg>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

        <div class="skills layout-spacing  widget-content-area widget-content">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="">{{__($pt)}}</h3>
                </div>
                <div class="col-md-6">
                    <a class="mt-2 edit-profile btn btn-info pull-right ml-2" href="{{route('user.profile')}}"> Profile Settings<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path> <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                </div>

            </div>
            <div class=" ">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="row">
                        @foreach ($errors->all() as $error)
                            <div class="col-md-12">
                                <div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                        &times;
                                    </button>
                                    <p style="color: red">{{ __($error) }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif


                <div class="info">

                    <form class="contact-form" method="POST" action="{{route('user.doc.auth.update')}}"
                        enctype="multipart/form-data">

                        @csrf
                        {{--                                    <h5 class="">1  <h5>--}}
                        <div class="row">


                            <div class="col-md-11 mx-auto">


                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                        <div class="form">
                                                    <p class="text-info">@lang('user_profile.Payoneer Account Details')</p>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label class="dob-input">@lang('user_profile.payoneer_username')</label>
                                                    <input type="text" class="form-control mb-4"
                                                           placeholder="@lang('user_profile.payoneer_username')"
                                                           value="{{Auth::user()->payoneer_username}}" name="payoneer_username" required>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="fullName">@lang('user_profile.payoneer_email')</label>
                                                        <input type="email" class="form-control mb-4" name="payoneer_email"
                                                               required placeholder="@lang('user_profile.payoneer_email')"
                                                               value="{{Auth::user()->payoneer_email}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="text-info">@lang('user_profile.Strip Account Details')</p>

                                                    <div class="form-group">
                                                        <label for="stripe">@lang('user_profile.stripe_email')<span
                                                                class="requred">*</span></label>
                                                        <input type="text" class="form-control mb-4"
                                                               placeholder="@lang('user_profile.stripe_email')"
                                                               value="{{Auth::user()->stripe}}" name="stripe" required>
                                                    </div>

                                                </div>
                                                <div class="col-sm-6 mt-4">
                                                    <div class="form-group">
                                                        <label for="userLanguage">@lang('stripe_email')<span
                                                                class="requred">*</span></label>
                                                        <input type="email" class="form-control mb-4"
                                                               placeholder="@lang('user_profile.stripe_email')"
                                                               value="{{Auth::user()->stripe_email}}" name="stripe_email" required>
                                                    </div>


                                                </div>

                                                <div class="col-md-6">
                                                    <p class="text-info">@lang('user_profile.Bank Account Details')</p>
                                                    <div class="form-group">
                                                        <label for="InputUsername">@lang('user_profile.Account Holder Name')<span
                                                                class="requred">*</span></label>
                                                        <input type="text" class="form-control mb-4" name="account_name"
                                                               value="{{Auth::user()->account_name}}"
                                                               placeholder="@lang('user_profile.Account Holder Name')"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-4">
                                                    <div class="form-group">
                                                        <label for="InputUsername">@lang('user_profile.Bank Account Number')<span
                                                                class="requred">*</span></label>
                                                        <input type="text" class="form-control mb-4" name="bank_account_number"
                                                               value="{{Auth::user()->bank_account_number}}" placeholder="@lang('user_profile.Bank Account Number')"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="InputMail">@lang('user_profile.bank_name')<span class="requred">*</span></label>
                                                        <input type="text" id="bank_name" class="form-control mb-4" name="bank_name"
                                                               value="{{Auth::user()->bank_name}}"
                                                               placeholder="@lang('user_profile.bank_name')"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="InputMail">@lang('user_profile.bank_IBN_number')<span class="requred">*</span></label>
                                                        <input type="text" id="bank_name" class="form-control mb-4" name="bank_IBN_number"
                                                               value="{{Auth::user()->bank_IBN_number}}"
                                                               placeholder="@lang('user_profile.bank_IBN_number')"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="InputMail">@lang('user_profile.account_type')<span class="requred">*</span></label>
                                                        <input type="text" id="account_type" class="form-control mb-4" name="account_type"
                                                               value="{{Auth::user()->account_type}}"
                                                               placeholder="@lang('user_profile.account_type')"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="InputMail">@lang('user_profile.branch_number')<span class="requred">*</span></label>
                                                        <input type="text" id="branch_number" class="form-control mb-4" name="branch_number"
                                                               value="{{Auth::user()->branch_number}}"
                                                               placeholder="@lang('user_profile.branch_number')"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="btc_address" > @lang('cps_dashboard.BTC Address')<span class="requred">*</span></label>
                                                        <input type="text" id="btc_address" class="form-control mb-4" name="btc_address"
                                                               value="{{Auth::user()->btc_address}}{{old('btc_address')}}"
                                                               placeholder="@lang('cps_dashboard.BTC Address')"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="float-right " >

                                                        <div class="pl-3">

                                                            <button id="multiple-reset" class="btn btn-warning">@lang('user_profile.Reset All')</button>

                                                            <button id="multiple-messages" type="submit" class="btn btn-primary">@lang('user_profile.Save Changes')</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-md-11 mx-auto">

                            <div class="row">


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2021 <a target="_blank" href="https://lacura.me/">lacura.me</a>, All rights
                reserved.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-heart">
                    <path
                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                </svg>
            </p>
        </div>
    </div>



@endsection
@section('script')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                codeData: {
                    code: ''
                },
                errors: ''
            },
            methods: {
                submitCode() {
                    var input = this.codeData;
                    axios.post('{{route('check_two_facetor')}}', input).then(function (e) {

                        if (e.data.success == true) {
                            $("#changePAss").submit();
                            console.log("ok")
                        } else {
                            swal(e.data.message, "", "warning");
                        }

                    }).catch(function (error) {
                        app.errors = error.response.data.errors.code;
                    })
                }
            },
            mounted() {
                $('#userLanguage').val("{{ Auth::user()->lang }}");
            }


        });
    </script>
@stop
