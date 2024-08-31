<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Vite;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class ProductService
{

    private string $modelClass = Product::class;

    /**
     * Collections of model with search and filter
     * @param array $filterOptions
     * @return mixed
     */
    public function getFilteredModels(array $filterOptions = []): mixed
    {
        @['perPage' => $perPage, 'select' => $select, 'orderBy' => $orderBy, 'orderDirection' => $orderDirection, 'searchText' => $searchText] = $filterOptions;

        return $this->modelClass::when(isset($searchText), function ($query) use ($searchText) {
            $searchText = "%$searchText%";
            return $query->where('slider_title', 'like', $searchText)
                ->orWhere('slider_body', 'like', $searchText)
                ->orWhere('slider_link', 'like', $searchText)
                ->orWhere('slider_link_text', 'like', $searchText);
        })
            ->when(isset($select), function ($query) use ($select) {
                return $query->select($select);
            })
            ->when(isset($orderBy) && isset($orderDirection), function ($query) use ($orderBy, $orderDirection) {
                return $query->orderBy($orderBy, $orderDirection);
            }, function ($query) {
                return $query->orderBy('id', 'asc');
            })
            ->when(isset($perPage), function ($query) use ($perPage) {
                return  $query->paginate($perPage);
            }, function ($query) {
                return $query->paginate(10);
            });
    }


    /**
     * Get static models
     * @return \array
     */
    public function getStaticModels(string $slug = '', int $limit = 5)
    {
        $dataList = [
            [
                'title' => 'CRM',
                'slug' => route('web.products.details', ['slug' => 'product-one']),
                'body' => "Discover the Power of CRM Platform",
                'img_featured' => Vite::imageWeb('project-details-img1.jpg'),
                'img_thumb' => Vite::imageWeb('project-img6.jpg'),
            ],
            [
                'title' => 'Complain Management System',
                'slug' => route('web.products.details', ['slug' => 'product-two']),
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                'img_featured' => Vite::imageWeb('project-details-img1.jpg'),
                'img_thumb' => Vite::imageWeb('project-img5.jpg')
            ],
            [
                'title' => 'Task Management',
                'slug' => route('web.products.details', ['slug' => 'product-three']),
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                'img_featured' => Vite::imageWeb('project-details-img1.jpg'),
                'img_thumb' => Vite::imageWeb('project-img4.jpg')
            ],
            [
                'title' => 'Omni-channel Contact Center',
                'slug' => route('web.products.details', ['slug' => 'product-three']),
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                'img_featured' => Vite::imageWeb('project-details-img1.jpg'),
                'img_thumb' => Vite::imageWeb('project-img4.jpg')
            ],
            [
                'title' => 'Account Management Solution',
                'slug' => route('web.products.details', ['slug' => 'product-three']),
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                'img_featured' => Vite::imageWeb('project-details-img1.jpg'),
                'img_thumb' => Vite::imageWeb('project-img5.jpg')
            ],

        ];

        if (!empty($slug)) {
            $filteredProducts = array_filter($dataList, function ($product) use ($slug) {
                return $product['slug'] == $slug;
            });
            $firstProduct = reset($filteredProducts);
            return $firstProduct !== false ? $firstProduct : [];
        }

        return collect($dataList)->take($limit)->toArray();
    }
}
