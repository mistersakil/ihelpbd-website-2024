<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class ComingSoon extends Component
{
       ## Component props
       public string $content;
   
       /**
        * Create a new component instance.
        * @param array $item 
        * @return void
        */
       public function mount(string $content = ''): void
       {
           $this->content = !empty($content) ? __($content) : __('Coming soon');
       }
       
     /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.components.coming-soon');
    }
}
