<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 07/02/2018
 * Time: 11:12 AM
 */

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;

/**
 * Class ContactBackup
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="contact_backups")
 */
class ContactBackup
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
    private $firstName ;

    /**
     * @ORM\Column(type="string")
     */
    private $lastName ;

    /**
     * @ORM\Column(type="string")
     */
    private $email ;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $industry ;


    /**
     * @ORM\Column(type="string")
     */
    private $country ;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $topic ;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $companyName ;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $companySize ;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $website ;

    /**
     * @ORM\Column(type="text")
     */
    private $address ;

    /**
     * @ORM\Column(type="string")
     */
    private $officeNumber ;


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
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
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
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * @param mixed $industry
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;
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
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * @param mixed $topic
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * @return mixed
     */
    public function getCompanySize()
    {
        return $this->companySize;
    }

    /**
     * @param mixed $companySize
     */
    public function setCompanySize($companySize)
    {
        $this->companySize = $companySize;
    }

    /**
     * @return mixed
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param mixed $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getOfficeNumber()
    {
        return $this->officeNumber;
    }

    /**
     * @param mixed $officeNumber
     */
    public function setOfficeNumber($officeNumber)
    {
        $this->officeNumber = $officeNumber;
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