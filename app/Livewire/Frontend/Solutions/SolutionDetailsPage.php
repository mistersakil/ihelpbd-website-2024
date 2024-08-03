<?php

namespace App\Livewire\Frontend\Solutions;

use App\Services\SolutionService;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Contracts\View\View;

class SolutionDetailsPage extends Component
{
    ## Meta data
    public string $metaTitle = 'solution details';
    public string $module = 'solutions';

    ## Route params
    public string $slug;

    ## Component props
    public array $itemDetails;
    public array $solutionList = [];

    ## Services
    private SolutionService $solutionService;

    public function boot()
    {
        $this->solutionService = new SolutionService;
    }

    /**
     * Create a new component instance.
     * @return void
     */
    public function mount(string $slug): void
    {
        $this->slug = $slug;
        $slugString = route('web.solutions.details', ['slug' => $slug]);
        $this->itemDetails = $this->solutionService->getStaticModels($slugString);
        $this->solutionList = $this->solutionService->getStaticModels();
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
