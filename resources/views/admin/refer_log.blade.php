@extends('admin.layout.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">

                <div class="row">

                    <div class="col-md-6">
                        <form class="form-inline" method="get" action="{{route('referral.log.search')}}" >
                            <div class="form-group  mb-2" >
                                <input type="text" class="form-control" name="user" placeholder="Username">
                            </div>

                            <button type="submit" class="btn btn-primary mb-2">Search</button>
                        </form>

                    </div>


                    <div class="col-md-6">
                        <form class="form-inline" method="get" action="{{route('referral.log.search')}}" >
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" name="ref_user" placeholder="Referred Username">
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
                            <th> Date </th>
                            <th> User </th>
                            <th> Referred User </th>
                            <th>Commission</th>
                            <th> Status </th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $today = \Carbon\Carbon::now(); @endphp
                        @foreach($refs as $data)
                            @php $day = $today->diffInDays(\Carbon\Carbon::parse($data->created_at)); @endphp
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ \Carbon\Carbon::parse($data->created_at)->format(\Config::get('constants.datetime_format')) }}</td>
                                <td><b>{{$data->ref_user->username}}<b></td>
                                <td><b>{{$data->ref_user->username}}</b></td>
                                <td> {{$data->amount}} {{$general->currency}}</td>
                                <td>
                                    @if($data->status == 0)
                                    <span class="badge badge-success">Complete</span>
                            
                                    @elseif ($day >= $general->affiliate_withdraw_day && $user->referral_commission->count() >= $general->affiliate_withdraw_person)
                                    <span class="badge badge-warning">Ajustable</span>
                                    
                                    @else
                                    <span class="badge badge-info">Running</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$refs->links()}}
            </div>
        </div>
    </div>
@endsection
@section('script')

@stop
