<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('page/header',function ($view ){
            $loai_sp = ProductType::all();//lay dữ liệu 
            $view->with('loai_sp',$loai_sp); //truyên 
        });
    }
}
