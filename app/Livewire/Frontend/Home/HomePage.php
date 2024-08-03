<?php

namespace App\Livewire\Frontend\Home;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Services\SolutionService;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class HomePage extends Component
{
    public string $metaTitle = 'home';

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
    #[Title("Home")]
    public function render(): View
    {
        $this->solutionList = $this->solutionService->getStaticModels();
        return view('livewire.frontend.home.home-page');
    }
}
