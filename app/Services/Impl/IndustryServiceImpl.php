<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 12/02/2018
 * Time: 12:04 PM
 */

namespace App\Services\Impl;
use App\Services\IndustryService;
use App\Repositories\IndustryRepo;

class IndustryServiceImpl implements  IndustryService
{
    private $IndustryRepo;
    public function __construct(IndustryRepo $industryRepo)
    {
        $this->IndustryRepo = $industryRepo;
    }

    public function getAllActiveIndustry()
    {
        return $this->IndustryRepo->getAllActiveIndustry();
    }

    public function getAllActiveIndustries()
    {
        return $this->IndustryRepo->getAllActiveIndustries();
    }

    public function addIndustry($industry)
    {
        return $this->IndustryRepo->addIndustry($industry);
    }

    public function updateIndustry($data)
    {
        return $this->IndustryRepo->updateIndustry($data);
    }


    public function INDList()
    {
        return $this->IndustryRepo->getTags();
    }
}