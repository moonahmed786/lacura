@if(activeTemp()  == 1)
<div class="counter">
    <div class="container">
        <div class="row d-flex">
            <div class="col-xl-6 col-lg-6 col-md-12 d-flex align-items-center wow bounce">
                <div class="single-counter">
                    <div class="part-icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <div class="part-text">
                        <h3>@lang('Balance'): {{__($general->currency_sym)}} {{round(Auth::user()->balance,4)}}</h3>
                        <h4>{{__($general->deposit_wallet_name) }}</h4>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 wow bounce">
                <div class="single-counter">
                    <div class="part-icon">
                        <i class="flaticon-donation"></i>
                    </div>
                    <div class="part-text">
                        <h3>@lang('Balance'): {{__($general->currency_sym)}} {{round(Auth::user()->interest_balance,4)}}</h3>
                        <h4>{{__($general->interest_wallet_name) }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif(activeTemp()  == 2)
    <section class="tools-satisfaction">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-tool-satisfaction">
                        <div class="icon-box">
                            <div class="inner"><i class="icofont icofont-money-bag"></i></div><!-- /.inner -->
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>@lang('Balance'): {{__($general->currency_sym)}} {{round(Auth::user()->balance,4)}}</h3>
                            <p>{{__($general->deposit_wallet_name) }}</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-tool-satisfaction -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-tool-satisfaction">
                        <div class="icon-box">
                            <div class="inner"><i class="icofont icofont-money"></i></div><!-- /.inner -->
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>@lang('Balance'): {{__($general->currency_sym)}} {{round(Auth::user()->interest_balance,4)}}</h3>
                            <p>{{__($general->interest_wallet_name) }} || {{Session::get('template')}} </p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-tool-satisfaction -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.tools-satisfaction -->
@elseif(activeTemp()  == 3)
    <div class="we-build-area home-page-two pranto-build">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12">
                    <div class="we-build-area-2-wrapper pranto-wrapper remove-padding">
                        <div class="row">
                            <div class="col-md-6 pranto-box">
                                <div class="single-how-we-build-3"><!-- single how we build -->
                                    <div class="icon">
                                        <i class="icofont icofont-money-bag"></i>
                                    </div>
                                    <div class="content">

                                        <h4 class="title">@lang('Balance'): {{__($general->currency_sym)}} {{round(Auth::user()->balance,4)}}</h4>
                                        <p>{{__($general->deposit_wallet_name) }} </p>
                                    </div>
                                </div><!-- //.single how we build -->
                            </div>
                            <div class="col-md-6 ">
                                <div class="single-how-we-build-3"><!-- single how we build -->
                                    <div class="icon">
                                        <i class="icofont icofont-money"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">@lang('Balance'): {{__($general->currency_sym)}} {{round(Auth::user()->interest_balance,4)}}</h4>
                                        <p>{{__($general->interest_wallet_name) }} </p>
                                    </div>
                                </div><!-- //.single how we build -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif(activeTemp()  == 4)
    <!-- referral begin-->
    <div class="referral" style="padding: 110px 0 0; !important;">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="left-side">
                        <div class="single-level pranto-level one">
                            <div class="part-parcent pranto-parcent">
                                <span class="level-no"></span>
                                <h4><i style="font-size: 50px;" class="fa fa-money"></i></h4>
                            </div>
                            <div class="part-text">
                                <h4 class="title">@lang('Balance'): {{__($general->currency_sym)}} {{round(Auth::user()->balance,4)}}</h4>
                                <p>{{__($general->deposit_wallet_name) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="right-side">
                        <div class="single-level pranto-level one">
                            <div class="part-parcent pranto-parcent">
                                <span class="level-no"></span>
                                <h4><i style="font-size: 50px;" class="fa fa-credit-card-alt"></i></h4>
                            </div>
                            <div class="part-text">
                                <h4 class="title">@lang('Balance'): {{__($general->currency_sym)}} {{round(Auth::user()->interest_balance,4)}}</h4>
                                <p>{{__($general->interest_wallet_name) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- referral end -->

@endif
