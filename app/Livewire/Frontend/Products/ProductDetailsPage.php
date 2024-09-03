<?php

namespace App\Livewire\Frontend\Products;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Services\ProductService;
use Illuminate\Contracts\View\View;

class ProductDetailsPage extends Component
{
    ## Meta data
    public string $metaTitle = 'product details';
    public string $module = 'products';

    ## Route params
    public string $slug;

    ## Component props
    public array $itemDetails;

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
    public function mount(string $slug): void
    {
        $this->slug = $slug;
        $slugToFilter = route('web.products.details', ['slug' => $slug]);
        $this->itemDetails = $this->productService->getStaticModels($slugToFilter);
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Title('Product Details')]
    public function render(): View
    {
        return view('livewire.frontend.products.product-details-page');
    }
}
