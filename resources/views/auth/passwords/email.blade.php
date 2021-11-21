@extends('layouts.user_layout')

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

@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">


                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                    <div class="widget-content widget-content-area br-6">
                        @if(session()->has('message'))
                            <div class="alert alert-success alert-dismissable">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <h1 >@lang('auth_pages.Forgot Password')</h1>
                        <h5 >@lang('auth_pages.Recover Your Account')</h5>
                        <div class="col-md-2 float-right mb-3">
                            {{--                            <a href="{{route('add.new.ticket')}}" class="btn btn-warning btn-block" style="color: black ;"><b>@lang('auth_pages.New Ticket')</b></a>--}}
                        </div>
                        <form class="contact-form" action="{{ route('forget.password.user') }}" method="post">
                            @csrf
                            <div class="row">
                                @if (count($errors) > 0)

                                    @foreach ($errors->all() as $error)
                                        <div class="col-md-12">
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    &times;
                                                </button>
                                                <p>{{ $error }}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                @endif

                                <div class="col-xl-10 col-lg-10 ml-2">
                                    <div class="form-group">
                                        <label for="InputName">@lang('auth_pages.Enter Your E-mail Address')<span class="requred">*</span></label>
                                        <input type="email" name="email"  class="form-control"  id="InputName" placeholder="@lang('auth_pages.E-mail')"
                                               required>
                                    </div>
                                </div>


                                <div class="col-xl-12 col-lg-12">
                                    <div class="row d-flex">
                                        <div class="col-xl-6 col-lg-6">
                                            <button type="submit" class=" btn btn-success"> @lang('auth_pages.Submit') </button>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                                            <a href="{{ url('login') }}" class="">@lang('auth_pages.Back To Login')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>

            </div>

        </div>

    </div>




@endsection
@section('script')
    <script>
        $('.form').find('input, textarea').on('keyup blur focus', function (e) {

            var $this = $(this),
                label = $this.prev('label');

            if (e.type === 'keyup') {
                if ($this.val() === '') {
                    label.removeClass('active highlight');
                } else {
                    label.addClass('active highlight');
                }
            } else if (e.type === 'blur') {
                if( $this.val() === '' ) {
                    label.removeClass('active highlight');
                } else {
                    label.removeClass('highlight');
                }
            } else if (e.type === 'focus') {

                if( $this.val() === '' ) {
                    label.removeClass('highlight');
                }
                else if( $this.val() !== '' ) {
                    label.addClass('highlight');
                }
            }

        });

    </script>
@stop
