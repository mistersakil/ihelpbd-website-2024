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
    private FileUploadService $fileUploadService;

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

            $this->fileUploadService->upload_file_to_local_storage(directory: 'sliders', disk: 'uploads', fileName: $sliderImageHashedName, tmpFile: $sliderImageTmpFile);

            ## Create new slider
            $inputs['slider_image'] = $sliderImageHashedName;
            return Slider::create($inputs);
        } catch (\Throwable $th) {
        }
    }
}
