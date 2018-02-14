<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 13/02/2018
 * Time: 10:01 AM
 */

namespace App\Services;


interface CategoryService
{
    public  function getAllCategory();
    public  function findCategory($id);
    public  function getAllActiveCategory();
    public function addCategory($country);
    public function updateCategory($data);
}