<?php

namespace App\Livewire\Frontend\Products;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class ProductListPage extends Component
{
    public string $metaTitle = 'product list';
    public string $module = 'products';

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.products.product-list-page')->title($this->metaTitle);
    }
}
