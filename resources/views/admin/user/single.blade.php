@extends('admin.layout.master')

@section('body')
    <div class="row">
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

        <div class="col-md-3">
            <div class="tile">
                <div class="card">
                    <img style="max-width:100%"
                         src="@if($user->image) {{ asset('assets/images/user') .'/'. $user->image }} @else {{ asset('assets/storage/user/default.png') }} @endif"
                         alt="{{ $user->image }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">Name: {{$user->name}}</h5>
                        <p class="card-text">Username: {{$user->username}}</p>
                        <p class="card-text">Email: {{$user->email}}</p>
                        <p class="card-text">Phone: {{$user->mobile}}</p>
                        <p class="card-text">Last
                            Login: {{ \Carbon\Carbon::parse($user->login_time)->format(\Config::get('constants.datetime_format')) }}</p>
                        <p class="card-text font-weight-bold">Refer By
                            : {{isset($refer->name) ? $refer->name : "None"}}</p>
                        <p class="card-text font-weight-bold">Refer Username
                            : {{isset($refer->username) ? $refer->username : "None" }}</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="tile">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h4 class="card-title">{{$general->deposit_wallet_name}}
                                    Balance: {{$general->currency_sym}} {{$user->balance}}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h4 class="card-title">{{$general->interest_wallet_name}}
                                    Balance: {{$general->currency_sym}} {{$user->interest_balance}}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <h5 class="card-text">Joined {{\Carbon\Carbon::parse($user->created_at)->diffInDays()}} Days
                            Ago</h5>
                    </div>

                </div>

            </div>

            <div class="tile">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="btn btn-primary btn-block"
                                   href="{{route('user.single.withdraw', $user->id)}}">Withdraw Report</a>
                                <br>
                            </div>

                            <div class="col-md-4">
                                <a class="btn btn-primary btn-block"
                                   href="{{route('user.single.transaction', $user->id)}}">Transaction Report <br></a>
                            </div>

                            <div class="col-md-4">
                                <button class="btn btn-primary btn-block" data-target="#showDocModal"
                                        data-toggle="modal">Personal Document
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <a class="btn btn-primary btn-block" href="#addsubModal" data-toggle="modal">Add/Subtract
                                    Balance</a>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-primary btn-block" href="#emailModal" data-toggle="modal">Send
                                    Mail</a>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-primary btn-block" href="{{ route('user.single.log', $user->id) }}">Login
                                    Log</a>
                                <br>
                            </div>
<div class="col-md-4">
                                <a class="btn btn-primary btn-block" href="{{ route('save.user.image', $user->id) }}">Draw Profile Image</a>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tile">
                <div class="tile-body">
                    <form role="form" method="POST" action="{{route('user.detail.update', $user->id)}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="row">
                            <div class="form-group col-md-6">
                                <strong>Name</strong>
                                <input type="text" class="form-control" name="name" value="{{$user->name}}">
                            </div>

                            <div class="form-group col-md-6">
                                <strong>Email</strong>
                                <input type="email" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <strong>Phone</strong>
                                <input type="text" class="form-control" name="mobile" value="{{$user->mobile}}">
                            </div>

                            <div class="form-group col-md-6">
                                <strong>Country</strong>
                                <input type="text" class="form-control" name="country" value="{{$user->country}}">
                            </div>


                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <strong>Image</strong>
                                <input type="file" class="form-control" name="image" accept="image/*">
                            </div>
                        </div>

                        @if($user->provider == '')
                            <div class="row">
                                <div class="col-md-4">
                                    <h6>User Status</h6>
                                    <input data-toggle="toggle" data-onstyle="success" data-on="Active"
                                           data-off="Deactive" data-offstyle="danger"
                                           data-width="100%" type="checkbox"
                                           name="status" {{ $user->status == "1" ? 'checked' : '' }}>
                                </div>

                                <div class="col-md-4">
                                    <h6>Email Verification</h6>
                                    <input data-toggle="toggle" data-onstyle="success" data-offstyle="danger"
                                           data-width="100%" type="checkbox"
                                           name="emailv" {{ $user->emailv == "1" ? 'checked' : '' }}>
                                </div>

                                <div class="col-md-4">
                                    <h6>Sms Verification</h6>
                                    <input data-toggle="toggle" data-onstyle="success" data-offstyle="danger"
                                           data-width="100%" type="checkbox"
                                           name="smsv" {{ $user->smsv == "1" ? 'checked' : '' }}>
                                </div>
                            </div>
                        @endif


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="showDocModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Personal Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6 border-right">
                            @if($user->personal_document)
                                <h4>Personal Document</h4>
                                <img
                                    src="{{ asset('assets/images/user/withdraw_verify') .'/'. $user->personal_document }}"
                                    style="width: 100%">
                                @else
                                <h4 class="p-4 text-danger">No Personal Document has been uploaded yet.</h4>
                            @endif
                        </div>
                        <div class="col-md-6">
                            @if($user->selfie_document)
                                <h4>Selfie with Document</h4>
                                <img
                                    src="{{ asset('assets/images/user/withdraw_verify') .'/'. $user->selfie_document }}"
                                    style="width: 100%">
                                @else
                                <h4 class="p-4 text-danger">No Selfie Document has been uploaded yet.</h4>

                            @endif
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <div class="modal fade" id="addsubModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"> Add/Subtract Balance</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <form id="frmProducts" method="post" action="{{route('add.sub.user', $user->id)}}"
                      class="form-horizontal">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <strong>Select Type:</strong>
                            <input data-toggle="toggle" data-onstyle="success" data-on="Add Balance"
                                   data-off="Subtract Balance" data-offstyle="danger"
                                   data-width="100%" type="checkbox"
                                   name="type">
                        </div>

                        <div class="form-group">
                            <strong>Amount :</strong>
                            <div class="input-group">
                                <input type="text" class="form-control input-lg"
                                       name="amount">
                                <div class="input-group-append">
                                        <span class="input-group-text">
                                             {{$general->currency_sym}}
                                            </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea class="form-control" name="detail" rows="3"></textarea>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary bold uppercase"><i class="fa fa-send"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Send Mail To {{$user->name}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <form id="frmProducts" method="post" action="{{route('send.mail.user', $user->id)}}"
                      class="form-horizontal">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <strong>Subject:</strong>
                            <input class="form-control" type="text" name="subject">
                        </div>

                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea class="form-control" style="width: 470px; height: 300px;" name="detail"
                                      id="emessage" rows="3"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary bold uppercase"><i class="fa fa-send"></i> Send
                            Mail
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
@section('script')
    <script src="{{asset('assets/admin/js/nicEdit-latest.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        new nicEditor().panelInstance('emessage');
    </script>
@stop
