@extends('admin.layout.master')



@section('body')

    <div class="row">

        <div class="col-md-12">

            <div class="tile">



                <div class="row">



                    <div class="col-md-6">

                        <form class="form-inline" method="get" action="{{route('album.search')}}" >

                            <div class="form-group  mb-2" >

                                <label class="sr-only">Title</label>

                                <input type="text" class="form-control" name="title" placeholder="Album Title">

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

                            <th>Sl</th>

                            <th>Date</th>

                            <th>Title </th>

                            <th>Total Files</th>

                            <th>Action</th>

                        </tr>

                        </thead>

                        <tbody>

                        @foreach($albums as $album)

                            <tr>

                                <td nowrap>{{ $loop->iteration }}</td>

                                <td nowrap>{{ \Carbon\Carbon::parse($album->created_at)->format(\Config::get('constants.date_format')) }}</td>

                                <td>{{ $album->title }}</td>

                                <td nowrap>{{ $album->items->count() }}</td>

                                <td nwrap>

                                    @if($album->public == 1)

                                        <a class="btn btn-warning btn-icon setAsProfileBtn text-white" href="{{ route('album.private', $album->id) }}"><i class="fa fa-eye-slash"></i> @lang('Make Private')</a>

                                    @else

                                        <a class="btn btn-warning btn-icon setAsProfileBtn text-white" href="{{ route('album.public', $album->id) }}"><i class="fa fa-eye"></i> @lang('Make Public')</a>

                                    @endif

                                    <a href="{{ route('gallery.album.items', $album->id) }}" class="btn btn-info btn-icon"><i class="fa fa-eye"></i> @lang('View')</a>

                                    <button class="btn btn-danger btn-icon removeAlbumBtn" data-id="{{ $album->id }}"><i class="fa fa-trash"></i> @lang('Remove')</button>

                                    @if($album->show_about)

                                    <a href="{{ route('gallery.album.hide-about', $album->id) }}" class="btn btn-info btn-dark"><i class="fa fa-eye-slash"></i> @lang('Hide from About ')</a>

                                    @else

                                    <a href="{{ route('gallery.album.show-about', $album->id) }}" class="btn btn-info btn-dark"><i class="fa fa-eye"></i> @lang('Show in About ')</a>

                                    @endif

                                    <a href="{{ route('gallery.album.customize-items', $album->id) }}" class="btn btn-info btn-primary"><i class="fa fa-cogs"></i> @lang('Customize Items ')</a>

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

            

            <form method="POST" action="{{ route('gallery.album.remove') }}">

                @csrf

                <input type="hidden" name="id" >

                <div class="modal-body">

                    <p class="text-info">@lang('Are you sure want to remove this album ?')</p>

                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-danger" id="removeAlbumBtn">@lang('Remove')</button>

                    <button type="button" class="btn btn-muted" data-dismiss="modal">@lang('Close')</button>

                </div>

            </form>

            </div>

        </div>

    </div>

@endsection



@section('script')

<script>

$('.removeAlbumBtn').on('click', function() {

    var modal = $('#removeAlbumModal');

    modal.find('input[name=id]').val($(this).data('id'));

    modal.modal('show');

});

</script>

@stop

