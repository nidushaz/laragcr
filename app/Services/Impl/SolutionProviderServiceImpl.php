<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 20/02/2018
 * Time: 2:57 PM
 */

namespace App\Services\Impl;
use App\Services\SolutionProviderService;
use App\Repositories\SolutionProviderRepo;
use App\Entities\Provider;
use App\Repositories\CountryRepo;
use App\Services\Impl\UploadService;
class SolutionProviderServiceImpl implements SolutionProviderService
{
    protected $solutionProviderRepo,$countryRepo,$uploadService;
    public  function __construct(SolutionProviderRepo $solutionProviderRepo,CountryRepo $countryRepo,UploadService $uploadService)
    {
        $this->solutionProviderRepo = $solutionProviderRepo;
        $this->countryRepo = $countryRepo;
        $this->uploadService = $uploadService;
    }

    public function getAllSolutionProvider()
    {
        // TODO: Implement getAllSolutionProvider() method.
    }

    public function addSolutionProvider($data)
    {
        $provider = new Provider();
        $provider->setFirstName($data->get('first_name'));
        $provider->setLastName($data->get('last_name'));
        $provider->setCountry($this->countryRepo->findById($data->get('country'))->getId());
        $provider->setCompanyName($data->get('company'));
        $provider->setAddress($data->get('address'));
        $provider->setCompanyContactNo($data->get('contact'));
        $provider->setCompanySite($data->get('website'));
        $provider->setIsActive(1);
        $provider->setDeleted(0);
        $provider->setCreatedAt(new \DateTime(now()));
        $image_url = $this->uploadService->UploadFile($data,'image','Providers/');

        if($image_url){
            $provider->setLogo($image_url);
            $this->solutionProviderRepo->addSolutionProvider($provider);
            return true;
        }else{
            return  false;
            die();
        }

    }

    public function updateSolutionProvider($data, $id)
    {

        $provider = $this->solutionProviderRepo->findById($id);
        $provider->setFirstName($data->get('first_name'));
        $provider->setLastName($data->get('last_name'));
        $provider->setCountry($this->countryRepo->findById($data->get('country'))->getId());
        $provider->setCompanyName($data->get('company'));
        $provider->setAddress($data->get('address'));
        $provider->setCompanyContactNo($data->get('contact'));
        $provider->setCompanySite($data->get('website'));
        $provider->setIsActive($data->get('active'));
        $provider->setUpdatedAt(new \DateTime(now()));
        $provider->setDeleted(0);
        $image_url = $this->uploadService->UploadFile($data,'image','Providers/');
        $image_url?$provider->setLogo($image_url):'';
        $this->solutionProviderRepo->updateSolutionProvider();
        return true;
    }

    public function findById($id)
    {
        return $this->solutionProviderRepo->findById($id);
    }

    public function getAllActiveSolutionProvider()
    {
        return $this->solutionProviderRepo->getAllActiveSolutionProvider();
    }
}