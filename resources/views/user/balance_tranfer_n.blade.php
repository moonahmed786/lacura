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

                        @if (count($errors) > 0)
                            <div class="row">
                                @foreach ($errors->all() as $error)
                                    <div class="col-md-12">
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <p>{{ __($error) }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <div class="col-xl-12 col-lg-12 wow fadeInDown">

                            <form class="contact-form" id="balanceTransfer" method="POST" action="{{route('user.balance.transfer.post')}}">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="alert alert-danger" role="alert">
                                            <strong>@lang('Balance Transfer Charge') {{__($general->bal_trans_fixed_charge)}} {{__($general->currency)}} @lang('Fixed and')  {{__($general->bal_trans_per_charge)}} % @lang('of your total amount to transfer balance.')</strong>

                                            <p style="color: blue" v-if="newdata.amount !== ''">@{{parseInt(newdata.amount) + amount}} {{__($general->currency)}} @lang('will subtract from your') @lang('@{{wallet_name}}') </p>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12 ">
                                        <div class="form-group">
                                            <label for="InputFirstname">@lang('Select Your Wallet')<span class="requred">*</span></label>
                                            <select class="form-control" name="wallet_id" @change="wallet(newdata.wallet_type)" v-model="newdata.wallet_type">
                                                <option value="1">{{__($general->deposit_wallet_name)}} ({{round(Auth::user()->balance,4)}} {{__($general->currency)}})</option>
                                                <option value="2">{{__($general->interest_wallet_name)}} ({{round(Auth::user()->interest_balance,4)}} {{__($general->currency)}})</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12">
                                        <div class="form-group">
                                            <label for="InputMail">@lang('Username / Email To Send Amount') <span class="requred">*</span></label>
                                            <input type="text" class="form-control" id="InputMailUser" @keyup="submitSearch" v-model="newdata.username" name="username" placeholder="@lang('Username/Email')" required autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12">
                                        <div class="form-group">
                                            <label for="InputMail">@lang('Transfer from') <span v-if="wallet_name"> @lang('@{{wallet_name}}') </span> <span class="requred">*</span></label>
                                            <input type="number" class="form-control" id="InputMail" v-model="newdata.amount" name="amount" placeholder="@lang('Amount') {{__($general->currency)}}" required>
                                            <small v-if="parseInt(balance) <= parseInt(newdata.amount)" style="color: red">@lang('Insufficient Balance!')</small>
                                        </div>

                                    </div>

                                    <div class="col-xl-12 col-lg-12" id="bal" v-if="parseInt(balance) >= parseInt(newdata.amount) + amount && hasmsg.success == true">
                                        <div class="row d-flex">
                                            <div class="col-md-6 offset-md-3">
                                                @if(Auth::user()->tauth == 1)
                                                    <button type="button" style="width: 100%;" data-toggle="modal" data-target="#openmodal" class="login-button btn-contact"> @lang('Transfer Balance')</button>
                                                @else
                                                    <button type="submit" style="width: 100%;" class="login-button btn-contact"> @lang('Transfer Balance')</button>
                                                @endif
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </form>

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


@endsection
@section('script')
    <script>
        var app = new Vue({
            el: '#app',
            data:{
                showData: {},
                newdata:{
                    amount: '',
                    wallet_type : '',
                    username : '',
                },
                codeData:{
                  code: ''
                },
                balance : {},
                hasmsg : '',
                wallet_name : null,
                errors: ''
            },
            computed:{
                amount(){
                    return {{intval($general->bal_trans_fixed_charge)}}+(parseInt(this.newdata.amount) * parseInt({{ intval($general->bal_trans_per_charge) }}))/100
                }
            },
            methods:{

                wallet(val){
                    // val == 1 (Deposit Wallet) & val == 2 (Interest Wallet)
                    if (val == 1) {
                        this.balance = '{{ Auth::user()->balance  }}';
                        this.wallet_name = '{{__($general->deposit_wallet_name) }}';
                    }else {
                        this.balance = '{{ Auth::user()->interest_balance }}';
                        this.wallet_name = '{{ __($general->interest_wallet_name) }}';
                    }
                },
                submitSearch(){
                    var input = this.newdata;
                    axios.post('{{route('search.user')}}', input).then(function (e) {
                            app.hasmsg = e.data;
                            if (e.data.success == true){
                                $('#InputMailUser').css('box-shadow', '1px 1px 0px #039f08, 0 0 4px #039f08, 0 0 4px #039f08');
                                $('#bal').css('display', 'block');
                            }else {
                                $('#InputMailUser').css('box-shadow', '1px 1px 0px #de0015, 0 0 4px #de0015, 0 0 4px #de0015');
                                $('#bal').css('display', 'none');
                            }
                    });
                },
                submitCode(){
                    var input = this.codeData;
                    axios.post('{{route('check_two_facetor')}}',input).then(function (e) {

                        if (e.data.success == true){
                            $("#balanceTransfer").submit();
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
