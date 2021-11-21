@extends('layouts.user_layout')
@section('header')
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/table/datatable/datatables.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/table/datatable/custom_dt_html5.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/table/datatable/dt-global_style.css")}}">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
@endsection
@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6 mb-3 ">

                        <h2>@lang('cps_dashboard.Withdraw List')</h2>

                    </div>
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>@lang('cps_dashboard.Slot Number')</th>
                                    <th> @lang('cps_dashboard.Amount')</th>
                                    <th>@lang('cps_dashboard.Type')</th>
                                    <th>@lang('cps_dashboard.Approved Time')</th>
                                    <th> @lang('cps_dashboard.Status')</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if(count($Withdraws)==0)
                                    <tr>
                                        <td colspan="8" class="text-center">@lang('cps_dashboard.No Data Available')</td>
                                    </tr>
                                @endif
                                @foreach($Withdraws as $withd)
                                    <tr>
                                        <td>@if(isset($withd->slot_id))
                                                {{$withd->slot_id}}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{$withd->amount}}</td>
                                        <td>{{$withd->coin_type}}</td>

                                        <td>@if(isset($withd->withdraw_approved_time))
                                                {{$withd->withdraw_approved_time}}
                                            @else
                                                N/A
                                            @endif
                                            </td>
                                        <td>
                                            @if($withd->withdraw_status==1)
                                                <button class="btn btn-success mb-2 btn-sm">@lang('cps_dashboard.Processed')</button>
                                            @else
                                                <button class="btn btn-warning mb-2 btn-sm ">@lang('cps_dashboard.Pending')</button>
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
                    {extend: 'csv', className: 'btn', text: '{{__('CSV')}}'},
                    {extend: 'excel', className: 'btn', text: '{{__('Excel')}}'},
                    {extend: 'print', className: 'btn', text: '{{__('Print')}}'}
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
