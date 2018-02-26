<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 26/02/2018
 * Time: 10:29 AM
 */

namespace App\Services\Impl;

use App\Services\RoleService;
use App\Repositories\RoleRepo;
use App\Entities\Role;
class RoleServiceImpl implements RoleService
{
    private $roleRepo;
    public function __construct(RoleRepo $roleRepo)
    {
        $this->roleRepo = $roleRepo;
    }
    public function getAllActiveRoles()
    {
        return $this->roleRepo->getAllActiveRoles();
    }
    public function getAllRoles()
    {
        return $this->roleRepo->getAllRoles();
    }
    public function getRoleById($id)
    {
        return $this->roleRepo->getRoleById($id);
    }
    public function saveRole($data)
    {
        $role = new Role();
        $role->setRole($data->get('role'));
        $role->setPermissions(json_encode($data->get('permission'),JSON_FORCE_OBJECT));
        $role->setIsActive(1);
        $role->setDeleted(0);
        $role->setCreatedAt(new \DateTime(now()));
        return $this->roleRepo->saveRole($role);
    }
    public function updateRole($data, $id)
    {
        $role = $this->roleRepo->getRoleById($id);
        $role->setRole($data->get('role'));
        $role->setPermissions(json_encode($data->get('permission'),JSON_FORCE_OBJECT));
        $role->setIsActive($data->get('active'));
        $role->setDeleted(0);
        $role->setCreatedAt(new \DateTime(now()));
        return $this->roleRepo->updateRole($role,$id);
    }

}