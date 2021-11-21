@extends('admin.layout.master')
@section('css')
  
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
@stop
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="icon fa fa-users"></i> Users Statistics
                </div>
                <div class="card-body">

                    <div class="row" >
                        <div class="col-md-6">
                            <a href="{{url('admin/active/users')}}" style="text-decoration: none">
                                <div class="widget-small info"><i class="icon fa fa-user-circle-o fa-3x"></i>
                                    <div class="info">
                                        <h4>Total Active Users</h4>
                                        <p><b>{{\App\User::where('status',1)->count()}}</b></p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a href="{{url('admin/deactive/users')}}" style="text-decoration: none">
                                <div class="widget-small danger"><i class="icon fa fa-user-times fa-3x"></i>
                                    <div class="info">
                                        <h4>Total Desactive Users</h4>
                                        <p><b>{{\App\User::where('status',0)->count()}}</b></p>
                                    </div>
                                </div>
                            </a>
                        </div>


         

                 


                    </div>
                    </div>
                </div>
            </div>
        </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="icon fa fa-money"></i> Users Finance Statistics
                </div>
                <div class="card-body">

                    <div class="row" >
                        <div class="col-md-6">
                            <a href="{{url('admin/all/users')}}" style="text-decoration: none">
                                <div class="widget-small info"><i class="icon fa fa-money fa-3x"></i>
                                    <div class="info">
                                        <h4>All Users Balance</h4>
                                        <p><b>{{round(\App\User::sum('balance'),8)}} {{$general->currency}}</b></p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a href="{{url('admin/all/users')}}" style="text-decoration: none">
                                <div class="widget-small bg-success"><i class="icon fa fa-credit-card fa-3x"></i>
                                    <div class="info">
                                        <h4>All Users Interest Balance</h4>
                                        <p><b>{{round(\App\User::sum('interest_balance'),8)}} {{$general->currency}}</b></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="icon fa fa-credit-card-alt"></i> Total Deposit Statistics
                </div>
                <div class="card-body">

                    <div class="row" >
                        <div class="col-md-4">
                            <a href="{{route('all.deposit.history')}}" style="text-decoration: none">
                                <div class="widget-small info"><i class="icon fa fa-money fa-3x"></i>
                                    <div class="info">
                                        <h4>Deposits</h4>
                                        <p><b>{{\App\Deposit::where('status', '!=', 0)->count()}} </b></p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="{{url('admin/approve/deposit')}}" style="text-decoration: none">
                                <div class="widget-small bg-success"><i class="icon fa fa-check fa-3x"></i>
                                    <div class="info">
                                        <h4>Approved Deposits</h4>
                                        <p><b>{{\App\Deposit::where('status',1)->count()}} </b></p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="{{url('admin/rejected/deposit')}}" style="text-decoration: none">
                                <div class="widget-small bg-danger"><i class="icon fa fa-times fa-3x"></i>
                                    <div class="info">
                                        <h4>Rejected Deposits</h4>
                                        <p><b>{{\App\Deposit::where('status',2)->count()}} </b></p>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>

                    <br>


                    <div class="row" >
                        <div class="col-md-4">
                            <a href="{{url('admin/pending/deposit')}}" style="text-decoration: none">
                                <div class="widget-small bg-warning"><i class="icon fa fa-spinner fa-3x"></i>
                                    <div class="info">
                                        <h4>Pending Deposits</h4>
                                        <p><b>{{\App\Deposit::where('image', '!=', '')->where('detail', '!=', '')->where('status', 0)->count()}} </b></p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="{{url('admin/approve/deposit')}}" style="text-decoration: none">
                                <div class="widget-small bg-dark"><i class="icon fa fa-globe fa-3x"></i>
                                    <div class="info">
                                        <h4> Deposits Amount</h4>
                                        <p><b>{{round(\App\Deposit::where('status', 1)->sum('amount'),8)}} {{$general->currency}}</b></p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="{{url('admin/approve/deposit')}}" style="text-decoration: none">
                                <div class="widget-small bg-success"><i class="icon fa fa-dollar fa-3x"></i>
                                    <div class="info">
                                        <h4>Deposits Charge</h4>
                                        <p><b>{{round(\App\Deposit::where('status', 1)->sum('charge'),8)}} {{$general->currency}}</b></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="icon fa fa-ambulance"></i> Support Statistics
                </div>
                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">
                            <a href="{{url('admin/supports')}}" style="text-decoration: none">
                                <div class="widget-small bg-danger"><i class="icon fa fa-spinner fa-3x"></i>
                                    <div class="info">
                                        <h4>Pending Support Ticket</h4>
                                        <p><b>{{\App\SupportTicket::where('status',1)->count()}}</b></p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a href="{{url('admin/supports')}}" style="text-decoration: none">
                                <div class="widget-small bg-success"><i class="icon fa fa-ticket fa-3x"></i>
                                    <div class="info">
                                        <h4>Total Support Ticket</h4>
                                        <p><b>{{\App\SupportTicket::count()}}</b></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="icon fa fa-undo"></i> Total Withdraw Statistics
                </div>
                <div class="card-body">

                    <div class="row" >
                        <div class="col-md-4">
                            <a href="{{url('admin/withdraw/log')}}" style="text-decoration: none">
                                <div class="widget-small info"><i class="icon fa fa-money fa-3x"></i>
                                    <div class="info">
                                        <h4>Total Of Withdraws</h4>
                                        <p><b>{{\App\Withdraw::count()}} </b></p>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col-md-4">
                            <a href="{{route('approved.withdraw')}}" style="text-decoration: none">
                                <div class="widget-small bg-success"><i class="icon fa fa-check fa-3x"></i>
                                    <div class="info">
                                        <h4> Approved Withdraws</h4>
                                        <p><b>{{\App\Withdraw::where('status', 1)->count()}} </b></p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="{{route('rejected.withdraw')}}" style="text-decoration: none">
                                <div class="widget-small bg-danger"><i class="icon fa fa-times fa-3x"></i>
                                    <div class="info">
                                        <h4>Rejected Withdraws</h4>
                                        <p><b>{{\App\Withdraw::where('status', 2)->count()}} </b></p>
                                    </div>
                                </div>
                            </a>
                        </div>




                    </div>

                    <br>


                    <div class="row" >
                        <div class="col-md-4">
                            <a href="{{url('admin/withdraw/request')}}" style="text-decoration: none">
                                <div class="widget-small bg-warning"><i class="icon fa fa-spinner fa-3x"></i>
                                    <div class="info">
                                        <h4> Pending Withdraws</h4>
                                        <p><b>{{\App\Withdraw::where('status', 0)->count()}} </b></p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="{{url('admin/approved/withdraw')}}" style="text-decoration: none">
                                <div class="widget-small bg-dark"><i class="icon fa fa-building fa-3x"></i>
                                    <div class="info">
                                        <h4>Total Withdraw Amount</h4>
                                        <p><b>{{round(\App\Withdraw::where('status', 1)->sum('amount'),8)}} {{$general->currency}}</b></p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="{{url('admin/approved/withdraw')}}" style="text-decoration: none">
                                <div class="widget-small bg-success"><i class="icon fa fa-dollar fa-3x"></i>
                                    <div class="info">
                                        <h4> Withdraw Charge</h4>
                                        <p><b>{{round(\App\Withdraw::where('status', 1)->sum('charge'),8)}} {{$general->currency}}</b></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Here was the old section "Last[x]  user location" -->





@endsection
@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM&libraries=places&callback=showMap" sync defer></script>
<script src="{{ asset('assets/admin/js/goolg-map-activate.js') }}"></script>
<script>
// Here was located the old google maps pi script.
</script>
@stop
