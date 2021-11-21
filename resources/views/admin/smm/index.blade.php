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
                <div class="tile-heading pull-right mb-4">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#newModal"><i class="fa fa-plus"></i> Add New</button>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($smms as $smm)
                        <tr>
                            <td>{{$smm->title}}</td>
                            <td>
                                @if($smm->status)
                                <span class="badge badge-success">Enabled</span>
                                @else
                                <span class="badge badge-danger">Disabled</span>
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-info editBtn" data-url="{{ route('smm.update', $smm->id) }}" data-title="{{ $smm->title }}"><i class="fa fa-pencil"></i>Edit</button>
                                @if($smm->status)
                                <button class="btn btn-danger disableBtn" data-id="{{ $smm->id }}"><i class="fa fa-eye-slash"></i>Disable</button>
                                @else
                                <button class="btn btn-success enableBtn" data-id="{{ $smm->id }}"><i class="fa fa-eye"></i>Enable</button>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="100%" class="text-center text-muted">No packages</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $smms->links() }}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> New Social Media Marketing</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form method="post" action="{{route('smm.store')}}" class="form-horizontal">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <div class="from-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="e.g. Facebook, Twitter">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary bold uppercase"> Save</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> Update Social Media Marketing</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form method="post" class="form-horizontal">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <div class="from-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="e.g. Facebook, Twitter">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary bold uppercase"> Save</button>
                    </div>
                </form>
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
                <form method="post" action="{{route('smm.enable')}}" class="form-horizontal">
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
                <form method="post" action="{{route('smm.disable')}}" class="form-horizontal">
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

    $('.editBtn').on('click', function() {
        var modal = $('#editModal');
        modal.find('form').attr('action', $(this).data('url'));
        modal.find('input[name=title]').val($(this).data('title'));
        modal.modal('show');
    });
</script>
@stop
