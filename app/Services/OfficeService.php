<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 16/02/2018
 * Time: 7:24 PM
 */

namespace App\Services;


interface OfficeService
{

    public function getAllOffices();
    public  function getOfficeById($id);
    public function saveOffice($data);
    public function updateOffice($data,$id);
    public function getActiveOffice();
}