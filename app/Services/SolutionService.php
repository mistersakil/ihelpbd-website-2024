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
                'subTitle' => 'Solution one sub title',
                'slug' => route('web.solutions.details', ['slug' => 'solution-one']),
                'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis necessitatibus quod, maiores sequi earum rem odit nostrum inventore accusantium dolor assumenda quisquam. Itaque ab a maiores veritatis repellendus reprehenderit blanditiis!",
                'img_featured' => Vite::imageWeb('services-large1.jpg'),
                'img_gallery' => Vite::imageWeb('project-img6.jpg'),

                'about' => [
                    'title' => 'About us',
                    'subTitle' => 'Solution one about section subtitle',
                    'img' => Vite::imageWeb('service-img1.jpg'),
                    'items' => [
                        'point number one. point number one. point number one. ',
                        'point number two. point number two. point number two',
                        'point number three. point number three. point number three',
                        'point number four. point number four. point number four',
                        'point number five. point number five. point number five',
                        'point number six. point number six. point number six',
                        'point number seven. point number seven. point number seven',
                        'point number eight. point number eight. point number eight',
                        'point number nine. point number nine. point number nine',
                    ]
                ],

                'projects' => [
                    'title' => 'Projects',
                    'subTitle' => 'Our recent projects',
                    'items' => [
                        [
                            'heading' => 'heading one',
                            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime magni, Lorem ipsum dolor, Lorem ipsum dolor',
                            'img' =>  Vite::imageWeb('project-style1.jpg'),
                        ],
                        [
                            'heading' => 'heading tow',
                            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime magni, Lorem ipsum dolor, Lorem ipsum dolor',
                            'img' =>  Vite::imageWeb('project-style2.jpg'),
                        ],
                        [
                            'heading' => 'heading three',
                            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime magni, Lorem ipsum dolor, Lorem ipsum dolor',
                            'img' =>  Vite::imageWeb('project-style3.jpg'),
                        ]
                    ]
                ],
                'characteristics' => [
                    'title' => 'How we feel',
                    'subTitle' => 'Unified Success',
                    'items' => [
                        [
                            'heading' => 'Integrated Data Management',
                            'body' => 'IHELP CRM centralizes customer data across business chains, offering a unified view for personalized engagement and data-driven decisions.',
                            'icon' =>  _icons('database_gear'),
                        ],
                        [
                            'heading' => 'Real-Time Integration',
                            'body' => 'Real-time integration allows seamless data flow across branches, providing an up-to-date view of customer activity. This empowers businesses to respond quickly to customer needs and market changes.',
                            'icon' =>  _icons('realtime'),
                        ],
                        [
                            'heading' => 'Data Security and Compliances',
                            'body' => 'Secure your data across all chains. Protect customer information with robust security. Build trust through data compliance. Prioritize security in your multi-chain CRM',
                            'icon' =>  _icons('database_lock'),
                        ]
                    ]
                ],
                'faqs' => [
                    'title' => 'FAQ',
                    'subTitle' => "Learn more",
                    'items' => [
                        [
                            'heading' => 'Integrated Data Management',
                            'body' => 'IHELP CRM centralizes customer data across business chains, offering a unified view for personalized engagement and data-driven decisions.',
                        ],
                        [
                            'heading' => 'Real-Time Integration',
                            'body' => 'Real-time integration allows seamless data flow across branches, providing an up-to-date view of customer activity. This empowers businesses to respond quickly to customer needs and market changes.',
                        ],
                        [
                            'heading' => 'Data Security and Compliances',
                            'body' => 'Secure your data across all chains. Protect customer information with robust security. Build trust through data compliance. Prioritize security in your multi-chain CRM',
                        ],
                        [
                            'heading' => 'Data Security and Compliances two',
                            'body' => 'Secure your data across all chains. Protect customer information with robust security. Build trust through data compliance. Prioritize security in your multi-chain CRM',
                        ]
                    ]
                ],
                'articles' => [
                    [
                        'title' => 'CRM Benefits',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img4.jpg'),
                        'items' => [

                            'Boost sales and customer satisfaction',
                            'Streamline operations, cut costs',
                            'Make data-driven decisions.',
                            'Improve team collaboration.',

                        ]
                    ],
                    [
                        'title' => 'Cloud CRM Advantages',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img5.jpg'),
                        'items' => [

                            'Boost sales and customer satisfaction',
                            'Streamline operations, cut costs',
                            'Make data-driven decisions.',
                            'Improve team collaboration.',

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
