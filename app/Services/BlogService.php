<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Vite;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class BlogService
{

    /**
     * Get static models
     * @return \array
     */
    public function getStaticModels(string $slug = '', int $limit = 5)
    {
        $dataList = [
            [
                'title' => "Getting Started with iHelpKL's Custom website",
                'slug' => "javascript:void(0)",                
                'img_featured' => Vite::imageWeb('pos.png'),
                'img_thumb' => Vite::imageWeb('pos.png'),
                'author' => 'Sakil Mahmud',
                'date' => Carbon::now()->format('d M Y'),
                'category' => 'software'


            ],
            [
                'title' => 'Understanding Web Development',
                'slug' => "javascript:void(0)",                
                'img_featured' => Vite::imageWeb('pos.png'),
                'img_thumb' => Vite::imageWeb('pos.png'),
                'author' => 'Khalid Hasan',
                'date' => Carbon::now()->subDays(2)->format('d M Y'),
                'category' => 'software'


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
