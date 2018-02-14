<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 09/02/2018
 * Time: 10:13 AM
 */

namespace App\Entities;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;

/**
 *
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="product_solution_x")
 **/
class ProductSolutionX
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="SolutionType", inversedBy="productId")
     * @ORM\JoinColumn(name="solution_type_id", referencedColumnName="id")
     */
    private $productSolutionTypeId;


    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="productSolutionX")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $productSolutionId;


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
    public function getProductSolutionTypeId()
    {
        return $this->productSolutionTypeId;
    }

    /**
     * @param mixed $productSolutionTypeId
     */
    public function setProductSolutionTypeId($productSolutionTypeId)
    {
        $this->productSolutionTypeId = $productSolutionTypeId;
    }

    /**
     * @return mixed
     */
    public function getProductSolutionId()
    {
        return $this->productSolutionId;
    }

    /**
     * @param mixed $productSolutionId
     */
    public function setProductSolutionId($productSolutionId)
    {
        $this->productSolutionId = $productSolutionId;
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
