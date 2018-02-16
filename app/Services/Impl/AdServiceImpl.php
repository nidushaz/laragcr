<?php
/**
 * Created by PhpStorm.
 * User: MyPc
 * Date: 14/02/2018
 * Time: 12:55 PM
 */

namespace App\Services\Impl;


use App\Entities\Ads;
use App\Repositories\AdRepo;
use App\Services\AdService;

class AdServiceImpl implements AdService
{

    private $adRepo, $uploadService;
    public function __construct(AdRepo $adRepo, UploadService $uploadService){
        $this->adRepo = $adRepo;
        $this->uploadService = $uploadService;
    }

    public function getAllAds(){
        return $this->adRepo->findAll();
    }

    public function addAd($data){
        $ad = new Ads();
        $ad->setTitle($data->get('title'));
        $ad->setAddDetail($data->get('addDetail'));
        $ad->setDeleted(0);
        $ad->setIsActive(1);
        $ad->setCreatedAt(new \DateTime(now()));
        $ad->setUpdatedAt(new \DateTime(now()));
        $image_url = $this->uploadService->UploadFile($data,'image','Ad/');
        if($image_url) {
            $ad->setImage($image_url);
        }
        return $this->adRepo->saveOrUpdate($ad);
    }

    public function updateAd($data, $id){
        $ad = $this->adRepo->findById($id);
        $ad->setTitle($data->get('title'));
        $ad->setAddDetail($data->get('addDetail'));
        $ad->setIsActive($data->get('active'));
        $ad->setDeleted(0);
        $ad->setUpdatedAt(new \DateTime(now()));
        $image_url = $this->uploadService->UploadFile($data,'image','Testimonial/');
        if($image_url){
            $ad->setImage($image_url);
        }
        return $this->adRepo->saveOrUpdate($ad);
    }

    public function getActiveAd($id){
        return $this->adRepo->findById($id);
    }

    public function topAd($limit)
    {
        return $this->adRepo->topAd($limit);
    }
}