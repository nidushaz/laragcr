<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 21/02/2018
 * Time: 2:11 PM
 */

namespace App\Services\Impl;
use App\Services\EventsService;
use App\Entities\Country;
use App\Entities\Events;
use App\Entities\EventsAttachment;
use App\Services\Impl\UploadService;
use App\Repositories\EventsRepo;
class EventsServiceImpl implements EventsService
{

    protected $uploadService,$eventsRepo;
    public function __construct(UploadService $uploadService,EventsRepo $eventsRepo)
    {
        $this->uploadService = $uploadService;
        $this->eventsRepo = $eventsRepo;
    }

    public function getAllEvents()
    {
        // TODO: Implement getAllEvents() method.
    }

    public function getAllActiveEvents()
    {
        // TODO: Implement getAllActiveEvents() method.
    }

    public function addEvents($data)
    {
        $news = new Events();

        //$countryId = $this->em->getRepository(Country::class)->find($data->get('country'));
        //$news->setNewsCountryId($countryId);

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

    public function updateEvents($data, $id)
    {
        // TODO: Implement updateEvents() method.
    }

    public function getActiveEvents($id)
    {
        // TODO: Implement getActiveEvents() method.
    }

    public function deleteImgMedia($id)
    {
        // TODO: Implement deleteImgMedia() method.
    }
}