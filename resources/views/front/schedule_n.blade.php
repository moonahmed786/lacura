@extends('layouts.user_layout')

@section('SEO')
    <meta name="description" content="予約後に希望の時間と都道府県を選択してください。">
    <meta name="keywords" content="予約、相談、時間、都道府県、病気の治癒、魂の浄化、精神的な妨害、解放と精神的保護">
@stop
@section('header')
    <link href={{asset("assets/plugins/pricing-table/css/component.css")}} rel="stylesheet" type="text/css"/>
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
                    <a href="/schedule" class=" active ">
                        <img src="{{url('/')}}/assets/images/1560174798.png">
                        日本語
                    </a>
                </div>
                <div class="lang">
                    <a href="/pt-br/schedule" class="">
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
    <meta property="og:description" content="予約後に希望の時間と都道府県を選択してください。"/>
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
                        <h1>{{ __('schedules.Get a Schedule') }}</h1>
                        <div class="col-md-2 float-right mb-3">
                            {{--                            <a href="{{route('add.new.ticket')}}" class="btn btn-warning btn-block" style="color: black ;"><b>@lang('New Ticket')</b></a>--}}
                        </div>


                        <div class="row" id="chooseSchedule">
                            <div class="col-xl-12 col-lg-12 text-danger" id="schedule-error">
                                @if (count($errors) > 0)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-danger alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-hidden="true">&times;
                                                </button>
                                                <strong class="col-md-12"><i class="fa fa-exclamation-triangle"
                                                                             aria-hidden="true"></i> @lang('schedules.Alert!')
                                                </strong>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            </div>

                            <div class="col-xl-6 col-lg-4">
                                <div id="datepicker"></div>
                            </div>
                            <div class="col-xl-6 col-lg-8">
                                <div class="row">

                                    <div class="col-xl-12">
                                        <div id="availableTime">
                                            <p class="text-muted">@lang('schedules.Select a date first, to see available schedule')</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label
                                                class="font-weight-bold mt-2">@lang('schedules.Choose the city of service')</label>
                                            <select name="city" id="city_select"  class="form-control">

                                                @foreach($ScheduleCity as $city)

                                                    <option value="{{$city->image }}">
                                                        @if(session('lang') == 'pt-br')
                                                             {!! $city->city_name_pt_br !!}
                                                        @else
                                                             {!! $city->city_name_ja !!}

                                                        @endif
                                                    </option>
                                                @endforeach
                                            </select>


                                            <br><br>
                                            <img id="city_image" class="img img-responsive"
                                                 src=""
                                                 style=" width:500px; border:10px solid #D1D1D1" alt="">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">

                            <label for="">
                                @lang('schedules.Inform you of your current health status and whether you have any addictions such as smoking, drinking, or drugs')</label>
                            <textarea name="yourHealth" class="form-control" maxlength="500" placeholder="">

                       </textarea>
                        </div>
                        <div id="choosePlan">
                        {{--                @include('front.partials.choose_plan')--}}
                        <!-- price begin-->
                            <div class="col-lg-12 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center">
                                                <h4 class="mt-2">@lang('plan.Choose a plan to continue')</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <div class="container">
                                            <section class="pricing-section bg-7 ">
                                                <div class="pricing pricing--norbu">
                                                    @foreach($plans as $data)
                                                        @php $time_name = \App\TimeSetting::where('time', $data->times)->first(); @endphp

                                                        <div class="pricing__item">
                                                            <h3 class="pricing__title">{{__($data->name)}}</h3>
                                                            <p class="pricing__sentence">
                                                                {{__($data->interest)}}
                                                                @if($data->interest_status == 1)
                                                                    % @else {{__($general->currency)}} @endif
                                                                <br/>
                                                                <span>{{$time_name == ''?$data->times.' Hours' : __($time_name->name) }} /  @if($data->lifetime_status == 0) {{__($data->repeat_time)}} @lang('Times') @else <!-- @lang('Lifetime') --> @endif
                                                            </p>
                                                            {{--                                                <div class="pricing__price"><span class="pricing__currency">$</span>19<span class="pricing__period">/ month</span></div>--}}
                                                            <ul class="pricing__feature-list text-center">
                                                                @if($data->fixed_amount == 0)

                                                                    <li>
                                                                        <div class="pricing-plan-features">
                                                                <span class="pricing__currency">
                                                                    {{__($general->currency_sym)}} </span>{{__($data->minimum)}}
                                                                            - {{__($general->currency_sym)}} {{__($data->maximum)}}
                                                                            <span
                                                                                class="pricing__period">  @lang('Invest Min-Max Amount')</span>
                                                                        </div>

                                                                    </li>
                                                                @else
                                                                    <li>
                                                                        <div class="pricing-plan-features">
                                                                <span class="pricing__currency">
                                                                    {{__($general->currency_sym)}} </span>{{__($data->maximum)}}
                                                                            <span
                                                                                class="pricing__period">  @lang('Donation Value')</span>
                                                                        </div>
                                                                    </li>
                                                                @endif
                                                                <h3 class="pricing__title">@lang('plan.Features') </h3>


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
                                                                        <li class="pricing__feature">
                                                                            <span
                                                                                class="fa fa-arrow-right"></span> {{ __('plan.'.$field->key) }}<!-- <br> {{ __('plan.'.$field->value) }}-->
                                                                        </li>
                                                                    @endforeach
                                                                @endif

                                                            </ul>
                                                            @if($data->image)
                                                                <img
                                                                    src="{{ asset('assets/images/plan') .'/'. $data->image }}"
                                                                    style="width: 100%" class="mb-3">
                                                            @endif

                                                            <button class="pricing__action mx-auto mb-4 planSelectBtn"
                                                                    data-id="{{ $data->id }}"
                                                                    data-amount="{{ $data->fixed_amount}}">@lang('plan.Select')</button>
                                                        </div>

                                                    @endforeach

                                                </div>
                                            </section>


                                        </div>
                                    </div>
                                </div>
                            </div>


                        {{--                            <div id="donate" class="price">--}}
                        {{--                                <div class="container">--}}
                        {{--                                    <div class="row justify-content-center">--}}
                        {{--                                        <div class="col-xl-6 col-lg-6">--}}
                        {{--                                            <div class="section-title text-center">--}}
                        {{--                                                <p>@lang('Choose a plan to continue')</p>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}


                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        <!-- price end -->

                            <!-- Modal -->
                            <div class="modal fade" id="amountModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content text-center">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabel">@lang('schedules.Amount')</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <strong>@lang('schedules.Wallet')</strong>
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
                                                            ( {{round(Auth::user()->interest_balance,4)}} {{__($general->currency)}} )
                                                        @endauth
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group" id="userAmountInput">
                                                <strong>@lang('schedules.Amount')</strong>
                                                <input type="text" name="user_amount" class="form-control">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">@lang('schedules.Cancel')</button>
                                            <button type="button" class="btn btn-success userAmountSubmit"
                                                    data-dismiss="modal">@lang('schedules.Proceed')</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center">

                                <button class="btn btn-primary mt-3" id="choosePlanBtn">@lang('schedules.Next')</button>
                                <form action="{{ route('schedule.store') }}" id="scheduleForm" method="POST">
                                    @csrf
                                    <input type="hidden" name="date">
                                    <input type="hidden" name="time">
                                    <input type="hidden" name="plan">
                                    <input type="hidden" name="amount">
                                    <input type="hidden" name="wallet_type">
                                    <input type="hidden" name="city">
                                    <input type="hidden" name="user_query_id" value="{{$pendingQuery->id}}">
                                </form>
                                <button type="button" class="btn btn-primary"
                                        id="scheduleFormSubmit">@lang('schedules.Reserve')</button>
                                {{--                    <button type="button" class="btn btn-primary" id="scheduleFormSubmit">@lang('schedules.Reserve')</button>--}}

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('schedules.Cancel Schedule')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="{{ route('user.schedule.cancel') }}">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <p class="text-info">@lang('schedules.Are you sure want to cancel this schedule ?')</p>
                        <div class="item text-center"></div>
                    </div>
                    <div class="col-md-12">
                        <label for="remark">@lang('schedules.Reason')</label>
                        <textarea rows="5" class="form-control" name="remark"
                                  placeholder="@lang('schedules.Share your reason for cancellation')"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger"
                                id="cancelBtn">@lang('schedules.Cancel')</button>
                        <button type="button" class="btn btn-muted"
                                data-dismiss="modal">@lang('schedules.Close')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@stop
@section('style')
    <style>
        .price {
            background: transparent;
            padding: 0;
        }

        .ui-datepicker {
            font-size: 28px;
        }

        .price .single-price .part-top {
            padding: 5px 0;
        }

        .price .single-price .part-bottom {
            padding: 5px 0;
        }

        .price .single-price .part-bottom ul li {
            padding-bottom: 0px;
        }

        .transaction {
            padding: 0;
        }

        .price .single-price .part-top {
            background: -webkit-linear-gradient(-30deg, #052157 0%, #91039f 100%);
        }

        .price .single-price .part-top a {
            border: 1px solid #fff;
        }

        .transaction {
            padding-top: 0;
        }

        .swal-button--cancel {
            color: #fff;
        }

        .swal-button--confirm {
            background: #F79646;
            color: #fff;
        }
    </style>
@stop
@section('script')

    <script>
        $(document).ready(function () {

            $('#city_image').attr('src','{{asset('')}}'+'assets/images/schedule_city/'+$('#city_select').val() );

            $('#city_select').change(function () {
                city = $(this).val();
                $('#city_image').attr('src','{{asset('')}}'+'assets/images/schedule_city/'+city );


            })
        });
        var app = new Vue({
            el: '#app',
            data: {
                newdata: {
                    subscribe_email: ''
                }
            },
            methods: {
                modalData(val) {
                    $('#depoModal').modal('show');
                    this.showData = JSON.parse(val);
                },
                subsribe() {
                    var input = this.newdata;
                    axios.post('{{route('subscriber.store')}}', input).then(function (res) {
                        if (res.data.success == true) {
                            swal(res.data.message, "", "success");
                            app.newdata.subscribe_email = '';
                        } else {
                            swal(res.data.message, "", "warning");
                        }
                    });
                },
                selectSchedule(elem) {

                }
            }, mounted() {
                // var tomrrow = new Date(new Date().getTime() + 86400000);
                var tomrrow = new Date(new Date().setDate(new Date().getDate() + 10));
                var selectedDate = '';
                var time = '';
                var city = '';
                $('#datepicker').datepicker({
                    dateFormat: 'dd-mm-yy',
                    minDate: tomrrow,
                    onSelect: function (date) {
                        selectedDate = date;
                        $("#availableTime").html("<img src='{{ asset('assets/images/load.gif') }}' style='width:40px;height:40px;margin: 1rem auto;'>");
                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            url: "{{ route('schedule') }}",
                            type: 'POST',
                            data: {'date': date},
                            success: function (response) {
                                if (response.selectedDate) {
                                    swal(response.date.toString(), '', 'warning');
                                } else if (response.time) {
                                    swal(response.time.toString(), '', 'warning');
                                } else if (response.success) {

                                    var timeWrapper = $('#availableTime');
                                    var reserve_time = $.parseJSON(response.reserve_time);

                                    var startTime = 8;

                                    timeWrapper.html('<ul class="list-inline">');
                                    if (reserve_time.length > 0) {

                                        for (var i = 0; i < 11; i += 2) {
                                            var reservationTime = parseInt(startTime + i);
                                            if (reserve_time.filter(x => x.time == reservationTime).length > 0) {
                                                timeWrapper.append('<li class="list-inline-item bg-danger" data-val="' + reservationTime + '"><b>' + reservationTime + ':00 - ' + parseInt(reservationTime + 1) + ':00</b></li>');
                                            } else {
                                                timeWrapper.append('<li class="list-inline-item" data-val="' + reservationTime + '"><b>' + reservationTime + ':00 - ' + parseInt(reservationTime + 1) + ':00</b></li>');
                                            }
                                        }
                                    } else {
                                        for (var i = 0; i < 11; i += 2) {
                                            timeWrapper.append('<li class="list-inline-item" data-val="' + parseInt(startTime + i) + '"><b>' + parseInt(startTime + i) + ':00 - ' + parseInt(startTime + i + 2) + ':00</b></li>');
                                        }

                                    }
                                    timeWrapper.append('</ul>');
                                }
                            },
                        });
                    }
                });

                $('#availableTime').on('click', '.list-inline-item', function () {
                    $('#availableTime .list-inline-item').removeClass('bg-primary');
                    $(this).addClass('bg-primary');
                    time = $('#availableTime .list-inline-item.bg-primary').data('val');
                    $('#schedule-error').html('');
                });

                $('select[name=city]').on('change', function () {
                    city = $(this).val();
                }).change();

                $('#scheduleFormSubmit').on('click', function () {
                    var form = $('#scheduleForm');
                    if (!selectedDate || !time) {
                        $('#schedule-error').html('@lang("schedules.Please select date and time for schedule")');
                        return false;
                    } else if (!city) {
                        $('#schedule-error').html('@lang("schedules.Please choose the city of service")');
                        return false;
                    }
                    form.find('input[name=date]').val(selectedDate);
                    form.find('input[name=time]').val(time);
                    form.find('input[name=city]').val(city);
                    form.submit();
                });

                // cancel
                $('.cancelBtn').on('click', function () {
                    var modal = $('#cancelModal');
                    var id = $(this).data('id');
                    modal.find('input[name=id]').val(id);
                    modal.modal('show');
                });

                // Default - hide plans
                $('#scheduleFormSubmit').hide();
                $('#choosePlan').hide();

                $('#choosePlanBtn').on('click', function () {
                    if (!selectedDate || !time) {
                        $('#schedule-error').html('@lang("schedules.Please select date and time for schedule")');
                        return false;
                    } else if (!city) {
                        $('#schedule-error').html('@lang("schedules.Please choose the city of service")');
                        return false;
                    }
                    $('#chooseSchedule').hide();
                    $('#choosePlan').show();
                    $('#choosePlanBtn').hide();
                    $('#scheduleFormSubmit').show();
                });

                $('.planSelectBtn').on('click', function () {
                    var planBtn = $(this);

                    var amountModal = $('#amountModal');
                    var fixed_amount = planBtn.data('amount');
                    var plan_id = planBtn.data('id');
                    var userAmountInput = amountModal.find('input[name=user_amount]');

                    if (fixed_amount == 0) {
                        $('#userAmountInput').show();
                    } else {
                        $('#userAmountInput').hide();
                    }
                    $('#scheduleForm').find('input[name=amount]').val(fixed_amount);
                    amountModal.find('input[name=user_amount]').val(fixed_amount);

                    amountModal.modal('show');


                    $('.userAmountSubmit').on('click', function () {
                        var user_amount = 0;

                        if (fixed_amount == 0) {
                            user_amount = amountModal.find('input[name=user_amount]').val();
                        }
                        var wallet_type = amountModal.find('select[name=wallet_type]').val();
                        // reset behaviour
                        $('.planSelectBtn').parents('.single-price').removeClass('active');
                        $('.planSelectBtn').text("@lang('schedules.Select')");
                        // $('#scheduleForm').find('input[name=amount]').val(user_amount);
                        $('#scheduleForm').find('input[name=wallet_type]').val(wallet_type);
                        $('#scheduleForm').find('input[name=plan]').val(plan_id);
                        planBtn.parents('.single-price').addClass('active');

                        planBtn.text("@lang('schedules.Selected')");

                    });

                });

            }

        });
    </script>

    @if (Session::has('alertSchedule'))
        <script type="text/javascript">
            $(document).ready(function () {
                swal({
                    title: "{{ Session::get('alertSchedule') }}",
                    icon: "warning",
                    buttons: ["@lang('schedules.OK')", "@lang('deposit.Recharge Now')"],
                }).then((value) => {
                    if (value) {
                        window.location.href = "{{ route('user.deposit') }}";
                    } else {
                        sessionStorage.removeItem('reservation');
                    }
                });
            });
        </script>
    @endif
@stop
