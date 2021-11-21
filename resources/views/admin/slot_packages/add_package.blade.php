@extends('admin.layout.master')

@section('css')
    <!-- DataTables -->

@endsection
@section('body')

    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
    <!-- /.card -->
    <div class="row">
        <div class="col-md-12">

            <div class="pull-right mb-2">

                <a class="btn btn-success"
                   href="{{route('slotpackages.index')}}"><i
                        class="icon fa fa-language"></i>Packages List </a>

            </div>
        </div>
        <div class="col-md-12">


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add New Package</h3>
                </div>
                <!-- /.card-header -->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>

                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div id="delete_message" class="alert alert-warning " style="display: none">
                    <p>Package Deleted Successfully</p>
                </div>
                <div id="usuccess_message" class="alert alert-success " style="display: none">
                    <p>Package Record Updated Successfully </p>
                </div>
                <form method="post" id="add_form" action=" {{route('slotpackages.store')}}"
                      enctype="multipart/form-data">

                    <div class="card-body">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Title Portuguese</label>
                            <div class="col-md-10">
                                <input type="text" name="title_pt_br" id="title" value="{{old('title_pt_br')}}"
                                       class="form-control  @error('title') is-invalid   @enderror"
                                       placeholder="Title of Package in Portuguese">
                                {{--                                    @error('title')--}}
                                {{--                                    <div class="alert alert-danger">{{ $message }}</div>--}}
                                {{--                                    @enderror--}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Title Japaneese</label>
                            <div class="col-md-10">
                                <input type="text" name="title_ja" id="title" value="{{old('title_ja')}}"
                                       class="form-control  @error('title') is-invalid   @enderror"
                                       placeholder="Title of Package in Japaneese">
                                {{--                                    @error('title')--}}
                                {{--                                    <div class="alert alert-danger">{{ $message }}</div>--}}
                                {{--                                    @enderror--}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Allowed Slots</label>
                            <div class="col-md-10">
                                <input type="number" name="allowed_slots" id="allowed_slots"
                                       value="{{old('allowed_slots')}}"
                                       class="form-control @error('allowed_slots') is-invalid   @enderror"
                                       placeholder="Allowed Slots for this Package">
                                {{--                                    @error('title')--}}
                                {{--                                    <div class="alert alert-danger">{{ $message }}</div>--}}
                                {{--                                    @enderror--}}
                            </div>
                        </div>
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-md-2 col-form-label">Allowed Withdraws Per Day</label>--}}
{{--                            <div class="col-md-10">--}}
{{--                                <input type="number" name="allowed_withdraws_per_day" id="allowed_withdraws_per_day"--}}
{{--                                       class=" form-control @error('allowed_withdraws_per_day') is-valid @enderror "--}}
{{--                                       value="{{old('allowed_withdraws_per_day')}}"--}}
{{--                                       placeholder="How much Withdraws Request a user can send" required>--}}
{{--                                --}}{{--                                    @error('referral_bonus_amount_error')--}}
{{--                                --}}{{--                                    <div class="alert alert-danger">{{$message}}</div>--}}
{{--                                --}}{{--                                    @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group row">
                            <div class="col-md-2"></div>
                            <div class="col-md-3">
                                <label class="col-md-12 col-form-label">Minimum Day to Withdraw Slot</label>
                                <input type="number" name="withdraw_time" id="withdraw_time"
                                       class="form-control @error('withdraw_time') is-valid @enderror"
                                       placeholder="Minimum Day to Withdraw a Slot" value="{{old('withdraw_time')}}"
                                       required>
                                {{--                                    @error('per_ad')--}}
                                {{--                                    <div class="alert alert-danger">{{$message}}</div>--}}
                                {{--                                    @enderror--}}
                            </div>


                            <div class="col-md-3">
                                <label class="col-md-12 col-form-label ">Amount {{$general->currency_sym}}</label>
                                <input type="number" name="amount" id="amount" value="{{old('amount')}}"
                                       class="form-control @error('amount') is-valid @enderror" placeholder="Amount"
                                       required>
                                {{--                                    @error('amount')--}}
                                {{--                                    <div class="alert alert-danger">{{$message}}</div>--}}
                                {{--                                    @enderror--}}
                            </div>


                            <div class="col-md-3">
                                <label class="col-md-12 col-form-label ">Slot Validate Upto Days</label>
                                <input type="number" name="valid_for_days" id="valid_for_days"
                                       value="{{old('valid_for_days')}}"
                                       class="form-control @error('valid_for_days') is-valid @enderror"
                                       placeholder="Enter Number of Days">
                                {{--                                    @error('validate_upto_error')--}}
                                {{--                                    <div class="alert-danger alert">{{$message}}</div>--}}
                                {{--                                    @enderror--}}
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="btn_save" class="btn btn-info">Save</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>

            </div>
            <!-- /.card -->
        </div>
    </div>
    </div>

@endsection
@section('script')
    <script src="{{asset('assets/admin/plugins/select2/js/select2.full.min.js')}}"></script>

    <script>
        {{--$('#add_form').on('submit', function (e) {--}}
        {{--    e.preventDefault();--}}

        {{--    var cover_img = $('#cover_img').val();--}}
        {{--    // var cover_img = $('#cover_img').prop('files')[0];--}}
        {{--    // var form_data = new FormData();--}}
        {{--    // form_data.append('file', cover_img);--}}
        {{--    $.ajax({--}}
        {{--            cache: false,--}}
        {{--            contentType: false,--}}
        {{--            processData: false,--}}
        {{--            url: " {{route('Packages.store')}}",--}}

        {{--            method: "post",--}}
        {{--            // data: {--}}
        {{--            //     title: title, price: price, ISBN: ISBN, Staff_id: Staff_id,--}}
        {{--            //     Supplier_id: Supplier_id, Publisher_id: Publisher_id,--}}
        {{--            //     category_id: category_id, subject: subject, number_of_coypies: number_of_coypies,--}}
        {{--            //     cover_img: cover_img--}}
        {{--            // },--}}
        {{--            // data: $('#add_form').serialize(),--}}
        {{--            data: new FormData(this),--}}

        {{--            // beforeSend: (function () {--}}
        {{--            //     $('#title_error').html('');--}}
        {{--            //     $('#subject_error').html('');--}}
        {{--            //     $('#price_error').html('');--}}
        {{--            //     $('#ISBN_error').html('');--}}
        {{--            //     $('#Publisher_id_error').html('');--}}
        {{--            //     $('#Staff_id_error').html('');--}}
        {{--            //     $('#Supplier_id_error').html('');--}}
        {{--            //     $('#number_of_coypies_error').html('');--}}
        {{--            //     $('#category_id_error').html('');--}}
        {{--            //     $('#cover_img_error').html('');--}}
        {{--            //--}}
        {{--            // }),--}}

        {{--            success: function (data) {--}}

        {{--                $('#amount').val('');--}}
        {{--                $('#title').val('');--}}
        {{--                $('#daily_ads').val('');--}}
        {{--                $('#referral_bonus_amount').val('');--}}
        {{--                $('#amount').val('');--}}
        {{--                $('#per_ad').val('');--}}
        {{--                $('#validate_upto').val('');--}}


        {{--                $('#success_message').html(data.message);--}}

        {{--                // $('#Modal_Add').modal('hide');--}}
        {{--                // load_books();	//call function show all books--}}

        {{--            }--}}
        {{--            ,--}}
        {{--            error: function (data) {--}}
        {{--                if (data.status === 422) {--}}
        {{--                    var errors = $.parseJSON(data.responseText);--}}
        {{--                    $.each(errors, function (key, value) {--}}
        {{--                        // $('#category_id_error').show().append(value + "<br/>"); //this is my div with messages--}}
        {{--                        if ($.isPlainObject(value)) {--}}
        {{--                            $.each(value, function (key, value) {--}}

        {{--                                if (key == 'category_id') {--}}
        {{--                                    $('#category_id_error').html(value);--}}
        {{--                                }--}}
        {{--                                if (key == 'title') {--}}
        {{--                                    $('#title_error').html(value);--}}
        {{--                                }--}}
        {{--                                if (key == 'price') {--}}
        {{--                                    $('#price_error').html(value);--}}
        {{--                                }--}}
        {{--                                if (key == 'Staff_id') {--}}
        {{--                                    $('#Staff_id_error').html(value);--}}
        {{--                                }--}}
        {{--                                if (key == 'Publisher_id') {--}}
        {{--                                    $('#Publisher_id_error').html(value);--}}
        {{--                                }--}}
        {{--                                if (key == 'subject') {--}}
        {{--                                    $('#subject_error').html(value);--}}
        {{--                                }--}}
        {{--                                if (key == 'Supplier_id') {--}}
        {{--                                    $('#Supplier_id_error').html(value);--}}
        {{--                                }--}}
        {{--                                if (key == 'number_of_coypies') {--}}
        {{--                                    $('#number_of_coypies_error').html(value);--}}
        {{--                                }--}}
        {{--                                if (key == 'category_id') {--}}
        {{--                                    $('#category_id_error').html(value);--}}
        {{--                                }--}}
        {{--                                if (key == 'cover_img') {--}}
        {{--                                    $('#cover_img_error').html(value);--}}
        {{--                                }--}}
        {{--                                if (key == 'ISBN') {--}}
        {{--                                    $('#ISBN_error').html(value);--}}
        {{--                                }--}}
        {{--                                // $('#category_id_error').show().append(value + "<br/>");--}}
        {{--                            });--}}

        {{--                        }--}}

        {{--                    });--}}
        {{--                }--}}

        {{--            }--}}

        {{--        }--}}
        {{--    );--}}
        {{--})--}}

    </script>
@endsection
