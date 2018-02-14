<?php

namespace App\Providers;


use App\Services\CategoryService;
use App\Services\CountryService;
use App\Services\Impl\CategoryServiceImpl;
use App\Services\Impl\CountryServiceImpl;
use App\Services\Impl\IndustryServiceImpl;
use App\Services\Impl\PageBannerServiceImpl;
use App\Services\Impl\ProductTypeServiceImpl;
use App\Services\Impl\SolutionPartnerServiceImpl;
use App\Services\Impl\SolutionTypeServiceImpl;
use App\Services\Impl\TagServiceImpl;
use App\Services\Impl\TestServiceImpl;
use App\Services\Impl\VideosServiceImpl;
use App\Services\IndustryService;
use App\Services\PageBannerService;
use App\Services\ProductTypeService;
use App\Services\SolutionPartnerService;
use App\Services\SolutionTypeService;
use App\Services\TagService;
use App\Services\TestService;
use App\Services\VideosService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.include.leftSidebarBolt',function ($view){
            $view->with('pages',\App\Model\Page::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TestService::class,TestServiceImpl::class);
        $this->app->bind(PageBannerService::class,PageBannerServiceImpl::class);
        $this->app->bind(CountryService::class,CountryServiceImpl::class);
        $this->app->bind(IndustryService::class,IndustryServiceImpl::class);
        $this->app->bind(ProductTypeService::class,ProductTypeServiceImpl::class);
        $this->app->bind(SolutionTypeService::class,SolutionTypeServiceImpl::class);
        $this->app->bind(CategoryService::class,CategoryServiceImpl::class);
        $this->app->bind(SolutionPartnerService::class, SolutionPartnerServiceImpl::class);
        $this->app->bind(VideosService::class, VideosServiceImpl::class);
        $this->app->bind(TagService::class, TagServiceImpl::class);
    }
}
