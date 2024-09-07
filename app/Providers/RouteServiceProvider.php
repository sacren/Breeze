<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Define a custom constraint to check for Vue page existence
        Route::pattern('page', '.*');

        // Custom route model binding to check if Vue page exists
        Route::bind('page', function ($value) {
            $page = ucfirst($value);
            $componentPath = resource_path("js/Pages/{$page}.vue");

            if (!file_exists($componentPath)) {
                abort(404);
            }

            return $page; // Return the validated page name
        });
    }
}
