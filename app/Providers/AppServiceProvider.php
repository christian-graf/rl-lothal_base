<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // register local development providers
        if ($this->app->environment() == 'local') {

            // recommended to support your IDE (e.g. PHPStorm) with documentation while developing
            // use artisan to build the ide helper files:
            // shell# php artisan ide-helper:generate
            // shell# php artisan ide-helper:meta
            $this->app->register('Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider');

            // recommended dev-tool
            $this->app->register('Barryvdh\\Debugbar\\ServiceProvider');
        }
    }
}
