<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 26/02/2018
 * Time: 10:28 AM
 */

namespace App\Services;


interface RoleService
{
    public function getAllActiveRoles();
    public function getAllRoles();
    public function getRoleById($id);
    public function saveRole($data);
    public function updateRole($data,$id);
}