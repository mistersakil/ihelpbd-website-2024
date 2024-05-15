<?php

namespace App\Livewire\Backend\Sliders;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Services\SliderService;
use Livewire\Attributes\Layout;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderListPage extends Component
{
    use WithPagination;

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
     * Using custom pagination views
     * @return string
     */
    public function paginationView(): string
    {
        return 'livewire.livewire.backend.addons.bootstrap-pagination-component';
    }

    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    #[Layout('components.backend.layout.backend-layout')]
    #[Title('Sliders List')]
    public function render(): View
    {
        $models = $this->sliderService->getAll(paginate: 1);
        return view('livewire.backend.sliders.slider-list-page', compact('models'));
    }
}
