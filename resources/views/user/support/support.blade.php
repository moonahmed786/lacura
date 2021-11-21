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

    <div class="transaction">
        <div class="container">

            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-12">
                    <a href="{{route('add.new.ticket')}}" class="btn btn-warning btn-block" style="color: black ;"><b>@lang('New Ticket')</b></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="transaction-area">

                        <div class="tab-content" >
                            <div class="tab-pane fade show active" >

                                <table class="table text-center">
                                    <thead>
                                    <tr>
                                        <th>@lang('Ticket Subject')</th>
                                        <th>@lang('Last Activity')</th>
                                        <th>@lang('Status')</th>
                                        <th>@lang('Priority')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($all_ticket)==0)
                                        <tr>
                                            <td colspan="5" class="text-center">@lang('No Data Available')</td>
                                        </tr>
                                    @endif
                                    @foreach($all_ticket as $data)
                                        <tr>
                                            <td>
                                                <a style="color: #56cae9" href="{{route('ticket.customer.reply', $data->ticket )}}"><b>{{$data->subject}}</b></a>
                                                <br>
                                                <small style="color: #fff" class="text-muted">@lang('Ticket ID'): {{$data->ticket}}</small>
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}<br><small style="color: #fff !important;" class="text-muted">{{ \Carbon\Carbon::parse($data->created_at)->format('F dS, Y - h:i A') }}</small></td>
                                            <td>
                                                @if($data->status == 1)
                                                    <h4> <span class="badge badge-warning"> @lang('Opened')</span></h4>
                                                @elseif($data->status == 2)
                                                    <h4> <span  class="badge badge-success">  @lang('Answered') </span></h4>
                                                @elseif($data->status == 3)
                                                    <h4><span  class="badge badge-info"> @lang('Customer Reply') </span></h4>
                                                @elseif($data->status == 9)
                                                    <h4><span  class="badge badge-danger">  @lang('Closed') </span></h4>
                                                @endif
                                            </td>
                                            <td>

                                                <a class="btn btn-success"  href="{{route('ticket.customer.reply', $data->ticket )}}"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-danger" href="{{route('ticket.close', $data->ticket)}}"><i class="fa fa-times"></i> @lang('Close Ticket')</a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$all_ticket->links()}}
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
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-12">
                        <a href="{{route('add.new.ticket')}}" class="btn btn-warning btn-block" style="color: black ;"><b>@lang('New Ticket')</b></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="transaction-content">

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="diposited-by">
                                    <div class="table-responsive transaction-table">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>@lang('Ticket Subject')</th>
                                                <th>@lang('Last Activity')</th>
                                                <th>@lang('Status')</th>
                                                <th>@lang('Priority')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($all_ticket)==0)
                                                <tr>
                                                    <td colspan="5" class="text-center">@lang('No Data Available')</td>
                                                </tr>
                                            @endif
                                            @foreach($all_ticket as $data)
                                                <tr>
                                                    <td>
                                                        <a style="color: #56cae9" href="{{route('ticket.customer.reply', $data->ticket )}}"><b>{{$data->subject}}</b></a>
                                                        <br>
                                                        <small style="color: #000000" class="text-muted">@lang('Ticket ID'): {{$data->ticket}}</small>
                                                    </td>
                                                    <td>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}<br><small style="color: #1a0000 !important;" class="text-muted">{{ \Carbon\Carbon::parse($data->created_at)->format('F dS, Y - h:i A') }}</small></td>
                                                    <td>
                                                        @if($data->status == 1)
                                                            <h4> <span class="label label-warning"> @lang('Opened')</span></h4>
                                                        @elseif($data->status == 2)
                                                            <h4> <span  class="label label-success">  @lang('Answered') </span></h4>
                                                        @elseif($data->status == 3)
                                                            <h4><span  class="label label-info"> @lang('Customer Reply') </span></h4>
                                                        @elseif($data->status == 9)
                                                            <h4><span  class="label label-danger">  @lang('Closed') </span></h4>
                                                        @endif
                                                    </td>
                                                    <td>

                                                        <a class="btn btn-success"  href="{{route('ticket.customer.reply', $data->ticket )}}"><i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-danger" href="{{route('ticket.close', $data->ticket)}}"><i class="fa fa-times"></i> @lang('Close Ticket')</a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{$all_ticket->links()}}
                                       <!-- /.table -->
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
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-12">
                        <a href="{{route('add.new.ticket')}}" class="btn btn-warning btn-block" style="color: black ;"><b>@lang('New Ticket')</b></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="transaction-content">

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="diposited-by">
                                    <div class="table-responsive transaction-table">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>@lang('Ticket Subject')</th>
                                                <th>@lang('Last Activity')</th>
                                                <th>@lang('Status')</th>
                                                <th>@lang('Priority')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($all_ticket)==0)
                                                <tr>
                                                    <td colspan="5" class="text-center">@lang('No Data Available')</td>
                                                </tr>
                                            @endif
                                            @foreach($all_ticket as $data)
                                                <tr>
                                                    <td>
                                                        <a style="color: #56cae9" href="{{route('ticket.customer.reply', $data->ticket )}}"><b>{{$data->subject}}</b></a>
                                                        <br>
                                                        <small style="color: #000000" class="text-muted">@lang('Ticket ID'): {{$data->ticket}}</small>
                                                    </td>
                                                    <td>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}<br><small style="color: #1a0000 !important;" class="text-muted">{{ \Carbon\Carbon::parse($data->created_at)->format('F dS, Y - h:i A') }}</small></td>
                                                    <td>
                                                        @if($data->status == 1)
                                                            <h4> <span class="label label-warning"> @lang('Opened')</span></h4>
                                                        @elseif($data->status == 2)
                                                            <h4> <span  class="label label-success">  @lang('Answered') </span></h4>
                                                        @elseif($data->status == 3)
                                                            <h4><span  class="label label-info"> @lang('Customer Reply') </span></h4>
                                                        @elseif($data->status == 9)
                                                            <h4><span  class="label label-danger">  @lang('Closed') </span></h4>
                                                        @endif
                                                    </td>
                                                    <td>

                                                        <a class="btn btn-success"  href="{{route('ticket.customer.reply', $data->ticket )}}"><i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-danger" href="{{route('ticket.close', $data->ticket)}}"><i class="fa fa-times"></i> @lang('Close Ticket')</a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{$all_ticket->links()}}
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
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-12">
                        <a href="{{route('add.new.ticket')}}" class="btn btn-warning btn-block" style="color: black ;"><b>@lang('New Ticket')</b></a>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="single-transaction">

                            <div class="parent-table">
                                <table class="table">
                                    <thead class="table-title" style="color: #fff">
                                    <tr>
                                        <th>@lang('Ticket Subject')</th>
                                        <th>@lang('Last Activity')</th>
                                        <th>@lang('Status')</th>
                                        <th>@lang('Priority')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($all_ticket)==0)
                                        <tr>
                                            <td colspan="5" class="text-center">@lang('No Data Available')</td>
                                        </tr>
                                    @endif
                                    @foreach($all_ticket as $data)
                                        <tr>
                                            <td>
                                                <a style="color: #56cae9" href="{{route('ticket.customer.reply', $data->ticket )}}"><b>{{$data->subject}}</b></a>
                                                <br>
                                                <small style="color: #000000" class="text-muted">@lang('Ticket ID'): {{$data->ticket}}</small>
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}<br><small style="color: #1a0000 !important;" class="text-muted">{{ \Carbon\Carbon::parse($data->created_at)->format('F dS, Y - h:i A') }}</small></td>
                                            <td>
                                                @if($data->status == 1)
                                                    <h4> <span class="badge badge-warning"> @lang('Opened')</span></h4>
                                                @elseif($data->status == 2)
                                                    <h4> <span  class="badge badge-success">  @lang('Answered') </span></h4>
                                                @elseif($data->status == 3)
                                                    <h4><span  class="badge badge-info"> @lang('Customer Reply') </span></h4>
                                                @elseif($data->status == 9)
                                                    <h4><span  class="badge badge-danger">  @lang('Closed') </span></h4>
                                                @endif
                                            </td>
                                            <td>

                                                <a class="btn btn-success"  href="{{route('ticket.customer.reply', $data->ticket )}}"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-danger" href="{{route('ticket.close', $data->ticket)}}"><i class="fa fa-times"></i> @lang('Close Ticket')</a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$all_ticket->links()}}
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
