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
                        <h1 >{{__('withdraw.'.$pt)}}</h1>
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

                                        @foreach($trans as $data)

                                            <div class="pricing__item">
                                                <h3 class="pricing__title">{{__('withdraw.'.$data->name)}}</h3>
                                                <p class="pricing__sentence">
                                                    @lang('withdraw.Charge for withdraw Amount'):  {{__($data->chargefx)}} {{__($general->currency)}}
                                                </p>
                                                <p class="pricing__sentence">
                                                        @lang('withdraw.Withdrawal Accept From Your'): @lang("withdraw.Interest Wallet")
                                                </p>
                                                <p class="pricing__sentence"> <img style="width: 150px" src="{{asset('assets/images/withdraw/'.$data->image)}}" alt="price icon"></p>
                                                <div class="pricing__price"><span class="pricing__currency">%</span>{{__($data->chargepc)}}<span class="pricing__period">: @lang('withdraw.Percentage Charge')</span></div>
                                                <ul class="pricing__feature-list text-center">
                                                    <li class="pricing__feature"><svg> ... </svg>    @lang('withdraw.Minimum') {{__($data->min_amo)}} {{__($general->currency)}}
                                                      </li>
                                                    <li class="pricing__feature"><svg> ... </svg>  @lang('withdraw.Maximum') {{__($data->max_amo)}} {{__($general->currency)}}</li>

                                                </ul>
                                                <button  data-toggle="modal" href="#buyModal{{$data->id}}" class="pricing__action mx-auto mb-4">@lang('withdraw.Withdraw By') : {{__('withdraw.'.$data->name)}}</button>
                                            </div>
                                            <div id="buyModal{{$data->id}}" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">@lang('withdraw.Withdraw via') <strong>{{__('withdraw.'.$data->name)}}</strong></h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <form method="POST" action="{{route('withdraw.preview.user')}}" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                {{csrf_field()}}
                                                                <div class="text-center">
                                                                    <p>@lang('withdraw.Refund rates are not valid for holidays such as Saturday and Sunday.')<br/>
                                                                        @lang('withdraw.The last day of the principal deadline will be deducted.')</p>
                                                                    <p style="color: red">@lang('withdraw.Charge for withdraw Amount'): {{__($data->chargefx)}} {{__($general->currency)}}</p>
                                                                    <p>@lang('withdraw.Percentage Charge'): {{__($data->chargepc)}} %</p>


                                                                        <p style="color: green">@lang('withdraw.Processing Days (At last)') : {{__($data->processing_day)}} @lang('withdraw.Days')</p>



                                                                </div>
                                                                <input type="hidden" name="gateway" value="{{$data->id}}">
                                                                <h5 class="text-center font-weight-bold text-danger">{{__('withdraw.Interest Wallet Balance') }} @lang('withdraw.Balance'):  {{__($general->currency_sym)}} {{round(Auth::user()->interest_balance,4)}}</h5>
                                                                <div class="form-group mb-5">
                                                                    <div class="input-group">
                                                                        <input type="text" name="amount" class="form-control" id="amount" placeholder="@lang('withdraw.AMOUNT YOU WANT TO WITHDRAW')" required>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text" id="basic-addon2">{{__($general->currency)}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                @if(!Auth::user()->personal_document)
                                                                    <div class="form-group">
                                                                        <label for="peronal_document font-weight-bold">@lang('withdraw.Personal Document')</label>
                                                                        <input type="file" class="form-control" name="personal_document" required>
                                                                    </div>
                                                                @endif

                                                                @if(!Auth::user()->selfie_document)
                                                                    <div class="form-group">
                                                                        <label for="peronal_document font-weight-bold">@lang('withdraw.Selfie with Document')</label>
                                                                        <input type="file" class="form-control" name="selfie_document" required>
                                                                    </div>
                                                                @endif


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-success">@lang('withdraw.Preview')</button>
                                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">@lang('withdraw.Close')</button>
                                                            </div>
                                                        </form>
                                                    </div>


                                                </div>
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


@endsection
@section('script')
@if (Session::has('nominee_error'))
    <script type="text/javascript">
        $(document).ready(function () {
            swal({
                title: 'Error!',
                text: "{{ __(Session::get('nominee_error')) }}",
                type: 'warning',
                padding: '2em'
            })

        });
    </script>
@endif
@stop
