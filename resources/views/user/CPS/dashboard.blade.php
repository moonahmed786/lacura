@extends('layouts.user_layout')

@section('header')
    {{--    <link href="plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css"/>--}}
    {{--    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">--}}
    {{--    <script src='{{asset('cryptojs/cryptobox.min.js')}}' type='text/javascript'></script>--}}

    {{--    <script src="{{asset('cryptojs/support.min.js')}}" crossorigin="anonymous"></script>--}}



@endsection
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row mgtop5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--<i class="far fa-user fa-2x"></i>-->
                                    <div class="col mgl">
                                        <h5>@lang('cps_dashboard.Welcome') {{auth()->user()->name}}</h5>
                                        <h7 class="text-secondary">{{auth()->user()->email}}</h7>
                                    </div>
                                </div>
                                <!-- <div class="col-md-2 mgtop">
                                    <i class="far fa-bell fa-2x"></i>
                                </div>
                                <div class="col-md-2 mgtop">
                                    <i class="fas fa-times fa-2x"></i>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mgtop2">
                    <i class=" folleft fa-2x">{{$gn_setting->currency_sym}}</i>

                    <h4 class="marginleft1">@lang('cps_dashboard.Balance')</h4>
                    <h4 class="marginleft1">{{auth()->user()->balance}}</h4>
                </div>
                <div class="col-md-2 mgtop2">
                    <!--<i class="fas fa-th folleft fa-3x"></i>-->

                    <h4 class="marginleft">@lang('cps_dashboard.Slots Total Balance')</h4>
                    <h4 class="marginleft">{{$slots_sum}} {{$gn_setting->currency_sym}}</h4>
                </div>
                <div class="col-md-2 mgtop2">
                    <!--<i class="fas fa-th folleft fa-3x"></i>-->

                    <h4 class="marginleft">@lang('cps_dashboard.Slots')</h4>
                    <h4 class="marginleft">{{$Contracts}}</h4>
                </div>
                <div class="col-md-2 mgtop2">
                    <i class="fas fa-money folleft fa-3x"></i>

                    <h4 class="marginleft">@lang('cps_dashboard.Total Deposits')</h4>
                    <h4 class="marginleft">{{$CPSDeposit}}</h4>

                </div>
                {{--                    <a href="{{route('users.delete.all')}}">delete all</a>--}}
            </div>
            <div class="col-line">
                <hr>
            </div>

            <div class="row borderbottom"></div>
            <div class="row mg-5 mt-3">
                <div class="col-md-3">
                    <h1>@lang('cps_dashboard.Slot-Trader')</h1>
                </div>
                <!-- <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                              <div class="col-md-12">
                                  <i class="fas fa-dollar-sign fa-2x doller"></i>
                                  <div class="col mgl1">
                                      <h4 class="comm">Commissions</h4>
                                  </div>
                                      <h4 class="amount">Amount:</h4>
                                      <p class="amount1">$ 1200</p>
                                      <div class="col-md-6 btnn">
                                          <button type="button" class="btn btn-dark btn-lg btn-block"><i class="fas fa-calculator"></i>Withdraw</button>
                                      </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-3">
                    <h4 class="marginleft1">@lang('cps_dashboard.Reward Points')</h4>
                    <h4 class="marginleft1">{{auth()->user()->reward_points}}</h4>


                </div>
                <div class="col-md-3 mg-5">
                                        <button type="button" class="btn btn-warning btn-lg btn-block" id="withdraw_com">
                                            <!--<i class="fas fa-calculator"></i>-->
                                            @lang('cps_dashboard.Withdraw')
                                        </button>
                </div>
                <div class="col-md-3 mg-5">

                    <button type="button" class="btn btn-success btn-lg btn-block buy_cps">
                        <!--<i class="fas fa-gift"></i>-->
                        @lang('cps_dashboard.Buy Slot')
                    </button>
                </div>
            </div>
            <div class="scroll-bar1 mgtop5">
                <div class="scroll-bar2">

                    <!--<div class="row card card1 cardd">-->
                    <!--    <div class="col-md-2 ml-5 text-center txt">-->
                    <!--        <h3>Daily Profit</h3>-->
                    <!--        <p class="balmg1l2">00000000000BTC</p>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-2 text-center txt">-->
                    <!--        <h3>Weekly Profit</h3>-->
                    <!--        <p class="balmg1l2">00000000000BTC</p>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-2 text-center txt">-->
                    <!--        <h3>Monthly Profit</h3>-->
                    <!--        <p class="balmg1l2">00000000000BTC</p>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-2 text-center txt">-->
                    <!--        <h3>Yearly Profit</h3>-->
                    <!--        <p class="balmg1l2">00000000000BTC</p>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-3 text-center txt">-->
                    <!--        <h3>At the End of Contract</h3>-->
                    <!--        <p class="balmg1l2">00000000000BTC</p>-->
                    <!--    </div>-->

                    <!--</div>-->
                    @foreach($slots as $slot)
                        <div class="row card card1 mobmargin mgtop5">
                            <div class="card-body cardd-body">
                                <div class="col-md-3">
                                    <!--<i class="fab fa-bitcoin fa-4x"></i>-->
                                    <h4 class="bitcointext">@lang('cps_dashboard.Balance')</h4>
                                    <h4>{{$slot->balance}} {{$gn_setting->currency_sym}}</h4>
                                </div>
                                <div class="col-md-2 mt-5">
                                    <h6 class="cpstop">@lang('cps_dashboard.Status')</h6>


                                    @if($slot->status == 1  &&     $slot->slot_validate_until > Carbon\Carbon::now())
                                        <button
                                            class="btn btn-success btn-sm "> @lang('cps_dashboard.Active')   </button>
                                    @else
                                        <button
                                            class="btn btn-danger btn-sm ">  @lang('cps_dashboard.Deactivate')</button>
                                    @endif

                                </div>
                                <div class="col-md-2 mgtop5">
                                    {{--                                    <button class="btn btn-success btn-sm profit_histrory"--}}
                                    {{--                                            data-id="{{$slot->id}}"--}}
                                    {{--                                    >@lang('cps_dashboard.Profit history')--}}
                                    {{--                                    </button>--}}
                                    @if($slot->allowed_withdraw_at < Carbon\Carbon::now())
                                        <button type="button" class="btn btn-success btn-sm mt-3 buy_gc"
                                                data-id="{{$slot->id}}"
                                                data-profit="{{$slot->profit}}"
                                                data-balance="{{$slot->balance}}">
                                            <i class="fas fa-shopping-cart"></i> @lang('cps_dashboard.Buy Voucher')
                                        </button>

                                    @else

                                    @endif
                                </div>
                                <div class="col-md-1 shadowright2"></div>
                                <div class="col-md-3 mgtopneg shadowright">
                                <!--<h3>{{$slot->balance}}$</h3>-->
                                    <!--<p class="balmgl">Your Goal</p>-->


                                    @if($slot->allowed_withdraw_at < Carbon\Carbon::now())
                                        <button type="button" class="btn btn-warning btn-sm mt-5 withdraw"
                                                data-id="{{$slot->id}}"
                                                data-profit="{{$slot->profit}}"
                                                data-balance="{{$slot->balance}}">
                                            <i class="fas fa-wallet"></i> @lang('cps_dashboard.Withdraw')
                                        </button>
                                    @else


                                        <button type="button" class="btn btn-success rounded bs-popover mt-5 "
                                                data-container="body" data-placement="top"
                                                data-content="{{ \Carbon\Carbon::parse($slot->allowed_withdraw_at)->format('F dS, Y ') }}">
                                            @lang('cps_dashboard.Click to check Withdraw date')
                                        </button>



                                        <br>


                                    @endif
                                </div>
                                <div class="col-md-2 mgtopneg">
                                    <h6 class="cpstop">@lang('cps_dashboard.Slot ID')</h6>
                                    <h3 class="balmg1l">{{$slot->slot_number}}</h3>


                                </div>
                            </div>

                            <!--                                    <div id="newpost">-->
                            <!--    Test text-->
                            <!--</div>-->

                            <!--<button>Click</button>-->

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container">
            {{--            <div class="row">--}}
            {{--                <div class="col-md-7"></div>--}}
            {{--                <div class="col-md-5 reffer-g refferal">--}}
            {{--                    <div class="box1">--}}
            {{--                        <h3>@lang('cps_dashboard.Your referral link')</h3>--}}
            {{--                        <div class="input-group input-group-lg mb-4">--}}

            {{--                            <input type="text" class="form-control" id="register_url"--}}
            {{--                                   value="{{url('/')}}/register/{{Auth::user()->username}}" aria-label="Large"--}}
            {{--                                   name="referral-link"--}}
            {{--                                   aria-describedby="inputGroup-sizing-sm" readonly>--}}
            {{--                        </div>--}}
            {{--                        <button class="btn btn-info mb-2 ml-2 btn-lg"--}}
            {{--                                onclick="myFunction()">@lang('cps_dashboard.Copy')</button>--}}

            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </section>
    <!-- /.content -->
    <!-- Modal -->





    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade " id="tabsModal" tabindex="-1" role="dialog" aria-labelledby="tabsModalLabel"
         aria-hidden="true">
        <div class="modal-dialog   " style="" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tabsModalLabel">@lang('cps_dashboard.Buy Now')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if($allowed_buy)
                        {{--                    <form id="cps">--}}
                        <div class="">
                            <div class="mb-3 ">

                                <label for="basic-url">@lang('cps_dashboard.Choose your Package'):</label>
                                <select class="form-control form-control-sm" id="package_id" name="package_id">
                                    @foreach($user_packages_list as $packages)
                                        <option value="{{$packages->id}}">
                                            @if(session('lang') == 'pt-br')
                                                {!! $packages->packages->title_pt_br !!}
                                            @else
                                                {!! $packages->packages->title_ja !!}

                                            @endif || (@lang('cps_dashboard.Remaining Slot')
                                            : {{$packages->reaming_slots}} )
                                        </option>
                                    @endforeach

                                </select>
                                <span class="input-group-btn input-group-append"></span>
                            </div>
                        </div>


                        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="Cash-tab" data-toggle="tab" href="#Cash" role="tab"
                                   aria-controls="Cash" aria-selected="true">@lang('cps_dashboard.Balance')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="voucher-tab" data-toggle="tab" href="#voucher" role="tab"
                                   aria-controls="voucher" aria-selected="false">@lang('cps_dashboard.Voucher')</a>
                            </li>
                            {{--                            <li class="nav-item">--}}
                            {{--                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#BitCoin" role="tab"--}}
                            {{--                                   aria-controls="BitCoin" aria-selected="false">BitCoin</a>--}}
                            {{--                            </li>--}}
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active text-center" id="Cash" role="tabpanel"
                                 aria-labelledby="Cash-tab">

                                <div class="mb-4  ">
                                    <label for="basic-url">@lang('cps_dashboard.Your Account Balance') :</label>
                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected pl-5 ml-5">

                                        <input id="com_balance" type="text" value="{{auth()->user()->balance}} {{$gn_setting->currency_sym}}"
                                               name=""
                                               class="form-control" readonly>
                                        <span class="input-group-btn input-group-append"></span>
                                    </div>
                                </div>
                                <div class=" ">
                                    {{--                                <label for="basic-url" class="pl-2">@lang('Enter CPS Number You Want to Buy!')</label>--}}
                                    <div class="qty ">
                                        {{--                                    <span class="btn btn-warning minus">-</span>--}}
                                        <input type="hidden" class="count" name="cps_qty" id="cps_qty" value="1"
                                               readonly>
                                        {{--                                    <span class="btn btn-success plus">+</span>--}}
                                    </div>


                                </div>
                                <div class="mb-4  ">
                                    <label for="basic-url">@lang('cps_dashboard.Total Amount') :</label>
                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected pl-5 ml-5">

                                        <input id="total" type="text" value="150" name="total" class="form-control"
                                               readonly>
                                        <span class="input-group-btn input-group-append"></span>
                                    </div>
                                </div>
                                {{--                            <div class="mb-4 text-center " id="ans_block_cash">--}}
                                {{--                                <label for="basic-url">what goal would you like <br>to achieve with this cps ?</label>--}}
                                {{--                                <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected pl-5 ml-5">--}}

                                {{--                                    <input id="ans_cash" type="text" value="" name="ans_cash" class="form-control">--}}
                                {{--                                </div>--}}
                                {{--                            </div>--}}

                                {{--                            <div id="ans_cash_error" style="color: red"><br>--}}

                                {{--                            </div>--}}


                            </div>
                            <div class="tab-pane fade" id="voucher" role="tabpanel" aria-labelledby="voucher-tab">
                                <div class="text-center ">
                                    <div class="mb-4 text-center ">

                                        <label for="basic-url">@lang('cps_dashboard.Enter Voucher Code'):</label>
                                        <div
                                            class="input-group bootstrap-touchspin bootstrap-touchspin-injected pl-5 ml-5">


                                            <input id="voucher_code" type="text" value="" name="voucher_code"
                                                   class="form-control">
                                            <div class="input-group-append">
                                                <button class="btn btn-warning btn-sm"
                                                        id="gift_check_btn">@lang('cps_dashboard.Check')
                                                </button>

                                            </div>
                                            <span class="alert-success" id="voucher_success_message"
                                                  style="display: none"></span>

                                            <span class="alert-danger" id="voucher_error_message"
                                                  style="display: none"></span>
                                            <span class="input-group-btn input-group-append"></span>
                                        </div>
                                    </div>
                                    <div class="mb-4 text-center ">
                                        <label for="basic-url"
                                               class="pl-2">@lang('cps_dashboard.Voucher Code Balance!')</label>
                                        <div
                                            class="input-group bootstrap-touchspin bootstrap-touchspin-injected pl-5 ml-5">

                                            <input id="voucher_balance" type="text" value="" name="voucher_balance"
                                                   class="form-control" readonly>
                                            <span class="input-group-btn input-group-append"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-4 text-center ">
                                    <label for="basic-url">@lang('cps_dashboard.Valid for Numbers of Slot') :</label>
                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected pl-5 ml-5">

                                        <input id="voucher_cps" type="text" value="" name="voucher_cps"
                                               class="form-control"
                                               readonly>
                                        <span class="input-group-btn input-group-append"></span>
                                    </div>
                                </div>
                                {{--                            <div class="mb-4 text-center " id="ans_block" style="display: none">--}}
                                {{--                                <label for="basic-url">what goal would you like <br>to achieve with this cps ?</label>--}}
                                {{--                                <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected pl-5 ml-5">--}}

                                {{--                                    <input id="ans" type="text" value="" name="ans" class="form-control">--}}
                                {{--                                    <span class="input-group-btn input-group-append"></span>--}}
                                {{--                                </div>--}}
                                {{--                                <div id="ans_error" style="color: red"><br>--}}

                                {{--                                </div>--}}
                                {{--                            </div>--}}


                            </div>
                            {{--                        <div class="tab-pane fade" id="BitCoin" role="tabpanel" aria-labelledby="BitCoin-tab">--}}


                            {{--                            <div class="mb-4 text-center ">--}}
                            {{--                                <label for="basic-url" class="pl-2">@lang('cps_dashboard.Enter CPS Number You Want to Buy!')</label>--}}
                            {{--                                <div class="qty ">--}}
                            {{--                                    <span class="btn btn-warning btc_minus">-</span>--}}
                            {{--                                    <input type="number" class="count" name="btc_cps_qty" id="btc_cps_qty"--}}
                            {{--                                           value="1" readonly>--}}
                            {{--                                    <span class="btn btn-success btc_plus">+</span>--}}
                            {{--                                </div>--}}


                            {{--                            </div>--}}
                            {{--                            <div class="mb-4  text-center ">--}}
                            {{--                                <label for="basic-url">@lang('cps_dashboard.Total Amount') :</label>--}}
                            {{--                                <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected pl-5 ml-5">--}}

                            {{--                                    <input id="btc_total" type="text" value="150" name="total" class="form-control" readonly>--}}
                            {{--                                    <span class="input-group-btn input-group-append"></span>--}}

                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            {{--                            <div class="mb-4 text-center ">--}}

                            {{--                                <button type="button" id="payment" class="btn btn-success mt-2">@lang('cps_dashboard.Payment')</button>--}}

                            {{--                            </div>--}}
                            {{--                            --}}{{--                                <div class="mb-4  ">--}}
                            {{--                            --}}{{--                                    <label >Total Amount To Send :</label>--}}
                            {{--                            --}}{{--                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected pl-5 ml-5">--}}
                            {{--                            --}}{{--                                        <span id="total_amount_btc" class="input-group-btn input-group-append"></span>--}}
                            {{--                            --}}{{--                                    </div>--}}
                            {{--                            --}}{{--                                </div>--}}
                            {{--                            <div id="payment_info" style="display: none">--}}
                            {{--                                <div class="mb-4 text-center ">--}}
                            {{--                                    <label >@lang('cps_dashboard.QR Code'):</label>--}}
                            {{--                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected pl-5 ml-5">--}}
                            {{--                                        <span id="qr_btc" class="input-group-btn input-group-append"></span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}

                            {{--                                <div class="mb-4 text-center ">--}}
                            {{--                                    <label >@lang('cps_dashboard.Send To Address'):</label>--}}
                            {{--                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected pl-5 ml-5">--}}
                            {{--                                        <span id="address_btc" class="input-group-btn input-group-append"></span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="mb-4  text-center ">--}}
                            {{--                                    <label >@lang('cps_dashboard.Status URL'):</label>--}}
                            {{--                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected pl-5 ml-5">--}}
                            {{--                                        <span id="status_url_btc" class="input-group-btn input-group-append"></span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="mb-4 text-center ">--}}
                            {{--                                    <label >@lang('cps_dashboard.Payment ID'):</label>--}}
                            {{--                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected pl-5 ml-5">--}}
                            {{--                                        <span id="payment_btc" class="input-group-btn input-group-append"></span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                        </div>
                        {{--                    </form>--}}
                    @else
                        <p>@lang('cps_dashboard.Not allowed to buy any Slot please Subscribe a packages first')</p>
                    @endif
                </div>
                <div class="modal-footer">
                            @if($allowed_buy)
                    <button class="btn" data-dismiss="modal"><i
                            class="flaticon-cancel-12 cancel"></i> @lang('cps_dashboard.Cancel')</button>

                    <button type="button" class="btn btn-success confirm">@lang('cps_dashboard.Confirm')</button>
                    @else
                        <button class="btn btn-success " data-dismiss="modal"> @lang('cps_dashboard.Confirm')</button>
                    @endif
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="buygc_model" tabindex="-1" role="dialog" aria-labelledby="tabsModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">@lang('cps_dashboard.Buy voucher')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">

                    <input id="gc_slot_id" type="hidden">
                    <div class="form-group ">
                        <label for="basic-url" class=" ">@lang('cps_dashboard.Your Slot Balance'):</label>
                        <input id="modal_balance" type="text" value="" name="total" class="form-control" readonly>
                        <span class="input-group-btn input-group-append"></span>
                    </div>
                    <div class="form-group ">
                        <label for="basic-url" class=" ">@lang('cps_dashboard.After Buying Balance Will be'):</label>
                        <input id="after_buying" type="text" value="" name="total" class="form-control" readonly>
                        <span class="input-group-btn input-group-append"></span>
                    </div>
                    {{--                    <label for="basic-url" class="">@lang('cps_dashboard.Enter CPS Number You Want to Buy!')</label>--}}
                    {{--                    <div class="qty ">--}}
                    {{--                        <span class="btn btn-warning gc_minus">-</span>--}}
                    <input type="hidden" class=" gc_count" name="gc_qty" id="gc_qty" value="1">
                    {{--                        <span class="btn btn-success gc_plus">+</span>--}}
                    {{--                    </div>--}}
                    <span class="alert-danger" id="error_message"
                          style="display: none">@lang("cps_dashboard.Don't have Balance to buy more then current numbers of CPS")</span>

                    <div class="form-group ">
                        <label for="basic-url" class=" ">@lang('cps_dashboard.Voucher Code') :</label>

                        <input id="gift_code_model" type="text" value="" name="gift_code" class="form-control">
                        <span class="input-group-btn input-group-append"></span>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">@lang('cps_dashboard.Close')</button>
                    <button type="button" class="btn btn-primary"
                            id="buy_gc_submit">@lang('cps_dashboard.Confirm')</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade " id="profit_histrory_model" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">@lang('cps_dashboard.Slot Profit History')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="slot_history_table" class="table table-hover non-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>@lang('cps_dashboard.Deposit Time')</th>
                                <th>@lang('cps_dashboard.Amount')</th>

                            </tr>
                            </thead>
                            <tbody id="profit_tbody">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>





    <!-- Modal -->
    <div class="modal fade" id="withdraw_commission_modal" tabindex="-1" role="dialog" aria-labelledby="tabsModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">@lang('cps_dashboard.Withdraw Balance')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">

                    <input id="gc_slot_id" type="hidden">
                    <div class="form-group ">
                        <label for="basic-url" class=" ">@lang('cps_dashboard.Your Balance'):</label>
                        <input id="blc_commission" type="text" value="{{auth()->user()->balance}} {{$gn_setting->currency_sym}}"
                               name="blc_commission" class="form-control" readonly>
                        <span class="input-group-btn input-group-append"></span>
                    </div>

                    <label for="basic-url" class="">@lang('cps_dashboard.Enter Balance you want to Withdraw!')</label>
                    <input id="amt_withdraw" type="text" value="" name="amt_withdraw" class="form-control">
                    <span class="alert-danger" id="error_message"
                          style="display: none">@lang("cps_dashboard.Don't have min balance to withdraw")</span>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">@lang('cps_dashboard.Close')</button>
                    <button type="button" class="btn btn-primary"
                            id="withdraw_commission_submit">@lang('cps_dashboard.Confirm')</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
@endsection
@section('script')
    {{--    <script src="plugins/file-upload/file-upload-with-preview.min.js"></script>--}}
    {{--    <script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>--}}
    {{--    <script src="plugins/bootstrap-touchspin/custom-bootstrap-touchspin.js"></script>--}}
    {{--    <script src="{{asset("plugins/table/datatable/datatables.js")}}"></script>--}}

    <script>
        $(document).ready(function () {
            $("#hs").click(function () {
                $("#newpost").hide();
            });
        });
        $(".pr_public_btn").change(function () {
            let slot_id = $(this).data('id');
            if (this.checked) {

                console.log('checked', slot_id);
            } else {
                console.log('not checked', slot_id);

            }

            swal({
                title: '<i>Are you sure</i><br> ',
                type: 'info',
                html:
                    '<u>Want to Make This Project Public?</u>',
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText:
                    '<i class="flaticon-checked-1"></i> Yes!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText:
                    '<i class="flaticon-cancel-circle"></i> Cancel',
                cancelButtonAriaLabel: 'Thumbs down',
                padding: '2em'
            });
            $('.swal2-confirm').on('click', function () {
                var data = {
                    "_token": "{{ csrf_token() }}",
                    slot_id: slot_id,

                };
                var me = $(this);
                me.attr('disabled', true);
                if ($('.swal2-confirm').data('requestRunning')) {
                    return;
                }
                me.text('{{__('cps_dashboard.Request Running')}}');


                $('.swal2-confirm').data('requestRunning', true);
                // $('.confirm').attr('disabled', true);

                $('.swal2-confirm').text('{{__('cps_dashboard.Request Running')}}');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    success: function (response) {

                        if (!response.error) {
                            $('#buygc_model').modal('hide');

                            swal(response.message, "", "success");
                            $('.swal2-confirm').on('click', function () {
                                window.location.reload();

                            });
                        } else {


                            if (response.error) {
                                swal("Request Rejected", response.message, "error");
                                $('.swal2-confirm').on('click', function () {
                                    window.location.reload();
                                });
                            }
                        }


                    },
                    error: function () {


                        swal("Request Rejected", "", "error");
                    }
                });
            });

            /*
                        swal("are you sure want to Public this Project", "Successfully", "success");
                        $('.swal2-confirm').on('click', function () {
                            window.location.reload();

                        });



*/

        });
        // var firstUpload = new FileUploadWithPreview('myFirstImage');

        // $("#slot_history_table").DataTable({
        //     responsive: true
        // });


        function myFunction() {
            var copyText = document.getElementById("register_url");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
            alert("Link is copied ");
        }

        // $('.count').prop('disabled', true);
        $(document).on('click', '.plus', function () {
                {{--            var commission = {{auth()->user()->commission}};--}}
            var commission = 1222222;
            if (commission >= 150) {
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
        $(document).on('click', '.btc_plus', function () {


            $('#btc_cps_qty').val(parseInt($('#btc_cps_qty').val()) + 1);
            $('#btc_total').val(parseInt($('#btc_total').val()) + 150);
            $('#payment_info').hide();

        });
        $(document).on('click', '.btc_minus', function () {
            $('#btc_cps_qty').val(parseInt($('#btc_cps_qty').val()) - 1);
            $('#btc_total').val(parseInt($('#btc_total').val()) - 150);

            if ($('#btc_cps_qty').val() == 0) {
                $('#btc_cps_qty').val(1);
                $('#btc_total').val(150);
            }
            $('#payment_info').hide();

        });

        //Gift Code
        $(document).on('click', '.gc_plus', function () {
            $('#error_message').hide();


            var after_buying = $('#after_buying').val();
            console.log(after_buying - 150);
            if (after_buying - 150 > 0) {
                $('.gc_count').val(parseInt($('.gc_count').val()) + 1)
                $('#after_buying').val($('#after_buying').val() - 150);
            } else {
                console.log('nothings');

                $('#error_message').show();
            }
        });
        $(document).on('click', '.gc_minus', function () {
            $('#error_message').hide();
            $('.gc_count').val(parseInt($('.gc_count').val()) - 1);
            $('#after_buying').val(parseInt($('#after_buying').val()) + 150);


            if ($('.gc_count').val() == 0) {
                $('.gc_count').val(1);
                $('#after_buying').val($('#modal_balance').val() - 150);
                $('.gc_plus').prop('disabled', false)


            }
        });
        $('#profit_histrory_model').on('hidden.bs.modal', function () {

        });

        $(".profit_histrory").on('click', function () {
            let slot_id = $(this).data('id');
            let voucher_code = $("#voucher_code").val();
            {{--var url = '{{ route('users.slot.profit.list')}}';--}}

                data = {
                "_token": "{{ csrf_token() }}",
                slot_id: slot_id,
            };


            $.ajax({
                    type: "get",
                    url: url,
                    data: data,
                    success: function (response) {
                        console.log(response.slot_profit_list);
                        // if(!response.error){
                        //
                        // }else{


                        var res = '';
                        var pro = '';

                        $.each(response.slot_profit_list, function (key, value) {
                            // console.log(value.slot_profit_list);


                            res +=
                                '<tr>' +
                                '<td>' + value.deposit_time + '</td>' +
                                '<td>' + value.amount + '</td>' +
                                '</tr>';

                            pro = 1;


                        });
                        if (pro) {
                            $('#profit_tbody').html(res);
                        } else {
                            $('#profit_tbody').html(' <tr>no data funded!</tr>');

                        }

                        $('#profit_histrory_model').modal('show');
                        console.log(response.slot_profit_list);

                        // }

                    }
                }
            );

        });

        $("#gift_check_btn").on('click', function () {
            $('#voucher_error_message').hide();
            $('#voucher_success_message').hide();
            let voucher_code = $("#voucher_code").val();
            var url = '{{ route('user.get.gift.status')}}';

            data = {
                "_token": "{{ csrf_token() }}",
                gift_code: voucher_code,
            };


            $.ajax({
                    type: "get",
                    url: url,
                    data: data,
                    success: function (response) {

                        if (!response.error) {
                            $('#voucher_success_message').html(response.message);
                            $('#voucher_success_message').show();
                            $('#voucher_balance').val(response.voucher_balance);
                            $('#voucher_cps').val(response.voucher_cps);
                            $('#ans_block').show();
                        } else {
                            console.log(response.message);

                            $('#voucher_error_message').html(response.message);
                            $('#voucher_error_message').show();

                        }

                    }
                }
            );

        });


        $(".buy_gc").on('click', function () {
            let slotid = $(this).data('id');
            let profit = $(this).data('profit');
            let balance = $(this).data('balance');
            console.log('slotid', slotid);
            console.log('profit', profit);
            console.log('balance', balance);
            if (balance < 150) {
                swal("{{__('cps_dashboard.Your Balance is Insufficient')}}", '{{__('cps_dashboard.Min 150$ is Required to Buy GC')}}', "error");
                // console.log('low balance');

            } else {
                $('#gc_slot_id').val(slotid);
                $('#modal_balance').val(balance);
                $('#after_buying').val(balance - 150);


                var url = '{{ route('user.get.gift.code')}}';

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

                $('#buygc_model').modal('show');

                //form submitions of Buy GC slot button
                $('#buy_gc_submit').click(function () {
                    var gift_type = "cps_gift";
                    let input_slots = $('.gc_count').val();
                    var gc_slot_id = $('#gc_slot_id').val();
                    var gift_code = $('#gift_code_model').val();

                    var data = {
                        "_token": "{{ csrf_token() }}",
                        input_slots: input_slots,
                        gift_type: gift_type,
                        source_slot_id: gc_slot_id,
                        gift_code: gift_code,

                    };
                    var me = $(this);
                    me.attr('disabled', true);
                    if ($('.confirm').data('requestRunning')) {
                        return;
                    }
                    me.text('{{__('cps_dashboard.Request Running')}}');


                    $('.confirm').data('requestRunning', true);
                    // $('.confirm').attr('disabled', true);

                    $('.confirm').text('{{__('cps_dashboard.Request Running')}}');
                    var url = '{{route('slot.balance.gift.store')}}';
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: data,
                        success: function (response) {

                            if (!response.error) {
                                $('#buygc_model').modal('hide');

                                swal(response.message, '', "success");
                                $('.swal2-confirm').on('click', function () {
                                    window.location.reload();

                                });
                            } else {


                                if (response.error) {
                                    swal('{{__('cps_dashboard.Request Rejected')}}', response.message, "error");
                                    $('.swal2-confirm').on('click', function () {
                                        window.location.reload();
                                    });
                                }
                            }


                        },
                        error: function () {


                            swal("{{__('cps_dashboard.Request Rejected')}}", "", "error");
                        }
                    });
                });


            }


        });

        $(".withdraw").on('click', function () {
            let slotid = $(this).data('id');
            // let profit = $(this).data('profit');
            let balance = $(this).data('balance');

            if (balance < 30) {
                swal("{{__('cps_dashboard.Your Balance is Insufficient')}}", "{{__("cps_dashboard.Min 30".$gn_setting->currency_sym." is Required to Withdraw")}}", "error");

            } else {

                $('#gc_slot_id').val(slotid);
                swal("{{__('cps_dashboard.Are you Sure to Withdraw this CPS?')}}", "{{__('cps_dashboard.if you confirm this CPS will be no Active any more!')}}", "warning");
                $('.swal2-confirm').on('click', function () {


                    var data = {
                        "_token": "{{ csrf_token() }}",
                        source_slot_id: slotid,

                    };
                    var me = $(this);
                    me.attr('disabled', true);
                    if ($('.confirm').data('requestRunning')) {
                        return;
                    }
                    me.text('{{__('cps_dashboard.Request Running')}}');


                    $('.confirm').data('requestRunning', true);
                    // $('.confirm').attr('disabled', true);

                    $('.confirm').text('{{__('cps_dashboard.Request Running')}}');
                    var url = '<?= route('user.withdraw.request')?>';
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: data,
                        success: function (response) {

                            if (!response.error) {
                                swal(response.message, "", "success");
                                $('.swal2-confirm').on('click', function () {
                                    window.location.reload();

                                });
                            } else {


                                if (response.error) {
                                    swal('{{__('cps_dashboard.Request Rejected')}}', response.message, "error");
                                    $('.swal2-confirm').on('click', function () {
                                        window.location.reload();
                                    });
                                }
                            }


                        },
                        error: function () {


                            swal('{{__('cps_dashboard.Request Rejected')}}', "", "error");
                        }
                    });


                });


            }


        });


        $("#withdraw_com").on('click', function () {
            // let amt_withdraw = $(this).data('amt_withdraw');
            // let profit = $(this).data('profit');
                {{--let balance = {{auth()->user()->commission}};--}}
            let balance = 11111111;

            if (balance < 30) {
                swal("{{__('cps_dashboard.Your Balance is Insufficient')}} ", '{{__('cps_dashboard.Min 30'.$gn_setting->currency_sym.' is Required to Withdraw')}}', "error");

            } else {


                $('#withdraw_commission_modal').modal('show');

                // swal("Are you Sure to Withdraw this CPS? ", "if you confirm this CPS wil be no Active any more", "warning");
                $('#withdraw_commission_submit').on('click', function () {


                    var data = {
                        "_token": "{{ csrf_token() }}",
                        amt_withdraw: $('#amt_withdraw').val(),

                    };
                    var me = $(this);
                    me.attr('disabled', true);
                    if ($('#withdraw_commission_submit').data('requestRunning')) {
                        return;
                    }
                    me.text('{{__('cps_dashboard.Request Running')}}');


                    $('#withdraw_commission_submit').data('requestRunning', true);
                    // $('.confirm').attr('disabled', true);

                    $('#withdraw_commission_submit').text('{{__('cps_dashboard.Request Running')}}');
                    var url = '{{ route('withdrawBalanceAjax')}}';
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: data,
                        success: function (response) {

                            if (!response.error) {
                                swal(response.message, "", "success");
                                $('.swal2-confirm').on('click', function () {
                                    window.location.reload();

                                });
                            } else {


                                if (response.error) {
                                    swal("{{__('cps_dashboard.Request Rejected')}}", response.message, "error");
                                    $('.swal2-confirm').on('click', function () {
                                        window.location.reload();
                                    });
                                }
                            }


                        },
                        error: function () {


                            swal("{{__('cps_dashboard.Request Rejected')}}", "", "error");
                        }
                    });


                });


            }


        });

        //tabs based system
        $('.buy_cps').on('click', function () {

            $('#tabsModal').modal('show');

            $('.confirm').click(function () {
                var vcoin_type;

                let input_slots = $('#cps_qty').val();
                let package_id = $('#package_id').val();


                let voucher_code = $('#voucher_code').val();
                $('#voucher').hasClass('active') ? vcoin_type = "voucher" : vcoin_type = "balance";


                var me = $(this);
                me.attr('disabled', true);
                if ($('.confirm').data('requestRunning')) {
                    return;
                }
                me.text('{{__('cps_dashboard.Request Running')}}');

                $('.confirm').data('requestRunning', true);
                // $('.confirm').attr('disabled', true);

                $('.confirm').text('{{__('cps_dashboard.Request Running')}}');


                var form_data = new FormData();
                var url = '{{ route('user.cps.ajax')}}';
                /* var data = {
                         "_token": "{{ csrf_token() }}",
                            input_slots: input_slots,
                            coin_type: vcoin_type,
                            gift_code: voucher_code,
                            ans: ans,
                            question: question,
                            category:category,
                            cover_img: document.getElementById('cover_img').files[0],


                        }; */

                form_data.append('package_id', package_id);
                form_data.append('input_slots', input_slots);
                form_data.append('coin_type', vcoin_type);
                form_data.append('gift_code', voucher_code);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: url,
                    method: "POST",
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        // $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
                    },
                    success: function (response) {

                        if (!response.error) {
                            $('#tabsModal').modal('hide');

                            swal(response.message, "", "success");
                            $('.swal2-confirm').on('click', function () {
                                window.location.reload();

                            });
                        } else {


                            if (response.error) {
                                swal("{{__('cps_dashboard.Request Rejected')}}", response.message, "error");
                                $('.swal2-confirm').on('click', function () {
                                    window.location.reload();
                                });
                            }
                        }


                    },
                    error: function () {


                        swal('{{__('cps_dashboard.Request Rejected')}}', "", "error");
                    },
                    complete: function () {
                        $('.confirm').text('{{__('cps_dashboard.Completed')}}');
                        $('.confirm').text('{{__('cps_dashboard.Completed')}}');

                        me.text('{{__('cps_dashboard.Completed')}}');
                        me.attr('disabled', true);
                        // $('.confirm').attr('disabled', true);

                        // me.data('requestRunning', false);
                    }
                });


            });
        });
        $("#payment").click(function () {

            var vcoin_type;

            let voucher_code = $('#voucher_code').val();
            $('#voucher').hasClass('active') ? vcoin_type = "voucher" : vcoin_type = "cash";

            var me = $(this);
            // me.attr('disabled', true);
            // if ($('.confirm').data('requestRunning')) {
            //     return;
            // }
            //me.text('{{__('cps_dashboard.Request Running')}}');


            // $('.confirm').data('requestRunning', true);
            // $('.confirm').attr('disabled', true);

            // $('.confirm').text('{{__('cps_dashboard.Request Running')}}');


            var form_data = new FormData();
            {{--var url = '{{ route('user.ajax.btc')}}';--}}
            /* var data = {
                     "_token": "{{ csrf_token() }}",
                            input_slots: input_slots,
                            coin_type: vcoin_type,
                            gift_code: voucher_code,
                            ans: ans,
                            question: question,
                            category:category,
                            cover_img: document.getElementById('cover_img').files[0],


                        }; */

            form_data.append('input_slots', input_slots);
            form_data.append('coin_type', vcoin_type);
            form_data.append('gift_code', voucher_code);
            form_data.append('question', question);
            form_data.append('ans', ans);
            form_data.append('category', category);
            form_data.append('type', 'btc_deposit');
            form_data.append('_token', '{{ csrf_token() }}');
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            $.ajax({
                url: url,
                method: "POST",
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    // $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
                },
                success: function (response) {
                    console.log(response);
                    $('.bootstrapiso').html('');
                    $('.bootstrapiso').html('');
                    $('.bootstrapiso').html('');
                    var html = '';

                    // $('#total_amount_btc').html(response.data.amount1);
                    $('#qr_btc').html('<img width="246px" height="246px" src="' + response.data.qrcode_url + '" class="" alt="" loading="lazy" title="">');
                    $('#address_btc').html(response.data.address);
                    $('#status_url_btc').html('<a href="' + response.data.status_url + '" style="color: #0d6aad">{{__('cps_dashboard.Click here for more Information')}}</a>');
                    $('#payment_btc').html(response.data.txn_id);
                    $('#payment').hide();
                    $('#payment_info').show();
                    $('.modal-footer').hide();


                },
                error: function () {

                }
            });


            // var amountInput = $('.amountInput').val();
            // if (true) {
            //     $('.about').hide();
            //     var amount = parseFloat(amountInput);
            //     var afterFee = Number(parseFloat(amountInput) + parseFloat(amountInput) * 0.1).toFixed(3);
            //
            //
            //     $('.amountInputfee').val(afterFee);
            //
            //
            // } else {
            //
            //     $('.about').show();
            //     $('.btcData').fadeOut().html('').fadeIn();
            //     $('.amountInputfee').val(0);
            //
            //
            // }


        });


    </script>
@endsection
