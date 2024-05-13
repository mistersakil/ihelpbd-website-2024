<?php

namespace App\Services;

use App\Models\Slider;
use App\Services\FileUploadService;

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
        $sliderImageTmpFile = $inputs['slider_image'];
        $sliderImageHashedName = $this->fileUploadService->setHashedNameForTmpUploadedFile($sliderImageTmpFile, 1);
        $inputs['slider_image'] = $sliderImageHashedName;
        return Slider::create($inputs);
    }
}
