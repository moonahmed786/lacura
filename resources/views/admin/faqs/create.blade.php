@extends('admin.layout.master')
@section('body')


    <div class="row">
        <div class="col-md-12">
            <div class="tile">

                <div class="tile-title ">
                    Create New Faq
                    <a href="{{route('faqs-all')}}" class="btn btn-success btn-md pull-right ">
                        <i class="fa fa-eye"></i> All Faqs
                    </a>
                    <br>
                </div>

                <div class="tile-body">

                    <form method="post" class="form-horizontal" action="">
                        @csrf

                    <div class="form-body">

                        <div class="row">
                            @if (count($errors) > 0)

                                @foreach ($errors->all() as $error)
                                    <div class="col-md-12">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                &times;
                                            </button>
                                            <p>{{ $error }}</p>
                                        </div>
                                    </div>
                                @endforeach

                            @endif

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Question Title (Portuguese) </strong></label>
                                    <div class="col-md-12">
                                        <input name="title" class="form-control form-control-lg"  placeholder="Question Title" value="{{old('title')}}" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Question Title (Japanese)</strong></label>
                                    <div class="col-md-12">
                                        <input name="title_jp" class="form-control form-control-lg" value="{{old('title_jp')}}"  placeholder="Question Title" required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Question Answer (Portuguese)</strong></label>
                                    <div class="col-md-12">
                                        <textarea name="description" id="area1" rows="10" class="form-control form-control-lg ckEdit" required placeholder="Question Answer" value="{{old('description')}}"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Question Answer (Japanese)</strong></label>
                                    <div class="col-md-12">
                                        <textarea name="description_jp" value="{{old('description_jp')}}" id="area1" rows="10" class="form-control form-control-lg ckEdit" required placeholder="Question Answer"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit"  class="btn btn-primary btn-block bold btn-lg uppercase"><i class="fa fa-send"></i> Create FAQS</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- row -->
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@stop
@section('script')
    <script src="{{ asset('assets/admin/js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/admin/js/ckeditor/jquery.js') }}"></script>
    <script> CKEDITOR.replaceClass = 'ckEdit' </script>
@stop
