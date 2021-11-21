@extends('admin.layout.master')
@section('css')
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/table/datatable/datatables.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/table/datatable/custom_dt_html5.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/table/datatable/dt-global_style.css")}}">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
@endsection
@section('body')


    <div id="content" class="main-content">
        <div class="layout-px-spacing">


            <div class="row mt-2 ">


                <div class="col-xl-12 col-lg-12 col-sm-12 layout-top-spacing  layout-spacing">


                    <div class="widget-content widget-content-area br-6 ">
                        <div class=" float-left mb-4">
                            <button type="button" id="create_gift" class="btn btn-success btn-sm btn-block col-new">
                                Create Voucher
                            </button>
                        </div>


                        <div class="table-responsive  ">
                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                <tr>

                                    <th>Amount {{$general->currency_sym}}</th>
                                    <th>Used By</th>

                                    <th>Slot Id</th>
                                    <th>Voucher Code</th>

{{--                                    <th>Coin Type</th>--}}
                                    <th>Approved At</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Gifts as $gift)
                                    <tr>

                                        <td>{{$gift->amount}}</td>
                                        <td>{{$gift->used_by}}</td>
                                        <td>{{$gift->slot_id}}</td>
                                        <td>


                                            <div class=" form-group input-group ">
                                                <input id="inputid{{$gift->id}}" type="text" value="{{$gift->gift_code}}" name="gift_code"
                                                       class="form-control" readonly>

                                                <div class="input-group-append">
                                                    <button class=" btn btn-xs btn-warning" href="javascript:;"
                                                            data-clipboard-action="copy"
                                                            data-clipboard-text="{{$gift->gift_code}}">                                             @lang('Copy')</button>
                                                </div>
                                            </div>

                                        </td>

{{--                                        <td>{{$gift->coin_type}}</td>--}}
                                        <td>{{$gift->approved_at}}</td>
                                        <td>
                                            @if($gift->status==1)
                                                <button class="btn-sm btn-success "><b> Verified </b></button>
                                            @elseif($gift->status==2)
                                                <button class="btn btn-info " data-id="{{$gift->id}}"><b>
                                                        Need Approval</b></button>

                                            @elseif($gift->status==3)
                                                <button class="btn btn-info " data-id="{{$gift->id}}"><b>
                                                        Awarded</b></button>

                                            @else
                                                <button class="btn-sm btn-danger"><b> Not Assigned </b></button>
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

    <!-- Modal -->
    <div class="modal fade" id="modal_gift_code" tabindex="-1" role="dialog" aria-labelledby="tabsModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Voucher</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">

{{--                    <div class=" ">--}}
{{--                        <label for="basic-url" class="pl-2">Enter CPS Number for You Want to Create Voucher!</label>--}}
{{--                        <div class="qty ">--}}
{{--                            <span class="btn btn-warning minus">-</span>--}}
                            <input type="hidden" class="count" name="cps_qty" id="cps_qty" value="1" readonly>
{{--                            <span class="btn btn-success plus">+</span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
                    <div class="mb-4  ">
                        <label for="basic-url">Total Amount :</label>
                        <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected ">

                            <input id="total" type="text" value="150" name="total" class="form-control" readonly>
                            <span class="input-group-btn input-group-append"></span>
                        </div>
                    </div>
                    <div class=" ">
                        <label for="basic-url" class=" ">Voucher Code :</label>

                        <input id="gift_code_model" type="text" value="" name="gift_code" class="form-control">
                        <span class="input-group-btn input-group-append"></span>
                        <button class="btn btn-primary" type="button" data-clipboard-action="copy" data-clipboard-target="#gift_code_model">Copy</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="add_gc_submit">Confirm</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{asset("assets/js/clipboard/clipboard.min.js")}}"></script>
    <script src="{{asset("assets/js/forms/custom-clipboard.js")}}"></script>
    <script>
        $(document).ready(function () {

            $(document).on('click', '.plus', function () {
                $('.count').val(parseInt($('.count').val()) + 1);
                $('#total').val(parseInt($('#total').val()) + 150);
            });
            $(document).on('click', '.minus', function () {
                $('.count').val(parseInt($('.count').val()) - 1);
                $('#total').val(parseInt($('#total').val()) - 150);

                if ($('.count').val() == 0) {
                    $('.count').val(1);
                    $('#total').val(150);
                }
            });


            var code = 0;
            console.log('ok');
            $('#create_gift').on('click', function () {
                var url = '<?= route('admin.get.gift.code')?>';

                data = {"_token": "{{ csrf_token() }}"};


                $.ajax({
                        type: "get",
                        url: url,
                        data: data,
                        success: function (response) {
                            $('#gift_code_model').val(response.code)
                        }
                    }
                );
                $('#modal_gift_code').modal('show');


                $('#add_gc_submit').click(function () {


                    var url = '<?= route('admin.gift.store')?>';

                    data = {
                        "_token": "{{ csrf_token() }}",
                        count: $('.count').val(),
                        gift_code: $('#gift_code_model').val()
                    };
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: data,
                        success: function (response) {
                            if (response.message) {
                                $('#modal_gift_code').modal('hide');

                                swal("Voucher Created Successfully", "Successfully !!", "success");
                                $('.swal-button--confirm').on('click', function () {
                                    window.location.reload();
                                });


                            }


                        },
                        error: function () {

                        }
                    });


                });

                $('.cancel').click(function () {

                });


            });

            // console.log('changed');





            $('#html5-extension').DataTable({
                dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
                buttons: {
                    buttons: [
                        {extend: 'copy', className: 'btn'},
                        {extend: 'csv', className: 'btn'},
                        {extend: 'excel', className: 'btn'},
                        {extend: 'print', className: 'btn'}
                    ]
                },
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                    },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 7
            });
        });
    </script>
@endsection
