<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageHelper
{
    public static function instance()
    {
        return new self();
    }

    /**
     * Uploads the file in file system and returns the path. (upload)
     *
     * @param UploadedFile $file The file to be uploaded.
     * @param string|null $filePath The path where the file should be uploaded.
     * @param string|null $fileName The name of the file.
     *
     * @return string
     */
    public function upload(UploadedFile $file, string $filePath = null, string $fileName = null): string
    {
        $filePath = $filePath ?? 'images';
        return $this->putFile($file, $filePath, $fileName);
    }

    /**
     * @param UploadedFile $file
     * @param string $filePath
     * @param string|null $fileName
     *
     * @return string
     */
    public function putFile(UploadedFile $file, string $filePath, string $fileName = null): string
    {
        $extension = $file->getClientOriginalExtension();
        $newFileName = time() . '.' . $extension;
        $fileName = $fileName ?: $newFileName;
        return $file->storeAs($filePath, $fileName, 'pubmedia');
    }

    /**
     * Deletes image from the file system. (delete)
     *
     * @param string $filePath
     *
     * @return void
     */
    public function deleteImage(string $filePath): void
    {
        Storage::disk('pubmedia')->delete($filePath);
    }
}
