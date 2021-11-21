@extends('layouts.user_layout')

@section('SEO')
    <meta name="description" content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。">
    <meta name="keywords" content="精神的, トラウマ, 中毒, 病気, 魂の償い, 依存, 浄化, 開運, お祓い">
@stop
@section('header')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css"/>
@endsection
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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/custom.css')}}">
@stop
@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">


                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <div class="widget-content widget-content-area br-6 " style="background-color: #3d4452">
                        <h1 class="wow slideInRight">{{__($pt)}}</h1>
{{--                        @include('layouts.balance_show')--}}
                        <h2 class="w-value wow slideInLeft text-right ">@lang('user_dashboard.Welcome'), {{Auth::user()->name}}!</h2>



                    <div class="row mb-4 wow slideInRight">


                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 ">
                            <div class="widget-two">
                                <div class="widget-content">
                                    <div class="w-numeric-value">
                                        <div class="w-content">

                                            <span class="w-value">{{__("user_dashboard.".$general->deposit_wallet_name) }}</span>
                                            <span
                                                class="w-numeric-title">@lang('user_dashboard.Balance'): {{__($general->currency_sym)}} {{round(Auth::user()->balance,4)}}</span>
                                            <span class="w-numeric-title"></span>

                                        </div>
                                        <div class="w-icon">
                                            <i class="fa fa-money"></i>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 ">
                            <div class="widget-two">
                                <div class="widget-content">
                                    <div class="w-numeric-value">
                                        <div class="w-content">

                                            <span class="w-value">{{__("user_dashboard.".$general->interest_wallet_name) }}</span>
                                            <span
                                                class="w-numeric-title">@lang('user_dashboard.Balance'): {{__($general->currency_sym)}} {{round(Auth::user()->interest_balance,4)}}</span>


                                        </div>
                                        <div class="w-icon">
                                            <i class="fa fa-address-book"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 ">
                            <div class="widget-two">
                                <div class="widget-content">
                                    <div class="w-numeric-value">




                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><span
                                                            style="color: white" id="copybtn" data-copytarget="#ref"
                                                            class="sayit_icon_search"><i id="copybtn"
                                                                                         data-copytarget="#ref"
                                                                                         class="fa fa-copy"></i> </span></span>
                                                </div>
                                                <input
                                                    class="sayit_ field_search form-control" type="url" id="ref"
                                                    name="referral_link"
                                                    value="{{url('/')}}/register/{{Auth::user()->reference_link}}"
                                                    form="search_form">


                                            </div>
                                            <span class="w-value">  @lang('user_dashboard.Share (Post)')</span>



                                        <div class="">
                                            <h4><a href="{{url('/')}}/share">  <i class="fa fa-share"></i></a></h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 wow slideInLeft">


                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 ">
                            <div class="widget-two">
                                <div class="widget-content">
                                    <div class="w-numeric-value">
                                        <div class="w-content">
                                            <a href="{{route('user.transaction')}}">
                                                <span class="w-value">@lang('user_dashboard.Total Transaction')</span>
                                                <span class="w-numeric-title">{{$total_trans->count()}}</span>
                                            </a>
                                        </div>
                                        <div class="w-icon">
                                            <i class="fa fa-exchange"></i>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 ">
                            <div class="widget-two">
                                <div class="widget-content">
                                    <div class="w-numeric-value">
                                        <div class="w-content">
                                            <a href="{{url('referral/commission')}}">
                                                <span class="w-value">@lang('user_dashboard.Total Referral Commission')</span>
                                                <span
                                                    class="w-numeric-title">{{__($general->currency_sym)}} {{$total_ref_com->sum('amount')}}</span>
                                            </a>
                                        </div>
                                        <div class="w-icon">
                                            <i class="fa fa-credit-card-alt"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 ">
                            <div class="widget-two">
                                <div class="widget-content">
                                    <div class="w-numeric-value">
                                        <div class="w-content">
                                            <a href="{{url('/referral')}}">
                                                <span class="w-value">@lang('user_dashboard.Total Referral')</span>
                                                <span class="w-numeric-title">{{$total_ref->count()}}</span>
                                            </a>
                                        </div>
                                        <div class="w-icon">
                                            <i class="fa fa-users"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 wow slideInRight">


                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 ">
                            <div class="widget-two">
                                <div class="widget-content">
                                    <div class="w-numeric-value">
                                        <div class="w-content">
                                            <a href="{{route('user.interest.log')}}">
                                                <span class="w-value">@lang('user_dashboard.Total Earned Interest')</span>
                                                <span
                                                    class="w-numeric-title">{{__($general->currency_sym)}} {{$total_interest}}</span>
                                            </a>
                                        </div>
                                        <div class="w-icon">
                                            <i class="fa fa-undo"></i>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 ">
                            <div class="widget-two">
                                <div class="widget-content">
                                    <div class="w-numeric-value">
                                        <div class="w-content">
                                            <a href="{{route('withdraw.history')}}">
                                                <span class="w-value">{{__('user_dashboard.Total Withdrawal')}}</span>
                                                <span
                                                    class="w-numeric-title">{{__($general->currency_sym)}} {{$total_withdraw->sum('amount')}}</span>
                                            </a>
                                        </div>
                                        <div class="w-icon">
                                            <i class="fa fa-dollar"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 ">
                            <div class="widget-two">
                                <div class="widget-content">
                                    <div class="w-numeric-value">
                                        <div class="w-content">
                                            <a href="{{route('user.deposit.history')}}">
                                                <span class="w-value">@lang('user_dashboard.Total Deposited')</span>
                                                <span
                                                    class="w-numeric-title">{{__($general->currency_sym)}} {{$total_deposit->sum('amount')}}</span>
                                            </a>
                                        </div>
                                        <div class="w-icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    @if(activeTemp()  == 1)
        <!-- page title begin-->
        <div class="page-title">
            <div class="container">

            </div>
        </div>
        <!-- page title end -->

        <!-- counter begin-->

        <!-- counter end -->

        <!-- about begin -->
        <div class="about pt-4">
            <div class="container">


            </div>
        </div>
        <!-- about end -->
    @elseif(activeTemp()  == 2)
        <section class="tools-section pranto-tool">
            <div class="thm-container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="tools-content pranto-bread">
                            <h3>@lang('Welcome'), {{Auth::user()->name}}!</h3>
                        </div><!-- /.tools-content -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </section><!-- /.tools-section -->

        @include('layouts.balance_show')

        <section class="about-section sec-pad">
            <div class="thm-container">
                <div class="row">
                    <!-- /.col-md-6 -->
                    <div class="col-md-12">
                        <!-- /.title -->
                        <div class="row">

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-about-box hvr-bounce-to-bottom">
                                    <div class="icon-box">
                                        <i class="fa fa-money"></i>
                                    </div><!-- /.icon-box -->
                                    <h3>@lang('Total Deposited')</h3>
                                    <p> {{__($general->currency_sym)}} {{$total_deposit->sum('amount')}}</p>
                                    <a href="{{route('user.deposit.history')}}"
                                       class="read-more">@lang('View Report')</a>
                                </div><!-- /.single-about-box -->
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-about-box hvr-bounce-to-bottom">
                                    <div class="icon-box">
                                        <i class="fa fa-reply"></i>
                                    </div><!-- /.icon-box -->
                                    <h3>{{__('Total Withdrawal')}}</h3>
                                    <p> {{__($general->currency_sym)}} {{$total_withdraw->sum('amount')}}</p>
                                    <a href="{{route('withdraw.history')}}"
                                       class="read-more">@lang('View Report')</a>
                                </div><!-- /.single-about-box -->
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-about-box hvr-bounce-to-bottom">
                                    <div class="icon-box">
                                        <i class="fa fa-undo"></i>
                                    </div><!-- /.icon-box -->
                                    <h3>@lang('Total Earned Interest')</h3>
                                    <p> {{__($general->currency_sym)}} {{$total_interest}}</p>
                                    <a href="{{route('user.interest.log')}}"
                                       class="read-more">@lang('View Report')</a>
                                </div><!-- /.single-about-box -->
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-about-box hvr-bounce-to-bottom">
                                    <div class="icon-box">
                                        <i class="fa fa-users"></i>
                                    </div><!-- /.icon-box -->
                                    <h3>@lang('Total Referral')</h3>
                                    <p>{{$total_ref->count()}}</p>
                                    <a href="{{url('/referral')}}" class="read-more">@lang('View Details')</a>
                                </div><!-- /.single-about-box -->
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-about-box hvr-bounce-to-bottom">
                                    <div class="icon-box">
                                        <i class="fa fa-credit-card-alt"></i>
                                    </div><!-- /.icon-box -->
                                    <h3>@lang('Total Referral Commission')</h3>
                                    <p>{{__($general->currency_sym)}} {{$total_ref_com->sum('amount')}}</p>
                                    <a href="{{url('referral/commission')}}"
                                       class="read-more">@lang('View Details')</a>
                                </div><!-- /.single-about-box -->
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-about-box hvr-bounce-to-bottom">
                                    <div class="icon-box">
                                        <i class="fa fa-exchange"></i>
                                    </div><!-- /.icon-box -->
                                    <h3>@lang('Total Transaction')</h3>
                                    <p>{{$total_trans->count()}}</p>
                                    <a href="{{route('user.transaction')}}"
                                       class="read-more">@lang('View Details')</a>
                                </div><!-- /.single-about-box -->
                            </div><!-- /.col-md-6 -->


                        </div><!-- /.row -->

                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </section><!-- /.about-section -->
    @elseif(activeTemp()  == 3)
        <section class="page-content">
            <div class="page-heading page-heading-bg pranto-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="title pranto-title">@lang('Welcome'), {{Auth::user()->name}}!</h1>
                        </div>

                        <div class="col-lg-6">
                            <div class="blog-sidebar">
                                <!--Start Search Widget-->
                                <div class="search-widget widget">
                                    <form name="search_form" id="copyBoard" class="sayit_search_form">
                                        <div class="form-element">
                                            <input type="url" id="ref" name="referral_link" readonly
                                                   value="{{url('/')}}/register/{{Auth::user()->reference_link}}"
                                                   class="input-field">
                                            <button id="copybtn" data-copytarget="#ref" type="button"
                                                    class="submit-btn"><i id="copybtn" data-copytarget="#ref"
                                                                          class="icofont icofont-copy"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @include('layouts.balance_show')
        <!-- how we build area start-->
            <div class="we-build-area">
                <div class="container">

                    <!--End Section Heading Row-->
                    <div class="row">
                        <div class="col-md-4 col-sm-6 pranto-home-margin">
                            <div class="single-how-we-build"><!-- single how we build -->
                                <div class="thumb">
                                    <div class="icon">
                                        <i class="fa fa-money"></i>
                                    </div>
                                </div>

                                <div class="content pranto-content">
                                    <h4 class="title">@lang('Total Deposited')</h4>
                                    <p> {{__($general->currency_sym)}} {{$total_deposit->sum('amount')}}</p>
                                </div>
                            </div><!-- //.single how we build -->
                        </div>
                        <div class="col-md-4 col-sm-6 pranto-home-margin">
                            <div class="single-how-we-build"><!-- single how we build -->
                                <div class="thumb">
                                    <div class="icon">
                                        <i class="fa fa-reply"></i>
                                    </div>
                                </div>
                                <div class="content pranto-content">
                                    <h4 class="title">{{__('Total Withdrawal')}}</h4>
                                    <p>{{__($general->currency_sym)}} {{$total_withdraw->sum('amount')}}</p>
                                </div>
                            </div><!-- //.single how we build -->
                        </div>
                        <div class="col-md-4 col-sm-6 pranto-home-margin">
                            <div class="single-how-we-build"><!-- single how we build -->
                                <div class="thumb">
                                    <div class="icon">
                                        <i class="fa fa-undo"></i>
                                    </div>
                                </div>
                                <div class="content pranto-content">
                                    <h4 class="title">@lang('Total Earned Interest')</h4>
                                    <p>{{__($general->currency_sym)}} {{$total_interest}}</p>
                                </div>
                            </div><!-- //.single how we build -->
                        </div>
                        <div class="col-md-4 col-sm-6 pranto-home-margin">
                            <div class="single-how-we-build"><!-- single how we build -->
                                <div class="thumb">
                                    <div class="icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                                <div class="content pranto-content">
                                    <h4 class="title">@lang('Total Referral')</h4>
                                    <p>{{$total_ref->count()}}</p>
                                </div>
                            </div><!-- //.single how we build -->
                        </div>

                        <div class="col-md-4 col-sm-6 pranto-home-margin">
                            <div class="single-how-we-build"><!-- single how we build -->
                                <div class="thumb">
                                    <div class="icon">
                                        <i class="fa fa-credit-card-alt"></i>
                                    </div>
                                </div>
                                <div class="content pranto-content">
                                    <h4 class="title">@lang('Referral Commission')</h4>
                                    <p>{{__($general->currency_sym)}} {{$total_ref_com->sum('amount')}}</p>
                                </div>
                            </div><!-- //.single how we build -->
                        </div>

                        <div class="col-md-4 col-sm-6 pranto-home-margin">
                            <div class="single-how-we-build"><!-- single how we build -->
                                <div class="thumb">
                                    <div class="icon">
                                        <i class="fa fa-exchange"></i>
                                    </div>
                                </div>
                                <div class="content pranto-content">
                                    <h4 class="title">@lang('Total Transaction')</h4>
                                    <p>{{$total_trans->count()}}</p>
                                </div>
                            </div><!-- //.single how we build -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- how we build area end -->
        </section>

    @elseif(activeTemp()  == 4)
        <div class="hyip-breadcrump"
             style="background-image: url({{asset('assets/images/bred.jpg')}}); background-size: cover; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="breadcrump-title pranto-title text-center">
                            <h2 class="add-space">@lang('Welcome'), {{Auth::user()->name}}!</h2>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="single-widget" id="search-bar">
                                    <form class="search sayit_search_form" name="search_form" id="copyBoard">
                                        <input class="sayit_field_search" type="url" id="ref"
                                               name="referral_link"
                                               value="{{url('/')}}/register/{{Auth::user()->reference_link}}"
                                               readonly>
                                        <button id="copybtn" data-copytarget="#ref" type="button"><i
                                                id="copybtn" data-copytarget="#ref" class="fa fa-copy"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.balance_show')
        <!-- feature begin-->
        <div class="feature">
            <div class="container">


                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="{{route('user.deposit.history')}}">
                            <div class="single-feature">
                                <div class="part-icon">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="part-text">
                                    <h3>@lang('Total Deposited')</h3>
                                    <p> {{__($general->currency_sym)}} {{$total_deposit->sum('amount')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="{{route('withdraw.history')}}">
                            <div class="single-feature">
                                <div class="part-icon">
                                    <i class="fa fa-reply"></i>
                                </div>
                                <div class="part-text">
                                    <h3>{{__('Total Withdrawal')}}</h3>
                                    <p> {{__($general->currency_sym)}} {{$total_withdraw->sum('amount')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="{{route('user.interest.log')}}">
                            <div class="single-feature">
                                <div class="part-icon">
                                    <i class="fa fa-undo"></i>
                                </div>
                                <div class="part-text">
                                    <h3>@lang('Total Earned Interest')</h3>
                                    <p> {{__($general->currency_sym)}} {{$total_interest}}</p>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="{{url('/referral')}}">
                            <div class="single-feature">
                                <div class="part-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="part-text">
                                    <h3>@lang('Total Referral')</h3>
                                    <p>{{$total_ref->count()}}</p>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="{{url('referral/commission')}}">
                            <div class="single-feature">
                                <div class="part-icon">
                                    <i class="fa fa-credit-card-alt"></i>
                                </div>
                                <div class="part-text">
                                    <h3>@lang('Referral Commission') </h3>
                                    <p>{{__($general->currency_sym)}} {{$total_ref_com->sum('amount')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="{{route('user.transaction')}}">
                            <div class="single-feature">
                                <div class="part-icon">
                                    <i class="fa fa-exchange"></i>
                                </div>
                                <div class="part-text">
                                    <h3>@lang('Total Transaction')</h3>
                                    <p>{{$total_trans->count()}}</p>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>
        <!-- feature end -->
    @endif
@endsection

@section('script')

    <script>


        (function () {

            'use strict';

            // click events
            document.body.addEventListener('click', copy, true);

            // event handler
            function copy(e) {


                // find target element
                var
                    t = e.target,
                    c = t.dataset.copytarget,
                    inp = (c ? document.querySelector(c) : null);

                // is element selectable?
                if (inp && inp.select) {

                    // select text
                    inp.select();

                    try {
                        // copy text
                        document.execCommand('copy');
                        inp.blur();

                        // copied animation
                        t.classList.add('copied');
                        setTimeout(function () {
                            t.classList.remove('copied');
                        }, 1500);
                    } catch (err) {
                        alert('please press Ctrl/Cmd+C to copy');
                    }

                }

            }

        })();

    </script>

@stop
