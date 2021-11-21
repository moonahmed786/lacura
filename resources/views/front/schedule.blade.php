@extends('layouts.master')

@section('SEO')
    <meta name="description" content="予約後に希望の時間と都道府県を選択してください。">
    <meta name="keywords" content="予約、相談、時間、都道府県、病気の治癒、魂の浄化、精神的な妨害、解放と精神的保護">
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
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="100" />
@stop

@section('titulo')
    <title>La Cura - 奇跡 {{  '| '.__($pt) }}</title>
@stop

@section('content')
    @if(activeTemp()  == 1)

        <!-- page title begin-->
        <div class="page-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6">
                        <h2>{{ __($pt) }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- page title end -->

        <!-- schedule begin -->
        <div id="investors">
            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-xl-6 col-lg-6">
                        <div class="section-title text-center">
                            <h2>{{ __($general->schedule_title) }}</h2>
                        </div>
                    </div>
                </div>
                @if (count($errors) > 0)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong class="col-md-12"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> @lang('Alert!')</strong>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                <div class="row" id="chooseSchedule">
                    <div class="col-xl-12 col-lg-12 text-danger" id="schedule-error"></div>

                    <div class="col-xl-6 col-lg-4">
                        <div id="datepicker"></div>
                    </div>
                    <div class="col-xl-6 col-lg-8">
                        <div class="row">

                            <div class="col-xl-12">
                                <div id="availableTime">
                                    <p class="text-muted">@lang('Select a date first, to see available schedule')</p>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <label class="font-weight-bold mt-2">@lang('Choose the city of service')</label>
                                    <select name="city" id="city_select" class="form-control">


                                        <?php $i = 0; ?>
                                        @foreach($general->schedule_cities as $key => $city)
                                            <?php $i += 1 ?>
                                    <option  value="<?php echo $i?>">{{ __($city) }}</option>
                                        @endforeach
                                    </select>



                                <br><br>
                        <img id="city_image" src="https://coisasdojapao.com/wp-content/uploads/2017/03/Tokyo-Main-Image.jpg" style="max-width:500px;heigth:auto;border:10px solid #D1D1D1"  alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">

                <label for="">
                    現在の健康状態を知らせ、喫煙、飲酒、薬などの依存症があるかどうかを知らせます</label>
           <textarea  name="yourHealth" class="form-control" maxlength="500" placeholder="">

                       </textarea>
            </div>
            <div id="choosePlan">
                @include('front.partials.choose_plan')
            </div>

            <div class="row">
                <div class="col-md-12 text-center">

                    <button class="btn btn-primary" id="choosePlanBtn">@lang('Next')</button>
                    <form action="{{ route('schedule.store') }}" id="scheduleForm" method="POST">
                        @csrf
                        <input type="hidden" name="date">
                        <input type="hidden" name="time">
                        <input type="hidden" name="plan">
                        <input type="hidden" name="amount">
                        <input type="hidden" name="wallet_type">
                        <input type="hidden" name="city">
                    </form>
                    <button type="button" class="btn btn-primary" id="scheduleFormSubmit">@lang('Reserve')</button>
{{--                    <button type="button" class="btn btn-primary" id="scheduleFormSubmit">@lang('Reserve')</button>--}}

                </div>
            </div>


        </div>
    </div>
        <!-- Schedule end -->

        @auth
            <!-- Schedule List begin -->
            <div class="transaction">
                <div class="container">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 wow zoomIn">
                            <div class="transaction-area">

                        <div class="tab-content" >
                            <div class="tab-pane fade show active" >

                                        <table class="table text-center">
                                            <thead>
                                            <tr>
                                                <th scope="col">@lang('Date')</th>
                                                <th scope="col">@lang('Time')</th>
                                                <th scope="col">@lang('Charge')</th>
                                                <th scope="col">@lang('Remark')</th>
                                                <th scope="col">@lang('Status')</th>
                                                <th scope="col">@lang('Action')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($schedules)==0)
                                                <tr>
                                                    <td colspan="8" class="text-center">@lang('No Data Available')</td>
                                                </tr>
                                            @endif
                                            @foreach($schedules as $data)
                                                <tr>
                                                    <td>{{ \Carbon\Carbon::parse($data->date)->format('M d, Y') }}</td>
                                            <td>{{ $data->time }}:00 - {{ $data->time + 1 }}:00 </td>
                                                    <td>{{ $general->currency_sym }}{{ $data->charge }}</td>
                                                    <td>{{ $data->remark ?? '---' }}</td>
                                                    <td>
                                                        @if(\Carbon\Carbon::parse($data->date)->lessThan(\Carbon\Carbon::today()))
                                                            <span class="badge badge-info">@lang('Ended')</span>
                                                        @elseif($data->status == 0)
                                                            <span class="badge badge-danger">@lang('Canceled')</span>
                                                        @else
                                                            <span class="badge badge-primary">@lang('Up-Comming')</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($data->status != 0 && \Carbon\Carbon::parse($data->date)->greaterThan(\Carbon\Carbon::today()))
                                                <button type="button" class="btn btn-success btn-icon cancelBtn" data-id="{{ $data->id }}"><i class="fa fa-trash"></i> @lang('Cancel')</button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{$schedules->links()}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Schedule List end -->
        @endauth
        {{-- cancel Schedule Modal --}}
     <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">@lang('Cancel Schedule')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form method="POST" action="{{ route('user.schedule.cancel') }}">
                        @csrf
                <input type="hidden" name="id" >
                        <div class="modal-body">
                            <p class="text-info">@lang('Are you sure want to cancel this schedule ?')</p>
                            <div class="item text-center"></div>
                        </div>
                        <div class="col-md-12">
                            <label for="remark">@lang('Reason')</label>
                    <textarea rows="5" class="form-control" name="remark" placeholder="@lang('Share your reason for cancellation')"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger" id="cancelBtn">@lang('Cancel')</button>
                            <button type="button" class="btn btn-muted" data-dismiss="modal">@lang('Close')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

@stop
@section('style')
    <style>
        .price {
            background: transparent;
            padding: 0;
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
        background: -webkit-linear-gradient(-30deg, #052157 0%, #91039f 100%); }

        .price .single-price .part-top a {
            border: 1px solid #fff; }
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
        $(document).ready(function(){
            $('#city_select').change(function(){
                city  = $(this).val()



                switch (city) {
                    case "1":
                        $('#city_image').attr('src', 'https://coisasdojapao.com/wp-content/uploads/2017/03/Tokyo-Main-Image.jpg');
                    case "2":
                        $('#city_image').attr('src', 'https://media.gettyimages.com/photos/osaka-shinsekai-at-night-tsutenkaku-tower-picture-id1071391480?s=612x612');
                    case "3":
                        $('#city_image').attr('src', 'https://photo980x880.mnstatic.com/54d03175e4ef188ac07889e4f3595738/castillo-de-himeji-10078549.jpg');
                    case "4":
                        $('#city_image').attr('src', 'https://photo980x880.mnstatic.com/90626ba57049d5860453bccbd3b91908/templo-de-osu-kannon-7462674.jpg');
                    case "5":
                        $('#city_image').attr('src', 'https://i.pinimg.com/originals/e7/32/00/e7320052e45e8c798f9838f5645f4c11.jpg');
                    case "6":
                        $('#city_image').attr('src', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxirUZ3uqTk256oEEEmEpzdLi4btirKyHeRg&usqp=CAU')
                    case "7":
                        $('#city_image').attr('src', 'https://wallpaperaccess.com/full/20333.jpg')






                }

            })
        });
        var app = new Vue({
            el: '#app',
        data:{
          newdata:{
                    subscribe_email: ''
                }
            },
        methods:{
            modalData(val){
                    $('#depoModal').modal('show');
                    this.showData = JSON.parse(val);
                },
            subsribe(){
                    var input = this.newdata;
                    axios.post('{{route('subscriber.store')}}', input).then(function (res) {
                    if (res.data.success == true){
                        swal(res.data.message,"", "success");
                            app.newdata.subscribe_email = '';
                    }else {
                        swal(res.data.message,"", "warning");
                        }
                    });
                },
                selectSchedule(elem) {

                }
        },mounted() {
                // var tomrrow = new Date(new Date().getTime() + 86400000);
                var tomrrow = new Date(new Date().setDate(new Date().getDate() + 7));
                var selectedDate = '';
                var time = '';
                var city = '';
                $('#datepicker').datepicker({
                    dateFormat: 'dd-mm-yy',
                minDate: tomrrow ,
                onSelect: function(date) {
                        selectedDate = date;
                        $("#availableTime").html("<img src='{{ asset('assets/images/load.gif') }}' style='width:40px;height:40px;margin: 1rem auto;'>");
                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            url: "{{ route('schedule') }}",
                            type: 'POST',
                            data: {'date': date},
                        success: function(response) {
                            if(response.selectedDate) {
                                    swal(response.date.toString(), '', 'warning');
                            }else if(response.time) {
                                    swal(response.time.toString(), '', 'warning');
                            }else if(response.success) {

                                    var timeWrapper = $('#availableTime');
                                    var reserve_time = $.parseJSON(response.reserve_time);

                                    var startTime = 8;

                                    timeWrapper.html('<ul class="list-inline">');
                                if(reserve_time.length > 0) {

                                    for(var i=0; i<11; i+=2) {
                                            var reservationTime = parseInt(startTime + i);
                                        if(reserve_time.filter(x => x.time == reservationTime).length > 0 ){
                                            timeWrapper.append('<li class="list-inline-item bg-danger" data-val="'+ reservationTime +'"><b>'+ reservationTime +':00 - '+ parseInt(reservationTime + 1 ) +':00</b></li>');
                                        }else{
                                            timeWrapper.append('<li class="list-inline-item" data-val="'+ reservationTime +'"><b>'+ reservationTime +':00 - '+ parseInt(reservationTime + 1 ) +':00</b></li>');
                                            }
                                        }
                                }else{
                                    for(var i=0; i<11; i+=2) {
                                        timeWrapper.append('<li class="list-inline-item" data-val="'+ parseInt(startTime + i) +'"><b>'+ parseInt(startTime + i) +':00 - '+ parseInt(startTime + i + 2 ) +':00</b></li>');
                                        }

                                    }
                                    timeWrapper.append('</ul>');
                                }
                            },
                        });
                    }
                });

            $('#availableTime').on('click', '.list-inline-item', function() {
                    $('#availableTime .list-inline-item').removeClass('bg-primary');
                    $(this).addClass('bg-primary');
                    time = $('#availableTime .list-inline-item.bg-primary').data('val');
                    $('#schedule-error').html('');
                });

            $('select[name=city]').on('change', function() {
                    city = $(this).val();
                }).change();

            $('#scheduleFormSubmit').on('click', function() {
                    var form = $('#scheduleForm');
                if(!selectedDate || !time) {
                        $('#schedule-error').html('@lang("Please select date and time for schedule")');
                        return false;
                }else if(!city) {
                        $('#schedule-error').html('@lang("Please choose the city of service")');
                        return false;
                    }
                    form.find('input[name=date]').val(selectedDate);
                    form.find('input[name=time]').val(time);
                    form.find('input[name=city]').val(city);
                    form.submit();
                });

                // cancel
            $('.cancelBtn').on('click', function() {
                    var modal = $('#cancelModal');
                    var id = $(this).data('id');
                    modal.find('input[name=id]').val(id);
                    modal.modal('show');
                });

                // Default - hide plans
                $('#scheduleFormSubmit').hide();
                $('#choosePlan').hide();

            $('#choosePlanBtn').on('click', function() {
                if(!selectedDate || !time) {
                        $('#schedule-error').html('@lang("Please select date and time for schedule")');
                        return false;
                }else if(!city) {
                        $('#schedule-error').html('@lang("Please choose the city of service")');
                        return false;
                    }
                    $('#chooseSchedule').hide();
                    $('#choosePlan').show();
                    $('#choosePlanBtn').hide();
                    $('#scheduleFormSubmit').show();
                });

            $('.planSelectBtn').on('click', function() {
                    var planBtn = $(this);

                    var amountModal = $('#amountModal');
                    var fixed_amount = planBtn.data('amount');
                    var plan_id = planBtn.data('id');
                    var userAmountInput = amountModal.find('input[name=user_amount]');

                if(fixed_amount == 0) {
                        $('#userAmountInput').show();
                }else{
                        $('#userAmountInput').hide();
                    }
                    amountModal.modal('show');


                $('.userAmountSubmit').on('click', function() {
                        var user_amount = 0;

                    if(fixed_amount == 0) {
                            user_amount = amountModal.find('input[name=user_amount]').val();
                        }
                        var wallet_type = amountModal.find('select[name=wallet_type]').val();
                        // reset behaviour
                        $('.planSelectBtn').parents('.single-price').removeClass('active');
                        $('.planSelectBtn').text("@lang('Select')");
                        $('#scheduleForm').find('input[name=amount]').val(user_amount);
                        $('#scheduleForm').find('input[name=wallet_type]').val(wallet_type);
                        $('#scheduleForm').find('input[name=plan]').val(plan_id);
                        planBtn.parents('.single-price').addClass('active');

                        planBtn.text("@lang('Selected')");

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
                    buttons: ["@lang('OK')", "@lang('deposit.Recharge Now')"],
                }).then((value) => {
                if(value) {
                        window.location.href = "{{ route('user.deposit') }}";
                }else{
                        sessionStorage.removeItem('reservation');
                    }
                });
            });
        </script>
    @endif
@stop
