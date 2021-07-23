<?php

namespace App\Http\Controllers;

use App\Models\Shared\FileType;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    use FileUpload; //Using our created Trait to access in trait method

    public function store(Request $request) 
    {
      $request->validate([
       'file_upload' => 'required',
       'file_no' => 'required',
       'file_type_id' => 'required',
     ]);

     $file_upload_array = $request->file_upload;
     $file_no_array = $request->file_no;
     $file_type_id_array = $request->file_type_id;


     if ($request->hasFile('file_upload')) {
     foreach($file_upload_array as $index=>$file){
        $file_no = $file_no_array[$index];
        $file_type_id = $file_type_id_array[$index];
        $file_type_name = FileType::find($file_type_id);
        $filePath = $this->Upload($file, $file_no, $file_type_name, ); //passing parameter to our trait method one after another using foreach loop

       }
     }

     return redirect()->back();
    }

    public function getFileIndex() {
        $index = FileType::where('file_no')
    }
}
