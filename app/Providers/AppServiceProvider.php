<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
public function register()
    {
    if(config('app.env') === 'production') {
            $this->app['request']->server->set('HTTPS', true); 
    }
}

    /**
     * Bootstrap any application services.
     */
public function boot()
{
    if(env('APP_ENV') !== 'local') {
        URL::forceScheme('https');
    }
}
}