<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 09/02/2018
 * Time: 10:23 AM
 */

namespace App\Entities;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;

/**
 *
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="product_type_x")
 */
class productTypeX
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="ProductType", inversedBy="productId")
     * @ORM\JoinColumn(name="product_type_id", referencedColumnName="id")
     */
    private $productTypeId;


    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="productTypeX")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $productProductTypeId;


    /**
     * @ORM\Column(type="string",options={"unsigned":true, "default":0})
     */
    private $deleted;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive;


    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

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
    public function getProductTypeId()
    {
        return $this->productTypeId;
    }

    /**
     * @param mixed $productTypeId
     */
    public function setProductTypeId($productTypeId)
    {
        $this->productTypeId = $productTypeId;
    }

    /**
     * @return mixed
     */
    public function getProductProductTypeId()
    {
        return $this->productProductTypeId;
    }

    /**
     * @param mixed $productProductTypeId
     */
    public function setProductProductTypeId($productProductTypeId)
    {
        $this->productProductTypeId = $productProductTypeId;
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




}