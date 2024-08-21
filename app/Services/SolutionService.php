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
    public function getStaticModels(string $slug = '', int $limit = 5)
    {
        $dataList = [
            [
                'title' => 'Content Writing',
                'sub_title' => 'solution one sub title',
                'slug' => route('web.solutions.details', ['slug' => 'solution-one']),
                'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis necessitatibus quod, maiores sequi earum rem odit nostrum inventore accusantium dolor assumenda quisquam. Itaque ab a maiores veritatis repellendus reprehenderit blanditiis!",
                'img_featured' => Vite::imageWeb('services-large1.jpg'),
                'img_gallery' => Vite::imageWeb('project-img6.jpg'),

                'about' => [
                    'title' => 'about us',
                    'sub_title' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis necessitatibus quod',
                    'items' => [
                        'point number one',
                        'point number two',
                        'point number three',
                        'point number four',
                        'point number five',
                    ]
                ],

                'projects' => [
                    'title' => 'projects',
                    'sub_title' => 'our recent projects',
                    'items' => [
                        [
                            'heading' => 'heading one',
                            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime magni',
                            'img' =>  Vite::imageWeb('services-large1.jpg'),
                        ],
                        [
                            'heading' => 'heading tow',
                            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime magni',
                            'img' =>  Vite::imageWeb('services-large1.jpg'),
                        ],
                        [
                            'heading' => 'heading three',
                            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime magni',
                            'img' =>  Vite::imageWeb('services-large1.jpg'),
                        ]
                    ]
                ],
                'services' => [
                    'title' => 'services',
                    'sub_title' => 'our valuable services',
                    'items' => [
                        [
                            'heading' => 'heading one',
                            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime magni',
                            'img' =>  Vite::imageWeb('services-large1.jpg'),
                        ],
                        [
                            'heading' => 'heading tow',
                            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime magni',
                            'img' =>  Vite::imageWeb('services-large1.jpg'),
                        ],
                        [
                            'heading' => 'heading three',
                            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime magni',
                            'img' =>  Vite::imageWeb('services-large1.jpg'),
                        ]
                    ]
                ]
            ],


        ];

        if (!empty($slug)) {
            $filteredItems = array_filter($dataList, function ($item) use ($slug) {
                return $item['slug'] == $slug;
            });
            $firstItem = reset($filteredItems);
            return $firstItem !== false ? $firstItem : [];
        }
        return collect($dataList)->take($limit)->toArray();
    }
}
