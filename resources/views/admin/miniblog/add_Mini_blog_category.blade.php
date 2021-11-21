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
                    <form role="form" method="POST" action="{{route('StoreBlogCategories')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="key" value="about">
                        <div class="form-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <h1>
                                            Japaneese
                                        </h1>
                                        <strong class="mr-4">Title </strong>
                                        <input type="text" class="form-control mr-4" name="title"
                                               value="" placeholder="Title In Japaneese">
                                        <strong class="mr-4">Status </strong>

                                        <select name="status" class="form-control mr-4" id="status">
                                            <option value="1">active</option>
                                            <option value="0">DeActive</option>

                                        </select>

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <h1>
                                            Portuguese
                                        </h1>
                                        <strong class="mr-4">Title </strong>
                                        <input type="text" class="form-control mr-4" name="title_pt"
                                               value="" placeholder="Title In Portuguese">


                                    </div>
                                </div>


                            </div>


                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Add</button>
                        </div>
                    </form>


                </div>
            </div>
            <div class="tile">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Title Japaneese</th>
                            <th>Title Portuguese</th>
                            <th>Count</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blog_cat as $cat)
                            <tr>
                                <td>{{$cat->title}}</td>
                                <td>{{$cat->title_pt}}</td>
                                <td>{{$cat->cont}}</td>
                                <td>
                                    @if($cat->status == 1)
                                        <div class="btn btn-success">Active</div>
                                    @else
                                        <div class="btn btn-danger">DeActive</div>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
