<?php

namespace App\Repositories;
use App\Entities\Role;
use Doctrine\ORM\EntityManagerInterface;
class RoleRepo
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function getAllActiveRoles()
    {
        return $this->em->getRepository(Role::class)->findBy(['isActive'=>1]);
    }
    public function getAllRoles()
    {
        return $this->em->getRepository(Role::class)->findAll();
    }
    public function getRoleById($id)
    {
        return $this->em->getRepository(Role::class)->find($id);
    }
    public function saveRole($data)
    {
        $this->em->persist($data);
        $this->em->flush();
        return true;
    }
    public function updateRole($data, $id)
    {
        $this->em->flush();
        return true;
    }
}