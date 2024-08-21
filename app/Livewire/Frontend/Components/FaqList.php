<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class FaqList extends Component
{
    ## Component props
    public string $title;
    public string $subTitle;
    public array $items;

    /**
     * Create a new component instance.
     * @param array $item 
     * @return void
     */
    public function mount(array $item = []): void
    {
        $this->title = isset($item['title']) ? __($item['title']) : '';
        $this->subTitle = isset($item['subTitle']) ? __($item['subTitle']) : '';
        $this->items = isset($item['items']) ? $item['items'] : [];
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.components.faq-list');
    }
}
