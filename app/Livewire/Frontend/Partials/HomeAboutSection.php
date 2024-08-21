<?php

namespace App\Livewire\Frontend\Partials;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class HomeAboutSection extends Component
{
    ## Component props
    public array $dataList;
    public string $sectionTitle;
    public string $sectionSubTitle;
    public string $isShowSectionHeader;
    public int $limit;

    ## Services
    // private SolutionService $solutionService;

    public function boot()
    {
        // $this->solutionService = new SolutionService;
    }


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.partials.home-about-section');
    }
}
