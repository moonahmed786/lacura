@extends('layouts.user_layout')

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
@section('header')
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/table/datatable/datatables.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/table/datatable/custom_dt_html5.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/table/datatable/dt-global_style.css")}}">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
@endsection
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

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">


                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <h1 >{{__($pt)}}</h1>
                        <div class="col-md-2 float-right mb-3">
                        <a href="{{route('add.new.ticket')}}" class="btn btn-warning btn-block" style="color: black ;"><b>@lang('support_tickets.New Ticket')</b></a>
                        </div>
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <div class="table-responsive mb-4 mt-4">
                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>@lang('support_tickets.Ticket Subject')</th>
                                    <th>@lang('support_tickets.Last Activity')</th>
                                    <th>@lang('support_tickets.Status')</th>
                                    <th>@lang('support_tickets.Priority')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($all_ticket)==0)
                                    <tr>
                                        <td colspan="5" class="text-center">@lang('support_tickets.No Data Available')</td>
                                    </tr>
                                @endif

                                @foreach($all_ticket as $data)
                                    <tr>
                                        <td>
                                            <a style="color: #56cae9" href="{{route('ticket.customer.reply', $data->ticket )}}"><b>{{$data->subject}}</b></a>
                                            <br>
                                            <small style="color: #fff" class="text-muted">@lang('support_tickets.Ticket ID'): {{$data->ticket}}</small>
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}<br><small style="color: #fff !important;" class="text-muted">{{ \Carbon\Carbon::parse($data->created_at)->format('F dS, Y - h:i A') }}</small></td>
                                        <td>
                                            @if($data->status == 1)
                                                <h4> <span class="badge badge-warning"> @lang('support_tickets.Opened')</span></h4>
                                            @elseif($data->status == 2)
                                                <h4> <span  class="badge badge-success">  @lang('support_tickets.Answered') </span></h4>
                                            @elseif($data->status == 3)
                                                <h4><span  class="badge badge-info"> @lang('support_tickets.Customer Reply') </span></h4>
                                            @elseif($data->status == 9)
                                                <h4><span  class="badge badge-danger">  @lang('support_tickets.Closed') </span></h4>
                                            @endif
                                        </td>
                                        <td>

                                            <a class="btn btn-success"  href="{{route('ticket.customer.reply', $data->ticket )}}"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-danger" href="{{route('ticket.close', $data->ticket)}}"><i class="fa fa-times"></i> @lang('support_tickets.Close Ticket')</a>

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
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 <a target="_blank" href="http://lacura.me/">Lacura</a>, All
                    rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-heart">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </p>
            </div>
        </div>
    </div>


    @if(activeTemp()  == 1)
        <div class="page-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6">
                        <h2 class="extra-margin"></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="transaction">
            <div class="container">

                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-12">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="transaction-area">

                            <div class="tab-content" >
                                <div class="tab-pane fade show active" >


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
    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{asset("assets/plugins/table/datatable/datatables.js")}}"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="{{asset("assets/plugins/table/datatable/button-ext/dataTables.buttons.min.js")}}"></script>
    <script src="{{asset("assets/plugins/table/datatable/button-ext/jszip.min.js")}}"></script>
    <script src="{{asset("assets/plugins/table/datatable/button-ext/buttons.html5.min.js")}}"></script>
    <script src="{{asset("assets/plugins/table/datatable/button-ext/buttons.print.min.js")}}"></script>
    <script>
        $('#html5-extension').DataTable({
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    {extend: 'copy', className: 'btn', text: '{{__('Copy')}}'},
                    {extend: 'csv', className: 'btn' ,text: '{{__('CSV')}}'},
                    {extend: 'excel', className: 'btn',text: '{{__('Excel')}}'},
                    {extend: 'print', className: 'btn',text: '{{__('Print')}}'}
                ]
            },
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "{{__('Showing page')}} _PAGE_ {{__('of')}} _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "{{__('Search')}}...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });
    </script>
@endsection

