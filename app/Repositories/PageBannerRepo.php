<?php
namespace App\Repositories;

use App\Entities\PageBanner;
use App\Entities\PageContent;
use App\Entities\Page;
use App\Entities\Country;
use Doctrine\ORM\EntityManagerInterface;
use App\Services\Impl\UploadService;
class PageBannerRepo
{
    private $em;
    private $uploadService;
    public  function __construct(EntityManagerInterface $em,UploadService $uploadService)
    {
      $this->em = $em;
      $this->uploadService = $uploadService;
    }

    public function findBannerContent($id){
        $data = $this->em->getRepository( PageBanner::class)->findOneBy(['deleted'=>0,'bannerPageId' => $id]);
        return $data;
    }
    public function findPageContent($id){
        $data = $this->em->getRepository( PageContent::class)->findOneBy(['deleted'=>0,'contentPageId' => $id]);
        return $data;
    }

    public  function getPageId($page){
        $id = $this->em->getRepository(Page::class)->findOneBy(['link' => $page]);
        return $id->getId();
    }
    public static function getAllPage(EntityManagerInterface $em){
        return $em->getRepository(Page::class)->findAll();

    }
    /*public function getAllPage(){
        return $this->em->getRepository(Page::class)->findAll();
    }*/
    public  function saveData($data){
        $page_id = $this->em->getRepository(Page::class)->find($data->input('page_id'));
        $country_id = $this->em->getRepository(Country::class)->find($data->input('country_id'));
        $flag = 0;
        if($this->em->getRepository(PageContent::class)->findOneBy(['contentPageId'=>$data->input('page_id')])  && $this->em->getRepository(PageBanner::class)->findOneBy(['bannerPageId' => $data->input('page_id')])){
            $pageContent = $this->em->getRepository(PageContent::class)->findOneBy(['contentPageId'=>$data->input('page_id')]);
            $pageBanner = $this->em->getRepository(PageBanner::class)->findOneBy(['bannerPageId' => $data->input('page_id')]);
            $flag = 1;
        }else{
            $pageContent = new PageContent();
            $pageBanner = new PageBanner();
        }
        $pageContent->setContentPageId($page_id);
        $pageContent->setDescription($data->input('description'));
        $pageContent->setIsActive(1);
        $pageContent->setDeleted(0);
        $pageContent->setCreatedAt(new \DateTime(now()));

        $pageBanner->setBannerPageId($page_id);
        $pageBanner->setName($data->input('name'));
        $pageBanner->setHeading($data->input('heading'));
        $pageBanner->setAnchorUrl($data->input('anchor_url'));
        $pageBanner->setAnchorText($data->input('anchor_text'));
        $pageBanner->setBannerCountryId($country_id);
        $pageBanner->setBannerDescription($data->input('banner_description'));
        $pageBanner->setIsActive(1);
        $pageBanner->setDeleted(0);
        $pageBanner->setCreatedAt(new \DateTime(now()));
        $image_url = $this->uploadService->UploadFile($data,'image','BannerUpload/');
        if($flag==0){
            if($image_url){
                $pageBanner->setImage($image_url);
                $this->em->persist($pageContent);
                $this->em->persist($pageBanner);
                $this->em->flush();
                return true;
            }else{
                return  false;
                die();
            }
        }else{
            $image_url?$pageBanner->setImage($image_url):'';
            $this->em->flush();
            return true;
        }
    }
}