<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 16/02/2018
 * Time: 5:54 PM
 */

namespace App\Services\Impl;

use App\Services\ContactService;
use App\Repositories\ContactRepo;
use App\Entities\ContactBackup;
use Illuminate\Support\Facades\Mail;
class ContactServiceImpl implements ContactService
{
    protected $contactRepo;
    public function __construct(ContactRepo $contactRepo)
    {
        $this->contactRepo = $contactRepo;
    }

    public function contactSaveAndSend($data)
    {
        $contactService = new ContactBackup();
        $contactService->setFirstName($data->get('firstName'));
        $contactService->setLastName($data->get('lastName'));
        $contactService->setEmail($data->get('email'));
        $contactService->setCompanyName($data->get('company'));
        $contactService->setIndustry($data->get('industry'));
        $contactService->setCompanySize($data->get('company-size'));
        $contactService->setCountry($data->get('country'));
        $contactService->setTopic($data->get('topic'));
        $contactService->setWebsite($data->get('website'));
        $contactService->setOfficeNumber($data->get('number'));
        $contactService->setAddress($data->get('address'));
        $contactService->setCreatedAt(new \DateTime(now()));
        Mail::send(['text'=>'mail.contactmail'],['data'=>$data],function($message) use ($data){
            $message->to('asim@technople.in','To Admin')->subject('contact');
            $message->from('asim@technople.com');
        });
        return $this->contactRepo->contactSaveAndSend($contactService);
    }

}