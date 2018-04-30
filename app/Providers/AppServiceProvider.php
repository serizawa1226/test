<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//add start 
use Illuminate\Support\Facades\Schema;
//add end

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //add start
		Schema::defaultStringLength(191);
		//add end
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
