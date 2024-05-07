<?php

namespace App\Livewire\Backend\Sliders;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Contracts\View\View;

/**
 * SliderCreatePage Component
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderCreatePage extends Component
{
    public string $title = 'sliders';
    public string $activeItem = 'create';

    public array $state = [];

    /**
     * @return void
     */
    public function mount(): void
    {
        $this->getDefaultState();
    }

    /**
     * @return void
     */
    public function getDefaultState(): void
    {
        $this->state = [
            'title' => ''
        ];
    }

    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    #[Layout('components.backend.layout.backend-layout')]
    #[Title('Sliders')]
    public function render(): View
    {
        return view('livewire.backend.sliders.slider-create-page');
    }
}
