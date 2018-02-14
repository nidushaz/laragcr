<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 12/02/2018
 * Time: 2:06 PM
 */

namespace App\Services\Impl;
use App\Services\ProductTypeService;
use App\Repositories\ProductTypeRepo;

class ProductTypeServiceImpl implements ProductTypeService
{
    protected $productTypeRepo;

    public function __construct(ProductTypeRepo $productTypeRepo)
    {
       $this->productTypeRepo = $productTypeRepo;
    }

    public function getAllActiveProductType()
    {
        return $this->productTypeRepo->getAllActiveProductType();
    }

    public function addProductType($productType)
    {
        return $this->productTypeRepo->addProductType($productType);
    }

    public function updateProductType($data)
    {
        return $this->productTypeRepo->updateProductType($data);
    }

    public function PTList()
    {
        return $this->productTypeRepo->getTags();
    }
}