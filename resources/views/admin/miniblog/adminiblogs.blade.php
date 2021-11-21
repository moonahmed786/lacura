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

            <div class="tile">
                <div class="tile-body">
                    <form role="form" method="POST" action="{{ route('StoreBlog')}}" enctype="multipart/form-data">
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
                            <strong>Title (Portugese)</strong>
                            <input type="text" class="form-control" name="title_pt" value="{{ old('title') }}">

                        </div>
                        <div class="form-group">
                            <strong>Title(Japanese)</strong>
                            <input type="text" class="form-control" name="title_ja" value="{{ old('title') }}">

                        </div>


                        <div class="form-group">
                            <strong>Details (Portugese)</strong>
                            <textarea class="form-control ckEdit" name="pt_text" rows="15"></textarea>


                        </div>
                        <div class="form-group">
                            <strong>Details(Japanese)</strong>
                            <textarea class="form-control ckEdit" name="ja_text" rows="15"></textarea>


                        </div>
                        <div class="form-group">
                            <label><strong>Tags</strong> <small class="text-info">(optional)</small></label>
                            <input type="text" name="tags" class="form-control" value="{{ old('tags') }}"
                                   placeholder="Enter Comma Separated Tags">
                        </div>
                        <div class="row">


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><strong>Status</strong> <small class="text-info"></small></label>
                                    <select name="status" class="form-control">
                                        <option>Select</option>
                                        <option value="1">Active</option>
                                        <option value="0">In Active</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><strong>Category</strong> <small class="text-info"></small></label>
                                    <select name="category_id" class="form-control">

                                        @foreach($blog_cat as $cat)
                                            <option value="{{$cat->id}}">
                                                {{$cat->title}} || {{$cat->title_pt}}
                                            </option>

                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
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
