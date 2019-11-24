<?php

namespace Iag\Agws;

use Illuminate\Support\ServiceProvider;

class AgwsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     * 
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes();
        $this->registerResources();
    }

    /**
     * Register package routes
     * 
     * @return void
     */
    protected function registerRoutes()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    /**
     * Register the package resources
     * 
     * @return void
     */
    protected function registerResources()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'agws');
    }
}
