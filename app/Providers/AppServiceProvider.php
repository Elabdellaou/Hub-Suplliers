<?php

namespace App\Providers;

use App\Http\ViewComposers\ProductsComposer;
use App\Http\ViewComposers\ProductsHomeComposer;
use Illuminate\Support\ServiceProvider;

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
        view()->composer(["pages.home","pages.product_detail","pages.my_orders"],ProductsHomeComposer::class);
    }
}
