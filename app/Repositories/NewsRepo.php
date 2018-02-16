<?php
/**
 * Created by PhpStorm.
 * User: INTEX
 * Date: 14/02/2018
 * Time: 12:09 PM
 */

namespace App\Repositories;
use App\Entities\Country;
use Doctrine\ORM\EntityManagerInterface;
use App\Entities\News;
use App\Services\Impl\UploadService;
use App\Entities\NewsAttachment;

class NewsRepo
{
    protected $em;
    protected $uploadService;

    public  function __construct(EntityManagerInterface $em,UploadService $uploadService)
    {
        $this->em = $em;
        $this->uploadService = $uploadService;
    }

    public function addNews($data)
    {
        $news = new News();

        $countryId = $this->em->getRepository(Country::class)->find($data->get('country'));
        $news->setNewsCountryId($countryId);
        $news->setNewsHeading($data->get('title'));
        $news->setNewsSummary($data->get('description'));
        $news->setTag('dsfdf');
        $news->setDeleted(0);
        $news->setCreatedAt(new \DateTime(now()));
        $news->setUpdatedAt(new \Datetime(now()));
        $news->setIsActive(1);
        $image_url = $this->uploadService->UploadFile($data,'thumbimage','News/');

        if($image_url){
            $news->setThumbnail($image_url);
            $this->em->persist($news);
            $this->em->flush();
            $lastInsertId=$news->getId();
            $insertId = $this->em->getRepository(News::class)->find($lastInsertId);

            $mulImage=$this->uploadService->UploadMulFile($data,'actimage','newsAttach');

            if($mulImage){
                foreach($mulImage as $mul)
                {
                    $newsAttach = new NewsAttachment();
                    $newsAttach->setNewsId($insertId);
                    $newsAttach->setAttachment($mul);
                    $newsAttach->setDeleted(0);
                    $newsAttach->setCreatedAt(new \Datetime(now()));
                    $newsAttach->setUpdatedAt(new \DateTime(now()));
                    $this->em->persist($newsAttach);
                    $this->em->flush();
                }
                return true;
            }
        }else{
            return  false;
            die();
        }

    }

    public function getAllNews()
    {
        return $this->em->getRepository(News::class)->findBy(['deleted' => 0]);
    }

    public function getActiveNews($id)
    {
        return $this->em->getRepository(News::class)->find($id);
    }

    public function updateNews($data,$id)
    {
        $news = $this->em->getRepository(News::class)->find($id);
        $countryId = $this->em->getRepository(Country::class)->find($data->get('country'));
        $news->setNewsCountryId($countryId);
        $news->setNewsHeading($data->get('title'));
        $news->setNewsSummary($data->get('description'));
        $news->setTag('dsfdf');
        $news->setDeleted(0);
        $news->setCreatedAt(new \DateTime(now()));
        $news->setUpdatedAt(new \Datetime(now()));
        $news->setIsActive($data->get('active'));
        $image_url = $this->uploadService->UploadFile($data,'thumbimage','News/');

        if($image_url){
            $news->setThumbnail($image_url);
            $this->em->flush();

            $lastInsertId=$news->getId();
            $insertId = $this->em->getRepository(News::class)->find($lastInsertId);

            $findimgattch=$this->em->getRepository(NewsAttachment::class)->findBy(["newsId"=>$news->getId()]);

            foreach ($findimgattch as $feature) {
                $this->em->remove($feature);
            }
            $this->em->flush();

            if($data->get('imageUrl')):
                $oldUrl=$data->get('imageUrl');
            foreach($oldUrl as $oldImg)
            {
                $newsAttach = new NewsAttachment();
                $newsAttach->setNewsId($insertId);
                $newsAttach->setAttachment($oldImg);
                $newsAttach->setDeleted(0);
                $newsAttach->setCreatedAt(new \Datetime(now()));
                $newsAttach->setUpdatedAt(new \DateTime(now()));
                $this->em->persist($newsAttach);
                $this->em->flush();
            }

            endif;

            $mulImage=$this->uploadService->UploadMulFile($data,'actimage','newsAttach');

            if($mulImage){
                foreach($mulImage as $mul)
                {
                    $newsAttach = new NewsAttachment();
                    $newsAttach->setNewsId($insertId);
                    $newsAttach->setAttachment($mul);
                    $newsAttach->setDeleted(0);
                    $newsAttach->setCreatedAt(new \Datetime(now()));
                    $newsAttach->setUpdatedAt(new \DateTime(now()));
                    $this->em->persist($newsAttach);
                    $this->em->flush();
                }
            }
            return true;
        }else{
            return false;
            die();
        }
    }


}