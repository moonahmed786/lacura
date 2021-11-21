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
                    <div class="col-md-12">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p>{{__($error)}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="row">

                <div class="col-xl-12 col-lg-12 wow zoomIn">

                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                            <div class="row">
                                @foreach($trans as $data)
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single-price special">
                                            <div class="part-top">
                                                <h3>{{__($data->name)}}</h3>
                                            </div>
                                            <div class="part-bottom">
                                                <ul>
                                                    <li class="list-group-item section-bg-2">
                                                        <img style="width: 150px" src="{{asset('assets/images/withdraw/'.$data->image)}}" alt="price icon">
                                                    </li>

                                                    <li class="list-group-item section-bg-2" style="font-weight: bold;">
                                                        @lang('Minimum') {{__($data->min_amo)}} {{__($general->currency)}} <br>
														@lang('Maximum') {{__($data->max_amo)}} {{__($general->currency)}}
                                                    </li>
                                                    <li class="list-group-item section-bg-2" style="color: red">
                                                        @lang('Percentage Charge'): {{__($data->chargepc)}} %
                                                    </li>
                                                    <li class="list-group-item section-bg-2" style="color: green;font-weight: bold;">
                                                        @lang('Charge for withdraw Amount'):  {{__($data->chargefx)}} {{__($general->currency)}}
                                                    </li>

													@if(session('lang') == 'pt-br')
                                                    <li class="list-group-item section-bg-2" style="color: #344880;font-weight: bold;">
                                                        @lang('Withdrawal Accept From Your') {{__($general->interest_wallet_name)}}
                                                    </li>
													@else
                                                    <li class="list-group-item section-bg-2" style="color: #344880;font-weight: bold;">
                                                        キャッシュバックからお引き出し
                                                    </li>
													@endif

                                                </ul>
                                                <a   data-toggle="modal" href="#buyModal{{$data->id}}">@lang('Withdraw By') {{__($data->name)}}</a>

                                            </div>
                                        </div>
                                    </div>


                                    <div id="buyModal{{$data->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">@lang('Withdraw via') <strong>{{__($data->name)}}</strong></h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form method="POST" action="{{route('withdraw.preview.user')}}" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        {{csrf_field()}}
                                                        <div class="text-center">
															<p>土曜日と日曜日などの休日の場合、払い戻し率は無効です。<br/>
                                                                元本の締め切り最後の日は引き落とされます。</p>
                                                            <p style="color: red">@lang('Charge for withdraw Amount'): {{__($data->chargefx)}} {{__($general->currency)}}</p>
                                                            <p>@lang('Percentage Charge'): {{__($data->chargepc)}} %</p>

															@if(session('lang') == 'pt-br')
															<p style="color: green">@lang('Processing Days (At last)') : {{__($data->processing_day)}} @lang('Days')</p>
															@else
															<p style="color: green">おき出し処理期間は3～10日となります。</p>
															@endif


                                                        </div>
                                                        <input type="hidden" name="gateway" value="{{$data->id}}">
                                                        <h5 class="text-center font-weight-bold text-danger">{{__($general->interest_wallet_name) }} @lang('Balance'):  {{__($general->currency_sym)}} {{round(Auth::user()->interest_balance,4)}}</h5>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input type="text" name="amount" class="form-control" id="amount" placeholder="@lang('AMOUNT YOU WANT TO WITHDRAW')" required>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="basic-addon2">{{__($general->currency)}}</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        @if(!Auth::user()->personal_document)
                                                        <div class="form-group">
                                                            <label for="peronal_document font-weight-bold">@lang('Personal Document')</label>
                                                            <input type="file" class="form-control" name="personal_document" required>
                                                        </div>
                                                        @endif

                                                        @if(!Auth::user()->selfie_document)
                                                        <div class="form-group">
                                                            <label for="peronal_document font-weight-bold">@lang('Selfie with Document')</label>
                                                            <input type="file" class="form-control" name="selfie_document" required>
                                                        </div>
                                                        @endif


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">@lang('Preview')</button>
                                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">@lang('Close')</button>
                                                    </div>
                                                </form>
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


        <section class="pricing-section sec-pad">
            <div class="thm-container">
                <div class="sec-title text-center">
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                {{__($error)}}
                            </div>
                        @endforeach
                    @endif
                </div><!-- /.sec-title -->

                <div class="tab-content">
                    <div class="tab-pane fade in active" >
                        <div class="row">
                            @foreach($trans as $data)

                                <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 20px;">
                                    <div class="single-pricing hvr-bounce-to-bottom">
                                        <div class="title">
                                            <h3>{{__($data->name)}}</h3>
                                        </div><!-- /.title -->

                                        <div class="info">
                                            <ul class="list-group">
                                                <li class="list-group-item ">
                                                    <img style="width: 150px" src="{{asset('assets/images/withdraw/'.$data->image)}}" alt="price icon">
                                                </li><br><br>
                                                <p>@lang('Minimum') {{__($data->min_amo)}} {{__($general->currency)}} - @lang('Maximum') {{__($data->max_amo)}} {{__($general->currency)}}</p>
                                                <p> @lang('Percentage Charge'): {{__($data->chargepc)}} %</p>
                                                <p>@lang('Charge for withdraw Amount'):  {{__($data->chargefx)}} {{__($general->currency)}}</p>
                                                <p> @lang('Withdrawal Accept From Your')<br>
                                                    {{__($general->interest_wallet_name)}}</p>
                                            </ul>
                                        </div><!-- /.info -->
                                        <div class="btn-box">
                                            <a data-toggle="modal" style="width:100%;" class="sign-up" href="#buyModal{{$data->id}}">  @lang('Withdraw By') {{__($data->name)}}</a>
                                        </div><!-- /.btn-box -->
                                    </div><!-- /.single-pricing -->
                                </div><!-- /.col-md-4 -->

                                <div id="buyModal{{$data->id}}" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">@lang('Withdraw via') <strong>{{__($data->name)}}</strong></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form method="POST" action="{{route('withdraw.preview.user')}}">
                                                <div class="modal-body">
                                                    {{csrf_field()}}
                                                    <div class="text-center">
                                                        <p style="color: red">@lang('Charge for withdraw Amount'): {{__($data->chargefx)}} {{__($general->currency)}}</p>
                                                        <p>@lang('Percentage Charge'): {{__($data->chargepc)}} %</p>
                                                        <p style="color: green">@lang('Processing Days (At last)') : {{__($data->processing_day)}} @lang('Days')</p>
                                                    </div>
                                                    <input type="hidden" name="gateway" value="{{$data->id}}">
                                                    <h5 class="text-center font-weight-bold text-danger">@lang('Your') {{__($general->interest_wallet_name) }} @lang('Balance'):  {{__($general->currency_sym)}} {{round(Auth::user()->interest_balance,4)}}</h5>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" name="amount" class="form-control" id="amount" placeholder="@lang('AMOUNT YOU WANT TO WITHDRAW')" required>
                                                            <div class="input-group-addon">
                                                                <span class="input-group-text" id="basic-addon2">{{__($general->currency)}}</span>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">@lang('Preview')</button>
                                                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">@lang('Close')</button>
                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                </div>

                            @endforeach
                        </div><!-- /.row -->
                    </div>

                </div><!-- /.tab-content -->
            </div><!-- /.thm-container -->
        </section><!-- /.pricing-section -->
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

                @foreach($trans as $data)

                    <!--Start Blog Post-->
                        <div class="col-md-4 col-sm-6" style="margin-top: 60px;">
                            <!--Start div-->
                            <div class="blog-post latest single-blog-post home-two">
                                <div class="content">
                                    <div class="post-meta text-center">
                                        <h2 class="post-title">{{__($data->name)}}</h2>
                                    </div>
                                    <div class="post-content text-center">
                                        <ul>
                                            <li class="list-group-item section-bg-2">
                                                <img style="width: 150px" src="{{asset('assets/images/withdraw/'.$data->image)}}" alt="price icon">
                                            </li>

                                            <li class="list-group-item section-bg-2" style="font-weight: bold;">
                                                @lang('Minimum') {{__($data->min_amo)}} {{__($general->currency)}} - @lang('Maximum') {{__($data->max_amo)}} {{__($general->currency)}}
                                            </li>
                                            <li class="list-group-item section-bg-2" style="color: red">
                                                @lang('Percentage Charge'): {{__($data->chargepc)}} %
                                            </li>
                                            <li class="list-group-item section-bg-2" style="color: green;font-weight: bold;">
                                                @lang('Charge for withdraw Amount'):  {{__($data->chargefx)}} {{__($general->currency)}}
                                            </li>
                                            <li class="list-group-item section-bg-2" style="color: #344880;font-weight: bold;">
                                                @lang('Withdrawal Accept From Your')<br>
                                                {{__($general->interest_wallet_name)}}
                                            </li>
                                        </ul>
                                        <br>

                                        <div class="contact-frm-btn text-center">
                                            <a   data-toggle="modal" href="#buyModal{{$data->id}}">@lang('Withdraw By') {{__($data->name)}}</a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!--End div-->
                        </div>
                        <!--End Blog Post-->


                        <div id="buyModal{{$data->id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">@lang('Withdraw via') <strong>{{__($data->name)}}</strong></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <form method="POST" action="{{route('withdraw.preview.user')}}">
                                        <div class="modal-body">
                                            {{csrf_field()}}
                                            <div class="text-center">
                                                <p style="color: red">@lang('Charge for withdraw Amount'): {{__($data->chargefx)}} {{__($general->currency)}}</p>
                                                <p>@lang('Percentage Charge'): {{__($data->chargepc)}} %</p>
                                                <p style="color: green">@lang('Processing Days (At last)') : {{__($data->processing_day)}} @lang('Days')</p>
                                            </div>
                                            <input type="hidden" name="gateway" value="{{$data->id}}">
                                            <h5 class="text-center font-weight-bold text-danger">@lang('Your') {{__($general->interest_wallet_name) }} @lang('Balance'):  {{__($general->currency_sym)}} {{round(Auth::user()->interest_balance,4)}}</h5>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" name="amount" class="form-control" id="amount" placeholder="@lang('AMOUNT YOU WANT TO WITHDRAW')" required>
                                                    <div class="input-group-addon">
                                                        <span class="input-group-text" id="basic-addon2">{{__($general->currency)}}</span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">@lang('Preview')</button>
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">@lang('Close')</button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    @endforeach
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

                <div class="row">

                    @foreach($trans as $data)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-plan active">
                                <h3>{{__($data->name)}}</h3>
                                <div class="part-parcent">
                                    <img src="{{asset('assets/images/withdraw/'.$data->image)}}" style="width:100%;"/>
                                </div>
                                <div class="part-feature">
                                    <div class="single-plan-feature">
                                        <span class="large-text">  @lang('Minimum') {{__($data->min_amo)}} {{__($general->currency)}} - @lang('Maximum') {{__($data->max_amo)}} {{__($general->currency)}}</span>
                                    </div>
                                    <div class="single-plan-feature">
                                        <span class="large-text"> @lang('Percentage Charge'): {{__($data->chargepc)}} %</span>
                                    </div>
                                    <div class="single-plan-feature">
                                        <span class="large-text">@lang('Charge for withdraw Amount'):  {{__($data->chargefx)}} {{__($general->currency)}}</span>
                                    </div>
                                    <div class="single-plan-feature">
                                        <span class="large-text">@lang('Withdrawal Accept From Your')<br>
                                            {{__($general->interest_wallet_name)}}</span>
                                    </div>
                                </div>
                                <div class="part-button">
                                    <a   data-toggle="modal" href="#buyModal{{$data->id}}">@lang('Withdraw By') {{__($data->name)}}</a>
                                </div>
                            </div>
                        </div>


                        <div id="buyModal{{$data->id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">@lang('Withdraw via') <strong>{{__($data->name)}}</strong></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <form method="POST" action="{{route('withdraw.preview.user')}}">
                                        <div class="modal-body">
                                            {{csrf_field()}}
                                            <div class="text-center">
                                                <p style="color: red">@lang('Charge for withdraw Amount'): {{__($data->chargefx)}} {{__($general->currency)}}</p>
                                                <p>@lang('Percentage Charge'): {{__($data->chargepc)}} %</p>
                                                <p style="color: green">@lang('Processing Days (At last)') : {{__($data->processing_day)}} @lang('Days')</p>
                                            </div>
                                            <input type="hidden" name="gateway" value="{{$data->id}}">
                                            <h5 class="text-center font-weight-bold text-danger">@lang('Your') {{__($general->interest_wallet_name) }} @lang('Balance'):  {{__($general->currency_sym)}} {{round(Auth::user()->interest_balance,4)}}</h5>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" name="amount" class="form-control" id="amount" placeholder="@lang('AMOUNT YOU WANT TO WITHDRAW')" required>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">{{__($general->currency)}}</span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">@lang('Preview')</button>
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">@lang('Close')</button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    @endif




@endsection
@section('script')
@if (Session::has('nominee_error'))
    <script type="text/javascript">
        $(document).ready(function () {
            swal("{{ __(Session::get('nominee_error')) }}","", "warning");
        });
    </script>
@endif
@stop
