<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 09/02/2018
 * Time: 6:17 PM
 */

namespace App\Services;


interface CountryService
{
    public  function getAllActiveCountry();
    public function addCountry($country);
    public function updateCountry($data);
}