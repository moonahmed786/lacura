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
    <!-- page title begin-->
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <h2 class="extra-margin">{{__($pt)}}</h2>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.balance_show')
    <!-- page title end -->
    <!-- price begin-->
    <div class="price">
        <div class="container">


            @if (count($errors) > 0)
                <div class="row">
                    @foreach ($errors->all() as $error)
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p>{{__($error)}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="row">

                <div class="col-xl-12 col-lg-12">

                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                            <div class="row">
                                @foreach($gates as $data)
                                    @php $time_name = \App\TimeSetting::where('time', $data->times)->first(); @endphp
                                    <div class="col-xl-4 col-lg-4 col-md-6 mb-5 wow fadeInLeft">
                                        <div class="single-price">
                                            <div class="part-top">
                                                <h3>{{__($data->name)}}</h3>
                                                <h4>{{__($data->interest)}} @if($data->interest_status == 1) % @else {{__($general->currency)}} @endif<br /><span> {{__($time_name->name)}} / @if($data->lifetime_status == 0) {{__($data->repeat_time)}} @lang('Times') @else <!-- @lang('Lifetime') --> @endif</span></h4>
                                            </div>


                                            <div class="part-bottom">
                                                <ul>

                                                    <li>@lang('Features')</li>

                                                    @if($data->fixed_amount == 0)
                                                        <li>@lang('Invest Min-Max Amount'): <br> {{__($general->currency_sym)}} {{__($data->minimum)}} - {{__($general->currency_sym)}} {{__($data->maximum)}}</li>
                                                    @else
                                                        <li>@lang('--Donation Value'): <br> {{__($general->currency_sym)}} {{__($data->maximum)}}</li>

                                                    @endif
                                                    @if($data->capital_back_status == 1)

                                                    <!--    <li> <span class="badge badge-success">@lang('Capital Will Return Back')</span></li> -->
                                                    @elseif($data->capital_back_status == 0)
                                                    <!--    <li> <span class="badge badge-warning">@lang('Capital Will Store')</span></li> -->
                                                    @endif
                                                    <!-- <li>@lang('24/7Support')</li> -->
                                                    <!-- <li>@lang('Appointments')</li> -->
                                                    @php $more_fields = json_decode($data->extra) @endphp
                                                    @if($more_fields)
                                                        <!-- <li class="font-weight-bold">@lang('Extra')</li> -->
                                                        @foreach($more_fields as $field)
                                                        <li>{{ __($field->key) }}</li><!-- {{ __($field->value) }} -->
                                                        @endforeach
                                                    @endif
                                                    @if($data->image)
                                                        <li><img src="{{ asset('assets/images/plan') .'/'. $data->image }}" style="width: 100%"></li>
                                                    @endif
                                                </ul>
                                                <a href="#" @click.prevent="modalData('{{$data}}')">@lang('Invest Now')</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- price end -->
    <!-- Modal -->
    <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">@lang('Confirm to invest on') @{{showData.name}}?</h5>
                </div>
                <form @submit.prevent="buyPackage">
                    <div class="modal-body">

                        <div class="form-group">
                            <div v-if="showData.fixed_amount == '0'">
                                <h2 style="color: #453491">@lang('Invest'): @{{showData.minimum}} {{__($general->currency)}} - @{{showData.maximum}} {{__($general->currency)}}</h2>

                                <p style="color: #389105">@lang('Interest'):  @{{showData.interest}} <span v-if="showData.interest_status == '1'" > %  </span> <span v-else > {{__($general->currency)}} </span>
                                    <span>@lang('Per') @{{showData.times}} @lang('Hours') ,  </span><span v-if="showData.lifetime_status == '0'"> @{{showData.repeat_time}} @lang('Times') </span><span v-else>  @lang('Lifetime') </span>
                                </p>

                                <div class="form-group">
                                    <strong>@lang('Select Wallet')</strong>
                                    <select class="form-control" @change="wallet(newdata.wallet_type)" v-model="newdata.wallet_type" name="wallet_type">
                                        <option value="1">{{__($general->deposit_wallet_name)}} ({{round(Auth::user()->balance,4)}} {{__($general->currency)}})</option>
                                        <option value="2">{{__($general->interest_wallet_name)}} ({{round(Auth::user()->interest_balance,4)}} {{__($general->currency)}})</option>
                                    </select>

                                </div>

                                <small style="color: #ff1c24">@{{newdata.amount}} {{__($general->currency)}} @lang('Will Subtract from Your') @{{ wallet_name }} @lang('Balance') </small>

                                <div class="input-group-append">
                                    <input type="text" name="amount" id="amount" placeholder="Amount To Invest" v-model="newdata.amount" class="form-control"/>
                                    <span class="input-group-text">{{__($general->currency_sym)}}</span>
                                </div>

                                <small v-if="newdata.amount > parseInt(balance)" style="color: #ff1c24">@lang('You Do not Have Enough Balance To Invest.') </small>


                            </div>
                            <div v-else >
                                <h2 style="color: #453491">@{{showData.fixed_amount}} {{__($general->currency)}}</h2>
                                <div class="form-group">
                                    <strong>@lang('Select Wallet')</strong>
                                    <select class="form-control" @change="wallet(newdata.wallet_type)" v-model="newdata.wallet_type" name="wallet_type">
                                        <option value="1">{{__($general->deposit_wallet_name)}} ({{Auth::user()->balance}} {{$general->currency}})</option>
                                        <option value="2">{{__($general->interest_wallet_name)}} ({{Auth::user()->interest_balance}} {{$general->currency}})</option>
                                    </select>

                                </div>

                                <p style="color: #389105">@lang('Interest'):  @{{showData.interest}} <span v-if="showData.interest_status == '1'" > %  </span> <span v-else > {{$general->currency}} </span>
                                    <span>@lang('Per') @{{showData.times}} @lang('Hours') ,  </span><span v-if="showData.lifetime_status == '0'"> @{{showData.repeat_time}} @lang('Times') </span><span v-else>  @lang('Lifetime') </span>
                                </p>

                                <small style="color: #ff1c24">@{{showData.fixed_amount}} {{__($general->currency)}} @lang('Will Subtract from Your') @{{ wallet_name }} @lang('Balance') </small>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer" v-if="showData.fixed_amount == '0'">
                        <button type="submit" v-if="parseInt(showData.minimum) <= newdata.amount && parseInt(showData.maximum) >= newdata.amount && parseInt(newdata.amount) <= balance" class="btn btn-primary " style="padding: 6px 0; margin-top: 0; width: 10%;">@lang('Yes')</button>
                        <a href="{{ route('user.deposit') }}" v-else class="btn btn-warning text-white">@lang('deposit.Recharge Now')</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('No')</button>
                    </div>
                    <div class="modal-footer"  v-else>
                        <button type="submit" v-if="parseInt(showData.fixed_amount) <= balance" class="btn btn-primary " style="padding: 6px 0; margin-top: 0; width: 10%;">@lang('Yes')</button>
                        <a href="{{ route('user.deposit') }}" v-else class="btn btn-warning text-white">@lang('deposit.Recharge Now')</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('No')</button>
                    </div>
                </form>
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
        </section><!-- /.tools-section -->
        @include('layouts.balance_show')

        <section class="pricing-section sec-pad" id="plan">
            <div class="thm-container">
                <div class="sec-title text-center">
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                {{__($error)}}
                            </div>
                        @endforeach
                    @endif
                </div><!-- /.sec-title -->

                <div class="tab-content">
                    <div class="tab-pane fade in active" >
                        <div class="row">
                            @foreach($gates as $data)
                                @php $time_name = \App\TimeSetting::where('time', $data->times)->first(); @endphp
                                <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 20px;">
                                    <div class="single-pricing hvr-bounce-to-bottom">
                                        <div class="title">
                                            <h3>{{__($data->name)}}</h3>
                                        </div><!-- /.title -->
                                        <div class="percent">
                                            <span>{{__($data->interest)}} @if($data->interest_status == 1) % @else {{__($general->currency)}} @endif</span>
                                            <p>{{__($time_name->name)}} /  @if($data->lifetime_status == 0) {{__($data->repeat_time)}} @lang('Times') @else @lang('Lifetime') @endif</p>
                                        </div><!-- /.percent -->
                                        <div class="info">
                                            @if($data->fixed_amount == 0)
                                                <p>@lang('Invest Min-Max Amount'): <br> {{__($general->currency_sym)}} {{__($data->minimum)}} - {{__($general->currency_sym)}} {{__($data->maximum)}}</p>
                                            @else
                                                <p>@lang('Fixed Invest Amount'): <br> {{__($general->currency_sym)}} {{__($data->maximum)}}</p>
                                            @endif
                                            @if($data->capital_back_status == 1)
                                                <p> <span class="badge badge-success" style="background: #65d186">@lang('Capital Will Return Back')</span></p>
                                            @elseif($data->capital_back_status == 0)
                                                <p> <span class="badge badge-warning" style="background: #fa9689">@lang('Capital Will Store')</span></p>
                                            @endif
                                            <p>24/7Support</p>
                                        </div><!-- /.info -->
                                        <div class="btn-box">
                                            <a href="#" @click.prevent="modalData('{{$data}}')">@lang('Invest Now')</a>
                                        </div><!-- /.btn-box -->
                                    </div><!-- /.single-pricing -->
                                </div><!-- /.col-md-4 -->
                            @endforeach
                        </div><!-- /.row -->
                    </div>

                </div><!-- /.tab-content -->
            </div><!-- /.thm-container -->
        </section><!-- /.pricing-section -->


        <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">@lang('Confirm to invest on') @{{showData.name}}?</h5>
                    </div>
                    <form @submit.prevent="buyPackage">
                        <div class="modal-body">

                            <div class="form-group">
                                <div v-if="showData.fixed_amount == '0'">
                                    <h2 style="color: #453491">@lang('Invest'): @{{showData.minimum}} {{__($general->currency)}} - @{{showData.maximum}} {{__($general->currency)}}</h2>

                                    <p style="color: #389105">@lang('Interest'):  @{{showData.interest}} <span v-if="showData.interest_status == '1'" > %  </span> <span v-else > {{__($general->currency)}} </span>
                                        <span>@lang('Per') @{{showData.times}} @lang('Hours') ,  </span><span v-if="showData.lifetime_status == '0'"> @{{showData.repeat_time}} @lang('Times') </span><span v-else>  @lang('Lifetime') </span>
                                    </p>

                                    <div class="form-group">
                                        <strong>@lang('Select Wallet')</strong>
                                        <select class="form-control" @change="wallet(newdata.wallet_type)" v-model="newdata.wallet_type" name="wallet_type">
                                            <option value="1">{{__($general->deposit_wallet_name)}} ({{round(Auth::user()->balance,4)}} {{__($general->currency)}})</option>
                                            <option value="2">{{__($general->interest_wallet_name)}} ({{round(Auth::user()->interest_balance,4)}} {{__($general->currency)}})</option>
                                        </select>

                                    </div>

                                    <small style="color: #ff1c24">@{{newdata.amount}} {{__($general->currency)}} @lang('Will Subtract from Your') @{{ wallet_name }} @lang('Balance') </small>

                                    <div class="input-group">
                                        <input type="text" name="amount" id="amount" placeholder="Amount To Invest" v-model="newdata.amount" class="form-control"/>
                                        <span class="input-group-addon">{{__($general->currency_sym)}}</span>
                                    </div>

                                    <small v-if="newdata.amount > parseInt(balance)" style="color: #ff1c24">@lang('You Do not Have Enough Balance To Invest.') </small>


                                </div>
                                <div v-else >
                                    <h2 style="color: #453491">@{{showData.fixed_amount}} {{__($general->currency)}}</h2>
                                    <div class="form-group">
                                        <strong>@lang('Select Wallet')</strong>
                                        <select class="form-control" @change="wallet(newdata.wallet_type)" v-model="newdata.wallet_type" name="wallet_type">
                                            <option value="1">{{__($general->deposit_wallet_name)}} ({{round(Auth::user()->balance,8)}} {{$general->currency}})</option>
                                            <option value="2">{{__($general->interest_wallet_name)}} ({{round(Auth::user()->interest_balance,8)}} {{$general->currency}})</option>
                                        </select>

                                    </div>

                                    <p style="color: #389105">@lang('Interest'):  @{{showData.interest}} <span v-if="showData.interest_status == '1'" > %  </span> <span v-else > {{$general->currency}} </span>
                                        <span>@lang('Per') @{{showData.times}} @lang('Hours') ,  </span><span v-if="showData.lifetime_status == '0'"> @{{showData.repeat_time}} @lang('Times') </span><span v-else>  @lang('Lifetime') </span>
                                    </p>

                                    <small style="color: #ff1c24">@{{showData.fixed_amount}} {{__($general->currency)}} @lang('Will Subtract from Your') @{{ wallet_name }} @lang('Balance') </small>

                                </div>
                            </div>

                        </div>
                        <div class="modal-footer" v-if="showData.fixed_amount == '0'">
                            <button type="submit" v-if="parseInt(showData.minimum) <= newdata.amount && parseInt(showData.maximum) >= newdata.amount && parseInt(newdata.amount) < balance" class="btn btn-primary " style="padding: 6px 0; margin-top: 0; width: 10%;">@lang('Yes')</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('No')</button>
                        </div>
                        <div class="modal-footer"  v-else>
                            <button type="submit" v-if="parseInt(showData.fixed_amount) < balance" class="btn btn-primary " style="padding: 6px 0; margin-top: 0; width: 10%;">@lang('Yes')</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('No')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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

        <section class="latest-news-are pranto-section-bottom">
            <div class="container">
                <div class="row">

                @foreach($gates as $data)

                    @php $time_name = \App\TimeSetting::where('time', $data->times)->first(); @endphp
                    <!--Start Blog Post-->
                        <div class="col-md-4 col-sm-6" style="margin-top: 60px;">
                            <!--Start div-->
                            <div class="blog-post latest single-blog-post home-two">
                                <div class="content">
                                    <div class="post-meta text-center">
                                        <h2 class="post-title">{{__($data->name)}}</h2>
                                        <h4>{{__($data->interest)}} @if($data->interest_status == 1) % @else {{__($general->currency)}} @endif<br /><span>{{__($time_name->name)}} /  @if($data->lifetime_status == 0) {{__($data->repeat_time)}} @lang('Times') @else @lang('Lifetime') @endif</span></h4>
                                    </div>
                                    <div class="post-content text-center">
                                        <ul class="list-group text-center">

                                            <li class="list-group-item" style="font-weight: bold">@lang('Features')</li>
                                            @if($data->fixed_amount == 0)
                                                <li class="list-group-item">@lang('Invest Min-Max Amount'): <br> {{__($general->currency_sym)}} {{__($data->minimum)}} - {{__($general->currency_sym)}} {{__($data->maximum)}}</li>
                                            @else
                                                <li class="list-group-item">@lang('Fixed Invest Amount'): <br> {{__($general->currency_sym)}} {{__($data->maximum)}}</li>
                                            @endif
                                            @if($data->capital_back_status == 1)

                                                <li class="list-group-item"> <span class="label label-success">@lang('Capital Will Return Back')</span></li>
                                            @elseif($data->capital_back_status == 0)
                                                <li class="list-group-item"> <span class="label label-warning">@lang('Capital Will Store')</span></li>
                                            @endif
                                            <li class="list-group-item">@lang('24/7Support')</li>
                                        </ul>

                                            <div class="contact-frm-btn text-center">
                                                <a href="#" @click.prevent="modalData('{{$data}}')">@lang('Invest Now')</a>
                                            </div>


                                    </div>
                                </div>
                            </div>
                            <!--End div-->
                        </div>
                        <!--End Blog Post-->
                    @endforeach
                </div>
            </div>
        </section>

        <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">@lang('Confirm to invest on') @{{showData.name}}?</h5>
                    </div>
                    <form @submit.prevent="buyPackage">
                        <div class="modal-body">

                            <div class="form-group">
                                <div v-if="showData.fixed_amount == '0'">
                                    <h2 style="color: #453491">@lang('Invest'): @{{showData.minimum}} {{__($general->currency)}} - @{{showData.maximum}} {{__($general->currency)}}</h2>

                                    <p style="color: #389105">@lang('Interest'):  @{{showData.interest}} <span v-if="showData.interest_status == '1'" > %  </span> <span v-else > {{__($general->currency)}} </span>
                                        <span>@lang('Per') @{{showData.times}} @lang('Hours') ,  </span><span v-if="showData.lifetime_status == '0'"> @{{showData.repeat_time}} @lang('Times') </span><span v-else>  @lang('Lifetime') </span>
                                    </p>

                                    <div class="form-group">
                                        <strong>@lang('Select Wallet')</strong>
                                        <select class="form-control" @change="wallet(newdata.wallet_type)" v-model="newdata.wallet_type" name="wallet_type">
                                            <option value="1">{{__($general->deposit_wallet_name)}} ({{round(Auth::user()->balance,4)}} {{__($general->currency)}})</option>
                                            <option value="2">{{__($general->interest_wallet_name)}} ({{round(Auth::user()->interest_balance,4)}} {{__($general->currency)}})</option>
                                        </select>

                                    </div>

                                    <small style="color: #ff1c24">@{{newdata.amount}} {{__($general->currency)}} @lang('Will Subtract from Your') @{{ wallet_name }} @lang('Balance') </small>

                                    <div class="input-group-append">
                                        <input type="text" name="amount" id="amount" placeholder="Amount To Invest" v-model="newdata.amount" class="form-control"/>
                                        <span class="input-group-text">{{__($general->currency_sym)}}</span>
                                    </div>

                                    <small v-if="newdata.amount > parseInt(balance)" style="color: #ff1c24">@lang('You Do not Have Enough Balance To Invest.') </small>


                                </div>
                                <div v-else >
                                    <h2 style="color: #453491">@{{showData.fixed_amount}} {{__($general->currency)}}</h2>
                                    <div class="form-group">
                                        <strong>@lang('Select Wallet')</strong>
                                        <select class="form-control" @change="wallet(newdata.wallet_type)" v-model="newdata.wallet_type" name="wallet_type">
                                            <option value="1">{{__($general->deposit_wallet_name)}} ({{Auth::user()->balance}} {{$general->currency}})</option>
                                            <option value="2">{{__($general->interest_wallet_name)}} ({{Auth::user()->interest_balance}} {{$general->currency}})</option>
                                        </select>

                                    </div>

                                    <p style="color: #389105">@lang('Interest'):  @{{showData.interest}} <span v-if="showData.interest_status == '1'" > %  </span> <span v-else > {{$general->currency}} </span>
                                        <span>@lang('Per') @{{showData.times}} @lang('Hours') ,  </span><span v-if="showData.lifetime_status == '0'"> @{{showData.repeat_time}} @lang('Times') </span><span v-else>  @lang('Lifetime') </span>
                                    </p>

                                    <small style="color: #ff1c24">@{{showData.fixed_amount}} {{__($general->currency)}} @lang('Will Subtract from Your') @{{ wallet_name }} @lang('Balance') </small>

                                </div>
                            </div>

                        </div>
                        <div class="modal-footer" v-if="showData.fixed_amount == '0'">
                            <button type="submit" v-if="parseInt(showData.minimum) <= newdata.amount && parseInt(showData.maximum) >= newdata.amount && parseInt(newdata.amount) < balance" class="btn btn-primary " style="padding: 6px 0; margin-top: 0; width: 10%;">@lang('Yes')</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('No')</button>
                        </div>
                        <div class="modal-footer"  v-else>
                            <button type="submit" v-if="parseInt(showData.fixed_amount) < balance" class="btn btn-primary " style="padding: 6px 0; margin-top: 0; width: 10%;">@lang('Yes')</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('No')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
        <!-- plan begin-->
        <div class="plan">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section-title">
                            <h2>{{__($general->plan_title)}}</h2>
                            <p>{{__($general->plan_subtitle)}}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach($gates as $data)
                    @php $time_name = \App\TimeSetting::where('time', $data->times)->first(); @endphp
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-plan">
                            <h3>{{__($data->name)}}</h3>
                            <div class="part-parcent">
                                <h4>{{__($data->interest)}} @if($data->interest_status == 1) % @else {{__($general->currency)}} @endif</h4>
                                <span class="parcent-info">{{__($time_name->name)}} / @if($data->lifetime_status == 0) {{__($data->repeat_time)}} @lang('Times') @else @lang('Lifetime') @endif</span>
                            </div>
                            <div class="part-feature">

                                @if($data->fixed_amount == 0)
                                    <div class="single-plan-feature">
                                        <span class="small-text">@lang('Invest Min-Max Amount')</span>
                                        <span class="large-text">{{__($general->currency_sym)}} {{__($data->minimum)}} - {{__($general->currency_sym)}} {{__($data->maximum)}}</span>
                                    </div>
                                @else
                                    <div class="single-plan-feature">
                                        <span class="small-text">@lang('Fixed Invest Amount')</span>
                                        <span class="large-text">{{__($general->currency_sym)}} {{__($data->maximum)}}</span>
                                    </div>
                                @endif
                                @if($data->capital_back_status == 1)
                                    <div class="single-plan-feature">
                                        <span class="small-text"><span class="badge badge-success" style="display: initial">@lang('Capital Will Return Back')</span></span>
                                    </div>
                                @elseif($data->capital_back_status == 0)
                                    <div class="single-plan-feature">
                                        <span class="small-text"><span class="badge badge-warning" style="display: initial">@lang('Capital Will Store')</span></span>
                                    </div>
                                @endif
                                <div class="single-plan-feature">
                                    <span class="large-text">@lang('24/7 Support')</span>
                                </div>
                            </div>
                            <div class="part-button">
                                <a href="#" @click.prevent="modalData('{{$data}}')">@lang('Invest Now')</a>
                            </div>
                        </div>
                    </div>
                    @endforeach


                        <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content text-center">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalLabel">@lang('Confirm to invest on') @{{showData.name}}?</h5>
                                    </div>
                                    <form @submit.prevent="buyPackage">
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <div v-if="showData.fixed_amount == '0'">
                                                    <h2 style="color: #453491">@lang('Invest'): @{{showData.minimum}} {{__($general->currency)}} - @{{showData.maximum}} {{__($general->currency)}}</h2>

                                                    <p style="color: #389105">@lang('Interest'):  @{{showData.interest}} <span v-if="showData.interest_status == '1'" > %  </span> <span v-else > {{__($general->currency)}} </span>
                                                        <span>@lang('Per') @{{showData.times}} @lang('Hours') ,  </span><span v-if="showData.lifetime_status == '0'"> @{{showData.repeat_time}} @lang('Times') </span><span v-else>  @lang('Lifetime') </span>
                                                    </p>

                                                    <div class="form-group">
                                                        <strong>@lang('Select Wallet')</strong>
                                                        <select class="form-control" @change="wallet(newdata.wallet_type)" v-model="newdata.wallet_type" name="wallet_type">
                                                            <option value="1">{{__($general->deposit_wallet_name)}} ({{round(Auth::user()->balance,4)}} {{__($general->currency)}})</option>
                                                            <option value="2">{{__($general->interest_wallet_name)}} ({{round(Auth::user()->interest_balance,4)}} {{__($general->currency)}})</option>
                                                        </select>

                                                    </div>

                                                    <small style="color: #ff1c24">@{{newdata.amount}} {{__($general->currency)}} @lang('Will Subtract from Your') @{{ wallet_name }} @lang('Balance') </small>

                                                    <div class="input-group-append">
                                                        <input type="text" name="amount" id="amount" placeholder="Amount To Invest" v-model="newdata.amount" class="form-control"/>
                                                        <span class="input-group-text">{{__($general->currency_sym)}}</span>
                                                    </div>

                                                    <small v-if="newdata.amount > parseInt(balance)" style="color: #ff1c24">@lang('You Do not Have Enough Balance To Invest.') </small>


                                                </div>
                                                <div v-else >
                                                    <h2 style="color: #453491">@{{showData.fixed_amount}} {{__($general->currency)}}</h2>
                                                    <div class="form-group">
                                                        <strong>@lang('Select Wallet')</strong>
                                                        <select class="form-control" @change="wallet(newdata.wallet_type)" v-model="newdata.wallet_type" name="wallet_type">
                                                            <option value="1">{{__($general->deposit_wallet_name)}} ({{Auth::user()->balance}} {{$general->currency}})</option>
                                                            <option value="2">{{__($general->interest_wallet_name)}} ({{Auth::user()->interest_balance}} {{$general->currency}})</option>
                                                        </select>

                                                    </div>

                                                    <p style="color: #389105">@lang('Interest'):  @{{showData.interest}} <span v-if="showData.interest_status == '1'" > %  </span> <span v-else > {{$general->currency}} </span>
                                                        <span>@lang('Per') @{{showData.times}} @lang('Hours') ,  </span><span v-if="showData.lifetime_status == '0'"> @{{showData.repeat_time}} @lang('Times') </span><span v-else>  @lang('Lifetime') </span>
                                                    </p>

                                                    <small style="color: #ff1c24">@{{showData.fixed_amount}} {{__($general->currency)}} @lang('Will Subtract from Your') @{{ wallet_name }} @lang('Balance') </small>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer" v-if="showData.fixed_amount == '0'">
                                            <button type="submit" v-if="parseInt(showData.minimum) <= newdata.amount && parseInt(showData.maximum) >= newdata.amount && parseInt(newdata.amount) < balance" class="btn btn-primary " style="padding: 6px 0; margin-top: 0; width: 10%;">@lang('Yes')</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('No')</button>
                                        </div>
                                        <div class="modal-footer"  v-else>
                                            <button type="submit" v-if="parseInt(showData.fixed_amount) < balance" class="btn btn-primary " style="padding: 6px 0; margin-top: 0; width: 10%;">@lang('Yes')</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('No')</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
        <!-- plan end -->
    @endif



@endsection
@section('script')


<script>
    var app = new Vue({
        el: '#app',
        data:{
             showData: {},
            newdata:{
                amount: '',
                plan_id : '',
                wallet_type : '',
            },
            balance : {},
            wallet_name : {},
        },
        methods:{
            modalData(val){
                $('#depoModal').modal('show');
                 this.showData = JSON.parse(val);
            },
            buyPackage(){

                var inputData = this.newdata;
                if (this.showData.fixed_amount != 0){
                    inputData['amount'] = this.showData.fixed_amount;
                }
                inputData['plan_id'] = this.showData.id;
                axios.post('{{route('user.buy.plan')}}', inputData).then(function (res) {


                    if (res.data.success == false)
                    {
                        jQuery('#depoModal').modal('hide');
                        swal(res.data.message,"", "alert");
                    }else {

                        jQuery('#depoModal').modal('hide');
                        jQuery('#amount').val('');
                        window.location.href = '{{route('user.interest.log')}}';

                    }

                })


            },
            wallet(val){
                // val == 1 (Deposit Wallet) & val == 2 (Interest Wallet)
                if (val == 1) {
                    this.balance = '{{round( Auth::user()->balance, 8) }}';
                    this.wallet_name = '{{$general->deposit_wallet_name }}';
                }else {
                    this.balance = '{{ round(Auth::user()->interest_balance,8) }}';
                    this.wallet_name = '{{ $general->interest_wallet_name }}';
                }

            }
        }


    });
</script>

@endsection

@section('style')
<style>
.price .single-price .part-top {
        background: -webkit-linear-gradient(-30deg, #052157 0%, #91039f 100%); }
        .price .single-price .part-top a {
            border: 1px solid #fff; }
</style>
@endsection
@section('script')



