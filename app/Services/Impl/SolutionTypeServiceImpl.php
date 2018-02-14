<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 12/02/2018
 * Time: 4:39 PM
 */

namespace App\Services\Impl;
use App\Services\SolutionTypeService;
use App\Repositories\SolutionTypeRepo;
class SolutionTypeServiceImpl implements  SolutionTypeService
{

    protected $solutionRepo;
    public function __construct(SolutionTypeRepo $solutionTypeRepo)
    {
        $this->solutionRepo = $solutionTypeRepo;
    }

    public function getAllActiveSolutionType()
    {
        return $this->solutionRepo->getAllActiveSolutionType();
    }

    public function addSolutionType($data)
    {
        return $this->solutionRepo->addSolutionType($data);
    }

    public function updateSolutionType($data,$id)
    {
        return $this->solutionRepo->updateSolutionType($data,$id);
    }

    public function getActiveSolutionType($id)
    {
        return $this->solutionRepo->getActiveSolutionType($id);
    }

    public function STList()
    {
       return $this->solutionRepo->getTags();
    }
}