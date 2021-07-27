<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

trait FileUpload
{
    public function Upload($file, $file_name, $staff_code, $file_type)
    {
        $file_extension = $file->getClientOriginalExtension();
        $file_url = $file->storeAs(
            'public/uploads/' . $staff_code . '/' . $file_type, $file_name . '.' . $file_extension
        );
        $file_path = str_replace('public/', 'storage/', $file_url);
        return $file_path;
    }

}