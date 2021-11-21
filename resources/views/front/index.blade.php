@extends('layouts.master')

@section('SEO')
<meta name="description" content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。">
	<meta name="keywords" content="精神的, トラウマ, 中毒, 病気, 魂の償い, 依存, 浄化, 開運, お祓い">
@stop

@section('lang')


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


@stop

@section('facebook')
	<meta property="og:title" content="La Cura - 奇跡 | ホーム"/>
    <meta property="og:site_name" content="La Cura - 奇跡 | ホーム"/>
    <meta property="og:description" content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="100" />
@stop

@section('titulo')
	<title>La Cura - 奇跡 | ホーム</title>
@stop

@section('content')
	@if(activeTemp()  == 1)

		<!-- banner begin WD 1 -->
		<div id="home" class="banner">
			<div class="banner-content" style="display: none;">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-xl-6 col-lg-9 d-flex align-items-center">
							<div class="part-text">
								<h1>{{__($general->banner_title)}}</h1>
								<p>{{__($general->banner_sub_title)}}</p>
								@guest

								<div class="row ">
									<div class="col-md-6 text-center" >
										<a href="{{url('login')}}">@lang('home_page.Sign In')</a>
									</div>
									<div class="col-md-6 text-center">
										<a href="{{url('register')}}">@lang('home_page.Register')</a>
									</div>
								</div>
								@else

								<a href="{{url('/home')}}">@lang('home_page.Dashboard')</a>
								<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">@lang('home_page.Logout')</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								@endguest

							</div>
						</div>
						<div class="col-xl-6 col-lg-6 ">
							<div class="part-img">
								<img src="{{asset('assets/images/banner.png')}}" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

		@include('front.partials.slider')

		<!--Start Latest News Area-->
		<section class="choosing-reason">
			<!--Start Container-->
			<div class="container">

				<!--Start Row-->
				<div class="row">
					@foreach($know as $data)

					<!--Start Blog Post-->
					<div class="col-xl-4 col-lg-4 col-md-6 mb-4">
						<div class="part-text">
							<h2><a href="{{ $data->link ?? route('blog.detail', [$data->id, str_slug(__($data->title)) ]) }}">{{ __($data->title) }}</a></h2>

							{{-- <p>{!! short_text($data->text, 100) !!}</p> --}}
							@if(session('lang') == 'pt-br')
							<p>{!! $data->textpt !!}</p>

							@else
							<p>{!! $data->text !!}</p>
							@endif

						</div>
					</div>
					<!--End Blog Post-->

					@endforeach
					@if(session('lang') == 'ja' && $general->news_ja_image)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="part-image">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/blog/img') .'/'. $general->news_ja_image }}" alt="@lang('home_page.News Image')">
                            </a>
                        </div>
                    </div>
					@elseif(session('lang') == 'pt-br' && $general->news_ja_image)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="part-image">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/blog/img') .'/'. $general->news_pt_image }}" alt="@lang('home_page.News Image')">
                            </a>
                        </div>
                    </div>
					@endif
				</div>
				<!--End Row-->
			</div>
			<!--End Container-->
		</section>
		<!--End Latest News Area-->

		<div style="background: aliceblue;">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<!-- gallery begin -->
						<div id="investors">
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-xl-6 col-lg-6">
										<div class="section-title text-center">
											<h2>{{ __($general->gallery_title) }}</h2>
											<p>{{ __($general->gallery_detail) }}</p>
										</div>
									</div>
								</div>
								@auth

								<div id="imageGallery" class="row gallery pl-1 justify-content-center align-items-center">
									@foreach($album_items as $item)
										@if($item->filetype == 1)
										<a href="{{ asset('assets/storage/album/'. $item->filename) }}" class="col-md-3">
											<img src="{{ asset('assets/storage/album/thumb_'. $item->filename) }}" data-src="{{ asset('assets/storage/album/thumb_'. $item->filename) }}" alt="">
										</a>
										@else
										<a href="{{ 'assets/storage/album'.'/'. $item->filename }}" class="col-md-3 popup-video" data-html="#video{{ $loop->iteration }}" >
											<video src="{{ 'assets/storage/album'.'/'. $item->filename }}"></video>
										</a>
										@endif
									@endforeach
								</div>
								@else

								<div class="row gallery pl-1 justify-content-center align-items-center">
								@foreach($album_items as $item)
									<div class="col-md-3">
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
						<!-- gallery end -->
					</div>
					<div class="col-md-6 col-sm-12">
						<!-- user begin -->
						<div id="investors">
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-xl-6 col-lg-6">
										<div class="section-title text-center">
											<h2>@lang('home_page.follower')</h2>
											<p>{{ __($general->new_user_sub_title) }}</p>
										</div>
									</div>
								</div>
								<div class="row justify-content-center align-items-center">
								@foreach($new_users as $user)
									<div class="col-4 col-md-3">
										<div class="mb-4 item">
											<div class="d-block image">
												<img class="img-fluid" src="@if($user->image) {{ asset('assets/images/user') .'/'. $user->image }} @else {{ asset('assets/storage/user/default.png') }} @endif">
											</div>
										</div>
									</div>
								@endforeach
								</div>
							</div>
						</div>
						<!-- user end -->
					</div>
				</div>
			</div>
		</div>

        <!-- faq begin wd -->
        <div class="faq" id="faq">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10">
                        <div class="section-title">
                            <h2 class="add-space">よくあるご質問</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12">
						<div class="card">
							<div class="card-header">
								<div class="row">
									<div class="col-xl-12 col-lg-12">
										<h5 class="mb-0">
											<p class="pranto-break">新規登録は、紹介によって登録できます。紹介がなければ直接登録してください。</p>
											<p class="pranto-break">抽選機能がついており、他のお客様が登録された際に、ランダムで割り振る機能が付いています。</p>
										</h5>
										<br>
										<a href="/questions" class="btn btn-info detailbtn">もっと見る</a>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq end -->

		<!-- page title end -->
		<div class="container">
        @if(session('lang')=='ja')
            <div class="row" style="padding: 80px 0px;">
                 @foreach($allblogs as $blogs)
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img" src="assets/images/blog/{{$blogs->image}}" style="height: 300px;">
                        <div class="card-body">
                            <h2 class="card-title" >{{$blogs->title_ja}}</h2>
                            <p class="card-text" >{!! str_limit($blogs->description_ja,300), $end = '...' !!}</p>
                            <a href="{{ route('miniblogdetail.front',$blogs->id)}}" class="btn btn-info detailbtn">もっと見る</a>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
							<!--    <div class="views">{{$blogs->created_at}}</div>   -->
                            <div class="views">{{date('Y年n月j日' . ' ' . 'g:i午後', strtotime($blogs->created_at)) }}</div>
                        </div>
                    </div>
                </div>
                 @endforeach
            </div>


        @else

			<div class="row" style="padding: 80px 0px;">
				@foreach($allblogs as $blogs)
					<div class="col-12 col-sm-8 col-md-6 col-lg-4">
						<div class="card">
							<img class="card-img" src="assets/images/blog/{{$blogs->image}}" style="height: 300px;">
							<div class="card-body">
								<h2 class="card-title" >{{$blogs->title_pt}}</h2>
								<p class="card-text">{!! str_limit($blogs->description_pt,300), $end = '...' !!}</p>
								<a href="{{ route('miniblogdetail.front',$blogs->id)}}" class="btn btn-info detailbtn">Leia Mais</a>
							</div>
							<div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
							<!--    <div class="views">{{$blogs->created_at}}</div>   -->
                            <div class="views">{{date('d/m/Y' . ' ' . 'H:i', strtotime($blogs->created_at)) }}</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>


        @endif
		</div>

        <div class="container">
            <div class="row bootstrap snippets">
                <div class="col-md-12 col-md-offset-2 col-sm-12">
                    <div class="comment-wrapper">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                {{session('lang')=='ja'?'
コメントセクション':'
Seção de comentários'}}
                            </div>
                            <div class="panel-body">
                                <form method="post" action="submithomecomment">
                                    @csrf
                                    <textarea name="homecomment" class="form-control" placeholder="{{session('lang')=='ja'?'コメントを書く...':'
Escreva um comentário...'}}" rows="3" required></textarea>
                                    <br>
                                    <button type="submit" class="btn btn-info pull-right">Post</button>
                                </form>
                                <div class="clearfix"></div>
                                <hr>
                                <ul class="media-list">
                                    @foreach($homecomment as $comment)
                                    <li class="media">
                                        <a href="#" class="pull-left">
                                            <img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" alt="" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <span class="text-muted pull-right">
                                                <small class="text-muted">{{$comment->created_at}}</small>
                                            </span>
                                            <!-- <strong class="text-success">@MartinoMont</strong> -->
                                            <p>
                                                {{$comment->comment}}
                                            </p>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="section-title">
                        <a href="/allcomments" class="allcomments">{{session('lang')=='ja'?'すべてのコメントを見る':'Ver todos os comentários'}}</a>
                    </div>
                </div>
            </div>
        </div>

    @endif

	@auth
	{{-- <div class="modal fade" id="ratingModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title">@lang('Give Rating')</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('user.album.item.rating') }}" method="post">
					@csrf
					<input type="hidden" name="id">
					<input type="hidden" name="rating">
				</form>
				<div class="starrr rating"></div>
			</div>
		</div>
		</div>
	</div> --}}
	@endauth

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

	@section('style')
	<style>
		.rating a {
			font-size: 2rem;
			padding: 1rem;
			line-height: 2rem;
		}
	</style>
	@stop

	@section('script')
	<script>
		var app = new Vue({
		   el: '#app',
			data:{
			  newdata:{
				  subscribe_email: ''
			  }
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
				}
			},
			mounted() {
				$('.ratingBtn').on('click', function() {
					var modal = $('#ratingModal');
					var id = $(this).data('id');
					modal.modal('show');
					$('.rating').starrr({
						rating: 0,
						change: function(e, value) {
							if(value) {
								modal.find('input[name=id]').val(id);
								modal.find('input[name=rating]').val(value);
								modal.find('form').submit();
							}
						}
					});
				});

				$('.rating_view').each(function(key, elem) {
					$(elem).starrr({
						rating: $(elem).data('rating'),
						readOnly: true,
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
