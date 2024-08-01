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
    public function getStaticModels(int $paginate = 5)
    {
        return [
            [
                'title' => 'product one',
                'slug' => 'product-one',
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                'img_featured' => Vite::imageWeb('project-img1.jpg')
            ],
            [
                'title' => 'product two',
                'slug' => 'product-two',
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                'img_featured' => Vite::imageWeb('project-img2.jpg')
            ],
            [
                'title' => 'product three',
                'slug' => 'product-three',
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                'img_featured' => Vite::imageWeb('project-img3.jpg')
            ],
            [
                'title' => 'product four',
                'slug' => 'product-four',
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                'img_featured' => Vite::imageWeb('project-img4.jpg')
            ],
            [
                'title' => 'product five',
                'slug' => 'product-five',
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                'img_featured' => Vite::imageWeb('project-img5.jpg')
            ],
            [
                'title' => 'product six',
                'slug' => 'product-six',
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                'img_featured' => Vite::imageWeb('project-img6.jpg')
            ],
        ];
    }
}
