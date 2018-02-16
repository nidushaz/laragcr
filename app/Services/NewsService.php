<?php
namespace App\Services;


interface NewsService
{
    public function getAllNews();
    public function addNews($data);
    public function updateNews($data,$id);
    public function getActiveNews($id);
    public function deleteImgMedia($id);
}