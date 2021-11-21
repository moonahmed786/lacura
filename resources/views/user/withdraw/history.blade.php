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

    <div class="transaction">
        <div class="container">

            <div class="row">
                <div class="col-xl-12 col-lg-12 wow zoomIn">
                    <div class="transaction-area">

                        <div class="tab-content" >
                            <div class="tab-pane fade show active" >

                                <table class="table text-center">
                                    <thead>
                                    <tr>
                                        <th >@lang('Withdraw Id')</th>
                                        <th >@lang('Date')</th>
                                        <th >@lang('Payment Detail')</th>
                                        <th >@lang('Amount')</th>
                                        <th >@lang('Charge')</th>
                                        <!-- <th >@lang('Payable Amount')</th> -->
                                        <th >@lang('Processing Time')</th>
                                        <th >@lang('Status')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($trans)==0)
                                        <tr>
                                            <td colspan="8" class="text-center">@lang('No Data Available')</td>
                                        </tr>
                                    @endif
                                    @foreach($trans as $data)
                                        <tr>
                                            <td>{{__($data->withdraw_id)}}</td>
                                            <td scope="row">{{date('g:ia \o\n l jS F Y', strtotime($data->created_at))}}</td>
                                            <td>{{__($data->detail)}}</td>
                                            <td>{{__($general->currency_sym)}} {{__($data->amount)}}</td>
                                            <td>{{__($general->currency_sym)}} {{__($data->charge)}}</td>
                                           <!-- <td>{{__($data->method_cur_amount)}} {{__($data->withdraw_method->currency)}} 
											- @lang('Via') {{__($data->withdraw_method->name)}}</td> -->
                                            <td>{{__($data->processing_time)}}</td>
                                            <td>
                                                @if($data->status == 2)
                                                    <label class="badge badge-danger">@lang('Reject')</label>
                                                @elseif($data->status == 0)
                                                    <label class="badge badge-warning">@lang('Pending')</label>
                                                @elseif($data->status == 1)
                                                    <label class="badge badge-success">@lang('Complete')</label>
                                                @endif
                                            </td>
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
                                                <th >@lang('Withdraw Id')</th>
                                                <th >@lang('Date')</th>
                                                <th >@lang('Payment Detail')</th>
                                                <th >@lang('Amount')</th>
                                                <th >@lang('Charge')</th>
                                                <th >@lang('Payable Amount')</th>
                                                <th >@lang('Processing Time')</th>
                                                <th >@lang('Status')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($trans)==0)
                                                <tr>
                                                    <td colspan="8" class="text-center">@lang('No Data Available')</td>
                                                </tr>
                                            @endif
                                            @foreach($trans as $data)
                                                <tr>
                                                    <td>{{__($data->withdraw_id)}}</td>
                                                    <td scope="row">{{date('g:ia \o\n l jS F Y', strtotime($data->created_at))}}</td>
                                                    <td>{{__($data->detail)}}</td>
                                                    <td>{{__($general->currency_sym)}} {{__($data->amount)}}</td>
                                                    <td>{{__($general->currency_sym)}} {{__($data->charge)}}</td>
                                                    <td>{{__($data->method_cur_amount)}} {{__($data->withdraw_method->currency)}} - @lang('Via') {{__($data->withdraw_method->name)}}</td>
                                                    <td>{{__($data->processing_time)}}</td>
                                                    <td>
                                                        @if($data->status == 2)
                                                            <label class="label label-danger">@lang('Reject')</label>
                                                        @elseif($data->status == 0)
                                                            <label class="label label-warning">@lang('Pending')</label>
                                                        @elseif($data->status == 1)
                                                            <label class="label label-success">@lang('Complete')</label>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            {{$trans->links()}}
                                        </table><!-- /.table -->
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
                                                <th >@lang('Withdraw Id')</th>
                                                <th >@lang('Date')</th>
                                                <th >@lang('Payment Detail')</th>
                                                <th >@lang('Amount')</th>
                                                <th >@lang('Charge')</th>
                                                <th >@lang('Payable Amount')</th>
                                                <th >@lang('Processing Time')</th>
                                                <th >@lang('Status')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($trans)==0)
                                                <tr>
                                                    <td colspan="8" class="text-center">@lang('No Data Available')</td>
                                                </tr>
                                            @endif
                                            @foreach($trans as $data)
                                                <tr>
                                                    <td>{{__($data->withdraw_id)}}</td>
                                                    <td scope="row">{{date('g:ia \o\n l jS F Y', strtotime($data->created_at))}}</td>
                                                    <td>{{__($data->detail)}}</td>
                                                    <td>{{__($general->currency_sym)}} {{__($data->amount)}}</td>
                                                    <td>{{__($general->currency_sym)}} {{__($data->charge)}}</td>
                                                    <td>{{__($data->method_cur_amount)}} {{__($data->withdraw_method->currency)}} - @lang('Via') {{__($data->withdraw_method->name)}}</td>
                                                    <td>{{__($data->processing_time)}}</td>
                                                    <td>
                                                        @if($data->status == 2)
                                                            <label class="label label-danger">@lang('Reject')</label>
                                                        @elseif($data->status == 0)
                                                            <label class="label label-warning">@lang('Pending')</label>
                                                        @elseif($data->status == 1)
                                                            <label class="label label-success">@lang('Complete')</label>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            {{$trans->links()}}
                                        </table><!-- /.table -->
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
                                        <th >@lang('Withdraw Id')</th>
                                        <th >@lang('Date')</th>
                                        <th >@lang('Payment Detail')</th>
                                        <th >@lang('Amount')</th>
                                        <th >@lang('Charge')</th>
                                        <th >@lang('Payable Amount')</th>
                                        <th >@lang('Processing Time')</th>
                                        <th >@lang('Status')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($trans)==0)
                                        <tr>
                                            <td colspan="8" class="text-center">@lang('No Data Available')</td>
                                        </tr>
                                    @endif
                                    @foreach($trans as $data)
                                        <tr>
                                            <td>{{__($data->withdraw_id)}}</td>
                                            <td scope="row">{{date('g:ia \o\n l jS F Y', strtotime($data->created_at))}}</td>
                                            <td>{{__($data->detail)}}</td>
                                            <td>{{__($general->currency_sym)}} {{__($data->amount)}}</td>
                                            <td>{{__($general->currency_sym)}} {{__($data->charge)}}</td>
                                            <td>{{__($data->method_cur_amount)}} {{__($data->withdraw_method->currency)}} - @lang('Via') {{__($data->withdraw_method->name)}}</td>
                                            <td>{{__($data->processing_time)}}</td>
                                            <td>
                                                @if($data->status == 2)
                                                    <label class="badge badge-danger">@lang('Reject')</label>
                                                @elseif($data->status == 0)
                                                    <label class="badge badge-warning">@lang('Pending')</label>
                                                @elseif($data->status == 1)
                                                    <label class="badge badge-success">@lang('Complete')</label>
                                                @endif
                                            </td>
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
