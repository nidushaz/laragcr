<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 13/02/2018
 * Time: 10:01 AM
 */

namespace App\Services\Impl;
use App\Services\CategoryService;
use App\Repositories\CategoryRepo;
class CategoryServiceImpl implements CategoryService
{
    protected $categoryRepo;
    public function __construct(CategoryRepo $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function getAllCategory()
    {
        return $this->categoryRepo->getAllCategory();
    }

    public function addCategory($category)
    {
       return $this->categoryRepo->addCategory($category);
    }

    public function updateCategory($data)
    {
        return $this->categoryRepo->updateCategory($data);
    }

    public function getAllActiveCategory()
    {
        return $this->categoryRepo->getAllActiveCategory();
    }

    public function findCategory($id)
    {
        return $this->categoryRepo->findCategory($id);
    }
}