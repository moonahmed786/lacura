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



    <!-- login begin-->
    <div class="contact login" id="app">
        <div class="container">


            <div class="row justify-content-center">


                <div class="col-md-8 ">
                    <form class="contact-form" id="balanceWithdraw" action="{{route('confirm.withdraw.store', $with_method->id)}}" method="post">
                        @csrf
                        <div class="row">
                            @php
                                $one = $amount + $with_method->chargefx;
                                $two = ($amount * $with_method->chargepc)/100;
                                $charge = $with_method->chargefx + ( $amount *  $with_method->chargepc )/100
                            @endphp

                            <div class="col-md-12 text-center">
                                <input type="hidden" name="amount" value="{{$amount}}" >
                                <ul>
                                    <li class="list-group-item">@lang('Request for Withdraw Amount'): <strong>{{$amount}}</strong> {{__($general->currency)}}</li>
                                    <li class="list-group-item" style="color: red">@lang('Charge') : <strong>{{$charge}}</strong> {{__($general->currency)}}</li>
                                    <li class="list-group-item">@lang('Total Withdraw Amount'): <strong>{{$to = $amount - $charge}}</strong> {{__($general->currency)}}</li>
                                <--    <li class="list-group-item" style="color: firebrick">@lang('In') {{__($with_method->currency)}}: <strong>{{round($to / $with_method->rate, 4)}}</strong> {{__($with_method->currency)}}</li>-->
                                </ul>
                            </div>


                            <div class="col-xl-12 col-lg-12">
                                <br>
                                <br>
                                <div class="form-group">
                                    <label for="InputName">@lang('Type Your Payment Detail') <span class="requred">*</span></label>
                                    <textarea class="form-control" rows="5" name="detail" required></textarea>
                                </div>
                            </div>


                            <div class="col-xl-12 col-lg-12">
                                <div class="row d-flex">
                                    <div class="col-xl-12 col-lg-12">
                                        @if(Auth::user()->tauth == 1)
                                            <button style="width: 100%" data-toggle="modal" data-target="#openmodal" type="button" class="login-button btn-contact"> @lang('Confirm Withdraw')</button>
                                        @else
                                            <button style="width: 100%" type="submit" class="login-button btn-contact"> @lang('Confirm Withdraw') </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

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
        <section class="get-in-touch"  id="app">

            <div class="thm-container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-content">
                            <div class="inner">
                                <div class="title text-center">

                                    @if (count($errors) > 0)
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                {{__($error)}}
                                            </div>
                                        @endforeach
                                    @endif
                                </div><!-- /.title -->
                                <form id="balanceWithdraw" action="{{route('confirm.withdraw.store', $with_method->id)}}" method="post" class="contact-form">
                                    @csrf
                                    @php
                                        $one = $amount + $with_method->chargefx;
                                        $two = ($amount * $with_method->chargepc)/100;
                                       $charge = $with_method->chargefx + ( $amount *  $with_method->chargepc )/100
                                    @endphp

                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <input type="hidden" name="amount" value="{{$amount}}" >
                                            <ul class="list-group">
                                                <li class="list-group-item">@lang('Request for Withdraw Amount'): <strong>{{$amount}}</strong> {{__($general->currency)}}</li>
                                                <li class="list-group-item" style="color: red">@lang('Charge') : <strong>{{$charge}}</strong> {{__($general->currency)}}</li>
                                                <li class="list-group-item">@lang('Total Withdraw Amount'): <strong>{{$to = $amount - $charge}}</strong> {{__($general->currency)}}</li>
                                                <li class="list-group-item" style="color: firebrick">@lang('In') {{__($with_method->currency)}}: <strong>{{round($to / $with_method->rate, 4)}}</strong> {{__($with_method->currency)}}</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="frm-grp">
                                        <textarea  rows="5" name="detail" required placeholder="@lang('Type Your Payment Detail')"></textarea>
                                    </div><!-- /.frm-grp -->



                                        <div class="frm-grp">
                                            @if(Auth::user()->tauth == 1)
                                                <button style="width: 100%" data-toggle="modal" data-target="#openmodal" type="button" class="login-button btn-contact"> @lang('Confirm Withdraw')</button>
                                            @else
                                                <button style="width: 100%" type="submit" class="login-button btn-contact"> @lang('Confirm Withdraw') </button>
                                            @endif

                                        </div><!-- /.frm-grp -->


                                    <div class="form-result"></div><!-- /.form-result -->

                                </form>

                            </div><!-- /.inner -->
                        </div><!-- /.form-content -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.thm-container -->
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
                        <div class="form-content">
                            <div class="inner">
                                <div class="title text-center">

                                    @if (count($errors) > 0)
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                {{__($error)}}
                                            </div>
                                        @endforeach
                                    @endif
                                </div><!-- /.title -->
                                <form id="balanceWithdraw" action="{{route('confirm.withdraw.store', $with_method->id)}}" method="post" class="contact-form">
                                    @csrf
                                    @php
                                        $one = $amount + $with_method->chargefx;
                                        $two = ($amount * $with_method->chargepc)/100;
                                       $charge = $with_method->chargefx + ( $amount *  $with_method->chargepc )/100
                                    @endphp

                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <input type="hidden" name="amount" value="{{$amount}}" >
                                            <ul class="list-group">
                                                <li class="list-group-item">@lang('Request for Withdraw Amount'): <strong>{{$amount}}</strong> {{__($general->currency)}}</li>
                                                <li class="list-group-item" style="color: red">@lang('Charge') : <strong>{{$charge}}</strong> {{__($general->currency)}}</li>
                                                <li class="list-group-item">@lang('Total Withdraw Amount'): <strong>{{$to = $amount - $charge}}</strong> {{__($general->currency)}}</li>
                                                <li class="list-group-item" style="color: firebrick">@lang('In') {{__($with_method->currency)}}: <strong>{{round($to / $with_method->rate, 4)}}</strong> {{__($with_method->currency)}}</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="frm-grp">
                                        <textarea  rows="5" name="detail" class="form-control" required placeholder="@lang('Type Your Payment Detail')"></textarea>
                                    </div><!-- /.frm-grp -->



                                    <div class="contact-frm-btn text-center">
                                        @if(Auth::user()->tauth == 1)
                                            <button style="width: 100%" data-toggle="modal" data-target="#openmodal" type="button" class="login-button btn-contact"> @lang('Confirm Withdraw')</button>
                                        @else
                                            <button style="width: 100%" type="submit" class="login-button btn-contact"> @lang('Confirm Withdraw') </button>
                                        @endif

                                    </div><!-- /.frm-grp -->


                                </form>

                            </div><!-- /.inner -->
                        </div><!-- /.form-content -->
                    </div><!-- /.col-md-5 -->
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



                    <div class="col-md-8">
                        <form  action="{{route('confirm.withdraw.store', $with_method->id)}}" method="post"  class="contact-form">
                            @csrf
                            @php
                                $one = $amount + $with_method->chargefx;
                                $two = ($amount * $with_method->chargepc)/100;
                               $charge = $with_method->chargefx + ( $amount *  $with_method->chargepc )/100
                            @endphp

                            <input type="hidden" name="amount" value="{{$amount}}" >

                            <div class="single-plan active">

                                <div class="part-feature">
                                    <div class="single-plan-feature">
                                        <span class="large-text"> @lang('Request for Withdraw Amount'): <strong>{{$amount}}</strong> {{__($general->currency)}}</span>
                                    </div>
                                    <div class="single-plan-feature">
                                        <span class="large-text"> @lang('Charge') : <strong>{{$charge}}</strong> {{__($general->currency)}}</span>
                                    </div>
                                    <div class="single-plan-feature">
                                        <span class="large-text"> @lang('Total Withdraw Amount'): <strong>{{$to = $amount - $charge}}</strong> {{__($general->currency)}}</span>
                                    </div>
                                    <div class="single-plan-feature">
                                        <span class="large-text">@lang('In') {{__($with_method->currency)}}: <strong>{{round($to / $with_method->rate, 4)}}</strong> {{__($with_method->currency)}}</span>
                                    </div>


                                </div>


                                <div class="login" style="padding: 20px 0 10px;">
                                    <div class="container">
                                        <div class="row justify-content-center">

                                            <div class="col-md-12">
                                                <div class="part-form">
                                                    <textarea  rows="5" name="detail" class="form-control" required placeholder="@lang('Type Your Payment Detail')"></textarea>
                                                </div>
                                            </div>
                                            <div class="part-button">
                                                @if(Auth::user()->tauth == 1)
                                                    <button style="width: 100%" data-toggle="modal" data-target="#openmodal" type="button" class="login-button btn-contact"> @lang('Confirm Withdraw')</button>
                                                @else
                                                    <button style="width: 100%" type="submit" class="login-button btn-contact"> @lang('Confirm Withdraw') </button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>





                        </form>
                    </div>




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
    @endif
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
                            swal(e.data.message,"", "warning");
                        }

                    }).catch(function (error) {
                        app.errors = error.response.data.errors.code;
                    })
                }
            }


        });
    </script>

@stop
