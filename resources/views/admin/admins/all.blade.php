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
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th> Sl</th>
                            <th> Name </th>
                            <th> Username </th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <!-- th> Status </th> -->
                            <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $key => $data)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->username}}</td>
                                <td><b>{{$data->email}}</b></td>
                                <td>{{ $data->mobile}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('assignrole', $data->id)}}"><i class="fa fa-desktop"></i>  Assign Roles</a>
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
