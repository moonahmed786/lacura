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

    <div class="contact register">
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
                <div class="col-xl-6 col-lg-12">
                    @if(Auth::user()->tauth == '1')
                        <div class="card">
                            <div class="card-header">
                                <h4 class="panel-title text-center">@lang('Two Factor Authenticator')</h4>
                            </div>
                            <div class="card-body text-center">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" value="{{$prevcode}}" class="form-control input-lg" id="code" readonly>
                                        <span class="input-group-addon btn btn-success" id="copybtn">@lang('Copy')</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <img src="{{$prevqr}}">
                                </div>
                                <button type="button" class="btn btn-block btn-lg btn-danger" data-toggle="modal" data-target="#disableModal">@lang('Disable Two Factor Authenticator')</button>
                            </div>
                        </div>
                    @else
                        <div class="card">
                            <div class="card-header">
                                <h4 class="panel-title text-center">@lang('Two Factor Authenticator')</h4>
                            </div>
                            <div class="card-body text-center">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" name="key" value="{{$secret}}" class="form-control input-lg" id="code" readonly>
                                        <span class="input-group-addon btn btn-success" id="copybtn">@lang('Copy')</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <img src="{{$qrCodeUrl}}">
                                </div>
                                <button type="button" class="btn btn-block btn-lg btn-primary small-font-size-in-mobile-device" data-toggle="modal" data-target="#enableModal">@lang('Enable Two Factor Authenticator')</button>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="panel-title">@lang('Google Authenticator')</h4>
                        </div>
                        <div class="card-body text-justify">
                            <h5 style="text-transform: capitalize;">@lang('Use Google Authenticator to Scan the QR code  or use the code')</h5><hr/>
                            <p>{{__('Google Authenticator is a multifactor app for mobile devices. It generates timed codes used during the 2-step verification process. To use Google Authenticator, install the Google Authenticator application on your mobile device.')}}</p>
                            <a class="btn btn-primary btn-md" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en" target="_blank">@lang('DOWNLOAD APP')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Enable Modal -->
    <div id="enableModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">@lang('Verify Your OTP')</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <form action="{{route('go2fa.create')}}" method="POST">
                    {{csrf_field()}}
                <div class="modal-body">

                        <div class="form-group">
                            <input type="hidden" name="key" value="{{$secret}}">
                            <input type="text" class="form-control" name="code" placeholder="@lang('Enter Google Authenticator Code')">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">@lang('Verify')</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                </div>
                </form>
            </div>

        </div>
    </div>

    <!--Disable Modal -->
    <div id="disableModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">@lang('Verify Your OTP to Disable')</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{route('disable.2fa')}}" method="POST">
                    {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="code" placeholder="@lang('Enter Google Authenticator Code')">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">@lang('Verify')</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                </div>
                </form>
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
        </section><!-- /.tools-section -->
        <section class="get-in-touch">

            <div class="thm-container">
                <div class="row">
                    <div class="col-md-12">
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    {{__($error)}}
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-md-6">
                        @if(Auth::user()->tauth == '1')
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title text-center">@lang('Two Factor Authenticator')</h4>
                                </div>
                                <div class="panel-body text-center">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" value="{{$prevcode}}" class="form-control input-lg" id="code" readonly>
                                            <span class="input-group-addon btn btn-success" id="copybtn">@lang('Copy')</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <img src="{{$prevqr}}">
                                    </div>
                                    <button type="button" class="btn btn-block btn-lg btn-danger" data-toggle="modal" data-target="#disableModal">@lang('Disable Two Factor Authenticator')</button>
                                </div>
                            </div>
                        @else
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title text-center">@lang('Two Factor Authenticator')</h4>
                                </div>
                                <div class="panel-body text-center">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="key" value="{{$secret}}" class="form-control input-lg" id="code" readonly>
                                            <span class="input-group-addon btn btn-success" id="copybtn">@lang('Copy')</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <img src="{{$qrCodeUrl}}">
                                    </div>
                                    <button type="button" class="btn btn-block btn-lg btn-primary small-font-size-in-mobile-device" data-toggle="modal" data-target="#enableModal">@lang('Enable Two Factor Authenticator')</button>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">@lang('Google Authenticator')</h4>
                            </div>
                            <div class="panel-body text-justify">
                                <h5 style="text-transform: capitalize;">@lang('Use Google Authenticator to Scan the QR code  or use the code')</h5><hr/>
                                <p>{{__('Google Authenticator is a multifactor app for mobile devices. It generates timed codes used during the 2-step verification process. To use Google Authenticator, install the Google Authenticator application on your mobile device.')}}</p>
                                <a class="btn btn-primary btn-md" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en" target="_blank">@lang('DOWNLOAD APP')</a>
                            </div>
                        </div>
                    </div><!-- /.col-md-5 -->


                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </section>

        <div id="enableModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">@lang('Verify Your OTP')</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <form action="{{route('go2fa.create')}}" method="POST">
                        {{csrf_field()}}
                        <div class="modal-body">

                            <div class="form-group">
                                <input type="hidden" name="key" value="{{$secret}}">
                                <input type="text" class="form-control" name="code" placeholder="@lang('Enter Google Authenticator Code')">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">@lang('Verify')</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!--Disable Modal -->
        <div id="disableModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">@lang('Verify Your OTP to Disable')</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="{{route('disable.2fa')}}" method="POST">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="code" placeholder="@lang('Enter Google Authenticator Code')">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">@lang('Verify')</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

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
                <!--Start Row-->
                    <div class="row">
                        <div class="col-md-6">
                            @if(Auth::user()->tauth == '1')
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title text-center">@lang('Two Factor Authenticator')</h4>
                                    </div>
                                    <div class="panel-body text-center">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" value="{{$prevcode}}" class="form-control input-lg" id="code" readonly>
                                                <span class="input-group-addon btn btn-success" id="copybtn">@lang('Copy')</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <img src="{{$prevqr}}">
                                        </div>
                                        <button type="button" class="btn btn-block btn-lg btn-danger" data-toggle="modal" data-target="#disableModal">@lang('Disable Two Factor Authenticator')</button>
                                    </div>
                                </div>
                            @else
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title text-center">@lang('Two Factor Authenticator')</h4>
                                    </div>
                                    <div class="panel-body text-center">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="key" value="{{$secret}}" class="form-control input-lg" id="code" readonly>
                                                <span class="input-group-addon btn btn-success" id="copybtn">@lang('Copy')</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <img src="{{$qrCodeUrl}}">
                                        </div>
                                        <button type="button" class="btn btn-block btn-lg btn-primary small-font-size-in-mobile-device" data-toggle="modal" data-target="#enableModal">@lang('Enable Two Factor Authenticator')</button>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">@lang('Google Authenticator')</h4>
                                </div>
                                <div class="panel-body text-justify">
                                    <h5 style="text-transform: capitalize;">@lang('Use Google Authenticator to Scan the QR code  or use the code')</h5><hr/>
                                    <p>{{__('Google Authenticator is a multifactor app for mobile devices. It generates timed codes used during the 2-step verification process. To use Google Authenticator, install the Google Authenticator application on your mobile device.')}}</p>
                                    <a class="btn btn-primary btn-md" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en" target="_blank">@lang('DOWNLOAD APP')</a>
                                </div>
                            </div>
                        </div><!-- /.col-md-5 -->
                    </div>
                    <!--End Row-->
                </div>
                <!--End Container-->
            </div>
            <!--End Contact Area-->
        </section>

        <div id="enableModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">@lang('Verify Your OTP')</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <form action="{{route('go2fa.create')}}" method="POST">
                        {{csrf_field()}}
                        <div class="modal-body">

                            <div class="form-group">
                                <input type="hidden" name="key" value="{{$secret}}">
                                <input type="text" class="form-control" name="code" placeholder="@lang('Enter Google Authenticator Code')">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">@lang('Verify')</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!--Disable Modal -->
        <div id="disableModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">@lang('Verify Your OTP to Disable')</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="{{route('disable.2fa')}}" method="POST">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="code" placeholder="@lang('Enter Google Authenticator Code')">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">@lang('Verify')</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
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

        <div class="login">
            <div class="container">
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


                    <div class="col-xl-6" style="margin-bottom:20px ">
                        @if(Auth::user()->tauth == '1')
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="panel-title text-center">@lang('Two Factor Authenticator')</h4>
                                </div>
                                <div class="card-body text-center">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" value="{{$prevcode}}" class="form-control input-lg" id="code" readonly>
                                            <span class="input-group-addon btn btn-success" id="copybtn">@lang('Copy')</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <img src="{{$prevqr}}">
                                    </div>
                                    <button type="button" class="btn btn-block btn-lg btn-danger" data-toggle="modal" data-target="#disableModal">@lang('Disable Two Factor Authenticator')</button>
                                </div>
                            </div>
                        @else
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="panel-title text-center">@lang('Two Factor Authenticator')</h4>
                                </div>
                                <div class="card-body text-center">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="key" value="{{$secret}}" class="form-control input-lg" id="code" readonly>
                                            <span class="input-group-addon btn btn-success" id="copybtn">@lang('Copy')</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <img src="{{$qrCodeUrl}}">
                                    </div>
                                    <button type="button" class="btn btn-block btn-lg btn-primary small-font-size-in-mobile-device" data-toggle="modal" data-target="#enableModal">@lang('Enable Two Factor Authenticator')</button>
                                </div>
                            </div>
                        @endif
                    </div>


                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="panel-title">@lang('Google Authenticator')</h4>
                            </div>
                            <div class="card-body text-justify">
                                <h5 style="text-transform: capitalize;">@lang('Use Google Authenticator to Scan the QR code  or use the code')</h5><hr/>
                                <p>{{__('Google Authenticator is a multifactor app for mobile devices. It generates timed codes used during the 2-step verification process. To use Google Authenticator, install the Google Authenticator application on your mobile device.')}}</p>
                                <a class="btn btn-primary btn-md" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en" target="_blank">@lang('DOWNLOAD APP')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Enable Modal -->
        <div id="enableModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">@lang('Verify Your OTP')</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <form action="{{route('go2fa.create')}}" method="POST">
                        {{csrf_field()}}
                        <div class="modal-body">

                            <div class="form-group">
                                <input type="hidden" name="key" value="{{$secret}}">
                                <input type="text" class="form-control" name="code" placeholder="@lang('Enter Google Authenticator Code')">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">@lang('Verify')</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!--Disable Modal -->
        <div id="disableModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">@lang('Verify Your OTP to Disable')</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="{{route('disable.2fa')}}" method="POST">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="code" placeholder="@lang('Enter Google Authenticator Code')">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">@lang('Verify')</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    @endif

@endsection
@section('script')
    <script type="text/javascript">
        document.getElementById("copybtn").onclick = function()
        {
            document.getElementById('code').select();
            document.execCommand('copy');
        }
    </script>
@stop
