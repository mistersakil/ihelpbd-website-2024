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
                'title' => 'Custom CRM Development',
                'subTitle' => 'Discover the Power of CRM Platform',
                'slug' => route('web.solutions.details', ['slug' => 'crm']),
                'body' => "Discover the Power of CRM Platform",
                'img_featured' => Vite::imageWeb('blog-img1.jpg'),
                'img_thumb' => Vite::imageWeb('project-img6.jpg'),
                'keyPoints' => [
                    'Maximize Customer Value with an Exceptional CRM Platform',
                    'Maintaining customer relationships through diligent tracking of interactions',
                    'A Vital Asset for Every Business to Excel in Customer Relations',
                    'Make informed decisions with real-time data',
                    'Effortless Integration with Your Existing Platforms',
                ],

                'projects' => [
                    'title' => 'Projects',
                    'subTitle' => 'Our recent projects',
                    'items' => [
                        [
                            'heading' => '',
                            'body' => 'Boost Your Business with IHELP CRM.',
                            'img' =>  Vite::imageWeb('project-style1.jpg'),
                        ],
                        [
                            'heading' => '',
                            'body' => 'Experience smarter customer relationship management across multiple chains with our CRM system, delivering real-time insights for informed business decisions and personalized customer interactions.',
                            'img' =>  Vite::imageWeb('project-style2.jpg'),
                        ],
                        [
                            'heading' => '',
                            'body' => "Simplify your operations with our IHELP CRM. Centralize data, automate tasks, and uncover customer trends for efficient, sustainable growth. ",
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

            [
                'title' => 'Web Development',
                'subTitle' => 'Top Custom Web Development Solutions',
                'slug' => route('web.solutions.details', ['slug' => 'web-development']),
                'body' => "IHELP delivers innovative web applications for global leaders and startups. With a proven track record in enterprise development, we are committed to excellence and high-quality outcomes",
                'img_featured' => Vite::imageWeb('blog-img2.jpg'),
                'img_thumb' => Vite::imageWeb('project-img6.jpg'),
                'keyPoints' => [
                    'Industry Expertise',
                    'Cutting-Edge Technology',
                    'Client-Centric Approach',
                ],

                'services2' => [
                    'title' => 'Grow your business',
                    'subTitle' => 'How can we help you?',
                    'items' => [
                        [
                            'heading' => 'Responsive Design',
                            'body' => 'Ensure the website is mobile-friendly and adapts seamlessly to various screen sizes.',
                            'icon' =>  _icons('laptop'),
                        ],
                        [
                            'heading' => 'User-Friendly Navigation',
                            'body' => 'Implement intuitive navigation to enhance user experience and accessibility.',
                            'icon' =>  _icons('tracking'),
                        ],
                        [
                            'heading' => 'SEO Optimization',
                            'body' => 'Integrate SEO best practices to improve visibility on search engines and attract organic traffic.',
                            'icon' =>  _icons('search'),
                        ],
                        [
                            'heading' => 'Content Management System (CMS)',
                            'body' => 'Provide a robust CMS for easy content updates and management without technical expertise.',
                            'icon' =>  _icons('collection'),
                        ],
                        [
                            'heading' => 'E-commerce Functionality',
                            'body' => 'Include secure payment gateways, shopping carts, and inventory management for online stores.',
                            'icon' =>  _icons('cart'),
                        ],
                        [
                            'heading' => 'Analytics and Reporting Tools',
                            'body' => 'Incorporate tools for tracking user behavior and website performance for data-driven decision-making.',
                            'icon' =>  _icons('reports'),
                        ],
                        [
                            'heading' => 'Fast Loading Speed',
                            'body' => 'Optimize website performance to ensure quick loading times, enhancing user satisfaction.',
                            'icon' =>  _icons('speedometer'),
                        ],
                        [
                            'heading' => 'Security Features',
                            'body' => 'Implement SSL certificates, data encryption, and regular security updates to protect user data.',
                            'icon' =>  _icons('lock'),
                        ],
                        [
                            'heading' => 'Customizable Templates',
                            'body' => "Offer customizable design templates to reflect the brand's identity and meet specific business needs.",
                            'icon' =>  _icons('sidebar'),
                        ],
                        [
                            'heading' => 'Integration with Third-Party Services',
                            'body' => "Facilitate integration with various APIs and services, such as CRM, email marketing, and social media platforms.",
                            'icon' =>  _icons('website'),
                        ]

                    ]
                ],

                'articles' => [
                    [
                        'title' => 'Web Solutions We Build',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img4.jpg'),
                        'items' => [
                            'Corporate Website',
                            'Portfolio Website ',
                            'Membership Website',
                            'E-commerce',
                            'Member Database',
                        ]
                    ],
                    [
                        'title' => 'More On Web Solutions',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img5.jpg'),
                        'items' => [
                            'Reward Points',
                            'Payment Gateway',
                            'Web Design & development',
                            'Web application Design & development',
                        ]
                    ]
                ],


            ],

            [
                'title' => 'Application integration',
                'subTitle' => 'Discover the Power of Application integration',
                'slug' => route('web.solutions.details', ['slug' => 'crm']),
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ex soluta recusandae. Cumque nobis, aspernatur laudantium voluptas neque ullam provident ab doloremque iusto quibusdam ipsa debitis quos nisi dignissimos incidunt.",
                'img_featured' => Vite::imageWeb('blog-img3.jpg'),
                'img_thumb' => Vite::imageWeb('project-img6.jpg'),
                'keyPoints' => [
                    'Maximize Customer Value with an Exceptional CRM Platform',
                    'Maintaining customer relationships through diligent tracking of interactions',
                    'A Vital Asset for Every Business to Excel in Customer Relations',
                    'Make informed decisions with real-time data',
                    'Effortless Integration with Your Existing Platforms',
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
