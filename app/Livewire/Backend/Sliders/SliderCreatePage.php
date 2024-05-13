<?php

namespace App\Livewire\Backend\Sliders;

use App\Livewire\Backend\BackendComponent;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use App\Services\SliderService;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rules\File;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

/**
 * SliderCreatePage Component
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderCreatePage extends BackendComponent
{
    use WithFileUploads;

    public int $maxFileUploadSize = (1024 * 5);
    public string $metaTitle = 'sliders';
    public string $activeItem = 'create';
    public bool $displayTmpUploadedImage = false;
    public array $supportedImgTypes = ['jpg', 'jpeg', 'webp', 'png'];
    public int $imgMinHeight;
    public int $imgMinWidth;

    # Services 
    private SliderService $sliderService;

    ## State properties
    public int $user_id;
    #[Validate]
    public string $slider_title = '';
    #[Validate]
    public string $slider_body = '';
    #[Validate]
    public string $slider_link_text = '';
    #[Validate]
    public string $slider_link = '';
    #[Validate]
    public $slider_image = '';
    public bool $is_active = true;

    /**
     * boot method to set initial values
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
    public function mount(): void
    {
        $this->user_id = $this->authId;
        $this->imgMinHeight = $this->sliderService->imgResizeOptions['height'];
        $this->imgMinWidth = $this->sliderService->imgResizeOptions['width'];
    }

    public function rules()
    {
        return [
            'slider_title' => ['required', 'min:10', 'max:30'],
            'slider_body' => ['required', 'min:10', 'max:100'],
            'slider_link' => ['nullable', 'min:10', 'max:100'],
            'slider_link_text' => ["required_with:slider_link", 'nullable', 'string', 'min:2', 'max:20'],
            'slider_image' => [
                'required',
                "max:{$this->maxFileUploadSize}",
                File::image()
                    ->types($this->supportedImgTypes)
                    ->dimensions(Rule::dimensions()
                        ->minWidth($this->imgMinWidth)
                        ->minHeight($this->imgMinHeight))
            ],
        ];
    }

    public function messages()
    {
        return [
            'slider_title.required' => __('can not be empty', [':attribute ']),
            'slider_title.min' => __('minimum character length', [':min', ':attribute']),
            'slider_title.max' => __('maximum character length', [':max', ':attribute']),
            'slider_body.required' => __('can not be empty', [':attribute']),
            'slider_body.min' => __('minimum character length', [':min', ':attribute']),
            'slider_body.max' => __('maximum character length', [':max', ':attribute']),
            'slider_image.required' => __('image required', [':attribute']),
            'slider_image.image' => __('must be an image', [':attribute']),
            'slider_image.mimes' => __('must be of type image', [':attribute']),
            'slider_image.max' =>  __('translations.image_max_size_mb', ['size' => $this->maxFileUploadSize / 1024]),
            'slider_image.dimensions' => __('translations.image_minimum_dimension', ['minHeight' => $this->imgMinHeight, 'minWidth' => $this->imgMinWidth]),

        ];
    }

    public function validationAttributes()
    {
        return [
            'slider_title' => __('title'),
            'slider_body' => __('body'),
            'slider_image' => __('slider'),
        ];
    }

    public function save()
    {
        $validated = $this->validate();
        try {
            $validated['user_id'] = $this->authId;
            $createdModel = $this->sliderService->create($validated);
            $this->resetProps();

            ## Dispatch events
            $this->dispatch('toastAlert', message: __('translations.action_successful'), type: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('toastAlert', message: $th->getMessage(), type: 'error');
        }
    }

    public function updating($property, $value): void
    {
        if ($property == 'slider_image') {
            $uploadedFileExtension = $this->getTmpUploadedFileExtension($value);
            if (in_array($uploadedFileExtension, $this->supportedImgTypes)) {
                $this->displayTmpUploadedImage = true;
            }
        }
    }

    /**
     * getTmpUploadedFileExtension method return file extension from an upload file
     *
     * @param \Livewire\Features\SupportFileUploads\TemporaryUploadedFile $file
     * @return string
     */
    public function getTmpUploadedFileExtension(TemporaryUploadedFile $file): string
    {
        if (!empty($file)) {
            $originalName = $file->getClientOriginalName();
            $parts = explode('-', $originalName);
            $extension = pathinfo(end($parts), PATHINFO_EXTENSION);
            return $extension;
        }
        return 'invalid';
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
    public function resetProps(): void
    {
        $this->reset();
    }

    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    #[Layout('components.backend.layout.backend-layout')]
    #[Title('Sliders')]
    public function render(): View
    {
        return view('livewire.backend.sliders.slider-create-page');
    }
}
