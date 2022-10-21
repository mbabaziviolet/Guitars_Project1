<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;

class ImageUploadHelper extends Model
{
    use HasFactory;

    public static function uploadImage($file,$destinationfolder){
        

        if(empty($file)){
            return NULL;
        }else{
            $destinationPath = public_path().'/storage/'.$destinationfolder;
            if(!File::isDirectory($destinationPath)){
                File::makeDirectory($destinationPath, 0777, true, true);
            }
            //image extention
            $image_extention = $file->getClientOriginalExtension();

            $image_url =\Str::random(12).'.'.$image_extention;

            $file->move($destinationPath,$image_url);
            
            return $image_url;
        }
    }

    //funtion for imageUpload
    public static function imageUpload($file)
    {
        //using the $fileName variable t store images
        $fileName = time().$file->getClientOriginalName();
        $path = $file->storeAs('images', $fileName,'public');
        $requestData["image"] = '/storage/'.$path;

        return $fileName ;
    }
}
