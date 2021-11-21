<!-- price begin-->
<div id="donate" class="price">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6">
                <div class="section-title text-center">
                    <p>@lang('Choose a plan to continue')</p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-12 col-lg-12">

                <div class="tab-content" id="myTabContent2">

                    <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                        <div class="row">
                            @foreach($plans as $data)
                                @php $time_name = \App\TimeSetting::where('time', $data->times)->first(); @endphp
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-5">
                                    <div class="single-price">
                                        <div class="part-top" style="padding: 5px 0;">
                                            <h3>{{__($data->name)}}</h3>
                                            <h4>{{__($data->interest)}} @if($data->interest_status == 1)
                                                    % @else {{__($general->currency)}} @endif<br/><span>{{$time_name == ''?$data->times.' Hours' : __($time_name->name) }} /  @if($data->lifetime_status == 0) {{__($data->repeat_time)}} @lang('Times') @else <!-- @lang('Lifetime') --> @endif</span>
                                            </h4>
                                        </div>


                                        <div class="part-bottom" style="padding: 5px 0;">
                                            <ul>

                                                <li>@lang('Features')</li>
                                                @if($data->fixed_amount == 0)
                                                    <li>@lang('Invest Min-Max Amount')
                                                        <br> {{__($general->currency_sym)}} {{__($data->minimum)}}
                                                        - {{__($general->currency_sym)}} {{__($data->maximum)}}</li>
                                                @else
                                                    <li>@lang('Donation Value')
                                                        <br> {{__($general->currency_sym)}} {{__($data->maximum)}}</li>
                                                @endif
                                                @if($data->capital_back_status == 1)

                                                <!--    <li> <span class="badge badge-success">@lang('Donation with return')</span></li> -->
                                                @elseif($data->capital_back_status == 0)
                                                <!--    <li> <span class="badge badge-warning">@lang('Small donation')</span></li> -->
                                                @endif
                                            <!-- <li>@lang('Appointments')</li> -->
                                                @php $more_fields = json_decode($data->extra) @endphp
                                                @if($more_fields)
                                                <!-- <li class="font-weight-bold">@lang('Extra')</li> -->
                                                    @foreach($more_fields as $field)
                                                        <li>{{ __($field->key) }}<!-- <br> {{ __($field->value) }}--></li>
                                                    @endforeach
                                                @endif                                                    @if($data->image)
                                                    <li><img src="{{ asset('assets/images/plan') .'/'. $data->image }}"
                                                             style="width: 100%">
                                                    </li>                                                    @endif
                                            </ul>
                                            <button class="btn btn-primary planSelectBtn" data-id="{{ $data->id }}"
                                                    data-amount="{{ $data->fixed_amount}}">@lang('Select')</button>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- price end -->

<!-- Modal -->
<div class="modal fade" id="amountModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">@lang('Amount')</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <strong>@lang('Wallet')</strong>
                    <select name="wallet_type" class="form-control" required>
                        <option value="1">
                            {{ __($general->deposit_wallet_name) }}
                            @auth
                            ({{round(Auth::user()->balance,4)}} {{__($general->currency)}})
                            @endauth
                        </option>
                        <option value="2">
                            {{ __($general->interest_wallet_name) }}
                            @auth
                                ({{round(Auth::user()->interest_balance,4)}} {{__($general->currency)}})
                            @endauth
                        </option>
                    </select>
                </div>
                <div class="form-group" id="userAmountInput">
                    <strong>@lang('Amount')</strong>
                    <input type="text" name="user_amount" class="form-control">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Cancel')</button>
                <button type="button" class="btn btn-success userAmountSubmit"
                        data-dismiss="modal">@lang('Proceed')</button>
            </div>

        </div>
    </div>
</div>
