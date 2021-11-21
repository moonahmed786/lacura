@extends('admin.layout.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">

                <div class="row">

                    <div class="col-md-6">
                       <button class="btn btn-success" id="back_btn" >Back To User Query</button>
                    </div>





                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="tile" style="background-color: black">


                @foreach($SignImages as $sImage)
                    <div style="">
                        <img class="mb-4 img-thumbnail" src="{{$sImage->image}}" style="max-width: 300px ">
                        <a href="{{route('admin.delete.draw.img',$sImage->id)}}"
                           class="btn-danger btn"><i class="fa fa-trash"></i>Delete
                        </a>
                    </div>

                @endforeach


            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_module" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="{{ route('schedule.cancel') }}">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <p class="text-info">@lang('Are you sure want to cancel this schedule ?')</p>
                        <div class="item text-center"></div>
                    </div>
                    <div class="col-md-12">
                        <label for="remark">Reason</label>
                        <textarea rows="5" class="form-control" name="remark"
                                  placeholder="Share your reason for cancellation"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" id="cancelBtn">@lang('cancel')</button>
                        <button type="button" class="btn btn-muted" data-dismiss="modal">@lang('Close')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('script')
<script>
    $('#back_btn').on('click',function () {

            window.history.back();
    });
</script>
@stop
