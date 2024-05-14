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

    public string $metaTitle = 'sliders';
    public string $activeItem = 'create';

    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    #[Layout('components.backend.layout.backend-layout')]
    #[Title('Sliders')]
    public function render(): View
    {
        return view('livewire.backend.sliders.slider-list-page');
    }
}
