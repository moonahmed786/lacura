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

                                    @if( Session::has( 'success' ))
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <p style="color: black">@lang('auth_pages.The authentication code has been successfully sent, please check your email')</p>
                                        </div>

                                    @elseif( Session::has( 'message' ))
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
                                    @if (Auth::user()->status != '1')
                                        <div class="row justify-content-center">
                                            <div class="col-xl-8 col-lg-8">
                                                <div class="section-title text-center">
                                                    <h2 style="color: #ff3221">@lang('auth_pages.Your Account is Currently Deactivate').</h2>
                                                    <p>@lang('auth_pages.Contact Us or Make Support Ticket for solving your issue').</p>
                                                </div>
                                            </div>
                                        </div>

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
                                    @elseif(Auth::user()->emailv != '1')
                                        <div class="row justify-content-center">

                                            <div class="col-xl-6 col-lg-6" style="margin-bottom: 10px">
                                                <form class="contact-form" action="{{route('sendemailver')}}" method="post">
                                                    @csrf
                                                    <div class="row">


                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="form-group">
                                                                <label for="InputName">@lang('auth_pages.Please verify your Email')<span class="requred">*</span></label>
                                                                <input type="text" class="form-control" readonly value="{{Auth::user()->email}}" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="row d-flex">
                                                                <div class="col-xl-12 col-lg-12">
                                                                    <button  type="submit" style="width: 100%" class="btn btn-warning"> @lang('auth_pages.Send Verification Code')</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </form>
                                            </div>

                                            <div class="col-xl-6 col-lg-6" style="margin-bottom: 10px">
                                                <form class="contact-form" action="{{route('emailverify')}}" method="post">
                                                    @csrf
                                                    <div class="row">


                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="form-group">
                                                                <label for="InputName">@lang('auth_pages.Verify Code')<span class="requred">*</span></label>
                                                                <input type="text" class="form-control" name="code" id="InputName"  placeholder="@lang('auth_pages.Enter Verification Code')"  required>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="row d-flex">
                                                                <div class="col-xl-12 col-lg-12">
                                                                    <button type="submit" style="width: 100%" class="btn btn-success"> @lang('auth_pages.Verify')</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </form>
                                            </div>

                                        </div>

                                    @elseif(Auth::user()->smsv != '1')

                                        <div class="row justify-content-center">

                                            <div class="col-xl-6 col-lg-6" style="margin-bottom: 10px">
                                                <form class="contact-form" action="{{route('sendsmsver')}}" method="post">
                                                    @csrf
                                                    <div class="row">


                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="form-group">
                                                                <label for="InputName">@lang('auth_pages.Please verify your Mobile')<span class="requred">*</span></label>
                                                                <input type="text" class="form-control" readonly value="{{Auth::user()->mobile}}" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="row d-flex">
                                                                <div class="col-xl-12 col-lg-12">
                                                                    <button type="submit" style="width: 100%" class="login-button btn-contact"> @lang('auth_pages.Send Verification Code')</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </form>
                                            </div>

                                            <div class="col-xl-6 col-lg-6" style="margin-bottom: 10px">
                                                <form class="contact-form" action="{{route('smsverify')}}" method="post">
                                                    @csrf
                                                    <div class="row">


                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="form-group">
                                                                <label for="InputName">@lang('auth_pages.Verify Code')<span class="requred">*</span></label>
                                                                <input type="text" class="form-control" name="code" id="InputName"  placeholder="@lang('auth_pages.Enter Verification Code')"  required>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="row d-flex">
                                                                <div class="col-xl-12 col-lg-12">
                                                                    <button type="submit" style="width: 100%" class="login-button btn-contact"> @lang('auth_pages.Verify')</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </form>
                                            </div>
                                        </div>

                                    @elseif(Auth::user()->tfver != '1')
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 ">
                                                <form class="contact-form" action="{{route('go2fa.verify') }}" method="post">
                                                    @csrf
                                                    <div class="row">


                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="form-group">
                                                                <label for="InputName">@lang('auth_pages.Verify Google Authenticator Code')<span class="requred">*</span></label>
                                                                <input type="text" class="form-control" name="code" id="InputName"  placeholder="@lang('auth_pages.Enter Verification Code')"  required>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="row d-flex">
                                                                <div class="col-xl-12 col-lg-12">
                                                                    <button type="submit" style="width: 100%" class="login-button btn-contact"> @lang('auth_pages.Verify')</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </form>
                                            </div>
                                        </div>

                                    @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>







@endsection
@section('script')

@stop
