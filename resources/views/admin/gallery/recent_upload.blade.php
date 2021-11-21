@extends('admin.layout.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">

                <div class="row">

                    <div class="col-md-6">
                        <form class="form-inline" method="get" action="{{route('upload.search')}}" >
                            <div class="form-group  mb-2" >
                                <label class="sr-only">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>

                            <button type="submit" class="btn btn-primary mb-2">Search</button>
                        </form>

                    </div>


                    <div class="col-md-6">
                        <form class="form-inline" method="get" action="{{route('upload.search')}}" >
                            <div class="form-group mb-2">
                                <label  class="sr-only">Uploaded</label>
                                <input type="date" class="form-control" name="uploaded">
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
                            <th> Username </th>
                            <th>Comment</th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($uploads as $item)
                            <tr>
                                <td nowrap>{{ $loop->iteration }}</td>
                                <td nowrap>{{ \Carbon\Carbon::parse($item->created_at)->format(\Config::get('constants.date_format')) }}</td>
                                <td nowrap>{{ $item->uploader->username }}</td>
                                <td>{{ $item->comment }}</td>
                                <td nwrap>
                                    <button class="btn btn-info btn-icon viewUploadBtn" data-filename="{{ $item->filename }}" data-filetype="{{ $item->filetype }}"><i class="fa fa-eye"></i> @lang('View')</button>
                                    <button class="btn btn-danger btn-icon removeUploadBtn" data-id="{{ $item->id }}" data-filename="{{ $item->filename }}" data-filetype="{{ $item->filetype }}"><i class="fa fa-trash"></i> @lang('Remove')</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $uploads->links() }}
            </div>
        </div>
    </div>

     {{-- Remove Upload Modal --}}
     <div class="modal fade" id="removeUploadModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content"   >
            <div class="modal-header">
                <h5 class="modal-title">@lang('Remove file')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form method="POST" action="{{ route('upload.remove') }}">
                @csrf
                <input type="hidden" name="album_item_id" >
                <div class="modal-body">
                    <p class="text-info">@lang('Are you sure want to remove this item ?')</p>
                    <div class="item text-center"></div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" id="removeUploadBtn">@lang('Remove')</button>
                    <button type="button" class="btn btn-muted" data-dismiss="modal">@lang('Close')</button>
                </div>
            </form>
            </div>
        </div>
    </div>

     {{-- View Upload Modal --}}
     <div class="modal fade" id="viewUploadModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content"   >
            <div class="modal-header">
                <h5 class="modal-title">@lang('Upload View')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                <div class="item text-center"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-muted" data-dismiss="modal">@lang('Close')</button>
            </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    var path = "{{ asset('assets/storage/album') .'/' }}";                

     // Remove Upload
     $('.removeUploadBtn').on('click', function() {
        var modal = $('#removeUploadModal');
        var filename = $(this).data('filename');
        var filetype = $(this).data('filetype');
        var id = $(this).data('id');

        modal.find('input[name=album_item_id]').val(id);

        if(filetype == 2) {
            temp = `<video src="${path}${filename}" style="width:100%;"></video>`;
        }else{
            temp = `<img src="${path}${filename}" style="width:100%;">`;
        }

        modal.find('.item').html(temp);

        modal.modal('show');
    });

    // Remove Upload
    $('.viewUploadBtn').on('click', function() {
        var modal = $('#viewUploadModal');
        var filename = $(this).data('filename');
        var filetype = $(this).data('filetype');

        if(filetype == 2) {
            temp = `<video src="${path}${filename}" style="width:100%;"></video>`;
        }else{
            temp = `<img src="${path}${filename}" style="width:100%;">`;
        }

        modal.find('.item').html(temp);

        modal.modal('show');
    });
</script>
@stop
