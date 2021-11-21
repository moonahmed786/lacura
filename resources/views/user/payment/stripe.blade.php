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

	<style>
		.credit-card-box .form-control.error {
			border-color: red;
			outline: 0;
			box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
		}
		.credit-card-box label.error {
			font-weight: bold;
			color: red;
			padding: 2px 8px;
			margin-top: 2px;
		}
		.error{
			color: red;
		}
		.well{
			background: #202d3a;
		}
		.form-control, .fileinput .thumbnail {
			/*background: #202d3a;*/
			color: #a2f935;
		}
		hr{
			border-color: #329f86;
		}
		.form-control, .input-group-addon{
			border: 1px solid #329f86;
			padding: 5px;
		}
		.stripe-details{
			margin-top: 20px !important;
		}
	</style>
@stop

@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">


                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                    <div class="widget-content widget-content-area br-6">
                        <h1>@lang('deposit.Stripe Payment')</h1>


                        <div class="container">
                            <div class="row ">

                                <div class="col-12 text-center ">
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

                                    <div class="card border-success mb-3 mt-2">
                                        <div class="card-header border-success">@lang('deposit.PLEASE FILL THE FORM')</div>
                                        <form role="form" class="form-horizontal " id="payment-form" method="POST" action="{{ route('ipn.stripe')}}" >
                                        <div class="card-body">
                                            <div class="row ">
                                                <div class="col-xs-12 mx-auto">
                                                    <div class="card-wrapper"></div>
                                                </div>
                                            </div>

                                                {{csrf_field()}}

                                                <input type="hidden" value="{{ $track }}" name="track">

                                                <div class="row stripe-details">
                                                    <div class="col-xs-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="text-color">@lang('deposit.CARD HOLDER NAME')</label>
                                                            <div class="input-group">
                                                                <input
                                                                    type="text"
                                                                    class="form-control input-lg"
                                                                    name="name"
                                                                    placeholder="@lang('deposit.Card Name')"
                                                                    autocomplete="off"
                                                                />
                                                                <span class="input-group-addon"><i class="fa fa-font"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="cardNumber" class="text-color">@lang('deposit.CARD NUMBER')</label>
                                                            <div class="input-group">
                                                                <input
                                                                    type="tel"
                                                                    class="form-control input-lg"
                                                                    name="cardNumber"
                                                                    placeholder="@lang('deposit.Valid Card Number')"
                                                                    autocomplete="off"
                                                                    required
                                                                />
                                                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <div class="col-xs-7 col-md-7">
                                                        <div class="form-group">
                                                            <label for="cardExpiry" class="text-color">@lang('deposit.EXPIRATION DATE')</label>
                                                            <input
                                                                type="tel"
                                                                class="form-control input-lg input-sz"
                                                                name="cardExpiry"
                                                                placeholder="@lang('MM / YYYY')"
                                                                autocomplete="off"
                                                                required
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-5 col-md-5 pull-right">
                                                        <div class="form-group">
                                                            <label for="cardCVC" class="text-color">@lang('deposit.CVC CODE')</label>
                                                            <input
                                                                type="tel"
                                                                class="form-control input-lg input-sz"
                                                                name="cardCVC"
                                                                placeholder="@lang('deposit.CVC CODE')"
                                                                autocomplete="off"
                                                                required
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                        </div>
                                        <div class="card-footer bg-transparent border-success">

                                        <button class="btn btn-success btn-lg " type="submit"> @lang('deposit.PAY NOW') </div>
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



{{--	@elseif(activeTemp()  == 2)--}}
{{--		<section class="tools-section" style="padding-bottom: 110px;">--}}
{{--			<div class="thm-container">--}}
{{--				<div class="row">--}}
{{--					<div class="col-md-12 text-center">--}}
{{--						<div class="tools-content pranto-bread">--}}
{{--							<h3>@lang('Stripe Payment')</h3>--}}
{{--						</div><!-- /.tools-content -->--}}
{{--					</div><!-- /.col-md-6 -->--}}

{{--				</div><!-- /.row -->--}}
{{--			</div><!-- /.thm-container -->--}}
{{--		</section>--}}

{{--		<section class="team-section sec-pad">--}}
{{--			<div class="thm-container">--}}

{{--				<div class="row">--}}
{{--					<div class="col-md-8 col-md-offset-2">--}}
{{--						<div class="card">--}}
{{--							<h1 class="text-center text-color">@lang('Stripe Payment')</h1>--}}
{{--							<hr/>--}}
{{--							<div class="card-body">--}}
{{--								<div class="row ">--}}
{{--									<div class="col-xs-12 mx-auto">--}}
{{--										<div class="card-wrapper"></div>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<form role="form" class="form-horizontal" id="payment-form" method="POST" action="{{ route('ipn.stripe')}}" >--}}
{{--									{{csrf_field()}}--}}

{{--									<input type="hidden" value="{{ $track }}" name="track">--}}

{{--									<div class="row stripe-details">--}}
{{--										<div class="col-xs-6 col-md-6">--}}
{{--											<div class="form-group">--}}
{{--												<label for="name" class="text-color">@lang('CARD HOLDER NAME')</label>--}}
{{--												<div class="input-group">--}}
{{--													<input--}}
{{--															type="text"--}}
{{--															class="form-control input-lg"--}}
{{--															name="name"--}}
{{--															placeholder="@lang('Card Name')"--}}
{{--															autocomplete="off"--}}
{{--													/>--}}
{{--													<span class="input-group-addon"><i class="fa fa-font"></i></span>--}}
{{--												</div>--}}
{{--											</div>--}}
{{--										</div>--}}

{{--										<div class="col-xs-6 col-md-6">--}}
{{--											<div class="form-group">--}}
{{--												<label for="cardNumber" class="text-color">@lang('CARD NUMBER')</label>--}}
{{--												<div class="input-group">--}}
{{--													<input--}}
{{--															type="tel"--}}
{{--															class="form-control input-lg"--}}
{{--															name="cardNumber"--}}
{{--															placeholder="@lang('Valid Card Number')"--}}
{{--															autocomplete="off"--}}
{{--															required--}}
{{--													/>--}}
{{--													<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>--}}
{{--												</div>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--									<br>--}}

{{--									<div class="row">--}}
{{--										<div class="col-xs-7 col-md-7">--}}
{{--											<div class="form-group">--}}
{{--												<label for="cardExpiry" class="text-color">@lang('EXPIRATION DATE')</label>--}}
{{--												<input--}}
{{--														type="tel"--}}
{{--														class="form-control input-lg input-sz"--}}
{{--														name="cardExpiry"--}}
{{--														placeholder="@lang('MM / YYYY')"--}}
{{--														autocomplete="off"--}}
{{--														required--}}
{{--												/>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--										<div class="col-xs-5 col-md-5">--}}
{{--											<div class="form-group">--}}
{{--												<label for="cardCVC" class="text-color">@lang('CVC CODE')</label>--}}
{{--												<input--}}
{{--														type="tel"--}}
{{--														class="form-control input-lg input-sz"--}}
{{--														name="cardCVC"--}}
{{--														placeholder="@lang('CVC')"--}}
{{--														autocomplete="off"--}}
{{--														required--}}
{{--												/>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--									<br>--}}
{{--									<div class="row">--}}
{{--										<div class="col-xs-12">--}}
{{--											<button class="btn btn-success btn-lg btn-block login-button" type="submit"> @lang('PAY NOW') </button>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--								</form>--}}
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
{{--							<h1 class="title pranto-title">@lang('Stripe Payment')</h1>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</section><br><br>--}}

{{--		<section class="latest-news-are pranto-section-bottom">--}}
{{--			<div class="container">--}}
{{--				<div class="row">--}}
{{--					<div class="col-md-8 col-md-offset-2">--}}
{{--						<div class="card panel panel-primary" style="padding: 10px">--}}
{{--							<h1 class="text-center text-color panel-heading">@lang('Stripe Payment')</h1>--}}
{{--							<hr/>--}}
{{--							<div class="card-body panel-body">--}}
{{--								<div class="row ">--}}
{{--									<div class="col-xs-12 mx-auto">--}}
{{--										<div class="card-wrapper"></div>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<form role="form" class="form-horizontal" id="payment-form" method="POST" action="{{ route('ipn.stripe')}}" >--}}
{{--									{{csrf_field()}}--}}

{{--									<input type="hidden" value="{{ $track }}" name="track">--}}

{{--									<div class="row stripe-details">--}}
{{--										<div class="col-md-6">--}}
{{--											<div class="form-group">--}}
{{--												<label for="name" class="text-color">@lang('CARD HOLDER NAME')</label>--}}
{{--												<div class="input-group">--}}
{{--													<input--}}
{{--															type="text"--}}
{{--															class="form-control input-lg"--}}
{{--															name="name"--}}
{{--															placeholder="@lang('Card Name')"--}}
{{--															autocomplete="off"--}}
{{--													/>--}}
{{--													<span class="input-group-addon"><i class="fa fa-font"></i></span>--}}
{{--												</div>--}}
{{--											</div>--}}
{{--										</div>--}}

{{--										<div class="col-md-6">--}}
{{--											<div class="form-group">--}}
{{--												<label for="cardNumber" class="text-color">@lang('CARD NUMBER')</label>--}}
{{--												<div class="input-group">--}}
{{--													<input--}}
{{--															type="tel"--}}
{{--															class="form-control input-lg"--}}
{{--															name="cardNumber"--}}
{{--															placeholder="@lang('Valid Card Number')"--}}
{{--															autocomplete="off"--}}
{{--															required--}}
{{--													/>--}}
{{--													<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>--}}
{{--												</div>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--									<br>--}}

{{--									<div class="row">--}}
{{--										<div class="col-md-7">--}}
{{--											<div class="form-group">--}}
{{--												<label for="cardExpiry" class="text-color">@lang('EXPIRATION DATE')</label>--}}
{{--												<input--}}
{{--														type="tel"--}}
{{--														class="form-control input-lg input-sz"--}}
{{--														name="cardExpiry"--}}
{{--														placeholder="@lang('MM / YYYY')"--}}
{{--														autocomplete="off"--}}
{{--														required--}}
{{--												/>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--										<div class="col-md-5 " >--}}
{{--											<div class="form-group">--}}
{{--												<label for="cardCVC" class="text-color">@lang('CVC CODE')</label>--}}
{{--												<input--}}
{{--														type="tel"--}}
{{--														class="form-control input-lg input-sz"--}}
{{--														name="cardCVC"--}}
{{--														placeholder="@lang('CVC')"--}}
{{--														autocomplete="off"--}}
{{--														required--}}
{{--												/>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--									<br>--}}
{{--									<div class="row">--}}
{{--										<div class="col-xs-12">--}}
{{--											<button class="btn btn-success btn-lg btn-block login-button" type="submit"> @lang('PAY NOW') </button>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--								</form>--}}
{{--							</div>--}}

{{--						</div>--}}
{{--					</div>--}}
{{--				</div><!-- /.row -->--}}
{{--			</div>--}}
{{--		</section>--}}
{{--	@elseif(activeTemp()  == 4)--}}
{{--		<div class="hyip-breadcrump" style="background-image: url({{asset('assets/images/bred.jpg')}}); background-size: cover;">--}}
{{--			<div class="container">--}}
{{--				<div class="row justify-content-center">--}}
{{--					<div class="col-xl-8 col-lg-8">--}}
{{--						<div class="breadcrump-title text-center">--}}
{{--							<h2 class="add-space">{{__($pt)}}</h2>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--		<div class="login">--}}
{{--			<div class="container">--}}
{{--				<div class="row">--}}

{{--					<div class="col-md-8 offset-md-2">--}}
{{--						<div class="card">--}}
{{--							<h1 class="text-center text-color">@lang('Stripe Payment')</h1>--}}
{{--							<hr/>--}}
{{--							<div class="card-body">--}}
{{--								<div class="row ">--}}
{{--									<div class="col-xs-12 mx-auto">--}}
{{--										<div class="card-wrapper"></div>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<form role="form" class="form-horizontal" id="payment-form" method="POST" action="{{ route('ipn.stripe')}}" >--}}
{{--									{{csrf_field()}}--}}

{{--									<input type="hidden" value="{{ $track }}" name="track">--}}

{{--									<div class="row stripe-details">--}}
{{--										<div class="col-xs-6 col-md-6">--}}
{{--											<div class="form-group">--}}
{{--												<label for="name" class="text-color">@lang('CARD HOLDER NAME')</label>--}}
{{--												<div class="input-group">--}}
{{--													<input--}}
{{--															type="text"--}}
{{--															class="form-control input-lg"--}}
{{--															name="name"--}}
{{--															placeholder="@lang('Card Name')"--}}
{{--															autocomplete="off"--}}
{{--													/>--}}
{{--													<span class="input-group-addon"><i class="fa fa-font"></i></span>--}}
{{--												</div>--}}
{{--											</div>--}}
{{--										</div>--}}

{{--										<div class="col-xs-6 col-md-6">--}}
{{--											<div class="form-group">--}}
{{--												<label for="cardNumber" class="text-color">@lang('CARD NUMBER')</label>--}}
{{--												<div class="input-group">--}}
{{--													<input--}}
{{--															type="tel"--}}
{{--															class="form-control input-lg"--}}
{{--															name="cardNumber"--}}
{{--															placeholder="@lang('Valid Card Number')"--}}
{{--															autocomplete="off"--}}
{{--															required--}}
{{--													/>--}}
{{--													<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>--}}
{{--												</div>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--									<br>--}}

{{--									<div class="row">--}}
{{--										<div class="col-xs-7 col-md-7">--}}
{{--											<div class="form-group">--}}
{{--												<label for="cardExpiry" class="text-color">@lang('EXPIRATION DATE')</label>--}}
{{--												<input--}}
{{--														type="tel"--}}
{{--														class="form-control input-lg input-sz"--}}
{{--														name="cardExpiry"--}}
{{--														placeholder="@lang('MM / YYYY')"--}}
{{--														autocomplete="off"--}}
{{--														required--}}
{{--												/>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--										<div class="col-xs-5 col-md-5 pull-right">--}}
{{--											<div class="form-group">--}}
{{--												<label for="cardCVC" class="text-color">@lang('CVC CODE')</label>--}}
{{--												<input--}}
{{--														type="tel"--}}
{{--														class="form-control input-lg input-sz"--}}
{{--														name="cardCVC"--}}
{{--														placeholder="@lang('CVC')"--}}
{{--														autocomplete="off"--}}
{{--														required--}}
{{--												/>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--									<br>--}}
{{--									<div class="row">--}}
{{--										<div class="col-xs-12">--}}
{{--											<button class="btn btn-success btn-lg btn-block" type="submit"> @lang('PAY NOW') </button>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--								</form>--}}
{{--							</div>--}}

{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	@endif--}}

@endsection
@section('script')
	<script type="text/javascript" src="{{url('/')}}/assets/front/js/stripe-design.js"></script>
	<script>
        (function ($) {
            $(document).ready(function () {
                var card = new Card({
                    form: '#payment-form',
                    container: '.card-wrapper',
                    formSelectors: {
                        numberInput: 'input[name="cardNumber"]',
                        expiryInput: 'input[name="cardExpiry"]',
                        cvcInput: 'input[name="cardCVC"]',
                        nameInput: 'input[name="name"]',
                        locale:"ja"
                    }
                });
            });
        })(jQuery);
	</script>
@stop



