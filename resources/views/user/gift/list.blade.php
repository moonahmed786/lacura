@extends('layouts.user_layout')
@section('header')
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset("plugins/table/datatable/datatables.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("plugins/table/datatable/custom_dt_html5.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("plugins/table/datatable/dt-global_style.css")}}">

    <!-- END PAGE LEVEL CUSTOM STYLES -->
@endsection
@section('content')


    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6 mb-3 ">

                        <h2>@lang('cps_dashboard.Vouchers List')</h2>

                    </div>
                    <div class="widget-content widget-content-area br-6">
                        <div class=" float-left mb-4">
                            <a type="button" id="" class="btn btn-success btn-sm btn-block col-new"
                               href="{{route('users.gift.form')}}">
                                @lang('cps_dashboard.Create Voucher')
                            </a>
                        </div>
                        <div class="table-responsive mb-4 mt-4">
                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                <tr>

                                    <th>@lang('cps_dashboard.Amount')</th>
                                    <th>@lang('cps_dashboard.Used By')</th>
{{--                                    <th>Slot ID</th>--}}
                                    <th>@lang('cps_dashboard.Voucher Code')</th>
                                    <th>@lang('cps_dashboard.Action')</th>

                                    <th>@lang('cps_dashboard.Approved At')</th>
                                    <th>@lang('cps_dashboard.Status')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($Gifts)==0)
                                    <tr>
                                        <td colspan="8" class="text-center">@lang('cps_dashboard.No Data Available')</td>
                                    </tr>
                                @endif
                                @foreach($Gifts as $gift)
                                    <tr>

                                        <td>{{$gift->amount}}</td>
                                        <td>
                                            @if(!isset($gift->used_by))

                                                @lang('cps_dashboard.No Assigned')
                                                @elseif($gift->used_by==auth()->user()->id)
                                                @lang('cps_dashboard.Self')
                                                @else
                                                {{$gift->Used_by->name}}
                                            @endif
                                        </td>
{{--                                        <td>{{$gift->slot_id}}</td>--}}
                                        <td>
                                            <div class="input-group">
                                                <span>{{$gift->gift_code}}</span>
                                                <input type="text" class="form-control small"
                                                       value="{{$gift->gift_code}}"
                                                       id="myInput{{$gift->id}}" readonly
                                                       style=" display: none;   background-color: #1a242e !important;    color: #ffffff !important;">


                                            </div>

                                        </td>
                                        <td>
                                            <div class="">
                                                {{--                                                @if($gift->status==0)--}}

                                                <div class="clipboard copy-txt">

                                                    <button class=" btn btn-sm btn-warning" href="javascript:;"
                                                            data-clipboard-action="copy"
                                                            data-clipboard-text="{{$gift->gift_code}}">                                             @lang('cps_dashboard.Copy')</button>
                                                </div>


                                                {{--                                                @endif--}}


                                            </div>
                                        </td>
                                        <td>@if(isset($gift->approved_at))
                                                {{$gift->approved_at}}
                                            @else
                                                N/A
                                            @endif

                                        </td>
                                        <td>
                                            @if($gift->status==1)
                                                <button class="btn-sm btn-success "><b> @lang('cps_dashboard.Verified') </b></button>
                                            @elseif($gift->status==2)
                                                <button class="btn btn-info " data-id="{{$gift->id}}"><b>
                                                        @lang('cps_dashboard.Need Approval')</b></button>

                                            @elseif($gift->status==3)
                                                <button class="btn btn-info " data-id="{{$gift->id}}"><b>
                                                        @lang('cps_dashboard.Awarded')</b></button>

                                            @else
                                                <button class="btn-sm btn-danger"><b> @lang('cps_dashboard.Not Assigned') </b></button>
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
    <script src="{{asset("assets/js/clipboard/clipboard.min.js")}}"></script>
    <script src="{{asset("assets/js/forms/custom-clipboard.js")}}"></script>
    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script>
        <?php if(Session::has('message')): ?>


        $(document).ready(function () {
            swal("<?php echo e(__(Session::get('message'))); ?>", "", "<?php echo e(__(Session::get('type'))); ?>");
        });

        <?php endif; ?>
        $(document).on('click', '.copygift', function () {
            var code = $(this).data('code');
            var range = document.createRange();
            range.selectNode(document.getElementById(code));
            window.getSelection().removeAllRanges(); // clear current selection
            window.getSelection().addRange(range); // to select text
            document.execCommand("copy");
            window.getSelection().removeAllRanges();// to deselect
        });
        $('.copygift').on('click', function () {
            var code = $(this).data('code');
            var range = document.createRange();
            range.selectNode(this);
            window.getSelection().removeAllRanges(); // clear current selection
            window.getSelection().addRange(range); // to select text
            document.execCommand("copy");
            window.getSelection().removeAllRanges();// to deselect
            // console.log(code.execCommand("copy"));

            // var copyText = document.getElementById("register_url");


            alert("Link is copied ");
        });

        function myFunction2(data) {
            if (data == null) {
                data = '';
            }
            var id = "myInput" + data;
            var copyText = document.getElementById(id);
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
            alert("Link is copied ");
        }

        var code = 0;


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
