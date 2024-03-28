<?php

namespace App\Livewire\Frontend\Contact;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class ContactPage extends Component
{
    public string $metaTitle = 'contact us';
    public string $module = 'contact';

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.contact.contact-page')->title($this->metaTitle);
    }
}
