<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 09/02/2018
 * Time: 6:17 PM
 */

namespace App\Services\Impl;
use App\Services\CountryService;
use App\Repositories\CountryRepo;

class CountryServiceImpl implements CountryService
{
   private $countryRepo;
    public function __construct(CountryRepo $countryRepo)
    {
       $this->countryRepo = $countryRepo;
    }

    public function getAllActiveCountry()
    {
        $data = $this->countryRepo->getAllActiveCountry();
        return $data;
    }

    public function addCountry($country)
    {
        return $this->countryRepo->addCountry($country);
    }

    public function updateCountry($data)
    {
       return $this->countryRepo->updateCountry($data);
    }
}