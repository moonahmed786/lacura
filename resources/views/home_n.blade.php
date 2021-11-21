@extends('layouts.index')

@section('SEO')
<meta name="description" content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。">
	<meta name="keywords" content="精神的, トラウマ, 中毒, 病気, 魂の償い, 依存, 浄化, 開運, お祓い">
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
	<title>La Cura - 奇跡 {{  '| '.$pt }}</title>
@stop

@section('style')
{{--    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/custom.css')}}">--}}
@stop
@section('content')
    <!--WhyWe Us Start-->
    <div class="ast_whywe_wrapper ast_toppadder70 ast_bottompadder70 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading " style="margin-top: 100px">
                        <h1>@lang('Welcome')  <span>, {{Auth::user()->name}}!</span></h1>
{{--                        <div class="col-lg-8">--}}
{{--                            <form class="search sayit_search_form" name="search_form" id="copyBoard">--}}
{{--                                <input class="sayit_field_search  ast_journal_box_wrapper" type="url" id="ref" name="referral_link"  value="{{url('/')}}/register/{{Auth::user()->username}}" readonly>--}}
{{--                                <button id="copybtn" class="ast_btn " data-copytarget="#ref" type="button"><i id="copybtn" data-copytarget="#ref" class="fa fa-copy"></i></button>--}}
{{--                            </form>--}}
{{--                        </div>--}}

                    </div>
                </div>
                <div class="ast_whywe_info">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ast_whywe_info_box">
                            <span><img src="index_layout/images/content/ww_1.png" alt=""></span>
                            <div class="ast_whywe_info_box_info">
                                <h3>@lang('Balance'): {{__($general->currency_sym)}} {{round(Auth::user()->balance,4)}}</h3>
                                <p>{{__($general->deposit_wallet_name) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ast_whywe_info_box">
                            <span><img src="index_layout/images/content/ww_2.png" alt=""></span>
                            <div class="ast_whywe_info_box_info">
                                <h3>@lang('Balance'): {{__($general->currency_sym)}} {{round(Auth::user()->interest_balance,4)}}</h3>
                                <p>{{__($general->interest_wallet_name) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ast_whywe_info_box">
                            <span><img src="index_layout/images/content/ww_3.png" alt=""></span>
                            <div class="ast_whywe_info_box_info">
                                <h3>@lang('Total Deposited')</h3>
                                <p> {{__($general->currency_sym)}} {{$total_deposit->sum('amount')}}</p>
                                <a href="{{route('user.deposit.history')}}" class="read-more">@lang('View Report')</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ast_whywe_info_box">
                            <span><img src="index_layout/images/content/ww_4.png" alt=""></span>
                            <div class="ast_whywe_info_box_info">
                                <h3>{{__('Total Withdrawal')}}</h3>
                                <p> {{__($general->currency_sym)}} {{$total_withdraw->sum('amount')}}</p>
                                <a href="{{route('withdraw.history')}}" class="read-more">@lang('View Report')</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ast_whywe_info_box">
                            <span><img src="index_layout/images/content/ww_5.png" alt=""></span>
                            <div class="ast_whywe_info_box_info">
                                <h3>@lang('Total Earned Interest')</h3>
                                <p> {{__($general->currency_sym)}} {{$total_interest}}
                                <a href="{{route('user.interest.log')}}" class="read-more pl-3">@lang('View Report')</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ast_whywe_info_box">
                            <span><img src="index_layout/images/content/ww_6.png" alt=""></span>
                            <div class="ast_whywe_info_box_info">
                                <h3>@lang('Total Referral')</h3>
                                <p>{{$total_ref->count()}}</p>
                                <a href="{{url('/referral')}}" class="read-more">@lang('View Details')</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ast_whywe_info_box">
                            <span><img src="index_layout/images/content/ww_5.png" alt=""></span>
                            <div class="ast_whywe_info_box_info">
                                <h3>@lang('Total Referral Commission')</h3>
                                <p>{{__($general->currency_sym)}} {{$total_ref_com->sum('amount')}}</p>
                                <a href="{{url('referral/commission')}}" class="read-more">@lang('View Details')</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ast_whywe_info_box">
                            <span><img src="index_layout/images/content/ww_6.png" alt=""></span>
                            <div class="ast_whywe_info_box_info">
                                <h3>@lang('Total Transaction')</h3>
                                <p>{{$total_trans->count()}}</p>
                                <a href="{{route('user.transaction')}}" class="read-more">@lang('View Details')</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ast_whywe_info_box">
                            <span><img src="index_layout/images/content/ww_6.png" alt=""></span>
                            <div class="ast_whywe_info_box_info">
                                <p>Trusted by million clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--WhyWe Us End-->
    <!--Timer Section start -->
    <div class="ast_timer_wrapper ast_toppadder70 ast_bottompadder40">
        <div class="ast_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">
                        <h1>now <span>we have</span></h1>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected hummer.</p>
                    </div>
                </div>
                <div class="ast_counter_wrapper">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="ast_counter">
                            <span><img src="index_layout/images/content/ww_6.png" alt=""></span>
                            <h2 class="timer" data-from="0" data-to="200" data-speed="5000"></h2>
                            <h4>Peoples</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="ast_counter">
                            <span><img src="index_layout/images/content/timer_2.png" alt="timer"></span>
                            <h2 class="timer" data-from="0" data-to="800" data-speed="5000"></h2>
                            <h4>skilled Astrologers</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="ast_counter">
                            <span><img src="index_layout/images/content/timer_3.png" alt="timer"></span>
                            <h2 class="timer" data-from="0" data-to="60" data-speed="5000"></h2>
                            <h4>Countries Covered</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="ast_counter">
                            <span><img src="index_layout/images/content/timer_4.png" alt="timer"></span>
                            <h2 class="timer" data-from="0" data-to="30" data-speed="5000"></h2>
                            <h4>Years of Experiences</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Timer Section end -->



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
