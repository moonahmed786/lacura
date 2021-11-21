@extends('admin.layout.master')
@section('css')

@stop
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title ">New User Section Title</h3>
                <div class="tile-body">
                    <form role="form" method="POST" action="{{route('general.store')}}">
                        {{ csrf_field() }}
                        <div class="form-body">
                            <div class="form-group">
                                <label><strong>Title</strong></label>
                                <input type="text" name="new_user_title" class="form-control" value="{{$general->new_user_title}}">
                            </div>

                            <div class="form-group">
                                <label><strong>Sub-Title</strong></label>
                                <input type="text" name="new_user_sub_title" class="form-control" value="{{$general->new_user_sub_title}}">
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
