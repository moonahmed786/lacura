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

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">


                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                    <div class="widget-content widget-content-area br-6">
                        <h1>{{__('deposit.'.$pt)}}</h1>
                        <div class="col-md-2 float-right mb-3">
                            {{--                            <a href="{{route('add.new.ticket')}}" class="btn btn-warning btn-block" style="color: black ;"><b>@lang('New Ticket')</b></a>--}}
                        </div>


                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-lg-5 justify-content-center">
                                    @if (count($errors) > 0)


                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-hidden="true">&times;
                                                </button>
                                                <p style="color: black">{{__($error)}}</p>
                                            </div>
                                        @endforeach


                                    @endif


                                    <div class="card border-success mb-3 mt-2">
{{--                                        <h5 class="card-header border-success ">BitCoin BlockChain</h5>--}}

                                        <div class="card-body ">
                                            <img class="img-thumbnail"
                                                 src="{{asset('assets/images/gateway')}}/{{$data->gateway_id}}.jpg"/>

                                            <ul class="list-group list-group-minimal mb-3 mt-2">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">@lang('deposit.Payable')
                                                    :
                                                    <strong>{{$data->charge + $data->amount}} {{__($general->currency_sym)}}</strong>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">@lang('deposit.Amount')
                                                    :
                                                    <strong>{{__($data->amount)}} {{__($general->currency_sym)}}</strong>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">@lang('deposit.Charge')
                                                    :
                                                    <strong>{{__($data->charge)}} {{__($general->currency_sym)}}</strong>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="card-footer bg-transparent border-success">
                                            <form class="" id="balanceWithdraw"
                                                  action="{{ route('deposit.confirm') }}" method="post">

                                                @csrf
                                                <input type="hidden" name="gateway" value="{{$data->gateway_id}}"/>


                                                <button id="btn-confirm" type="submit"
                                                        class="login-button btn-contact btn btn-primary"> @lang('deposit.Pay Now') </button>
                                            </form>
                                        </div>



                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
@section('script')
    @if($data->gateway_id == 107)
        <form action="{{ route('ipn.paystack') }}" method="POST">
            @csrf
            <script
                src="//js.paystack.co/v1/inline.js"
                data-key="{{ $data->gateway->val1 }}"
                data-email="{{ $data->user->email }}"
                data-amount="{{ round($data->usd_amo/$data->gateway->val7, 2)*100 }}"
                data-currency="NGN"
                data-ref="{{ $data->trx }}"
                data-custom-button="btn-confirm"
            >
            </script>
        </form>
    @elseif($data->gateway_id == 108)
        <script src="//voguepay.com/js/voguepay.js"></script>
        <script>
            closedFunction = function () {

            }
            successFunction = function (transaction_id) {
                window.location.href = '{{ url('home/vogue') }}/' + transaction_id + '/success';
            }
            failedFunction = function (transaction_id) {
                window.location.href = '{{ url('home/vogue') }}/' + transaction_id + '/error';
            }

            function pay(item, price) {
                //Initiate voguepay inline payment
                Voguepay.init({
                    v_merchant_id: "{{ $data->gateway->val1 }}",
                    total: price,
                    notify_url: "{{ route('ipn.voguepay') }}",
                    cur: 'USD',
                    merchant_ref: "{{ $data->trx }}",
                    memo: 'Buy ICO',
                    recurrent: true,
                    frequency: 10,
                    developer_code: '5af93ca2913fd',
                    store_id: "{{ $data->user_id }}",
                    custom: "{{ $data->trx }}",

                    closed: closedFunction,
                    success: successFunction,
                    failed: failedFunction
                });
            }

            $(document).ready(function () {
                $(document).on('click', '#btn-confirm', function (e) {
                    e.preventDefault();
                    pay('Buy', {{ $data->usd_amo }});
                });
            })
        </script>

    @endif
@endsection
