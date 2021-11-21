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
        </div>
            @foreach($blog as $data)
                <div class="col-md-4">

                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$data->title_ja}}</h5>
                            <p class="card-text"> {{short_text($data->description_ja, 50)}}</p>

                            <div class="row">

                                <div class="col-4">
                                    <a href="{{route('miniblog.edit', $data->id)}}" class="btn btn-primary btn-block">View/Edit</a>
                                </div>

                                <div class="col-4">
                                    <a href="#delModal{{$data->id}}" data-toggle="modal" class="btn btn-danger btn-block">Delete</a>
                                </div>
                                <div class="col-4">
                                    <a href="#satModal{{$data->id}}" data-toggle="modal" class="btn btn-success btn-block">Status</a>
                                </div>

                            </div>
                            

                        </div>
                    </div>
                </div>
                <div id="satModal{{$data->id}}" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Change Status</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                                <form role="form" action="{{route('miniBlog.changestatus', $data->id)}}" method="post">
                                @csrf
                                <label style="margin-left: 5px">Select Status</label>
                                <select name="selectStatus" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">In Active</option>
                                </select>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Change</button>
                                </div>
                            </form>
                            
                            
                        </div>
                    </div>
                </div>
                <div id="delModal{{$data->id}}" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Confirm Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form role="form" action="{{route('miniBlog.destroy', $data->id)}}" method="post">
                                @csrf
                               
                                <div class="modal-body">
                                    <h2 style="color: red;">Are you sure?</h2>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
                {{$blog->links()}}
        
    </div>
    @stop

            