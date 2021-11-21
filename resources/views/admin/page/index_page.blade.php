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
                <div class="">
                    <div class="pull-right mb-2">

                        <a class="btn btn-success" href="{{route('module.language-manage',['home_page','Home Page','root'])}}"><i class="icon fa fa-language"></i>Home Page Translations </a>

                    </div>
                </div>
        </div>
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <form role="form" method="POST" action="{{route('page.update')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="key" value="index_page">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <h1>
                                        Japaneese
                                    </h1>
                                    <strong class="mr-4">Title </strong>
                                    <input type="text" class="form-control mr-4" name="title"
                                           value="{{ $page->title }}" placeholder="Title In Japaneese">
                                    <strong class="mr-4">Description </strong>
                                    <input type="text" class="form-control mr-4" name="description"
                                           value="{{ $page->description }}" placeholder="Description In Japaneese">


                                    <strong class="mr-4">keywords </strong>
                                    <input type="text" class="form-control mr-4" name="keywords"
                                           value="{{ $page->keywords }}" placeholder="keywords In Japaneese">

                                    <strong class="mr-4">Header Text </strong>
                                    <input type="text" class="form-control mr-4" name="header_text"
                                           value="{{ $page->header_text }}" placeholder="Header Text In Japaneese">


                                </div>
                                <div class="col-md-6 mb-3">
                                    <h1>
                                        Portuguese
                                    </h1>
                                    <strong class="mr-4">Title </strong>
                                    <input type="text" class="form-control mr-4" name="title_pt"
                                           value="{{ $page->title_pt }}" placeholder="Title In Portuguese">

                                    <strong class="mr-4">Description </strong>
                                    <input type="text" class="form-control mr-4" name="descriptions_pt"
                                           value="{{ $page->descriptions_pt }}" placeholder="Description In Portuguese">

                                    <strong class="mr-4">keywords </strong>
                                    <input type="text" class="form-control mr-4" name="keywords_pt"
                                           value="{{ $page->keywords_pt }}" placeholder="keywords In Portuguese">


                                    <strong class="mr-4">Header Text </strong>
                                    <input type="text" class="form-control mr-4" name="header_text_pt"
                                           value="{{ $page->header_text_pt }}" placeholder="Header Text In Portuguese">


                                </div>
                            </div>
                            <div class="form-group">
                                <h4>Japaneese</h4>
                                <textarea name="textja" class="ckEdit" rows="10">{{ $page->ja ?? '' }}</textarea>
                            </div>

                            <div class="form-group">
                                <h4>Portuguese</h4>
                                <textarea name="textpt" class="ckEdit" rows="10">{{ $page->pt ?? '' }}</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <h4>Heading 2 (Japaneese)</h4>
                                        <input name="heading_2_pt"
                                       class="form-control mr-4" type="text" value="{{ $page->heading_2_pt ?? '' }}"  placeholder="heading In Japaneese">
                                    </div>


                                </div>
                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <h4>Details 2 (Japaneese)</h4>
                                        <textarea name="details_2_jap" class="ckEdit"
                                                  rows="10">{{ $page->details_2_jap ?? '' }}</textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <h4>Heading 2 (Portuguese)</h4>
                                        <input name="heading_2_jp" class="form-control mr-4" type="text" value="{{ $page->heading_2_jp ?? '' }}"  placeholder="heading In Portuguese">


                                    </div>

                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <h4>Details 2 (Portuguese)</h4>
                                        <textarea name="details_2_pt" class="ckEdit"
                                                  rows="10">{{ $page->details_2_pt ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary btn-block btn-lg">Update</button>
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
