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
        $dataList = [
            [
                'title' => 'Content Writing',
                'sub_title' => 'solution one sub title',
                'slug' => route('web.solutions.details', ['slug' => 'solution-one']),
                'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis necessitatibus quod, maiores sequi earum rem odit nostrum inventore accusantium dolor assumenda quisquam. Itaque ab a maiores veritatis repellendus reprehenderit blanditiis!",
                'img_featured' => Vite::imageWeb('services-large1.jpg'),
                'img_gallery' => Vite::imageWeb('project-img6.jpg'),
            ],
            [
                'title' => 'Project Management',
                'sub_title' => 'solution two sub title',
                'slug' => route('web.solutions.details', ['slug' => 'solution-two']),
                'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis necessitatibus quod, maiores sequi earum rem odit nostrum inventore accusantium dolor assumenda quisquam. Itaque ab a maiores veritatis repellendus reprehenderit blanditiis!",
                'img_featured' => Vite::imageWeb('services-large2.jpg'),
                'img_gallery' => Vite::imageWeb('project-img6.jpg'),
            ],
            [
                'title' => 'Contact Center Solution',
                'sub_title' => 'solution three sub title',
                'slug' => route('web.solutions.details', ['slug' => 'solution-three']),
                'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis necessitatibus quod, maiores sequi earum rem odit nostrum inventore accusantium dolor assumenda quisquam. Itaque ab a maiores veritatis repellendus reprehenderit blanditiis!",
                'img_featured' => Vite::imageWeb('services-large3.jpg'),
                'img_gallery' => Vite::imageWeb('project-img6.jpg'),
            ],

            [
                'title' => 'Social Media Marketing',
                'sub_title' => 'solution four sub title',
                'slug' => route('web.solutions.details', ['slug' => 'solution-four']),
                'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis necessitatibus quod, maiores sequi earum rem odit nostrum inventore accusantium dolor assumenda quisquam. Itaque ab a maiores veritatis repellendus reprehenderit blanditiis!",
                'img_featured' => Vite::imageWeb('services-large1.jpg'),
                'img_gallery' => Vite::imageWeb('project-img6.jpg'),
            ],

            [
                'title' => 'Omni Channel',
                'sub_title' => 'solution five sub title',
                'slug' => route('web.solutions.details', ['slug' => 'solution-five']),
                'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis necessitatibus quod, maiores sequi earum rem odit nostrum inventore accusantium dolor assumenda quisquam. Itaque ab a maiores veritatis repellendus reprehenderit blanditiis!",
                'img_featured' => Vite::imageWeb('services-large1.jpg'),
                'img_gallery' => Vite::imageWeb('project-img6.jpg'),
            ],

        ];

        if (!empty($slug)) {
            $filteredItems = array_filter($dataList, function ($item) use ($slug) {
                return $item['slug'] == $slug;
            });
            $firstItem = reset($filteredItems);
            return $firstItem !== false ? $firstItem : [];
        }

        return $dataList;
    }
}
