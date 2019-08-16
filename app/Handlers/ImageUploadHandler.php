<?php

namespace App\Handlers;

use  Illuminate\Support\Str;

class ImageUploadHandler
{
    // only allow this file type
    protected $allowed_ext = ["png", "jpg", "gif", 'jpeg'];
    
    public function save($file, $folder, $file_prefix)
    {
        // uploads/images/avatars/201709/21/
        // standard file name
        $folder_name = "uploads/images/$folder/" . date("Ym/d", time());
        
        // address
        // such as：/home/vagrant/Code/larabbs/public/uploads/images/avatars/201709/21/
        $upload_path = public_path() . '/' . $folder_name;
        
        // ensure the file name is correct
        $extension = strtolower($file->getClientOriginalExtension()) ?: 'png';
        
        // attach the file name
        // such as：1_1493521050_7BVc9v9ujP.png
        $filename = $file_prefix . '_' . time() . '_' . Str::random(10) . '.' . $extension;
        
        // if the file type is wrong than cutting
        if ( ! in_array($extension, $this->allowed_ext)) {
            return false;
        }
        
        // store the file 
        $file->move($upload_path, $filename);
        
        return [
            'path' => config('app.url') . "/$folder_name/$filename"
        ];
    }
}