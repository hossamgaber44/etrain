<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        view()->composer('front.include.navbar',function($view){
            $view->with('category',Category::select('id','name')->get() );
            $view->with('setting',Setting::select('logo','favicon')->first() );
        });
        view()->composer('front.include.footer',function($view){
            $view->with('setting',Setting::first() );
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
