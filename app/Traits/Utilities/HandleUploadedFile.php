<?php

namespace App\Traits\Utilities;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait HandleUploadedFile
{
    public function uploadFile(UploadedFile $file, string $folderPrefix): string
    {
        $file_name = $file->getClientOriginalName();
        $file_ext = $file->getClientOriginalExtension();
        $encoded_file_name = md5(time().$file_name).'.'.$file_ext;

        $file->storeAs($folderPrefix, $encoded_file_name);

        return $encoded_file_name;
    }

    public function syncUploadFile(UploadedFile $file, ?string $old_file_name, string $folderPrefix)
    {
        if (! is_null($old_file_name) && Storage::disk('public')->exists("{$folderPrefix}/".$old_file_name)) {
            Storage::disk('public')->delete("{$folderPrefix}/".$old_file_name);
        }

        return $this->uploadFile($file, $folderPrefix);
    }
}
