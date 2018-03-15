<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 01/03/2018
 * Time: 11:49 AM
 */

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;

/**
 *
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="general_settings")
 */
class General
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
    private $supportEmail;

    /**
     * @ORM\Column(type="string",length=500)
     */
    private $supportNumbers;

    /**
     * @ORM\Column(type="string",length=500)
     */
    private $contactEmail;

    /**
     * @ORM\Column(type="boolean",options={"unsigned":true, "default":1})
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
    public function getSupportEmail()
    {
        return $this->supportEmail;
    }

    /**
     * @param mixed $supportEmail
     */
    public function setSupportEmail($supportEmail)
    {
        $this->supportEmail = $supportEmail;
    }

    /**
     * @return mixed
     */
    public function getSupportNumbers()
    {
        return $this->supportNumbers;
    }

    /**
     * @param mixed $supportNumbers
     */
    public function setSupportNumbers($supportNumbers)
    {
        $this->supportNumbers = $supportNumbers;
    }

    /**
     * @return mixed
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @param mixed $contactEmail
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
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