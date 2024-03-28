<?php

namespace App\Livewire\Frontend\Home;

use Livewire\Component;
use Livewire\Attributes\Title;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class HomePage extends Component
{
    public string $metaTitle = 'home';

    public function render()
    {
        return view('livewire.frontend.home.home-page')->title($this->metaTitle);
    }
}
