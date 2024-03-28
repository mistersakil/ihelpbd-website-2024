<?php

namespace App\Livewire\Contact;

use Livewire\Component;

class ContactPage extends Component
{
    public string $metaTitle = 'contact us';

    public function render()
    {
        return view('livewire.contact.contact-page')->title($this->metaTitle);
    }
}