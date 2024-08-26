<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use Illuminate\Contracts\View\View;

class ArticleSectionOne extends Component
{
    ## Component props
    // public string $title;
    // public string $subTitle;
    // public string $img;
    public array $items;

    /**
     * Create a new component instance.
     * @param array $item 
     * @return void
     */
    public function mount(array $items = []): void
    {
        // $this->title = isset($item['title']) ? __($item['title']) : '';
        // $this->subTitle = isset($item['subTitle']) ? __($item['subTitle']) : '';
        // $this->img = isset($item['img']) ? $item['img'] : '';
        $this->items = isset($items) ? $items : [];
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
