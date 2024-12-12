<?php

namespace App\View\Components\Frontend\Layout;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Vite;

class Navbar extends Component
{
    ## Component props
    public string $logo = '';
    public array $navItems = [];


    /**
     * Create new component instance
     * 
     * @return void
     */
    public function __construct()
    {
        $this->logo = Vite::asset('resources/images/logo-dark.svg');
        $this->navItems = $this->getNavItems();
    }

    /**
     * Get nav items
     *
     * @return array $list
     */
    public function getNavItems(): array
    {
        $list = [
            [
                'title' => __('home'),
                'link' => route('web.home'),
            ],

            [
                'title' => __('products'),
                'link' => route('web.products'),
            ],

            [
                'title' => __('solutions'),
                'link' => route('web.solutions'),
            ],

            [
                'title' => __('company'),
                'link' => "javascript:void(0)",
                'children' => [
                    [
                        'title' => __('about'),
                        'link' => route('web.about'),
                        'hasChildren' => false,
                    ],
                    [
                        'title' => __('contact'),
                        'link' => route('web.contact'),
                        'hasChildren' => false,
                    ],
                ]
            ],
            
            [
                'title' => __('learning'),
                'link' => route('web.blogs'),
            ],


        ];

        return $list;
    }
    /**
     * Get the view / contents that represent the component.
     * 
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.layout.navbar');
    }
}
