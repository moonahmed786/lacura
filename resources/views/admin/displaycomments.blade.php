@extends('admin.layout.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">

                <div class="row">
 
                </div>
            </div>
        </div>
    </div>

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
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th> Sl</th>
                            <th> Comment </th>
                            <th> Created At </th>
                            <th> Status </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $key => $data)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$data->comment}}</td>
                                <td>{{$data->created_at}}</td>
                                 
                                <td>
                                    @php
                                        switch (true){
                                        case($data->status == 1):
                                        echo '<span class="badge badge-success">Active</span>';
                                        break;
                                        case($data->status == 0):
                                        echo '<span class="badge badge-danger">Unverified</span>';
                                        break;
                                        }
                                    @endphp
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('varifycomment', $data->id)}}"><i class="fa fa-check"></i> Varify</a>
                                    <a class="btn btn-danger" href="{{route('deletecomment', $data->id)}}"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@stop
