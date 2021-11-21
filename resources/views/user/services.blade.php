@extends('layouts.master')
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
                                @foreach($services as $data)
                                    <div class="col-xl-4 col-lg-4 col-md-6 mb-5 wow fadeInLeft">
                                        <div class="single-price">
                                            <div class="part-top">
                                                <h3>{{__($data->title)}}</h3>
                                            </div>

                                            <div class="part-bottom">
                                                <ul>
                                                    @if($data->image)
                                                        <li><img src="{{ asset('assets/images/smm') .'/'. $data->image }}" style="width: 100%"></li>
                                                    @endif
                                                    <li>{{ $data->detail }}</li>
                                                    <li><h5>@lang('Range')</h5></li>
                                                    <li><b>{{ $data->min }} - {{ $data->max }}</b></li>
                                                    <li><h5>@lang('Price')</h5></li>
                                                    <li><b>{{ $general->currency_sym }}{{ $data->price }} @lang('per') {{ $data->unit }} @lang('unit')</b></li>
                                                </ul>
                                                <a href="#0" class="subBtn" data-service="{{ $data }}">@lang('Subscribe')</a>
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
    <div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">@lang('Confirm subscription on ') <span class="title"></span></h5>
                </div>
                <form action="{{ route('user.smm.subscribe') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <strong>@lang('Select Wallet')</strong>
                            <select class="form-control" name="wallet_type">
                                <option value="1" data-name="{{ __($general->deposit_wallet_name) }}" data-balance="{{ auth()->user()->balance }}">{{__($general->deposit_wallet_name)}} ({{Auth::user()->balance}} {{$general->currency}})</option>
                                <option value="2" data-name="{{ __($general->interest_wallet_name) }}" data-balance="{{ auth()->user()->interest_balance }}">{{__($general->interest_wallet_name)}} ({{Auth::user()->interest_balance}} {{$general->currency}})</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <strong>@lang('Unit Subscribe')</strong>
                            <input type="text" name="unit" placeholder="e.g. 1000, 10000" class="form-control"/>
                        </div>

                        <p style="color: #ff1c24" class="detail"><span class="amount"></span> {{__($general->currency)}} @lang('will be subtracted from your ') <span class="selectedWallet"></span> @lang('Balance') </p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary yesBtn" style="padding: 6px 0; margin-top: 0; width: 10%;">@lang('Yes')</button>
                        <a href="{{ route('user.deposit') }}" class="btn btn-warning text-white rechargeBtn">@lang('deposit.Recharge Now')</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('No')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')


<script>

    var app = new Vue({
        el: '#app',
        data:{},
        methods:{},
        mounted() {
            $('.subBtn').on('click', function() {
                var modal = $('#serviceModal');
                var service = $(this).data('service');
                var amount = 0;
                var wallet_name = '';
                var wallet_balance = 0;
                var yesBtn = modal.find('.yesBtn');
                var rechargeBtn = modal.find('.rechargeBtn');

                modal.find('.detail').hide();
                yesBtn.hide();
                rechargeBtn.hide();

                modal.find('.title').text(service.title);
                modal.find('input[name=id]').val(service.id);


                modal.find('input[name=unit]').on('input', function() {
                    var unit = parseInt($(this).val());
                    amount = parseFloat(unit * ( parseFloat(service.price) / parseInt(service.unit)));
                    modal.find('.amount').text(amount);
                    modal.find('.detail').show();

                    if(amount > 0 && wallet_balance >= amount) {
                        rechargeBtn.hide();
                        yesBtn.show();
                    }else{
                        rechargeBtn.show();
                        yesBtn.hide();
                    }

                });

                modal.find('select[name=wallet_type]').on('change', function() {
                    wallet_name = $(this).find(':selected').data('name');
                    wallet_balance = $(this).find(':selected').data('balance');
                    modal.find('.selectedWallet').text(wallet_name);

                    if(amount > 0 && wallet_balance >= amount) {
                        rechargeBtn.hide();
                        yesBtn.show();
                    }else{
                        rechargeBtn.show();
                        yesBtn.hide();
                    }
                }).change();

                modal.modal('show');
            });
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



