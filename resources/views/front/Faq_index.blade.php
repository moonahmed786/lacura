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

@section('header')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('assets/css/pages/faq/faq.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
@stop
@section('content')
    <body class="sidebar-noneoverflow">

    <div class="fq-header-wrapper">
        <nav class="navbar navbar-expand">
            <div class="container">
                <a class="navbar-brand " href="{{route('root')}}"><img style="max-width: 38% !important;" alt="logo image"  src="@if(request()->session()->get('lang') == 'ja' ) {{asset('assets/images/logo/logo.png')}} @else {{asset('assets/images/logo/logo-pt.png')}} @endif">
                    <span class="navbar-brand-name"></span></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">

                            <a class="nav-link" href="{{url('/')}}">@lang('Home')</a>
                        </li>
                        <li class="nav-item">
                            {{--                            <a class="nav-link" target="_blank" href="">Contact Us</a>--}}
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center order-md-0 order-1">
                    <h1 class="">@lang('faq.FAQ')</h1>
                    <p class="">@lang('faq.FAQ text')</p>
                    {{--                    <button class="btn">Start Learning</button>--}}
                </div>
                <div class="col-md-6 order-md-0 order-0">
                    <a target="_blank" href="#" class="banner-img">
                        <img src="assets/img/faq.svg" class="d-block" alt="header-image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="faq container">

        <div class="faq-layouting layout-spacing">




            <div class="fq-tab-section">
                <div class="row">
                    <div class="col-md-12 mb-5 mt-5">

                        <h2>@lang('faq.Some common questions')</h2>

                        <div class="accordion" id="accordionExample">
                            @foreach($Faqs as $faq)
                                <div class="card">
                                    <div class="card-header" id="fqheading{{$faq->id}}">
                                        <div class="mb-0" data-toggle="collapse" role="navigation"
                                             data-target="#fqcollapse{{$faq->id}}" aria-expanded="false"
                                             aria-controls="fqcollapse{{$faq->id}}">
                                            <span class="fa fa-ticket"></span> <span class="faq-q-title ml-2">
                                                @if(session()->get('lang')=='pt-br')

                                                    {!! $faq->title  !!}
                                                @else
                                                    {!!$faq->title_jp!!}

                                                @endif
</span>
                                            <div class="like-faq"><span class="fa fa-thumbs-up"></span> <span
                                                    class="faq-like-count">{{$faq->likes}}</span></div>
                                        </div>
                                    </div>
                                    <div id="fqcollapse{{$faq->id}}" class="collapse"
                                         aria-labelledby="fqheading{{$faq->id}}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @if(session()->get('lang')=='pt-br')
                                                <p>{!! $faq->description !!}</p>
                                            @else
                                                <p>{!! $faq->description_jp !!}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>

    <div id="miniFooterWrapper" class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="position-relative">
                        <div class="arrow text-center">
                            <p class="">Up</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="assets/js/pages/faq/faq.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    </body>


@endsection
@section('script')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                showData: {},
                newdata: {
                    amount: '',
                    wallet_type: '',
                    username: '',
                },
                codeData: {
                    code: ''
                },
                balance: {},
                hasmsg: '',
                wallet_name: null,
                errors: ''
            },
            computed: {
                amount() {
                    return {{intval($general->bal_trans_fixed_charge)}}+(parseInt(this.newdata.amount) * parseInt({{ intval($general->bal_trans_per_charge) }})) / 100
                }
            },
            methods: {

                wallet(val) {
// val == 1 (Deposit Wallet) & val == 2 (Interest Wallet)
                    if (val == 1) {
                        this.balance = '{{ Auth::user()->balance  }}';
                        this.wallet_name = '{{__($general->deposit_wallet_name) }}';
                    } else {
                        this.balance = '{{ Auth::user()->interest_balance }}';
                        this.wallet_name = '{{ __($general->interest_wallet_name) }}';
                    }
                },
                submitSearch() {
                    var input = this.newdata;
                    axios.post('{{route('search.user')}}', input).then(function (e) {
                        app.hasmsg = e.data;
                        if (e.data.success == true) {
                            $('#InputMailUser').css('box-shadow', '1px 1px 0px #039f08, 0 0 4px #039f08, 0 0 4px #039f08');
                            $('#bal').css('display', 'block');
                        } else {
                            $('#InputMailUser').css('box-shadow', '1px 1px 0px #de0015, 0 0 4px #de0015, 0 0 4px #de0015');
                            $('#bal').css('display', 'none');
                        }
                    });
                },
                submitCode() {
                    var input = this.codeData;
                    axios.post('{{route('check_two_facetor')}}', input).then(function (e) {

                        if (e.data.success == true) {
                            $("#balanceTransfer").submit();
                        } else {
                            swal(e.data.message, "", "warning");
                        }

                    }).catch(function (error) {
                        app.errors = error.response.data.errors.code;
                    })
                }
            }


        });
    </script>
@stop
