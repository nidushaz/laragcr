<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 07/02/2018
 * Time: 1:00 PM
 */

namespace App\Entities;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;

/**
 * Class Page
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="offices")
 */

class Office
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
    private $officeName ;

    /**
     * @ORM\Column(type="text")
     */
    private $address1 ;

    /**
     * @ORM\Column(type="text")
     */
    private $address2 ;

    /**
     * @ORM\Column(type="string")
     */
    private $city ;
    /**
     * @ORM\Column(type="string")
     */
    private $state ;
    /**
     * @ORM\Column(type="integer")
     */


    /**
     * @ORM\Column(type="string")
     */
    private $country ;


    /**
     * @ORM\Column(type="string")
     */
    private $pincode ;


    /**
     * @ORM\Column(type="string")
     */
    private $email ;


    /**
     * @ORM\Column(type="string")
     */
    private $contactNo ;

    /**
     * @ORM\Column(type="string")
     */
    private $contactPerson ;


    /**
     * @ORM\Column(type="string")
     */
    private $headOffice ;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive ;

    private $sortOrder ;

    /**
     * @ORM\Column(type="string",options={"unsigned":true, "default":0})
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
    public function getOfficeName()
    {
        return $this->officeName;
    }

    /**
     * @param mixed $officeName
     */
    public function setOfficeName($officeName)
    {
        $this->officeName = $officeName;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address1
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @param mixed $sortOrder
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param mixed $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * @return mixed
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param mixed $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getPincode()
    {
        return $this->pincode;
    }

    /**
     * @param mixed $pincode
     */
    public function setPincode($pincode)
    {
        $this->pincode = $pincode;
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
    public function getContactNo()
    {
        return $this->contactNo;
    }

    /**
     * @param mixed $contactNo
     */
    public function setContactNo($contactNo)
    {
        $this->contactNo = $contactNo;
    }

    /**
     * @return mixed
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * @param mixed $contactPerson
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
    }

    /**
     * @return mixed
     */
    public function getHeadOffice()
    {
        return $this->headOffice;
    }

    /**
     * @param mixed $headOffice
     */
    public function setHeadOffice($headOffice)
    {
        $this->headOffice = $headOffice;
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




}