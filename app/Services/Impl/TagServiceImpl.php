<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 14/02/2018
 * Time: 3:05 PM
 */

namespace App\Services\Impl;
use App\Services\TagService;
use App\Repositories\TagRepo;
use App\Entities\Tag;
use App\Services\ProductTypeService;
use App\Services\SolutionTypeService;
use App\Services\IndustryService;
class TagServiceImpl implements TagService
{
    protected  $tagRepo;
    protected  $ind;
    protected  $pt;
    protected  $st;
    public function __construct(TagRepo $tagRepo,IndustryService $ind,SolutionTypeService $st,ProductTypeService $pt)
    {
        $this->tagRepo = $tagRepo;
        $this->ind = $ind;
        $this->st = $st;
        $this->pt =$pt;
    }

    public function tagList()
    {
        return $this->tagRepo->tagList();
    }

    public function tagAdd($data)
    {
       $tag = new Tag();
       $tag->setTagName($data);
       $tag->setCreatedAt(new \DateTime(now()));
       $tag->setDeleted(0);
       $this->tagRepo->tagAdd($tag);
    }


//    /**
//     * Sync up the list of tags in the database. Add Tag if not exist.
//     */
    public function checkTags($tags)
    {
            $tag  = explode(',',$tags);
            $currentListTag = $this->tagRepo->tagList();
            $currentListST = $this->st->STList();
            $currentListIND = $this->ind->INDList();
            $currentListPT = $this->pt->PTList();

            $currentListArray=[];
            foreach ($currentListTag as $tagsArray){
                $currentListArray[] = $tagsArray->getTagName();
            }
            foreach ($currentListIND as $tagsArrayInd){
                $currentListArray[] = $tagsArrayInd->getIndustryName();
            }
            foreach ($currentListST as $tagsArraySt){
                $currentListArray[] = $tagsArraySt->getName();
            }
            foreach ($currentListPT as $tagsArrayPt){
                $currentListArray[] = $tagsArrayPt->getName();
            }
            //print_r($currentListArray);
            //print_r($tag);exit;
            //$haveKeywords = array_intersect($currentListArray, $tag);
          // print_r($haveKeywords);exit;
            $newTags = array_diff($tag, $currentListArray);
            //print_r($newTags);
            //$mergeList = array();
            foreach ($newTags as $newTag)
            {
                $this->tagAdd($newTag);
                //$mergeList[] = $tagSep->id;
            }
//        $syncList = array_combine($mergeList, $newKeywords);
//
//        $final = $haveKeywords + $syncList;
//        return array_keys($final);
        return true;
    }
}