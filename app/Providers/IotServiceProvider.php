<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Service;

class IotServiceProvider extends ServiceProvider
{
    // public $menuItems;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     // $this->menuItems = ["Home", "About Us", "Contact"];
    //     $carrier = Carrier::all();

    //     view()->composer('client.layouts.header', function($view) {
    //         $view->with(['contents' => "hello"]);
    //     });
    // }
    public function boot()
    {
        view()->composer(
            'client.layouts.footer', 
            function ($view) {
                $view->with('iot_services', Service::take(5)->get());
            }
        );
    }

}
