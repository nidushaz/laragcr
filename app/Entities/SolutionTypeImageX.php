<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 22/02/2018
 * Time: 2:12 PM
 */

namespace App\Entities;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;
/**
 *
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="solutiontype_images")
 */
class SolutionTypeImageX
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="SolutionType", inversedBy="solutionImage")
     * @ORM\JoinColumn(name="solution_type_id", referencedColumnName="id")
     */
    private $solutionTypeImageId;

    /**
     * @ORM\Column(type="text")
     */
    private $mediaUrl;

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
    public function getSolutionTypeImageId()
    {
        return $this->solutionTypeImageId;
    }

    /**
     * @param mixed $solutionTypeImageId
     */
    public function setSolutionTypeImageId($solutionTypeImageId)
    {
        $this->solutionTypeImageId = $solutionTypeImageId;
    }

    /**
     * @return mixed
     */
    public function getMediaUrl()
    {
        return $this->mediaUrl;
    }

    /**
     * @param mixed $mediaUrl
     */
    public function setMediaUrl($mediaUrl)
    {
        $this->mediaUrl = $mediaUrl;
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