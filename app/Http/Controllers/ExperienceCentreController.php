<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\AdService;
use App\Services\PageBannerService;
use App\Services\SolutionTypeService;
use App\Services\ProductService;
use Illuminate\Support\Facades\Route;
use App\Services\VideosService;
use App\Services\CategoryService;
class ExperienceCentreController extends Controller
{
    protected $adService,$pageBannerService,$solutionTypeService,$productService,$videoService,$categoryService;
    protected $route,$page_id,$content,$banner,$solutions,$abouts,$video;
    public function __construct(AdService $adService,PageBannerService $pageBannerService,SolutionTypeService $solutionTypeService,ProductService $productService,VideosService $videosService,CategoryService $categoryService)
    {
        $this->adService = $adService;
        $this->pageBannerService =  $pageBannerService;
        $this->solutionTypeService = $solutionTypeService;
        $this->productService = $productService;
        $this->videoService = $videosService;
        $this->categoryService = $categoryService;

        $this->route = Route::current();
        $route_name = strpos($this->route->getName(), ".") !== false?substr($this->route->getName(),0 ,strpos($this->route->getName(), ".")):$this->route->getName();

        $this->page_id = $this->pageBannerService->getPageId($route_name);
        $this->content = $this->pageBannerService->getPageContent($this->page_id);
        $this->banner = $this->pageBannerService->getPageBanner($this->page_id);
        $this->solutions = $this->solutionTypeService->getIsActive();

        $this->page_id = $this->pageBannerService->getPageId('about-GCR');
        $this->abouts = $this->pageBannerService->getPageContent($this->page_id);
    }

    public function index()
    {
        $content = $this->content;
        $banner = $this->banner;
        $solutions = $this->solutions;
        $abouts = $this->abouts;
        //$videos = $this->videoService->getActiveVideosByLimit(3);
        $categories = $this->categoryService->getAllActiveCategory();
        return view('front-end.experiencecentre',compact('banner','content','solutions','abouts','categories'));
    }

    public function show($id){

        $content = $this->content;
        $banner = $this->banner;
        $solutions = $this->solutions;
        $abouts = $this->abouts;
        $category = $this->categoryService->findCategory($id);
        $videos = $this->videoService->getVideoByCatId($id);
        return view('front-end.exeperiencecentres',compact('banner','content','solutions','abouts','videos','category'));

    }
}
