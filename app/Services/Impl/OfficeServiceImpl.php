<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 16/02/2018
 * Time: 7:23 PM
 */

namespace App\Services\Impl;
use App\Services\OfficeService;
use App\Repositories\OfficeRepo;
class OfficeServiceImpl implements OfficeService
{

    protected  $officeRepo;
    public function __construct(OfficeRepo $officeRepo)
    {
        $this->officeRepo = $officeRepo;
    }

    public function getAllOffices()
    {
        return $this->officeRepo->getAllOffices();
    }
}