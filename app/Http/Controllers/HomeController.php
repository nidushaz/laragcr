<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdService;
use App\Services\PageBannerService;
use App\Services\SolutionTypeService;
use Illuminate\Support\Facades\Route;
use App\Services\VideosService;
use App\Services\ClientTestimonialService;
use App\Services\SolutionPartnerService;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $adService;
    protected $pageBannerService;
    protected $solutionTypeService;
    protected $videoService;
    protected $clientTestimonialService;
    protected $solutionPartnerService;
    public function __construct(AdService $adService,PageBannerService $pageBannerService,SolutionTypeService $solutionTypeService,VideosService $videosService,ClientTestimonialService $clientTestimonialService,SolutionPartnerService $solutionPartnerService)
    {
        $this->adService = $adService;
        $this->pageBannerService =  $pageBannerService;
        $this->solutionTypeService = $solutionTypeService;
        $this->videoService = $videosService;
        $this->clientTestimonialService = $clientTestimonialService;
        $this->solutionPartnerService = $solutionPartnerService;

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $route = Route::current();
          $page_id = $this->pageBannerService->getPageId($route->getName());
          $content = $this->pageBannerService->getPageContent($page_id);
          $banner = $this->pageBannerService->getPageBanner($page_id);
          $ads = $this->adService->topAd(2);
          $solutions = $this->solutionTypeService->getIsActive();
          $videos = $this->videoService->getActiveVideos();
          $testimonials = $this->clientTestimonialService->getAllActiveTestimonial();
          $partners=  $this->solutionPartnerService->getAllActiveSolutionPartner();

          $page_id = $this->pageBannerService->getPageId('about-GCR');
          $abouts = $this->pageBannerService->getPageContent($page_id);

          return view('front-end.home',compact('ads','banner','content','solutions','videos','testimonials','partners','abouts'));
    }


}
