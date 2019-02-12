<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Twitter;

class SocialMediaServiceProvider extends ServiceProvider
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
        $this->app->bind(Twitter::class, function() {
            // return new Twitter('Some API Key Here...');
            
            // Dynamically set the api key based on config file services.php
            return new Twitter(config('services.twitter.public_key'));
        });
    }
}
