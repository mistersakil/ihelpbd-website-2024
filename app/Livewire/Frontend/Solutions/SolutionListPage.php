<?php

namespace App\Livewire\Frontend\Solutions;

use Livewire\Component;
use Livewire\Attributes\Title;
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

    ## Services
    private SolutionService $solutionService;

    public function boot()
    {
        $this->solutionService = new SolutionService;
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