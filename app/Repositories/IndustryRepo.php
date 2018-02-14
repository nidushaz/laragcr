<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 12/02/2018
 * Time: 12:06 PM
 */

namespace App\Repositories;
use App\Entities\Industry;
use App\Entities\Tag;
use Doctrine\ORM\EntityManagerInterface;

class IndustryRepo
{
    protected $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getAllActiveIndustry(){
        return $this->em->getRepository(Industry::class)->findBy(['deleted' => 0]);
    }
    public function getAllActiveIndustries(){
        return $this->em->getRepository(Industry::class)->findBy(['deleted' => 0,'isActive' => 1]);
    }

    public function addIndustry($industryName){
        $industry = new Industry();
        $industry->setIndustryName($industryName);
        $industry->setIsActive(1);
        $industry->setDeleted(0);
        $industry->setCreatedAt(new \DateTime(now()));
        $this->em->persist($industry);
        $this->em->flush();
        return true;
    }
    public function updateIndustry($data){

        $industryObj = $this->em->getRepository(Industry::class)->find($data->get('id'));
        $industryObj->setIndustryName($data->get('industryName'));
        $industryObj->setIsActive($data->get('active'));
        //$industryObj->setUpdatedAt(new \DateTime(now()));
        $this->em->flush();
        return true;
    }

    public function getTags(){
        return $this->em->getRepository(Industry::class)->findAll();
    }

}