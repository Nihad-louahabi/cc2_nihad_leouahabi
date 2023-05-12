<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('App\MyClass', function ($app) {
            return new MyClass;
        });
        







    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
