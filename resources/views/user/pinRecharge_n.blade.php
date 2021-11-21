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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/custom.css')}}">
@stop


@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">


                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">

                        <h1 class="mb-5">@lang("deposit.Recharge Wallet With E-PIN")</h1>

                        <div class="col-md-2 float-right mb-3 mt-3 ">
                            {{--                            <a href="{{route('add.new.ticket')}}" class="btn btn-warning btn-block" style="color: black ;"><b>lang('deposit.New Ticket')</b></a>--}}
                        </div>


                        <!-- price begin-->
                        <div class="price">
                            <div class="container">


                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 wow pulse">
                                        @if (count($errors) > 0)
                                            <div class="row">
                                                @foreach ($errors->all() as $error)
                                                    <div class="col-md-12">
                                                        <div class="alert alert-danger alert-dismissible">
                                                            <button type="button" class="close" data-dismiss="alert"
                                                                    aria-hidden="true">&times;
                                                            </button>
                                                            <p style="color: black">{{__($error)}}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif

                                            @if( Session::has( 'tsuccess' ))
                                                <div class="alert alert-success alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <p style="color: black">{{ Session::get( 'tsuccess' ) }}</p>
                                                </div>

                                            @elseif( Session::has( 'tsuccess' ))
                                                <div class="alert alert-danger alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <p style="color: black"> {{ Session::get( 'twarning' ) }} </p>
                                                </div>

                                            @elseif( Session::has( 'talert' ))
                                                <div class="alert alert-danger alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <p style="color: black">{{ Session::get( 'talert' ) }} </p>
                                                </div>

                                            @endif
{{--                                        <div class="flash-message">--}}
{{--                                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)--}}
{{--                                                @if(Session::has('alert-' . $msg))--}}
{{--                                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </div>--}}
                                        <div class="tab-content" id="myTabContent2">
                                            <div class="tab-pane fade show active" id="monthly" role="tabpanel"
                                                 aria-labelledby="monthly-tab">
                                                <div class="row">

                                                    <div class="col-xl-12 col-lg-12">
                                                        <form action="{{route('pin.recharge.post')}}" method="post">
                                                            @csrf
                                                            <input class="form-control input-lg" id="code" value=""
                                                                   pattern=".{35,35}" name="pin" maxlength="35"
                                                                   autocomplete="off" type="tel"
                                                                   Placeholder=' @lang("deposit.ENTER PIN")' required/>
                                                            <button type="submit"
                                                                    class="btn btn-primary btn-block btn-lg">@lang("deposit.RECHARGE NOW")</button>

                                                        </form>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- price end -->
                    </div>
                </div>

            </div>

        </div>

    </div>



@endsection
@section('script')
    <script>
        $('#code').on('keypress change', function () {

            var xx = document.getElementById('code').value;
            if (xx.length < 32) {

                $(this).val(function (index, value) {
                    return value.replace(/\W/gi, '').replace(/(.{8})/g, '$1-');

                });
            }
        });


    </script>

@endsection



