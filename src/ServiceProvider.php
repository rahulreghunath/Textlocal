<?php
/**
 * Created by PhpStorm.
 * User: Teen Techies
 * Date: 10-11-2017
 * Time: 07:16 PM
 */

namespace rahulreghunath\textlocal;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/textlocal.php' => config_path('textlocal.php'),
        ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}