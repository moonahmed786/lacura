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
    <!-- page title begin-->
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <h2>@lang('Contact Us')</h2>

                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- contact begin-->
    <div class="address-area">
        <div class="container">
            <div class="tsk-contact-info">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact-info-item">
                            <div class="icon-bar">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="info-details">
                                <h5>@lang('Our Address')</h5>
                                <p>{{__($general->address)}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact-info-item">
                            <div class="icon-bar">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="info-details">
                                <h5>@lang('Email Address')</h5>
                                <a href="mailto:{{$general->email}}">{{$general->email}}</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact-info-item">
                            <div class="icon-bar">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="info-details">
                                <h5>@lang('Phone Number')</h5>
                                <a href="tel:{{$general->phone}}">{{__($general->phone)}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact pt-120px" style="margin-bottom: 120px">

        <div class="container">


            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <form class="contact-form" action="{{route('send.mail.contact')}}" method="post" id="get_in_touch">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-8">
                                <div class="section-title text-center">
                                    <h2>@lang('Contact Us For Support')</h2>

                                </div>
                            </div>
                        </div>

                        @if (count($errors) > 0)
                            <div class="row">
                                <div class="col-md-12">
                                    @foreach ($errors->all() as $error)

                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <p>{{__($error)}} </p>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <div class="row">



                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="InputName">@lang('Name')<span class="requred">*</span></label>
                                    <input type="text" class="form-control" id="InputName" name="name" placeholder="@lang('Enter Your Name')">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="InputMail">@lang('E-mail')<span class="requred">*</span></label>
                                    <input type="email" class="form-control" name="email" id="InputMail" placeholder="@lang('Enter Your E-mail Address')">
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">@lang('Message') <span class="requred">*</span></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="@lang('Enter Your Message')"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <button class="btn-contact" type="submit">@lang('Send Now')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- contact end -->
    @elseif(activeTemp()  == 2)
        <section class="tools-section pranto-tool">
            <div class="thm-container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="tools-content pranto-bread">
                            <h3>@lang('Contact Us')</h3>
                        </div><!-- /.tools-content -->
                    </div><!-- /.col-md-6 -->

                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </section><!-- /.tools-section -->

        <!-- contact begin-->
        <div class="address-area">
            <div class="container">
                <div class="tsk-contact-info">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6" style="margin-bottom: 20px">
                            <div class="contact-info-item">
                                <div class="icon-bar">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="info-details">
                                    <h5>@lang('Our Address')</h5>
                                    <p>{{__($general->address)}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6" style="margin-bottom: 20px">
                            <div class="contact-info-item">
                                <div class="icon-bar">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="info-details">
                                    <h5>@lang('Email Address')</h5>
                                    <a href="mailto:{{$general->email}}">{{$general->email}}</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6" style="margin-bottom: 20px">
                            <div class="contact-info-item">
                                <div class="icon-bar">
                                    <i class="fa fa-mobile"></i>
                                </div>
                                <div class="info-details">
                                    <h5>@lang('Phone Number')</h5>
                                    <a href="tel:{{$general->phone}}">{{__($general->phone)}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact" style="padding:  0 0 120px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <form class="contact-form" action="{{route('send.mail.contact')}}" method="post" id="get_in_touch">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="section-title text-center">
                                        <h2>@lang('Contact Us For Support')</h2>

                                    </div>
                                </div>
                            </div>

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

                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="InputName">@lang('Name')<span class="requred">*</span></label>
                                        <input type="text" class="form-control" id="InputName" name="name" placeholder="@lang('Enter Your Name')">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="InputMail">@lang('E-mail')<span class="requred">*</span></label>
                                        <input type="email" class="form-control" name="email" id="InputMail" placeholder="@lang('Enter Your E-mail Address')">
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">@lang('Message') <span class="requred">*</span></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="@lang('Enter Your Message')"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <button class="btn-contact" type="submit">@lang('Send Now')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
        <!-- contact end -->
    @elseif(activeTemp()  == 3)

        <!--Start Page Content-->
        <section class="page-content">
            <!--Start Page Heading-->
            <div class="page-heading page-heading-bg ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1 class="title">@lang('Contact')</h1>
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
                        <div class="col-md-8 col-md-offset-2">
                            <!--Start Contact Form-->
                            <div class="contact-form">
                                <!--Start Section Heading-->
                                <div class="section-heading text-center">
                                    <span class="subtitle">@lang('Get In Touch')</span>
                                    <h2 class="title">@lang('Contact Us')</h2>
                                </div>

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
                                <!--End Section Heading-->
                                <form action="{{route('send.mail.contact')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="InputName" name="name" placeholder="@lang('Enter Your Name')">
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="InputMail" placeholder="@lang('Enter Your E-mail Address')">
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="@lang('Enter Your Message')"></textarea>
                                    </div>
                                    <div class="contact-frm-btn text-center">
                                        <button type="submit" class="cont-btn">Submit</button>
                                    </div>
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
        <!--End Page Content-->
    @elseif(activeTemp()  == 4)
        <!-- breadcrump begin-->
        <div class="hyip-breadcrump" style="background-image: url({{asset('assets/images/bred.jpg')}}); background-size: cover; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="breadcrump-title text-center">
                            <h2 class="add-space">@lang('Contact')</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrump end -->

        <!-- contact begin-->
        <div class="contact">
            <div class="part-address">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-adress">
                                <div class="part-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="part-text">
                                    <h3>@lang('Email Address')</h3>
                                    <ul>
                                        <li><a href="mailto:{{$general->email}}">{{$general->email}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-adress">
                                <div class="part-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="part-text">
                                    <h3>@lang('Phone Number')</h3>
                                    <ul>
                                        <li>  <a href="tel:{{$general->phone}}">{{__($general->phone)}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-adress">
                                <div class="part-icon">
                                    <i class="fa fa-map"></i>
                                </div>
                                <div class="part-text">
                                    <h3>@lang('Our Address')</h3>
                                    <ul>
                                        <li>{{__($general->address)}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="get-in-touch">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <div class="section-title">
                                <h2>@lang('Contact Us For Support')</h2>
                            </div>
                        </div>
                    </div>

                    @if (count($errors) > 0)
                        <div class="row">
                            <div class="col-md-12">
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <p>{{__($error)}} </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="part-form">
                                <form action="{{route('send.mail.contact')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <input type="text" name="name" placeholder="@lang('Enter Your Name')">
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <input type="email" name="email" id="InputMail" placeholder="@lang('Enter Your E-mail Address')">
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <textarea name="message" rows="3" placeholder="@lang('Enter Your Message')"></textarea>
                                        </div>

                                        <div class="col-xl-12 col-lg-12">
                                            <button type="submit">@lang('Send Now')</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact end -->
    @endif
@stop
