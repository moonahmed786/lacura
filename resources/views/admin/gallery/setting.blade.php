@extends('admin.layout.master')
@section('css')

@stop
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title ">Gallery Section Title</h3>
                <div class="tile-body">
                    <form role="form" method="POST" action="{{route('general.store')}}">
                        {{ csrf_field() }}
                        <div class="form-body">
                            <div class="form-group">
                                <label><strong>Title</strong></label>
                                <input type="text" name="gallery_title" class="form-control" value="{{$general->gallery_title}}">
                            </div>

                            <div class="form-group">
                                <label><strong>Sub-Title</strong></label>
                                <input type="text" name="gallery_detail" class="form-control" value="{{$general->gallery_detail}}">
                            </div>

                        </div>
                        <div class="form-body">
                            <div class="form-group">
                                <label><strong>Show method</strong></label>
                                <select name="gallery_show_method" class="form-control" >
                                    <option value="random" class="form-control" {{$general->gallery_show_method == 'random'? 'selected': ''}}>Random</option>
                                    <option value="newest"class="form-control" {{$general->gallery_show_method == 'newest'? 'selected': ''}}>Newest</option>
                                </select>
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

@stop
