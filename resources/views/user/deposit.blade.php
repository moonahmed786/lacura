
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
                                <p>{{__($error) }}</p>
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
                                @foreach($gates as $gate)
                                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                                        <div class="single-price special">
                                            <div class="part-top">
                                                <h3>{{__($gate->name)}}</h3>
                                            </div>
                                            <div class="part-bottom">
                                                <ul>
                                                    <li class="list-group-item section-bg-1">
                                                        <img src="{{asset('assets/images/gateway')}}/{{$gate->id}}.jpg" style="width:100%;"/>
                                                    </li>
                                                    <li class="list-group-item section-bg-1">
                                                        @lang('Charge'): <strong>{{__($general->currency_sym)}}{{__($gate->fixed_charge)}}</strong> + <strong>{{__($gate->percent_charge)}} %</strong>
                                                    </li>
                                                    <li class="list-group-item section-bg-1">
                                                        @lang('Limit'): <strong>{{__($general->currency_sym)}}{{__($gate->minamo)}}</strong> - <strong>{{__($general->currency_sym)}}{{__($gate->maxamo)}}</strong>
                                                    </li>
                                                </ul>
                                                <a data-toggle="modal" style="width:100%;"  data-name="{{__($gate->name)}}" data-gate="{{$gate->id}}" class="depoButton" href="#depoModal">  @lang('Deposit Now')</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- price end -->

    <!-- Modal -->
    <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('deposit.data-insert')}}" method="POST">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="gateway" id="gateWay"/>
                    <h5>@lang('Deposit Amount')</h5>

                    <div class="input-group">
                        <input type="text" class="form-control input-lg" name="amount">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                {{__($general->currency_sym)}}
                            </span>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">@lang('Deposit Preview')</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
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
        </section>
        @include('layouts.balance_show')

        <section class="pricing-section sec-pad" id="plan">
            <div class="thm-container">
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            {{__($error)}}
                        </div>
                    @endforeach
                @endif

                <div class="tab-content">
                    <div class="tab-pane fade in active" >
                        <div class="row">
                            @foreach($gates as $gate)
                                <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 20px;">
                                    <div class="single-pricing hvr-bounce-to-bottom">
                                        <div class="title">
                                            <h3>{{__($gate->name)}}</h3>
                                        </div><!-- /.title -->

                                        <div class="info">
                                            <ul class="list-group">
                                                <li class="list-group-item ">
                                                    <img src="{{asset('assets/images/gateway')}}/{{$gate->id}}.jpg" style="width:100%;"/>
                                                </li><br><br>
                                                <p>@lang('Charge'): <strong>{{__($general->currency_sym)}}{{__($gate->fixed_charge)}}</strong> + <strong>{{__($gate->percent_charge)}} %</strong></p>
                                                <p>@lang('Limit'): <strong>{{__($general->currency_sym)}}{{__($gate->minamo)}}</strong> - <strong>{{__($general->currency_sym)}}{{__($gate->maxamo)}}</strong></p>
                                            </ul>
                                        </div><!-- /.info -->
                                        <div class="btn-box">
                                            <a data-toggle="modal" style="width:100%;" class="sign-up depoButton" data-name="{{__($gate->name)}}" data-gate="{{$gate->id}}" href="#depoModal">  @lang('Deposit Now')</a>
                                        </div><!-- /.btn-box -->
                                    </div><!-- /.single-pricing -->
                                </div><!-- /.col-md-4 -->
                            @endforeach
                        </div><!-- /.row -->
                    </div>

                </div><!-- /.tab-content -->
            </div><!-- /.thm-container -->
        </section><!-- /.pricing-section -->

        <!-- Modal -->
        <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <h3 class="modal-title" id="ModalLabel"></h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('deposit.data-insert')}}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="gateway" id="gateWay"/>
                            <h5> @lang('Deposit Amount') </h5>

                            <div class="input-group">
                                <input type="text" class="form-control input-lg" name="amount">
                                <div class="input-group-addon">
                            <span class="input-group-text">
                                {{__($general->currency_sym)}}
                            </span>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">@lang('Deposit Preview')</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
        </section>

        <section class="latest-news-are pranto-section-bottom">
            <div class="container">
                <div class="row">

                @foreach($gates as $gate)

                    <!--Start Blog Post-->
                        <div class="col-md-4 col-sm-6" style="margin-top: 60px;">
                            <!--Start div-->
                            <div class="blog-post latest single-blog-post home-two">
                                <div class="content">
                                    <div class="post-meta text-center">
                                        <h2 class="post-title">{{__($gate->name)}}</h2>
                                    </div>
                                    <div class="post-content text-center">
                                        <ul>
                                            <li class="list-group-item section-bg-1">
                                                <img src="{{asset('assets/images/gateway')}}/{{$gate->id}}.jpg" style="width:100%;"/>
                                            </li>
                                            <li class="list-group-item section-bg-1">
                                                @lang('Charge'): <strong>{{__($general->currency_sym)}}{{__($gate->fixed_charge)}}</strong> + <strong>{{__($gate->percent_charge)}} %</strong>
                                            </li>
                                            <li class="list-group-item section-bg-1">
                                                @lang('Limit'): <strong>{{__($general->currency_sym)}}{{__($gate->minamo)}}</strong> - <strong>{{__($general->currency_sym)}}{{__($gate->maxamo)}}</strong>
                                            </li>
                                        </ul>
                                        <br>

                                        <div class="contact-frm-btn text-center">
                                            <a data-toggle="modal" style="width:100%;"  data-name="{{__($gate->name)}}" data-gate="{{$gate->id}}" class="depoButton" href="#depoModal">  @lang('Deposit Now')</a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!--End div-->
                        </div>
                        <!--End Blog Post-->
                    @endforeach
                </div>
            </div>
        </section>

        <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <h3 class="modal-title" id="ModalLabel"></h3>
                    </div>
                    <form action="{{route('deposit.data-insert')}}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="gateway" id="gateWay"/>
                            <h5> @lang('Deposit Amount') </h5>

                            <div class="input-group">
                                <input type="text" class="form-control input-lg" name="amount">
                                <div class="input-group-addon">
                            <span class="input-group-text">
                                {{__($general->currency_sym)}}
                            </span>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">@lang('Deposit Preview')</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
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
        <!-- plan begin-->
        <div class="plan">
            <div class="container">

                <div class="row">

                    @foreach($gates as $gate)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-plan active">
                            <h3>{{__($gate->name)}}</h3>
                            <div class="part-parcent">
                                <img src="{{asset('assets/images/gateway')}}/{{$gate->id}}.jpg" style="width:100%;"/>
                            </div>
                            <div class="part-feature">
                                <div class="single-plan-feature">
                                    <span class="large-text"> @lang('Charge'): <strong>{{__($general->currency_sym)}}{{__($gate->fixed_charge)}}</strong> + <strong>{{__($gate->percent_charge)}} %</strong></span>
                                </div>
                                <div class="single-plan-feature">
                                    <span class="large-text"> @lang('Limit'): <strong>{{__($general->currency_sym)}}{{__($gate->minamo)}}</strong> - <strong>{{__($general->currency_sym)}}{{__($gate->maxamo)}}</strong></span>
                                </div>
                            </div>
                            <div class="part-button">
                                <a data-toggle="modal" style="width:100%;"  data-name="{{__($gate->name)}}" data-gate="{{$gate->id}}" class="depoButton" href="#depoModal">  @lang('Deposit Now')</a>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!-- plan end -->

        <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <h3 class="modal-title" id="ModalLabel"></h3>
                    </div>
                    <form action="{{route('deposit.data-insert')}}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="gateway" id="gateWay"/>
                            <h5> @lang('Deposit Amount') </h5>

                            <div class="input-group">
                                <input type="text" class="form-control input-lg" name="amount">
                                <div class="input-group-addon">
                            <span class="input-group-text">
                                {{__($general->currency_sym)}}
                            </span>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">@lang('Deposit Preview')</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endsection
@section('script')
<script>
    $(document).ready(function(){

        $(document).on('click','.depoButton', function(){
            $('#ModalLabel').text($(this).data('name'));
            $('#gateWay').val($(this).data('gate'));

        });
    });
</script>

@endsection



