<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;


/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class AppService
{

    /**
     * Clear application cache
     *
     * @return mixed
     */
    public function clearCache(): mixed
    {
        ## Clear application cache
        Artisan::call('cache:clear');

        ## Clear route cache
        Artisan::call('route:clear');

        ## Clear config cache
        Artisan::call('config:clear');

        ## Clear compiled views cache
        Artisan::call('view:clear');

        ## Clear compiled views cache
        Artisan::call('optimize:clear');

        return true;
    }
}
