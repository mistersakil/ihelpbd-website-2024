<?php

namespace App\Livewire\About;

use Livewire\Component;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class AboutPage extends Component
{
    public string $metaTitle = 'about us';

    public function render()
    {
        return view('livewire.about.about-page')->title($this->metaTitle);
    }
}
