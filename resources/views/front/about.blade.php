@extends('layouts.master')

@section('SEO')
<meta name="description" content="後親田　エリソン　忠男　についてご紹介します。魂の奇跡を通して人々の生活環境と健康を改善するのに役立つ彼の超常的な力が持っています。">
	<meta name="keywords" content="後親田　エリソン　忠男　、超常的な力、改善、生活環境、魂の奇跡">
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
									<a href="/about" class=" active ">
										<img src="{{url('/')}}/assets/images/1560174798.png">
										日本語
									</a>
								</div>
								<div class="lang">
									<a href="/pt-br/about" class="">
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
    <meta property="og:description" content="後親田　エリソン　忠男　についてご紹介します。魂の奇跡を通して人々の生活環境と健康を改善するのに役立つ彼の超常的な力が持っています。"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="100" />
@stop

@section('titulo')	
	<title>La Cura - 奇跡 {{  '| '.__($pt) }}</title>
@stop

@section('content')
    @if(activeTemp()  == 1)
	
		<!-- page title begin-->
		<div class="page-title">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-6 col-lg-6">
						<h2>@lang('神について')</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- page title end -->

    
		@include('front.partials.slider')   
	
		<div class="we-re">
			<div class="container">
				<div class="row d-flex reorder-md">
					
					@if(session('lang') == 'pt-br')
						{!! $page->pt !!}
					@else
						{!! $page->ja !!}
					@endif

					<div class="row my-3 justify-content-center align-items-center">                    
                    @auth
					
						<div id="imageGallery" class="row gallery pl-1 justify-content-center align-items-center">
							@foreach($album_items as $item)
								@if($item->filetype == 1)
									
								<a href="{{ asset('assets/storage/album/'. $item->filename) }}" class="col-md-4" style="padding-top: 30px;">
									<img src="{{ asset('assets/storage/album/thumb_'. $item->filename) }}" data-src="{{ asset('assets/storage/album/thumb_'. $item->filename) }}" alt="">
								</a>
								@else
									
								<a href="{{ 'assets/storage/album'.'/'. $item->filename }}" class="col-md-4 popup-video" data-html="#video{{ $loop->iteration }}" style="padding-top: 30px;" >
									<video src="{{ 'assets/storage/album'.'/'. $item->filename }}"></video>
								</a>
								@endif
							@endforeach
						</div>
                    @else
						
                        <div class="row gallery pl-1 justify-content-center align-items-center">
                        @foreach($album_items as $item)
                            <div class="col-md-4" style="padding-top: 30px;">
                                @if($item->filetype == 1) 
									
                                <a href="{{ route('login') }}">
                                    <img src="{{ asset('assets/storage/album/thumb_'. $item->filename) }}">
                                </a>
                                @else
									
                                <a href="{{ route('login') }}">
                                    <video src="{{ 'assets/storage/album'.'/'. $item->filename }}"></video>
                                </a>
                                @endif
								
                            </div>
                        @endforeach
						
                        </div>
                    @endauth
					
					</div>
				</div>
			</div>
		</div>
		<div id="map" style="height: 400px"></div>
    @endif
	
@stop

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
	<!-- WILLIANS -->
	<script>
		function initMap() {
			var uluru = {lat: {{ $general->about_map->long }}, lng: {{ $general->about_map->lat }}};
			var map = new google.maps.Map(document.getElementById('map'), {zoom: 4, center: uluru});
			var marker = new google.maps.Marker({position: uluru, map: map});
		}
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key={{ $general->about_map->app_key }}&callback=initMap"></script>
	<script>
		var app = new Vue({
		   el: '#app',
			data:{
			  newdata:{
				  subscribe_email: ''
			  },
			},
			methods:{
				subsribe(){
					var input = this.newdata;
					axios.post('{{route('subscriber.store')}}', input).then(function (res) {
						if (res.data.success == true){
							swal(res.data.message,"", "success");
							app.newdata.subscribe_email = '';
						}else {
							swal(res.data.message,"", "warning");
						}
					});
				},
			   
			},mounted() {
				// Magnific Popup Images
				$(".about-file").each(function(key, elem) {

					$(elem)
						.find(".popup-video")
						.magnificPopup({
							type: "iframe",
							gallery: {
								enabled: false
							}
						});
				});
				$('#imageGallery').lightGallery({
					thumbnail:true,
				});
			
				$('.popup-video').magnificPopup({});
			}
		});
	</script>
	@stop
