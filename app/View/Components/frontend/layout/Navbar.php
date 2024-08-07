<?php

namespace App\View\Components\Frontend\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{

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
