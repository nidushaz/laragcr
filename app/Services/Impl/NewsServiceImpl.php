<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 13/02/2018
 * Time: 11:12 AM
 */

namespace App\Services\Impl;
use App\Services\NewsService;
use App\Repositories\NewsRepo;
class NewsServiceImpl implements NewsService
{
    protected $newsRepo;
    public function __construct(NewsRepo $newsRepo)
    {
        $this->newsRepo = $newsRepo;
    }

    public function addNews($data)
    {
        return $this->newsRepo->addNews($data);
    }

    public function getAllNews()
    {
        return $this->newsRepo->getAllNews();
    }

    public function getActiveNews($id)
    {
        return $this->newsRepo->getActiveNews($id);
    }

    public function updateNews($data,$id)
    {
        return $this->newsRepo->updateNews($data,$id);
    }

    public function deleteImgMedia($id)
    {
        return $this->newsRepo->deleteImgMedia($id);
    }

    public function getAllActiveNews()
    {
        return $this->newsRepo->getAllActiveNews();
    }
}
