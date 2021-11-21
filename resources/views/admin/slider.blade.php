@extends('admin.layout.master')

@section('body')

    <div class="row">
        <div class="col-md-12">

            @if (count($errors) > 0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong class="col-md-12"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                Alert!</strong>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <div class="tile">
                <div class="tile-body">
                    <h5>Slider Setting</h5>
                    <hr>

                    <form class="form-inline" action="{{ route('slider.setting') }}" method="POST">
                        @csrf
{{--                        <div class="form-group col-md-12 mb-4">--}}
{{--                            <label><strong class="mr-4">Slide Text <small class="text-info">(Japaneese)</small></strong></label>--}}
{{--                            <textarea class="form-control col-md-12 ckEdit" name="slider_text" placeholder="Slider Text"--}}
{{--                                      rows="5" style="width: 100%">{{ $general->slider_text }}</textarea>--}}
{{--                        </div>--}}
{{--                        <div class="form-group col-md-12 mb-4">--}}
{{--                            <label><strong class="mr-4">Slide Text <small--}}
{{--                                        class="text-info">(Portugueese)</small></strong></label>--}}
{{--                            <textarea class="form-control col-md-12 ckEdit" name="slider_textpt"--}}
{{--                                      placeholder="Slider Text" rows="5"--}}
{{--                                      style="width: 100%">{{ $general->slider_textpt }}</textarea>--}}
{{--                        </div>--}}
                        <div class="col-md-12 mb-3">
                            <strong class="mr-4">Slide Speed </strong>
                            <input type="number" class="form-control mr-4" name="speed"
                                   value="{{ $general->slider_speed }}" placeholder="Slider Speed">
                            <strong class="mr-4">Number of Slides</strong>
                            <input type="number" class="form-control mr-4" name="slider_number"
                                   value="{{ $general->slider_number }}" placeholder="">
                            <strong class="mr-4">Show Method </strong>
                            <select name="slider_show_method" class="form-control">
                                <option value="random"
                                        class="form-control" {{$general->slider_show_method == 'random'? 'selected': ''}}>
                                    Random
                                </option>
                                <option value="newest"
                                        class="form-control" {{$general->slider_show_method == 'newest'? 'selected': ''}}>
                                    Newest
                                </option>
                            </select>
                        </div>

                        <div class="col-md-12 ">
                            <strong class="mr-4">Slides PerView</strong>
                            <input type="number" class="form-control mr-4" name="slidesPerView"
                                   value="{{ $general->slidesPerView }}" placeholder="1 or 2 Recommended">
                            <strong class="mr-4">Autoplay Delay</strong>
                            <input type="number" class="form-control mr-4" name="autoplay_delay"
                                   value="{{ $general->autoplay_delay }}" placeholder="400 to 600 Recommended ">
                            <strong class="mr-4">Slider Loop </strong>
                            <select name="slider_loop" class="form-control">
                                <option value="1"
                                        class="form-control" {{$general->slider_loop == '1'? 'selected': ''}}>
                                    True
                                </option>
                                <option value="0"
                                        class="form-control" {{$general->slider_loop == '0'? 'selected': ''}}>
                                    False
                                </option>
                            </select>
                            <button type="submit" class="btn btn-primary btn-icon bold float-right"><i
                                    class="fa fa-save"></i> Update
                            </button>
                        </div>

                    </form>
                </div>
            </div>
                <form action="{{route('slider.remove.multi')}}" method="post">


                <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">

                        <div class="caption font-dark pull-left">
                            <i class="icon-settings font-dark"></i>
                            <a href="{{ route('slider.new') }}" class="btn btn-primary btn-icon bold"><i
                                    class="fa fa-plus"></i> Add New </a>
                        </div>
                        <div class="caption font-dark pull-right">
                            <i class="icon-settings font-dark"></i>
                            <button type="submit" class="btn btn-warning btn-icon bold"><i
                                    class="fa fa-trash"></i> Delete Selected </button>
                        </div>

                        <br>
                        <br>
                        <br>


                        <div class="row">

                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Language</th>
                                        <th>Image</th>
                                        <th>Link</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sliders as $data)
                                        <tr>
                                            <td>{{ $data->lang }}</td>
                                            <td style="max-width: 160px"><img
                                                    src="{{ asset('assets/images/slider') .'/'. $data->image_name }}"
                                                    alt="Slider Image" style="width: 100%"></td>
                                            <td>{{ asset('assets/images/slider') .'/'. $data->image_name }}</td>
                                            <td>
{{--                                                <button type="button" class="btn btn-danger btn-icon removeBtn"--}}
{{--                                                        data-id="{{ $data->id }}"><i class="fa fa-trash"></i>Remove--}}
{{--                                                </button>--}}

                                                <span  data-toggle="tooltip" data-title="Delete" ><input type="checkbox" name="check-{{$data->id}}" class="my_checkbox"></span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- New Slide Modal --}}
    {{-- <div class="modal fade" id="newSlideModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Slide</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <strong>Title </strong><small class="text-info">(optional)</small>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="form-group">
                        <strong>Language </strong><small class="text-info">(default: japan)</small>
                        <select name="lang" class="form-control">
                            <option value="ja">Japan</option>
                            <option value="pt-br">Portugal</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <strong>Slide Image </strong><small class="text-danger">*</small> <small class="text-info">(You may upload multiple files at a time.)</small>
                        <input type="file" class="form-control" name="image[]" multiple>
                        <p class="text-info">Image will be resized into <b>1160 x 350 px</b></p>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
            </div>
        </div>
    </div> --}}

    {{-- Remove Slide Modal --}}
    <div class="modal fade" id="removeSlideModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Remove Slide</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Are you sure want to remove this slider?</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('slider.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id">
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



@stop

@section('script')
    <script src="{{ asset('assets/admin/js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/admin/js/ckeditor/jquery.js') }}"></script>
    <script> CKEDITOR.replaceClass = 'ckEdit' </script>

    <script>
        $('.removeBtn').on('click', function () {
            var modal = $('#removeSlideModal');
            modal.find('input[name=id]').val($(this).data('id'));
            modal.modal('show');
        });
    </script>
@stop
@section('css')

    <style>
        .my_checkbox {
            width:4vw;
            height:4vh;

        }


    </style>

@endsection
