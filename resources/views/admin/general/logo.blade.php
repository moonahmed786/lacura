@extends('admin.layout.master')
@section('import-css')
    <link href="{{ asset('assets/admin/css/jquery.fileupload.css') }}" rel="stylesheet">
@stop
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <form role="form" method="POST" action="{{route('manage-logo')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-primary minh-185">
                                    <div class="panel-heading"><strong>Present Logo (Japan)</strong></div>
                                    <div class="panel-body">
                                        <img src="{{ asset('assets/images/logo/logo.png') }}" class="img-responsive"
                                             width="" height="80px" >
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                                            <span class="btn btn-info fileinput-button">
                                                <i class="fa fa-plus"></i>
                                            <span> Upload New Logo </span>
                                            <input type="file" name="logo" class="form-control input-lg"> </span>
                                    @if ($errors->has('logo'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('logo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="panel panel-primary minh-185">
                                    <div class="panel-heading"><strong>Present Logo (Portugal)</strong></div>
                                    <div class="panel-body">
                                        <img src="{{ asset('assets/images/logo/logo-pt.png') }}" class="img-responsive"
                                             width="" height="80px" >
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group{{ $errors->has('logo-pt') ? ' has-error' : '' }}">
                                            <span class="btn btn-info fileinput-button">
                                                <i class="fa fa-plus"></i>
                                            <span> Upload New Logo </span>
                                            <input type="file" name="logo-pt" class="form-control input-lg"> </span>
                                    @if ($errors->has('logo-pt'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('logo-pt') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="panel panel-primary minh-185">
                                    <div class="panel-heading"><strong>Present Icon</strong></div>
                                    <div class="panel-body">
                                        <img src="{{ asset('assets/images/logo/favicon.png') }}" class="img-responsive"
                                             width="" height="60px">
                                    </div>
                                    <br><br>
                                </div>
                                <div class="form-group{{ $errors->has('favicon') ? ' has-error' : '' }}">
                                    <span class="btn btn-info fileinput-button">
                                        <i class="fa fa-plus"></i>
                                        <span> Upload New Icon </span>
                                        <input type="file" name="favicon" class="form-control input-lg" >
                                    </span>
                                    @if ($errors->has('favicon'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('favicon') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
{{--                                <div class="panel panel-primary minh-185">--}}
{{--                                    <div class="panel-heading"><strong>Registration Image</strong></div>--}}
{{--                                    <div class="panel-body">--}}
{{--                                        <img src="{{ asset('assets/images/logo') .'/'. $general->registration_logo }}" class="img-responsive"--}}
{{--                                             width="" height="60px">--}}
{{--                                    </div>--}}
{{--                                    <br><br>--}}
{{--                                </div>--}}
{{--                                <div class="form-group{{ $errors->has('registration_image') ? ' has-error' : '' }}">--}}
{{--                                    <span class="btn btn-info fileinput-button">--}}
{{--                                        <i class="fa fa-plus"></i>--}}
{{--                                        <span> Upload New Image </span>--}}
{{--                                        <input type="file" name="registration_image" class="form-control input-lg" >--}}
{{--                                    </span>--}}
{{--                                    <p class="text-info">Image will be resized into <b>468 x 60 px</b></p>--}}
{{--                                    @if ($errors->has('registration_image'))--}}
{{--                                        <span class="help-block">--}}
{{--                                            <strong>{{ $errors->first('registration_image') }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-actions right col-md-12">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@stop

@section('import-script')
    <script src="{{ asset('assets/admin/js/bootstrap-fileinput.js') }}"></script>
@stop
