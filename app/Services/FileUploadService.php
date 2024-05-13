<?php

namespace App\Services;

use Exception;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class FileUploadService
{
    /**
     * resizeImage method resize images using image intervention package
     * @param string $fileAbsolutePath
     * @return void
     */
    public function resizeImage(string $fileAbsolutePath): void
    {
        $manager = new ImageManager(Driver::class);
        $image = $manager->read($fileAbsolutePath);
        $image->cover(width: 200, height: 200, position: 'center');
        $image->save();
    }

    /**
     * generateFilePath method os relevant file path
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
     * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
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
     * setHashedNameForTmpUploadedFile method process tmp uploaded file for single model
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
            $fileName = _str_conversion(pathinfo($tmpFile->getClientOriginalName(), PATHINFO_FILENAME), 'strtolower', true, false);
            $original_fileName = _str_conversion($fileName, 'strtolower', false, true) . ".{$extension}";
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
     * upload_file_to_local_storage method process attachment inputs
     * @param string $disk
     * @param string $directory
     * @param $tmpFile
     * @param string $fileName
     * @return mixed
     * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
     */
    public function upload_file_to_local_storage(string $disk = 'uploads', string $directory = '', $tmpFile, string $fileName): mixed
    {
        $finalDirectory = "public/$disk/$directory/";

        if (!Storage::directories($finalDirectory)) {
            Storage::makeDirectory($finalDirectory, 0775, true);
        }
        $tmpFile->storeAs($directory, $fileName, $disk);

        return true;
    }
}
