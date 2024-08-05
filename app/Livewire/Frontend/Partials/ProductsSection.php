<?php

namespace App\Livewire\Frontend\Partials;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class ProductsSection extends Component
{
    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */

    public function render(): View
    {
        return view('livewire.frontend.partials.products-section');
    }
}
