<?php

namespace App\Livewire\Frontend\Contact;

use Livewire\Component;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class ContactPage extends Component
{
    public string $metaTitle = 'contact us';
    public string $module = 'contact';

    public function render()
    {
        return view('livewire.frontend.contact.contact-page')->title($this->metaTitle);
    }
}
