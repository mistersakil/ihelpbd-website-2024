<?php

namespace App\Livewire\Backend\Sliders;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderListPage extends Component
{
    public string $module;
    public string $activeItem;

    public function  mount(): void
    {
        $this->module = __('sliders');
        $this->activeItem = __('list');
    }
    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    #[Layout('components.backend.layout.backend-layout')]
    #[Title('Sliders List')]
    public function render(): View
    {
        return view('livewire.backend.sliders.slider-list-page');
    }
}
