<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 07/02/2018
 * Time: 12:31 PM
 */

namespace App\Entities;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;

/**
 * Class Page
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="news_attachments")
 */

class NewsAttachment
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
    private $attachment;

    /**
     * @ORM\ManyToOne(targetEntity="News", inversedBy="NewsAttachment")
     * @ORM\JoinColumn(name="news_id", referencedColumnName="id")
     */
    private $newsId;


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
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param mixed $attachment
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * @return mixed
     */
    public function getNewsId()
    {
        return $this->newsId;
    }

    /**
     * @param mixed $newsId
     */
    public function setNewsId($newsId)
    {
        $this->newsId = $newsId;
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