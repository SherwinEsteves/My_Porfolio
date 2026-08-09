<?php // <<<<< APP SERVICE PROVIDER >>>>> purpose: central place to register and bootstrap application services

namespace App\Providers; // <<<<< NAMESPACE >>>>> purpose: places the provider under App\Providers

use Illuminate\Support\ServiceProvider; // <<<<< IMPORT >>>>> purpose: base service provider class from Laravel

class AppServiceProvider extends ServiceProvider // <<<<< APP SERVICE PROVIDER >>>>> purpose: registers services for the whole app
{
    /**
     * Register any application services.
     */
    public function register(): void // <<<<< REGISTER >>>>> purpose: bind services into the container (before boot)
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void // <<<<< BOOT >>>>> purpose: run setup tasks once all services are registered
    {
        //
    }
}
