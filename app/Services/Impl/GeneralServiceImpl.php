<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 01/03/2018
 * Time: 11:56 AM
 */

namespace App\Services\Impl;

use App\Services\GeneralService;
use App\Repositories\GeneralRepo;
class GeneralServiceImpl implements  GeneralService
{

    private $generalRepo;
    public function __construct(GeneralRepo $generalRepo)
    {
        $this->generalRepo = $generalRepo;
    }

    public function getGeneralInfo()
    {
        $this->generalRepo->getGeneralInfo();
    }
}