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


    <!-- page title begin-->
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <h2>@lang('miniblog.Detail')</h2>
                </div>
            </div>
        </div>
    </div>
    <!--Blog section start-->
    <div class="ast_blog_wrapper ast_toppadder80 ast_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    @if(session('lang')=='ja')
                    <div class="ast_blog_box">
                        <div class="ast_blog_img">
                            <span class="ast_date_tag">{{ \Carbon\Carbon::parse($detail->updated_at)->format('F dS, Y ') }}</span>
                            <img src="/assets/images/blog/{{$detail->image}}" alt="{{$detail->title_ja}}" title="Blog">
                        </div>
                        <div class="ast_blog_info">
                            <ul class="ast_blog_info_text">
{{--                                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28 comments</a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Andrew Coyne</a></li>--}}
                            </ul>
                            <h3 class="ast_blog_info_heading">{{$detail->title_ja}}</h3>
                            <p class="ast_blog_info_details">{!! $detail->description_ja !!}</p>

                        </div>
                    </div>

                    @else


                        <div class="ast_blog_box">
                            <div class="ast_blog_img">
                                <span class="ast_date_tag">{{ \Carbon\Carbon::parse($detail->updated_at)->format('F dS, Y ') }}</span>
                                <img src="/assets/images/blog/{{$detail->image}}" alt="{{$detail->title_pt}}" title="Blog">
                            </div>
                            <div class="ast_blog_info">
                                <ul class="ast_blog_info_text">
{{--                                    <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> {{$blog_comments->count}} @lang('comments')</a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Andrew Coyne</a></li>--}}
                                </ul>
                                <h3 class="ast_blog_info_heading">{{$detail->title_pt}}</h3>
                                <p class="ast_blog_info_details">{!! $detail->description_pt !!}</p>

                            </div>
                        </div>

                    @endif








                    <div class="ast_blog_comment_wrapper">
                        <h4 class="ast_blog_heading">@lang('miniblog.All Comments')</h4>
                        <ul>

                           @foreach($blog_comments as $blog_com)
                            <li>
                                <div class="ast_blog_comment">
                                    <div class="ast_comment_image">

                                        <img alt="{{$blog_com->user->name}}"
                                             src="@if(0) {{ asset('assets/images/user') .'/'. $blog_com->user->image }} @else {{ asset('assets/images/user/no_user.png') }} @endif" class="img" height="200px">

                                    </div>
                                    <div class="ast_comment_text">
{{--                                        <h5 class="ast_bloger_name">anonymous user</h5>--}}
{{--                                        <h5 class="ast_bloger_name">{{$blog_com->user->name}}</h5>--}}
                                        <span class="ast_blog_date">{{ \Carbon\Carbon::parse($blog_com->updated_at)->format('F dS, Y ') }}</span>
                                        <p class="ast_blog_post">{{$blog_com->text}} </p>
{{--                                        <a href="#" class="ast_comment_reply">Reply</a>--}}
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="ast_blog_message_wrapper">
                        <h4 class="ast_blog_heading">@lang('miniblog.Leave a reply')</h4>
                        <div class="ast_blog_messages">
                            <form action="{{route('save.min.comment')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea rows="5" name="text" placeholder="@lang('miniblog.Your Message')"></textarea>
                                    </div>
                                    <input type="hidden" name="blog_id" value="{{$detail->id}}">
{{--                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                        <input type="text" placeholder="Name*">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                        <input type="email" placeholder="Email*">--}}
{{--                                    </div>--}}
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" id="ed_submit" class="ast_btn">@lang('miniblog.Submit')</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="sidebar_wrapper">
{{--                        <aside class="widget widget_search">--}}
{{--                            <input type="text" placeholder="Search...">--}}
{{--                            <button type="button"><i class="fa fa-search"></i></button>--}}
{{--                        </aside>--}}

                        <aside class="widget widget_categories">
                            <h4 class="widget-title">@lang('miniblog.Categories')</h4>
                            <ul>
                                @foreach($categories as $cat )
                                    <li><a href="{{route('miniblog.category',$cat->id)}}">
                                            @if(session('lang')=='ja')
                                                {{$cat->title}}
                                            @else
                                                {{$cat->title_pt}}
                                            @endif


                                        </a></li>
                                @endforeach
                            </ul>
                        </aside>

{{--                        <aside class="widget widget_archive">--}}
{{--                            <h4 class="widget-title">Archives</h4>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">January 2018 (8)</a></li>--}}
{{--                                <li><a href="#">February 2018 (6)</a></li>--}}
{{--                                <li><a href="#">December 2016 (5)</a></li>--}}
{{--                                <li><a href="#">October 2016 (3)</a></li>--}}
{{--                                <li><a href="#">May 2016 (8)</a></li>--}}
{{--                                <li><a href="#">August 2015 (7)</a></li>--}}
{{--                            </ul>--}}
{{--                        </aside>--}}

{{--                        <aside class="widget widget_recent_entries">--}}
{{--                            <h4 class="widget-title">Recent Posts</h4>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Hello world!</a></li>--}}
{{--                                <li><a href="#">zodiac Sign</a></li>--}}
{{--                                <li><a href="#">cultures look</a></li>--}}
{{--                                <li><a href="#">symbolic associations</a></li>--}}
{{--                                <li><a href="#">outer planets</a></li>--}}
{{--                            </ul>--}}
{{--                        </aside>--}}

{{--                        <aside class="widget widget_tag_cloud">--}}
{{--                            <h4 class="widget-title">Search by Tags</h4>--}}
{{--                            <a href="#" class="ed_btn">Zodiac</a>--}}
{{--                            <a href="#" class="ed_btn">Planets</a>--}}
{{--                            <a href="#" class="ed_btn">stars</a>--}}
{{--                            <a href="#" class="ed_btn">astrology</a>--}}
{{--                            <a href="#" class="ed_btn">Earth</a>--}}
{{--                            <a href="#" class="ed_btn">moon</a>--}}
{{--                            <a href="#" class="ed_btn">future</a>--}}
{{--                            <a href="#" class="ed_btn">magical</a>--}}
{{--                            <a href="#" class="ed_btn">sun</a>--}}
{{--                        </aside>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Blog section end-->
    <!-- page title end -->
    <div class="container">


@stop


