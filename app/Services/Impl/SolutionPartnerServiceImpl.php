<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 13/02/2018
 * Time: 11:12 AM
 */

namespace App\Services\Impl;
use App\Services\SolutionPartnerService;
use App\Repositories\SolutionPartnerRepo;
class SolutionPartnerServiceImpl implements SolutionPartnerService
{

    protected $solutionPartnerRepo;
    public function __construct(SolutionPartnerRepo $partnerRepo)
    {
        $this->solutionPartnerRepo = $partnerRepo;
    }

    public function getAllSolutionPartner()
    {
        return $this->solutionPartnerRepo->getAllSolutionPartner();
    }

    public function addSolutionPartner($data)
    {
        return $this->solutionPartnerRepo->addSolutionPartner($data);
    }

    public function updateSolutionPartner($data, $id)
    {
        return $this->solutionPartnerRepo->updateSolutionPartner($data,$id);
    }

    public function getActiveSolutionPartner($id)
    {
        return $this->solutionPartnerRepo->getActiveSolutionPartner($id);
    }
}