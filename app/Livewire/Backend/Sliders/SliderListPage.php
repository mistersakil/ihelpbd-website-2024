<?php

namespace App\Livewire\Backend\Sliders;

use App\Livewire\Backend\BackendComponent;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Services\SliderService;
use Livewire\Attributes\Layout;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderListPage extends BackendComponent
{
    use WithPagination;

    public string $module;
    public string $activeItem;

    public int $pageNumber = 1;

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
     * Called before updating a component property
     *
     * @param $property [Dirty state property]
     * @param $value [Dirty state property value]
     * @return void
     */
    public function updating($property, $value): void
    {
        if ($property == 'pageNumber') {
            $this->pageNumber = $value == null || $value < 1 ? 1 : $value;
            $this->setPage($this->pageNumber);
        }
    }

    public function updatedPaginators($page, $pageName)
    {
        $this->pageNumber = $page;
    }

    /**
     * Using custom pagination views
     * @return string
     */
    public function paginationView(): string
    {
        return 'livewire.backend.addons.bootstrap-pagination-component';
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
