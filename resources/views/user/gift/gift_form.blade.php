@extends('layouts.user_layout')
@section('header')
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
{{--    <link rel="stylesheet" type="text/css" href="{{asset("plugins/table/datatable/datatables.css")}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset("plugins/table/datatable/custom_dt_html5.css")}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset("plugins/table/datatable/dt-global_style.css")}}">--}}

    <!-- END PAGE LEVEL CUSTOM STYLES -->
@endsection
@section('content')


    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6 mb-3 ">

                        <h2>@lang('cps_dashboard.Create Voucher Code')</h2>

                    </div>


                    <div class="widget-content widget-content-area br-6">
                        <div class="col-md-2 float-right ">
                            <a href="{{route('users.gift.list')}}" class="btn btn-warning btn-block" style="color: black ;"><b>@lang('cps_dashboard.Vouchers List')</b></a>
                        </div>
                        @if (count($errors) > 0)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong class="col-md-12"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alert!</strong>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="row ">
                            <!-- left column -->
                            <div class="col-md-6 justify-content-center m-auto">
                                <div class="card card-primary">
                                    <div class="card-header">
{{--                                        <h7 class="card-title">@lang('Change the Numbers of Slot for this Voucher from (+) and (-) Buttons and Copy Voucher Code')--}}
{{--                                        </h7>--}}
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form method="POST" action="{{ route('user.gift.store') }}"
                                          enctype="multipart/form-data" id="gift_form">
                                        @csrf
                                        <div class="card-body">


                                            <div class="form-group ">
                                                <label for="basic-url">@lang('cps_dashboard.Your Account Balance') :</label>


                                                <input id="com_balance" type="text"
                                                       value="{{auth()->user()->balance}}"
                                                       name=""
                                                       class="form-control" readonly>
                                                <span class="input-group-btn input-group-append"></span>

                                            </div>
                                            <div class=" form-group">
{{--                                                <label for="basic-url" class="pl-2">@lang('Enter CPS Number You Want to Buy!')</label>--}}
                                                <div class="qty text-center ">
{{--                                                    <span class="btn btn-warning minus">-</span>--}}
                                                    <input type="hidden" class="count" name="cps_qty" id="cps_qty"
                                                           value="1" readonly>
{{--                                                    <span class="btn btn-success plus">+</span>--}}
                                                </div>


                                            </div>
                                            <div class="form-group ">
                                                <label for="basic-url">@lang('cps_dashboard.Total Amount') :</label>


                                                <input id="total" type="text" value="150" name="total"
                                                       class="form-control">
                                                <span class="input-group-btn input-group-append"></span>

                                            </div>



                                            <p >@lang('cps_dashboard.Voucher Code'):</p>

                                            <div class=" form-group input-group mb-4">
                                                <input id="gift_code" type="text" value="{{$code}}" name="gift_code"
                                                       class="form-control" readonly>

                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button" data-clipboard-action="copy" data-clipboard-target="#gift_code">@lang('cps_dashboard.Copy')</button>
                                                </div>
                                            </div>








                                        </div>
                                        <!-- /.card-body -->


                                        <div class="card-footer"><br>

                                            <button type="button" id="submit_btn" class="btn btn-success float-right"
                                            >@lang('Submit')
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>




@endsection
@section('script')
    <script src="{{asset("assets/js/clipboard/clipboard.min.js")}}"></script>
    <script src="{{asset("assets/js/forms/custom-clipboard.js")}}"></script>

    <script>

        <?php if(Session::has('message')): ?>


            $(document).ready(function () {
                swal("<?php echo e(__(Session::get('message'))); ?>","", "<?php echo e(__(Session::get('type'))); ?>");






            });


    <?php endif; ?>

    $('#submit_btn').one('click',function () {
        console.log('d');
        $('#gift_form').submit();
    });
        $(document).on('click', '.plus', function () {
            var commission = {{auth()->user()->balance}};
            if (commission>=150)
            {
                $('.count').val(parseInt($('.count').val()) + 1);
                $('#total').val(parseInt($('#total').val()) + 150);
            }
        });
        $(document).on('click', '.minus', function () {
            $('.count').val(parseInt($('.count').val()) - 1);
            $('#total').val(parseInt($('#total').val()) - 150);

            if ($('.count').val() == 0) {
                $('.count').val(1);
                $('#total').val(150);
            }
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




    </script>
@endsection
