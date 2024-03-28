<?php

namespace App\Livewire\Frontend\Partials;

use Illuminate\Contracts\View\View;
use Livewire\Component;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class LocalChangeComponent extends Component
{
    public array $locals = [];
    public string $selectedLocal = 'en';

    /**
     *  Initialize the component
     *
     * @return void
     */
    public function mount(): void
    {
        $this->locals = [
            'en' => 'English',
            'bd' => 'bangla',
            'my' => 'my'
        ];
    }

    public function changeLocaleAction(): void
    {
        dump($this->selectedLocal);
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.partials.local-change-component');
    }
}
