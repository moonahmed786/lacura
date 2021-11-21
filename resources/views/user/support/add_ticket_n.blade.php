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

@section('style')

@stop
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">


                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <h1 >{{__($pt)}}</h1>
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h7 class="card-title">@lang('support_tickets.Message Send to Admin')</h7>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form method="POST" action="{{route('ticket.store')}}"  enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            @if (count($errors) > 0)
                                                @foreach ($errors->all() as $error)
                                                    <div class="alert alert-danger">
                                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                        {{__($error)}}
                                                    </div>
                                                @endforeach
                                            @endif
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">@lang('support_tickets.Subject')</label>
                                                <input type="text" class="form-control amountaa" id="exampleInputEmail2"
                                                       placeholder="@lang('support_tickets.Subject Name')*" name="subject" value="{{ old('subject') }}"  required
                                                >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">@lang('support_tickets.Detail')</label>
                                                <textarea class="form-control" name="detail" rows="10" required placeholder="@lang('support_tickets.Message...')"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">@lang('support_tickets.Choose File If Needed')</label>

                                                <div class="col-md-8">
                                                    <input id="img" type="file" class="custom-file-input"
                                                           name="img">
                                                    <label for="img" class="custom-file-label text-truncate">@lang('support_tickets.Choose file')...</label>
                                                </div>
                                            </div>

                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                                <a href="{{ route('support.index.customer') }}" class="btn btn-warning"
                                                >@lang('support_tickets.Back')</a>
                                                <button type="submit" class="btn btn-success float-right"
                                                >@lang('support_tickets.Submit')
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 <a target="_blank" href="http://lacura.me/">Lacura</a>, All
                    rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-heart">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </p>
            </div>
        </div>
    </div>




@endsection
@section('script')
<script>
    //Turn a canvas element into a sketch area
    $("#canvas1").drawr({
        "enable_tranparency" : true,
        "canvas_width" : 800,
        "canvas_height" : 800,
        "clear_on_init" : false
    });


</script>



@stop
