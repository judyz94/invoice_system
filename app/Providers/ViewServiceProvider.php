<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
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
    public function boot()
    {
        View::composer(
            ['customers.__form', 'sellers.__form'], 'App\Http\View\Composers\CityComposer'
        );

        View::composers([
            'App\Http\View\Composers\SellerComposer' => ['invoices.__form'],
            'App\Http\View\Composers\CustomerComposer' => ['invoices.__form'],
            'App\Http\View\Composers\ProductComposer' => ['invoices.show'],
        ]);
    }
}

