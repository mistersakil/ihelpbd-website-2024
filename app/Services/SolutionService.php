<?php

namespace App\Services;

use Illuminate\Support\Facades\Vite;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SolutionService
{
    /**
     * Get static models
     * @return \array
     */
    public function getStaticModels(string $slug = '')
    {
        $products = [
            [
                'title' => 'solution one',
                'sub_title' => 'solution one sub title',
                'slug' => route('web.products.details', ['slug' => 'solution-one']),
                'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis necessitatibus quod, maiores sequi earum rem odit nostrum inventore accusantium dolor assumenda quisquam. Itaque ab a maiores veritatis repellendus reprehenderit blanditiis!",
                'img_featured' => Vite::imageWeb('services-large1.jpg'),
                'img_gallery' => Vite::imageWeb('project-img6.jpg'),
            ],
            [
                'title' => 'solution two',
                'sub_title' => 'solution two sub title',
                'slug' => route('web.products.details', ['slug' => 'solution-two']),
                'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis necessitatibus quod, maiores sequi earum rem odit nostrum inventore accusantium dolor assumenda quisquam. Itaque ab a maiores veritatis repellendus reprehenderit blanditiis!",
                'img_featured' => Vite::imageWeb('services-large2.jpg'),
                'img_gallery' => Vite::imageWeb('project-img6.jpg'),
            ],

        ];

        if (!empty($slug)) {
            $filteredProducts = array_filter($products, function ($product) use ($slug) {
                return $product['slug'] == $slug;
            });
            $firstProduct = reset($filteredProducts);
            return $firstProduct !== false ? $firstProduct : [];
        }

        return $products;
    }
}
