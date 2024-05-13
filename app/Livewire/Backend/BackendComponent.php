<?php

namespace App\Livewire\Backend;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

/**
 * BackendComponent
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class BackendComponent extends Component
{
    public int $authId;

    public function __construct()
    {
        $this->authId = Auth::id();
    }
}
