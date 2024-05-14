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

    public function mount(string $title = '', string $icon = '', string $route = '')
    {
        $this->title = !empty($title) ? __($title) : __('add new');
        $this->icon = !empty($icon) ? _icons($icon) : _icons('add');
    }

    /**
     * show_modal_by_livewire method dispatch browser event
     * @return void
     */
    public function show_modal_by_livewire(): void
    {
        $this->dispatchBrowserEvent('show_modal_by_livewire');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|string
    {
        return view('livewire.backend.addons.add-new-btn-component');
    }
}