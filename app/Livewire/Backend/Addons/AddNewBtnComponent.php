<?php

namespace App\Livewire\Backend\Addons;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class AddNewBtnComponent extends Component
{
    public string $title;
    public string $icon;
    public string $route;
    public bool $hasRoute;

    public function mount(string $title = '', string $icon = '', string $route = '')
    {
        $this->title = !empty($title) ? __($title) : __('add new');
        $this->icon = !empty($icon) ? _icons($icon) : _icons('add');
        $this->route = '';
        $this->hasRoute = false;
        if (!empty($route)) {
            $this->route = route($route);
            $this->hasRoute = true;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|string
    {
        return view('livewire.backend.addons.add-new-btn-component');
    }
}
