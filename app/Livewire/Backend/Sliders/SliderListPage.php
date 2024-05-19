<?php

namespace App\Livewire\Backend\Sliders;

use Livewire\Attributes\Title;
use App\Services\SliderService;
use Livewire\Attributes\Layout;
use Illuminate\Contracts\View\View;
use App\Traits\BackendPaginationTrait;
use App\Livewire\Backend\BackendComponent;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderListPage extends BackendComponent
{
    use BackendPaginationTrait;

    public string $module;
    public string $activeItem;

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
    public function  mount(): void
    {
        $this->module = __('sliders');
        $this->activeItem = __('list');
    }

    /**
     * Delete model from database
     * @return void
     */
    public function  deleteModel($modelId): void
    {
        try {
            $this->sliderService->deleteModel($modelId);
            ## Dispatch events
            $this->dispatch('toastAlert', message: __('action successful'), type: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('toastAlert', message: $th->getMessage(), type: 'error');
        }
    }

    public function swapOrder(int $modelId, int $order)
    {
        dd($order, $modelId);
    }

    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    #[Layout('components.backend.layout.backend-layout')]
    #[Title('Sliders List')]
    public function render(): View
    {
        $models = $this->sliderService->getAllModel(paginate: 5);
        $countModel = $this->sliderService->countAllModel();

        return view('livewire.backend.sliders.slider-list-page', compact('models', 'countModel'));
    }
}
