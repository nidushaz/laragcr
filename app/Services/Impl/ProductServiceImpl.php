<?php
/**
 * Created by PhpStorm.
 * User: MyPc
 * Date: 14/02/2018
 * Time: 6:07 PM
 */

namespace App\Services\Impl;


use App\Entities\Product;
use App\Entities\ProductImage;
use App\Entities\ProductSolutionX;
use App\Repositories\CountryRepo;
use App\Repositories\ProductRepo;
use App\Repositories\SolutionTypeRepo;
use App\Services\ProductService;
use App\Repositories\SolutionProviderRepo;

class ProductServiceImpl implements ProductService{

    private $productRepo, $solutionTypeRepo, $countryRepo, $uploadService,$solutionProvider;

    public function __construct(ProductRepo $productRepo, SolutionTypeRepo $solutionTypeRepo, CountryRepo $countryRepo, UploadService $uploadService,SolutionProviderRepo $solutionProviderRepo){
        $this->productRepo = $productRepo;
        $this->solutionTypeRepo = $solutionTypeRepo;
        $this->countryRepo = $countryRepo;
        $this->uploadService = $uploadService;
        $this->solutionProviderRepo = $solutionProviderRepo;
    }

    public function getAllProducts(){
        return $this->productRepo->findAll();
    }

    public function getProduct($productId){
        return $this->productRepo->findById($productId);
    }

    public function saveProduct($data)
    {
        $product = new Product();
        $product->setProductName($data->get('productName'));
        $product->setDescription($data->get('description'));
        $product->setProductCountryId($this->countryRepo->findById($data->get('country')));
        $product->setMetaDescription($data->get('metaDescription'));
        $product->setMetaTitle($data->get('metaTitle'));
        $product->setMetaKeywords($data->get('metaKeywords'));
        $product->setIsActive(1);
        $product->setDeleted(0);
        $product->setProductProviderId($this->solutionProviderRepo->findById($data->get('solution_provider')));
        $product->setCreatedAt(new \DateTime(now()));
        $product->setUpdatedAt(new \DateTime(now()));
        $productSolutionTypeIds = $data->get('productSolutionTypeId');
        foreach ($productSolutionTypeIds as $productSolutionTypeId){
            $productSolutionX = new ProductSolutionX();
            $productSolutionX->setProductSolutionTypeId($this->solutionTypeRepo->getActiveSolutionType($productSolutionTypeId));
            $productSolutionX->setIsActive(1);
            $productSolutionX->setDeleted(0);
            $productSolutionX->setCreatedAt(new \DateTime(now()));
            $product->addProductSolutionX($productSolutionX);
        }
        $images = $this->uploadService->UploadMulFile($data, 'productImage', 'Product/');
        if($images){
            foreach ($images as $image){
                $productImages = new ProductImage();
                $productImages->setCreatedAt(new \DateTime(now()));
                $productImages->setUpdatedAt(new \DateTime(now()));
                $productImages->setIsActive(1);
                $productImages->setDeleted(0);
                $productImages->setIsVideo(0);
                $productImages->setMediaUrl($image);
                $product->addProductImage($productImages);
            }
        }
        return $this->productRepo->saveOrUpdate($product);
    }

    public function updateProduct($data, $id){
        $product = $this->productRepo->findById($id);
        $product->setProductName($data->get('productName'));
        $product->setDescription($data->get('description'));
        $product->setProductCountryId($this->countryRepo->findById($data->get('country')));
        $product->setMetaDescription($data->get('metaDescription'));
        $product->setMetaTitle($data->get('metaTitle'));
        $product->setMetaKeywords($data->get('metaKeywords'));
        $product->setIsActive(1);
        $product->setUpdatedAt(new \DateTime(now()));
        $this->productRepo->removeExistingSolutionType($id);
        $productSolutionTypeIds = $data->get('productSolutionTypeId');
        foreach ($productSolutionTypeIds as $productSolutionTypeId){
            $productSolutionX = new ProductSolutionX();
            $productSolutionX->setProductSolutionTypeId($this->solutionTypeRepo->getActiveSolutionType($productSolutionTypeId));
            $productSolutionX->setIsActive(1);
            $productSolutionX->setDeleted(0);
            $productSolutionX->setCreatedAt(new \DateTime(now()));
            $product->addProductSolutionX($productSolutionX);
        }
        $this->productRepo->removeExistingImages($id);
        $imageUrls = $data->get('productImageUrl');
        if($imageUrls){
            foreach ($imageUrls as $imageUrl){
                $productImages = new ProductImage();
                $productImages->setCreatedAt(new \DateTime(now()));
                $productImages->setUpdatedAt(new \DateTime(now()));
                $productImages->setIsActive(1);
                $productImages->setDeleted(0);
                $productImages->setIsVideo(0);
                $productImages->setMediaUrl($imageUrl);
                $product->addProductImage($productImages);
            }
        }
        $images = $this->uploadService->UploadMulFile($data, 'productImage', 'Product/');
        if($images){
            foreach ($images as $image){
                $productImages = new ProductImage();
                $productImages->setCreatedAt(new \DateTime(now()));
                $productImages->setUpdatedAt(new \DateTime(now()));
                $productImages->setIsActive(1);
                $productImages->setDeleted(0);
                $productImages->setIsVideo(0);
                $productImages->setMediaUrl($image);
                $product->addProductImage($productImages);
            }
        }
        return $this->productRepo->saveOrUpdate($product);
    }

    public function getAllActiveProductsByParentId($id)
    {
        return $this->productRepo->getAllActiveProductsByParentId($id);
    }
}