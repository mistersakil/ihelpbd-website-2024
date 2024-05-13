<?php

namespace App\Services;

use Exception;
use App\Models\Slider;
use App\Services\FileUploadService;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderService
{
    protected FileUploadService $fileUploadService;
    public string $disk = 'uploads';
    public string $uploadDirectory = 'sliders';
    public array $imgResizeOptions = [
        'height' => 675,
        'width' => 865,
        'position' => 'center'
    ];


    public function __construct()
    {
        $this->fileUploadService = new FileUploadService();
    }

    public function create(array $inputs)
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
        }
    }
}
