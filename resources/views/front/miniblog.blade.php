@extends('layouts.master')

@section('SEO')
<meta name="description" content="霊界の偉大な秘密についてもっと読み、永遠にあなたの人生の変革を得る。">
	<meta name="keywords" content="ニュース、ブログ、心と思考、心理的な問題、小児期のトラウマ、中毒中毒中毒、病気の癒し、">
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
									<a href="/miniblog" class=" active ">
										<img src="{{url('/')}}/assets/images/1560174798.png">
										日本語
									</a>
								</div>
								<div class="lang">
									<a href="/pt-br/miniblog" class="">
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
    <meta property="og:description" content="霊界の偉大な秘密についてもっと読み、永遠にあなたの人生の変革を得る。"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="100" />
@stop

@section('titulo')
	<title>La Cura - 奇跡 {{  '| '.__($pt) }}</title>
@stop

@section('content')
<style>
.card-img {
  border-bottom-left-radius: 0px;
  border-bottom-right-radius: 0px;
}

.card-title {
     margin-bottom: 1.3rem;
}

.cat {
  display: inline-block;
  margin-bottom: 1rem;
}

.fa-users {
  margin-left: 1rem;
}

.card-footer {
  font-size: 0.8rem;
}
.card-text{
    margin-bottom: 10px;
}
.detailbtn{
    margin-top: 10px;
}
</style>

		<!-- page title begin-->
		<div class="page-title">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-6 col-lg-6">
						<h2>@lang('blog')</h2>
					</div>
				</div>
			</div>
		</div>
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

			{{$allblogs->links()}}
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

			{{$allblogs->links()}}
			@endif
		</div>
@stop


