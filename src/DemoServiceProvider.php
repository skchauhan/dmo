<?php

namespace Websanova\Demo1;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('websanova-demo', function() {
            return new Demo;
        });

        $this->mergeConfigFrom(
            __DIR__ . '/config/main.php', 'websanova-demo-main'
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/websanova-demo')
        ], 'views');

        $this->publishes([
            __DIR__ . '/config' => config_path('websanova-demo')
        ], 'config');
        
        require __DIR__ . '/Http/routes.php';

	    $this->loadViewsFrom(__DIR__ . '/views', 'websanova-demo');
    }
}
