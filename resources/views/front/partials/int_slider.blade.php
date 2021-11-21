
<section class="swiper-container loading" id="inswiper-container">
    <div class="swiper-wrapper">

<?php
        $lang = session('lang');

        $general = App\GeneralSettings::first();
        if($general->in_slider_show_method == 'newest'){
            $slider_batch = \App\InstSlider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->orderByDesc('batch_no')->first(['batch_no']);
            $Ins_sliders = \App\InstSlider::where('batch_no', $slider_batch['batch_no'])->where('lang', $lang)->orderBy('created_at', 'desc')->limit($general->in_slider_number)->get();
        }else{
            $slider_batch = \App\InstSlider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->inRandomOrder()->first(['batch_no']);
            $Ins_sliders = \App\InstSlider::where('batch_no', $slider_batch['batch_no'])->where('lang', $lang)->inRandomOrder()->limit($general->in_slider_number)->get();
        }
        ?>

        @foreach($Ins_sliders as $inslider)
            <div class="swiper-slide" >
                <img src="{{ asset('assets/images/inslider') .'/'. $inslider->image_name }}" alt="{{$inslider->image_name}}" class="img-responsive"/>
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
                    <span data-href="{{ asset('assets/images/slider') .'/'. $inslider->image_name }}"
                          data-layout="button_count" data-size="small"><a target="_blank"
                                                                          href="https://www.facebook.com/sharer/sharer.php?u={{ asset('assets/images/slider') .'/'. $inslider->image_name }}&amp;src=sdkpreparse"
                                                                          class="fb-xfbml-parse-ignore"><i
                                class="fa fa-fw fa-facebook"></i></a></span>
                    <span><a class="twitter-share-button"
                             href="https://twitter.com/intent/tweet?text={{ $general->sitename }}&amp;url={{ asset('assets/images/slider') .'/'. $inslider->image_name }}"
                             target="_blank"><i class="fa fa-fw fa-twitter"></i></a></span>
                    <span><a class="linkedinShareBtn"
                             href="http://www.linkedin.com/shareArticle?mini=true&url={{ url('/') }}&title={{ $general->sitename }}&summary={{ $inslider->title }}"
                             data-image="{{ $inslider->image_name }}" data-title="{{ $inslider->title }}" target="_blank"><i
                                class="fa fa-fw fa-linkedin"></i></a></span>
                </div>
            </div>
        @endforeach

    </div>


    <!-- If we need pagination -->
    <div class="swiper-pagination" id="inswiper-pagination"></div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev swiper-button-white" id="inswiper-button-prev"></div>
    <div class="swiper-button-next swiper-button-white" id="#inswiper-button-next"></div>
</section>


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


