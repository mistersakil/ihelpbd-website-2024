<?php

namespace App\Livewire\Frontend\Solutions;

use Livewire\Component;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SolutionListPage extends Component
{
    public string $metaTitle = 'solution list';
    public string $module = 'solutions';

    public function render()
    {
        return view('livewire.frontend.solutions.solution-list-page')->title($this->metaTitle);
    }
}
