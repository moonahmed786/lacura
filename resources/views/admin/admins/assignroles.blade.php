@extends('admin.layout.master')
<style type="text/css">
    h6 {
        padding-top: 15px;
    }
</style>
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
                    <form role="form" method="POST" action="/admin/assignrolesaction" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$id}}">
                        <div class="row">

                            @foreach($roles as $key => $data)
                                <div class="col-md-4">
                                    <h6>{{ $data->name }}</h6>
                                    <input data-toggle="toggle" data-onstyle="success" data-on="Active" data-off="Deactive"   data-offstyle="danger"
                                           data-width="100%" type="checkbox"
                                           name="{{ strtolower(str_replace(' ', '', $data->name)) }}" value="{{$data->id}}" {{ in_array($data->id, $assignedrole) == true ? 'checked' : '' }}>
                                </div>
                            @endforeach
                             
                        </div>
                        

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
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
