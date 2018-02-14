<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 12/02/2018
 * Time: 2:10 PM
 */

namespace App\Repositories;
use App\Entities\ProductType;
use Doctrine\ORM\EntityManagerInterface;


class ProductTypeRepo
{


    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getAllActiveProductType(){
        $data = $this->em->getRepository(ProductType::class)->findBy(['deleted' => 0]);
        return $data;
    }

    public function addProductType($productTypeName){
        $productType = new ProductType();
        $productType->setName($productTypeName);
        $productType->setIsActive(1);
        $productType->setDeleted(0);
        $productType->setCreatedAt(new \DateTime(now()));
        $this->em->persist($productType);
        $this->em->flush();
        return true;
    }
    public function updateProductType($data){

        $productTypeObj = $this->em->getRepository(ProductType::class)->find($data->get('id'));
        $productTypeObj->setName($data->get('productTypeName'));
        $productTypeObj->setIsActive($data->get('active'));
        //$productTypeObj->setUpdatedAt(new \DateTime(now()));
        $this->em->flush();
        return true;
    }

    public function getTags(){
        return $this->em->getRepository(ProductType::class)->findAll();
    }

}