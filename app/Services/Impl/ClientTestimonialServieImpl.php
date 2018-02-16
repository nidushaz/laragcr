<?php
/**
 * Created by PhpStorm.
 * User: MyPc
 * Date: 14/02/2018
 * Time: 10:38 AM
 */

namespace App\Services\Impl;


use App\Entities\ClientTestimonial;
use App\Repositories\ClientTestimonialRepo;
use App\Services\ClientTestimonialService;

class ClientTestimonialServieImpl implements ClientTestimonialService
{
    private $clientTestimonialRepo;

    public function __construct(ClientTestimonialRepo $clientTestimonialRepo, UploadService $uploadService){
        $this->clientTestimonialRepo = $clientTestimonialRepo;
        $this->uploadService = $uploadService;
    }

    public function getAllTestimonials(){
        return $this->clientTestimonialRepo->findAll();
    }

    public function addTestimonial($data){
        $clientTestimonial = new ClientTestimonial();
        $clientTestimonial->setName($data->get('name'));
        $clientTestimonial->setCompanyName($data->get('companyName'));
        $clientTestimonial->setDesignation($data->get('designation'));
        $clientTestimonial->setTestimonial($data->get('testimonial'));
        $clientTestimonial->setIsActive(1);
        $clientTestimonial->setDeleted(0);
        $clientTestimonial->setCreatedAt(new \DateTime(now()));
        $image_url = $this->uploadService->UploadFile($data,'image','Testimonial/');
        if($image_url){
            $clientTestimonial->setImage($image_url);
        }
        return $this->clientTestimonialRepo->saveOrUpdate($clientTestimonial);
    }

    public function getActiveTestimonial($id){
        return $this->clientTestimonialRepo->findById($id);
    }

    public function updateTestimonial($data, $id){
        $clientTestimonial = $this->clientTestimonialRepo->findById($id);
        $clientTestimonial->setName($data->get('name'));
        $clientTestimonial->setCompanyName($data->get('companyName'));
        $clientTestimonial->setDesignation($data->get('designation'));
        $clientTestimonial->setTestimonial($data->get('testimonial'));
        $clientTestimonial->setIsActive($data->get('active'));
        $clientTestimonial->setDeleted(0);
        $image_url = $this->uploadService->UploadFile($data,'image','Testimonial/');
        if($image_url) {
            $clientTestimonial->setImage($image_url);
        }
        return $this->clientTestimonialRepo->saveOrUpdate($clientTestimonial);
    }

    public function getAllActiveTestimonial()
    {
        return $this->clientTestimonialRepo->getAllActiveTestimonial();
    }
}