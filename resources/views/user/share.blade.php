@extends('layouts.master')

@section('SEO')
<meta name="description" content="投資参加との治療プランの仕組み">
	<meta name="keywords" content="投資、プラン、治療、参加">
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
									<a href="/questions" class=" active ">
										<img src="{{url('/')}}/assets/images/1560174798.png">
										日本語
									</a>
								</div>
								<div class="lang">
									<a href="/pt-br/questions" class="">
										<img src="{{url('/')}}/assets/images/1560174834.png">
										Português
									</a>
								</div>

							</div>
						</div>

	@endif

@stop

@section('titulo')
	<title>La Cura - 奇跡 | について</title>
@stop

@section('content')

    @if(activeTemp()  == 1)

			<!-- page title begin-->
			<div class="page-title">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-6">
							<h2>共有(投稿)</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- page title end -->

			<!-- slider begin-->
			<div id="donate" class="price">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12">
							<ul id="slider">

							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- slider end -->

			<style type="text/css">

			#share-buttons img {
			width: 50px;
			padding: 10px;
			border: 0;
			box-shadow: 0;
			display: inline;
			}

			</style>

			<!-- treatments-2 begin -->
			<div id="treatments-2" class="about">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="row">

										<div class="col-xl-12 col-lg-12">

										このツールでは、簡単に紹介リンクを共有と投稿することできます。<br />
											<br />
											あなたの紹介リンク <b>{{url('/')}}/register/{{Auth::user()->reference_link}}</b>
											<br /><br />
												<h3>ソーシャルメディア一覧</h3>
												<!-- I got these buttons from simplesharebuttons.com -->
												<div id="share-buttons">

													<!-- Buffer -->
													<a href="https://bufferapp.com/add?url={{url('/')}}/register/{{Auth::user()->reference_link}}&amp;text=La Cura ・奇跡 – 今すぐに登録" target="_blank">
														<img src="{{url('/')}}/img/rs/buffer.png" alt="Buffer" />
													</a>

													<!-- Digg -->
													<a href="http://www.digg.com/submit?url={{url('/')}}/register/{{Auth::user()->reference_link}}" target="_blank">
														<img src="{{url('/')}}/img/rs/diggit.png" alt="Digg" />
													</a>

													<!-- Email -->
													<a href="mailto:?Subject=La Cura ・奇跡 – 今すぐに登録&amp;Body=治療を受けると人生を生きる、幸せになり、あなたへあなたの人生に捧げる {{url('/')}}/register/{{Auth::user()->reference_link}}">
														<img src="{{url('/')}}/img/rs/email.png" alt="Email" />
													</a>

													<!-- Facebook -->
													<a href="http://www.facebook.com/sharer.php?u={{url('/')}}/register/{{Auth::user()->reference_link}}" target="_blank">
														<img src="{{url('/')}}/img/rs/facebook.png" alt="Facebook" />
													</a>

													<!-- LinkedIn -->
													<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{url('/')}}/register/{{Auth::user()->reference_link}}" target="_blank">
														<img src="{{url('/')}}/img/rs/linkedin.png" alt="LinkedIn" />
													</a>

													<!-- Pinterest -->
													<a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
														<img src="{{url('/')}}/img/rs/pinterest.png" alt="Pinterest" />
													</a>

													<!-- Print -->
													<a href="javascript:;" onclick="window.print()">
														<img src="{{url('/')}}/img/rs/print.png" alt="Print" />
													</a>

													<!-- Reddit -->
													<a href="http://reddit.com/submit?url={{url('/')}}/register/{{Auth::user()->reference_link}}&amp;title=La Cura ・奇跡 – 今すぐに登録" target="_blank">
														<img src="{{url('/')}}/img/rs/reddit.png" alt="Reddit" />
													</a>

													<!-- StumbleUpon-->
													<a href="http://www.stumbleupon.com/submit?url={{url('/')}}/register/{{Auth::user()->reference_link}}&amp;title=La Cura ・奇跡 – 今すぐに登録" target="_blank">
														<img src="{{url('/')}}/img/rs/stumbleupon.png" alt="StumbleUpon" />
													</a>

													<!-- Tumblr-->
													<a href="http://www.tumblr.com/share/link?url={{url('/')}}/register/{{Auth::user()->reference_link}}&amp;title=La Cura ・奇跡 – 今すぐに登録" target="_blank">
														<img src="{{url('/')}}/img/rs/tumblr.png" alt="Tumblr" />
													</a>

													<!-- Twitter -->
													<a href="https://twitter.com/share?url={{url('/')}}/register/{{Auth::user()->reference_link}}&amp;text=La Cura ・奇跡 – 今すぐに登録&amp;hashtags=lacura.me" target="_blank">
														<img src="{{url('/')}}/img/rs/twitter.png" alt="Twitter" />
													</a>

													<!-- VK -->
													<a href="http://vkontakte.ru/share.php?url={{url('/')}}/register/{{Auth::user()->reference_link}}" target="_blank">
														<img src="{{url('/')}}/img/rs/vk.png" alt="VK" />
													</a>

													<!-- Yummly -->
													<a href="http://www.yummly.com/urb/verify?url={{url('/')}}/register/{{Auth::user()->reference_link}}&amp;title=La Cura ・奇跡 – 今すぐに登録" target="_blank">
														<img src="{{url('/')}}/img/rs/yummly.png" alt="Yummly" />
													</a>

                                                    <a onclick="shareit()">Share on facebook</a>
												</div>

										</div>

										<div class="col-xl-12 col-lg-12">
											SNSにアップして友達と共有しよう。そして、より多くの人々にLa Curaのパワーを伝えていきます
										</div>

									</div>
								</div>
							</div>
							<br><br><br>
						</div>
					</div>
				</div>
			</div>
			<!-- treatments 2 end -->

	@endif

@stop
@section('sctipt')



        <script type="text/javascript">

            function shareit(){
                console.log('share');
                var url="https://lacura.me/miniblog"; //Set desired URL here
                var img="http://lacura.me/assets/images/slider/5f2a13106890a1596592912.jpg"; //Set Desired Image here
                var totalurl=encodeURIComponent(url+'?img='+img);

                window.open ('http://www.facebook.com/sharer.php?u='+totalurl,'','width=500, height=500, scrollbars=yes, resizable=no');

            }
    </script>
