<?php

namespace App\Livewire\Frontend\Clear;

use App\Services\AppService;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class Clear extends Component
{
    public string $metaTitle = 'cache';
    public string $module = 'cache';

    protected AppService $appService;

    public function boot()
    {
        $this->appService = new AppService;
    }
    /**
     * To initialize value just for once
     * @return void
     */
    public function mount()
    {
        $this->clear();
    }

    /**
     * Clear application cache
     * @return void
     */
    public function clear(): void
    {
        $this->appService->clearCache();
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    #[Title('Clear Cache')]
    public function render(): View
    {
        return view('livewire.frontend.clear.clear');
    }
}