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
                <div class="">
                    <div class="pull-right mb-2">

                        <a class="btn btn-success" href="{{route('module.language-manage',['spiritual','Spiritual Purification Page','spiritual-purification.front'])}}"><i class="icon fa fa-language"></i>Spiritual Purification Page Translations </a>

                    </div>
                </div>
        </div>
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <form role="form" method="POST" action="{{route('page.update')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="key" value="spiritual">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <h1>
                                        Japaneese
                                    </h1>
                                    <strong class="mr-4">Title </strong>
                                    <input type="text" class="form-control mr-4" name="title"
                                           value="{{ $page->title }}" placeholder="Title In Japaneese">
                                    <strong class="mr-4">Description </strong>
                                    <input type="text" class="form-control mr-4" name="description"
                                           value="{{ $page->description }}" placeholder="Description In Japaneese">


                                    <strong class="mr-4">keywords </strong>
                                    <input type="text" class="form-control mr-4" name="keywords"
                                           value="{{ $page->keywords }}" placeholder="keywords In Japaneese">

                                    <strong class="mr-4">Header Text </strong>
                                    <input type="text" class="form-control mr-4" name="header_text"
                                           value="{{ $page->header_text }}" placeholder="Header Text In Japaneese">


                                </div>
                                <div class="col-md-6 mb-3">
                                    <h1>
                                        Portuguese
                                    </h1>
                                    <strong class="mr-4">Title </strong>
                                    <input type="text" class="form-control mr-4" name="title_pt"
                                           value="{{ $page->title_pt }}" placeholder="Title In Portuguese">

                                    <strong class="mr-4">Description </strong>
                                    <input type="text" class="form-control mr-4" name="descriptions_pt"
                                           value="{{ $page->descriptions_pt }}" placeholder="Description In Portuguese">

                                    <strong class="mr-4">keywords </strong>
                                    <input type="text" class="form-control mr-4" name="keywords_pt"
                                           value="{{ $page->keywords_pt }}" placeholder="keywords In Portuguese">


                                    <strong class="mr-4">Header Text </strong>
                                    <input type="text" class="form-control mr-4" name="header_text_pt"
                                           value="{{ $page->header_text_pt }}" placeholder="Header Text In Portuguese">



                                </div>
                            </div>

                            <div class="form-group">
                                <h4>Japaneese</h4>
                                <textarea name="textja" class="ckEdit" rows="10">{{ $page->ja ?? '' }}</textarea>
                            </div>

                            <div class="form-group">
                                <h4>Portuguese</h4>
                                <textarea name="textpt" class="ckEdit" rows="10">{{ $page->pt ?? '' }}</textarea>
                            </div>

                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Update</button>
                        </div>
                    </form>
                </div>
{{--                <div class="tableDiv" style="padding:20px;">--}}
{{--                    <h2>Page Comments</h2>--}}
{{--                    <table class="table table-responsive">--}}
{{--                        <thead>--}}
{{--                        <th>Id</th>--}}
{{--                        <th>Comment</th>--}}
{{--                        <th>Reply</th>--}}
{{--                        <th>Action</th>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach($comments as $comment)--}}
{{--                            <tr>--}}
{{--                                <td>{{$comment->id}}</td>--}}
{{--                                <td>{{$comment->comment}}</td>--}}
{{--                                <td>@php $allrepl = \App\Http\Controllers\PageController::get_replies($comment->id);--}}
{{--                                    if( $allrepl !=null){--}}
{{--                                        foreach($allrepl as $reply){--}}
{{--                                            echo $reply->comment.'<br>';--}}
{{--                                        }--}}
{{--                                    }--}}
{{--                                    @endphp--}}
{{--                                </td>--}}
{{--                                <td><a href="#satModal{{$comment->id}}" data-toggle="modal" class="btn btn-primary">Change--}}
{{--                                        Status</a></td>--}}
{{--                                <td></td>--}}
{{--                                <td><a href="#viewModal{{$comment->id}}" data-toggle="modal" class="btn btn-primary">View</a>--}}
{{--                                </td>--}}
{{--                                <td><a href="#delModal{{$comment->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <div id="satModal{{$comment->id}}" class="modal fade" tabindex="-1" data-backdrop="static"--}}
{{--                                 data-keyboard="false">--}}
{{--                                <div class="modal-dialog" role="document">--}}
{{--                                    <div class="modal-content">--}}
{{--                                        <div class="modal-header">--}}
{{--                                            <h5 class="modal-title">Change Status</h5>--}}
{{--                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                <span aria-hidden="true">&times;</span>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}

{{--                                        <form role="form" action="{{route('comment.changestat',$comment->id)}}"--}}
{{--                                              method="post">--}}
{{--                                            @csrf--}}
{{--                                            <label style="margin-left: 5px">Select Status</label>--}}
{{--                                            <select name="selectStatus" class="form-control">--}}
{{--                                                <option value="1">Active</option>--}}
{{--                                                <option value="0">In Active</option>--}}
{{--                                            </select>--}}
{{--                                            <div class="modal-footer">--}}
{{--                                                <button type="button" class="btn btn-default" data-dismiss="modal">--}}
{{--                                                    Close--}}
{{--                                                </button>--}}
{{--                                                <button type="submit" class="btn btn-primary">Change</button>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}


{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div id="viewModal{{$comment->id}}" class="modal fade" tabindex="-1" data-backdrop="static"--}}
{{--                                 data-keyboard="false">--}}
{{--                                <div class="modal-dialog" role="document">--}}
{{--                                    <div class="modal-content">--}}
{{--                                        <div class="modal-header">--}}
{{--                                            <h5 class="modal-title">Comment</h5>--}}
{{--                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                <span aria-hidden="true">&times;</span>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                        <p class="commen" style="padding:10px;">{{$comment->comment}}</p>--}}
{{--                                        <div class="modal-footer">--}}
{{--                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close--}}
{{--                                            </button>--}}

{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div id="delModal{{$comment->id}}" class="modal fade" tabindex="-1" data-backdrop="static"--}}
{{--                                 data-keyboard="false">--}}
{{--                                <div class="modal-dialog" role="document">--}}
{{--                                    <div class="modal-content">--}}
{{--                                        <div class="modal-header">--}}
{{--                                            <h5 class="modal-title">Confirm Delete</h5>--}}
{{--                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                <span aria-hidden="true">&times;</span>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                        <form role="form" action="{{route('comment.destroy', $comment->id)}}"--}}
{{--                                              method="post">--}}
{{--                                            @csrf--}}

{{--                                            <div class="modal-body">--}}
{{--                                                <h2 style="color: red;">Are you sure?</h2>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-footer">--}}
{{--                                                <button type="button" class="btn btn-default" data-dismiss="modal">--}}
{{--                                                    Close--}}
{{--                                                </button>--}}
{{--                                                <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{ asset('assets/admin/js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/admin/js/ckeditor/jquery.js') }}"></script>
    <script> CKEDITOR.replaceClass = 'ckEdit' </script>
@stop
