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

@section('facebook')
    <meta property="og:title" content="La Cura - 奇跡 {{  '| '.__($pt) }}"/>
    <meta property="og:site_name" content="La Cura - 奇跡 {{  '| '.__($pt) }}"/>
    <meta property="og:description"
          content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="100"/>
@stop

@section('titulo')
    <title>La Cura - 奇跡 {{  '| '.__($pt) }}</title>
@stop

@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">


                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <h1>{{__($pt)}}</h1>

                        <div class="alert alert-warning mb-4" role="alert">
                            <button type="button" class="close float-right" data-dismiss="alert" aria-label="Close">
                                &times;
                            </button>
                            <h4 style="color: black">@lang('affiliate.Notice!')</h4>

                                <p style="color: black">@lang('affiliate.To receive commission you need to have at least 7 references.')</p>

                            <hr>
                            <p style="color: black">@lang('affiliate.You have') <b>{{ $ref_comms->count() }} @lang('affiliate.Referred Users')</b></p>

                        </div>


                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-warning mb-4" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        &times;
                                    </button>
                                    <strong>{{__($error)}}</strong>
                                </div>
                            @endforeach

                        @endif
                        <div class="table-responsive mb-4 mt-4">
                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th scope="col">@lang('affiliate.Date')</th>
                                    <th scope="col">@lang('affiliate.Referred Users')</th>
                                    <th scope="col">@lang('affiliate.Amount')</th>
                                    <th scope="col">@lang('affiliate.Status')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($ref_comms)==0)
                                    <tr>
                                        <td colspan="5" class="text-center">@lang('affiliate.No Data Available')</td>
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
                                                <span class="badge badge-primary"
                                                      style="margin-top: 25px;">@lang('affiliate.Complete')</span>
                                            @elseif($data->status == 1 && $day >= $general->affiliate_withdraw_day && $ref_comms->count() >= $general->affiliate_withdraw_person)
                                                <form action="{{ route('user.referral.com.adjust') }}" method="post"
                                                      style="padding-top: 10px;">
                                                    @csrf
                                                    <input type="hidden" name="ref_comm_id" value="{{ $data->id }}">
                                                    <button type="submit"
                                                            class="btn btn-success btn-icon">@lang('affiliate.Add to Balance')</button>
                                                </form>
                                            @else
                                                <img style="width: 30px;" src="{{ asset('assets/images/load.gif') }}">
                                                <br>
                                                <span class="badge badge-warning">@lang('affiliate.Running')</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>




    <div class="transaction">
        <div class="container">
            <div class="row">

            </div>


        </div>
    </div>
    <!-- transaction end -->


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

