<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Services\ContactService;
use App\Services\OfficeService;
use App\Services\CountryService;
class ContactController extends Controller
{
    protected $contactService,$officeService,$countryService;
    //protected $route,$page_id,$content,$banner,$solutions,$abouts,$video;
    public function __construct(ContactService $contactService,OfficeService $officeService,CountryService $countryService)
    {
        $this->contactService = $contactService;
        $this->officeService = $officeService;
        $this->countryService =$countryService;
    }
     public function index(){
        $offices = $this->officeService->getAllOffices();
        $countries = $this->countryService->getAllActiveCountry();
        return view('front-end.contact',compact('offices','countries'));
     }
     public  function send(Request $request){

        $request->validate([
           "firstName" => "required",
            "lastName" => "required",
            "email" => "required|email",
            "industry" => "required",
            "country" => "required",
            "company" => "required",
            "company-size" => "required",
            "number" => "required",
            "address" => "required",
            "topic" => "required"
        ]);

        $result = $this->contactService->contactSaveAndSend($request);
         if($result){
             return redirect()->back()->with('success-msg', ' Send successfully.');
         }else{
             return redirect()->back()->with('error-msg', ' Something went wrong.');
         }

     }
}
