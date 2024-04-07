<?php

namespace App\Livewire\Frontend\About;

use Livewire\Component;

use Illuminate\Contracts\View\View;
/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class AboutPage extends Component
{
    public string $metaTitle = 'about us';
    public string $module = 'about';
/**
* return view
*/
    public function render()
    {
        return view('livewire.frontend.about.about-page')->title($this->metaTitle);
    }
}
