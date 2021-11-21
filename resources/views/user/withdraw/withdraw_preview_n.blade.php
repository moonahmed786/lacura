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
                        <h1 >{{__($pt)}}</h1>
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



                                        <div class="contact login" id="app">
                                            <div class="">


                                                <div class="row justify-content-center">


                                                    <div class="col-md-8 justify-content-center">
                                                        <form class="form-vertical" id="balanceWithdraw" action="{{route('confirm.withdraw.store', $with_method->id)}}" method="post">
                                                            @php
                                                                $one = $amount + $with_method->chargefx;
                                                                $two = ($amount * $with_method->chargepc)/100;
                                                                $charge = $with_method->chargefx + ( $amount *  $with_method->chargepc )/100
                                                            @endphp
                                                            @csrf

                                                            <input type="hidden" name="amount" value="{{$amount}}" >

                                                            <div class="form-group mb-4">
                                                                <label class="control-label">@lang('Request for Withdraw Amount'):</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">{{__($general->currency)}}</div>
                                                                    </div>
                                                                    <input type="text" value="{{$amount}}" class="form-control" readonly >
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <label class="control-label">@lang('Charge'):</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">{{__($general->currency)}}</div>
                                                                    </div>
                                                                    <input type="text" value="{{$charge}}" class="form-control" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <label class="control-label">@lang('Total Withdraw Amount'):</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">{{__($general->currency)}}</div>
                                                                    </div>
                                                                    <input type="text" value="{{$to = $amount - $charge}}" class="form-control" readonly >
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <label class="control-label">@lang('In') {{__($with_method->currency)}}:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">{{__($with_method->currency)}}</div>
                                                                    </div>
                                                                    <input type="text" value="{{round($to / $with_method->rate, 4)}}" class="form-control" readonly >
                                                                </div>
                                                            </div>


                                                            <div class="form-group mb-4">
                                                                <label class="control-label">@lang('Type Your Payment Detail'):</label>
                                                                <div class="input-group">
                                                                    <textarea class="form-control" rows="5" name="detail" required></textarea>


                                                                </div>
                                                            </div>
                                                            @if(Auth::user()->tauth == 1)
                                                                <button  data-toggle="modal" data-target="#openmodal" type="button" class="login-button btn-contact btn btn-primary"> @lang('Confirm Withdraw')</button>
                                                            @else
                                                                <button  type="submit" class="login-button btn-contact btn btn-primary"> @lang('Confirm Withdraw') </button>
                                                            @endif

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>

                                            <div id="openmodal" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">@lang('Google Authenticator Code Verify')</h4>
                                                        </div>
                                                        <form action="#" method="POST">
                                                            {{csrf_field()}}
                                                            <div class="modal-body">

                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" v-model="codeData.code" name="code" placeholder="@lang('Enter Google Authenticator Code')">
                                                                    <small style="color: red; text-align: center" v-if="errors !== '' && codeData.code === '' ">@{{ errors }}</small>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" @click.prevent="submitCode" class="btn btn-success">@lang('Verify')</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                                                            </div>
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

        </div>

    </div>


@endsection
@section('script')
    <script>
        var app = new Vue({
            el: '#app',
            data:{
                codeData:{
                    code: ''
                },
                errors: ''
            },
            methods:{
                submitCode(){
                    var input = this.codeData;
                    axios.post('{{route('check_two_facetor')}}',input).then(function (e) {

                        if (e.data.success == true){
                            $("#balanceWithdraw").submit();
                        }else {
                            swal({"title":e.data.message, type:"warning"});
                        }

                    }).catch(function (error) {
                        app.errors = error.response.data.errors.code;
                    })
                }
            }


        });
    </script>

@stop
