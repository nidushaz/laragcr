<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 01/03/2018
 * Time: 11:57 AM
 */

namespace App\Repositories;

use App\Entities\General;
use Doctrine\ORM\EntityManagerInterface;
class GeneralRepo
{
    public function getGeneralInfo(EntityManagerInterface $em)
    {
        $em->getRepository(General::class)->findOneBy(['isActive'=>1]);
    }
}