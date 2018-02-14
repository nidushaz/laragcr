<?php
namespace App\Services\Impl;
use App\Services\PageBannerService;
use App\Repositories\PageBannerRepo;

class PageBannerServiceImpl implements  PageBannerService
{


    private $pageBannerRepo;
    public function __construct(PageBannerRepo $pageBannerRepo)
    {
        $this->pageBannerRepo = $pageBannerRepo;
    }

    public function getPageContent($id)
    {
        return $this->pageBannerRepo->findPageContent($id);
    }

    public function saveData($data)
    {
        return $this->pageBannerRepo->saveData($data);
    }

    public function getPageBanner($id)
    {
        return $this->pageBannerRepo->findBannerContent($id);
    }

    public function getPageId($page)
    {
        return $this->pageBannerRepo->getPageId($page);
    }


}