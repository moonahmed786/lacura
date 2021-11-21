
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
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
    <link href="plugins/pricing-table/css/component.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/pricing-table/css/component.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/forms/switches.css")}}">

@stop
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">


                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <h1 >{{$pt}}</h1>
                        <div class="col-md-2 float-right mb-3">
                            {{--                            <a href="{{route('add.new.ticket')}}" class="btn btn-warning btn-block" style="color: black ;"><b>@lang('New Ticket')</b></a>--}}
                        </div>



                        <div class="row">

                            <div class="col-lg-12">
                                @if (count($errors) > 0)


                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <p style="color: black">{{__($error)}}</p>
                                        </div>
                                    @endforeach


                                @endif
                                @if( Session::has( 'message' ))
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p style="color: black">{{ Session::get( 'message' ) }}</p>
                                    </div>

                                @elseif( Session::has( 'alert' ))
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p style="color: black"> {{ Session::get( 'alert' ) }} </p>
                                    </div>

                                @endif
                                <section class="pricing-section bg-7 mt-5">
                                    <div class="pricing pricing--norbu">

                                        @foreach($gates as $gate)

                                            <div class="pricing__item">
                                                <h3 class="pricing__title">{{__("deposit.$gate->name")}}    </h3>

                                                <p class="pricing__sentence">
                                                    <img src="{{asset('assets/images/gateway')}}/{{$gate->id}}.jpg" style="width:100%;"/>
                                                </p>





                                                <ul class="pricing__feature-list text-center">
                                                    <li class="pricing__feature"><svg> ... </svg>    @lang('deposit.Charge'): <strong>{{__("$general->currency_sym")}}{{__("$gate->fixed_charge")}}</strong> + <strong>{{__("$gate->percent_charge")}} %</strong>
                                                    </li>
                                                    <li class="pricing__feature"><svg> ... </svg> @lang('deposit.Limit'): <strong>{{__($general->currency_sym)}}{{__($gate->minamo)}}</strong> - <strong>{{__($general->currency_sym)}}{{__($gate->maxamo)}}</strong></li>

                                                </ul>



                                                <button  data-toggle="modal"  data-gate="{{$gate->id}}" data-name="{{__("deposit.$gate->name")}}" href="#depoModal" class="pricing__action mx-auto mb-4 depoButton">@lang('deposit.Deposit Now')</button>
                                            </div>

                                        @endforeach


                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>





    <!-- price end -->

    <!-- Modal -->
    <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('deposit.data-insert')}}" method="POST">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="gateway" id="gateWay"/>
                    <h5>@lang('deposit.Deposit Amount')</h5>

                    <div class="input-group ">
                        <input type="number" class="form-control input-lg" name="amount">
                        <div class="input-group-append ">
                            <span class="input-group-text">
                                {{$general->currency_sym}}
                            </span>
                        </div>
                    </div>

                </div>
                <div class="modal-footer mt-5">
                    <button type="submit" class="btn btn-success">@lang('deposit.Deposit Preview')</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('deposit.Close')</button>
                </div>
                </form>
            </div>
        </div>
    </div>


@endsection
@section('script')
<script>
    $(document).ready(function(){

        $(document).on('click','.depoButton', function(){
            $('#ModalLabel').text($(this).data('name'));
            $('#gateWay').val($(this).data('gate'));

        });
    });
</script>

@endsection



