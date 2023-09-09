<?php

namespace App\Traits;


trait saveImagesTrait
{
    public function saveImage($photo, $folder)
    {   
        foreach($photo as $value){
            $file_ext = $value->getClientOriginalName();
            $imageName = time() .'.'.$file_ext;
            $value->move($folder, $imageName);
            $name[] = $imageName;
        }
        return $name;
    }
}
