<?php

namespace App\Livewire\Backend\Sliders;

use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use App\Services\SliderService;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use App\Services\FileUploadService;
use Illuminate\Contracts\View\View;
use App\Livewire\Backend\BackendComponent;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderEditPage extends BackendComponent
{
    use WithFileUploads;

    public string $module;
    public string $activeItem;
    public bool $displayTmpUploadedImage = false;
    public array $supportedImgTypes;
    public int $maxFileUploadSize;
    public int $imgMinHeight;
    public int $imgMinWidth;
    public string $sliderExistingImg;
    public string $isActiveText;

    # Services 
    private SliderService $sliderService;
    private FileUploadService $fileUploadService;

    ## State properties
    public int $user_id;
    public int $id;
    #[Validate]
    public string $slider_title;
    #[Validate]
    public string $slider_body;
    #[Validate]
    public string $slider_link_text;
    #[Validate]
    public string $slider_link;
    #[Validate]
    public int $order = 0;
    #[Validate]
    public bool $is_active;
    public $slider_image;

    /**
     * Create a new component instance
     *
     * @return void
     */
    public function boot(): void
    {
        $this->sliderService = new SliderService();
        $this->fileUploadService = new FileUploadService();
    }

    /**
     * Create a new component instance.
     * @return void
     */
    public function mount(int $id): void
    {
        $this->id = $id;
        $this->module = __('sliders');
        $this->activeItem = __('create');

        $this->user_id = $this->authId;
        $this->imgMinHeight = $this->sliderService->imgResizeOptions['height'];
        $this->imgMinWidth = $this->sliderService->imgResizeOptions['width'];
        $this->maxFileUploadSize = $this->sliderService->maxFileUploadSize;
        $this->supportedImgTypes = $this->sliderService->supportedImgTypes;

        $this->setStateProps();
    }

    /**
     * Set model state props
     * @return void
     */
    public function setStateProps()
    {
        $model = $this->sliderService->getModelById($this->id);

        $this->user_id = $model->user_id;
        $this->slider_title = $model->slider_title;
        $this->slider_body = $model->slider_body;
        $this->slider_link_text = $model->slider_link_text;
        $this->slider_link = $model->slider_link;
        $this->user_id = $model->user_id;
        $this->order = $model->order;
        $this->is_active = (bool) $model->is_active;
        $this->slider_image = "";
        $this->sliderExistingImg = $model->slider_image;
        $this->isActiveText = $this->is_active ? __('active') : __('inactive');
    }
    /**
     * Validation rules of the component
     * @return array
     */
    public function rules()
    {
        return $this->sliderService->validationRules(isSometimes: true);
    }


    /**
     * Validation error messages for state properties of the component
     * @return array
     */
    public function messages()
    {
        return $this->sliderService->validationErrorMessages();
    }

    /**
     * Alias of state attributes
     * @return array
     */
    public function validationAttributes()
    {
        return $this->sliderService->validationAttributesSurname();
    }

    /**
     * Save new record
     * @return void
     */
    public function save(): void
    {
        $validated = $this->validate();
        try {
            $validated['user_id'] = $this->authId;
            $validated['sliderExistingImg'] = $this->sliderExistingImg;
            $this->sliderService->updateModel(inputs: $validated, id: $this->id);
            $this->resetStateProps();

            ## Dispatch events
            $this->dispatch('toastAlert', message: __('action successful'), type: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('toastAlert', message: $th->getMessage(), type: 'error');
        }
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
        if ($property == 'slider_image') {
            $uploadedFileExtension = $this->fileUploadService->getTmpUploadedFileExtension($value);
            if (in_array($uploadedFileExtension, $this->supportedImgTypes)) {
                $this->displayTmpUploadedImage = true;
            }
        }
        if ($property == 'is_active') {
            $this->isActiveText = $value ? __('active') : __('inactive');
        }
    }

    /**
     * Delete temporary uploaded image
     *
     * @param \Livewire\Features\SupportFileUploads\TemporaryUploadedFile $file
     * @return string
     */
    public function deleteTmpUploadedImg(): void
    {
        $this->reset('slider_image');
        $this->resetValidation('slider_image');
        $this->displayTmpUploadedImage = false;
    }

    /**
     * Resets component all state properties
     * @return void
     */
    public function resetStateProps(): void
    {
        $this->resetValidation();
        $this->setStateProps();
    }

    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    #[Layout('components.backend.layout.backend-layout')]
    #[Title('Sliders Create')]
    public function render(): View
    {
        return view('livewire.backend.sliders.slider-edit-page');
    }
}
