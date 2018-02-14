<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 12/02/2018
 * Time: 12:03 PM
 */

namespace App\Services;


interface IndustryService
{
    public function getAllActiveIndustry();
    public function getAllActiveIndustries();
    public function addIndustry($industry);
    public function updateIndustry($data);
    public function INDList();
}