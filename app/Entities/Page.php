<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 07/02/2018
 * Time: 11:39 AM
 */

namespace App\Entities;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;

/**
 * Class Page
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="pages")
 */
class Page
{

    public function __construct()
    {
        $this->banners = new ArrayCollection();
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
    private $name ;

    /**
     * @ORM\Column(type="string",length=500)
     */
    private $link ;



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
     * @ORM\OneToMany(targetEntity="PageBanner", mappedBy="bannerPageId",cascade={"persist"})
     * @var ArrayCollection|PageBanner[]
     */
    private $banners;

    /**
     * @ORM\OneToOne(targetEntity="PageContent", mappedBy="contentPageId")
     */
    private $pageContent;



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
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
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



    /**
     * @return mixed
     */
    public function getBanners()
    {
        return $this->banners;
    }

    /**
     * @param PageBanner $banner
     */
    public function addBanners(PageBanner $banner)
    {
        if(!$this->banners->contains($banner)) {
            $banner->setBannerPageId($this);
            $this->banners->add($banner);
        }
    }

    /**
     * @return mixed
     */
    public function getPageContent()
    {
        return $this->pageContent;
    }

    /**
     * @param mixed $pageContent
     */
    public function setPageContent($pageContent)
    {
        $this->pageContent = $pageContent;
    }






}