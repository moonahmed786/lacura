<?php
//Route::get('setlang/{locale}',function($lang){
//
//
//    \App::setLocale($lang);
//    \session()->put('lang', $lang);
////    return redirect()->back();
//})->name('set_language');




Route::get('sitemap', 'SitemapController@sitemap')->name('sitemap');
//Route::get('mysitemap', function(){
//
//    // create new sitemap object
//    $sitemap = App::make("sitemap");
//
//    // add items to the sitemap (url, date, priority, freq)
//    $sitemap->add(URL::to(''), '2012-08-25T20:10:00+02:00', '1.0', 'daily');
//    $sitemap->add(URL::to('index'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly');
//
//    // get all posts from db
////    $posts = DB::table('posts')->orderBy('created_at', 'desc')->get();
//
//    // add every post to the sitemap
////    foreach ($posts as $post)
////    {
////        $sitemap->add($post->slug, $post->modified, $post->priority, $post->freq);
////    }
//
//    // generate your sitemap (format, filename)
//    $sitemap->store('xml', 'mysitemap');
//    // this will generate file mysitemap.xml to your public folder
//
//});

//cron
Route::get('/cron', 'CronController@returnInterest');
Route::get('/remove-album', 'CronController@remove_albums');
Route::get('/remove-slider', 'CronController@remove_sliders');
Route::get('notify-users', 'CronController@send_reminder');

//add for Willians 17/04/2020
Route::get('/questions', 'FrontendController@duvidasIndex')->name('duvidas.front');

//add for Willians 11/07/2020
// Route::get('/questions', 'FrontendController@duvidasIndex')->name('duvidas.front');
Route::get('/share', 'HomeController@shareIndex')->name('share.user');


//Home Comment using user Authenticity

Route::post('submithomecomment', 'FrontendController@submithomecomment')->name('submithomecomment');

Route::post('schedule', 'ScheduleController@getSchedule')->name('schedule');
Route::post('schedule/store', 'ScheduleController@storeSchedule')->name('schedule.store');
Route::post('schedule/cancel', 'ScheduleController@cancelSchedule')->name('user.schedule.cancel');
Route::get('schedule/store/resubmit', 'ScheduleController@storeScheduleSubmit')->name('schedule.store.resubmit');
Route::post('schedule-city/store', 'ScheduleController@scheduleCityStore')->name('scheduleCity.store');
Route::get('confirm/schedual/{id}/{token}','ScheduleController@confirmShecdual');


Route::get('/front/questionnare/get/{id}', 'FrontendController@singleUserQuestionnare')->name('front.view.questionnare');

//Payment IPN
Route::get('/ipnbtc', 'PaymentController@ipnBchain')->name('ipn.bchain');
Route::get('/ipnblockbtc', 'PaymentController@blockIpnBtc')->name('ipn.block.btc');
Route::get('/ipnblocklite', 'PaymentController@blockIpnLite')->name('ipn.block.lite');
Route::get('/ipnblockdog', 'PaymentController@blockIpnDog')->name('ipn.block.dog');
Route::post('/ipnpaypal', 'PaymentController@ipnpaypal')->name('ipn.paypal');
Route::post('/ipnperfect', 'PaymentController@ipnperfect')->name('ipn.perfect');
Route::post('/ipnstripe', 'PaymentController@ipnstripe')->name('ipn.stripe');
Route::post('/ipnskrill', 'PaymentController@skrillIPN')->name('ipn.skrill');
Route::post('/ipncoinpaybtc', 'PaymentController@ipnCoinPayBtc')->name('ipn.coinPay.btc');
Route::post('/ipncoinpayeth', 'PaymentController@ipnCoinPayEth')->name('ipn.coinPay.eth');
Route::post('/ipncoinpaybch', 'PaymentController@ipnCoinPayBch')->name('ipn.coinPay.bch');
Route::post('/ipncoinpaydash', 'PaymentController@ipnCoinPayDash')->name('ipn.coinPay.dash');
Route::post('/ipncoinpaydoge', 'PaymentController@ipnCoinPayDoge')->name('ipn.coinPay.doge');
Route::post('/ipncoinpayltc', 'PaymentController@ipnCoinPayLtc')->name('ipn.coinPay.ltc');
Route::post('/ipncoin', 'PaymentController@ipnCoin')->name('ipn.coinpay');
Route::post('/ipncoingate', 'PaymentController@ipnCoinGate')->name('ipn.coingate');

Route::post('/ipnpaytm', 'PaymentController@ipnPayTm')->name('ipn.paytm');
Route::post('/ipnpayeer', 'PaymentController@ipnPayEer')->name('ipn.payeer');
Route::post('/ipnpaystack', 'PaymentController@ipnPayStack')->name('ipn.paystack');
Route::post('/ipnvoguepay', 'PaymentController@ipnVoguePay')->name('ipn.voguepay');

//paypal
Route::get('payment', 'PaymentController@payment')->name('payment');
Route::get('cancel', 'PaymentController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PaymentController@success')->name('payment.success');

//Payment IPN
https://lacura.me/callback/coinpayments
Route::post('callback/coinpayments',
    'PaymentController@coinPaymentsValidateIpn');

Route::get('/', 'FrontendController@frontIndex')->name('root');

Route::get('/purification-soul', 'FrontendController@purification_soulIndex')->name('purification-soul.front');
Route::get('/influence-of-work', 'FrontendController@influence_of_workIndex')->name('influence-of-work.front');
Route::get('/spiritual-purification', 'FrontendController@spiritual_purificationIndex')->name('spiritual-purification.front');
Route::get('/miniblog', 'FrontendController@miniblogIndex')->name('miniblog');
Route::get('/mini/blog/category/{category}', 'FrontendController@miniblogCategoryIndex')->name('miniblog.category');
Route::get('/alcoholics-and-addictions', 'FrontendController@alcoholics_and_addictionsIndex')->name('alcoholics-and-addictions.front');
Route::get('/mental-trauma', 'FrontendController@mental_traumaIndex')->name('mental-trauma.front');
Route::get('/knowledge-base', 'FrontendController@blogIndex')->name('front.blog');
Route::get('/about', 'FrontendController@about')->name('about');

//Route::get('/contact', 'FrontendController@contactIndex')->name('contact.front');
Route::post('/contact', 'FrontendController@contactMailSend')->name('send.mail.contact');
Route::get('/knowledge-base/{id}/{any}', 'FrontendController@blogDetail')->name('blog.detail');
Route::get('/terms', 'FrontendController@termsIndex')->name('menu.index.front');
Route::post('/subscriber', 'FrontendController@storeSubs')->name('subscriber.store');

//lang
Route::get('/change-lang/{lang}', 'FrontendController@changeLang')->name('lang');

//admin panel
Route::get('admin', 'AdminAuth\LoginController@showLoginForm');
Route::get('admin/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'AdminAuth\LoginController@login')->name('login.post');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {

    Route::get('/users/questionnaires/list','AdminController@getUsersQuestionnairesList')->name('users-questionnaires-list');
    Route::get('/user/questionnare/get/{id}', 'AdminController@singleUserQuestionnare')->name('user.view.questionnare');
    Route::post('/draw/img/save', 'AdminController@saveDrawImg')->name('admin.save.draw.img');
    Route::get('/draw/img/list/{id}', 'AdminController@indexDrawImg')->name('admin.list.draw.img');
    Route::get('/draw/img/delete/{id}', 'AdminController@deleteDrawImg')->name('admin.delete.draw.img');

    //draw image for user profile
    Route::get('/draw/image/{id}', 'AdminController@saveUserImage')->name('save.user.image');
    Route::post('/draw/profile/img/save', 'AdminController@saveDrawProfImg')->name('admin.save.user.profile');


    Route::group(['prefix' => 'gallery'], function () {
        // Route::get('recent/upload', 'GalleryController@recentUpload')->name('recent.upload');
        // Route::get('recent/album', 'GalleryController@recentAlbum')->name('recent.album');
        // Route::get('upload/search', 'GalleryController@uploadSearch')->name('upload.search');
        Route::get('album/search', 'GalleryController@albumSearch')->name('album.search');
        // Route::post('upload/remove', 'GalleryController@uploadRemove')->name('upload.remove');
        Route::get('upload', 'GalleryController@upload')->name('upload');
        Route::post('upload', 'GalleryController@uploadStore')->name('upload.store');
        // Route::post('upload/update', 'GalleryController@uploadUpdate')->name('upload.update');
        Route::post('upload-image', 'GalleryController@uploadImage')->name('gallery.upload-image');
        Route::get('/album/{id}/public', 'GalleryController@public')->name('album.public');
        Route::get('/album/{id}/private', 'GalleryController@private')->name('album.private');
        Route::get('/setting', 'GalleryController@setting')->name('gallery.setting');

        // added at 22 sep 2019
        Route::get('album', 'GalleryController@albums')->name('gallery.album');
        Route::get('album/{id}/items', 'GalleryController@albumItems')->name('gallery.album.items');
        Route::post('album/{id}/items/remove', 'GalleryController@albumItemsRemove')->name('gallery.album.items.remove');
        Route::post('album/remove', 'GalleryController@remove')->name('gallery.album.remove');
        Route::post('album/{id}/massremove', 'GalleryController@massRemove')->name('gallery.album.mass.remove');
        Route::get('album/{id}/show-about', 'GalleryController@showAbout')->name('gallery.album.show-about');
        Route::get('album/{id}/hide-about', 'GalleryController@hideAbout')->name('gallery.album.hide-about');
        Route::get('album/{id}/customize-items', 'GalleryController@customizeItemsView')->name('gallery.album.customize-items');
        Route::post('album/{id}/customize-items', 'GalleryController@customizeItems')->name('gallery.album.customize-items');
    });

    // PAGE added at 26 sep 2019
    Route::post('page/update', 'PageController@update')->name('page.update');
    Route::get('page/index/page/settings', 'PageController@index')->name('page.index.settings');
    Route::get('page/alcoholics-and-addictions', 'PageController@alcoholics')->name('page.alcoholics');
    Route::get('page/mental-trauma', 'PageController@mental')->name('page.mental');
    Route::get('page/spiritual-purification', 'PageController@spiritual')->name('page.spiritual');
    Route::get('page/influence-of-work', 'PageController@influence')->name('page.influence');
    Route::get('page/purification-soul', 'PageController@purification')->name('page.purification');
    Route::get('page/about', 'PageController@about')->name('page.about');
    Route::post('page/about', 'PageController@aboutConfig')->name('page.about');

    Route::get('/home', 'AdminController@dashboard')->name('admin.home');
    Route::get('/logout', 'AdminAuth\LoginController@logout')->name('admin.logout');

    //profile
    Route::get('/change/password', 'AdminController@changePassword')->name('admin.changePass');
    Route::post('/change/password', 'AdminController@updatePassword')->name('admin.changePass');
    Route::get('/profile', 'AdminController@profile')->name('admin.profile');
    Route::post('/profile', 'AdminController@updateProfile')->name('admin.profile');

    //general
    //general
    Route::get('/general/settings', 'GeneralSettingController@GenSetting')->name('general.index');
    Route::get('/general/email', 'GeneralSettingController@GenSettingEmail')->name('email.index');
    Route::get('/general/sms', 'GeneralSettingController@GenSettingSms')->name('sms.index');
    Route::get('/general/contact', 'GeneralSettingController@GenSettingContact')->name('contact.index');
    Route::post('/general/settings', 'GeneralSettingController@UpdateGenSetting')->name('general.store');

    // seo
    Route::get('seo', 'GeneralSettingController@seoIndex')->name('seo');

    //logo
    Route::get('/logo/icon', 'GeneralSettingController@logoIndex')->name('logo.index');
    Route::post('/logo/icon', 'GeneralSettingController@UpdateLogoFavi')->name('manage-logo');

    //banner
    Route::get('/banner', 'GeneralSettingController@bannerIndex')->name('banner.index');
    Route::post('/banner', 'GeneralSettingController@Updatebanner')->name('banner.store');
    //bread
    Route::get('/bread', 'GeneralSettingController@breadIndex')->name('bread.index');
    Route::post('/bread', 'GeneralSettingController@Breadbanner')->name('bread.store');
    //static
    Route::get('/static', 'GeneralSettingController@staticIndex')->name('static.index');
    //about
    // Route::get('/about', 'AboutMeController@index')->name('about.index');
    // Route::post('/about', 'AboutMeController@store')->name('about.store');
    // Route::post('/about/remove', 'AboutMeController@remove')->name('about.remove');
    // new-users
    Route::get('admin/new-users', 'GeneralSettingController@newUsers')->name('new.users');

    //background
    Route::get('/background/image', 'GeneralSettingController@backgroundIndex')->name('background.image.index');
    Route::post('/background/image', 'GeneralSettingController@backgroundUpdate')->name('background.image.store');

    //footer
    Route::get('/footer', 'GeneralSettingController@footerIndex')->name('footer.index');
    //charges
    Route::get('/charges', 'GeneralSettingController@chargeIndex')->name('charge.index');

    Route::post('withdraw-rule', 'WithdrawMethodController@withdrawRule')->name('withdraw.rule');

    Route::resources([
        //team
        'team' => 'TeamController',
        //team
        'testimonial' => 'TestimonialController',
        //social
        'social' => 'SocialController',
        //service
        'service' => 'ServiceController',
        //service
        'knowledge-base' => 'BlogController',
        //terms
        'terms' => 'MenuController',
        //plan
        'plan' => 'PlanController',
        //TIMES
        'time' => 'TimeSettingController',
        //withdraw
        'withdraw_method' => 'WithdrawMethodController',
        //how it's work
//        'how-it-work' => 'HowItWorkController',
        //service
        'schedule_city' => 'ScheduleCityController',
    ]);

 //miniblog
    Route::get('/addminiblogposts', 'MiniblogController@addMiniBlog')->name('addminiblogposts');
    Route::get('/mini/categories', 'MiniblogController@addCategories')->name('addCategories');
    Route::post('/add/categories/miniBlog', 'MiniblogController@storeMiniBlogCategories')->name('StoreBlogCategories');
    Route::get('/manageminiblogposts', 'MiniblogController@ManageMiniBlog')->name('manageblogposts');
    Route::get('/editminiblogposts/{id}', 'MiniblogController@EditminiBlog')->name('miniblog.edit');
    Route::post('/addBlog', 'MiniblogController@StoreMiniBlog')->name('StoreBlog');
    Route::post('/updatebloginfo/{id}', 'MiniblogController@UpdateMiniBlog')->name('miniblog.update');
    Route::post('/deleteInfo/{id}', 'MiniblogController@DeleteMiniBlog')->name('miniBlog.destroy');
    Route::post('/changeStat/{id}', 'MiniblogController@ChangeStatus')->name('miniBlog.changestatus');

	//comments
    Route::post('/changeStatus/{id}', 'CommentController@ChangeStatus')->name('comment.changestat');
    Route::post('/delComment/{id}', 'CommentController@DeleteComment')->name('comment.destroy');

	// news
    Route::post('news/image', 'AdminController@newsImage')->name('news.image');

    // slider
    Route::get('/slider', 'SliderController@index')->name('slider.index');
    Route::get('slider/new', 'SliderController@create')->name('slider.new');
    Route::post('/slider', 'SliderController@store')->name('slider.store');
    Route::post('/slider/remove', 'SliderController@remove')->name('slider.remove');
    Route::post('/slider/remove/multi', 'SliderController@massRemove')->name('slider.remove.multi');

    Route::post('/slider/setting', 'SliderController@setting')->name('slider.setting');
    Route::post('/slider/image-upload', 'SliderController@uploadImage')->name('slider.image-upload');

    // Instagram type slider
    Route::get('/inslider', 'InstSliderController@index')->name('inslider.index');
    Route::get('inslider/new', 'InstSliderController@create')->name('inslider.new');
    Route::post('/inslider', 'InstSliderController@store')->name('inslider.store');
    Route::post('/inslider/remove', 'InstSliderController@remove')->name('inslider.remove');
    Route::post('/inslider/remove/multi', 'InstSliderController@massRemove')->name('inslider.remove.multi');
    Route::post('/inslider/setting', 'InstSliderController@setting')->name('inslider.setting');
    Route::post('/inslider/image-upload', 'InstSliderController@uploadImage')->name('inslider.image-upload');
//    //advertise
//    Route::get('/banner/advertise', 'AdvertiseController@indexBanner')->name('advertise.banner');
//    Route::get('/script/advertise', 'AdvertiseController@indexScript')->name('advertise.script');
////
	//withdraw
    Route::get('/withdraw/request', 'AdminController@withdrawRequest')->name('withdraw.request');
    Route::get('/approved/withdraw', 'AdminController@withdrawApproved')->name('approved.withdraw');
    Route::get('/rejected/withdraw', 'AdminController@withdrawRejected')->name('rejected.withdraw');
    Route::post('/withdraw/approve', 'AdminController@withdrawApprove')->name('withdraw.approve');
    Route::post('/withdraw/reject', 'AdminController@withdrawReject')->name('withdraw.reject');
    Route::get('/withdraw/log', 'AdminController@withdrawLog')->name('withdraw.log');

	//support ticket
    Route::get('/supports', 'SupportTicketController@indexSupport')->name('support.admin.index');
    Route::get('/support/reply/{ticket}', 'SupportTicketController@adminSupport')->name('ticket.admin.reply');
    Route::post('/reply/{ticket}', 'SupportTicketController@adminReply')->name('store.admin.reply');

	//user
    Route::get('/active/users', 'AdminController@activeUserIndex')->name('active.user');
//    Route::get('/email/verified/users', 'AdminController@emailVerified')->name('total.email.verified');
    Route::get('/sms/verified/users', 'AdminController@smsVerified')->name('total.sms.verified');
    Route::get('/all/users', 'AdminController@allUsers')->name('all.user');
    Route::get('/deactive/users', 'AdminController@deactiveUserIndex')->name('deactive.user');
    Route::get('/user/{id}', 'AdminController@singleUser')->name('user.view');
    Route::put('/user/update/{id}', 'AdminController@updateUser')->name('user.detail.update');
    Route::post('/add/sub/{id}', 'AdminController@addSubUser')->name('add.sub.user');
    Route::post('/mail/send/{id}', 'AdminController@sendMailUser')->name('send.mail.user');


    Route::get('/pending/deposit', 'AdminController@depositPennding')->name('pending.request.deposit');
    Route::get('/all/deposit/history', 'AdminController@depositHistory')->name('all.deposit.history');
    Route::get('/approve/deposit', 'AdminController@approvePennding')->name('approve.request.deposit');
    Route::get('/rejected/deposit', 'AdminController@RejectPennding')->name('reject.request.deposit');
    Route::post('/pending/deposit/{id}', 'AdminController@depositPenndingAction')->name('action.pending.request');

    Route::get('user/withdraw/{id}', 'AdminController@withdrawUser')->name('user.single.withdraw');
    Route::get('user/transaction/{id}', 'AdminController@withdrawTrans')->name('user.single.transaction');
    Route::get('user/log/{id}', 'AdminController@userLogs')->name('user.single.log');

    Route::get('user/search/email', 'AdminController@userSearchEmail')->name('user.search.email');
    Route::get('user/search/username', 'AdminController@userSearchUsername')->name('user.search.username');

    //Manage Admins

    Route::get('/addnewadmin', 'AdminController@addnewadminview')->name('addnewadmin');
     Route::post('/addadmin', 'AdminController@addnewadminAction')->name('addnewadminaction');
    Route::get('/alladmins', 'AdminController@displayAllAdmins')->name('alladmins');

    Route::get('/assignrole/{id}', 'AdminController@assignRole')->name('assignrole');
    Route::post('/assignrolesaction', 'AdminController@assignRolesAction')->name('assignrolesaction');

    //Manage Home Comments
    Route::get('/homecomments', 'AdminController@displayhomecomments')->name('homecomments');

    Route::get('varifycomment/{id}', 'AdminController@varifycomment')->name('varifycomment');

    Route::get('deletecomment/{id}', 'AdminController@deletecomment')->name('deletecomment');



    /*Manage Faq*/
    Route::get('faqs-create', 'FaqController@createFaqs')->name('faqs-create');
    Route::post('faqs-create', 'FaqController@storeFaqs')->name('faqs-create');
    Route::get('faqs', 'FaqController@allFaqs')->name('faqs-all');
    Route::get('faqs-edit/{id}', 'FaqController@editFaqs')->name('faqs-edit');
    Route::put('faqs-edit/{id}', 'FaqController@updateFaqs')->name('faqs-update');
    Route::delete('faqs-delete', 'FaqController@deleteFaqs')->name('faqs-delete');

    //Payment Gateway
    Route::get('/bank/gateway', 'AdminController@gatewayBankIndex')->name('bank.gateway.index');
    Route::post('/bank/gateway', 'AdminController@gatewayBankStore')->name('bank.gateway.store');

    Route::get('/gateway', 'AdminController@gateway')->name('admin.gateway');
    Route::put('/gateway-update/{gateway}', 'AdminController@gatewayUpdate')->name('admin.gateup');

	//e-pin
    Route::get('/manage-pin', 'AdminController@managePin')->name('manage-pin');
    Route::get('/used-pin', 'AdminController@UsedPin')->name('used-pin');
    Route::post('/manage-pin', 'AdminController@storePin')->name('storePin');

	//refer
    Route::get('/referral', 'AdminController@refIndex')->name('referral.index');
    Route::post('/referral', 'AdminController@refStore')->name('store.refer');
    Route::get('/referral/log', 'AdminController@refLog')->name('referral.log');
    Route::get('/referral/log/search', 'AdminController@refLogSearch')->name('referral.log.search');

    //CPS
    Route::resource('slotpackages','SlotPackagesController');


    Route::get('/slot/trader/dashboard', 'AdminController@slotTraderDashboard')->name('slots.dashboard');
//    Route::post('/referral', 'AdminController@refStore')->name('store.refer');
//    Route::get('/referral/log', 'AdminController@refLog')->name('referral.log');
//    Route::get('/referral/log/search', 'AdminController@refLogSearch')->name('referral.log.search');



    // schedule
    Route::get('/schedule', 'AdminController@schedule')->name('schedule.index');
    Route::post('/schedule', 'AdminController@scheduleStore')->name('schedule.save');
    Route::post('/schedule/cancel', 'AdminController@scheduleCancel')->name('schedule.cancel');
    Route::post('/schedule/update', 'AdminController@scheduleUpdate')->name('schedule.update');
    Route::post('/schedule/remind', 'AdminController@scheduleRemind')->name('schedule.remind');
    Route::post('/schedule/confirm', 'AdminController@scheduleConfirm')->name('schedule.confirm');
    Route::get('/schedule/search', 'AdminController@scheduleSearch')->name('schedule.search');

    //subscriber
    Route::get('/subscriber/list', 'AdminController@subsIndex')->name('subs.list');
    Route::delete('/subscriber/{id}', 'AdminController@subsDelete')->name('subs.delete');
    Route::get('/subscriber/send/mail', 'AdminController@subsMail')->name('subs.mail');
    Route::post('/subscriber/send/mail', 'AdminController@sendMail')->name('send.mail.subs');

    //language
    Route::get('/language/manager', 'LanguageController@langManage')->name('language-manage');
    Route::post('/language/manager', 'LanguageController@langStore')->name('language-manage-store');
    Route::delete('language-manage/{id}', 'LanguageController@langDel')->name('language-manage-del');
    Route::get('language-key/{id}', 'LanguageController@langEdit')->name('language-key');
    Route::put('key-update/{id}', 'LanguageController@langUpdate')->name('key-update');
    Route::post('language-manage-update/{id}', 'LanguageController@langUpdatepp')->name('language-manage-update');
    Route::post('language-import', 'LanguageController@langImport')->name('import_lang');

    //language new
    Route::get('module/language-key/{id}/{module}/{title}/{route_name}', 'ModuleLanguageController@langEdit')->name('module.language-key');

    Route::get('module/language/manager/{module}/{title}/{route_name}', 'ModuleLanguageController@langManage')->name('module.language-manage');
//    Route::post('/language/manager', 'LanguageController@langStore')->name('language-manage-store');
//    Route::delete('language-manage/{id}', 'LanguageController@langDel')->name('language-manage-del');
    Route::put('module/key-update/{id}/{title}/', 'ModuleLanguageController@langUpdate')->name('module.key-update');
//    Route::post('language-manage-update/{id}', 'LanguageController@langUpdatepp')->name('language-manage-update');
//    Route::post('language-import', 'LanguageController@langImport')->name('import_lang');

    //webTemplate
    Route::get('web/template', 'AdminController@webTemplateIndex')->name('template.index');
    Route::post('web/template', 'AdminController@webTemplateActive')->name('template.active');

    Route::get('title/subtitle', 'AdminController@titleSubtitle')->name('extra.title.subtitle');

    // Email Template
    Route::get('email/template', 'EmailLanguageController@index')->name('email.language.index');
    Route::get('email/template/edit/{id}', 'EmailLanguageController@edit')->name('email.language.edit');
    Route::post('email/template/update/{id}', 'EmailLanguageController@update')->name('email.language.update');

    // Social Media Marketing
    Route::get('social-media-marketing', 'SocialMarketingServiceController@index')->name('smm');
    Route::post('social-media-marketing', 'SocialMarketingServiceController@store')->name('smm.store');
    Route::post('social-media-marketing/{id}/update', 'SocialMarketingServiceController@update')->name('smm.update');
    Route::post('social-media-marketing/disable', 'SocialMarketingServiceController@disable')->name('smm.disable');
    Route::post('social-media-marketing/enable', 'SocialMarketingServiceController@enable')->name('smm.enable');
    Route::get('social-media-marketing/service', 'SocialMarketingServiceController@serviceIndex')->name('smm.service');
    Route::get('social-media-marketing/service/new', 'SocialMarketingServiceController@serviceCreate')->name('smm.service.create');
    Route::post('social-media-marketing/service/new', 'SocialMarketingServiceController@serviceStore')->name('smm.service.store');
    Route::get('social-media-marketing/service/{id}/edit', 'SocialMarketingServiceController@serviceEdit')->name('smm.service.edit');
    Route::post('social-media-marketing/service/{id}/edit', 'SocialMarketingServiceController@serviceUpdate')->name('smm.service.update');
    Route::post('social-media-marketing/service/{id}/update', 'SocialMarketingServiceController@serviceUpdate')->name('smm.service.update');
    Route::post('social-media-marketing/service/disable', 'SocialMarketingServiceController@serviceDisable')->name('smm.service.disable');
    Route::post('social-media-marketing/service/enable', 'SocialMarketingServiceController@serviceEnable')->name('smm.service.enable');
    Route::get('social-media-marketing/service/all', 'SocialMarketingServiceController@userServiceAll')->name('smm.service.all');
    Route::get('social-media-marketing/service/pending', 'SocialMarketingServiceController@userServicePending')->name('smm.service.pending');
    Route::get('social-media-marketing/service/running', 'SocialMarketingServiceController@userServiceRunning')->name('smm.service.running');
    Route::get('social-media-marketing/service/completed', 'SocialMarketingServiceController@userServiceComplete')->name('smm.service.complete');
    Route::get('social-media-marketing/service/rejected', 'SocialMarketingServiceController@userServiceReject')->name('smm.service.reject');
    Route::post('social-media-marketing/service/running', 'SocialMarketingServiceController@confirmRunning')->name('smm.service.running');
    Route::post('social-media-marketing/service/completed', 'SocialMarketingServiceController@confirmComplete')->name('smm.service.complete');
    Route::post('social-media-marketing/service/rejected', 'SocialMarketingServiceController@confirmReject')->name('smm.service.reject');


    //-----Gift---------
    Route::get('gift/list', 'GiftCodeController@giftList')->name('admin.gift.list');
    Route::get('gift/getgiftcode', 'GiftCodeController@getGiftCode')->name('admin.get.gift.code');
    Route::post('gift/store', 'GiftCodeController@giftStore')->name('admin.gift.store');

    //admin CPS
    Route::get('/cps/index', 'AdminController@index')->name('admin.cps.dashboard');

        Route::post('/admin/withdraw', 'AdminController@cpsWithdrawAjax')->name('admin.withdraw.ajax');

    Route::get('/subscribed/packages','AdminController@subscribed_Package_Admin')->name('admin.user.subscribed');


});

//admin password reset
Route::get('admin-password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm')->name('user.password.reset');
Route::post('/reset', 'AdminAuth\ResetPasswordController@reset')->name('reset.passw');
//middleware set password routes for user who login with facebook and google
Route::get('reset/auth/set/password/{email}', 'IsPasswordSetContoller@showResetFormMid')->name('user.password.reset.auth');
Route::post('/reset/password/auth', 'IsPasswordSetContoller@passwordSet')->name('reset.passw.auth');

//user panel
Auth::routes();

Route::post('ajax/login','Auth\LoginController@loginAjax')->name('user.ajax.login');
Route::get('register/{username}', 'Auth\RegisterController@showRegistrationFormRef');
Route::get('register/{username}/{isrefer}', 'Auth\RegisterController@showRegistrationFormWithoutRef');
//Authorization


Route::group(['prefix' => '/', 'middleware' => 'auth:web'], function () {
    //user questionnaire
    Route::get('/user-questionnaire','UserQuestionnaireController@getForm')->name('user-questionnaire');
    Route::post('/user-questionnaire/save-data','UserQuestionnaireController@addNewUserQuestionnarire')->name('add-new-user-questionnaire');


    Route::post('/sendemailver', 'FrontendController@sendemailver')->name('sendemailver');
    Route::post('/emailverify', 'FrontendController@emailverify')->name('emailverify');
    Route::post('/sendsmsver', 'FrontendController@sendsmsver')->name('sendsmsver');
    Route::post('/smsverify', 'FrontendController@smsverify')->name('smsverify');
    Route::get('/authorization', 'FrontendController@authorization')->name('authorization');
//check docs
    Route::get('/withdraw/auth/settings', 'FrontendController@regWithdrawIndexSettings')->name('user.withdraw.auth.settings');
    Route::get('/doc/auth/settings', 'FrontendController@regDocindex')->name('user.doc.auth.index');
    Route::post('/withdraw/auth/Update', 'FrontendController@withdrawSettingsUpdate')->name('user.withdraw.auth.update');
    Route::post('/doc/auth/Update', 'FrontendController@docSettingsUpdate')->name('user.doc.auth.update');

    Route::post('/g2fa-verify', 'FrontendController@verify2fa')->name('go2fa.verify');

    Route::get('/miniblogdetail/{id}', 'FrontendController@MiniBlogdetail')->name('miniblogdetail.front');

    //Display All Comments
    Route::post('save/min/blog/comment', 'FrontendController@saveBlogComment')->name('save.min.comment');

    Route::get('/allcomments', 'FrontendController@allcomments')->name('allcomments.front');

    //2fa
    Route::get('/security/two/step', 'HomeController@twoFactorIndex')->name('two.factor.index');
    Route::post('/g2fa-create', 'HomeController@create2fa')->name('go2fa.create');
    Route::post('/g2fa-disable', 'HomeController@disable2fa')->name('disable.2fa');

    Route::post('/g2fa-check', 'HomeController@checkTwoFactor')->name('check_two_facetor');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/transaction', 'HomeController@indexTrans')->name('user.transaction');
    //invest
    Route::get('/plans', 'HomeController@indexPlan')->name('user.plan.index');
    Route::post('/plans', 'HomeController@buyPlan')->name('user.buy.plan');
    Route::get('/interest/log', 'HomeController@interestLog')->name('user.interest.log');

    //schedule
    Route::get('/schedule', 'FrontendController@schedule')->name('front.schedule');
    Route::get('/schedule/list', 'FrontendController@scheduleList')->name('front.schedule.list')->middleware('IsPasswordSet','checkWithdraw');

    //balance transfer
    Route::get('/transfer', 'HomeController@indexTransfer')->name('user.balance.transfer');
    Route::post('/transfer', 'HomeController@balTransfer')->name('user.balance.transfer.post');
    Route::post('/search-user', 'HomeController@searchUser')->name('search.user');

    //withdraw
    Route::get('/withdraw', 'HomeController@indexWithdraw')->name('user.withdraw');
    Route::get('/withdraw/history', 'HomeController@historyWithdraw')->name('withdraw.history');

    Route::post('/withdraw', 'HomeController@previewWithdraw')->name('withdraw.preview.user');
    Route::post('/withdraw/confirmed/{id}', 'HomeController@storeWithdraw')->name('confirm.withdraw.store');

    //photos
    // Route::get('/photos', 'HomeController@photosIndex')->name('user.photos');
    Route::get('/album', 'AlbumController@index')->name('user.album')->middleware('IsPasswordSet','checkWithdraw');
    // Route::post('/album', 'AlbumController@store')->name('user.album.store');
    // Route::get('/album/{id}/public', 'AlbumController@public')->name('user.album.public');
    // Route::get('/album/{id}/private', 'AlbumController@private')->name('user.album.private');
    // Route::post('/album/update', 'AlbumController@update')->name('user.album.update');
    // Route::post('/album/remove', 'AlbumController@remove')->name('user.album.remove');
    // Route::post('/album/item/remove', 'AlbumController@itemRemove')->name('user.album.item.remove');
    // Route::post('/album/item/store', 'AlbumController@itemStore')->name('user.album.item.store');
    // Route::post('/album/item/update', 'AlbumController@itemUpdate')->name('user.album.item.update');
    // Route::post('/album/item/delete', 'AlbumController@itemDelete')->name('user.album.item.delete');
    // Route::post('/album/item/rating', 'AlbumController@itemRating')->name('user.album.item.rating');
    // Route::get('/album/item/{id}/profile', 'AlbumController@itemProfile')->name('user.album.item.profile');

    //profile
    Route::get('/account', 'HomeController@accountIndex')->name('user.profile');
    Route::post('/account', 'HomeController@accountUpdate')->name('user.profile.update');
    Route::post('/update/password', 'HomeController@passwordChange')->name('change.password.user');
    Route::get('/withdraw/index/settings', 'HomeController@withdrawIndexSettings')->name('user.withdraw.index.settings');
    Route::post('/withdraw/Settings/Update', 'HomeController@withdrawSettingsUpdate')->name('user.withdraw.settings.update');


    //support
    Route::get('/support', 'SupportTicketController@ticketIndex')->name('support.index.customer')->middleware('IsPasswordSet','checkWithdraw');
    Route::get('/support/new', 'SupportTicketController@ticketCreate')->name('add.new.ticket')->middleware('IsPasswordSet','checkWithdraw');;
    Route::post('/store/ticket', 'SupportTicketController@ticketStore')->name('ticket.store')->middleware('IsPasswordSet','checkWithdraw');;
    Route::get('/ticket/close/{ticket}', 'SupportTicketController@ticketClose')->name('ticket.close')->middleware('IsPasswordSet','checkWithdraw');;
    Route::get('/support/reply/{ticket}', 'SupportTicketController@ticketReply')->name('ticket.customer.reply')->middleware('IsPasswordSet','checkWithdraw');;
    Route::post('/support/store/{ticket}', 'SupportTicketController@ticketReplyStore')->name('store.customer.reply')->middleware('IsPasswordSet','checkWithdraw');;

    //deposit
    Route::post('/deposit-pay', 'HomeController@deposit')->name('user.balance');
    Route::get('/deposit', 'HomeController@deposit')->name('user.deposit');
    Route::post('/deposit-data-insert', 'HomeController@depositDataInsert')->name('deposit.data-insert');
    Route::get('/deposit-preview', 'HomeController@depositPreview')->name('deposit.preview');
    Route::post('/deposit-confirm', 'PaymentController@depositConfirm')->name('deposit.confirm');
    Route::get('/vogue/{trx}/{type}', 'PaymentController@purchaseVogue')->name('vogue');
    Route::get('/deposit-history', 'HomeController@depositHistory')->name('user.deposit.history');
    Route::post('/deposit-pay', 'HomeController@deposit')->name('user.deposit-post');

    //bank-deposit
    Route::get('/deposit-bank', 'HomeController@depositBankPranto')->name('submit.bank.deposit.pranto');
    Route::post('/deposit-bank', 'HomeController@depositBankSubmit')->name('submit.bank.deposit');

    //pin-recharge
    Route::get('/pin-recharge', 'HomeController@pinRecharge')->name('pin.recharge');
    Route::post('/pin-recharge', 'HomeController@pinRechargePost')->name('pin.recharge.post');

    //referral commission
    Route::get('/referral/commission', 'HomeController@refComIndex')->name('user.referral.com');
    Route::get('/referral/user', 'HomeController@refMy')->name('my.referral.com');
    Route::post('/referral/commission/adjust', 'HomeController@refComAdjust')->name('user.referral.com.adjust');

    // Social Media Marketing
    Route::get('/social-media-marketing', 'HomeController@smmServices')->name('user.smm.services');
    Route::post('/social-media-marketing/subscribe', 'HomeController@smmSubscribe')->name('user.smm.subscribe');
    Route::get('/social-media-marketing/subscriptions', 'HomeController@smmSubscriptions')->name('user.smm.subscriptions');
    //Faqs
    Route::get('/index/faqs', 'FrontendController@faq_index')->name('user.faq.index');

    //CPS
    Route::get('/cps/index', 'CPSController@dashboard')->name('user.cps.index');
    Route::get('/cps/dashboard', 'CPSController@dashboard')->name('user.cps.dashboard');

    Route::post('/buy/cps/ajax', 'CPSController@cpsAjax')->name('user.cps.ajax');

    Route::get("/my_packages" , 'CPSController@myPackages')->name('user.my_packages');

    Route::get('/packages_list', 'CPSController@packages_List')->name('user.packages_list');

    Route::post('/subscribe_package', 'CPSController@Subscribe_Package')->name('user.subscribe_package');


    //gift
    Route::get('user/gift/get/Gift/status', 'GiftCodeController@getGiftCodeStatus')->name('user.get.gift.status');
    Route::get('user/gift/getgiftcode', 'GiftCodeController@getGiftCode')->name('user.get.gift.code');
    Route::post('/users/slot/gift/store', 'GiftCodeController@slotBalanceGift')->name('slot.balance.gift.store');

    Route::post('/user/withdrawBalanceAjax', 'CPSController@withdrawBalanceAjax')->name('withdrawBalanceAjax');

    Route::get('/users/gift/list', 'CPSController@giftList')->name('users.gift.list');
    Route::get('/users/gift/add', 'CPSController@giftform')->name('users.gift.form');

    Route::post('/users/gift/store', 'CPSController@giftStore')->name('user.gift.store');

    //withdraw
    Route::post('/user/withdrawAjax', 'CPSController@withDrawAjax')->name('user.withdraw.request');

    Route::get('/users/withdraw/list', 'CPSController@withdrawList')->name('users.withdraw.list');
//    Route::get('/delete/all', 'CPSController@delete_All')->name('users.delete.all');








});

//social login
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->name('social.login');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
//user forgot password
Route::post('/forgot/password', 'FrontendController@forgotPass')->name('forget.password.user');
Route::get('/reset/{token}', 'FrontendController@resetLink')->name('reset.passlink');
Route::post('/reset/password', 'FrontendController@passwordReset')->name('reset.passw');

//comments routes
Route::get('comments/{pageId}', 'CommentController@index');
Route::post('save-comments', 'CommentController@saveComments');
// Route::post('comments/{commentId}/{type}', 'CommentController@update');
Route::get('/cache_clear',function(){
    \Artisan::call('cache:clear');
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');

});




Route::get('/run_migrations', function () {
    return Artisan::call('migrate', ["--force" => true]);
});


//Clear route cache:
Route::get('/route-cache', function () {
    $exitCode = Artisan::call('route:cache');
    return 'Routes cache cleared';
});

//Clear config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
});

// Clear application cache:
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});
// Clear application view cache:
Route::get('/view-clear', function () {
    $exitCode = Artisan::call('view:clear');
    return 'Application cache cleared';
});
Route::get('/down', function () {
    $exitCode = Artisan::call('down');
    return 'Application cache cleared';
});
Route::get('/up', function () {
    $exitCode = Artisan::call('up');
    return 'Application cache cleared';
});

