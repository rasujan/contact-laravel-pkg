<?php

namespace Rasujan\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(
            __DIR__ . '/views',
            'contact'
        );
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        //this is for setting up the config file
        $this->mergeConfigFrom(
            __DIR__ . '/config/contact.php',
            'contact'
        );
        /**
         * This is for publishing he packages]
         * We publish it by using php artisan vendor:publish
         */
        $this->publishes([
            __DIR__ . '/config/contact.php' => config_path('contact.php'),
        ]);
    }

    public function register()
    {
    }
}
