@extends('admin.layout.master')
@section('body')


    <div class="row">
        @if (count($errors) > 0)

                <div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong class="col-md-12"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alert!</strong>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                </div>

        @endif
        <div class="col-md-12">
            <div class="tile">

                <div class="tile-title ">
                    Create New Plan
                    <a href="{{route('plan.index')}}" class="btn btn-success btn-md pull-right ">
                        <i class="fa fa-eye"></i> All Plan
                    </a>
                    <br>
                </div>

                <div class="tile-body">

                    <form method="post" class="form-horizontal" action="{{route('plan.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-body">

                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <strong>Plan Name</strong>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <strong>Image</strong>
                                    <input type="file" class="form-control" name="image">
                                    <p class="text-info">Image will be resized into 290x290px</p>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <strong>Amount</strong>
                                    <input data-toggle="toggle" id="amount" class="amount" data-onstyle="success"  data-offstyle="info" data-on="Fixed" data-off="Range" data-width="100%" type="checkbox" name="amount_type" >
                                </div>

                                <div class="form-group offman col-md-3">
                                    <strong>Minimum Amount</strong>
                                    <div class="input-group">
                                        <input type="text" class="form-control"  name="minimum">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">{{$general->currency_sym}}</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group offman col-md-3" >
                                    <strong>Maximum Amount</strong>
                                    <div class="input-group">
                                        <input type="text" class="form-control"  name="maximum">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">{{$general->currency_sym}}</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group onman col-md-3" style="display: none">
                                    <strong>Fixed Amount</strong>
                                    <div class="input-group">
                                        <input type="text" class="form-control"  name="amount">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">{{$general->currency_sym}}</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <strong>Time</strong>
                                    <select class="form-control" name="times">
                                        @foreach($time as $data)
                                            <option value="{{$data->time}}">{{$data->name}}</option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-3">
                                    <strong>Return /Interest</strong>
                                    <div class="input-group">
                                        <input type="text" class="form-control"  name="interest"  required>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <select name="interest_status">
                                                    <option value="%">%</option>
                                                    <option value="{{$general->currency_sym}}">{{$general->currency_sym}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <strong>Return Interest</strong>
                                    <input data-toggle="toggle" id="lifetime" class="lifetime" data-onstyle="success"  data-offstyle="danger" data-on="Times Wise" data-off="Lifetime" data-width="100%" type="checkbox" name="lifetime_status" >
                                </div>

                                <div class="form-group return col-md-3" style="display: none">
                                    <div class="form-group">
                                        <strong>Return Times</strong>
                                        <input type="text" class="form-control" name="repeat_time">
                                    </div>
                                </div>

                                <div class="form-group col-md-3" id="capitalBack">
                                    <strong>Capital Back</strong>
                                    <input data-toggle="toggle" data-onstyle="success"  data-offstyle="danger" data-on="Yes" data-off="No" data-width="100%" type="checkbox" name="capital_back_status" >
                                </div>



                            </div>
                            <div class="col-md-12 text-white" style="background: #052157;margin: 2rem 0;">
                                <h3 class="p-1">More Fields</h3>
                            </div>
                            
                            <div class="form-row m-2 border p-4">
                                <div class="col-md-12" id="newFieldContainer">
                                    <div class="form-row pb-2 field">
                                        <div class="form-gruop col-md-4">
                                            <input type="text" class="form-control" name="extra[1][key]" placeholder="key">
                                        </div>
                                        <div class="form-gruop col-md-4">
                                            <input type="text" class="form-control" name="extra[1][value]" placeholder="value">
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-success btn-icon newFieldBtn">
                                                <i class="fa fa-plus"></i>
                                                Add More
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">

                            <button type="submit" class="btn btn-primary btn-block">Save</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@stop
@section('script')
    <script>
       $(document).ready(function () {
        $('.newFieldBtn').on('click', function() {
            var cnt = $('.field').length + 1;

            var temp = `<div class="form-row pb-2 field">
                <div class="form-gruop col-md-4">
                    <input type="text" class="form-control" name="extra[${cnt}][key]" placeholder="key">
                </div>
                <div class="form-gruop col-md-4">
                    <input type="text" class="form-control" name="extra[${cnt}][value]" placeholder="value">
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-danger btn-icon removeFieldBtn">
                        <i class="fa fa-minus"></i>
                        Remove
                    </button>
                </div>
            </div>`;
            $('#newFieldContainer').append(temp);

        });

        $('.form-row').on('click', '.removeFieldBtn', function() {
            $(this).closest('.field').remove();
        });
        $( '.removeFieldBtn').on('click', function() {
            $(this).closest('.field').remove();
        });

           $('#amount').on('change', function () {
               var isCheck = $(this).prop('checked');
               if (isCheck == false)
               {
                    $('.offman').css('display', 'block');
                    $('.onman').css('display', 'none');
               }else {
                   $('.offman').css('display', 'none');
                   $('.onman').css('display', 'block');
               }
           });

           $('#lifetime').on('change', function () {
               var isCheck = $(this).prop('checked');
               if (isCheck == true)
               {
                    $('.return').css('display', 'block');

               }else {

                   $('.return').css('display', 'none');

               }
           });

       })
    </script>
@stop
