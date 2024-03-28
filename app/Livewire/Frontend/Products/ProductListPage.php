<?php

namespace App\Livewire\Frontend\Products;

use Livewire\Component;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class ProductListPage extends Component
{
    public string $metaTitle = 'product list';
    public string $module = 'products';

    public function render()
    {
        return view('livewire.frontend.products.product-list-page')->title($this->metaTitle);
    }
}
