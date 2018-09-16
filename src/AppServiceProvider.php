<?php

namespace LaravelEnso\Examples;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishesAll();
    }

    public function publishesAll()
    {
        $this->publishes([
            __DIR__.'/resources/js' => resource_path('js'),
        ], 'examples-assets');

        $this->publishes([
            __DIR__.'/resources/js' => resource_path('js'),
        ], 'enso-assets');

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'laravel-enso/examples');

        $this->publishes([
            __DIR__.'/database/factories' => database_path('factories'),
        ], 'examples-factory');

        $this->publishes([
            __DIR__.'/database/factories' => database_path('factories'),
        ], 'enso-factories');

    }

    public function register()
    {
        //
    }
}
