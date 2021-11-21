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

@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">


                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                    <div class="widget-content widget-content-area br-6">
                        <h1>@lang('deposit.Deposit via') {{__('deposit.'.$pt)}}</h1>


                        <div class="container">
                            <div class="row justify-content-center">

                                <div class="col-md-5 col-lg-5 text-center ">
                                    @if (count($errors) > 0)


                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-hidden="true">&times;
                                                </button>
                                                <p style="color: black">{{__($error)}}</p>
                                            </div>
                                        @endforeach


                                    @endif

                                    <div class="card border-success mb-3 mt-2" style="max-width: 23rem;">
                                        <div class="card-header border-success">@lang('deposit.Please Send Exactly')</div>
                                        <div class="card-body text-center">
                                            <h5 class="">{{ $bcoin }} BTC </h5>


                                            <h5 class=" mt-2">@lang('deposit.to')</h5>
                                            <p class="card-text"> {{ $wallet}}</p>
                                            <img src="{{ $qrurl }}" style='width:300px;'class="mb-2">
                                            <a target="_blank" href="{{ $status_url }}">@lang('deposit.Click to Check Details') </a>
                                        </div>
                                        <div class="card-footer bg-transparent border-success">@lang('deposit.Scan to Send')</div>

                                        <p style="color: red" class=" text-justify text-center">@lang('deposit.*After making payment close this page and wait for 3 t0 5 minutes! when your transaction complete you will get an email and your balance will be updated.')</p>

                                </div>

                                    </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    {{--	@if(activeTemp()  == 1)--}}
	<!-- page title begin-->




	<!-- page title end -->
	<!-- blog post begin-->

{{--	@elseif(activeTemp()  == 2)--}}
{{--		<section class="tools-section" style="padding-bottom: 110px;">--}}
{{--			<div class="thm-container">--}}
{{--				<div class="row">--}}
{{--					<div class="col-md-12 text-center">--}}
{{--						<div class="tools-content pranto-bread">--}}
{{--							<h3>{{__($pt)}}</h3>--}}
{{--						</div><!-- /.tools-content -->--}}
{{--					</div><!-- /.col-md-6 -->--}}

{{--				</div><!-- /.row -->--}}
{{--			</div><!-- /.thm-container -->--}}
{{--		</section>--}}

{{--		<section class="team-section sec-pad">--}}
{{--			<div class="thm-container">--}}
{{--				<div class="row">--}}
{{--					<div class="col-md-6 col-md-offset-3">--}}
{{--						<div class="panel panel-primary">--}}
{{--							<div class="panel-heading text-center">--}}
{{--								<h3>@lang('Deposit via') {{__($pt)}}</h3>--}}
{{--							</div>--}}
{{--							<div class="panel-body text-center">--}}
{{--								<h3 class="text-color"> @lang('PLEASE SEND EXACTLY') <b style="color: green"> {{ $bcoin }}</b> @lang('BTC')</h3>--}}
{{--								<h4 class="text-color">@lang('TO') <b style="color: green"> {{ $wallet}}</b></h4>--}}
{{--								{!! $qrurl !!}--}}
{{--								<h3 class="text-color" style="font-weight:bold;">@lang('SCAN TO SEND')</h3>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div><!-- /.row -->--}}
{{--			</div><!-- /.thm-container -->--}}
{{--		</section>--}}
{{--	@elseif(activeTemp()  == 3)--}}
{{--		<section class="page-content">--}}
{{--			<div class="page-heading page-heading-bg pranto-heading">--}}
{{--				<div class="container">--}}
{{--					<div class="row">--}}
{{--						<div class="col-lg-12 text-center">--}}
{{--							<h1 class="title pranto-title">{{__($pt)}}</h1>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</section><br><br>--}}

{{--		<section class="latest-news-are pranto-section-bottom">--}}
{{--			<div class="container">--}}
{{--				<div class="row">--}}

{{--					<div class="col-md-6 col-md-offset-3">--}}
{{--						<div class="panel panel-primary">--}}
{{--							<div class="panel-heading text-center">--}}
{{--								<h3>@lang('Deposit via') {{__($pt)}}</h3>--}}
{{--							</div>--}}
{{--							<div class="panel-body text-center">--}}
{{--								<h3 class="text-color"> @lang('PLEASE SEND EXACTLY') <b style="color: green"> {{ $bcoin }}</b> @lang('BTC')</h3>--}}
{{--								<h4 class="text-color">@lang('TO') <b style="color: green"> {{ $wallet}}</b></h4>--}}
{{--								{!! $qrurl !!}--}}
{{--								<h3 class="text-color" style="font-weight:bold;">@lang('SCAN TO SEND')</h3>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</section>--}}
{{--	@elseif(activeTemp()  == 4)--}}
{{--		<div class="hyip-breadcrump" style="background-image: url({{asset('assets/images/bred.jpg')}}); background-size: cover;">--}}
{{--			<div class="container">--}}
{{--				<div class="row justify-content-center">--}}
{{--					<div class="col-xl-8 col-lg-8">--}}
{{--						<div class="breadcrump-title text-center">--}}
{{--							<h2 class="add-space">@lang('Deposit via') {{__($pt)}}</h2>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}

{{--		<div class="login">--}}
{{--			<div class="container">--}}
{{--				<div class="row justify-content-center">--}}

{{--					<div class="card panel-primary">--}}
{{--						<div class="card-header">--}}
{{--							<h3 class="panel-title text-center">@lang('Deposit via') {{__($pt)}}</h3>--}}
{{--						</div>--}}

{{--						<div class="card-body text-center">--}}

{{--							<div  class="col-md-8 offset-md-2 text-center">--}}
{{--								<h3 class="text-color"> @lang('PLEASE SEND EXACTLY') <b style="color: green"> {{ $bcoin }}</b> @lang('BTC')</h3>--}}
{{--								<h4 class="text-color">@lang('TO') <b style="color: green"> {{ $wallet}}</b></h4>--}}
{{--								{!! $qrurl !!}--}}
{{--								<h3 class="text-color" style="font-weight:bold;">@lang('SCAN TO SEND')</h3>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}

{{--	@endif--}}
@endsection
