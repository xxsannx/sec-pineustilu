<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Http\Request;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Prevent lazy loading in non-production environments
        // This helps catch N+1 query problems during development
        Model::preventLazyLoading(!App::isProduction());

        // Prevent silently discarding attributes that are not in $fillable
        Model::preventSilentlyDiscardingAttributes(!App::isProduction());

        // Force HTTPS in production
        if (App::isProduction()) {
            URL::forceScheme('https');
        }

        RateLimiter::for('otp', function (Request $request) {
            return Limit::perMinutes(15, 5)->by($request->phone ?: $request->ip());
        });
    }
}
