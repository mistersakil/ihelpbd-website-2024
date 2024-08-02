<?php

namespace App\Livewire\Frontend\Solutions;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SolutionListPage extends Component
{
    public string $metaTitle = 'solution we provide';
    public string $module = 'solutions';


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Title('Solutions')]
    public function render(): View
    {
        return view('livewire.frontend.solutions.solution-list-page');
    }
}
