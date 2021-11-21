@extends('admin.layout.master')

@section('body')
    <div class="row">
        <div class="col-md-12">

            @if (count($errors) > 0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong class="col-md-12"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                Alert!</strong>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
                <form role="form" method="POST" action="{{route('schedule_city.store')}}"
                      enctype="multipart/form-data">
            <div class="tile">
                <div class="tile-body">

                        @csrf
                        <div class="form-group">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 100%; max-height:100%;">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"
                                     style="max-width: 100%; max-height:100%;"></div>
                                <div>
                                        <span class="btn btn-success btn-file">
                                            <span class="fileinput-new"> Upload Photo </span>
                                            <span class="fileinput-exists"> Change </span>
                                            <input type="file" name="image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                        Remove </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>City Name (Japanese)</strong>
                            <input type="text" class="form-control" name="city_name_ja" value="{{ old('city_name_ja') }}">
                        </div>
                        <strong>City Name (Portuguese)</strong>
                        <input type="text" class="form-control" name="city_name_pt_br" value="{{old('city_name_pt_br')}}">
                </div>





                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>

            </div>
                </form>
        </div>
    </div>


@stop
