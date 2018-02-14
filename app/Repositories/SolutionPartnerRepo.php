<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 13/02/2018
 * Time: 11:12 AM
 */

namespace App\Repositories;
use Doctrine\ORM\EntityManagerInterface;
use App\Entities\SolutionPartner;
use App\Services\Impl\UploadService;
class SolutionPartnerRepo
{
    protected $em;
    protected $uploadService;
    public  function __construct(EntityManagerInterface $em,UploadService $uploadService)
    {
        $this->em = $em;
        $this->uploadService = $uploadService;
    }

    public function getAllSolutionPartner()
    {
        return $this->em->getRepository(SolutionPartner::class)->findBy(['deleted' => 0]);
    }

    public function addSolutionPartner($data)
    {
        $solutionPartner = new SolutionPartner();
        $solutionPartner->setTitle($data->get('title'));
        $solutionPartner->setDescription($data->get('description'));
        $solutionPartner->setIsActive(1);
        $solutionPartner->setDeleted(0);
        $solutionPartner->setCreatedAt(new \DateTime(now()));
        $image_url = $this->uploadService->UploadFile($data,'image','Partners/');

        if($image_url){
            $solutionPartner->setLogo($image_url);
            $this->em->persist($solutionPartner);
            $this->em->flush();
            return true;
        }else{
            return  false;
            die();
        }
    }

    public function updateSolutionPartner($data, $id)
    {
        $partner = $this->em->getRepository(SolutionPartner::class)->find($id);
        $partner->setTitle($data->get('title'));
        $partner->setDescription($data->get('description'));
        $partner->setIsActive($data->get('active'));
        $partner->setDeleted(0);
        $image_url = $this->uploadService->UploadFile($data,'image','Partners/');
        $image_url?$partner->setLogo($image_url):'';
        $this->em->flush();
        return true;
    }

    public function getActiveSolutionPartner($id)
    {
        return $this->em->getRepository(SolutionPartner::class)->find($id);
    }
}