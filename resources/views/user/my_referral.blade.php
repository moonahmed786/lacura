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




    <!-- page title begin-->

    <div class="page-title">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-xl-6 col-lg-6">

                    <h2 class="extra-margin">{{__($pt)}}</h2>

                </div>

            </div>

        </div>

    </div>

    <!-- page title end -->

    <!-- counter begin-->
    @include('layouts.balance_show')
    <!-- counter end -->
    <br>

    <div class="blog-post" style="padding:0" id="refpranto">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-xl-8 col-lg-8">

                    <div class="section-title text-center">

                        <h2 class="extra-margin">@lang('My Referral Link')</h2>

                    </div>

                </div>

            </div>



            <div class="row wow rubberBand">

                <div class="col-md-12">

                    <div class="single-blog">



                        <div class="part-text">

                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-6">



                                    <div class="widget widget_search">

                                        <form name="search_form" id="copyBoard" class="sayit_search_form">



                                            <span style="color: black"  id="copybtn" data-copytarget="#ref" class="sayit_icon_search"><i id="copybtn" data-copytarget="#ref"  class="fa fa-copy"></i> </span>

                                            <input readonly class="sayit_field_search" type="url" id="ref" name="referral_link"  value="{{url('/')}}/register/{{Auth::user()->reference_link}}"  form="search_form">

                                            <div class="clear"></div>

                                        </form>

                                    </div>





                                </div>





                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="blog-post" style="padding:0" id="refpranto">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-xl-8 col-lg-8">

                    <div class="section-title text-center">

                        <h2 class="extra-margin">@lang('My Referral Statistic')</h2>

                    </div>

                </div>

            </div>



            <div class="row wow rubberBand">

                <div class="col-md-12">

                    <div class="single-blog">



                        <div class="part-text pranto-ul">

                            <ul style="width: 100%">

                                <li class="container"><p> <strong>{{Auth::user()->username}}</strong> </p>

                                    <ul>
{{--                                        {!! showBelowUser(auth()->user()->id) !!}--}}
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

