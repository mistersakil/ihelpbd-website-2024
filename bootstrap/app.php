<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
    })
    ->withExceptions(function (Exceptions $exceptions) {

        ## Custom NotFoundHttpException Reporting
        $exceptions->render(function (NotFoundHttpException $e, Request $request) {
            $requestFirstSegment = $request->segment(1);
            ## For website
            if ($requestFirstSegment != 'admin') {
                return redirect()->route('web.four.zero.four');
            }

            ## For admin - write your logics

        });
    })->create();
