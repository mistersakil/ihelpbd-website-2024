<?php

namespace App\Livewire\Backend\Sliders;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Contracts\View\View;

/**
 * Sidebar Component
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderCreatePage extends Component
{
    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    #[Layout('components.backend.layout.backend-master')]
    #[Title('Sliders')]
    public function render(): View
    {
        return view('livewire.backend.sliders.slider-create-page');
    }
}
