<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 26/02/2018
 * Time: 3:05 PM
 */

namespace App\Services;


interface UserService
{
    public function getAllActiveUsers();
    public function getAllUsers();
    public function getUserById($id);
    public function save($data);
    public function updateUser($data);
}