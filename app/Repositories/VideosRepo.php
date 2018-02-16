<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 13/02/2018
 * Time: 5:26 PM
 */

namespace App\Repositories;
use App\Entities\Videos;
use Doctrine\ORM\EntityManagerInterface;


class VideosRepo
{
    protected $em;
    protected $videoService;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;

    }

    public function getAllVideos()
    {
       return  $this->em->getRepository(Videos::class)->findBy(['deleted' =>0]);
    }

    public function addVideo($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
        return true;

    }

    public function updateVideo($data, $id)
    {

    }

    public function getActiveVideos()
    {
        return  $this->em->getRepository(Videos::class)->findBy(['isActive' =>1]);
    }
    public function getActiveVideosByLimit($limit)
    {
        return  $this->em->getRepository(Videos::class)->findBy(['isActive' =>1],['id'=>'DESC'],$limit);
    }

    public function getVideoById($id)
    {
       return $this->em->getRepository(Videos::class)->find($id);
    }
    public function getVideoByCatId($id)
    {
        return $this->em->getRepository(Videos::class)->findBy(['categoryId'=>$id],['id'=>'DESC']);
    }
    public function removeVideo($id){
        $expVideo = $this->em->getRepository(Videos::class)->find($id);
        $this->em->remove($expVideo);
        $this->em->flush();
        return true;
    }

}