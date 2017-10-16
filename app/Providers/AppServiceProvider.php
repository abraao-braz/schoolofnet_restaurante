<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Restaurant;
use App\Observers\RestaurantObserverTrait;

class AppServiceProvider extends ServiceProvider
{


    public function boot()
    {
        Restaurant::observe(RestaurantObserverTrait::class);
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
