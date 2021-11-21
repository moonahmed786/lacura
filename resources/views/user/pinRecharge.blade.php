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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/custom.css')}}">
@stop


@section('content')
    @if(activeTemp()  == 1)
    <!-- page title begin-->
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
    <!-- page title end -->
    <!-- price begin-->
    <div class="price">
        <div class="container">
            @if (count($errors) > 0)
                <div class="row">
                    @foreach ($errors->all() as $error)
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p>{{__($error)}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="row">

                <div class="col-xl-12 col-lg-12 wow pulse">

                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                            <div class="row">

                                <div class="col-xl-12 col-lg-12">
                                <form action="{{route('pin.recharge.post')}}" method="post">
                                    @csrf
                                    <input class="form-control input-lg" id="code" value=""  pattern=".{35,35}" name="pin" maxlength="35" autocomplete="off" type="tel" Placeholder='@lang('deposit.ENTER PIN')' required />
                                    <button type="submit" class="btn btn-primary btn-block btn-lg">@lang('deposit.RECHARGE NOW')</button>

                                </form>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- price end -->
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

        <section class="team-section sec-pad">
            <div class="thm-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading text-center">
                                <h3>@lang('Put Your Pin')</h3>
                            </div>

                                <form action="{{route('pin.recharge.post')}}" method="post">
                                @csrf
                                <div class="panel-body text-center">
                                    @if (count($errors) > 0)
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                {{__($error)}}
                                            </div>
                                        @endforeach
                                    @endif
                                    <input class="form-control input-lg" id="code" value=""  pattern=".{35,35}" name="pin" maxlength="35" autocomplete="off" type="tel" Placeholder='@lang('deposit.ENTER PIN')' required />
                                </div>
                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg">@lang('deposit.RECHARGE NOW')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.thm-container -->
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

                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading text-center">
                                <h3>@lang('Put Your Pin')</h3>
                            </div>

                            <form action="{{route('pin.recharge.post')}}" method="post">
                                @csrf
                                <div class="panel-body text-center">
                                    @if (count($errors) > 0)
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                {{__($error)}}
                                            </div>
                                        @endforeach
                                    @endif
                                    <input class="form-control input-lg" id="code" value=""  pattern=".{35,35}" name="pin" maxlength="35" autocomplete="off" type="tel" Placeholder='@lang('deposit.ENTER PIN')' required />
                                </div>
                                <div class="panel-footer">
                                    <div class="contact-frm-btn text-center">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg" style="width: 100%;line-height:0;">@lang('deposit.RECHARGE NOW')</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                <div class="row justify-content-center">


                    <div class="col-xl-12">
                        <div class="part-form">

                            <form action="{{route('pin.recharge.post')}}" method="post">
                                @csrf
                                <input id="code" value=""  pattern=".{35,35}" name="pin" maxlength="35" autocomplete="off" type="tel" Placeholder='@lang('deposit.ENTER PIN')' required >
                                <button type="submit">@lang('deposit.RECHARGE NOW')</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
@section('script')
    <script>
        $('#code').on('keypress change', function () {

            var xx = document.getElementById('code').value;
            if (xx.length < 32) {

                $(this).val(function (index, value) {
                    return value.replace(/\W/gi, '').replace(/(.{8})/g, '$1-');

                });
            }
        });



    </script>

@endsection



