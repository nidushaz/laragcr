<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 12/02/2018
 * Time: 4:38 PM
 */

namespace App\Services;


interface SolutionTypeService
{
    public function getAllActiveSolutionType();
    public function addSolutionType($data);
    public function updateSolutionType($data,$id);
    public function getActiveSolutionType($id);
    public function STList();
}