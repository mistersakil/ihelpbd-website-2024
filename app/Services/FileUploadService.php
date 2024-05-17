<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Interfaces\ImageInterface;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class FileUploadService
{
    /**
     * Resize uploaded image using image intervention package
     * @param string $fileAbsolutePath
     * @return void
     */
    public function resizeImage(string $disk, string $uploadDirectory, string $fileName, array $dimensions): void
    {

        $fileAbsolutePath = $this->generateFilePath(disk: $disk, fileName: "{$uploadDirectory}/{$fileName}");

        @['height' => $height, 'width' => $width, 'position' => $position] = $dimensions;
        $manager = new ImageManager(Driver::class);
        $image = $manager->read($fileAbsolutePath);

        $image->cover(width: $width ?? 200, height: $height ?? 200, position: $position ?? 'center')
            ->save();
    }

    /**
     * Generate os relevant file path
     * @param string $disk
     * @param string $fileName     
     * @return string 
     */
    public function generateFilePath(string $disk = 'public', string $fileName): string
    {
        return osRelevantFileUploadPath(Storage::disk($disk)->path($fileName));
    }


    /**
     * removeFilesFromStorage  method removes files from local storage
     * @param array $files []
     * @param string $file default empty
     * @param string $disk default 'attachments'
     * @param string $childDirectory default empty
     * @return mixed 
     */
    public function removeFilesFromStorage(array $files = [], string $file = '', string $disk = 'attachments', string $childDirectory = ''): mixed
    {
        if (count($files) <= 0 && empty($file)) {
            throw new Exception(__('translations.nothing_to_delete'));
        }
        if (count($files)) {
            foreach ($files as $item) {
                $this->delete_file(disk: $disk, file: "$childDirectory/$item");
            }
        }
        if (!empty($file)) {
            $this->delete_file(disk: $disk, file: "$childDirectory/$file");
        }
        return true;
    }


    /**
     * delete_file  method permanently delete file from local storage     
     * @param string $file
     * @param string $disk
     * @return bool <true:false>
     * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
     */
    protected function delete_file($disk, $file): bool
    {
        if (Storage::disk($disk)->exists($file)) {
            return Storage::disk($disk)->delete($file);
        }
        return false;
    }

    /**
     * Generate hashed name and its other attributes of tem uploaded image
     * @param string $file [tmp uploaded file]
     * @param string $user_id [session user who wants to create record]
     * @return array
     * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
     */
    public function setHashedNameForTmpUploadedFile($tmpFile, $user_id, $isSingle = true): mixed
    {
        try {

            $file_hash_name = $tmpFile->hashName();
            $extension = $tmpFile->getClientOriginalExtension();
            $fileName = strConversion(pathinfo($tmpFile->getClientOriginalName(), PATHINFO_FILENAME), 'strtolower', true, false);
            $original_fileName = strConversion($fileName, 'strtolower', false, true) . ".{$extension}";
            $file = "{$user_id}-{$file_hash_name}";

            if ($isSingle) return $file;

            $single_attachment_inputs = [
                "file" => $file,
                "extension" => $extension,
                "original_fileName" => $original_fileName,
            ];
            return $single_attachment_inputs;
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }
    }

    /**
     * Move tmp uploaded file to local storage
     * @param string $disk
     * @param string $uploadDirectory
     * @param $tmpFile
     * @param string $fileName
     * @return mixed
     * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
     */
    public function uploadFilToLocalStorage(string $disk = 'uploads', string $uploadDirectory = '', $tmpFile, string $fileName): bool
    {
        $finalDirectory = "public/$disk/$uploadDirectory/";

        if (!Storage::directories($finalDirectory)) {
            Storage::makeDirectory($finalDirectory, 0775, true);
        }
        $tmpFile->storeAs($uploadDirectory, $fileName, $disk);

        return true;
    }


    /**
     * getTmpUploadedFileExtension method return file extension from an tmp uploaded file
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
     * Create new encoded jpeg image with given dimension using intervention package
     *
     * @param int $width
     * @param int $height
     * @return string $imgFileName
     */
    public function createNewJpgImage(int $width = 1000, int $height = 1000): string
    {

        $manager = new ImageManager(Driver::class);
        $image = $manager->create($width, $height)->fill(generateHexColor());
        $imgFileName = Str::random(20) . '.jpg';
        Storage::disk('uploads')->put("sliders/{$imgFileName}", $image->toJpeg());

        return $imgFileName;
    }
}
