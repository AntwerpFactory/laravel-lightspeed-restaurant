<?php

namespace AntwerpFactory\LightspeedRestaurant;

use AntwerpFactory\LightspeedRestaurant\Api\ClientApi;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes(
            [
            __DIR__.'/../config/lightspeedrestaurant.php' => config_path('lightspeedrestaurant.php'),
            ]
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/lightspeedrestaurant.php', 'lightspeedrestaurant');
        
        $this->app->singleton(LightspeedRestaurant::class, function () {
            $client = new ClientApi($this->app['config']['lightspeedrestaurant']);
            return new LightspeedRestaurant($client);
        });

        $this->app->alias(LightspeedRestaurant::class, 'lightspeedresto');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['lightspeedresto', LightspeedRestaurant::class];
    }
}
