@extends('layouts.index')



@section('SEO')
    <meta name="description" content="{!!(session('lang') == 'pt-br')? $page->descriptions_pt : $page->description!!}">
    <meta name="keywords" content="{!!(session('lang') == 'pt-br')? $page->keywords_pt : $page->keywords!!}">
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
    <meta property="og:title"
          content="奇跡 La Cura - {!!(session('lang') == 'pt-br')? $page->title_pt : $page->title!!}"/>
    <meta property="og:site_name" content="La Cura - 奇跡 {{  '| '.__($pt) }}"/>
    <meta property="og:description"
          content="{!!(session('lang') == 'pt-br')? $page->descriptions_pt : $page->description!!}"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="100"/>
@stop

@section('titulo')
    <title>La Cura - 奇跡 {!!(session('lang') == 'pt-br')? $page->title_pt : $page->title!!}</title>
    <meta name="title" Content="{!!(session('lang') == 'pt-br')? $page->title_pt : $page->title!!}">
@stop

@section('content')
    @if(activeTemp()  == 1)

        <div class="ast_pagetitle">
            <div class="ast_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>@lang('神について')</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul class="breadcrumb">
                            <li><a href="/">@lang('Home')</a></li>
                            <li>//</li>
                            <li>@lang('神について')</li>
                        </ul>
                        {{--                        <p style="font-size: 19px;">@lang('精神的な病気を癒し、聖なる魂の助けを借りて起こる内面の変化の奇跡的な命です。')</p>--}}

                    </div>
                </div>
            </div>
        </div>



		<!-- page title end -->

        @include('front.partials.slider_n')
{{--		@include('front.partials.slider')   --}}

		<div class="we-re">
			<div class="container">
				<div class=" d-flex reorder-md">


					<div class=" my-3 justify-content-center align-items-center">
                        @if(session('lang') == 'pt-br')
                            {!! $page->pt !!}
                        @else
                            {!! $page->ja !!}
                        @endif

                            <h1 style="vertical-align: middle">&nbsp;
{{--                                @lang('Album')--}}
                            </h1>
                    @auth


						<div id="imageGallery" class="">
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
        <div class="ast_contact_map">
            <div id="googleMap" style="width:100%;height:400px;"></div>

            <script>
                function myMap() {
                    var mapProp= {
                        center:new google.maps.LatLng({{ $general->about_map->long }},{{ $general->about_map->lat }}),
                        zoom:6,
                    };
                    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key={{ $general->about_map->app_key }}&callback=myMap"></script>
{{--            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.665591193351!2d-81.23677798444672!3d28.54976958245048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e7666b70c7639b%3A0x138d66cd5d424720!2sBloomfield+Dr%2C+Orlando%2C+FL+32825%2C+USA!5e0!3m2!1sen!2sin!4v1501822735922" allowfullscreen></iframe>--}}
        </div>

{{--        <div id="map" style="height: 300px"></div>--}}
{{--        <script>--}}
{{--            function initMap() {--}}
{{--                var uluru = {lat: {{ $general->about_map->long }}, lng: {{ $general->about_map->lat }}};--}}
{{--                var map = new google.maps.Map(document.getElementById('map'), {zoom: 4, center: uluru});--}}
{{--                var marker = new google.maps.Marker({position: uluru, map: map});--}}
{{--            }--}}
{{--            console.log('loading absc')--}}
{{--        </script>--}}
{{--        --}}{{--	<script async defer src="https://maps.googleapis.com/maps/api/js?key={{ $general->about_map->app_key }}&callback=initMap"></script>--}}
{{--        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXnj8BJPaaYBy_TFCQpuYpuOMZgHUWqYI&callback=initMap" async defer></script>--}}

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
