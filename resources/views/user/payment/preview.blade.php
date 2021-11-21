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
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <h2 class="extra-margin">{{__($pt)}}</h2>
                </div>
            </div>
        </div>
    </div>



    <div class="contact login">
        <div class="container">

            <div class="row justify-content-center">


                <div class="col-xl-6 col-lg-6">
                    <form class="contact-form" action="{{ route('deposit.confirm') }}" method="post">
                        @csrf
                        <input type="hidden" name="gateway" value="{{$data->gateway_id}}"/>
                        <div class="row">
                            @if (count($errors) > 0)

                                @foreach ($errors->all() as $error)
                                    <div class="col-md-12">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                &times;
                                            </button>
                                            <p>{{ __($error) }}</p>
                                        </div>
                                    </div>
                                @endforeach

                            @endif

                            <div class="col-xl-12 col-lg-12">
                                <ul class="list-group text-center">
                                    <li class="list-group-item section-bg-1"><img src="{{asset('assets/images/gateway')}}/{{$data->gateway_id}}.jpg" style="max-width:100px; max-height:100px; margin:0 auto;"/></li>
                                    <li class="list-group-item section-bg-1">@lang('Amount'): <strong>{{__($data->amount)}} {{__($general->currency_sym)}}</strong></li>
                                    <li class="list-group-item section-bg-1">@lang('Charge'): <strong>{{__($data->charge)}} {{__($general->currency_sym)}}</strong></li>
                                    <li class="list-group-item section-bg-1">@lang('Payable'): <strong>{{$data->charge + $data->amount}} {{__($general->currency_sym)}}</strong></li>
                                </ul>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="row d-flex">
                                    <div class="col-xl-12 col-lg-12">
                                        <button id="btn-confirm" type="submit" style="width: 100%" class="login-button btn-contact"> @lang('Pay Now')</button>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    @elseif(activeTemp()  == 2)
        <section class="tools-section  pranto-tool">
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
                                <h3>@lang('Deposit Via '. $data->gateway->name)</h3>
                            </div>
                            <form class="contact-form" action="{{ route('deposit.confirm') }}" method="post">
                                @csrf
                            <div class="panel-body">

                                    <input type="hidden" name="gateway" value="{{$data->gateway_id}}"/>
                                    @if (count($errors) > 0)
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                {{__($error)}}
                                            </div>
                                        @endforeach
                                    @endif

                                <div class="col-xs-12">
                                    <ul class="list-group text-center">
                                        <li class="list-group-item section-bg-1"><img src="{{asset('assets/images/gateway')}}/{{$data->gateway_id}}.jpg" style="max-width:100px; max-height:100px; margin:0 auto;"/></li>
                                        <li class="list-group-item section-bg-1">@lang('Amount'): <strong>{{__($data->amount)}} {{__($general->currency_sym)}}</strong></li>
                                        <li class="list-group-item section-bg-1">@lang('Charge'): <strong>{{__($data->charge)}} {{__($general->currency_sym)}}</strong></li>
                                        <li class="list-group-item section-bg-1">@lang('Payable'): <strong>{{$data->charge + $data->amount}} {{__($general->currency_sym)}}</strong></li>
                                    </ul>
                                </div><!-- /.col-md-6 -->


                            </div>
                            <div class="panel-footer">
                                <button id="btn-confirm" type="submit" style="width: 100%" class="login-button btn-contact"> @lang('Pay Now')</button>
                            </div>
                            </form>
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
            @include('layouts.balance_show')
        </section><br><br>

        <section class="latest-news-are pranto-section-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading text-center">
                                <h3>@lang('Deposit Via '. $data->gateway->name)</h3>
                            </div>
                            <form class="contact-form" action="{{ route('deposit.confirm') }}" method="post">
                                @csrf
                                <div class="panel-body">

                                    <input type="hidden" name="gateway" value="{{$data->gateway_id}}"/>
                                    @if (count($errors) > 0)
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                {{__($error)}}
                                            </div>
                                        @endforeach
                                    @endif

                                    <div class="col-xs-12">
                                        <ul class="list-group text-center">
                                            <li class="list-group-item section-bg-1"><img src="{{asset('assets/images/gateway')}}/{{$data->gateway_id}}.jpg" style="max-width:100px; max-height:100px; margin:0 auto;"/></li>
                                            <li class="list-group-item section-bg-1">@lang('Amount'): <strong>{{__($data->amount)}} {{__($general->currency_sym)}}</strong></li>
                                            <li class="list-group-item section-bg-1">@lang('Charge'): <strong>{{__($data->charge)}} {{__($general->currency_sym)}}</strong></li>
                                            <li class="list-group-item section-bg-1">@lang('Payable'): <strong>{{$data->charge + $data->amount}} {{__($general->currency_sym)}}</strong></li>
                                        </ul>
                                    </div><!-- /.col-md-6 -->


                                </div>
                                <div class="panel-footer">
                                    <div class="contact-frm-btn text-center">
                                    <button id="btn-confirm" type="submit" style="width: 100%" class="login-button btn-contact"> @lang('Pay Now')</button>
                                    </div>
                                </div>
                            </form>
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
                            <h2 class="add-space">{{__($pt)}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="plan">
            <div class="container">

                <div class="row justify-content-center text-center ">



                        <div class="col-md-6">
                            <form  action="{{ route('deposit.confirm') }}" method="post">
                                @csrf
                                <input type="hidden" name="gateway" value="{{$data->gateway_id}}"/>
                            @if (count($errors) > 0)
                                <div class="row">
                                @foreach ($errors->all() as $error)
                                    <div class="col-md-12">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                &times;
                                            </button>
                                            <p>{{ __($error) }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            @endif

                            <div class="single-plan active">
                                <h3>@lang('Deposit Via '. $data->gateway->name)</h3>
                                <div class="part-parcent">
                                    <img src="{{asset('assets/images/gateway')}}/{{$data->gateway_id}}.jpg" style="max-width:250px;"/>
                                </div>
                                <div class="part-feature">
                                    <div class="single-plan-feature">
                                        <span class="large-text"> @lang('Amount'): <strong>{{__($data->amount)}} {{__($general->currency_sym)}}</strong></span>
                                    </div>
                                    <div class="single-plan-feature">
                                        <span class="large-text"> @lang('Charge'): <strong>{{__($data->charge)}} {{__($general->currency_sym)}}</strong></span>
                                    </div>
                                    <div class="single-plan-feature">
                                        <span class="large-text"> @lang('Payable'): <strong>{{$data->charge + $data->amount}} {{__($general->currency_sym)}}</strong></span>
                                    </div>
                                </div>
                                <div class="part-button">
                                    <button id="btn-confirm" type="submit" class="login-button btn-contact"> @lang('Pay Now')</button>
                                </div>
                            </div>
                            </form>
                        </div>




                </div>
            </div>
        </div>

    @endif


@endsection
@section('script')
@if($data->gateway_id == 107)
<form action="{{ route('ipn.paystack') }}" method="POST">
    @csrf
    <script
    src="//js.paystack.co/v1/inline.js"
    data-key="{{ $data->gateway->val1 }}"
    data-email="{{ $data->user->email }}"
    data-amount="{{ round($data->usd_amo/$data->gateway->val7, 2)*100 }}"
    data-currency="NGN"
    data-ref="{{ $data->trx }}"
    data-custom-button="btn-confirm"
    >
</script>
</form>
@elseif($data->gateway_id == 108)
<script src="//voguepay.com/js/voguepay.js"></script>
<script>
    closedFunction = function() {
        
    }
    successFunction = function(transaction_id) {
        window.location.href = '{{ url('home/vogue') }}/' + transaction_id + '/success';
    }
    failedFunction=function(transaction_id) {
        window.location.href = '{{ url('home/vogue') }}/' + transaction_id + '/error';
    }

    function pay(item, price) {
        //Initiate voguepay inline payment
        Voguepay.init({
            v_merchant_id: "{{ $data->gateway->val1 }}",
            total: price,
            notify_url: "{{ route('ipn.voguepay') }}",
            cur: 'USD',
            merchant_ref: "{{ $data->trx }}",
            memo:'Buy ICO',
            recurrent: true,
            frequency: 10,
            developer_code: '5af93ca2913fd',
            store_id:"{{ $data->user_id }}",
            custom: "{{ $data->trx }}",
            
            closed:closedFunction,
            success:successFunction,
            failed:failedFunction
        });
    }
    
    $(document).ready(function () {
        $(document).on('click', '#btn-confirm', function (e) {
            e.preventDefault();
            pay('Buy', {{ $data->usd_amo }});
        });
    })
</script>

@endif
@endsection
