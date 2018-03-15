<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OfficeValidationForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\OfficeService;
use App\Services\CheckPermissionService;
use App\Services\CountryService;
class OfficeController extends Controller
{
   private  $officeService,$checkPermissionService,$countryService;
   public function __construct(OfficeService $officeService,CheckPermissionService $checkPermissionService,CountryService $countryService)
   {
       $this->officeService = $officeService;
       $this->checkPermissionService = $checkPermissionService;
       $this->countryService = $countryService;
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offices = $this->officeService->getActiveOffice();
        $isAuthorize = $this->checkPermissionService->checkPermission();
        return view('admin.offices',compact('offices','isAuthorize'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = $this->countryService->getAllActiveCountry();
        return view('admin.office',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfficeValidationForm $request)
    {
        $result = $this->officeService->saveOffice($request->all());
        if($result){
            return redirect()->back()->with('success-msg', ' Office added successfully.');
        }else{
            return redirect()->back()->with('error-msg', ' Something went wrong.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $office = $this->officeService->getOfficeById($id);
        $countries= $this->countryService->getAllActiveCountry();
        return view('admin.office',compact('office','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OfficeValidationForm $request, $id)
    {
        $result = $this->officeService->updateOffice($request->all(),$id);
        if($result){
            return redirect()->back()->with('success-msg', ' Office updated successfully.');
        }else{
            return redirect()->back()->with('error-msg', ' Something went wrong.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
