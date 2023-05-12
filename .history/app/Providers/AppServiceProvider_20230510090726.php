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
        Enregistrez le fichier et exécutez la commande "php artisan config:cache" pour recharger la configuration de l'application.
        Cela devrait permettre de résoudre l'erreur "BadMethodCallException" que vous avez rencontrée lors de l'exécution de la commande "php artisan vendor:publish".







    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
