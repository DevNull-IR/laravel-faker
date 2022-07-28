<?php

namespace DevNullIr\LaravelFaker\core\Provider;

use DevNullIr\LaravelFaker\LaravelFaker;
use Illuminate\Support\ServiceProvider;

class LaravelFakerAppProvider extends ServiceProvider
{
    protected $appConfig = __DIR__ . "/../config/laravel-faker.php";

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom($this->appConfig, "laravel-faker");
        $this->app->bind(config("laravel-faker.app"),function (){
            return new LaravelFaker();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->published_Config();
    }

    /**
     * Bootstrap any application publish config.
     *
     * @return void
     */
    public function published_Config(): void
    {
        $this->publishes([
            $this->appConfig => config_path("laravel-faker.php")
        ], "laravel-faker-config");
    }
}
