<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 26/02/2018
 * Time: 3:11 PM
 */

namespace App\Repositories;

use App\Entities\User;
use App\Entities\UserRole;
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
       return $this->em->getRepository(User::class)->findBy(['deleted'=>0,'isAdmin'=>null]);
    }

    public function getUserById($id)
    {
        return $this->em->getRepository(User::class)->find($id);
    }

    public function saveUser($data)
    {
        $this->em->persist($data);
        $this->em->flush();
        return true;
    }

    public function removeExistingUserRole($id){
        $userRoles = $this->em->getRepository(UserRole::class)->findBy(['userId'=>$id]);
        foreach ($userRoles as $userRole){
            $this->em->remove($userRole);
        }
        $this->em->flush();
    }
    public function updateUser($data)
    {
        // TODO: Implement updateUser() method.
    }
}