<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 14/02/2018
 * Time: 3:05 PM
 */

namespace App\Repositories;
use App\Entities\Tag;
use Doctrine\ORM\EntityManagerInterface;
class TagRepo
{
    protected  $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function tagList()
    {
        return $this->em->getRepository(Tag::class)->findAll();
//        return $this->em->createQueryBuilder()
//            ->select('tagName')
//            ->from('Tag', 'tag')
//            ->orderBy('tag.tag_name', 'ASC');
    }

    public function tagAdd($data)
    {
        $this->em->persist($data);
        $this->em->flush();
        return true;
    }
}