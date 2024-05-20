<?php

namespace App\Livewire\Backend\Addons;

use Livewire\Component;
use App\Services\SliderService;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class IsActiveComponent extends Component
{
    public bool $isActive;
    public int $modelId;
    public string $statusText;

    # Services 
    private SliderService $sliderService;


    /**
     * Create a new component instance
     *
     * @return void
     */
    public function boot(): void
    {
        $this->sliderService = new SliderService();
    }

    /**
     * Create a new component instance.
     * @return void
     */
    public function mount($modelId, $isActive)
    {
        $this->modelId = (int) $modelId;
        $this->isActive = (bool) $isActive;
        $this->statusText = __("active");

        if ($this->isActive != 1) {
            $this->statusText = __("inactive");
            $this->isActive = 0;
        }
    }


    /**
     * Called before updating a component property
     *
     * @param $property [Dirty state property]
     * @param $value [Dirty state property value]
     * @return void
     */
    public function changeStatus(): void
    {
        dd($this->modelId, $this->isActive);
        try {
            $this->sliderService->changeStatus(id: $this->modelId, isActive: $this->isActive);
            ## Dispatch events
            $this->dispatch('toastAlert', message: __('action successful'), type: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('toastAlert', message: $th->getMessage(), type: 'error');
        }
    }


    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.backend.addons.is-active-component');
    }
}
