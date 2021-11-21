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
                    <form role="form" method="POST" action="{{route('knowledge-base.update', $know->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <div class="fileinput fileinput-new" data-provides="fileinput">

                                <div class="fileinput-new thumbnail" style="max-width: 100%; max-height:100%;">
                                    <img style="width: 215px" src="{{ asset('assets/images/blog/'.$know->image) }}" alt="...">
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
                            <strong>Title (Japaneese)</strong>
                            <input type="text" class="form-control" name="title" value="{{$know->title}}">
                        </div>
  <div class="form-group">
                            <strong>Title (Portuguese)</strong>
                            <input type="text" class="form-control" name="header_pt" value="{{$know->header_pt}}">
                        </div>

                        <div class="form-group">
                            <label><strong>URL</strong> <small class="text-info">(optional)</small></label>
                            <input type="text" name="link" class="form-control" value="{{ $know->link }}">
                        </div>

                        <div class="form-group">
                            <label><strong>Details</strong> <small class="text-info">(Japaneese)</small></label>
                            <textarea class="form-control " name="text" rows="15">{{$know->text }}</textarea>

                        </div>

                        <div class="form-group">
                            <label><strong>Details</strong> <small class="text-info">(Portuguese)</small></label>
                            <textarea class="form-control " name="textpt" rows="15">{{$know->textpt }}</textarea>

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
