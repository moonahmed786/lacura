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
                <div class="tile-body">
                    <form role="form" method="POST" action="{{route('terms.store')}}">
                        @csrf

                        <div class="form-group">
                            <strong>Name</strong>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}"  >
                        </div>
                        <div class="form-group">
                            <strong>Title (Portuguese)</strong>
                            <input type="text" class="form-control" name="title"  value="{{old('title')}}">
                        </div>
                        <div class="form-group">
                            <strong>Title (Japanese)</strong>
                            <input type="text" class="form-control" name="title_jp" value="{{old('title_jp')}}" >
                        </div>

                        <div class="form-group">
                            <strong>Details (Portuguese)</strong>
                            <textarea class="form-control" name="text" rows="15" value="{{old('text')}}"></textarea>

                        </div>
                        <div class="form-group">
                            <strong>Details  (Japanese)</strong>
                            <textarea class="form-control" name="text_jp" rows="15" value="text_jp"></textarea>

                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
@section('script')
    <script>
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>
@stop
