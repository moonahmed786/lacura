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



    <div class="contact login">
        <div class="container">

            <div class="row justify-content-center">


                <div class="col-xl-8">
                    <form class="contact-form" action="{{ route('submit.bank.deposit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="data_id" value="{{$data->id}}">

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

                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h3>@lang('Please Send Exactly') {{$data->amount + $data->charge	}} {{__($general->currency)}}</h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <ul class="list-group">
                                            <li class="list-group-item">@lang('Your Requested Amount'): {{__($data->amount)}}</li>
                                            <li class="list-group-item">@lang('Account Name'): {{__($method->name)}}</li>
                                            <li class="list-group-item">@lang('Account Detail')<!-- : {{__($method->val1)}} --></li>
                                            <li class="list-group-item">
												@lang('金融機関')<br/>
												@lang('ジャパンネット銀行')<br/>
												@lang('支店番号  (0033)')<br/>
												@lang('支店名 はやぶさ(003)')<br/>
												@lang('普通')<br/>
												@lang('口座番号 4978107')<br/>
												@lang('受取人名'): @lang('クシオヤダ エリソン タダオ')<br/>
												@lang('送金目的'): @lang('寄付')												
											</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <br>

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="InputFirstname">@lang('Upload Image/Photo (Deposit Verify)')<span class="requred">*</span></label>
                                    <input type="file" class="form-control"  name="image" required>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="InputFirstname">@lang('Payment Detail(Deposit Verify)')<span class="requred">*</span></label>
                                    <textarea class="form-control" placeholder="@lang('Enter Your Payment Details...')" name="detail" ></textarea>
                                </div>
                            </div>


                            <div class="col-xl-12 col-lg-12">
                                <div class="row d-flex">
                                    <div class="col-xl-12 col-lg-12">
                                        <button id="btn-confirm" type="submit" style="width: 100%" class="login-button btn-contact"> @lang('Submit')</button>
                                    </div>

                                </div>
                            </div>
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

        <section class="get-in-touch">

            <div class="thm-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
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
                                <form id="balanceWithdraw" action="{{ route('submit.bank.deposit') }}" method="post" enctype="multipart/form-data" class="contact-form">
                                    @csrf
                                    <input type="hidden" name="data_id" value="{{$data->id}}">

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading text-center">
                                                <h3>@lang('Please Send Exactly') {{$data->amount + $data->charge	}} {{__($general->currency)}}</h3>
                                            </div>
                                            <div class="panel-body text-center">
                                                <ul class="list-group">
                                                    <li class="list-group-item">@lang('Your Requested Amount'): {{__($data->amount)}}</li>
                                                    <li class="list-group-item">@lang('Account Name'): {{__($method->name)}}</li>
                                                    <li class="list-group-item">@lang('Account Detail'): {{__($method->val1)}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="frm-grp">
                                        <input type="file" name="image" required>

                                    </div><!-- /.frm-grp -->

                                    <div class="frm-grp">
                                        <textarea  rows="5" placeholder="@lang('Enter Your Payment Details...')" required name="detail"></textarea>
                                    </div><!-- /.frm-grp -->
                                    <div class="frm-grp">
                                      <button type="submit">@lang('Submit')</button>
                                    </div><!-- /.frm-grp -->

                                    <div class="form-result"></div><!-- /.form-result -->

                                </form>

                            </div><!-- /.inner -->
                        </div><!-- /.form-content -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
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

                    <div class="col-md-8 col-md-offset-2">
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
                                <form id="balanceWithdraw" action="{{ route('submit.bank.deposit') }}" method="post" enctype="multipart/form-data" class="contact-form">
                                    @csrf
                                    <input type="hidden" name="data_id" value="{{$data->id}}">

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading text-center">
                                                <h3>@lang('Please Send Exactly') {{$data->amount + $data->charge	}} {{__($general->currency)}}</h3>
                                            </div>
                                            <div class="panel-body text-center">
                                                <ul class="list-group">
                                                    <li class="list-group-item">@lang('Your Requested Amount'): {{__($data->amount)}}</li>
                                                    <li class="list-group-item">@lang('Account Name'): {{__($method->name)}}</li>
                                                    <li class="list-group-item">@lang('Account Detail'): {{__($method->val1)}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="file" class="form-control" name="image" required>

                                    </div><!-- /.frm-grp -->

                                    <div class="form-group">
                                        <textarea  rows="5" class="form-control" placeholder="@lang('Enter Your Payment Details...')" required name="detail"></textarea>
                                    </div><!-- /.frm-grp -->
                                    <div class="contact-frm-btn text-center">
                                        <button type="submit" style="width: 100%">@lang('Submit')</button>
                                    </div><!-- /.frm-grp -->

                                </form>

                            </div><!-- /.inner -->
                        </div><!-- /.form-content -->
                    </div><!-- /.col-md-5 -->
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

        <div class="contact">


            <div class="get-in-touch">
                <div class="container">


                    <div class="row justify-content-center">
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

                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h3>@lang('Please Send Exactly') {{$data->amount + $data->charge	}} {{__($general->currency)}}</h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <ul class="list-group">
                                            <li class="list-group-item">@lang('Your Requested Amount'): {{__($data->amount)}}</li>
                                            <li class="list-group-item">@lang('Account Name'): {{__($method->name)}}</li>
                                            <li class="list-group-item">@lang('Account Detail'): {{__($method->val1)}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-12">
                                <div class="part-form">
                                    <form action="{{ route('submit.bank.deposit') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="data_id" value="{{$data->id}}">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <strong>@lang('Upload Image/Photo (Deposit Verify)')</strong>
                                                <input type="file" style="padding: 15px;"  name="image" required >
                                            </div>
                                            <div class="col-xl-12 col-lg-12">
                                                <strong>@lang('Payment Detail(Deposit Verify)')</strong>
                                                <textarea placeholder="@lang('Enter Your Payment Details...')" name="detail" ></textarea>
                                            </div>

                                            <div class="col-xl-12">
                                                <button type="submit">@lang('Submit')</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
@section('script')

@endsection
