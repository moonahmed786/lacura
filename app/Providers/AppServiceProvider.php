<?php

namespace App\Providers;
use App\GeneralSettings;
use App\Language;
use App\Menu;
use App\Social;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//ddresource_path('lang/').'ja'.'.json');

//        $this->loadTranslationsFrom(__DIR__.'/resources/lang/ja.json', 'acme');
        app()->setLocale(session('lang', 'en'));
        if (!session()->has('lang')) {
            session()->put('lang', 'ja');
        }
        Schema::defaultStringLength(191);
        $data['general'] = GeneralSettings::first();
        $data['social'] = Social::get();
        $data['menu'] = Menu::get();
        $data['lang'] = Language::all();
        $data['ins_slider'] = Language::all();
        View::share($data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
