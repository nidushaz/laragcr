<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 16/02/2018
 * Time: 7:27 PM
 */

namespace App\Repositories;
use Doctrine\ORM\EntityManagerInterface;
use App\Entities\Office;
class OfficeRepo
{
    protected $em;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public function getAllOffices(){
        return $this->em->getRepository(Office::class)->findBy(['isActive'=>1]);
    }
}