<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait FileUpload
{
    public function Upload($file, $file_no, $file_type, $file_index) // Taking input image as parameter
    {
        $ext = strtolower($file->getClientOriginalExtension()); // You can use also getClientOriginalName()
        $full_name = $file_no . '_' . $file_type . '_' . $file_index . $ext;
        $upload_path = "uploads/$file_type/" ;    //Creating Sub directory in Public folder to put image
        $file_url = $upload_path.$full_name;
        $success = $file->move($upload_path,$full_name);

        return $file_url; // Just return image
    }
}