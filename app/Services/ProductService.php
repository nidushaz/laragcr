<?php
/**
 * Created by PhpStorm.
 * User: MyPc
 * Date: 14/02/2018
 * Time: 6:06 PM
 */

namespace App\Services;


interface ProductService
{
    public function getAllProducts();

    public function getProduct($productId);

    public function saveProduct($data);

    public function updateProduct($data, $id);

    public  function getAllActiveProductsByParentId($id);
}