<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 13/02/2018
 * Time: 5:25 PM
 */

namespace App\Services;


interface VideosService
{
    public function getAllVideos();
    public function addVideo($data);
    public function updateVideo($data,$id);
    public function getActiveVideos();
    public function getVideoById($id);
    public function setArray($data);
    public function removeVideo($id);
}