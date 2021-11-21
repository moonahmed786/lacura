

<div class="ast_whywe_wrapper ast_toppadder70 ast_bottompadder70 ">
    <div class="container">
        <div class="row">
            <div class="ast_whywe_info">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="ast_whywe_info_box">
                        <span><img src="index_layout/images/content/ww_1.png" alt=""></span>
                        <div class="ast_whywe_info_box_info">
                            <h3>@lang('Balance'): {{__($general->currency_sym)}} {{round(Auth::user()->balance,4)}}</h3>
                            <h4>{{__($general->deposit_wallet_name) }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="ast_whywe_info_box">
                        <span><img src="index_layout/images/content/ww_2.png" alt=""></span>
                        <div class="ast_whywe_info_box_info">
                            <h3>@lang('Balance'): {{__($general->currency_sym)}} {{round(Auth::user()->interest_balance,4)}}</h3>
                            <h4>{{__($general->interest_wallet_name) }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

