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
                <form method="POST" action="{{ route('inslider.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="temp" value="{{ uniqid() }}">

                        <div class="form-group">
                            <label class="font-weight-bold">@lang('Language')<small class="text-info">(default: japan)</small></label>
                            <select name="lang" class="form-control">
                                <option value="ja">Japan</option>
                                <option value="pt-br">Portugal</option>
                            </select>
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
@endsection

@push('style-lib')

<link rel="stylesheet" href="{{ asset('assets/admin/css/dropzone.css') }}">
@endpush
@section('script')
<script src="{{ asset('assets/admin/js/dropzone.js') }}"></script>
<script>
    Dropzone.autoDiscover = false;
    $("#dZUpload").dropzone({
        url: "{{ route('inslider.image-upload') }}",
        addRemoveLinks: true,
        maxFilesize: 5,
        paramName: 'image',
        acceptedFiles: "image/*",
        init: function() {
            this.on("sending", function(file, xhr, formData) {
                formData.append("temp", $('input[name=temp]').val());
                formData.append("_token", "{{ csrf_token() }}");
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
</script>
@stop
