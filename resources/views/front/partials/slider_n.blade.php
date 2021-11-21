<section class="swiper-container loading" id="header_slider">
    <div class="swiper-wrapper" style=" max-height: 500px">

        @foreach($sliders as $slider)
            <div class="swiper-slide"
                >
                <img src="{{ asset('assets/images/slider') .'/'. $slider->image_name }}" class=""/>
                <div class="content">
                    {{--                @if(($general->slider_text && session('lang') == 'ja') || ($general->slider_textpt && session('lang') == 'pt-br'))--}}

                    {{--                    <span class="caption" data-swiper-parallax="-20%">--}}
                    {{--                        @if(session('lang') == 'ja')--}}
                    {{--                            {!! $general->slider_text !!}--}}
                    {{--                        @else--}}
                    {{--                            {!! $general->slider_textpt !!}--}}
                    {{--                        @endif--}}

                    {{--</span>--}}
                    {{--                @endif--}}
                    {{--                <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Shaun Matthews</p>--}}
                    {{--                <span class="caption" data-swiper-parallax="-20%">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>--}}
                </div>
                <div style="   background: #25d5be; max-width: 130px; border-radius: 33%; justify-content: center;">

                    <span>@lang('シェア'):</span>
                    <span data-href="{{ asset('assets/images/slider') .'/'. $slider->image_name }}"
                          data-layout="button_count" data-size="small"><a target="_blank"
                                                                          href="https://www.facebook.com/sharer/sharer.php?u={{ asset('assets/images/slider') .'/'. $slider->image_name }}&amp;src=sdkpreparse"
                                                                          class="fb-xfbml-parse-ignore"><i
                                class="fa fa-fw fa-facebook"></i></a></span>
                    <span><a class="twitter-share-button"
                             href="https://twitter.com/intent/tweet?text={{ $general->sitename }}&amp;url={{ asset('assets/images/slider') .'/'. $slider->image_name }}"
                             target="_blank"><i class="fa fa-fw fa-twitter"></i></a></span>
                    <span><a class="linkedinShareBtn"
                             href="http://www.linkedin.com/shareArticle?mini=true&url={{ url('/') }}&title={{ $general->sitename }}&summary={{ $slider->title }}"
                             data-image="{{ $slider->image_name }}" data-title="{{ $slider->title }}" target="_blank"><i
                                class="fa fa-fw fa-linkedin"></i></a></span>
                </div>
            </div>
        @endforeach

    </div>


    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
</section>
<?php $general = App\GeneralSettings::first() ?>

<!-- slider begin-->
{{--		<div id="donate" class="price">--}}
{{--			<div class="container">--}}
{{--				<div class="row justify-content-center">--}}
{{--					<div class="col-xl-12 col-lg-12">--}}
{{--						<ul id="slider">--}}
{{--							@foreach($sliders as $slider)--}}

{{--							<li data-thumb="{{ asset('assets/images/slider') .'/thumb_'. $slider->image_name }}" data-src="{{ asset('assets/images/slider') .'/'. $slider->image_name }}">--}}
{{--								<img src="{{ asset('assets/images/slider') .'/'. $slider->image_name }}" />--}}
{{--								<div class="text-right mt-2">@lang('シェア'):--}}
{{--									<span data-href="{{ asset('assets/images/slider') .'/'. $slider->image_name }}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ asset('assets/images/slider') .'/'. $slider->image_name }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="fa fa-fw fa-facebook"></i></a></span>--}}
{{--                                    <span><a class="twitter-share-button" href="https://twitter.com/intent/tweet?text={{ $general->sitename }}&amp;url={{ asset('assets/images/slider') .'/'. $slider->image_name }}" target="_blank"><i class="fa fa-fw fa-twitter"></i></a></span>--}}
{{--                                    <span><a class="linkedinShareBtn" href="http://www.linkedin.com/shareArticle?mini=true&url={{ url('/') }}&title={{ $general->sitename }}&summary={{ $slider->title }}" data-image="{{ $slider->image_name }}" data-title="{{ $slider->title }}" target="_blank"><i class="fa fa-fw fa-linkedin"></i></a></span>--}}
{{--								</div>--}}
{{--							</li>--}}
{{--							@endforeach--}}

{{--						</ul>--}}
{{--					</div>--}}
{{--					@if(($general->slider_text && session('lang') == 'ja') || ($general->slider_textpt && session('lang') == 'pt-br'))--}}

{{--					<div class="col-xl-12 col-lg-12 slider-text mt-4 text-center">--}}
{{--						@if(session('lang') == 'ja')--}}
{{--							{!! $general->slider_text !!}--}}
{{--						@else--}}
{{--							{!! $general->slider_textpt !!}--}}
{{--						@endif--}}
{{--					</div>--}}

{{--					@endif--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
<!-- slider end -->

@section('script')

    <script type="text/javascript">
        // Params
        console.log('loading ');

        $(document).ready(function () {
            /*var slider_speed = '{{ $general->slider_speed }}';
			var slider_url = "{{ asset('assets/images/slider') }}";
			$('#slider').lightSlider({
				gallery:true,
				item:1,
				loop:true,
				thumbItem:9,
				slideMove:1,
				slideMargin:0,
				enableDrag: true,
				speed:slider_speed,
				auto:true,
				currentPagerPosition:'left',
				onSliderLoad: function(el) {
				}
			});
*/
            var slider_url = "{{ asset('assets/images/slider') }}";
			$('.linkedinShareBtn').on('click', function(event) {
				event.preventDefault();
				$('meta[name=linkedin_image]').attr('content', slider_url +'/'+ $(this).data('image'));
				$('meta[name=linkedin_description]').attr('content', $(this).data('title'));
				window.open($(this).attr('href'), '_blank');
			});
            // Params

        });
    </script>
@endsection
