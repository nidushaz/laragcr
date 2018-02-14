<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 12/02/2018
 * Time: 4:40 PM
 */

namespace App\Repositories;
use LaravelDoctrine\ORM\Facades\Doctrine;
use Doctrine\ORM\EntityManagerInterface;
use App\Entities\SolutionType;
use App\Services\Impl\UploadService;
class SolutionTypeRepo
{
    protected $em;
    protected $uploadService;
    public function __construct(EntityManagerInterface $em,UploadService $uploadService)
    {
        $this->em = $em;
        $this->uploadService = $uploadService;
    }

    public function getAllActiveSolutionType(){
        $data = $this->em->getRepository(SolutionType::class)->findBy(['deleted' => 0]);
        return $data;
    }
    public  function getActiveSolutionType($id){
        return $this->em->getRepository(SolutionType::class)->find($id);
    }

    public function addSolutionType($data){
        $solutionType = new SolutionType();
        $solutionType->setName($data->get('solutiontype'));
        $solutionType->setDescription($data->get('description'));
        $solutionType->setIsActive(1);
        $solutionType->setDeleted(0);
        $solutionType->setCreatedAt(new \DateTime(now()));
        $image_url = $this->uploadService->UploadFile($data,'image','Solution/');

        if($image_url){
            $solutionType->setImage($image_url);
            $this->em->persist($solutionType);
            $this->em->flush();
            return true;
        }else{
            return  false;
            die();
        }

    }

    public function updateSolutionType($data,$id){
        $solutionType = $this->em->getRepository(SolutionType::class)->find($id);
        $solutionType->setName($data->get('solutiontype'));
        $solutionType->setDescription($data->get('description'));
        $solutionType->setIsActive($data->get('active'));
        $solutionType->setDeleted(0);
        $image_url = $this->uploadService->UploadFile($data,'image','Solution/');
        $image_url?$solutionType->setImage($image_url):'';
        $this->em->flush();
        return true;

    }


    public function getTags(){
        return $this->em->getRepository(SolutionType::class)->findAll();
    }


}