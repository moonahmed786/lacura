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

    <script>
        function createCountDown(elementId, sec) {
            var tms = sec;
            var x = setInterval(function() {
                var distance = tms*1000;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById(elementId).innerHTML =days+"d: "+ hours + "h "+ minutes + "m " + seconds + "s ";
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById(elementId).innerHTML = "{{__('COMPLETE')}}";
                }
                tms--;
            }, 1000);
        }

    </script>

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
                                        <th scope="col">@lang('Plan Name')</th>
                                        <th scope="col">@lang('Payable Interest')</th>
                                        <th scope="col">@lang('Period')</th>
                                        <th scope="col">@lang('Received')</th>
                                        <th scope="col">@lang('Capital Back')</th>
                                        <th scope="col">@lang('Invest Amount')</th>
                                        <th scope="col">@lang('Status')</th>
                                        <th scope="col" style="width :20%">@lang('Next Payment')</th>
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
                                            <td>{{__($data->plan->name)}}</td>
                                            <td>{{__($general->currency_sym)}} {{__($data->interest)}} / {{__($data->time_name)}} </td>
                                            <td>@if($data->period == '-1') <span class="badge badge-success">@lang('Life-time')</span>  @else {{__($data->period)}} @lang('Times') @endif</td>
                                            <td>  {{__($data->return_rec_time)}} @lang('Times') </td>
                                            <td>@if($data->capital_status == '1') <span class="badge badge-success">@lang('Yes')</span>  @else <span class="badge badge-warning">@lang('No')</span> @endif</td>
                                            <td>  {{__($general->currency_sym)}} {{__($data->amount)}} </td>
                                            <td style="padding-top:20px">  
                                                @if($data->status == 1)
                                                    <img style="width: 30px;" src="{{asset('assets/images/load.gif')}}"><span class="badge badge-warning">@lang('Running')</span>
                                                @elseif($data->status == 9) 
                                                    <img style="width: 30px;" src="{{asset('assets/images/load.gif')}}"><span class="badge badge-warning">@lang('Need Approval')</span> 
                                                @else 
                                                    <span class="badge badge-primary">@lang('Complete')</span> 
                                                @endif
                                            </td>
                                            <td scope="row" style="font-weight:bold;">
                                                @if($data->status == 1)
                                                    <p id="counter{{$data->id}}" class="demo countdown timess2"> </p>
                                                @else
                                                    <p>---</p>
                                                @endif
                                            </td>

                                        </tr>

                                        <script>createCountDown('counter<?php echo $data->id ?>', {{\Carbon\Carbon::parse($data->next_time)->diffInSeconds()}});</script>
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

        <script>
            function createCountDown(elementId, sec) {
                var tms = sec;
                var x = setInterval(function() {
                    var distance = tms*1000;
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    document.getElementById(elementId).innerHTML =days+"d: "+ hours + "h "+ minutes + "m " + seconds + "s ";
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById(elementId).innerHTML = "{{__('COMPLETE')}}";
                    }
                    tms--;
                }, 1000);
            }

        </script>

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
                                                <th scope="col">@lang('Plan Name')</th>
                                                <th scope="col">@lang('Payable Interest')</th>
                                                <th scope="col">@lang('Period')</th>
                                                <th scope="col">@lang('Received')</th>
                                                <th scope="col">@lang('Capital Back')</th>
                                                <th scope="col">@lang('Invest Amount')</th>
                                                <th scope="col">@lang('Status')</th>
                                                <th scope="col" style="width :20%">@lang('Next Payment')</th>
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
                                                    <td>{{__($data->plan->name)}}</td>
                                                    <td>{{__($general->currency_sym)}} {{__($data->interest)}} / {{__($data->time_name)}} </td>
                                                    <td>@if($data->period == '-1') <span class="label label-success">@lang('Life-time')</span>  @else {{__($data->period)}} @lang('Times') @endif</td>
                                                    <td>  {{__($data->return_rec_time)}} @lang('Times') </td>
                                                    <td>@if($data->capital_status == '1') <span class="label label-success">@lang('Yes')</span>  @else <span class="label label-warning">@lang('No')</span> @endif</td>
                                                    <td>  {{__($general->currency_sym)}} {{__($data->amount)}} </td>
                                                    <td style="padding-top:20px">  @if($data->status == '1') <img style="width: 30px;" src="{{asset('assets/images/load.gif')}}"><span class="label label-warning">@lang('Running')</span>  @else <span class="label label-primary">@lang('Complete')</span> @endif </td>
                                                    <td scope="row" style="font-weight:bold;"><p id="counter{{$data->id}}" class="demo countdown timess2"> </p></td>

                                                </tr>

                                                <script>createCountDown('counter<?php echo $data->id ?>', {{\Carbon\Carbon::parse($data->next_time)->diffInSeconds()}});</script>
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
        </section><!-- /.transaction-performance-section -->
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

        <script>
            function createCountDown(elementId, sec) {
                var tms = sec;
                var x = setInterval(function() {
                    var distance = tms*1000;
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    document.getElementById(elementId).innerHTML =days+"d: "+ hours + "h "+ minutes + "m " + seconds + "s ";
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById(elementId).innerHTML = "{{__('COMPLETE')}}";
                    }
                    tms--;
                }, 1000);
            }

        </script>

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
                                                <th scope="col">@lang('Plan Name')</th>
                                                <th scope="col">@lang('Payable Interest')</th>
                                                <th scope="col">@lang('Period')</th>
                                                <th scope="col">@lang('Received')</th>
                                                <th scope="col">@lang('Capital Back')</th>
                                                <th scope="col">@lang('Invest Amount')</th>
                                                <th scope="col">@lang('Status')</th>
                                                <th scope="col" style="width :20%">@lang('Next Payment')</th>
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
                                                    <td>{{__($data->plan->name)}}</td>
                                                    <td>{{__($general->currency_sym)}} {{__($data->interest)}} / {{__($data->time_name)}} </td>
                                                    <td>@if($data->period == '-1') <span class="label label-success">@lang('Life-time')</span>  @else {{__($data->period)}} @lang('Times') @endif</td>
                                                    <td>  {{__($data->return_rec_time)}} @lang('Times') </td>
                                                    <td>@if($data->capital_status == '1') <span class="label label-success">@lang('Yes')</span>  @else <span class="label label-warning">@lang('No')</span> @endif</td>
                                                    <td>  {{__($general->currency_sym)}} {{__($data->amount)}} </td>
                                                    <td style="padding-top:20px">  @if($data->status == '1') <img style="width: 30px;" src="{{asset('assets/images/load.gif')}}"><span class="label label-warning">@lang('Running')</span>  @else <span class="label label-primary">@lang('Complete')</span> @endif </td>
                                                    <td scope="row" style="font-weight:bold;"><p id="counter{{$data->id}}" class="demo countdown timess2"> </p></td>

                                                </tr>

                                                <script>createCountDown('counter<?php echo $data->id ?>', {{\Carbon\Carbon::parse($data->next_time)->diffInSeconds()}});</script>
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

        <script>
            function createCountDown(elementId, sec) {
                var tms = sec;
                var x = setInterval(function() {
                    var distance = tms*1000;
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    document.getElementById(elementId).innerHTML =days+"d: "+ hours + "h "+ minutes + "m " + seconds + "s ";
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById(elementId).innerHTML = "{{__('COMPLETE')}}";
                    }
                    tms--;
                }, 1000);
            }

        </script>
        <div class="transaction">
            <div class="container">

                <div class="row">

                    <div class="col-md-12">
                        <div class="single-transaction">

                            <div class="parent-table">
                                <table class="table">
                                    <thead class="table-title" style="color: #fff">
                                    <tr>
                                        <th scope="col">@lang('Plan Name')</th>
                                        <th scope="col">@lang('Payable Interest')</th>
                                        <th scope="col">@lang('Period')</th>
                                        <th scope="col">@lang('Received')</th>
                                        <th scope="col">@lang('Capital Back')</th>
                                        <th scope="col">@lang('Invest Amount')</th>
                                        <th scope="col">@lang('Status')</th>
                                        <th scope="col" style="width :20%">@lang('Next Payment')</th>
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
                                            <td>{{__($data->plan->name)}}</td>
                                            <td>{{__($general->currency_sym)}} {{__($data->interest)}} / {{__($data->time_name)}} </td>
                                            <td>@if($data->period == '-1') <span class="label label-success">@lang('Life-time')</span>  @else {{__($data->period)}} @lang('Times') @endif</td>
                                            <td>  {{__($data->return_rec_time)}} @lang('Times') </td>
                                            <td>@if($data->capital_status == '1') <span class="badge badge-success">@lang('Yes')</span>  @else <span class="badge badge-warning">@lang('No')</span> @endif</td>
                                            <td>  {{__($general->currency_sym)}} {{__($data->amount)}} </td>
                                            <td style="padding-top:20px">  @if($data->status == '1') <img style="width: 30px;" src="{{asset('assets/images/load.gif')}}"><span class="badge badge-warning">@lang('Running')</span>  @else <span class="badge badge-primary">@lang('Complete')</span> @endif </td>
                                            <td scope="row" style="font-weight:bold;"><p id="counter{{$data->id}}" class="demo countdown timess2"> </p></td>

                                        </tr>

                                        <script>createCountDown('counter<?php echo $data->id ?>', {{\Carbon\Carbon::parse($data->next_time)->diffInSeconds()}});</script>
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
