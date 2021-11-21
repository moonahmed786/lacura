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

@section('style')

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
    @include('layouts.balance_show')

    <div class="contact register" id="app">
        <div class="container">

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

            <div class="row">
                <div class="col-xl-12 col-lg-12 wow fadeInDown">

                    <form class="contact-form" id="balanceTransfer" method="POST" action="{{route('user.balance.transfer.post')}}">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="alert alert-danger" role="alert">
                                  <strong>@lang('Balance Transfer Charge') {{__($general->bal_trans_fixed_charge)}} {{__($general->currency)}} @lang('Fixed and')  {{__($general->bal_trans_per_charge)}} % @lang('of your total amount to transfer balance.')</strong>

                                    <p v-if="newdata.amount !== ''">@{{parseInt(newdata.amount) + amount}} {{__($general->currency)}} @lang('will subtract from your') @lang('@{{wallet_name}}') </p>
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
                                    <input type="text" class="form-control" id="InputMail" v-model="newdata.amount" name="amount" placeholder="@lang('Amount') {{__($general->currency)}}" required>
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
        @include('layouts.balance_show')

        <section class="get-in-touch" id="app">

            <div class="thm-container">
                <div class="row">
                    <div class="col-md=12">
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    {{__($error)}}
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-md-12">
                        <div class="form-content">
                            <div class="inner">
                               <!-- /.title -->
                                <form  id="balanceTransfer" method="POST" action="{{route('user.balance.transfer.post')}}" class="contact-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="alert alert-danger" role="alert">
                                                <strong>@lang('Balance Transfer Charge') {{__($general->bal_trans_fixed_charge)}} {{__($general->currency)}} @lang('Fixed and')  {{__($general->bal_trans_per_charge)}} % @lang('of your total amount to transfer balance.')</strong>

                                                <p v-if="newdata.amount !== ''">@{{parseInt(newdata.amount) + amount}} {{__($general->currency)}} @lang('will subtract from your') @lang('@{{wallet_name}}') </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="InputFirstname">@lang('Select Your Wallet')<span class="requred">*</span></label>
                                                <select class="form-control" name="wallet_id" @change="wallet(newdata.wallet_type)" v-model="newdata.wallet_type">
                                                    <option value="1">{{__($general->deposit_wallet_name)}} ({{round(Auth::user()->balance,4)}} {{__($general->currency)}})</option>
                                                    <option value="2">{{__($general->interest_wallet_name)}} ({{round(Auth::user()->interest_balance,4)}} {{__($general->currency)}})</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="InputMail">@lang('Username / Email To Send Amount') <span class="requred">*</span></label>
                                                <input type="text" class="form-control" id="InputMailUser" @keyup="submitSearch" v-model="newdata.username" name="username" placeholder="@lang('Username/Email')" required autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="InputMail">@lang('Transfer from') <span v-if="wallet_name"> @lang('@{{wallet_name}}') </span> <span class="requred">*</span></label>
                                                <input type="text" class="form-control" id="InputMail" v-model="newdata.amount" name="amount" placeholder="@lang('Amount') {{__($general->currency)}}" required>
                                                <small v-if="parseInt(balance) <= parseInt(newdata.amount)" style="color: red">@lang('Insufficient Balance!')</small>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="frm-grp" id="bal" v-if="parseInt(balance) >= parseInt(newdata.amount) + amount && hasmsg.success == true">
                                        @if(Auth::user()->tauth == 1)
                                            <button type="button" style="width: 100%;" data-toggle="modal" data-target="#openmodal" class="login-button btn-contact"> @lang('Transfer Balance')</button>
                                        @else
                                            <button type="submit" style="width: 100%;" class="login-button btn-contact"> @lang('Transfer Balance')</button>
                                        @endif
                                    </div><!-- /.frm-grp -->


                                    <div class="form-result"></div><!-- /.form-result -->

                                </form>
                            </div><!-- /.inner -->
                        </div><!-- /.form-content -->
                    </div><!-- /.col-md-5 -->

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

                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </section>

    @elseif(activeTemp()  == 3)
        <section class="page-content">
            <!--Start Page Heading-->
            <div class="page-heading page-heading-bg ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1 class="title">{{__($pt)}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Heading-->

            <!--Start Contact Area-->
            <div class="contact-wrap">
                <!--Start Container-->
                <div class="container">
                    <!--Start Row-->
                    <div class="row">
                        <div class="col-md-12">
                            <!--Start Contact Form-->
                            <div class="contact-form" >
                                <!--Start Section Heading-->
                                @if (count($errors) > 0)
                                    <div class="row">
                                        <div class="col-md-12">
                                            @foreach ($errors->all() as $error)
                                                <div class="alert alert-danger">
                                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                    {{__($error)}}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                            @endif

                                <form  id="balanceTransfer" method="POST" action="{{route('user.balance.transfer.post')}}" class="contact-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="alert alert-danger" role="alert">
                                                <strong>@lang('Balance Transfer Charge') {{__($general->bal_trans_fixed_charge)}} {{__($general->currency)}} @lang('Fixed and')  {{__($general->bal_trans_per_charge)}} % @lang('of your total amount to transfer balance.')</strong>

                                                <p v-if="newdata.amount !== ''">@{{parseInt(newdata.amount) + amount}} {{__($general->currency)}} @lang('will subtract from your') @lang('@{{wallet_name}}') </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="InputFirstname">@lang('Select Your Wallet')<span class="requred">*</span></label>
                                                <select class="form-control" name="wallet_id" @change="wallet(newdata.wallet_type)" v-model="newdata.wallet_type">
                                                    <option value="1">{{__($general->deposit_wallet_name)}} ({{round(Auth::user()->balance,4)}} {{__($general->currency)}})</option>
                                                    <option value="2">{{__($general->interest_wallet_name)}} ({{round(Auth::user()->interest_balance,4)}} {{__($general->currency)}})</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="InputMail">@lang('Username / Email To Send Amount') <span class="requred">*</span></label>
                                                <input type="text" class="form-control" id="InputMailUser" @keyup="submitSearch" v-model="newdata.username" name="username" placeholder="@lang('Username/Email')" required autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="InputMail">@lang('Transfer from') <span v-if="wallet_name"> @lang('@{{wallet_name}}') </span> <span class="requred">*</span></label>
                                                <input type="text" class="form-control" id="InputMail" v-model="newdata.amount" name="amount" placeholder="@lang('Amount') {{__($general->currency)}}" required>
                                                <small v-if="parseInt(balance) <= parseInt(newdata.amount)" style="color: red">@lang('Insufficient Balance!')</small>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="contact-frm-btn " id="bal" v-if="parseInt(balance) >= parseInt(newdata.amount) + amount && hasmsg.success == true">
                                        @if(Auth::user()->tauth == 1)
                                            <button type="button" style="width: 100%;" data-toggle="modal" data-target="#openmodal" class="login-button btn-contact"> @lang('Transfer Balance')</button>
                                        @else
                                            <button type="submit" style="width: 100%;" class="login-button btn-contact"> @lang('Transfer Balance')</button>
                                        @endif
                                    </div><!-- /.frm-grp -->

                                </form>

                            </div>
                            <!--End Contact Form-->
                        </div>
                    </div>
                    <!--End Row-->
                </div>
                <!--End Container-->
            </div>
            <!--End Contact Area-->
        </section>

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
    @elseif(activeTemp()  == 4)
        <div class="hyip-breadcrump" style="background-image: url({{asset('assets/images/bred.jpg')}}); background-size: cover; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="breadcrump-title text-center">
                            <h2 class="add-space" style="font-size: 50px;">{{__($pt)}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="login">
            <div class="container">
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

                <div class="row justify-content-center">


                    <div class="col-xl-12">
                        <div class="part-form">

                            <form id="balanceTransfer" action="{{route('user.balance.transfer.post')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="alert alert-danger" role="alert">
                                            <strong>@lang('Balance Transfer Charge') {{__($general->bal_trans_fixed_charge)}} {{__($general->currency)}} @lang('Fixed and')  {{__($general->bal_trans_per_charge)}} % @lang('of your total amount to transfer balance.')</strong>

                                            <p v-if="newdata.amount !== ''">@{{parseInt(newdata.amount) + amount}} {{__($general->currency)}} @lang('will subtract from your') @lang('@{{wallet_name}}') </p>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12 ">
                                        <div class="form-group">
                                            <label for="InputFirstname">@lang('Select Your Wallet')<span class="requred">*</span></label>
                                            <select class="pranto-select" style="padding:0px 8px;" name="wallet_id" @change="wallet(newdata.wallet_type)" v-model="newdata.wallet_type">
                                                <option value="1">{{__($general->deposit_wallet_name)}} ({{round(Auth::user()->balance,4)}} {{__($general->currency)}})</option>
                                                <option value="2">{{__($general->interest_wallet_name)}} ({{round(Auth::user()->interest_balance,4)}} {{__($general->currency)}})</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12">
                                        <div class="form-group">
                                            <label for="InputMail">@lang('Username / Email To Send Amount') <span class="requred">*</span></label>
                                            <input type="text" id="InputMailUser" @keyup="submitSearch" v-model="newdata.username" name="username" placeholder="@lang('Username/Email')" required autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12">
                                        <div class="form-group">
                                            <label for="InputMail">@lang('Transfer from') <span v-if="wallet_name"> @lang('@{{wallet_name}}') </span> <span class="requred">*</span></label>
                                            <input type="text"  id="InputMail" v-model="newdata.amount" name="amount" placeholder="@lang('Amount') {{__($general->currency)}}" required>
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
