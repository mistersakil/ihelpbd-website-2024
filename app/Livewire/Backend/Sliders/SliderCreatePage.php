<?php

namespace App\Livewire\Backend\Sliders;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Contracts\View\View;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

/**
 * SliderCreatePage Component
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderCreatePage extends Component
{
    use WithFileUploads;

    private int $maxFileUploadSize = (1024 * 2);
    public string $metaTitle = 'sliders';
    public string $activeItem = 'create';
    public bool $displayTmpUploadedImage = false;
    public array $supportedImgTypes = ['
    jpg', 'jpeg', 'webp', 'png'];

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

    public function rules()
    {
        return [
            'slider_title' => ['required', 'min:10', 'max:30'],
            'slider_body' => ['required', 'min:10', 'max:100'],
            'slider_link' => ['nullable', 'min:10', 'max:100'],
            'slider_link_text' => ["required_with:slider_link", 'nullable', 'string', 'min:2', 'max:20'],
            'slider_image' => ['image', 'mimes:' . implode(',', $this->supportedImgTypes), "max:{$this->maxFileUploadSize}"],
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
            'slider_image.image' => __('must be an image', [':attribute']),
            'slider_image.mimes' => __('must be of type image', [':attribute']),
            'slider_image.max' => __('max file size', [':attribute', ':max']),

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

        dd($validated);
        // Slider::create($validated);

        return redirect()->to('/posts');
    }

    public function updating($property, $value): void
    {
        // dd($property, $value);
        // dd($property, $this->getFileExtension($value));

        if ($property == 'slider_image') {
            $fileExtension = $this->getFileExtension($value);
            if (in_array($fileExtension, $this->supportedImgTypes)) {
                $this->displayTmpUploadedImage = true;
            }
        }
    }

    /**
     * getFileExtension method return file extension from an upload file
     *
     * @param \Livewire\Features\SupportFileUploads\TemporaryUploadedFile $file
     * @return string
     */
    public function getFileExtension(TemporaryUploadedFile $file): string
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
