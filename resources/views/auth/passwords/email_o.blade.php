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
                    <h2 class="extra-margin">@lang('Forgot Password')11</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- login begin-->
    <div class="contact login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title text-center">
                        <h2>@lang('Recover Your Account')</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">


                <div class="col-xl-6 col-lg-6">
                    <form class="contact-form" action="{{ route('forget.password.user') }}" method="post">
                        @csrf
                        <div class="row">
                            @if (count($errors) > 0)

                                @foreach ($errors->all() as $error)
                                    <div class="col-md-12">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                &times;
                                            </button>
                                            <p>{{ $error }}</p>
                                        </div>
                                    </div>
                                @endforeach

                            @endif

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="InputName">@lang('Enter Your Email')<span class="requred">*</span></label>
                                    <input type="email" name="email"  class="form-control"  id="InputName" placeholder="@lang('E-mail')"
                                           required>
                                </div>
                            </div>


                            <div class="col-xl-12 col-lg-12">
                                <div class="row d-flex">
                                    <div class="col-xl-6 col-lg-6">
                                        <button type="submit" class="login-button btn-contact"> @lang('Submit') </button>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                                        <a href="{{ url('login') }}" class="forgetting-password">@lang('Back To Login')</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- login end -->
    @elseif(activeTemp()  == 2)
        <section class="tools-section pranto-tool">
            <div class="thm-container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="tools-content pranto-bread">
                            <h3>@lang('Forgot Password')</h3>

                        </div><!-- /.tools-content -->
                    </div><!-- /.col-md-6 -->

                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </section><!-- /.tools-section -->

        <section class="get-in-touch" id="contact">

            <div class="thm-container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-content">
                            <div class="inner">
                                <div class="title text-center">
                                    <h3>@lang('Recover Your Account')</h3>
                                    @if (count($errors) > 0)
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                {{__($error)}}
                                            </div>
                                        @endforeach
                                    @endif
                                </div><!-- /.title -->
                                <form action="{{ route('forget.password.user') }}" method="post" class="contact-form">
                                    @csrf
                                    <div class="frm-grp">
                                        <input type="email" name="email"  placeholder="@lang('Enter Your Email')" />
                                    </div><!-- /.frm-grp -->


                                    <div class="frm-grp">
                                        <button type="submit">@lang('Submit')</button>
                                    </div><!-- /.frm-grp -->

                                    <div class="form-result"></div><!-- /.form-result -->

                                </form>


                                <br>

                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ url('login') }}" class="forgetting-password text-right">@lang('Back To Login')</a>
                                    </div>
                                </div>
                            </div><!-- /.inner -->
                        </div><!-- /.form-content -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </section><!-- /.get-in-touch -->
    @elseif(activeTemp()  == 3)
        <section class="page-content">
            <!--Start Page Heading-->
            <div class="page-heading page-heading-bg ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1 class="title">@lang('Forgot Password')</h1>
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
                        <div class="col-md-6 col-md-offset-3">
                            <!--Start Contact Form-->
                            <div class="contact-form">
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
                            <!--End Section Heading-->
                                <form action="{{ route('forget.password.user') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="InputName" placeholder="@lang('E-mail')" required>
                                    </div>

                                    <div class="contact-frm-btn text-center">
                                        <button type="submit" class="cont-btn btn-block" style="width: 100%">@lang('Submit')</button>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <a href="{{ url('login') }}" class="forgetting-password">@lang('Back To Login')</a>
                                        </div>
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

    @elseif(activeTemp()  == 4)

        <div class="hyip-breadcrump" style="background-image: url({{asset('assets/images/bred.jpg')}}); background-size: cover; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="breadcrump-title text-center">
                            <h2 class="add-space">@lang('Forgot Password')</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="login">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-xl-5 col-lg-5">
                        <div class="part-form">

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
                            </div>
                            <form action="{{ route('forget.password.user') }}" method="post">
                                @csrf
                                <input type="email" name="email"  placeholder="@lang('Enter Your Email')" required>
                                <button type="submit">@lang('Submit')</button>
                            </form>
                            <span class="forget-password"><a href="{{ url('login') }}">@lang('Back To Login')</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    @endif

@endsection
@section('script')
    <script>
        $('.form').find('input, textarea').on('keyup blur focus', function (e) {

            var $this = $(this),
                label = $this.prev('label');

            if (e.type === 'keyup') {
                if ($this.val() === '') {
                    label.removeClass('active highlight');
                } else {
                    label.addClass('active highlight');
                }
            } else if (e.type === 'blur') {
                if( $this.val() === '' ) {
                    label.removeClass('active highlight');
                } else {
                    label.removeClass('highlight');
                }
            } else if (e.type === 'focus') {

                if( $this.val() === '' ) {
                    label.removeClass('highlight');
                }
                else if( $this.val() !== '' ) {
                    label.addClass('highlight');
                }
            }

        });

    </script>
@stop
