@extends('layouts.master')

<?php
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$parts = Explode('/', $actual_link);
	//echo $parts;
	$id = $parts[count($parts) - 1];

	if ($id == 1)
	{
		$id_nova = $parts[count($parts) - 2];

	}
	else
	{
		$id_nova = $id;
	}

	//echo $id_nova;
?>

@section('SEO')
<meta name="description" content="登録後に予約日を入れてください、希望時間と都道府県を選択してください。">
	<meta name="keywords" content="予約、相談、時間、都道府県、病気の治癒、魂の浄化、精神的な妨害、解放と精神的保護、">
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
									<a href="/register" class=" active ">
										<img src="{{url('/')}}/assets/images/1560174798.png">
										日本語
									</a>
								</div>
								<div class="lang">
									<a href="/pt-br/register/<?php echo $id_nova; ?>/1" class="">
										<img src="{{url('/')}}/assets/images/1560174834.png">
										Português
									</a>
								</div>

							</div>
						</div>

	@endif

@stop

@section('facebook')
	<meta property="og:title" content="La Cura ・奇跡 – 今すぐに登録"/>
    <meta property="og:site_name" content="La Cura ・奇跡 – 今すぐに登録"/>
    <meta property="og:description" content="治療を受けると人生を生きる、幸せになり、あなたへあなたの人生に捧げる"/>
    <meta property="og:image" content="https://lacura.me/assets/images/blog/img/15682919185d7a3c4ee6f57.jpg"/>
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="551" />
    <meta property="og:image:height" content="346" />
@stop

@section('titulo')
	<title>La Cura - 奇跡 {{  '| '.__($pt) }}</title>
@stop

@section('style')
    <link rel="stylesheet" href="{{url('/')}}/assets/front/build/css/intlTelInput.css">
@stop

@section('content')
    @if(activeTemp()  == 1)
		<!-- page title begin-->
		<div class="page-title">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-6 col-lg-6">
						<h2 class="extra-margin">@lang('Register')</h2>

					</div>
				</div>
			</div>
		</div>
		<!-- page title end -->

		<!-- register begin-->
		<div class="contact register">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-7 col-lg-7">
						<a href="{{ route('login') }}" class="btn btn-primary mb-4">@lang('Login')</a>
						<div class="section-title text-center">
							<h2>@lang('新規アカウントを作成する')</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 offset-md-2">
						@if(request()->is('register'))

						<div class="card">
							<div class="card-body">
								<h3>@lang('Sorry, Registration without referal is currently not allowed')</h3>
							</div>
						</div>
						@else
						@if (count($errors) > 0)

							<div class="row">
								@foreach ($errors->all() as $error)

									<div class="col-md-12">
										<div class="alert alert-danger alert-dismissible">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											<p>{{ __($error) }}</p>
										</div>
									</div>
								@endforeach

							</div>
						@endif
						<form class="contact-form" action="{{ route('register') }}" method="post">
							@csrf

							<input type="hidden" name="lang" value="{{ session()->get('lang') }}">
							<div class="row">
								@if(isset($ref_user))
									@if(!isset($not_refer_user))

									  <div class="col-xl-12 col-lg-12">
										  <div class="form-group" >
											  <!-- <label  for="InputRef">@lang('Referred By')<span class="requred">*</span></label> -->
											  <!-- REMOVED VALUE INPUT THAT SHOWS REFEREAL NAME {{$ref_user->name}}-->
											 <input type="hidden" style="background: #b6b9c1;" class="form-control" id="InputRef" value="" disabled readonly required>
										  </div>
									  </div>
									  <input type="hidden" value="{{$ref_user->id}}" name="ref_id">
									@else

										<input type="hidden" id="InputRef" value="{{$ref_user->name}}">
										<input type="hidden" value="{{$ref_user->id}}" name="ref_id">
									@endif
								@else
									<input type="hidden" value="0" name="ref_id">

								@endif

								<div class="col-xl-12 col-lg-12">
									<div class="form-group">
										<label for="InputFirstname">@lang('氏名・フルネーム')<span class="requred">*</span></label>
										<input type="text" class="form-control" id="InputFirstname" name="name" value="{{old('name')}}" placeholder="@lang('名前を入力してください')" required>
									</div>
								</div>
								<div class="col-xl-12 col-lg-12">
									<div class="form-group">
										<label for="InputNickname">@lang('ニックネーム')<span class="requred">*</span></label>
										<input type="text" class="form-control" id="InputNickname" name="nickname" value="{{old('nickname')}}" placeholder="@lang('ニックネームを入力してください')"
											   required>
										<p class="text-info mt-1">@lang('このニックネームは一般公開されます。')</p>

									</div>
								</div>
								<div class="col-xl-12 col-lg-12">
									<div class="form-group">
										<label for="InputMail">@lang('メールアドレス')<span class="requred">*</span></label>
										<input type="email" class="form-control" id="InputMail"  name="email"  value="{{old('email')}}"  placeholder="@lang('メールアドレスを入力してください')"
											   required>
									</div>
								</div>
								<input type="hidden" id="track" name="country_code" >
								<div class="col-xl-12 col-lg-12">
									<div class="form-group">
										<label for="phone">@lang('携帯番号')<span class="requred">*</span></label>
										<input type="tel" class="form-control pranto-control" id="mobile"  name="mobile"  value="{{old('phone')}}"  required>
									</div>
								</div>
								<div class="col-xl-12 col-lg-12">
									<div class="form-group">
										<label for="InputMoe">@lang('国')<span class="requred">*</span></label>
										<input type="text"  class="form-control" id="country" name="country" required>
									</div>
								</div>
								<div class="col-xl-12 col-lg-12">
									<div class="form-group">
										<label for="InputPassword">@lang('パスワード')<span class="requred">*</span></label>
										<input type="password" class="form-control" id="InputPassword" name="password" placeholder="@lang('パスワードを入力してください')"
											   required>
									</div>
								</div>
								<div class="col-xl-12 col-lg-12">
									<div class="form-group">
										<label for="InputRetypepassword">@lang('パスワードもう一度入力してください')<span class="requred">*</span></label>
										<input type="password" class="form-control" name="password_confirmation" id="InputRetypepassword" placeholder="@lang('パスワードもう一度入力してください')"
											   required>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6">
									<div class="form-group mb-0 checkbox">
										<div class="form-check pl-0">
											<input class="form-check-input" type="checkbox" required id="gridCheck1">
											<label class="form-check-label" for="gridCheck1">
												@lang('私は、利用規約に同意します')
											</label>
											<!-- <a href="https://lacura.me/terms/2/terms" target="_blank">@lang('受診条件参照ください')</a> -->
											<a href="@if(request()->session()->get('lang') == 'ja' ) https://lacura.me/terms/5/terms @else https://lacura.me/terms/2/terms @endif" target="_blank" style="color: red;">@lang('受診条件参照ください')</a>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6">
									<button type="submit" class="submit-button btn-contact">@lang('送信')</button>
								</div>
							</div>
						</form>
						@endif

					</div>
				</div>
			</div>
		</div>
		<!-- register end -->

    @endif
@endsection
@section('script')
    <script src="{{url('/')}}/assets/front/build/js/intlTelInput.js"></script>
    <script>
        $("#mobile").on("countrychange", function(e, countryData) {

            var data =  $(this).val('+' + countryData.dialCode);
            $('#track').val(data);
            var country = countryData.name;
            var country = country.split('(')[0];
            $('#country').val(country);
        });
        $("#mobile").intlTelInput({
            geoIpLookup: function(callback) {
                $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            initialCountry: "auto",
            utilsScript: "{{url('/')}}/assets/front/build/js/utils.js"
        });
    </script>
@stop
