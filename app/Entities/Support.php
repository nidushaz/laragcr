<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 27/02/2018
 * Time: 6:45 PM
 */

namespace App\Entities;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;

/**
 * Class ContactBackup
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="support")
 */
class Support
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
    private $customerName ;

    /**
     * @ORM\Column(type="string")
     */
    private $partnerName ;

    /**
     * @ORM\Column(type="string")
     */
    private $email ;


    /**
     * @ORM\Column(type="string")
     */
    private $number ;


    /**
     * @ORM\Column(type="string")
     */
    private $support ;

    /**
     * @ORM\Column(type="text")
     */
    private $prodDescription ;
    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="text")
     */
    private $probDescription ;

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
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param mixed $customerName
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }

    /**
     * @return mixed
     */
    public function getPartnerName()
    {
        return $this->partnerName;
    }

    /**
     * @param mixed $partnerName
     */
    public function setPartnerName($partnerName)
    {
        $this->partnerName = $partnerName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * @param mixed $support
     */
    public function setSupport($support)
    {
        $this->support = $support;
    }

    /**
     * @return mixed
     */
    public function getProdDescription()
    {
        return $this->prodDescription;
    }

    /**
     * @param mixed $prodDescription
     */
    public function setProdDescription($prodDescription)
    {
        $this->prodDescription = $prodDescription;
    }

    /**
     * @return mixed
     */
    public function getProbDescription()
    {
        return $this->probDescription;
    }

    /**
     * @param mixed $probDescription
     */
    public function setProbDescription($probDescription)
    {
        $this->probDescription = $probDescription;
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