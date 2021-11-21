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
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Package</th>
                            <th scope="col">User</th>
                            <th scope="col">Order</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($subscriptions as $subs)
                        <tr>
                            <td>{{$subs->service->title}}</td>
                            <td><a href="{{ route('user.view', $subs->subscriber->id) }}">{{$subs->subscriber->username }}</a></td>
                            <td><b>{{ $subs->unit }}</b></td>
                            <td><span class="text-success font-weight-bold">{{ $general->currency_sym }}{{ $subs->price }}</span></td>
                            <td>
                                @if($subs->status == 0)
                                <span class="badge badge-warning">Pending</span>
                                @elseif($subs->status == 1)
                                <span class="badge badge-info">Running</span>
                                @elseif($subs->status == 2)
                                <span class="badge badge-success">Completed</span>
                                @elseif($subs->status == 9)
                                <span class="badge badge-danger">Rejected</span>
                                @endif
                            </td>
                            <td>
                                @switch($subs->status)
                               
                                    @case(0)
                                        <button class="btn btn-info actBtn" data-id="{{ $subs->id }}" data-url="{{ route('smm.service.running', $subs->id) }}" data-title="Running Confirmation"><i class="fa fa-spinner"></i>Running</button>
                                        <button class="btn btn-danger actBtn" data-id="{{ $subs->id }}" data-url="{{ route('smm.service.reject', $subs->id) }}" data-title="Reject Confirmation"><i class="fa fa-check"></i>Rejected</button>
                                    @case(1)
                                        <button class="btn btn-success actBtn" data-id="{{ $subs->id }}" data-url="{{ route('smm.service.complete', $subs->id) }}" data-title="Complete Confirmation"><i class="fa fa-check"></i>Complete</button>
                                        @break
                                    @default
                                        ---
                                @endswitch
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="100%" class="text-center text-muted">No Subscriptions</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $subscriptions->links() }}
                </div>
            </div>
        </div>
    </div>


    {{-- Action Modal --}}
    <div class="modal fade" id="actionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form method="post" class="form-horizontal">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <p class="text-muted">Are you sure to take this action?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary bold uppercase"> Confirm</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@stop
@section('script')
<script>
    $('.actBtn').on('click', function() {
        var modal = $('#actionModal');
        modal.find('.modal-title').text($(this).data('title'));
        modal.find('input[name=id]').val($(this).data('id'));
        modal.find('form').attr('action', $(this).data('url'));
        modal.modal('show');
    });
</script>
@stop
