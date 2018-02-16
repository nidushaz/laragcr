<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 09/02/2018
 * Time: 6:21 PM
 */

namespace App\Repositories;

use Doctrine\ORM\EntityManagerInterface;
use App\Entities\Country;
use Faker\Provider\DateTime;

class CountryRepo
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getAllActiveCountry(){
        $data = $this->em->getRepository(Country::class)->findBy(['deleted' => 0]);
        return $data;
    }

    public function addCountry($countryName){
        $country = new Country();
        $country->setName($countryName);
        $country->setIsActive(1);
        $country->setDeleted(0);
        $country->setCreatedAt(new \DateTime(now()));
        $this->em->persist($country);
        $this->em->flush();
        return true;
    }
    public function updateCountry($data){

        $countryObj = $this->em->getRepository(Country::class)->find($data->get('id'));
        $countryObj->setName($data->get('country'));
        $countryObj->setIsActive($data->get('active'));
        $countryObj->setUpdatedAt(new \DateTime(now()));
        $this->em->flush();
        return true;
    }

    public function findById($id){
        return $this->em->getRepository(Country::class)->find($id);
    }

}