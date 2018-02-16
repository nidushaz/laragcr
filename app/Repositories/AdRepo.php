<?php
/**
 * Created by PhpStorm.
 * User: MyPc
 * Date: 14/02/2018
 * Time: 12:55 PM
 */

namespace App\Repositories;


use App\Entities\Ads;
use Doctrine\ORM\EntityManager;

class AdRepo
{
    private $em, $uploadService;
    public function __construct(EntityManager $em){
        $this->em = $em;
    }

    public function findAll(){
        return $this->em->getRepository(Ads::class)->findBy(['deleted' => 0]);
    }

    public function findById($id){
        return $this->em->getRepository(Ads::class)->find($id);
    }

    public function saveOrUpdate($ad){
        $this->em->persist($ad);
        $this->em->flush();
        return true;
    }
    public function topAd($limit){
        return $this->em->getRepository(Ads::class)->findBy(['isActive'=>1],['id'=>'DESC'],$limit);
    }

}