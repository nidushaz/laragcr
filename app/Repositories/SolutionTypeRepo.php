<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 12/02/2018
 * Time: 4:40 PM
 */

namespace App\Repositories;
use App\Entities\SolutionTypeImageX;
use LaravelDoctrine\ORM\Facades\Doctrine;
use Doctrine\ORM\EntityManagerInterface;
use App\Entities\SolutionType;
use App\Services\Impl\UploadService;
class SolutionTypeRepo
{
    protected $em;
    protected $uploadService;
    public function __construct(EntityManagerInterface $em,UploadService $uploadService)
    {
        $this->em = $em;
        $this->uploadService = $uploadService;
    }

    public function getAllActiveSolutionType(){
        $data = $this->em->getRepository(SolutionType::class)->findBy(['deleted' => 0]);
        return $data;
    }

    public function getSolutionType($id){
        return $this->em->getRepository(SolutionType::class)->find($id);
    }

    public function getIsActive()
    {
        return $this->em->getRepository(SolutionType::class)->findBy(['deleted' => 0,'isActive' =>1]);
    }

    public  function getActiveSolutionType($id){
        return $this->em->getRepository(SolutionType::class)->find($id);
    }

    public function addSolutionType($data){
        $solutionType = new SolutionType();
        $solutionType->setName($data->get('solutiontype'));
        $solutionType->setDescription($data->get('description'));
        $solutionType->setIsActive(1);
        $solutionType->setDeleted(0);
        $solutionType->setCreatedAt(new \DateTime(now()));
        $image_url = $this->uploadService->UploadFile($data,'image','Solution/');

        if($image_url){
            $solutionType->setImage($image_url);
            $this->em->persist($solutionType);
            $this->em->flush();
            $lastInsertId=$solutionType->getId();
            $insertId = $this->em->getRepository(SolutionType::class)->find($lastInsertId);
            $mulImage=$this->uploadService->UploadMulFile($data,'actimage','CatalogImage');
            if($mulImage){
                foreach($mulImage as $mul)
                {
                    $solTypeImg = new SolutionTypeImageX();
                    $solTypeImg->setSolutionTypeImageId($insertId);
                    $solTypeImg->setMediaUrl($mul);
                    $solTypeImg->setDeleted(0);
                    $solTypeImg->setCreatedAt(new \Datetime(now()));
                    $solTypeImg->setUpdatedAt(new \DateTime(now()));
                    $this->em->persist($solTypeImg);
                    $this->em->flush();
                }
                return true;
            }
            return true;
        }else{
            return  false;
            die();
        }



    }

    public function updateSolutionType($data,$id){
        $solutionType = $this->em->getRepository(SolutionType::class)->find($id);
        $solutionType->setName($data->get('solutiontype'));
        $solutionType->setDescription($data->get('description'));
        $solutionType->setIsActive($data->get('active'));
        $solutionType->setDeleted(0);
        $image_url = $this->uploadService->UploadFile($data,'image','Solution/');
        $image_url?$solutionType->setImage($image_url):'';



        $lastInsertId=$solutionType->getId();
        $insertId = $this->em->getRepository(SolutionType::class)->find($lastInsertId);
        $findimgattch=$this->em->getRepository(SolutionTypeImageX::class)->findBy(["solutionTypeImageId"=>$solutionType->getId()]);

        foreach ($findimgattch as $feature) {
            $this->em->remove($feature);
        }
        $this->em->flush();

        if($data->get('imageUrl')):
            $oldUrl=$data->get('imageUrl');
            foreach($oldUrl as $oldImg)
            {
                $solTypeImg = new SolutionTypeImageX();
                $solTypeImg->setSolutionTypeImageId($insertId);
                $solTypeImg->setMediaUrl($oldImg);
                $solTypeImg->setDeleted(0);
                $solTypeImg->setCreatedAt(new \Datetime(now()));
                $solTypeImg->setUpdatedAt(new \DateTime(now()));
                $this->em->persist($solTypeImg);
                $this->em->flush();
            }

        endif;
        $mulImage=$this->uploadService->UploadMulFile($data,'actimage','newsAttach');

        if($mulImage){
            foreach($mulImage as $mul)
            {
                $newsAttach = new SolutionTypeImageX();
                $newsAttach->setSolutionTypeImageId($insertId);
                $newsAttach->setMediaUrl($mul);
                $newsAttach->setDeleted(0);
                $newsAttach->setCreatedAt(new \Datetime(now()));
                $newsAttach->setUpdatedAt(new \DateTime(now()));
                $this->em->persist($newsAttach);
                $this->em->flush();
            }
        }
        $this->em->flush();
        return true;





    }


    public function getTags(){
        return $this->em->getRepository(SolutionType::class)->findAll();
    }


}