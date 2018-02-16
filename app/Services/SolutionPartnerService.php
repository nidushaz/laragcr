<?php
namespace App\Services;


interface SolutionPartnerService
{
    public function getAllSolutionPartner();
    public function addSolutionPartner($data);
    public function updateSolutionPartner($data,$id);
    public function getActiveSolutionPartner($id);
    public function getAllActiveSolutionPartner();
}