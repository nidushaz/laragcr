<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 16/02/2018
 * Time: 5:54 PM
 */

namespace App\Repositories;
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
}