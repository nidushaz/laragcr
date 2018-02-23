<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 20/02/2018
 * Time: 2:59 PM
 */

namespace App\Repositories;
use Doctrine\ORM\EntityManagerInterface;
use App\Entities\Provider;
use App\Services\Impl\UploadService;
class SolutionProviderRepo
{
    protected $em,$uploadService;
    public function __construct(EntityManagerInterface $em,UploadService $uploadService)
    {
       $this->em = $em;
       $this->uploadService = $uploadService;
    }
    public function getAllActiveSolutionProvider(){
        return $this->em->getRepository(Provider::class)->findBy(['isActive'=>1]);
    }
    public function findById($id){
        return $this->em->getRepository(Provider::class)->find($id);
    }

    public function addSolutionProvider($data){
        $this->em->persist($data);
        $this->em->flush();
    }
    public function updateSolutionProvider(){
        $this->em->flush();
    }

}