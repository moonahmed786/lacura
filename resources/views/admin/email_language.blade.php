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
                    <div class="pull-left">
                        <h3 class="mb-2">Email Template in Different Languages</h3>
                    </div>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Template</th>
                            <th>Lang</th>
                            <th>Subject</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($langs as $lang)
                        <tr>
                            <td>{{ $lang->name }}</td>
                            <td><b>{{ $lang->lang }}</b></td>
                            <td>{{ $lang->subject }}</td>
                            <td><a href="{{ route('email.language.edit', $lang->id) }}" class="btn btn-info btn-icon"><i class="fa fa-pencil"></i> Edit</a></td>
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
