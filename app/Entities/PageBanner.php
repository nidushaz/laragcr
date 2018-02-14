<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 06/02/2018
 * Time: 3:12 PM
 */

namespace App\Entities;
use Doctrine\ORM\Mapping AS ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="page_banners")
 */
class PageBanner
{
    public function __construct()
    {
        //$this->bannerCountryId = new ArrayCollection();
        //$this->bannerPageId = new ArrayCollection();
    }

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     */
    private $image;

    /**
     * @ORM\Column(type="string")
     */
    private $heading;

    /**
     * @ORM\Column(type="text" , nullable=true)
     */
    private $bannerDescription;


    /**
     * @ORM\Column(type="string")
     */
    private $anchorUrl;

    /**
     * @ORM\Column(type="string")
     */
    private $anchorText;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entities\Country", inversedBy="banners")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    private $bannerCountryId;

    /**
     * @ORM\ManyToOne(targetEntity="Page", inversedBy="banners")
     * @ORM\JoinColumn(name="page_id", referencedColumnName="id")
     */
    private $bannerPageId;

    /**
     * @ORM\Column(type="boolean",options={"unsigned":true, "default":0})
     */
    private $isActive;

    /**
     * @ORM\Column(type="string",options={"unsigned":true, "default":0})
     */
    private $deleted;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime",nullable=true)
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * @param mixed $heading
     */
    public function setHeading($heading)
    {
        $this->heading = $heading;
    }

    /**
     * @return mixed
     */
    public function getBannerDescription()
    {
        return $this->bannerDescription;
    }

    /**
     * @param mixed $bannerDescription
     */
    public function setBannerDescription($bannerDescription)
    {
        $this->bannerDescription = $bannerDescription;

    }



    /**
     * @return mixed
     */
    public function getAnchorUrl()
    {
        return $this->anchorUrl;
    }

    /**
     * @param mixed $anchorUrl
     */
    public function setAnchorUrl($anchorUrl)
    {
        $this->anchorUrl = $anchorUrl;
    }

    /**
     * @return mixed
     */
    public function getAnchorText()
    {
        return $this->anchorText;
    }

    /**
     * @param mixed $anchorText
     */
    public function setAnchorText($anchorText)
    {
        $this->anchorText = $anchorText;
    }

    /**
     * @return mixed
     */
    public function getBannerCountryId()
    {
        return $this->bannerCountryId;
    }

    /**
     * @param mixed $bannerCountryId
     */
    public function setBannerCountryId($bannerCountryId)
    {
        $this->bannerCountryId = $bannerCountryId;
        //return $this;
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
    public function getBannerPageId()
    {
        return $this->bannerPageId;
    }

    /**
     * @param mixed $bannerPageId
     */
    public function setBannerPageId($bannerPageId)
    {
        $this->bannerPageId = $bannerPageId;
        return $this;
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