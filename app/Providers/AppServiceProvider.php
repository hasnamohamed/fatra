<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema as FacadesSchema;
use Illuminate\Support\ServiceProvider;

use Schema;

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
        FacadesSchema::defaultStringLength(191);
    }
}