<?php

namespace App\Livewire\Backend\Addons;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class IsActiveComponent extends Component
{
    public bool $isActive;
    public string $statusText;

    /**
     * Create a new component instance.
     * @return void
     */
    public function mount($isActive)
    {
        $this->isActive = (bool) $isActive;
        $this->statusText = __("active");

        if ($this->isActive != 1) {
            $this->statusText = __("inactive");
            $this->isActive = 0;
        }
    }

    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.backend.addons.is-active-component');
    }
}
