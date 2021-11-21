@extends('layouts.master')

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
	@if(activeTemp()  == 1)
	<!-- page title begin-->
	<div class="page-title">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6 col-lg-6">
					<h2 class="extra-margin">@lang('Deposit via') {{__($pt)}}</h2>

				</div>
			</div>
		</div>
	</div>
	<!-- page title end -->
	<!-- blog post begin-->
	<div class="blog-post single-blog-post">
		<div class="container">
			<div class="row page-bar-btn">
				<div class="col-md-8 offset-md-2">

					<div class="card panel-primary">
						<div class="card-header">
							<h3 class="panel-title text-center">@lang('Deposit via') {{__($pt)}}</h3>
						</div>

						<div class="card-body text-center">

							<div  class="col-md-8 offset-md-2 text-center">
								<h3 class="text-color"> @lang('PLEASE SEND EXACTLY') <b style="color: green"> {{ $bcoin }}</b> @lang('LTC')</h3>
								<h4 class="text-color">@lang('TO') <b style="color: green"> {{ $wallet}}</b></h4>
								{!! $qrurl !!}
								<h3 class="text-color" style="font-weight:bold;">@lang('SCAN TO SEND')</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@elseif(activeTemp()  == 2)
		<section class="tools-section" style="padding-bottom: 110px;">
			<div class="thm-container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="tools-content pranto-bread">
							<h3>{{__($pt)}}</h3>
						</div><!-- /.tools-content -->
					</div><!-- /.col-md-6 -->

				</div><!-- /.row -->
			</div><!-- /.thm-container -->
		</section>

		<section class="team-section sec-pad">
			<div class="thm-container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-primary">
							<div class="panel-heading text-center">
								<h3>@lang('Deposit via') {{__($pt)}}</h3>
							</div>
							<div class="panel-body text-center">
								<h3 class="text-color"> @lang('PLEASE SEND EXACTLY') <b style="color: green"> {{ $bcoin }}</b> @lang('LTC')</h3>
								<h4 class="text-color">@lang('TO') <b style="color: green"> {{ $wallet}}</b></h4>
								{!! $qrurl !!}
								<h3 class="text-color" style="font-weight:bold;">@lang('SCAN TO SEND')</h3>
							</div>
						</div>
					</div>
				</div><!-- /.row -->
			</div><!-- /.thm-container -->
		</section>

	@elseif(activeTemp()  == 3)
		<section class="page-content">
			<div class="page-heading page-heading-bg pranto-heading">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h1 class="title pranto-title">{{__($pt)}}</h1>
						</div>
					</div>
				</div>
			</div>
		</section><br><br>

		<section class="latest-news-are pranto-section-bottom">
			<div class="container">
				<div class="row">

					<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-primary">
							<div class="panel-heading text-center">
								<h3>@lang('Deposit via') {{__($pt)}}</h3>
							</div>
							<div class="panel-body text-center">
								<h3 class="text-color"> @lang('PLEASE SEND EXACTLY') <b style="color: green"> {{ $bcoin }}</b> @lang('LTC')</h3>
								<h4 class="text-color">@lang('TO') <b style="color: green"> {{ $wallet}}</b></h4>
								{!! $qrurl !!}
								<h3 class="text-color" style="font-weight:bold;">@lang('SCAN TO SEND')</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	@elseif(activeTemp()  == 4)
		<div class="hyip-breadcrump" style="background-image: url({{asset('assets/images/bred.jpg')}}); background-size: cover;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-8 col-lg-8">
						<div class="breadcrump-title text-center">
							<h2 class="add-space">@lang('Deposit via') {{__($pt)}}</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="login">
			<div class="container">
				<div class="row justify-content-center">

					<div class="card panel-primary">
						<div class="card-header">
							<h3 class="panel-title text-center">@lang('Deposit via') {{__($pt)}}</h3>
						</div>

						<div class="card-body text-center">

							<div  class="col-md-8 offset-md-2 text-center">
								<h3 class="text-color"> @lang('PLEASE SEND EXACTLY') <b style="color: green"> {{ $bcoin }}</b> @lang('LTC')</h3>
								<h4 class="text-color">@lang('TO') <b style="color: green"> {{ $wallet}}</b></h4>
								{!! $qrurl !!}
								<h3 class="text-color" style="font-weight:bold;">@lang('SCAN TO SEND')</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	@endif
@endsection