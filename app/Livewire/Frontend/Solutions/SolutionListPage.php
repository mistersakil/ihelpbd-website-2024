<?php

namespace App\Livewire\Frontend\Solutions;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Services\ProductService;
use App\Services\SolutionService;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SolutionListPage extends Component
{
    public string $metaTitle = 'solution we provide';
    public string $module = 'solutions';

    ## Component props
    public array $solutionList = [];
    public array $productList = [];

    ## Services
    private SolutionService $solutionService;
    private ProductService $productService;

    public function boot()
    {
        $this->solutionService = new SolutionService;
        $this->productService = new ProductService;
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Title('Solutions')]
    public function render(): View
    {
        $this->solutionList = $this->solutionService->getStaticModels();
        return view('livewire.frontend.solutions.solution-list-page');
    }
}
