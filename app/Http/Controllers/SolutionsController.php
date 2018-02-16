<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdService;
use App\Services\PageBannerService;
use App\Services\SolutionTypeService;
use App\Services\ProductService;
use Illuminate\Support\Facades\Route;
class SolutionsController extends Controller
{
    protected $adService,$pageBannerService,$solutionTypeService,$productService;
    protected $route,$page_id,$content,$banner,$solutions,$abouts;
    public function __construct(AdService $adService,PageBannerService $pageBannerService,SolutionTypeService $solutionTypeService,ProductService $productService)
    {
        $this->adService = $adService;
        $this->pageBannerService =  $pageBannerService;
        $this->solutionTypeService = $solutionTypeService;
        $this->productService = $productService;

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
          return view('front-end.solutions',compact('banner','content','solutions','abouts'));
    }
    public function show($id){

        $content = $this->content;
        $banner = $this->banner;
        $solutions = $this->solutions;
        $abouts = $this->abouts;

        $solution = $this->solutionTypeService->getSolutionType($id);
        $products = $this->productService->getAllActiveProductsByParentId($id);
             //$product_type = $product->getProductSolutionId()->getProductName();
       return view('front-end.solutionsview',compact('banner','content','solutions','products','abouts','solution'));

    }

}
