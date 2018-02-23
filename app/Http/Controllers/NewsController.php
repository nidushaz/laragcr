<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 16/02/2018
 * Time: 12:24 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdService;
use App\Services\PageBannerService;
use App\Services\SolutionTypeService;
use App\Services\ProductService;
use Illuminate\Support\Facades\Route;
use App\Services\NewsService;
class NewsController extends Controller
{
    protected $adService;
    protected $pageBannerService;
    protected $solutionTypeService;
    protected $productService;
    protected $newsService;
    ////////
    protected $route;
    protected $page_id;
    protected $content;
    protected $banner;
    protected $solutions;
    protected $abouts;
    protected $news;
    public function __construct(AdService $adService,PageBannerService $pageBannerService,SolutionTypeService $solutionTypeService,ProductService $productService,NewsService $newsService)
    {
        $this->adService = $adService;
        $this->pageBannerService =  $pageBannerService;
        $this->solutionTypeService = $solutionTypeService;
        $this->productService = $productService;
        $this->newsService=$newsService;

        $this->route = Route::current();
        $route_name = strpos($this->route->getName(), ".") !== false?substr($this->route->getName(),0 ,strpos($this->route->getName(), ".")):$this->route->getName();
        $this->page_id = $this->pageBannerService->getPageId($route_name);
        $this->content = $this->pageBannerService->getPageContent($this->page_id);
        $this->banner = $this->pageBannerService->getPageBanner($this->page_id);
        $this->solutions = $this->solutionTypeService->getIsActive();

        $this->page_id = $this->pageBannerService->getPageId('about-GCR');
        $this->abouts = $this->pageBannerService->getPageContent($this->page_id);

        $this->news = $this->newsService->getAllActiveNews();
    }

    public function index()
    {
        $content = $this->content;
        $banner = $this->banner;
        $solutions = $this->solutions;
        $abouts = $this->abouts;
        $news = $this->news;
		
		$sortedData = array();
        foreach($news as $element)
        {
            $timestamp = strtotime($element->getUpdatedAt()->format('Y-m-d H:i:s'));

            $date = date("Y", $timestamp); //truncate hours:minutes:seconds
            if ( ! isSet($sortedData[$date]) ) { //first entry of that day
//                $sortedData[$date] = array($element);
                $sortedData[$date][]=array("id"=>$element->getId(),"updateAt"=>date("d F Y",$timestamp),"heading"=>$element->getNewsHeading());
            } else { //just push current element onto existing array
                $sortedData[$date][] = array("id"=>$element->getId(),"updateAt"=>date("d F Y",$timestamp),"heading"=>$element->getNewsHeading());
            }

        }
		
		//print_r($sortedData);exit;
		
        return view('front-end.news',compact('banner','content','solutions','abouts','news','sortedData'));
    }

    public function list(Request $request,$id)
    {
        $content = $this->content;
        $banner = $this->banner;
        $solutions = $this->solutions;
        $abouts = $this->abouts;
        $news = $this->news;
        $new = $this->newsService->getActiveNews($id);
        return view('front-end.newslist',compact('banner','content','solutions','abouts','news','new'));


    }

}