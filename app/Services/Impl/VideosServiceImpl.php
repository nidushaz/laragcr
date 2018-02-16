<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 13/02/2018
 * Time: 5:25 PM
 */

namespace App\Services\Impl;
use App\Services\VideosService;
use App\Repositories\VideosRepo;
use Illuminate\Support\Facades\Input;
use App\Entities\Videos;
use App\Repositories\CategoryRepo;
use App\Services\TagService;
class VideosServiceImpl implements  VideosService
{

    protected $videosRepo;
    protected $cat;
    protected $tags;
    public function __construct(VideosRepo $videosRepo,CategoryRepo $cat,TagService $tagService)
    {
        $this->videosRepo = $videosRepo;
        $this->cat = $cat;
        $this->tags = $tagService;
    }

    public function getAllVideos()
    {
       return $this->videosRepo->getAllVideos();
    }

    public function addVideo($data)
    {

        $final_array = $this->setArray($data);
//        foreach ($final_array as $val){
//           $cat_id = $this->cat->findCategory($val[0]);
//           $exp_centre->setCategoryId($cat_id);
//           $exp_centre->setTitle($val[1]);
//           $exp_centre->setTag($val[2]);
//           $exp_centre->setMediaUrl($val[3]);
//           $exp_centre->setIsActive(1);
//           $exp_centre->setCreatedAt(new \DateTime(now()));
//           $exp_centre->setDeleted(0);
//           $this->videosRepo->addVideo($exp_centre);
//        }
        if($final_array)
        return true;
    }

    public function updateVideo($data, $id)
    {

       $result = $this->removeVideo($id);
       if($result){
           $return = $this->addVideo($data);
           return $return?true:false;

       }
    }

    public function getActiveVideos()
    {
        return $this->videosRepo->getActiveVideos();
    }

    public function getVideoById($id)
    {
        return $this->videosRepo->getVideoById($id);
    }

    public function getVideoByCatId($id)
    {
        return $this->videosRepo->getVideoByCatId($id);
    }
    public function setArray($data)
    {
        $exp_centre = new Videos();
       $arr_length = count($data->get('title'));
       $input_array = Input::all();
       $combined_array = [];
       for($i=0; $i<$arr_length;$i++){
           // check new tags is exist?if no then add to in tags entity
           $this->tags->checkTags($input_array['tags'][$i]);
           $cat_id = $this->cat->findCategory($data->get('category'));

           $exp_centre->setCategoryId($cat_id);
           $exp_centre->setTitle($input_array['title'][$i]);
           $exp_centre->setTag($input_array['tags'][$i]);
           $exp_centre->setMediaUrl($input_array['url'][$i]);
           $exp_centre->setIsActive(1);
           $exp_centre->setCreatedAt(new \DateTime(now()));
           $exp_centre->setDeleted(0);
           $this->videosRepo->addVideo($exp_centre);
       }

       //print_r($data->all());
      // echo  $splitter = count($data->all())-1;
       // print_r($combined_array);exit;
       // $final_array = array_chunk($combined_array,$splitter);
        return true;

    }

    public function removeVideo($id)
    {
        return $this->videosRepo->removeVideo($id);
    }

    public function getActiveVideosByLimit($limit)
    {
        $this->videosRepo->getActiveVideosByLimit($limit);
    }


}