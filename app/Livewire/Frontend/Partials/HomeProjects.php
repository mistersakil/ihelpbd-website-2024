<?php

namespace App\Livewire\Frontend\Partials;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class HomeProjects extends Component
{
    ## Component props
    public string $title;
    public string $subTitle;
    public array $items;
    public string $img;

    /**
     * Create a new component instance.
     * @param array $item 
     * @return void
     */
    public function mount(array $item = []): void
    {
        $model = isset($item['projects']) ? $item['projects'] : [];
        $this->title = isset($model['title']) ? __($model['title']) : '';
        $this->subTitle = isset($model['subTitle']) ? __($model['subTitle']) : '';
        $this->items = isset($model['items']) ? $model['items'] : [];
        $this->img = isset($model['img']) ? $model['img'] : '';
    }


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.partials.home-projects');
    }
}
