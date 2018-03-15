<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 16/02/2018
 * Time: 5:55 PM
 */

namespace App\Services;


interface ContactService
{
    public function contactSaveAndSend($data);
    public function getAllContact();
    public function getContactById($id);
    public function getAllSupport();
    public function getSupportById($id);
}