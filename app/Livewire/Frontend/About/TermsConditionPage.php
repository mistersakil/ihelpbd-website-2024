<?php

namespace App\Livewire\Frontend\About;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class TermsConditionPage extends Component
{
    public string $metaTitle = 'ihelpkl terms conditions';
    public string $module = 'terms conditions';
    /**
     * return view
     */
    #[Title('Terms & Conditions')]
    public function render(): View
    {
        return view('livewire.frontend.about.terms-condition-page');
    }
}
