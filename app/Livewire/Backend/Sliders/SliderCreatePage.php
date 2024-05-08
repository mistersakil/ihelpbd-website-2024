<?php

namespace App\Livewire\Backend\Sliders;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Validator;

/**
 * SliderCreatePage Component
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderCreatePage extends Component
{
    use WithFileUploads;

    public string $metaTitle = 'sliders';
    public string $activeItem = 'create';

    #[Validate]
    public string $slider_title = '';
    #[Validate]
    public string $slider_body = '';
    #[Validate]
    public string $slider_link_text = '';
    #[Validate]
    public string $slider_link = '';

    public $slider_image = '';

    public bool $is_active = true;

    public function rules()
    {

        return [
            'slider_title' => ['required', 'min:10', 'max:30'],
            'slider_body' => ['required', 'min:10', 'max:100'],
            'slider_link' => ['nullable', 'min:10', 'max:100'],
            'slider_link_text' => ["required_with:slider_link", 'nullable', 'string', 'min:2', 'max:20'],

        ];
    }

    public function messages()
    {
        return [
            'slider_title.required' => __(':attribute can not be empty'),
            'slider_title.min' => __('minimum character length', [':min', ':attribute']),
            'slider_title.max' => __('maximum character length', [':max', ':attribute']),
            'slider_body.required' => __(':attribute can not be empty'),
            'slider_body.min' => __('minimum character length', [':min', ':attribute']),
            'slider_body.max' => __('maximum character length', [':max', ':attribute']),

        ];
    }

    public function validationAttributes()
    {
        return [
            'slider_title' => __('title'),
            'slider_body' => __('body'),
        ];
    }

    public function save()
    {
        $validated = $this->validate();

        dd($validated);
        // Slider::create($validated);

        return redirect()->to('/posts');
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
