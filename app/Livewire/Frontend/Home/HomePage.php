<?php

namespace App\Livewire\Frontend\Home;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class HomePage extends Component
{
    public string $metaTitle = 'home';

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Title("Home")]
    public function render(): View
    {
        return view('livewire.frontend.home.home-page');
    }
}
