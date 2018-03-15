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

    public function UploadMulFile($data,$fileName,$dir){
        if($data->file($fileName)){
            $url =[];
            foreach ($data->file($fileName) as $key => $file) {
                $origName = $file->getClientOriginalName();
                $file->storeAs('public/'.$dir,time().$origName);
                $url[]= 'storage/'.$dir.'/'.time().$origName;
            }
            return $url;
        }
    }

}