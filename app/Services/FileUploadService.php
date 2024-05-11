<?php

namespace App\Services;

use Exception;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

/**
 * FileUploadService service class
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class FileUploadService
{
    /**
     * resize_image method resize images using image intervention package
     * @param string $file_absolute_path
     * @return void
     */
    public function resize_image(string $file_absolute_path): void
    {
        $manager = new ImageManager(Driver::class);
        $image = $manager->read($file_absolute_path);
        $image->cover(width: 200, height: 200, position: 'center');
        $image->save();
    }

    /**
     * generate_file_path method os relevant file path
     * @param string $disk
     * @param string $file_name     
     * @return string 
     */
    public function generate_file_path(string $disk = 'public', string $file_name): string
    {
        return _os_relevant_file_upload_path(Storage::disk($disk)->path($file_name));
    }


    /**
     * remove_files_from_storage  method removes files from local storage
     * @param array $files []
     * @param string $file default empty
     * @param string $disk default 'attachments'
     * @param string $child_directory default empty
     * @return mixed 
     * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
     */
    public function remove_files_from_storage(array $files = [], string $file = '', string $disk = 'attachments', string $child_directory = ''): mixed
    {
        if (count($files) <= 0 && empty($file)) {
            throw new Exception(_static_strings('nothing_to_delete'));
        }
        if (count($files)) {
            foreach ($files as $item) {
                $this->delete_file(disk: $disk, file: "$child_directory/$item");
            }
        }
        if (!empty($file)) {
            $this->delete_file(disk: $disk, file: "$child_directory/$file");
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
     * process_attachment_inputs method process attachment inputs
     * @param string $file
     * @param string $user_id
     * @return array
     * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
     */
    public function process_attachment_inputs($tmp_file, $user_id): array
    {
        $file_hash_name = $tmp_file->hashName();
        $extension = $tmp_file->getClientOriginalExtension();
        $file_name = _str_conversion(pathinfo($tmp_file->getClientOriginalName(), PATHINFO_FILENAME), 'strtolower', true, false);
        $original_file_name = _str_conversion($file_name, 'strtolower', false, true) . ".{$extension}";
        $file = "{$user_id}-{$file_hash_name}";

        $single_attachment_inputs = [
            "file" => $file,
            "extension" => $extension,
            "original_file_name" => $original_file_name,
        ];
        return is_array($single_attachment_inputs) ? $single_attachment_inputs : [];
    }

    /**
     * process_attachment_inputs method process attachment inputs
     * @param string $disk
     * @param string $directory
     * @param $tmp_file
     * @param string $file_name
     * @return mixed
     * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
     */
    public function upload_file_to_local_storage(string $disk = 'attachments', string $directory = '', $tmp_file, string $file_name): mixed
    {
        $final_directory = "public/$disk/$directory/";

        if (!Storage::directories($final_directory)) {
            Storage::makeDirectory($final_directory, 0775, true);
        }
        $tmp_file->storeAs($directory, $file_name, $disk);

        return true;
    }
}
