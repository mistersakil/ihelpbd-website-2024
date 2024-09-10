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
                'title' => 'Complain Management System',
                'subTitle' => 'All-in-one solution for help desk and customer service operations',
                'slug' => route('web.products.details', ['slug' => 'complain-management']),
                'body' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae animi laudantium ab vel dolores sed perferendis maiores soluta eum, amet voluptatibus, quidem necessitatibus tempore suscipit. Praesentium doloribus aperiam deserunt accusamus?",
                'img_featured' => Vite::imageWeb('project-details-img1.jpg'),
                'img_thumb' => Vite::imageWeb('project-img3.jpg'),
                'keyPoints' => [
                    'Unified platform for managing all customer support interactions',
                    'Streamlined workflows to enhance efficiency and response times',
                    'Centralized knowledge base for easy information access',
                    'Automated ticketing system to track and prioritize customer inquiries',
                    'Integrations with other business tools for seamless workflows',
                    'Reporting and analytics to measure performance and identify trends',
                    'Scalable solution to meet growing customer needs',
                    'Customer satisfaction metrics to assess customer happiness',
                    '24/7 support for technical assistance and troubleshooting',
                    'Customization options to tailor the software to specific requirements',
                ],

                'projects' => [
                    'title' => 'Projects',
                    'subTitle' => 'Our recent projects',
                    'items' => [
                        [
                            'heading' => 'Simplified SLA Oversight',
                            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime magni, Lorem ipsum dolor, Lorem ipsum dolor',
                            'img' =>  Vite::imageWeb('project-style1.jpg'),
                        ],
                        [
                            'heading' => 'Automated Task Assignment',
                            'body' => 'Let the system automatically delegate customer tickets to your team. Enhance efficiency with full end-to-end visibility',
                            'img' =>  Vite::imageWeb('project-style2.jpg'),
                        ],
                        [
                            'heading' => 'Automated Ticket Notifications',
                            'body' => 'Receive instant alerts for active, unresponsive, or automatically completed tickets',
                            'img' =>  Vite::imageWeb('project-style3.jpg'),
                        ]
                    ]
                ],
                'characteristics' => [
                    'title' => 'How we feel',
                    'subTitle' => 'Unified Success',
                    'items' => [
                        [
                            'heading' => 'Ticket Tracking and Prioritization',
                            'body' => 'Assess the urgency of each ticket to determine its priority, and assign it to the appropriate agents for efficient resolution',
                            'icon' =>  _icons('tracking'),
                        ],
                        [
                            'heading' => 'Email and Phone Management',
                            'body' => 'Record each customers email and phone number on the ticket for real-time tracking and efficient communication',
                            'icon' =>  _icons('email'),
                        ],
                        [
                            'heading' => 'Agent and Team Management',
                            'body' => 'Clearly define the responsibilities of each team and agent to ensure that incoming tickets are directed to the appropriate agent for prompt resolution',
                            'icon' =>  _icons('users'),
                        ],
                        [
                            'heading' => 'Ticket Portal',
                            'body' => 'Simplify the ticket submission process for your customers and enable them to track the progress of their tickets effortlessly',
                            'icon' =>  _icons('portal'),
                        ],
                        [
                            'heading' => 'Live Chat Support',
                            'body' => 'Deliver exceptional customer service through direct interactions between the admin and the customer, ensuring immediate assistance and support',
                            'icon' =>  _icons('live_chat'),
                        ],
                        [
                            'heading' => 'In-Depth Report Generation',
                            'body' => 'Effortlessly generate reports on ticket progress, team performance, and issues using the reporting feature',
                            'icon' =>  _icons('reports'),
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
                        'title' => 'Benefits',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img4.jpg'),
                        'items' => [
                            'Automated Ticket Assignment: Automatically route tickets to the appropriate agent or team',
                            'Priority Levels: Assign priority to tickets based on urgency and importance',
                            'SLA Management: Monitor and enforce service level agreements for timely resolution',
                            'Real-Time Notifications: Receive alerts for new, overdue, or resolved tickets',
                            'Customizable Workflows: Tailor ticket workflows to match your business processes',
                            'Multi-Channel Support: Handle tickets from various channels like email, phone, and chat',
                            'Knowledge Base Integration: Access and link relevant articles directly within tickets',

                            'Reporting & Analytics: Track performance metrics, resolution times, and trends',

                        ]
                    ],
                    [
                        'title' => 'Advantages',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img5.jpg'),
                        'items' => [

                            'Collaborative Tools: Enable team collaboration on complex tickets with internal notes and comments',
                            'Customer Portal: Allow customers to submit and track tickets through a dedicated portal',
                            'Ticket Status Tracking: Monitor the progress and current status of each ticket',
                            'Historical Records: Maintain a log of all interactions and actions taken on each ticket',
                            'Custom Fields: Add specific fields to capture relevant information unique to your organization',
                            'Escalation Rules: Automatically escalate tickets that are unresolved within a certain time frame',
                            'Integrations: Connect with other tools like CRM, project management, or communication platforms',

                        ]
                    ]
                ]

            ],

            [
                'title' => 'Task Management',
                'subTitle' => 'The ultimate solution for task refinement and process improvement',
                'slug' => route('web.products.details', ['slug' => 'task-management']),
                'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui modi doloribus exercitationem sit, asperiores quod obcaecati placeat sequi. Illo repudiandae doloremque, atque dolor harum cum pariatur nobis vitae quidem libero?",
                'img_featured' => Vite::imageWeb('project-details-img1.jpg'),
                'img_thumb' => Vite::imageWeb('project-img4.jpg'),
                'keyPoints' => [
                    'Align work with company objectives',
                    'Automate processes across all departments',
                    'Track progress and eliminate bottlenecks',
                    'Enhance and regulate work order processes',
                    'Automatically schedule job reminders and alerts',
                    'Gather performance insights and reports',
                ],

                'projects' => [
                    'title' => 'Projects',
                    'subTitle' => 'Our recent projects',
                    'items' => [
                        [
                            'heading' => '',
                            'body' => 'AI-driven automated service management (AISM) capabilities allow for quicker, more accurate, and efficient delivery of service innovations',
                            'img' =>  Vite::imageWeb('project-style1.jpg'),
                        ],
                        [
                            'heading' => '',
                            'body' => 'Incoming calls, emails, and tickets can be automatically managed from a single platform',
                            'img' =>  Vite::imageWeb('project-style2.jpg'),
                        ],
                        [
                            'heading' => '',
                            'body' => 'Simplify priorities with clear project alignment to strategic goals, manage multiple projects efficiently, and speed up progress with enhanced stakeholder visibility',
                            'img' =>  Vite::imageWeb('project-style3.jpg'),
                        ]
                    ]
                ],
                'characteristics' => [
                    'title' => 'Unified Success',
                    'subTitle' => 'Key Features',
                    'items' => [
                        [
                            'heading' => 'Plan',
                            'body' => 'organize, and collaborate on any company objective using customizable task management tools tailored to meet diverse needs at every level',
                            'icon' =>  _icons('plan'),
                        ],
                        [
                            'heading' => 'Docs',
                            'body' => 'Outline business cases, define project scope, and document requirements to ensure everyone has the necessary information to keep work progressing smoothly',
                            'icon' =>  _icons('docs'),
                        ],
                        [
                            'heading' => 'Relationships',
                            'body' => 'Connect tasks, documents, integrations, and more to access related resources and tasks in a centralized location',
                            'icon' =>  _icons('relationship'),
                        ],
                        [
                            'heading' => 'In-Depth Report Generation',
                            'body' => 'Effortlessly generate reports on ticket progress, team performance, and issues using the reporting feature',
                            'icon' =>  _icons('reports'),
                        ],
                        [
                            'heading' => 'More focused on accountability',
                            'body' => 'Monitor changes to ensure transparency and accountability',
                            'icon' =>  _icons('focus'),
                        ],
                        [
                            'heading' => 'Team Management & Assignment',
                            'body' => 'Save time and skip meetings with digital job scheduling, ensuring each job includes all the necessary information',
                            'icon' =>  _icons('users'),
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
                        'title' => 'Benefits',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img4.jpg'),
                        'items' => [
                            'Adjusting Timeliness',
                            'Breaking down project ',
                            'Track dependencies',
                            'Archiving complete task',
                            'Seeing history across all changes',
                            'Custom filters',
                        ]
                    ],
                    [
                        'title' => 'Advantages',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img5.jpg'),
                        'items' => [
                            'Manage team',
                            'Auto-scheduling',
                            'Auto Notification',
                            'Easily get access to your customers history and job records',
                            'Client relationship maintaining via email, sms notification',
                            'Lead Management',


                        ]
                    ]
                ]

            ],

            [
                'title' => 'Omni-channel Contact Center',
                'subTitle' => 'Discover the Power of Omni-channel Contact Center',
                'slug' => route('web.products.details', ['slug' => 'omni-channel']),
                'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui modi doloribus exercitationem sit, asperiores quod obcaecati placeat sequi. Illo repudiandae doloremque, atque dolor harum cum pariatur nobis vitae quidem libero?",
                'img_featured' => Vite::imageWeb('project-details-img1.jpg'),
                'img_thumb' => Vite::imageWeb('project-img5.jpg'),
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

            [
                'title' => 'Account Management Solution',
                'subTitle' => 'Discover the Power of Account Management Solution',
                'slug' => route('web.products.details', ['slug' => 'account-management']),
                'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui modi doloribus exercitationem sit, asperiores quod obcaecati placeat sequi. Illo repudiandae doloremque, atque dolor harum cum pariatur nobis vitae quidem libero?",
                'img_featured' => Vite::imageWeb('project-details-img1.jpg'),
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
            $filteredProducts = array_filter($dataList, function ($product) use ($slug) {
                return $product['slug'] == $slug;
            });
            $firstProduct = reset($filteredProducts);
            return $firstProduct !== false ? $firstProduct : [];
        }

        return collect($dataList)->take($limit)->toArray();
    }
}
