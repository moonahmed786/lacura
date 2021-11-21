@extends('layouts.index')

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
    <meta property="og:description"
          content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="100"/>
@stop

@section('titulo')
    <title>La Cura - 奇跡 {{  '| '.__($pt) }}</title>
@stop

@section('content')

    <div class="ast_palm_wrapper   ast_toppadder100 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">
                        <h1><span>{{session('lang')=='ja'?'
すべてのコメント':'
Todos os Comentários'}}</span></h1>
                    </div>
                </div>

                @php
                $count= 0;
                @endphp
                @foreach($homecomment as $comment)
                    @php
                    $count += 1;
                    @endphp
                @if($count % 2 == 0)
                    <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1  mb-2">
                        <div class="ast_palm_section">
                            <div class="ast_palm_img">
                                <img class="img-fluid" alt="" src=" {{url('')}}/assets/images/user/no_user.png ">
                                <img src="" alt="" class="img-responsive">
                            </div>
                            <div class="ast_palm_content mb-2">

                                <h4>{{ \Carbon\Carbon::parse($comment->updated_at)->format('F dS, Y ') }}</h4>
                                <p>  {{$comment->comment}}</p>

                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12  mt-2">
                        <div class="ast_palm_section ast_palm_right">
                            <div class="ast_palm_img">
                                <img class="img-fluid" alt="" src=" {{url('')}}/assets/images/user/no_user.png ">


                            </div>
                            <div class="ast_palm_content">
                                <h4>{{ \Carbon\Carbon::parse($comment->updated_at)->format('F dS, Y ') }}</h4>

                                <p>  {{$comment->comment}}</p>
                            </div>
                        </div>
                    </div>
                    @endif


                @endforeach

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a class="ast_btn" id="ast_loadmore">load more</a>
                </div>
            </div>
        </div>
    </div>


@stop


