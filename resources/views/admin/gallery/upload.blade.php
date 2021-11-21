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
                <form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
                    @csrf                
                    <input type="hidden" name="temp" value="{{ uniqid() }}">
                        
                        <div class="form-group">
                            <label class="font-weight-bold">@lang('Album Title')</label>
                                <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">@lang('Upload Images')</label>
                            <div id="dZUpload" class="dropzone">
                                <div class="dz-default dz-message">
                                    <h3>Drag and drop images here or click</h3>
                                    <i class="fa fa-cloud-upload "></i>
                                </div>
                            </div>
                        </div>
                    <div class="tile-footer text-center">
                        <button type="submit" class="btn btn-block btn-primary">@lang('Upload')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    
    {{-- New Upload Modal --}}
    {{-- <div class="modal fade" id="newUploadModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content"   >
            <div class="modal-header">
                <h5 class="modal-title">@lang('Upload')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
                @csrf                
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label font-weight-bold">@lang('Upload Your Photos / Videos')</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control my-dropzone" name="item[]" multiple>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="comment" class="col-sm-4 col-form-label font-weight-bold">@lang('Comment')</label>
                        <div class="col-sm-8">
                            <textarea rows="5" class="form-control" name="comment" id="comment"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">@lang('Upload')</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                </div>
            </form>
            </div>
        </div>
    </div> --}}
    
    
    {{-- Edit Upload Modal --}}
    {{-- <div class="modal fade" id="editUploadModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('Edit Your Upload')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="item border border-primary mb-2 p-2 text-center"></div>
                <form method="POST" action="{{ route('upload.update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="album_item_id">   
                    <div class="form-group row">
                        <label for="comment" class="col-sm-4 col-form-label font-weight-bold">@lang('Comment')</label>
                        <div class="col-sm-8">
                            <textarea rows="5" class="form-control" name="comment" id="comment"></textarea>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="updateUploadBtn">@lang('Update')</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
            </div>
            </div>
        </div>
    </div> --}}

     {{-- Remove Upload Modal --}}
     {{-- <div class="modal fade" id="removeUploadModal" tabindex="-1" role="dialog" >
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
    </div> --}}

     {{-- View Upload Modal --}}
     {{-- <div class="modal fade" id="viewUploadModal" tabindex="-1" role="dialog" >
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
    </div> --}}
@endsection

@push('style-lib')

<link rel="stylesheet" href="{{ asset('assets/admin/css/dropzone.css') }}">
@endpush
@section('script')
<script src="{{ asset('assets/admin/js/dropzone.js') }}"></script>
<script>
    Dropzone.autoDiscover = false;
    $("#dZUpload").dropzone({
        url: "{{ route('gallery.upload-image') }}",
        addRemoveLinks: false,
        maxFilesize: 10,
        paramName: 'image',
        acceptedFiles: "image/*,.mp4,.mkv,.avi",
        init: function() {
            this.on("sending", function(file, xhr, formData) {
                formData.append("temp", $('input[name=temp]').val());
            });
        },
        success: function (file, response) {
            if(response['error']) {
                $.each(response['error_msg'], function(key, error) {
                    file.previewElement.classList.add("dz-error");
                    $(file.previewElement).find('.dz-error-message').text(error);
                });
            }else{
                var imgName = response;
                file.previewElement.classList.add("dz-success");
            }
        },
        error: function (file, response) {
            file.previewElement.classList.add("dz-error");
            $(file.previewElement).find('.dz-error-message').text(response);
        },
    });
    // var path = "{{ asset('assets/storage/album') .'/' }}";                

    //  // Remove Upload
    //  $('.removeUploadBtn').on('click', function() {
    //     var modal = $('#removeUploadModal');
    //     var filename = $(this).data('filename');
    //     var filetype = $(this).data('filetype');
    //     var id = $(this).data('id');

    //     modal.find('input[name=album_item_id]').val(id);

    //     if(filetype == 2) {
    //         temp = `<video src="${path}${filename}" style="width:100%;"></video>`;
    //     }else{
    //         temp = `<img src="${path}${filename}" style="width:100%;">`;
    //     }

    //     modal.find('.item').html(temp);

    //     modal.modal('show');
    // });
    
    // // Update Upload
    // $('.editUploadBtn').on('click', function() {
    //     var modal = $('#editUploadModal');
    //     var comment = $(this).data('comment');
    //     var filename = $(this).data('filename');
    //     var filetype = $(this).data('filetype');
    //     var id = $(this).data('id');

    //     modal.find('input[name=album_item_id]').val(id);
    //     modal.find('textarea[name=comment]').val(comment);
        
    //     if(filetype == 2) {
    //         temp = `<video src="${path}${filename}"></video>`;
    //     }else{
    //         temp = `<img src="${path}${filename}">`;
    //     }

    //     modal.find('.item').html(temp);

    //     $('#updateUploadBtn').on('click', function() {
    //         modal.find('form').submit();
    //     });

    //     modal.modal('show');
    // });

    // // Remove Upload
    // $('.viewUploadBtn').on('click', function() {
    //     var modal = $('#viewUploadModal');
    //     var filename = $(this).data('filename');
    //     var filetype = $(this).data('filetype');

    //     if(filetype == 2) {
    //         temp = `<video src="${path}${filename}" style="width:100%;"></video>`;
    //     }else{
    //         temp = `<img src="${path}${filename}" style="width:100%;">`;
    //     }

    //     modal.find('.item').html(temp);

    //     modal.modal('show');
    // });
</script>
@stop
