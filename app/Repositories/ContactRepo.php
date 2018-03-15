<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 16/02/2018
 * Time: 5:54 PM
 */

namespace App\Repositories;
use App\Entities\Support;
use Doctrine\ORM\EntityManagerInterface;
use App\Entities\ContactBackup;
class ContactRepo
{
    protected $em;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public  function contactSaveAndSend($data){

        $this->em->persist($data);
        $this->em->flush();
        return true;
    }

    public function getAllContact()
    {
        return $this->em->getRepository(ContactBackup::class)->findAll();
    }

    public function getContactById($id)
    {
       return $this->em->getRepository(ContactBackup::class)->find($id);
    }

    public function getAllSupport()
    {
        return $this->em->getRepository(Support::class)->findAll();
    }

    public function getSupportById($id)
    {
        return $this->em->getRepository(Support::class)->find($id);
    }
}