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
        </div>
        <div class="col-md-12">

            <div class="tile">
                <div class="tile-title pull-right mb-4">
                    <a class="btn btn-primary" href="{{ route('smm.service.create') }}"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Package</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($services as $service)
                        <tr>
                            <td>{{$service->title}}</td>
                            <td>{{ $service->package->title }}</td>
                            <td>
                                @if($service->status)
                                <span class="badge badge-success">Enabled</span>
                                @else
                                <span class="badge badge-danger">Disabled</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{ route('smm.service.edit', $service->id) }}"><i class="fa fa-pencil"></i>Edit</a>
                                @if($service->status)
                                <button class="btn btn-danger disableBtn" data-id="{{ $service->id }}"><i class="fa fa-eye-slash"></i>Disable</button>
                                @else
                                <button class="btn btn-success enableBtn" data-id="{{ $service->id }}"><i class="fa fa-eye"></i>Enable</button>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="100%" class="text-center text-muted">No Services</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="enableModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> Confirm Enable</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form method="post" action="{{route('smm.service.enable')}}" class="form-horizontal">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <p class="text-muted">Are you sure want to enable ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary bold uppercase"> Enable</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="modal fade" id="disableModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> Confirm Disable</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form method="post" action="{{route('smm.service.disable')}}" class="form-horizontal">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <p class="text-muted">Are you sure want to disable ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary bold uppercase"> Disable</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@stop
@section('script')
<script>
    $('.enableBtn').on('click', function() {
        var modal = $('#enableModal');
        modal.find('input[name=id]').val($(this).data('id'));
        modal.modal('show');
    });

    $('.disableBtn').on('click', function() {
        var modal = $('#disableModal');
        modal.find('input[name=id]').val($(this).data('id'));
        modal.modal('show');
    });
</script>
@stop
