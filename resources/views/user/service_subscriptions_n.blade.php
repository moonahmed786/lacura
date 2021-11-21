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
                        <h1 >{{__($pt)}}</h1>
                        <div class="col-md-2 float-right mb-3">
                            {{--                            <a href="{{route('add.new.ticket')}}" class="btn btn-warning btn-block" style="color: black ;"><b>@lang('New Ticket')</b></a>--}}
                        </div>

                        <table class="table text-center">
                            <thead>
                            <tr>
                                <th scope="col">@lang('Service Name')</th>
                                <th scope="col">@lang('Unit')</th>
                                <th scope="col">@lang('Price')</th>
                                <th scope="col">@lang('Status')</th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse($subscriptions as $data)
                                <tr>
                                    <td>{{__($data->service->title)}}</td>
                                    <td>{{ $data->unit}}</td>
                                    <td>{{ $general->currency_sym }} {{ $data->price }}</td>
                                    <td>
                                        @if($data->status == 0)
                                            <span class="badge badge-warning">@lang('Pending')</span>
                                        @elseif($data->status == 1)
                                            <span class="badge badge-info">@lang('Running')</span>
                                        @elseif($data->status == 2)
                                            <span class="badge badge-success">@lang('Complete')</span>
                                        @elseif($data->status == 9)
                                            <span class="badge badge-danger">@lang('Rejected')</span>
                                        @endif
                                    </td>

                                </tr>
                            @empty
                                <tr><td colspan="100%" class="text-muted text-center">@lang('No data available')</td></tr>
                            @endforelse
                            </tbody>
                        </table>
                        {{$subscriptions->links()}}
                    </div>
                </div>

            </div>

        </div>

    </div>





@endsection
@section('script')

@stop
