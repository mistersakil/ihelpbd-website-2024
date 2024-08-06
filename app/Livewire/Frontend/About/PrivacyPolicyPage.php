<?php

namespace App\Livewire\Frontend\About;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class PrivacyPolicyPage extends Component
{
    public string $metaTitle = 'ihelpkl privacy policy';
    public string $module = 'privacy policy';


    /**
     * return view
     */
    #[Title('Privacy Policy')]
    public function render(): View
    {
        return view('livewire.frontend.about.privacy-policy-page');
    }
}
