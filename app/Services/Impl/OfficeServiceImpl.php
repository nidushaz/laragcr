<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 16/02/2018
 * Time: 7:23 PM
 */

namespace App\Services\Impl;
use App\Entities\Office;
use App\Services\OfficeService;
use App\Repositories\OfficeRepo;
class OfficeServiceImpl implements OfficeService
{

    private  $officeRepo;
    public function __construct(OfficeRepo $officeRepo)
    {
        $this->officeRepo = $officeRepo;

    }

    public function getAllOffices()
    {
        return $this->officeRepo->getAllOffices();
    }

    public function getOfficeById($id)
    {
        return $this->officeRepo->getOfficeById($id);
    }

    public function saveOffice($data)
    {

        $office = new Office;
        $office->setContactPerson($data['contact_person']);
        $office->setOfficeName($data['office_name']);
        $office->setHeadOffice($data['head_office']);
        $office->setContactNo($data['contact_number']);
        $office->setCountry($data['country']);
        $office->setEmail($data['email']);
        $office->setCity($data['city']);
        $office->setState($data['state']);
        $office->setAddress1($data['address1']);
        $office->setPincode($data['pincode']);
        $office->setAddress2($data['address2']);
        $office->setCreatedAt(new \DateTime(now()));
        $office->setUpdatedAt(new \DateTime(now()));
        $office->setIsActive(1);
        $office->setDeleted(0);
        return $this->officeRepo->saveOffice($office);
    }

    public function updateOffice($data,$id)
    {
        $office = $this->officeRepo->getOfficeById($id);
       // $office = $this->getRepository($id);
        $office->setContactPerson($data['contact_person']);
        $office->setOfficeName($data['office_name']);
        $office->setHeadOffice($data['head_office']);
        $office->setContactNo($data['contact_number']);
        $office->setCountry($data['country']);
        $office->setEmail($data['email']);
        $office->setCity($data['city']);
        $office->setState($data['state']);
        $office->setAddress1($data['address1']);
        $office->setPincode($data['pincode']);
        $office->setAddress2($data['address2']);
        $office->setCreatedAt(new \DateTime(now()));
        $office->setUpdatedAt(new \DateTime(now()));
        $office->setIsActive($data['active']);
        $office->setDeleted(0);
        return $this->officeRepo->updateOffice($data);
    }

//    public function getRepository($id){
//        $this->officeService = OfficeService;
//        return $this->officeService->getOfficeById($id);
//    }
    public function getActiveOffice()
    {
        return $this->officeRepo->getActiveOffice();
    }
}