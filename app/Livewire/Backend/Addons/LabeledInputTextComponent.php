<?php

namespace App\Livewire\Backend\Addons;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class LabeledInputTextComponent extends Component
{
    public string $icon;
    public string $label;
    public string $helpText;

    function mount(string $icon = '', string $label = 'label'): void
    {
        $this->icon = !empty($icon) ? $icon : _icons('user');
        $this->label = !empty($label) ? $label : 'default label';
    }

    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.backend.addons.labeled-input-text-component');
    }
}
