<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 21/02/2018
 * Time: 2:12 PM
 */

namespace App\Repositories;

use Doctrine\ORM\EntityManagerInterface;

class EventsRepo
{

    protected $uploadService,$em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function addEvents($events){
        $this->em->persist($events);
        $this->em->flush();
        return true;
    }
}