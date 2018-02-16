<?php
/**
 * Created by PhpStorm.
 * User: MyPc
 * Date: 14/02/2018
 * Time: 10:59 AM
 */

namespace App\Repositories;


use App\Entities\ClientTestimonial;
use Doctrine\ORM\EntityManager;

class ClientTestimonialRepo
{
    protected $em;
    protected $uplodadService;

    public function __construct(EntityManager $em){
        $this->em = $em;
    }

    public function findAll(){
        return $this->em->getRepository(ClientTestimonial::class)->findBy(['deleted' => 0]);
    }
    public function getAllActiveTestimonial(){
        return $this->em->getRepository(ClientTestimonial::class)->findBy(['isActive' => 1]);
    }

    public function findById($id){
        return $this->em->getRepository(ClientTestimonial::class)->find($id);
    }

    public function saveOrUpdate($clientTestimonial){
        $this->em->persist($clientTestimonial);
        $this->em->flush();
        return true;
    }
}