<?php

namespace App\Livewire\Backend\Sliders;

use Livewire\Attributes\Url;
use Livewire\Attributes\Title;
use App\Services\SliderService;
use Livewire\Attributes\Layout;
use App\Traits\BackendFilterTrait;
use Illuminate\Contracts\View\View;
use App\Traits\BackendPaginationTrait;
use App\Livewire\Backend\BackendComponent;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderListPage extends BackendComponent
{
    use BackendPaginationTrait;
    use BackendFilterTrait;

    ## Module props
    public string $module;
    public string $activeItem;

    ## Filter properties
    #[Url(as: 'query', except: '', history: true)]
    public ?string $search = '';
    public array $filter = [];

    ## Query string search
    // protected $queryString = [
    //     'search' => ['except' => ''],
    // ];

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
        $this->filter = $this->filter_default_values();
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

    public function swapOrder(int $modelId, string $type)
    {
        // dd($orderNo, $modelId, $type);
        $targetedModel = $this->sliderService->swapOrder(modelId: $modelId, type: $type);
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

        ## Get the first and last posts, if they exist
        $firstModel = $models->first();
        $lastModel = $models->last();

        ## Check if the collection is empty
        if ($models->isEmpty()) {
            $firstModel = null;
            $lastModel = null;
        }

        return view('livewire.backend.sliders.slider-list-page', compact('models', 'countModel', 'firstModel', 'lastModel'));
    }
}
