<?php
namespace Hashbyte\BMI;

use Illuminate\Support\ServiceProvider;

class BMIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/Views', 'bmi');
    }

    public function register()
    {
        // $this->app['bmi'] = $this->app->share(function($app){
        //     return new BMI;
        // });
    }
}