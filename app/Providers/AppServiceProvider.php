<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        // View::share('product','Computer');
        View::composer('*', function ($view) {
            $products=['Computer','Laptop','MACbook'];
            $view->with('products', $products);
        });
    }
}
