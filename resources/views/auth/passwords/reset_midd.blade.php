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
	<meta property="og:title" content="La Cura - 奇跡"/>
    <meta property="og:site_name" content="La Cura - 奇跡 "/>
    <meta property="og:description" content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="100" />
@stop

@section('titulo')
	<title>La Cura - 奇跡</title>
@stop

@section('content')


    <!-- page title end -->

    <!-- login begin-->
    <div class="contact login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title text-center">
                        @if (session()->get('lang') == 'ja')
                            <h2>システムにアクセスするには、すべての必須フィールドに入力してください。</h2>


                        @else
                            <h2>Preencha todos os campos obrigatórios para acessar o sistema.</h2>



                        @endif
                        <p style="color: red">*@lang('Set your Password to Access your Account with Email and Password')</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">


                <div class="col-xl-6 col-lg-6">
                    <form class="contact-form" action="{{ route('reset.passw.auth') }}" method="post">
                        @csrf
{{--                        <input type="hidden" name="token" value="{{ $reset->token }}">--}}
                        <div class="row">
                            @if (count($errors) > 0)

                                @foreach ($errors->all() as $error)
                                    <div class="col-md-12">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                &times;
                                            </button>
                                            <p>{{ __($error) }}</p>
                                        </div>
                                    </div>
                                @endforeach

                            @endif

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="InputName">@lang('Your Email')<span class="requred">*</span></label>
                                    <input type="email" name="email" value="{{ $email }}" class="form-control" id="InputName" placeholder="E-mail" readonly required>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label>@lang('New Password') <span class="requred">*</span></label>
                                    <input type="password" name="password"  class="form-control"  placeholder="@lang('New Password')" required>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label>@lang('Confirm Password') <span class="requred">*</span></label>
                                    <input type="password" name="password_confirmation" class="form-control"  placeholder="@lang('Confirm Password')" required>
                                </div>
                            </div>


                            <div class="col-xl-12 col-lg-12">
                                <div class="row d-flex">
                                    <div class="col-xl-6 col-lg-6">
                                        <button type="submit" class="btn btn-success"> @lang('Reset') </button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- login end -->

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
