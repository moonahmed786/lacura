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
                    <form action="{{ route('gallery.album.mass.remove', $album->id) }}" method="post">
                        @csrf
                        <div class="submit-btn">
                            <input class="btn btn-primary" type="submit" name="submit" value="Remove selected items">
                        </div>
                        <div class="row justify-content-center align-items-center mt-5">

                            @forelse($album->items as $item)

                                <div class="col-md-3">

                                    <div class="card ml-2">

                                        @if($item->filetype == 1)

                                            <img class="w-100" src="{{ asset('assets/storage/album') .'/'. $item->filename }}" style="max-height: 170px" alt="Image">

                                        @else

                                            <video class="w-100" src="{{ asset('assets/storage/album') .'/'. $item->filename }}" style="max-height: 170px"></video>

                                        @endif

                                    </div>
                                    <span class="removeItem" data-id="{{ $item->id }}" data-toggle="tooltip" data-title="Delete"><input type="checkbox" name="check-{{$item->id}}" ></span>

                                </div>

                            @empty

                                <h5 class="text-muted text-center">No items</h5>

                            @endforelse

                        </div>
                    </form>

                </div>

        </div>

    </div>



     {{-- Remove Upload Modal --}}

     <div class="modal fade" id="removeModal" tabindex="-1" role="dialog" >

        <div class="modal-dialog" role="document">

            <div class="modal-content"   >

            <div class="modal-header">

                <h5 class="modal-title">@lang('Remove file')</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                <span aria-hidden="true">&times;</span>

                </button>

            </div>



            <form method="POST" action="{{ route('gallery.album.items.remove', $album->id) }}">

                @csrf

                <input type="hidden" name="id" >

                <div class="modal-body">

                    <p class="text-info">@lang('Are you sure want to remove this item ?')</p>

                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-danger" id="removeAlbumBtn">@lang('Remove')</button>

                    <button type="button" class="btn btn-muted" data-dismiss="modal">@lang('Close')</button>

                </div>

            </form>

            </div>

        </div>

    </div>

@endsection



@section('css')

<style>

.removeItem {

    content: '';

    position: absolute;

    color: #e74c3c;

    font-size: 1rem;

    top: 4px;

    right: 19px;

    cursor: pointer;

    background: #ecf0f1;

    border-radius: 50%;

    height: 1.5rem;

    width: 1.5rem;

    text-align: center;

}

</style>

@endsection



@section('script')

<script>

    {{--$(document).on('click', '#bulk_delete', function(){--}}
    {{--    var id = [];--}}
    {{--    if(confirm("Are you sure you want to Delete this data?"))--}}
    {{--    {--}}
    {{--        // console.log(items_delete);--}}
    {{--        $('.items_delete:checked').each(function(){--}}
    {{--            id.push($(this).val());--}}
    {{--        });--}}
    {{--        console.log(id)--}}
    {{--        if(id.length > 0)--}}
    {{--        {--}}
    {{--            $.ajax({--}}
    {{--                "_token": "{{ csrf_token() }}",--}}
    {{--                --}}{{--url:"{{ route('gallery.album.mass.remove')}}",--}}
    {{--                method:"get",--}}
    {{--                data:{id:id.join(","),album_id:{{$album->id}}},--}}
    {{--                success:function(data)--}}
    {{--                {--}}
    {{--                    alert(data);--}}
    {{--                    $('#student_table').DataTable().ajax.reload();--}}
    {{--                }--}}
    {{--            });--}}
    {{--        }--}}
    {{--        else--}}
    {{--        {--}}
    {{--            swal("Please select atleast one checkbox");--}}
    {{--        }--}}
    {{--    }--}}
    {{--});--}}





    var path = "{{ asset('assets/storage/album') .'/' }}";



    $('.viewAlbumBtn').on('click', function() {

        var modal = $('#viewAlbumModal');

        var title = $(this).data('title');

        var comment = $(this).data('comment');

        var items = $(this).data('items');

        var temp = '';



        $.each(items, function(key, value) {

            temp += '<div class="col-md-6 album-item">';

            temp += `<a href="${path}${value.filename}" data-rel="lightcase">`;

            if(value.filetype == 2) {

                temp += `<video src="${path}${value.filename}"></video>`;

            }else{

                temp += `<img src="${path}${value.filename}">`;

            }

            temp += '</a>';

            temp += '</div>';

        });





        modal.find('.album_title').text(title);

        modal.find('.comment').text(comment);

        modal.find('.album').html(temp);

        modal.modal('show');

    });



    $('.removeItem').on('click', function() {

        // var modal = $('#removeModal');
        //
        // modal.find('input[name=id]').val($(this).data('id'));
        //
        // modal.modal('show');
        var id = [];

            $('.removeItem:checked').each(function(){
                id.push(1);
            });

            if(id.length > 0)
            {
                console.log(id)
            }
            else
            {
                console.log(id)

            }




    });

</script>

@stop



