<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class AdminLocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentLocal =  session()->get('locale') ?? env('APP_LOCALE');

        if (!empty($currentLocal)) {
            App::setLocale($currentLocal);
        } else {
            App::setLocale('en');
        }

        return $next($request);
    }
}
