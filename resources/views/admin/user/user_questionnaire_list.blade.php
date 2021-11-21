@extends('admin.layout.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">

                <div class="row">

                    <div class="col-md-6">
                        <form class="form-inline" method="get" action="{{route('user.search.email')}}" >
                            <div class="form-group  mb-2" >
                                <label class="sr-only">Email Address</label>
                                <input type="email" class="form-control" name="email" placeholder="Email Address">
                            </div>

                            <button type="submit" class="btn btn-primary mb-2">Search</button>
                        </form>

                    </div>


                    <div class="col-md-6">
                        <form class="form-inline" method="get" action="{{route('user.search.username')}}" >
                            <div class="form-group mb-2">
                                <label  class="sr-only">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>

                            <button type="submit" class="btn btn-primary mb-2">Search</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="tile">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th> Sl</th>
                            <th> Name </th>
                            <th> Blood Type </th>
                            <th> Signature </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $key => $data)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->blood_type}}</td>
                                <td>{{$data->signature}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('user.view.questionnare', $data->id )}}"><i class="fa fa-desktop"></i>  View Detail</a>
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
