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
     * generateUniqueKey method returns a table base custom unique key
     *
     * @return string
     */
    public function generateUniqueKey(string $tableName = '', int $keyLength = 8): string
    {
        $tmpKey = str_repeat("0", ($keyLength - 1)) . '1';
        if (empty($tableName)) {
            return $tmpKey;
        }

        $last_model = DB::table($tableName)->orderBy('id', 'desc')->first();

        if ($last_model) {
            $next_model_id = $last_model->id + 1;

            for ($i = 1; $i < $keyLength; $i++) {
                if (strlen($next_model_id) == $i) {
                    $remaining_length = $keyLength - $i;
                    $tmpKey = str_repeat("0", $remaining_length) . $next_model_id;
                    break;
                }
            }
            return $tmpKey;
        }
        return $tmpKey;
    }

    /**
     * Get all records ID only of a given model.
     *
     * @param string $modelName
     * @return \Illuminate\Support\Collection
     * @throws \Exception
     */
    public function getModelIds($modelName): Collection
    {
        ## Make sure the model exists and can be resolved
        if (!class_exists($modelName)) {
            throw new Exception("Model not found: " . $modelName);
        }

        $model = new $modelName;

        ## Ensure that the passed model name is an instance of Eloquent Model
        if (!$model instanceof Model) {
            throw new Exception("Invalid model: " . $modelName);
        }

        return $model::get()->pluck('id') ?? [];
    }

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
