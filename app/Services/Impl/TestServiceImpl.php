<?php
namespace App\Services\Impl;
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 05/02/2018
 * Time: 5:40 PM
 */
use App\Entities\User;
use App\Services\TestService;
use Doctrine\ORM\EntityManagerInterface;
class TestServiceImpl implements TestService
{
    private $em;
    function __construct(EntityManagerInterface $em)
    {
       $this->em = $em;
    }

    public function saveTest($request)
    {
        $task = new User();
        $task->setName($request->input('name'));
        $task->setEmail($request->input('email'));
        $task->setPassword(bcrypt($request->input('password')));
        $this->em->persist($task);
        if($this->em->flush())
            return true;
        else
            return false;
    }
}