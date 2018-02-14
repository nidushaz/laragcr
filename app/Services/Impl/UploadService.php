<?php

namespace App\Services\Impl;


class UploadService
{
    public function UploadFile($data,$fileName,$dir){
        $data->file($fileName);
        if($data->hasFile($fileName)){
            $file = $data->$fileName->getClientOriginalName();
            if($data->$fileName->storeAs('public/'.$dir,time().$file)){
                $url = 'storage/'.$dir.time().$file;
                return $url;
            }else{
                return false;
            }
        }else{
            return false;
        }

    }

}