<?php

namespace App\Providers;


use App\Services\AdService;
use App\Services\CategoryService;
use App\Services\CheckPermissionService;
use App\Services\ClientTestimonialService;
use App\Services\ContactService;
use App\Services\CountryService;
use App\Services\Impl\AdServiceImpl;
use App\Services\Impl\CategoryServiceImpl;
use App\Services\Impl\CheckPermissionServiceImpl;
use App\Services\Impl\ClientTestimonialServieImpl;
use App\Services\Impl\ContactServiceImpl;
use App\Services\Impl\CountryServiceImpl;
use App\Services\Impl\IndustryServiceImpl;
use App\Services\Impl\NewsServiceImpl;
use App\Services\Impl\OfficeServiceImpl;
use App\Services\Impl\PageBannerServiceImpl;
use App\Services\Impl\ProductServiceImpl;
use App\Services\Impl\ProductTypeServiceImpl;
use App\Services\Impl\RoleServiceImpl;
use App\Services\Impl\SolutionPartnerServiceImpl;
use App\Services\Impl\SolutionProviderServiceImpl;
use App\Services\Impl\SolutionTypeServiceImpl;
use App\Services\Impl\TagServiceImpl;
use App\Services\Impl\TestServiceImpl;
use App\Services\Impl\UserServiceImpl;
use App\Services\Impl\VideosServiceImpl;
use App\Services\IndustryService;
use App\Services\OfficeService;
use App\Services\PageBannerService;
use App\Services\ProductService;
use App\Services\ProductTypeService;
use App\Services\RoleService;
use App\Services\SolutionPartnerService;
use App\Services\SolutionProviderService;
use App\Services\SolutionTypeService;
use App\Services\NewsService;
use App\Services\TagService;
use App\Services\TestService;
use App\Services\UserService;
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
        view()->composer('front-end.include.rightsidebar',function ($view){
            $view->with('news',\App\Model\News::where('type',1)->orderBy('created_at','desc')->take(1)->get());
        });
        view()->composer('front-end.include.rightsidebar',function ($view){
            $view->with('events',\App\Model\News::where('type',2)->orderBy('created_at','desc')->take(1)->get());
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
        $this->app->bind(AdService::class, AdServiceImpl::class);
        $this->app->bind(ClientTestimonialService::class,ClientTestimonialServieImpl::class);
        $this->app->bind(ProductService::class,ProductServiceImpl::class);
        $this->app->bind(NewsService::class,NewsServiceImpl::class);
        $this->app->bind(ContactService::class,ContactServiceImpl::class);
        $this->app->bind(OfficeService::class,OfficeServiceImpl::class);
        $this->app->bind(SolutionProviderService::class, SolutionProviderServiceImpl::class);
        $this->app->bind(RoleService::class,RoleServiceImpl::class);
        $this->app->bind(UserService::class,UserServiceImpl::class);
        $this->app->bind(CheckPermissionService::class,CheckPermissionServiceImpl::class);
    }
}
