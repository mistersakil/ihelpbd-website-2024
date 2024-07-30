<?php

namespace App\Livewire\Frontend\Products;

use Livewire\Component;
use Livewire\Attributes\Title;
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
    #[Title('Product List')]
    public function render(): View
    {
        return view('livewire.frontend.products.product-list-page');
    }
}
