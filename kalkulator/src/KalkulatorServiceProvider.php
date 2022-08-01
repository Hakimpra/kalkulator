<?php

namespace Hakimpra\Kalkulator;

use Illuminate\Support\ServiceProvider;

class KalkulatorServiceProvider extends ServiceProvider
{
    /**
     * Register services..
     *
     * @return void
     */
    public function register()
    {
       // register our controller
       $this->app->make('Hakimpra\Kalkulator\KalController');
       $this->loadViewsFrom(__DIR__.'/views', 'kalkulator');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__ . '/routes.php';
    }
}
