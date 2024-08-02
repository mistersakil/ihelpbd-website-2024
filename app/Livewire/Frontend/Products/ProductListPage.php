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
    ## Meta data
    public string $metaTitle = 'our products';
    public string $module = 'products';

    ## Component props
    public array $productList = [];

    ## Services
    private ProductService $productService;

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
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Title('Products')]
    public function render(): View
    {
        $this->productList = $this->productService->getStaticModels();
        return view('livewire.frontend.products.product-list-page');
    }
}
