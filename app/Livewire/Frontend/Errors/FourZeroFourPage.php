<?php

namespace App\Livewire\Frontend\Errors;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Contracts\View\View;

class FourZeroFourPage extends Component
{
    public string $metaTitle = 'page not found';
    public string $module = 'four zero four numeric';

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Title('404 Page Not Found')]
    public function render(): View
    {
        return view('livewire.frontend.errors.four-zero-four-page');
    }
}
