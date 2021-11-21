@extends('layouts.master')

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
    @if(activeTemp()  == 1)
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <h2 class="extra-margin">{{__($pt)}}</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="contact login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="section-title text-center">
                        <h2> #{{$ticket_object->ticket}} - {{__($ticket_object->subject)}}</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
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
                <div class="col-xl-12">
                    <form class="contact-form" action="{{route('store.customer.reply', $ticket_object->ticket)}}" method="post">
                        @csrf
                        <div class="row">
                            @foreach($ticket_data as $data)
                                <fieldset class="col-md-12" style="margin-bottom: 10px;">
                                    <div class="card" style="border-radius: 15px;">
                                        <div class="card-body">
                                    @if($data->type == 1)
                                        <legend><span style="color: #0e76a8">{{Auth::user()->name}}</span> , <small>{{ \Carbon\Carbon::parse($data->updated_at)->format('F dS, Y - h:i A') }}</small></legend>
                                    @else
                                        <legend><span style="color: #0e76a8">{{$general->sitename}}</span> , <small>{{ \Carbon\Carbon::parse($data->updated_at)->format('F dS, Y - h:i A') }}</small></legend>
                                    @endif


                                    <div class="panel panel-danger">
                                        <div class="panel-body">
                                            <p>{!! $data->comment !!}</p>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                </fieldset>
                            @endforeach



                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="InputName">@lang('Reply')<span class="requred">:</span></label>
                                    <textarea class="form-control" name="comment" rows="10" required></textarea>
                                </div>
                            </div>


                            <div class="col-xl-12 col-lg-12">
                                <div class="row d-flex">
                                    <div class="col-xl-12 col-lg-12">
                                        <button type="submit" style="width: 100%" class="login-button btn-contact">@lang('Submit')</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    @elseif(activeTemp()  == 2)
        <section class="tools-section  pranto-tool">
            <div class="thm-container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="tools-content pranto-bread">
                            <h3>{{__($pt)}}</h3>

                        </div><!-- /.tools-content -->
                    </div><!-- /.col-md-6 -->

                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </section>

        <section class="get-in-touch" id="contact">

            <div class="thm-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-content">
                            <div class="inner">
                                <div class="title text-center">
                                    <h3>#{{$ticket_object->ticket}} - {{__($ticket_object->subject)}}</h3>
                                    @if (count($errors) > 0)
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                {{__($error)}}
                                            </div>
                                        @endforeach
                                    @endif
                                </div><!-- /.title -->
                                <form action="{{route('store.customer.reply', $ticket_object->ticket)}}" method="post" class="contact-form">
                                    @csrf
                                    <div class="row">
                                        @foreach($ticket_data as $data)
                                            <fieldset class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="card" style="border-radius: 15px;">
                                                    <div class="card-body">
                                                        @if($data->type == 1)
                                                            <legend><span style="color: #0e76a8">{{Auth::user()->name}}</span> , <small>{{ \Carbon\Carbon::parse($data->updated_at)->format('F dS, Y - h:i A') }}</small></legend>
                                                        @else
                                                            <legend><span style="color: #0e76a8">{{$general->sitename}}</span> , <small>{{ \Carbon\Carbon::parse($data->updated_at)->format('F dS, Y - h:i A') }}</small></legend>
                                                        @endif


                                                        <div class="panel panel-danger">
                                                            <div class="panel-body">
                                                                <p>{!! $data->comment !!}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        @endforeach
                                    </div>

                                    <div class="frm-grp">
                                        <textarea name="comment" rows="10" placeholder="@lang('Reply')" required></textarea>
                                    </div><!-- /.frm-grp -->




                                    <div class="frm-grp">
                                        <button type="submit">@lang('Submit')</button>
                                    </div><!-- /.frm-grp -->


                                    <div class="form-result"></div><!-- /.form-result -->

                                </form>

                            </div><!-- /.inner -->
                        </div><!-- /.form-content -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </section><!-- /.get-in-touch -->

    @elseif(activeTemp()  == 3)

        <section class="page-content">
            <div class="page-heading page-heading-bg pranto-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1 class="title pranto-title">{{__($pt)}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.balance_show')
        </section>

        <section class="transaction-performance-section pranto-section-bottom" style="padding-top: 50px">
            <div class="thm-container container">
                <div class="row">
                    <div class="col-md-12 pranto-border" style="margin-bottom: 20px;">


                        <!--Start Contact Form-->
                        <div class="contact-form">

                            <div class="section-heading text-center">
                                <h2 class="title">#{{$ticket_object->ticket}} - {{__($ticket_object->subject)}}</h2>
                            </div>

                            @if (count($errors) > 0)
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                        {{__($error)}}
                                    </div>
                            @endforeach
                        @endif
                            <!--Start Section Heading-->

                            <!--End Section Heading-->
                            <form action="{{route('store.customer.reply', $ticket_object->ticket)}}" method="post" class="contact-form">
                                @csrf
                                <div class="row">
                                    @foreach($ticket_data as $data)
                                        <fieldset class="col-md-12" style="margin-bottom: 10px;">
                                            <div class="card" style="border-radius: 15px;">
                                                <div class="card-body">
                                                    @if($data->type == 1)
                                                        <legend><span style="color: #0e76a8">{{Auth::user()->name}}</span> , <small>{{ \Carbon\Carbon::parse($data->updated_at)->format('F dS, Y - h:i A') }}</small></legend>
                                                    @else
                                                        <legend><span style="color: #0e76a8">{{$general->sitename}}</span> , <small>{{ \Carbon\Carbon::parse($data->updated_at)->format('F dS, Y - h:i A') }}</small></legend>
                                                    @endif


                                                    <div class="panel panel-danger">
                                                        <div class="panel-body">
                                                            <p>{!! $data->comment !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    @endforeach
                                </div>

                                <div class="form-group">
                                    <textarea name="comment" class="form-control" rows="10" placeholder="@lang('Reply')" required></textarea>
                                </div><!-- /.frm-grp -->




                                <div class="contact-frm-btn text-center">
                                    <button type="submit" style="width: 100%">@lang('Submit')</button>
                                </div><!-- /.frm-grp -->

                            </form>
                        </div>
                        <!--End Contact Form-->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </section>

    @elseif(activeTemp()  == 4)
        <div class="hyip-breadcrump" style="background-image: url({{asset('assets/images/bred.jpg')}}); background-size: cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="breadcrump-title text-center">
                            <h2 class="add-space">{{__($pt)}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact">


            <div class="get-in-touch">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <div class="section-title">
                                <h2>#{{$ticket_object->ticket}} - {{__($ticket_object->subject)}}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <div class="col-md-12">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                                        <p>{{ __($error) }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                            @foreach($ticket_data as $data)
                                <fieldset class="col-md-12" style="margin-bottom: 10px;">
                                    <div class="card" style="border-radius: 15px;">
                                        <div class="card-body">
                                            @if($data->type == 1)
                                                <legend><span style="color: #0e76a8">{{Auth::user()->name}}</span> , <small>{{ \Carbon\Carbon::parse($data->updated_at)->format('F dS, Y - h:i A') }}</small></legend>
                                            @else
                                                <legend><span style="color: #0e76a8">{{$general->sitename}}</span> , <small>{{ \Carbon\Carbon::parse($data->updated_at)->format('F dS, Y - h:i A') }}</small></legend>
                                            @endif


                                            <div class="panel panel-danger">
                                                <div class="panel-body">
                                                    <p>{!! $data->comment !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            @endforeach

                        <div class="col-xl-12 col-lg-12">
                            <div class="part-form">
                                <form action="{{route('store.customer.reply', $ticket_object->ticket)}}" method="post">
                                    @csrf

                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12">
                                            <textarea name="comment" rows="10" required placeholder="@lang('Message...')"></textarea>
                                        </div>

                                        <div class="col-xl-12">
                                            <button type="submit">@lang('Submit')</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    @endif

@endsection
@section('script')

@stop
