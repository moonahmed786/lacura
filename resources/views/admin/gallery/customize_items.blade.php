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
                <form action="{{ route('gallery.album.customize-items', $album->id) }}" method="post">
                    @csrf
                    <div class="submit-btn">
                        <input class="btn btn-primary" type="submit" name="submit" value="Update About Gallery">
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
                                <span class="removeItem" data-id="{{ $item->id }}" data-toggle="tooltip" data-title="show/hide"><input type="checkbox" name="check-{{$item->id}}" {{$item->show_about==1?'checked':''}}></span>

                            </div>

                        @empty

                            <h5 class="text-muted text-center">No items</h5>

                        @endforelse

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


@stop



