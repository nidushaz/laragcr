<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 12/02/2018
 * Time: 2:05 PM
 */

namespace App\Services;


interface ProductTypeService
{
    public function getAllActiveProductType();
    public function addProductType($productType);
    public function updateProductType($data);
    public function PTList();

}