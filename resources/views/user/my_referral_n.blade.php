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
    <meta property="og:description" content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="100" />
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
                    <div class="widget-content widget-content-area br-6 " style="background-color: #3d4452">
{{--                        <h1 class="wow slideInRight">{{__($pt)}}</h1>--}}
                        {{--                        @include('layouts.balance_show')--}}

                        <div class="row mb-4 wow slideInLeft">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 m-auto ">
                            <h2 class="extra-margin">@lang('affiliate.My Referral Link')</h2>
                            <div class="widget-two">
                                <div class="widget-content">
                                    <div class="w-numeric-value">
                                        <div class="w-content">



                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><span
                                                            style="color: white" id="copybtn" data-copytarget="#ref"
                                                            class="sayit_icon_search"><i id="copybtn"
                                                                                         data-copytarget="#ref"
                                                                                         class="fa fa-copy"></i> </span></span>
                                                </div>
                                                <input
                                                    class="sayit_field_search form-control" type="url" id="ref"
                                                    name="referral_link"
                                                    value="{{url('/')}}/register/{{Auth::user()->reference_link}}"
                                                    form="search_form">


                                            </div>
{{--                                            <span class="w-value">@lang('user_dashboard.Share (Post)')</span>--}}


                                        </div>
{{--                                        <div class="w-icon">--}}
{{--                                            <h4><a href="{{url('/')}}/share">  <i class="fa fa-share"></i></a></h4>--}}
{{--                                        </div>--}}
                                    </div>

                                </div>
                            </div>
                        </div>
                        </div>
                        <h2 class="extra-margin m-auto">@lang('affiliate.My Referral Statistic')</h2>
                        <div class="post-content">

                            <div class="pranto-ul" style="color: white" >

                                <ul style="background-color: #888ea8" class="mt-3">

                                    <li class="container" > <strong >{{Auth::user()->username}}</strong>

                                        <ul style="color: red">

                                            {!! showBelowUser(Auth::id()) !!}

                                        </ul>

                                    </li>



                                </ul>

                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>



@endsection



@section('script')



    <script>





        (function() {



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

                        setTimeout(function() { t.classList.remove('copied'); }, 1500);

                    }

                    catch (err) {

                        alert('please press Ctrl/Cmd+C to copy');

                    }



                }



            }



        })();



    </script>



@stop

