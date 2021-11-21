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
                    <div class="d-flex justify-content-end mb-4">
                        <button class="btn btn-primary btn-icon" data-target="#newAboutModal" data-toggle="modal"><i class="fa fa-plus"></i> New Section</button>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>File</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($abouts as $item)
                            <tr>
                                <td nowrap>{{ $loop->iteration }}</td>
                                <td>
                                    @if($item->filetype == 0) 
                                    <p class="text-muted"> No Content.</p>
                                    @elseif($item->filetype == 1)
                                    <img src="{{ asset('assets/storage/about') .'/'. $item->filename }}" style="width:80px;">
                                    @elseif($item->filetype == 2)
                                    <video src="{{ asset('assets/storage/about') .'/'. $item->filename }}" style="width:80px;"></video>
                                    @endif
                                </td>
                                <td>{{ $item->title ?? '---'}}</td>
                                <td>{{ $item->detail ?? '---'}}</td>
                                <td nwrap>
                                    <button class="btn btn-danger btn-icon removeAboutBtn" data-id="{{ $item->id }}"><i class="fa fa-trash"></i> Remove</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    
    {{-- New About Modal --}}
    <div class="modal fade" id="newAboutModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content"   >
            <div class="modal-header">
                <h5 class="modal-title">New Section</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('about.store') }}" enctype="multipart/form-data">
                @csrf                
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="title" class="col-sm-4 col-form-label font-weight-bold">Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-4 col-form-label font-weight-bold">Upload Your Photos / Videos</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="detail" class="col-sm-4 col-form-label font-weight-bold">Detail</label>
                        <div class="col-sm-8">
                            <textarea rows="5" class="form-control" name="detail" id="detail"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    
     {{-- Remove About Modal --}}
     <div class="modal fade" id="removeAboutModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content"   >
            <div class="modal-header">
                <h5 class="modal-title">Remove Section</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form method="POST" action="{{ route('about.remove') }}">
                @csrf
                <input type="hidden" name="id" >
                <div class="modal-body">
                    <p class="text-info">Are you sure want to remove this item ?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Remove</button>
                    <button type="button" class="btn btn-muted" data-dismiss="modal">Close</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>          

     // Remove About
     $('.removeAboutBtn').on('click', function() {
        var modal = $('#removeAboutModal');
        var id = $(this).data('id');

        modal.find('input[name=id]').val(id);

        modal.modal('show');
    });
</script>
@stop
