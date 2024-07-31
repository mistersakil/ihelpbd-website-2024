<?php

namespace App\Services;

use App\Models\Product;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class ProductService
{

    private string $modelClass = Product::class;

    /**
     * Validation error messages for state properties of the component
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllModel(int $paginate = 5)
    {
        $data = $this->modelClass::orderBy('order', 'asc')->paginate($paginate);
        return $data;
    }

    /**
     * Get static models
     * @return \array
     */
    public function getStaticModels(int $paginate = 5)
    {
    }
}
