<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use Illuminate\Contracts\View\View;

class ArticleSectionOne extends Component
{
    ## Component props
    public array $items;
    public bool $isDisplaySection = true;
    /**
     * Create a new component instance.
     * @param array $item 
     * @return void
     */
    public function mount(array $item = []): void
    {
        if (!isset($item['articles']) && !is_array($item)) {
            $this->isDisplaySection =  false;
        } else {
            $this->items = $item['articles'];
        }
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.components.article-section-one');
    }
}
