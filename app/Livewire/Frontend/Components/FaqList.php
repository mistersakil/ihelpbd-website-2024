<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class FaqList extends Component
{
    ## Component props
    public string $title;
    public string $subTitle;
    public Collection $items;
    public bool $isDisplaySection = true;

    /**
     * Create a new component instance.
     * @param array $item 
     * @return void
     */
    public function mount(array $item = []): void
    {
        if (!isset($item['faqs']) || empty($item['faqs'])) {
            $this->isDisplaySection =  false;
        } else {
            $model = $item['faqs'];
        }
        $this->title = isset($model['title']) ? __($model['title']) : '';
        $this->subTitle = isset($model['subTitle']) ? __($model['subTitle']) : '';
        $this->items = isset($model['items']) ? collect($model['items']) : collect([]);
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
