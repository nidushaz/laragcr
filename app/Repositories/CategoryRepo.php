<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 13/02/2018
 * Time: 10:06 AM
 */

namespace App\Repositories;

use App\Entities\Category;
use Doctrine\ORM\EntityManagerInterface;
class CategoryRepo
{
    protected $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getAllCategory(){
        return $this->em->getRepository(Category::class)->findBy(['deleted' => 0]);
    }

    public function getAllActiveCategory(){
        return $this->em->getRepository(Category::class)->findBy(['deleted' => 0,'isActive' => 1]);
    }

    public function addCategory($cat){
        $category = new Category();
        $category->setName($cat);
        $category->setIsActive(1);
        $category->setDeleted(0);
        $category->setCreatedAt(new \DateTime(now()));
        $this->em->persist($category);
        $this->em->flush();
        return true;

    }

    public function updateCategory($data){

        $category = $this->em->getRepository(Category::class)->find($data->get('id'));
        $category->setName($data->get('categoryName'));
        $category->setIsActive($data->get('active'));
        $this->em->flush();
        return true;


    }
    public function findCategory($id){
        return $this->em->getRepository(Category::class)->find($id);
    }
}