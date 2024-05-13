<?php

namespace App\Services;

use Exception;
use App\Models\Slider;
use Illuminate\Validation\Rule;
use App\Services\FileUploadService;
use Illuminate\Validation\Rules\File;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderService
{
    protected FileUploadService $fileUploadService;
    public string $disk = 'uploads';
    public string $uploadDirectory = 'sliders';
    public int $maxFileUploadSize = (1024 * 5);
    public array $supportedImgTypes = ['jpg', 'jpeg', 'webp', 'png'];
    public array $imgResizeOptions = [
        'height' => 675,
        'width' => 865,
        'position' => 'center'
    ];


    /**
     * Create a new object instance
     */
    public function __construct()
    {
        $this->fileUploadService = new FileUploadService();
    }

    /**
     * Create new record
     * @param array $inputs [Input properties to create new record]
     * @return mixed
     */
    public function create(array $inputs): mixed
    {
        try {
            $sliderImageTmpFile = $inputs['slider_image'];

            ## Throw exception if no file selected to upload
            if (!$sliderImageTmpFile instanceof TemporaryUploadedFile) {
                throw new Exception(__('translations.nothing_to_upload'));
            }

            ## Upload file to local storage
            $sliderImageHashedName = (string) $this->fileUploadService->setHashedNameForTmpUploadedFile($sliderImageTmpFile, $inputs['user_id']);
            $this->fileUploadService->uploadFilToLocalStorage(uploadDirectory: $this->uploadDirectory, disk: $this->disk, fileName: $sliderImageHashedName, tmpFile: $sliderImageTmpFile);

            ## Resize image using image intervention package
            $this->fileUploadService->resizeImage(uploadDirectory: $this->uploadDirectory, disk: $this->disk, fileName: $sliderImageHashedName, dimensions: $this->imgResizeOptions);

            ## Create new slider
            $inputs['slider_image'] = $sliderImageHashedName;
            return Slider::create($inputs);
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }
    }


    /**
     * Alias of state attributes
     * @return array
     */
    public function validationAttributesSurname()
    {
        return [
            'slider_title' => __('title'),
            'slider_body' => __('body'),
            'slider_image' => __('slider'),
        ];
    }

    /**
     * Validation rules of the component
     * @return array
     */
    public function validationRules()
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
                        ->minWidth($this->imgResizeOptions['width'])
                        ->minHeight($this->imgResizeOptions['height']))
            ],
        ];
    }

    /**
     * Validation error messages for state properties of the component
     * @return array
     */
    public function validationErrorMessages()
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
            'slider_image.dimensions' => __('translations.image_minimum_dimension', ['minHeight' => $this->imgResizeOptions['height'], 'minWidth' => $this->imgResizeOptions['width']]),

        ];
    }
}
