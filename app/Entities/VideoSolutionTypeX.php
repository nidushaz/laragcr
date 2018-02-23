<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 13/02/2018
 * Time: 6:04 PM
 */

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;

/**
 *
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="video_solutiontype_x")
 **/
class VideoSolutionTypeX
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="SolutionType", inversedBy="videoId")
     * @ORM\JoinColumn(name="solutiontype_id", referencedColumnName="id")
     */
    private $videoSolutionTypeId;


    /**
     * @ORM\ManyToOne(targetEntity="Videos", inversedBy="videoSolX",cascade={"remove"})
     * @ORM\JoinColumn(name="video_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $videoVideoId;


    /**
     * @ORM\Column(type="string",options={"unsigned":true, "default":0})
     */
    private $deleted;

    /**
     * @ORM\Column(type="boolean")
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
    public function getVideoSolutionTypeId()
    {
        return $this->videoSolutionTypeId;
    }

    /**
     * @param mixed $videoSolutionTypeId
     */
    public function setVideoSolutionTypeId($videoSolutionTypeId)
    {
        $this->videoSolutionTypeId = $videoSolutionTypeId;
    }

    /**
     * @return mixed
     */
    public function getVideoVideoId()
    {
        return $this->videoVideoId;
    }

    /**
     * @param mixed $videoVideoId
     */
    public function setVideoVideoId($videoVideoId)
    {
        $this->videoVideoId = $videoVideoId;
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


}
