<?php

namespace App\Livewire\Backend\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Contracts\View\View;
use App\Livewire\Backend\BackendComponent;
use Livewire\Attributes\Title;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class DashboardPage extends BackendComponent
{

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Layout('components.backend.layout.backend-layout')]
    #[Title('Dashboard')]
    public function render(): View
    {
        return view('livewire.backend.dashboard.dashboard-page');
    }
}
