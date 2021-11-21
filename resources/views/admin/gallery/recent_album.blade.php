@extends('admin.layout.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">

                <div class="row">

                    <div class="col-md-6">
                        <form class="form-inline" method="get" action="{{route('album.search')}}" >
                            <div class="form-group  mb-2" >
                                <label class="sr-only">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>

                            <button type="submit" class="btn btn-primary mb-2">Search</button>
                        </form>

                    </div>


                    <div class="col-md-6">
                        <form class="form-inline" method="get" action="{{route('album.search')}}" >
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
                            <th> Title </th>
                            <th> Username </th>
                            <th> Content </th>
                            <th> Comment </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($albums as $album)
                            <tr>
                                <td nowrap>{{ $loop->iteration }}</td>
                                <td nowrap>{{ \Carbon\Carbon::parse($album->created_at)->format(\Config::get('constants.date_format')) }}</td>
                                <td>{{ $album->title }}</td>
                                <td nowrap>{{ $album->uploader->username }}</td>
                                <td nowrap>{{ $album->items->count() }}</td>
                                <td>{{ $album->comment }}</td>
                                <td nwrap>
                                    @if($album->public == 1)
                                        <a class="btn btn-warning btn-icon setAsProfileBtn text-white" href="{{ route('album.private', $album->id) }}"><i class="fa fa-eye-slash"></i> @lang('Make Private')</a>
                                    @else
                                        <a class="btn btn-warning btn-icon setAsProfileBtn text-white" href="{{ route('album.public', $album->id) }}"><i class="fa fa-eye"></i> @lang('Make Public')</a>
                                    @endif
                                    <button class="btn btn-info btn-icon viewAlbumBtn" data-items="{{ $album->items }}" data-title="{{ $album->title }}" data-comment="{{ $album->comment }}"><i class="fa fa-eye"></i> @lang('View')</button>
                                    <button class="btn btn-danger btn-icon removeAlbumBtn" data-id="{{ $album->id }}" data-title="{{ $album->title }}"><i class="fa fa-trash"></i> @lang('Remove')</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $albums->links() }}
            </div>
        </div>
    </div>

     {{-- Remove Upload Modal --}}
     <div class="modal fade" id="removeAlbumModal" tabindex="-1" role="dialog" >
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
                    <button type="submit" class="btn btn-danger" id="removeAlbumBtn">@lang('Remove')</button>
                    <button type="button" class="btn btn-muted" data-dismiss="modal">@lang('Close')</button>
                </div>
            </form>
            </div>
        </div>
    </div>

     {{-- View Upload Modal --}}
     <div class="modal fade" id="viewAlbumModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content"   >
            <div class="modal-header">
                <h5 class="modal-title">@lang('Album') : <span class="album_title"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                <p class="font-weight-bold">Comment</p>
                <p class="comment bg-light p-4"></p>
                <div class="item text-center">
                    <h5 class="border-bottom">Album Contents</h5>
                    <div class="row album"></div>
                </div>
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

    $('.viewAlbumBtn').on('click', function() {
        var modal = $('#viewAlbumModal');
        var title = $(this).data('title');
        var comment = $(this).data('comment');
        var items = $(this).data('items');
        var temp = '';
        
        $.each(items, function(key, value) {
            temp += '<div class="col-md-6 album-item">';
            temp += `<a href="${path}${value.filename}" data-rel="lightcase">`;
            if(value.filetype == 2) {
                temp += `<video src="${path}${value.filename}"></video>`;
            }else{
                temp += `<img src="${path}${value.filename}">`;
            }
            temp += '</a>';
            temp += '</div>';
        });


        modal.find('.album_title').text(title);
        modal.find('.comment').text(comment);
        modal.find('.album').html(temp);
        modal.modal('show');
    });
</script>
@stop
