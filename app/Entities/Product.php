<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 07/02/2018
 * Time: 6:30 PM
 */

namespace App\Entities;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;

/**
 *
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $productName;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string",length=500)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="productCountry")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    private $productCountryId;



    /**
     * @ORM\ManyToOne(targetEntity="Provider", inversedBy="productProvider")
     * @ORM\JoinColumn(name="solution_provider_id", referencedColumnName="id")
     */
    private $productProviderId;



    /**
     * @ORM\Column(type="string")
     */
    private $metaTitle;

    /**
     * @ORM\Column(type="string",length=600)
     */
    private $metaKeywords;

    /**
     * @ORM\Column(type="text")
     */
    private $metaDescription;

    /**
     * @ORM\Column(type="boolean",options={"unsigned":true, "default":1})
     */
    private $isActive;

    /**
     * @ORM\Column(type="boolean",options={"unsigned":true, "default":0})
     */
    private $deleted;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;


    /**
     * @ORM\OneToMany(targetEntity="ProductIndustryX", mappedBy="productId")
     */
    private $productX;


    /**
     * @ORM\OneToMany(targetEntity="ProductSolutionX", mappedBy="productSolutionId")
     */
    private $productSolutionX;

    /**
     * @ORM\OneToMany(targetEntity="ProductSolutionX", mappedBy="productProductTypeId")
     */
    private $productTypeX;


    /**
     * @ORM\OneToMany(targetEntity="productDetails", mappedBy="product")
     */
    private $productDetails;


    /**
     * @ORM\OneToMany(targetEntity="ProductImage", mappedBy="productImageId")
     */
    private $productImage;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getProductCountryId()
    {
        return $this->productCountryId;
    }

    /**
     * @param mixed $productCountryId
     */
    public function setProductCountryId($productCountryId)
    {
        $this->productCountryId = $productCountryId;
    }

    /**
     * @return mixed
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * @param mixed $metaTitle
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;
    }

    /**
     * @return mixed
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @param mixed $metaKeywords
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
    }

    /**
     * @return mixed
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @param mixed $metaDescription
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
    }


    /**
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param mixed $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getProductDetails()
    {
        return $this->productDetails;
    }

    /**
     * @param mixed $productDetails
     */
    public function setProductDetails($productDetails)
    {
        $this->productDetails = $productDetails;
    }

    /**
     * @return mixed
     */
    public function getProductX()
    {
        return $this->productX;
    }

    /**
     * @param mixed $productX
     */
    public function setProductX($productX)
    {
        $this->productX = $productX;
    }

    /**
     * @return mixed
     */
    public function getProductSolutionX()
    {
        return $this->productSolutionX;
    }

    /**
     * @param mixed $productSolutionX
     */
    public function setProductSolutionX($productSolutionX)
    {
        $this->productSolutionX = $productSolutionX;
    }

    /**
     * @return mixed
     */
    public function getProductTypeX()
    {
        return $this->productTypeX;
    }

    /**
     * @param mixed $productTypeX
     */
    public function setProductTypeX($productTypeX)
    {
        $this->productTypeX = $productTypeX;
    }

    /**
     * @return mixed
     */
    public function getProductProviderId()
    {
        return $this->productProviderId;
    }

    /**
     * @param mixed $productProviderId
     */
    public function setProductProviderId($productProviderId)
    {
        $this->productProviderId = $productProviderId;
    }

    /**
     * @return mixed
     */
    public function getProductImage()
    {
        return $this->productImage;
    }

    /**
     * @param mixed $productImage
     */
    public function setProductImage($productImage)
    {
        $this->productImage = $productImage;
    }

    /**
     * @return mixed
     */
    public function getisActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }





}