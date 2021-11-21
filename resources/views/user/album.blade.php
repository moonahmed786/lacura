@extends('layouts.master')

@section('SEO')
<meta name="description" content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。">
	<meta name="keywords" content="精神的, トラウマ, 中毒, 病気, 魂の償い, 依存, 浄化, 開運, お祓い">
@stop

@section('lang')

	@if(request()->session()->get('lang') == 'en' )

		<meta http-equiv="refresh" content="0;{{url('/')}}/change-lang/ja/">

	@elseif(request()->session()->get('lang') == 'pt' )

	<meta http-equiv="refresh" content="0;{{url('/')}}/change-lang/ja/">

	@else

						<div class="col-xl-12">
							<div class="lang-wrapper">
								<div class="lang">
									<a href="/" class=" active ">
										<img src="{{url('/')}}/assets/images/1560174798.png">
										日本語
									</a>
								</div>
								<div class="lang">
									<a href="/pt-br/" class="">
										<img src="{{url('/')}}/assets/images/1560174834.png">
										Português
									</a>
								</div>
															
							</div>
						</div>

	@endif
                    
@stop

@section('facebook')	
	<meta property="og:title" content="La Cura - 奇跡 {{  '| '.__($pt) }}"/>
    <meta property="og:site_name" content="La Cura - 奇跡 {{  '| '.__($pt) }}"/>
    <meta property="og:description" content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="100" />
@stop

@section('titulo')	
	<title>La Cura - 奇跡 {{  '| '.__($pt) }}</title>
@stop

@section('style')
<style>
    .price {
        padding: 0 0 120px;
        background: #fff;
    }
</style>
@stop
@section('content')
    @if(activeTemp()  == 1)
    <div class="page-title" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <h2 class="extra-margin">{{__($pt)}}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="register" id="app" style="padding-top: 25px;">
        <div class="container" style="width: 100%;">
            <div class="price">
                <div class="container">    
                    <div class="row">    
                        <div class="col-xl-12 col-lg-12">
                            {{-- <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="monthly-tab" data-toggle="tab" href="#albumView" role="tab" aria-selected="true">Your Albums</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="yearly-tab" data-toggle="tab" href="#uploadView" role="tab" aria-selected="false">Uploads</a>
                                </li>
                            </ul> --}}
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade active show" id="albumView" role="tabpanel" aria-labelledby="monthly-tab">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="card album-container">
                                                <div class="card-body">
                                                    
                                                    <div class="row">
                                                        @forelse($albums as $album)
                                                        <div class="col-md-12 mb-4">
                                                            <div class="card bg-light">
                                                                <div class="card-header">
                                                                    <div class="pull-left">
                                                                        <h5 class="d-inline-block">{{ $album->title }}</h5>
                                                                        <p class="d-inline-block text-muted"> - {{ \Carbon\Carbon::parse($album->created_at)->format('M d, Y') }}</p>
                                                                    </div>
                                                                    {{-- <div class="pull-right">
                                                                        @if($album->public == 1)
                                                                            <a class="btn btn-warning btn-icon setAsProfileBtn text-white" href="{{ route('user.album.private', $album->id) }}"><i class="fa fa-eye-slash"></i> @lang('Make Private')</a>
                                                                        @else
                                                                            <a class="btn btn-warning btn-icon setAsProfileBtn text-white" href="{{ route('user.album.public', $album->id) }}"><i class="fa fa-eye"></i> @lang('Make Public')</a>
                                                                        @endif
                                                                        &nbsp;
                                                                        <button class="btn btn-success btn-icon editAlbumBtn" data-title="{{ $album->title }}" data-items="{{ $album->items()->get(['id','filename', 'filetype']) }}" data-id="{{ $album->id }}" data-comment="{{ $album->comment }}"><i class="fa fa-pencil"></i> @lang('Edit')</button>
                                                                        &nbsp;
                                                                        <button class="btn btn-danger btn-icon removeAlbumBtn" data-title="{{ $album->title }}"  data-id="{{ $album->id }}"><i class="fa fa-trash"></i> @lang('Remove')</button>
                                                                    </div> --}}
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row album gallery justify-content-center align-items-center">
                                                                        {{-- @forelse($album->items as $item)
                                                                        <div class="col-md-3">
                                                                            <div class="album-item mb-4">
                                                                                @if($item->filetype == 1)
                                                                                <a href="{{ asset('assets/storage/album') .'/'. $item->filename }}" class="popup-image">
                                                                                    <img src="{{ asset('assets/storage/album') .'/thumb_'. $item->filename }}" style="width: 100%;">
                                                                                </a>
                                                                                @elseif($item->filetype == 2)
                                                                                <a href="{{ asset('assets/storage/album').'/'. $item->filename }}" class="popup-video">
                                                                                    <video src="{{ asset('assets/storage/album').'/'. $item->filename }}" style="width: 100%;" ></video>
                                                                                </a>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        @empty
                                                                            <h5>@lang('No content available.')</h5>
                                                                        @endforelse --}}
                                                                        <div class="row gallery imageGallery pl-1 justify-content-center align-items-center">
                                                                                @forelse($album->items as $item)
                                                                                    @if($item->filetype == 1)
                                                                                    <a href="{{ asset('assets/storage/album/'. $item->filename) }}" class="col-lg-2 col-md-3 mb-2">
                                                                                        <img src="{{ asset('assets/storage/album/thumb_'. $item->filename) }}" data-src="{{ asset('assets/storage/album/thumb_'. $item->filename) }}" alt="">
                                                                                    </a>
                                                                                    @else
                                                                                    <a href="{{ 'assets/storage/album'.'/'. $item->filename }}" class="col-lg-2 col-md-3 mb-2 popup-video" data-html="#video{{ $loop->iteration }}" >
                                                                                        <video src="{{ 'assets/storage/album'.'/'. $item->filename }}"></video>
                                                                                    </a>
                                                                                    @endif
                                                                                @empty
                                                                                <p class="text-center text-muted">@lang('No content')</p>
                                                                                @endforelse
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @empty
                                                        <div class="col-md-12 text-center">
                                                            <h5>@lang('You do not have any album.')</h5>
                                                        </div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="tab-pane fade" id="uploadView" role="tabpanel" aria-labelledby="yearly-tab">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="card album-container">
                                                <div class="card-header">
                                                    <div class="pull-left">
                                                        <h3>@lang('Your Uploads')</h3> 
                                                    </div>
                                                    <div class="pull-right">
                                                        <button class="btn btn-success btn-icon" data-target="#newUploadModal" data-toggle="modal"><i class="fa fa-plus"></i> @lang('New Upload')</button>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="album gallery row">
                                                        @forelse($uploads as $item)
                                                        <div class="album-item col-md-3">
                                                            <div class="box">
                                                                <div class="image">
                                                                    @if($item->filetype == 1)
                                                                    <a href="{{ asset('assets/storage/album') .'/'. $item->filename }}" class="popup-image">
                                                                        <img src="{{ asset('assets/storage/album') .'/'. $item->filename }}" alt="">
                                                                    </a>
                                                                    @elseif($item->filetype == 2)
                                                                    <a href="{{ asset('assets/storage/album').'/'. $item->filename }}" class="popup-video">
                                                                        <video src="{{ asset('assets/storage/album').'/'. $item->filename }}" ></video>
                                                                    </a>
                                                                    @endif
                                                                    <div class="social_icon">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="https://twitter.com/intent/tweet?text={{ $general->sitename }}&amp;url={{urlencode(url('assets/storage/album'.$item->filename)) }}">
                                                                                    <i class="fa fa-twitter"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(url('assets/storage/album'.$item->filename)) }}">
                                                                                    <i class="fa fa-facebook"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{urlencode(url('assets/storage/album'.$item->filename)) }}&amp;title={{ $general->sitename }}">
                                                                                    <i class="fa fa-linkedin"></i>
                                                                                </a>
                                                                            </li>
                                                                            @if($item->filetype == 1)
                                                                                <li>
                                                                                    <a href="{{ route('user.album.item.profile', $item->id) }}" title="Set as profile picture">
                                                                                        <i class="fa fa-picture-o"></i>
                                                                                    </a>
                                                                                </li>
                                                                            @endif
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="info">
                                                                    <button class="btn btn-success btn-icon editUploadBtn" data-id="{{ $item->id }}" data-comment="{{ $item->comment }}" data-filetype="{{ $item->filetype }}" data-filename="{{ $item->filename }}"><i class="fa fa-pencil"></i> @lang('Edit')</button>
                            
                                                                    <button class="btn btn-danger btn-icon removeUploadBtn" data-id="{{ $item->id }}" data-filetype="{{ $item->filetype }}" data-filename="{{ $item->filename }}"><i class="fa fa-trash"></i> @lang('Remove')</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @empty
                                                        <div class="col-md-12 text-center">
                                                            <h5>@lang('No content available.')</h5>
                                                        </div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Create an Album Modal --}}
    {{-- <div class="modal fade" id="newAlbumModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content"   >
            <div class="modal-header">
                <h5 class="modal-title">@lang('Create an Album')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('user.album.store') }}" enctype="multipart/form-data">
                @csrf                
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="title" class="col-sm-4 col-form-label font-weight-bold">@lang('Album Title')</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="title" id="title" placeholder="@lang('Your album name')">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="upload-file" class="col-sm-4 col-form-label font-weight-bold">@lang('Upload Your Photos / Videos')</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="item[]" id="upload-file" multiple>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="comment" class="col-sm-4 col-form-label font-weight-bold">@lang('Comment')</label>
                        <div class="col-sm-8">
                            <textarea rows="5" class="form-control" name="comment" id="comment"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">@lang('Create')</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                </div>
            </form>
            </div>
        </div>
    </div> --}}

    {{-- Edit an Album Modal --}}
    {{-- <div class="modal fade" id="editAlbumModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content"   >
            <div class="modal-header">
                <h5 class="modal-title">@lang('Edit Album') : <span class="album_title"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                <form method="POST" action="{{ route('user.album.update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="album_id">
                    <div class="form-group row">
                        <label for="title" class="col-sm-4 col-form-label font-weight-bold">@lang('Album Title')</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="title" id="title" placeholder="@lang('Your album name')">
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <label for="upload-file" class="col-sm-4 col-form-label font-weight-bold">@lang('Upload Your Photos / Videos')</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="item[]" id="upload-file" multiple>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="comment" class="col-sm-4 col-form-label font-weight-bold">@lang('Comment')</label>
                        <div class="col-sm-8">
                            <textarea rows="5" class="form-control" name="comment" id="comment"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-12 col-form-label border-bottom text-center font-weight-bold my-4">@lang('Album Content')</label>
                        <div class="album row"></div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="updateAlbumBtn">@lang('Update')</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
            </div>
            </div>
        </div>
    </div> --}}

    {{-- Remove an Album Item Modal --}}
    {{-- <div class="modal fade" id="removeAlbumItemModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content"   >
            <div class="modal-header">
                <h5 class="modal-title">@lang('Remove From Album') : <span class="album_title"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form method="POST" action="{{ route('user.album.item.remove') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="album_item_id" >
                <div class="modal-body">
                    <p class="text-info">@lang('Are you sure want to remove this item ?')</p>
                    <div class="item p-2 text-center"></div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" id="removeAlbumItemBtn">@lang('Remove')</button>
                    <button type="button" class="btn btn-muted" data-dismiss="modal">@lang('Close')</button>
                </div>
            </form>
            </div>
        </div>
    </div> --}}

    {{-- Remove an Album Modal --}}
    {{-- <div class="modal fade" id="removeAlbumModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content"   >
            <div class="modal-header">
                <h5 class="modal-title">@lang('Remove Album') : <span class="album_title"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form method="POST" action="{{ route('user.album.remove') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="album_id" >
                <div class="modal-body">
                    <p class="text-info">@lang('Are you sure want to remove this album ?')</p>
                    <p class="text-danger">@lang('All contents of this album will also be removed.')</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" id="removeAlbumBtn">@lang('Remove')</button>
                    <button type="button" class="btn btn-muted" data-dismiss="modal">@lang('Close')</button>
                </div>
            </form>
            </div>
        </div>
    </div> --}}

    {{-- New Upload Modal --}}
    {{-- <div class="modal fade" id="newUploadModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content"   >
            <div class="modal-header">
                <h5 class="modal-title">@lang('Upload')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('user.album.item.store') }}" enctype="multipart/form-data">
                @csrf                
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="upload-file" class="col-sm-4 col-form-label font-weight-bold">@lang('Upload Your Photos / Videos')</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="item[]" id="upload-file" multiple>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="comment" class="col-sm-4 col-form-label font-weight-bold">@lang('Comment')</label>
                        <div class="col-sm-8">
                            <textarea rows="5" class="form-control" name="comment" id="comment"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">@lang('Upload')</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                </div>
            </form>
            </div>
        </div>
    </div> --}}

    {{-- Edit Upload Modal --}}
    {{-- <div class="modal fade" id="editUploadModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content"   >
            <div class="modal-header">
                <h5 class="modal-title">@lang('Edit Your Upload')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="item mb-2 p-2 text-center"></div>
                <form method="POST" action="{{ route('user.album.item.update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="album_item_id">   
                    <div class="form-group row">
                        <label for="comment" class="col-sm-4 col-form-label font-weight-bold">@lang('Comment')</label>
                        <div class="col-sm-8">
                            <textarea rows="5" class="form-control" name="comment" id="comment"></textarea>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="updateUploadBtn">@lang('Update')</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
            </div>
            </div>
        </div>
    </div> --}}

    {{-- Remove Upload Modal --}}
    {{-- <div class="modal fade" id="removeUploadModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content"   >
            <div class="modal-header">
                <h5 class="modal-title">@lang('Remove file')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form method="POST" action="{{ route('user.album.item.delete') }}">
                @csrf
                <input type="hidden" name="album_item_id" >
                <div class="modal-body">
                    <p class="text-info">@lang('Are you sure want to remove this item ?')</p>
                    <div class="item p-2 text-center"></div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" id="removeUploadBtn">@lang('Remove')</button>
                    <button type="button" class="btn btn-muted" data-dismiss="modal">@lang('Close')</button>
                </div>
            </form>
            </div>
        </div>
    </div> --}}
@endif


@endsection


@push('light-gallery')
<script src="{{ asset('assets/front/js/lightgallery.min.js') }}"></script>
<script src="{{ asset('assets/front/js/lg-fullscreen.js') }}"></script>
<script src="{{ asset('assets/front/js/lg-thumbnail.js') }}"></script>
<script src="{{ asset('assets/front/js/lg-video.js') }}"></script>
<script src="{{ asset('assets/front/js/lg-autoplay.js') }}"></script>
<script src="{{ asset('assets/front/js/lg-zoom.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.mousewheel.min.js') }}"></script>
@endpush
@push('style-lib')
<link rel="stylesheet" href="{{ asset('assets/front/css/lightgallery.min.css') }}">

@endpush
@section('script')
    <script>
        
        var app = new Vue({
            el: '#app',
            data:{
                codeData:{
                    code: ''
                },
                errors: ''
            },
            methods:{
                submitCode(){
                    var input = this.codeData;
                    axios.post('{{route('check_two_facetor')}}',input).then(function (e) {

                        if (e.data.success == true){
                            $("#changePAss").submit();
                            console.log("ok")
                        }else {
                            swal(e.data.message,"", "warning");
                        }

                    }).catch(function (error) {
                        app.errors = error.response.data.errors.code;
                    })
                }
            },
            mounted() {
                var path = "{{ asset('assets/storage/album') .'/' }}";

                  $('.imageGallery').lightGallery({
                        thumbnail:true,
                    });                
                
                // Edit Album
                // $('.editAlbumBtn').on('click', function() {
                //     var modal = $('#editAlbumModal');
                //     var title = $(this).data('title');
                //     var items = $(this).data('items');
                //     var id = $(this).data('id');
                //     var comment = $(this).data('comment');

                //     modal.find('.album_title').text(title);
                //     modal.find('input[name=album_id]').val(id);
                //     modal.find('input[name=title]').val(title);
                //     modal.find('textarea[name=comment]').val(comment);

                //     var temp = '';
                //     $.each(items, function(key, value) {
                //         temp += '<div class="album-item album-item-remove col-md-3">';
                //         temp += `<a class="removeAlbumItemBtn" data-item="${path}${value.filename}" data-filetype="${value.filetype}" data-id="${value.id}" data-title="${title}">`;
                //         if(value.filetype == 2) {
                //             temp += `<video src="${path}${value.filename}"></video>`;
                //         }else{
                //             temp += `<img src="${path}${value.filename}">`;
                //         }
                //         temp += '</a>';
                //         temp += '</div>';
                //     });

                //     modal.find('.album').html(temp);

                //     modal.modal('show');

                //     $('#updateAlbumBtn').on('click', function() {
                //         modal.find('form').submit();
                //     });

                // });

                // Remove Album Item
                // $('#editAlbumModal').on('click', '.removeAlbumItemBtn', function() {
                //     var modal = $('#removeAlbumItemModal');
                //     var title = $(this).data('title');
                //     var item = $(this).data('item');
                //     var id = $(this).data('id');
                //     var filetype = $(this).data('filetype');

                //     modal.find('.album_title').text(title);
                //     modal.find('input[name=album_item_id]').val(id);

                //     if(filetype == 2) {
                //         temp = `<video src="${item}"></video>`;
                //     }else{
                //         temp = `<img src="${item}">`;
                //     }

                //     modal.find('.item').html(temp);

                //     modal.modal('show');
                // });

                // Remove Album
                // $('.removeAlbumBtn').on('click', function() {
                //     var modal = $('#removeAlbumModal');
                //     var title = $(this).data('title');
                //     var id = $(this).data('id');

                //     modal.find('.album_title').text(title);
                //     modal.find('input[name=album_id]').val(id);
                //     modal.modal('show');

                // });

                // Remove Upload
                // $('.removeUploadBtn').on('click', function() {
                //     var modal = $('#removeUploadModal');
                //     var filename = $(this).data('filename');
                //     var filetype = $(this).data('filetype');
                //     var id = $(this).data('id');

                //     modal.find('input[name=album_item_id]').val(id);

                //     if(filetype == 2) {
                //         temp = `<video src="${path}${filename}"></video>`;
                //     }else{
                //         temp = `<img src="${path}${filename}">`;
                //     }

                //     modal.find('.item').html(temp);

                //     modal.modal('show');
                // });
                
                // Update Upload
                // $('.editUploadBtn').on('click', function() {
                //     var modal = $('#editUploadModal');
                //     var comment = $(this).data('comment');
                //     var filename = $(this).data('filename');
                //     var filetype = $(this).data('filetype');
                //     var id = $(this).data('id');

                //     modal.find('input[name=album_item_id]').val(id);
                //     modal.find('textarea[name=comment]').val(comment);
                    
                //     if(filetype == 2) {
                //         temp = `<video src="${path}${filename}"></video>`;
                //     }else{
                //         temp = `<img src="${path}${filename}">`;
                //     }

                //     modal.find('.item').html(temp);

                //     $('#updateUploadBtn').on('click', function() {
                //         modal.find('form').submit();
                //     });

                //     modal.modal('show');
                // });

                var success = "{{ session()->has('success') ? session()->get('success') : '' }}";
                var success_text = "{{ session()->has('success') ? session()->get('success_text') : '' }}";
                var errors = [];

                if( success.length ) {
                    swal({
                        title: success,
                        text: success_text,
                        icon: 'success',
                        button: 'Close',
                    });
                }

                @if ( isset($errors) )
                    errors = @php echo json_encode($errors->all()) @endphp;
                @endif

                if ( errors.length ) {
                    list = document.createElement('ul');

                    $.each(errors, function(idx, err) {
                        listItem = document.createElement('li');
                        listItem.innerHTML = err;
                        list.append(listItem);
                    });
                    swal({
                        content: list, 
                        button: 'Close',
                        icon: 'error',
                    });
                }

    
            }


        });
    </script>
@stop
