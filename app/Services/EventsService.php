<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 21/02/2018
 * Time: 2:09 PM
 */

namespace App\Services;


interface EventsService
{
    public function getAllEvents();
    public function getAllActiveEvents();
    public function addEvents($data);
    public function updateEvents($data,$id);
    public function getActiveEvents($id);
    public function deleteImgMedia($id);
}