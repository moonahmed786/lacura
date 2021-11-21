@extends('admin.layout.master')

@section('body')
    <div class="row">
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

        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <form role="form" method="POST" action="/admin/addadmin" enctype="multipart/form-data">
                        @csrf
                         

                        <div class="row">
                            <div class="form-group col-md-6">
                                <strong>Name</strong>
                                <input type="text" class="form-control" name="name" value="" required>
                            </div>

                            <div class="form-group col-md-6">
                                <strong>Email</strong>
                                <input type="email" class="form-control" name="email" value="" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <strong>User Name</strong>
                                <input type="text" class="form-control" name="username" value="" required>
                            </div>

                             <div class="form-group col-md-6">
                                <strong>Password</strong>
                                <input type="password" class="form-control" name="password" value="" required>
                            </div>


                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <strong>Mobile</strong>
                                <input type="text" class="form-control" name="mobile" value="" required>
                            </div>

                        </div>


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-block">Add New Admin</button>
                        </div>
                    </form>
                </div>
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
