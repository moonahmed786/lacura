@if(activeTemp() == 1)
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="title" Content="{{ $general->sitename }}">
	<meta name="author" content="{{ $general->sitename }}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R1H7N5CV2Q"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-R1H7N5CV2Q');
    </script>

	@yield('SEO')
	@yield('facebook')
	@yield('titulo')

	<!-- favicon -->
	<link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}" type="image/x-icon">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('assets/front/css/jquery-ui.min.css') }}">
	<link rel="stylesheet" href="{{url('/')}}/assets/front/css/bootstrap.min.css">
	<!-- fontawesome icon  -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/font-awesome.min.css')}}">
	<!-- flaticon css -->
	<link rel="stylesheet" href="{{url('/')}}/assets/front/fonts/flaticon.css">
	<!-- animate.css -->
	<link rel="stylesheet" href="{{url('/')}}/assets/front/css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{url('/')}}/assets/front/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{url('/')}}/assets/front/css/lightslider.min.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{url('/')}}/assets/front/css/magnific-popup.css">
	<link rel="stylesheet" href="{{asset('assets/admin/css/sweetalert.css')}}">
	<link rel="stylesheet" href="{{asset('assets/front/css/starrr.css')}}">
	<link rel="stylesheet" href="{{asset('assets/front/css/album.css')}}">
	@stack('style-lib')
	<!-- stylesheet -->
	<link rel="stylesheet" href="{{url('/')}}/assets/front/css/style.css">
	<!-- responsive -->
	<link rel="stylesheet" href="{{url('/')}}/assets/front/css/responsive.css">
	<link rel="stylesheet" href="{{url('/')}}/assets/front/css/color.php?color={{$general->color}}&color2={{$general->color_two}}">
	<style type="text/css">
		.card-comments {
			margin-top: 20px;
		}

		form#comment_form {
			margin-top: 10px;
		}

		.comments-system {
			margin: 40px;
		}
	</style>
	@yield('style')
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

</head>

<body>

	{{--<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId={{ $general->fb_client_id }}&autoLogAppEvents=1"></script>
	preloader begin
	<div class="preloader">
		<div class='loader'>
			<div class='loader--dot'></div>
			<div class='loader--dot'></div>
			<div class='loader--dot'></div>
			<div class='loader--dot'></div>
			<div class='loader--dot'></div>
			<div class='loader--dot'></div>
			<div class='loader--text'></div>
		</div>
	</div>
	preloader end --}}

	<!-- header begin-->
	<header class="header">
		<div class="header-top">
			<div class="container">
				<div class="row justify-content-between d-flex">

					@yield('lang')

					<div class="col-xl-12 d-flex flex-sm-row flex-column justify-content-between">
						<div class="logo text-center">
							<a href="{{url('/')}}">
								<img style="max-width: 160px;" src="@if(request()->session()->get('lang') == 'ja' ) {{asset('assets/images/logo/logo.png')}} @else {{asset('assets/images/logo/logo-pt.png')}} @endif" alt="logo image">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="row d-flex">
					<div class="col-xl-1 col-lg-1 col-12 d-block d-xl-flex d-lg-flex align-items-center">
						<div class="mobile-special">
							<div class="row d-flex">
								<div class="col-12 d-flex justify-content-between d-xl-none d-lg-none">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
									</button>
									<a class="btn btn-sm btn-primary" style="max-width: 120px; margin-top: 0px;" href="{{url('login')}}">@lang('ログイ')</a>
								</div>
							</div>
						</div>
					</div>
					<div @guest class="col-xl-9 col-lg-9" @else class="col-xl-10 col-lg-10" @endif>
						<div class="mainmenu">
							<nav class="navbar navbar-expand-lg">
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul id="navbar-nav" class="navbar-nav mr-auto justify-content-center">
										@guest

										<li class="nav-item active">
											<a class="nav-link" @if(request()->path() == '/') href="" @else href="{{url('/')}}" @endif>@lang('ホーム') </a>
										</li>
										<li class="nav-item active">
											<a class="nav-link" href="{{ route('about') }}">@lang('神について') </a>
										</li>
										<li class="nav-item active">
											<a class="nav-link" href="{{ route('front.schedule') }}">@lang('予約・診察 ') </a>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" @if(request()->path() == '/') href="#" @else href="{{url('/')}}#" @endif>@lang('治療')</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="{{url('/')}}/alcoholics-and-addictions">@lang('Addiction Treatment')</a>
												<a class="dropdown-item" href="{{url('/')}}/mental-trauma">@lang('Psychological trauma')</a>
											</div>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{url('/')}}/spiritual-purification">@lang('Purification of the mind')</a>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" @if(request()->path() == '/') href="#" @else href="{{url('/')}}#" @endif>@lang('疾患')</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="{{url('/')}}/influence-of-work">@lang('Impact of work Injury/illness')</a>
												<a class="dropdown-item" href="{{url('/')}}/purification-soul">@lang('魂の償い')</a>
											</div>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{url('miniblog')}}">@lang('blog')</a>
										</li>
										@else

										<li class="nav-item active">
											<a class="nav-link" href="{{url('/home')}}">@lang('Dashboard')</a>
										</li>
										<li class="nav-item active">
											<a class="nav-link" href="{{ route('schedule') }}">@lang('Schedule')</a>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												@lang('Investment')
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="{{route('user.interest.log')}} ">@lang('Return Interest Log')</a>
											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												@lang('Deposit')
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="{{route('user.deposit')}}">@lang('Deposit Now')</a>
												<a class="dropdown-item" href="{{route('pin.recharge')}} ">@lang('E-Pin Recharge')</a>
												<a class="dropdown-item" href="{{route('user.deposit.history')}} ">@lang('Deposit History')</a>
											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												@lang('Withdraw')
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="{{route('user.withdraw')}}">@lang('Withdraw Now')</a>
												<a class="dropdown-item" href="{{route('withdraw.history')}}">@lang('Withdraw History')</a>
											</div>
										</li>
										<li class="nav-item dropdown" >
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												@lang('Social Media Marketing')
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="{{route('user.smm.services')}}">@lang('Services')</a>
												<a class="dropdown-item" href="{{route('user.smm.subscriptions')}}">@lang('Your Subscriptions')</a>
											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												@lang('Transaction')
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="{{route('user.balance.transfer')}}">@lang('Balance Transfer')</a>
												<a class="dropdown-item" href="{{route('user.transaction')}}">@lang('Transaction History')</a>
												<a class="dropdown-item" href="{{route('my.referral.com')}}">@lang('Referral Statistic')</a>
												<a class="dropdown-item" href="{{route('user.referral.com')}}">@lang('Referral Commission')</a>
											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												{{ Auth::user()->name }}
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="{{route('user.profile')}}">@lang('Profile')</a>
												<a class="dropdown-item" href="{{route('user.album')}}">@lang('Album')</a>
												<a class="dropdown-item" href="{{route('support.index.customer')}}">@lang('Support Ticket')</a>
												<a class="dropdown-item" href="{{route('two.factor.index')}}">@lang('2Fa Security')</a>
												<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">@lang('Logout')</a>
												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													{{ csrf_field() }}
												</form>
											</div>
										</li>
										@endguest

									</ul>
								</div>
							</nav>
						</div>
					</div>
					@guest

					<div class="col-xl-2 col-lg-2 d-flex align-items-center">
						<div class="join-us">
							<a href="{{url('login')}}">@lang('Login')</a>
						</div>
					</div>
				</div>
				@endguest

			</div>
		</div>
		</div>
	</header>
	<!-- header end -->

	<div id="app">
		@yield('content')

	</div>

	<!-- footer begin -->
	<footer class="footer">
		<div class="container">
			<div class="row text-center">
				<div class="col-xl-12 col-lg-12">
					<div class="box">
						<div class="logo">
							<a href="{{url('/')}}">
								<img style="max-width: 180px" src="@if(request()->session()->get('lang') == 'ja' ) {{asset('assets/images/logo/logo.png')}} @else {{asset('assets/images/logo/logo-pt.png')}} @endif" alt="">
							</a>
						</div>
						<p>{{__($general->footer_text)}}</p>
						<div class="social_links">
							<ul>
								@foreach($social as $key=> $data)
								<li><a href="{{$data->link}}" style="background-color: rgba(255, 255, 255, 0.8);"><i style="color: #{{$general->color}}" class="fa fa-{{$data->icon}}"></i></a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<p class="text-center">
				{{__($general->footer)}}
			</p>
		</div>
	</footer>
	<!-- footer end -->

	<!-- jquery -->
	<script src="{{url('/')}}/assets/front/js/jquery.js"></script>
	<script src="{{ asset('assets/front/js/moment.js') }}"></script>
	<script src="{{ asset('assets/front/js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/lang/datepicker-'. Session::get('lang') .'.js') }}"></script>

	<!-- bootstrap -->
	<script src="{{url('/')}}/assets/front/js/bootstrap.min.js"></script>
	<!-- owl carousel -->
	<script src="{{url('/')}}/assets/front/js/owl.carousel.js"></script>

	{{-- Lightgallery --}}
	<script src="{{ asset('assets/front/js/prettify.js') }}"></script>
	<script src="{{ asset('assets/front/js/jquery.justifiedGallery.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/transition.js') }}"></script>
	<script src="{{ asset('assets/front/js/collapse.js') }}"></script>
	@stack('light-gallery')

	<script src="{{url('/')}}/assets/front/js/lightslider.min.js"></script>
	<!-- magnific popup -->
	<script src="{{url('/')}}/assets/front/js/jquery.magnific-popup.js"></script>
	<!-- way poin js-->
	<script src="{{url('/')}}/assets/front/js/waypoints.min.js"></script>
	<!-- wow js-->
	<script src="{{url('/')}}/assets/front/js/wow.min.js"></script>

	<script src="{{asset('assets/front/js/starrr.js')}}"></script>
	<script src="{{asset('assets/admin/js/sweetalert.js')}}"></script>
	<!-- main -->
	<script src="{{url('/')}}/assets/front/js/main.js"></script>

	<script src="{{url('/')}}/assets/vue/vue.js"></script>

	<script src="{{url('/')}}/assets/vue/axios.js"></script>

	<script>
		$(document).on('change', '#langSel', function() {
			var code = $(this).val();
			window.location.href = "{{url('/')}}/change-lang/" + code;
		});
	</script>

	@yield('script')

	<script>
		window.Laravel =
        <?php echo
json_encode(['csrfToken' => csrf_token()])
?>

	</script>

	<script>
		$(document).ready(function() {
			var winheight = $(window).height() - 150;
			$('#justify-height').css('min-height', winheight + 'px');
		});
	</script>

	@if (Session::has('message'))

	<script type="text/javascript">
		$(document).ready(function() {
			swal("{{ __(Session::get('message')) }}", "", "success");
		});
	</script>
	@endif

	@if (Session::has('success'))
	<script type="text/javascript">
		$(document).ready(function() {
			swal("{{ __(Session::get('success')) }}", "", "success");
		});
	</script>
	@endif

	@if (Session::has('alert'))
	<script type="text/javascript">
		$(document).ready(function() {
			swal("{{ __(Session::get('alert')) }}", "", "warning");
		});
	</script>
	@endif

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147749074-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-147749074-1');
	</script>
</body>

</html>
<!-- FIM WD1 -->

@endif
