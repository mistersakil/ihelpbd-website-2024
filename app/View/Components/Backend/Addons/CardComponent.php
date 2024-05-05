<?php

namespace App\View\Components\Backend\Addons;


use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * CardComponent Component
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */

class CardComponent extends Component
{
    /**
     * Create a new component instance.
     * @param string $card_title 'default'
     * @param string $card_icon 'user'     
     * @return void
     */
    public function __construct(public string $cardTitle = '', public string $cardIcon = '')
    {
        $this->cardTitle = $cardTitle;
        $this->cardIcon = _icons($cardIcon);
    }

    /**
     * Get the view / contents that represent the component.
     * @return View
     */
    public function render(): View
    {
        return view('components.backend.addons.card-component');
    }
}
