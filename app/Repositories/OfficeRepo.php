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
        return $this->em->getRepository(Office::class)->findBy(['deleted'=>0]);
    }

    public function getOfficeById($id)
    {
        return $this->em->getRepository(Office::class)->find($id);
    }

    public function saveOffice($data)
    {
        $this->em->persist($data);
        $this->em->flush();
        return true;
    }

    public function updateOffice($data)
    {
        $this->em->flush();
        return true;
    }

    public function getActiveOffice()
    {
        return $this->em->getRepository(Office::class)->findBy(['isActive'=>1]);
    }
}