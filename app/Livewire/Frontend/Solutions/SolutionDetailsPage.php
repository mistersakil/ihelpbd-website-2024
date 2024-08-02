<?php

namespace App\Livewire\Frontend\Solutions;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Contracts\View\View;

class SolutionDetailsPage extends Component
{
    ## Meta data
    public string $metaTitle = 'products';
    public string $module = 'solutions';

    ## Route params
    public string $slug;

    ## Component props
    public array $productDetails;

    ## Services
    // private ProductService $productService;

    public function boot()
    {
        // $this->productService = new ProductService;
    }

    /**
     * Create a new component instance.
     * @return void
     */
    public function mount(string $slug): void
    {
        $this->slug = $slug;
        $slugToFilter = route('web.products.details', ['slug' => $slug]);
        $this->productDetails = $this->productService->getStaticModels($slugToFilter);
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Title('Solution Details')]
    public function render(): View
    {
        return view('livewire.frontend.solutions.solution-details-page');
    }
}
