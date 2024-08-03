<?php

namespace App\Livewire\Frontend\Partials;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class HomeServicesSection2 extends Component
{
    ## Meta property
    public $sectionTitle;
    public $sectionSubTitle;
    public $isShowSectionHeader;

    /**
     * Create a new component instance.
     * @return void
     */
    public function mount(string $sectionTitle = '', string $sectionSubTitle = ''): void
    {
        $this->sectionTitle = $sectionTitle ? __($sectionTitle) : "";
        $this->sectionSubTitle = $sectionSubTitle ? __($sectionSubTitle) : "";

        $this->isShowSectionHeader = (!empty($this->sectionTitle) || !empty($this->sectionSubTitle)) ? true : false;
    }


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */

    public function render(): View
    {
        return view('livewire.frontend.partials.home-services-section2');
    }
}