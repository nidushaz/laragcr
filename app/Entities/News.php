<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 07/02/2018
 * Time: 12:30 PM
 */

namespace App\Entities;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;

/**
 * Class Page
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="news")
 */

class News
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=500)
     */
    private $newsHeading ;

    /**
     * @ORM\Column(type="string",length=500)
     */
    private $thumbnail ;


    /**
     * @ORM\Column(type="string")
     */
    private $tag ;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="text")
     */
    private $newsSummary ;

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="News")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    private $newsCountryId;

    /**
     * @ORM\Column(type="string",options={"unsigned":true, "default":0})
     */
    private $deleted;
	
	/**
     * @ORM\Column(type="boolean")
     */
    private $isActive;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $source;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $eventStartDate;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $eventEndDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\OneToMany(targetEntity="NewsAttachment", mappedBy="newsId")
     */
    private $NewsAttachment;

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
    public function getNewsHeading()
    {
        return $this->newsHeading;
    }

    /**
     * @param mixed $newsHeading
     */
    public function setNewsHeading($newsHeading)
    {
        $this->newsHeading = $newsHeading;
    }

    /**
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param mixed $thumbnail
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return mixed
     */
    public function getNewsSummary()
    {
        return $this->newsSummary;
    }

    /**
     * @param mixed $newsSummary
     */
    public function setNewsSummary($newsSummary)
    {
        $this->newsSummary = $newsSummary;
    }

    /**
     * @return mixed
     */
    public function getNewsCountryId()
    {
        return $this->newsCountryId;
    }

    /**
     * @param mixed $newsCountryId
     */
    public function setNewsCountryId($newsCountryId)
    {
        $this->newsCountryId = $newsCountryId;
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
    public function getNewsAttachment()
    {
        return $this->NewsAttachment;
    }

    /**
     * @param mixed $NewsAttachment
     */
    public function setNewsAttachment($NewsAttachment)
    {
        $this->NewsAttachment = $NewsAttachment;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param mixed $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getEventStartDate()
    {
        return $this->eventStartDate;
    }

    /**
     * @param mixed $eventStartDate
     */
    public function setEventStartDate($eventStartDate)
    {
        $this->eventStartDate = $eventStartDate;
    }

    /**
     * @return mixed
     */
    public function getEventEndDate()
    {
        return $this->eventEndDate;
    }

    /**
     * @param mixed $eventEndDate
     */
    public function setEventEndDate($eventEndDate)
    {
        $this->eventEndDate = $eventEndDate;
    }


}