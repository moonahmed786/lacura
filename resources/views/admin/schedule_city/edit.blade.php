@extends('admin.layout.master')

@section('body')
    <div class="row">
        <div class="col-md-12">

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

            <div class="tile">
                <div class="tile-body">
                    <form role="form" method="POST" action="{{route('schedule_city.update', $know->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <div class="fileinput fileinput-new" data-provides="fileinput">

                                <div class="fileinput-new thumbnail" style="max-width: 100%; max-height:100%;">
                                    <img style="width: 215px" src="{{ asset('assets/images/schedule_city/'.$know->image) }}" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 100%; max-height:100%;"> </div>
                                <div>
                                        <span class="btn btn-success btn-file">
                                            <span class="fileinput-new"> Upload Photo </span>
                                            <span class="fileinput-exists"> Change </span>
                                            <input type="file" name="image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>Name (Japaneese)</strong>
                            <input type="text" class="form-control" name="city_name_ja" value="{{$know->city_name_ja}}">
                        </div>
  <div class="form-group">
                            <strong>Name (Portuguese)</strong>
                            <input type="text" class="form-control" name="city_name_pt_br" value="{{$know->city_name_pt_br}}">
                        </div>





                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
@section('script')
<script src="{{ asset('assets/admin/js/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/admin/js/ckeditor/jquery.js') }}"></script>
<script> CKEDITOR.replaceClass = 'ckEdit' </script>
@stop
