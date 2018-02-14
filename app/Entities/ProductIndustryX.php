<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 08/02/2018
 * Time: 7:53 PM
 */

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;

/**
 *
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="product_industry_x")
 **/
class ProductIndustryX
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Industry", inversedBy="productIndustryX")
     * @ORM\JoinColumn(name="industry_id", referencedColumnName="id")
     */
    private $productIndustryId;


    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="productX")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $productId;


    /**
     * @ORM\Column(type="string",options={"unsigned":true, "default":0})
     */
    private $deleted;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive;

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
    public function getProductIndustryId()
    {
        return $this->productIndustryId;
    }

    /**
     * @param mixed $productIndustryId
     */
    public function setProductIndustryId($productIndustryId)
    {
        $this->productIndustryId = $productIndustryId;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
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