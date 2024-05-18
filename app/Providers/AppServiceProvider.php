<?php

namespace App\Providers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\Facades\Blade;
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
        Vite::macro('imageBack', fn ($asset) => Vite::asset("resources/assets/backend/images/{$asset}"));
        Vite::macro('imageWeb', fn ($asset) => Vite::asset("resources/assets/web/images/{$asset}"));
        Vite::macro('imageRoot', fn ($asset) => Vite::asset("resources/images/{$asset}"));
        Vite::macro('showUploadedImg', function ($fileName, $module) {
            return '<img src="' . asset("storage/uploads/{$module}/{$fileName}") . '" alt="' . $module . '_' . $fileName . '" class="showUploadedImg"';
        });
        Vite::macro('getUploadedImgPath', function ($fileName, $module) {
            return asset("storage/uploads/{$module}/{$fileName}");
        });
    }
}
