<?php
/**
 * Created by PhpStorm.
 * User: MyPc
 * Date: 14/02/2018
 * Time: 12:55 PM
 */

namespace App\Services;


interface AdService
{
    public function getAllAds();

    public function addAd($data);

    public function updateAd($data, $id);

    public function getActiveAd($id);

    public function topAd($limit);

}