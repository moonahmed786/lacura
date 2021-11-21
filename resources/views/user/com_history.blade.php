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

    @include('layouts.balance_show')

    <div class="transaction">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <h4>@lang('Notice !')</h4>
						
						@if(session('lang') == 'pt-br')	
                        <p>Para receber a comissão você precisa ter pelo menos 7 referências.</p>
						@else
                        <p>コミッションの引き出しは、少なくとも7人の紹介が必要です。</p>
						@endif						
                        <hr>
                        <p>@lang('You have') <b>{{ $ref_comms->count() }} @lang('referred users')</b></p>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            @if (count($errors) > 0)
            <div class="row">
                <div class="col-md-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p>{{__($error)}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-xl-12 col-lg-12 wow zoomIn">
                    <div class="transaction-area">

                        <div class="tab-content" >
                            <div class="tab-pane fade show active" >

                                <table class="table text-center">
                                    <thead>
                                    <tr>
                                        <th scope="col">@lang('Date')</th>
                                        <th scope="col">@lang('Referred User')</th>
                                        <th scope="col">@lang('Amount')</th>
                                        <th scope="col">@lang('Status')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($ref_comms)==0)
                                        <tr>
                                            <td colspan="5" class="text-center">@lang('No Data Available')</td>
                                        </tr>
                                    @endif
                                    @php 
                                        $today = \Carbon\Carbon::now();
                                    @endphp
                                    @foreach($ref_comms as $data)
                                        <tr>
                                            <td scope="row">{{date('g:ia \o\n l jS F Y', strtotime($data->created_at))}}</td>
                                            <td>{{__($data->ref_user->username)}}</td>
                                            <td>{{__($general->currency_sym)}} {{abs($data->amount)}}</td>
                                            <td style="padding-top: 20px;">
                                                @php
                                                    $day = $today->diffInDays(\Carbon\Carbon::parse($data->created_at));
                                                @endphp
                                                @if($data->status == 0)
                                                    <span class="badge badge-primary" style="margin-top: 25px;">@lang('Complete')</span>
                                                @elseif($data->status == 1 && $day >= $general->affiliate_withdraw_day && $ref_comms->count() >= $general->affiliate_withdraw_person)
                                                    <form action="{{ route('user.referral.com.adjust') }}" method="post" style="padding-top: 10px;">
                                                        @csrf
                                                        <input type="hidden" name="ref_comm_id" value="{{ $data->id }}">
                                                        <button type="submit" class="btn btn-success btn-icon">@lang('Add to Balance')</button>
                                                    </form>
                                                @else
                                                    <img style="width: 30px;" src="{{ asset('assets/images/load.gif') }}">
                                                    <br>
                                                    <span class="badge badge-warning">@lang('Running')</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$ref_comms->links()}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- transaction end -->
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
        @include('layouts.balance_show')

        <section class="transaction-performance-section">
            <div class="thm-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="transaction-content">

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="diposited-by">
                                    <div class="table-responsive transaction-table">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">@lang('Date')</th>
                                                <th scope="col">@lang('Description')</th>
                                                <th scope="col">@lang('Amount')</th>
                                                <th scope="col">@lang('After Balance')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($trans)==0)
                                                <tr>
                                                    <td colspan="5" class="text-center">@lang('No Data Available')</td>
                                                </tr>
                                            @endif
                                            @foreach($trans as $data)
                                                <tr @if($data->amount < 0) style="background-color: #e4afaf" @endif>
                                                    <td scope="row">{{date('g:ia \o\n l jS F Y', strtotime($data->created_at))}}</td>
                                                    <td>{{__($data->des)}}</td>
                                                    <td>{{__($general->currency_sym)}} {{abs($data->amount)}}</td>
                                                    <td>{{__($general->currency_sym)}} {{$data->balance}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>

                                        </table><!-- /.table -->
                                        {{$trans->links()}}
                                    </div><!-- /.table-responsive -->
                                </div>

                            </div><!-- /.tab-content -->
                        </div><!-- /.transaction-content -->
                    </div><!-- /.col-lg-8 -->

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
        </section>

        <section class="transaction-performance-section pranto-section-bottom" style="padding-top: 50px">
            <div class="thm-container container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="transaction-content">

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="diposited-by">
                                    <div class="table-responsive transaction-table">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">@lang('Date')</th>
                                                <th scope="col">@lang('Description')</th>
                                                <th scope="col">@lang('Amount')</th>
                                                <th scope="col">@lang('After Balance')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($trans)==0)
                                                <tr>
                                                    <td colspan="5" class="text-center">@lang('No Data Available')</td>
                                                </tr>
                                            @endif
                                            @foreach($trans as $data)
                                                <tr @if($data->amount < 0) style="background-color: #e4afaf" @endif>
                                                    <td scope="row">{{date('g:ia \o\n l jS F Y', strtotime($data->created_at))}}</td>
                                                    <td>{{__($data->des)}}</td>
                                                    <td>{{__($general->currency_sym)}} {{abs($data->amount)}}</td>
                                                    <td>{{__($general->currency_sym)}} {{$data->balance}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>

                                        </table><!-- /.table -->
                                        {{$trans->links()}}
                                    </div><!-- /.table-responsive -->
                                </div>

                            </div><!-- /.tab-content -->
                        </div><!-- /.transaction-content -->
                    </div><!-- /.col-lg-8 -->

                </div><!-- /.row -->
            </div><!-- /.thm-container -->
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

        <div class="transaction">
            <div class="container">

                <div class="row">

                    <div class="col-md-12">
                        <div class="single-transaction">

                            <div class="parent-table">
                                <table class="table">
                                    <thead class="table-title" style="color: #fff">
                                    <tr>
                                        <th scope="col">@lang('Date')</th>
                                        <th scope="col">@lang('Description')</th>
                                        <th scope="col">@lang('Amount')</th>
                                        <th scope="col">@lang('After Balance')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($trans)==0)
                                        <tr>
                                            <td colspan="5" class="text-center">@lang('No Data Available')</td>
                                        </tr>
                                    @endif
                                    @foreach($trans as $data)
                                        <tr @if($data->amount < 0) style="background-color: #e4afaf" @endif>
                                            <td scope="row">{{date('g:ia \o\n l jS F Y', strtotime($data->created_at))}}</td>
                                            <td>{{__($data->des)}}</td>
                                            <td>{{__($general->currency_sym)}} {{abs($data->amount)}}</td>
                                            <td>{{__($general->currency_sym)}} {{$data->balance}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$trans->links()}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    @endif
@endsection
@section('script')

@stop
