<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
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
        Vite::macro('imageBack', fn ($asset) => Vite::asset("resources/backend/images/{$asset}"));
        Vite::macro('imageFront', fn ($asset) => Vite::asset("resources/frontend/images/{$asset}"));
        Vite::macro('imageRoot', fn ($asset) => Vite::asset("resources/images/{$asset}"));
    }
}
