<?php

namespace App\Livewire\Frontend\Products;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Services\ProductService;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class ProductListPage extends Component
{
    public string $metaTitle = 'product list';
    public string $module = 'products';

    private ProductService $productService;
    public array $productList = [];

    public function boot()
    {
        $this->productService = new ProductService;
    }

    /**
     * Create a new component instance.
     * @return void
     */
    public function mount(): void
    {
        $this->productList = $this->productService->getStaticModels();
    }

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
