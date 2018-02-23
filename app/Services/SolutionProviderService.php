<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 20/02/2018
 * Time: 2:55 PM
 */

namespace App\Services;


interface SolutionProviderService
{
    public function getAllSolutionProvider();
    public function addSolutionProvider($data);
    public function updateSolutionProvider($data,$id);
    public function findById($id);
    public function getAllActiveSolutionProvider();
}