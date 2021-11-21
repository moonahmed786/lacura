@extends('admin.layout.master')

@section('css')
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/table/datatable/datatables.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/table/datatable/custom_dt_html5.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/table/datatable/dt-global_style.css")}}">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
    <!-- END PAGE LEVEL CUSTOM STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('assets/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/widgets/modules-widgets.css')}}">
    <style>
        /*
            The below code is for DEMO purpose --- Use it if you are using this demo otherwise Remove it
        */
        .layout-px-spacing {
            min-height: calc(100vh - 184px) !important;
        }

        .disp {
            display: flex;
        }
        progress .progress-bar.bg-gradient-secondary {
            background-color: #1b55e2;
            background-image: linear-gradient(to right, #7579ff 0%, #b224ef 100%);
        }
    </style>

@endsection
@section('body')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row " id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <!--  BEGIN CONTENT AREA  -->
                    <div class="disp">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 layout-spacing mt-5">
                            <div class="widget widget-card-four">
                                <div class="widget-content">
                                    <div class="w-content">
                                        <div class="w-info">
                                            <h6 class="value">{{$total_slots}}</h6>
                                            <p class="">Active Slots</p>
                                        </div>
                                        <div class="">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-home">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-gradient-secondary" role="progressbar"
                                             style="width: 57%" aria-valuenow="57" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 layout-spacing mt-5">
                            <div class="widget widget-card-four">
                                <div class="widget-content">
                                    <div class="w-content">
                                        <div class="w-info">
                                            <h6 class="value">{{$general->currency_sym}} {{$deposit_total}}</h6>
                                            <p class="">Investments</p>
                                        </div>
                                        <div class="">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-home">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-gradient-secondary" role="progressbar"
                                             style="width: 57%" aria-valuenow="57" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 layout-spacing mt-5">
                            <div class="widget widget-card-four">
                                <div class="widget-content">
                                    <div class="w-content">
                                        <div class="w-info">
                                            <h6 class="value">{{$withdraw_pending}}</h6>
                                            <p class="">Pendings</p>
                                        </div>
                                        <div class="">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-home">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-gradient-secondary" role="progressbar"
                                             style="width: 57%" aria-valuenow="57" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 layout-spacing mt-5">
                            <div class="widget widget-card-four">
                                <div class="widget-content">
                                    <div class="w-content">
                                        <div class="w-info">
                                            <h6 class="value">{{$general->currency_sym}} {{$withdraw_total}}</h6>
                                            <p class="">Approved</p>
                                        </div>
                                        <div class="">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-home">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-gradient-secondary" role="progressbar"
                                             style="width: 57%" aria-valuenow="57" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  END CONTENT AREA  -->
                </div>
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                    <div class="widget-content widget-content-area br-6">

{{--                        <h2>Withdraw Requests</h2>--}}

                        <div class="table-responsive mb-4 mt-4">
                            <table id="html5-extension" class="table  " style="width:100%">
                                <thead>
                                <tr>
                                    <th>Slot Number</th>
                                    <th>Amount {{$general->currency_sym}}</th>
                                    <th>Type</th>
                                    <th>Approved Time</th>
                                    <th>BTC Address</th>
                                    <th>Stripe Email Address</th>
                                    <th>Status</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Withdraws as $withd)
                                    <tr>
                                        <td>{{$withd->slot_id}}</td>
                                        <td>{{$withd->amount}}</td>
                                        <td>{{$withd->coin_type}}</td>

                                        <td>{{$withd->withdraw_approved_time}}</td>
                                        <td>{{$withd->user->btc_address}}</td>
                                        <td>{{$withd->user->stripe_email}}</td>
                                        <td>
                                            @if($withd->withdraw_status==1)
                                                <button class="btn btn-success btn-sm"><b> Processed </b></button>
                                            @elseif($withd->withdraw_status==0)
                                                <button class="btn btn-danger btn-sm draw" data-id="{{$withd->id}}"
                                                        data-u-id="{{$withd->user_id}}"><b> pending </b></button>

                                            @else
                                                <button class="btn btn-danger btn-sm  "><b> Not Approved </b></button>
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



    <!--  BEGIN TOPBAR  -->

    <!--  END TOPBAR  -->







    <!-- Main content -->


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
        console.log(1);
        $('#html5-extension').one('click', '.draw', function (){
            var id = $(this).data('id');
            var user_id = $(this).data('u-id');




            swal({
                title: "Are you sure you want to Approved ?",
                text: "",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, Processed !!",
                cancelButtonText: "No, cancel it !!",
                closeOnConfirm: false,
                closeOnCancel: false
            });

            $('.swal-button--confirm').on('click',function (){
                var url = '<?= route('admin.withdraw.ajax')?>';
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {"_token": "{{ csrf_token() }}", id: id,withdrawStatus: 1,user_id:user_id},
                    success: function (response) {
                        if (response.success) {
                            swal("Hey !!", "You Gave Withdraw amount Successfully " , "success");
                            $('.swal-button--confirm').on('click', function () {
                                window.location.reload();
                            });

                        } else {
                            if (response.error == 409) {

                                swal("Cancelled !!", "Hey, your Approval is denied !!", "error");

                            }
                            if (response.error == 401) {

                                swal("Cancelled !!", "This Amount is alreayd Withdraw", "error");

                            }
                            else {
                                alert("Status can't be change.")
                            }
                        }
                    },
                    error: function () {
                        alert('Error occured');
                    }
                });

            });



        });
    </script>

@endsection
