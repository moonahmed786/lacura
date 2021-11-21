@extends('layouts.user_layout')

@section('content')
    <style>
        @import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800);

        .pricing1 {
            font-family: "Montserrat", sans-serif;
            color: #8d97ad;
            font-weight: 300;
        }

        .pricing1 h1,
        .pricing1 h2,
        .pricing1 h3,
        .pricing1 h4,
        .pricing1 h5,
        .pricing1 h6 {
            color: #3e4555;
        }

        .pricing1 .font-weight-medium {
            font-weight: 500;
        }

        .pricing1 .bg-light {
            background-color: #f4f8fa !important;
        }

        .pricing1 .subtitle {
            color: #8d97ad;
            line-height: 24px;
            font-size: 14px;
        }

        .pricing1 .font-14 {
            font-size: 14px;
        }

        .pricing1 h5 {
            line-height: 22px;
            font-size: 18px;
        }

        .pricing1 .card.card-shadow {
            -webkit-box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
            box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
        }

        .pricing1 .on-hover {
            -webkit-transition: 0.1s;
            -o-transition: 0.1s;
            transition: 0.1s;
        }

        .pricing1 .on-hover:hover {
            -ms-transform: scale(1.05);
            transform: scale(1.05);
            -webkit-transform: scale(1.05);
            -webkit-font-smoothing: antialiased;
        }

        .pricing1 .btn-success-gradiant {
            background: #2cdd9b;
            background: -webkit-linear-gradient(legacy-direction(to right), #2cdd9b 0%, #1dc8cc 100%);
            background: -webkit-gradient(linear, left top, right top, from(#2cdd9b), to(#1dc8cc));
            background: -webkit-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
            background: -o-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
            background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);
        }

        .pricing1 .btn-success-gradiant:hover {
            background: #1dc8cc;
            background: -webkit-linear-gradient(legacy-direction(to right), #1dc8cc 0%, #2cdd9b 100%);
            background: -webkit-gradient(linear, left top, right top, from(#1dc8cc), to(#2cdd9b));
            background: -webkit-linear-gradient(left, #1dc8cc 0%, #2cdd9b 100%);
            background: -o-linear-gradient(left, #1dc8cc 0%, #2cdd9b 100%);
            background: linear-gradient(to right, #1dc8cc 0%, #2cdd9b 100%);
        }

        .pricing1 .btn-danger-gradiant {
            background: #ff4d7e;
            background: -webkit-linear-gradient(legacy-direction(to right), #ff4d7e 0%, #ff6a5b 100%);
            background: -webkit-gradient(linear, left top, right top, from(#ff4d7e), to(#ff6a5b));
            background: -webkit-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
            background: -o-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
            background: linear-gradient(to right, #ff4d7e 0%, #ff6a5b 100%);
        }

        .pricing1 .btn-danger-gradiant:hover {
            background: #ff6a5b;
            background: -webkit-linear-gradient(legacy-direction(to right), #ff6a5b 0%, #ff4d7e 100%);
            background: -webkit-gradient(linear, left top, right top, from(#ff6a5b), to(#ff4d7e));
            background: -webkit-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
            background: -o-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
            background: linear-gradient(to right, #ff6a5b 0%, #ff4d7e 100%);
        }

        .pricing1 .btn-md {
            padding: 15px 30px;
            font-size: 16px;
        }

        .pricing1 .onoffswitch {
            width: 70px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            margin: 0 auto;
        }

        .pricing1 .onoffswitch-label {
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: 20px;
        }

        .pricing1 .onoffswitch-inner {
            width: 200%;
            margin-left: -100%;
            -webkit-transition: margin 0.3s ease-in 0s;
            -o-transition: margin 0.3s ease-in 0s;
            transition: margin 0.3s ease-in 0s;
        }

        .pricing1 .onoffswitch-inner::before,
        .pricing1 .onoffswitch-inner::after {
            display: block;
            float: left;
            width: 50%;
            height: 30px;
            padding: 0;
            line-height: 30px;
            font-size: 14px;
            color: white;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .pricing1 .onoffswitch-inner::before {
            content: "";
            padding-right: 27px;
            background-color: #2cdd9b;
            color: #FFFFFF;
        }

        .pricing1 .onoffswitch-inner::after {
            content: "";
            padding-right: 24px;
            background-color: #3e4555;
            color: #999999;
            text-align: right;
        }

        .pricing1 .onoffswitch-switch {
            width: 23px;
            margin: 6px;
            height: 23px;
            top: -1px;
            bottom: 0;
            right: 35px;
            border-radius: 20px;
            -webkit-transition: all 0.3s ease-in 0s;
            -o-transition: all 0.3s ease-in 0s;
            transition: all 0.3s ease-in 0s;
        }

        .pricing1 .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
            margin-left: 0;
        }

        .pricing1 .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
            right: 0px;
        }

        .pricing1 .price-badge {
            top: -13px;
            left: 0;
            right: 0;
            width: 100px;
            margin: 0 auto;
        }

        .pricing1 .badge-inverse {
            background-color: #3e4555;
        }

        .pricing1 .display-5 {
            font-size: 3rem;
            color: #263238;
        }

        .pricing1 .pricing sup {
            font-size: 18px;
            top: -20px;
        }

        .pricing1 .pricing .yearly {
            display: none;
        }

    </style>

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                    <div class="widget-content widget-content-area br-6 mb-3 ">

                        <h2>@lang('cps_dashboard.Buy Package')</h2>
                        <p class="text-warning">@lang('cps_dashboard.Package will amount will deduct from your Balance. to buy the slot you need to subscribe a package. After subscribing you are allowed to buy slots as per your packages rules.')</p>

                    </div>
                    <div class="widget-content  br-6">
                        <section class="content">
                            <div id="success_message" class="alert alert-success " style="display: none">
                                <p></p>
                            </div>
                            <!-- Default box -->
                            <div class="pricing1 ">
                                <div class="container">


                                </div>
                                <!-- Row  -->
                                <div class="row mt-5">
                                    <!-- Column -->
                                    @foreach($packages as $pak)
                                        <div class="col-lg-3 col-md-6">
                                            <div class="card text-center card-shadow on-hover border-0 mb-4">
                                                <div class="card-body font-14">
                                                    <input type="hidden" class="">
                                                    <h5 class="mt-3 mb-1 font-weight-medium">
                                                        @if(session('lang') == 'pt-br')
                                                            <p> {!! $pak->title_pt_br !!}</p>
                                                        @else
                                                            <p> {!! $pak->title_ja !!}</p>

                                                        @endif
                                                    </h5>
                                                    {{--                                        <h6 class="subtitle font-weight-normal">For Team of 3-5 Members</h6>--}}
                                                    <div class="pricing my-3">
                                                        <sup>{{$gn_setting->currency_sym}}</sup>
                                                        <span class="monthly display-5">{{$pak->amount}}</span>
                                                        {{--                                                        <span class="yearly display-5">240</span>--}}
                                                        {{--                                    <small class="monthly">/{{$pak->validate_upto}}</small>--}}
                                                        {{--                                            <small class="yearly">/yr</small>--}}
                                                        {{--                                            <span class="d-block">Daily Ads: &nbsp;&nbsp; <span class="font-weight-medium"> {{$pak->daily_ads}} </span></div>--}}
                                                        <ul class="list-inline">
                                                            <li class="d-block py-2">@lang('cps_dashboard.Allowed Slots')
                                                                : &nbsp;&nbsp; <span
                                                                    class="font-weight-medium"> {{$pak->allowed_slots}}</span>
                                                                {{--                                                                <small class="monthly"></small>--}}
                                                            </li>
                                                            <li class="d-block py-2">@lang('cps_dashboard.Slot Active life')
                                                                : &nbsp;&nbsp; <span
                                                                    class="font-weight-medium"> {{$pak->valid_for_days}} </span>
                                                                <small
                                                                    class="monthly">/@lang('cps_dashboard.Days')</small>


                                                            </li>
                                                            <li class="d-block py-2">@lang('cps_dashboard.Allowed Withdraw After')
                                                                : &nbsp;&nbsp; <span
                                                                    class="font-weight-medium"> {{$pak->withdraw_time}} </span>
                                                                <small
                                                                    class="monthly">/@lang('cps_dashboard.Days')</small>

                                                            </li>
                                                            {{--                                                            <li class="d-block py-2">@lang('cps_dashboard.Allowed Withdraws'):&nbsp; &nbsp; <span--}}
                                                            {{--                                                                    class="font-weight-medium"> {{$pak->allowed_withdraws_per_day}} </span>--}}
                                                            {{--                                                                <small class="monthly">/@lang('cps_dashboard.Per Day')</small>--}}

                                                            {{--                                                            </li>--}}

                                                            {{--                                            <li class="d-block py-2">&nbsp;</li>--}}
                                                            <li class="d-block py-2">&nbsp;</li>
                                                        </ul>
                                                        <div class="bottom-btn">
                                                            <a class="btn btn-success-gradiant  btn-md text-white btn-block"
                                                               href="#subModuel{{$pak->id}}" data-toggle="modal"
                                                            ><span>@lang('cps_dashboard.Subscribe Now')</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- MODAL add -->
                                        <div class="modal fade" id="subModuel{{$pak->id}}" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    @if(auth()->user()->balance - $pak->amount >= 0 )
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="exampleModalLabel">@lang('cps_dashboard.Subscribe Now')</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post"
                                                                  action="{{route('user.subscribe_package')}}">

                                                                @csrf
                                                                <input type="hidden" name="package_id" id="package_id"
                                                                       class="form-control" value="{{$pak->id}}">
                                                                <input type="hidden" name="user_id" id="user_id"
                                                                       class="form-control"
                                                                       value="{{auth()->user()->id}}">
                                                                <div class="form-group row">
                                                                    <label
                                                                        class="col-md-2 col-form-label">@lang('cps_dashboard.Your Account Balance')</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" name="balance" id="balance"
                                                                               value="{{auth()->user()->balance}} {{ $gn_setting->currency_sym}} "
                                                                               class="form-control @error('balance') is-invalid   @enderror"
                                                                               readonly>
                                                                        <span style="display: none" id="phone_error"
                                                                              class="text-danger"></span>

                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label
                                                                        class="col-md-2 col-form-label">@lang('cps_dashboard.Total Amount to Pay')</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" name="amount" id="amount"
                                                                               class="form-control @error('amount') is-invalid   @enderror"
                                                                               value="{{$pak->amount }} {{ $gn_setting->currency_sym}}" readonly>
                                                                        <span style="display: none" id="phone_error"
                                                                              class="text-danger"></span>

                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label
                                                                        class="col-md-2 col-form-label">@lang('cps_dashboard.After Subscription Your Balance will be')</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" name="after_amount"
                                                                               id="after_amount"
                                                                               class="form-control @error('after_amount') is-invalid   @enderror"
                                                                               value="{{auth()->user()->balance - $pak->amount }} {{ $gn_setting->currency_sym}}"
                                                                               readonly>
                                                                        <span style="display: none" id="phone_error"
                                                                              class="text-danger"></span>

                                                                    </div>
                                                                </div>
                                                                {{--                        <div class="form-group row">--}}
                                                                {{--                            <label class="col-md-2 col-form-label">Payment Method</label>--}}
                                                                {{--                            <div class="col-md-10">--}}
                                                                {{--                                <select name="payment_method" id="payment_method"--}}
                                                                {{--                                        class=" form-control @error('payment_method') is-invalid   @enderror">--}}
                                                                {{--                                    <option value=""></option>--}}
                                                                {{--                                    <option value="jazz Cash">Jazz Cash</option>--}}
                                                                {{--                                    <option value="Easy paisa">Easypaisa</option>--}}
                                                                {{--                                    <option value="Bank Account">Bank Account</option>--}}
                                                                {{--                                </select>--}}
                                                                {{--                                <span style="display: none" id="payment_type_error" class="text-danger"></span>--}}


                                                                {{--                            </div>--}}
                                                                {{--                        </div>--}}
                                                                {{--                        <div class="form-group row">--}}

                                                                {{--                            <label class="col-md-2 col-form-label">Transaction ID</label>--}}

                                                                {{--                            <div class="col-md-10">--}}
                                                                {{--                                <input type="text" name="transaction_id" id="transaction_id"--}}
                                                                {{--                                       class="form-control @error('transaction_id') is-valid @enderror"--}}
                                                                {{--                                       placeholder="Transaction ID of Your Payment" required>--}}
                                                                {{--                                <span style="display: none" id="transaction_id_error" class="text-danger"></span>--}}


                                                                {{--                            </div>--}}
                                                                {{--                        </div>--}}
                                                                {{--                        <div class="form-group row">--}}

                                                                {{--                            <label class="col-md-2 col-form-label">Account Holder Name</label>--}}

                                                                {{--                            <div class="col-md-10">--}}
                                                                {{--                                <input type="text" name="account_holder_name" id="account_holder_name"--}}
                                                                {{--                                       class="form-control"--}}
                                                                {{--                                       placeholder="Account Holder Name of Your Payment Account" required>--}}

                                                                {{--                                <span style="display: none" id="account_holder_name_error" class="text-danger"></span>--}}


                                                                {{--                            </div>--}}
                                                                {{--                        </div>--}}
                                                                {{--                        <div class="form-group row">--}}

                                                                {{--                            <label class="col-md-2 col-form-label">Description Note</label>--}}

                                                                {{--                            <div class="col-md-10">--}}
                                                                {{--                                <textarea type="" name="description" id="description"--}}
                                                                {{--                                          class="form-control "--}}
                                                                {{--                                          placeholder="Account Holder Name of Your Payment Account"></textarea>--}}


                                                                {{--                            </div>--}}
                                                                {{--                        </div>--}}


                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">@lang('cps_dashboard.Close')</button>
                                                                    <button type="submit" id="btn_update"
                                                                            class="btn btn-info">@lang('cps_dashboard.Confirm')</button>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    @else
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="exampleModalLabel">@lang('cps_dashboard.Subscribe Now')</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <P class="alert alert-warning ">@lang('cps_dashboard.Your account have insufficient Balance Please Deposit Money from Deposits section To subscribe this Package.')</P>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">@lang('cps_dashboard.Confirm')</button>

                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!--END MODAL EDIT-->
                                    @endforeach
                                </div>
                            </div>

                        </section>

                    </div>
                </div>

            </div>

        </div>

    </div>



    <div class="modal fade" id="not_allowed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel">Multiples Requests are Not Allow</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <P class="alert alert-warning ">Note : You can send only one request at a time
                        A Deposit Request is already pending. Please Wait for Admin Response! </P>
                </div>


                <div class="modal-footer">
                    <button type="button" id="btn_update" data-dismiss="modal" class="btn btn-info">Ok</button>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('script')



    <script>
        $('.subscribe').on('click', function () {
            /*  if (Number({{$is_allowed}}) == 0) {
                $('#not_allowed').modal('show');

            } else {
                var pak_id = $(this).data('pak_id');
                var amount = $(this).data('amount');
                var after_amount = $(this).data('after_amount');
                 var user_balance = {{ auth()->user()->balance}}
            // $('[name="package_id"]').val(pak_id);
            console.log(pak_id);
            $('[name="package_id"]').val(pak_id);
            $('[name="amount"]').val(amount);
            $('[name="after_amount"]').val(user_balance - after_amount);

            $('#subscribe_model').modal('show');
        }
        */

            {{--$.ajax({--}}
            {{--    type: "GET",--}}
            {{--    --}}{{--                    url: "{{route('Packages.show','pak_id')}}",--}}
            {{--    url: 'Packages/' + pak_id,--}}
            {{--    dataType: "JSON",--}}
            {{--    data: {pak_id: pak_id},--}}
            {{--    success: function (data) {--}}
            {{--        $('[name="edit_title"]').val('');--}}
            {{--        $('[name="edit_validate_upto"]').val('');--}}
            {{--        $('[name="edit_amount"]').val('');--}}
            {{--        $('[name="edit_per_ad"]').val('');--}}
            {{--        $('[name="edit_referral_bonus_amount"]').val('');--}}
            {{--        $('[name="edit_daily_ads"]').val('');--}}
            {{--        $('[name="up_package_id"]').val('');--}}


            {{--        $('[name="edit_title"]').val(data.title);--}}
            {{--        $('[name="edit_validate_upto"]').val(data.validate_upto);--}}
            {{--        $('[name="edit_amount"]').val(data.amount);--}}
            {{--        $('[name="edit_per_ad"]').val(data.per_ad);--}}
            {{--        $('[name="edit_referral_bonus_amount"]').val(data.referral_bonus_amount);--}}
            {{--        $('[name="edit_daily_ads"]').val(data.daily_ads);--}}
            {{--        $("#modal_edit").modal('show');--}}
            {{--        // location.href=location.href--}}
            {{--        // $('#Modal_Edit').show();--}}

            {{--    }--}}

            {{--});--}}
            // return false;

        });
        $('#subscribe_form').on('submit', function (e) {
            e.preventDefault();

            // var cover_img = $('#cover_img').val();
            // var cover_img = $('#cover_img').prop('files')[0];
            // var form_data = new FormData();
            // form_data.append('file', cover_img);
            $.ajax({
                    beforeSend: (function () {
                        $('#phone_error').hide();
                        $('#account_holder_name_error').hide();
                        $('#Amount_error').hide();
                        $('#transaction_id_error').hide();
                        $('#payment_type_error').hide();
                        $('#prof_img_error').hide();

                    }),
                    cache: false,
                    contentType: false,
                    processData: false,
                    {{--                    url: " {{route('subscribe_package')}}",--}}
                    method: "post",
                    // data: {
                    //     title: title, price: price, ISBN: ISBN, Staff_id: Staff_id,
                    //     Supplier_id: Supplier_id, Publisher_id: Publisher_id,
                    //     category_id: category_id, subject: subject, number_of_coypies: number_of_coypies,
                    //     cover_img: cover_img
                    // },
                    // data: $('#add_form').serialize(),
                    data: new FormData(this),


                    success: function (data) {

                        $('#package_id').val('');
                        $('#phone').val('');
                        $('#payment_type').val('');
                        $('#transaction_id').val('');
                        $('#amount').val('');
                        $('#account_holder_name').val('');
                        $('#description').val('');
                        $('#prof_img').attr('src', '');

                        $('#success_message').html(data.message);
                        $('#success_message').show();
                        // $('#success_message').html(data.message);

                        $('#subscribe_model').modal('hide');
                        setTimeout(function () {
                            location.reload();
                        }, 5000);

                    }
                    ,
                    error: function (data) {
                        if (data.status === 422) {
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function (key, value) {
                                // $('#category_id_error').show().append(value + "<br/>"); //this is my div with messages
                                if ($.isPlainObject(value)) {
                                    $.each(value, function (key, value) {

                                        if (key == 'account_holder_name') {
                                            $('#account_holder_name_error').html(value);
                                        }
                                        if (key == 'phone') {
                                            $('#phone_error').html(value);
                                            $('#phone_error').show();
                                        }
                                        if (key == 'amount') {
                                            $('#Amount_error').html(value);
                                            $('#Amount_error').show();

                                        }
                                        if (key == 'transaction_id') {
                                            $('#transaction_id_error').html(value);
                                            $('#transaction_id_error').show();
                                        }
                                        if (key == 'payment_method') {
                                            $('#payment_type_error').html(value);
                                            $('#payment_type_error').show();
                                        }
                                        if (key == 'prof_img') {
                                            $('#prof_img_error').html(value);
                                            $('#prof_img_error').show();
                                        }

                                        // $('#category_id_error').show().append(value + "<br/>");
                                    });

                                }

                            });
                        }

                    }

                }
            );
        })


    </script>
@endsection
