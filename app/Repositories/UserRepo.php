<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 26/02/2018
 * Time: 3:11 PM
 */

namespace App\Repositories;

use App\Entities\User;
use Doctrine\ORM\EntityManagerInterface;
class UserRepo
{
    protected $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getAllActiveUsers()
    {
        // TODO: Implement getAllActiveUsers() method.
    }

    public function getAllUsers()
    {
        // TODO: Implement getAllUsers() method.
    }

    public function getUserById($id)
    {
        // TODO: Implement getUserById() method.
    }

    public function saveUser($data)
    {
        $this->em->persist($data);
        $this->em->flush();
        return true;
    }

    public function updateUser($data)
    {
        // TODO: Implement updateUser() method.
    }
}