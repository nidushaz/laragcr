<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\IndustryService;
use App\Services\CheckPermissionService;
class IndustryController extends Controller
{
    protected $industryService,$checkPermissionService;
    public  function __construct(IndustryService $industryService,CheckPermissionService $checkPermissionService)
    {
        $this->industryService = $industryService;
        $this->checkPermissionService = $checkPermissionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $industries = $this->industryService->getAllActiveIndustry();
        $isAuthorize = $this->checkPermissionService->checkPermission();
        return view('admin.industry',compact('industries','isAuthorize'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'industry' => 'required'
        ]);
        $industry = $request->get('industry');
        $result  = $this->industryService->addIndustry($industry);
        if($result){
            return redirect()->back()->with('success-msg', ' Industry added successfully.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'industryName' => 'required',
            'active' => 'required'
        ]);

        $result  = $this->industryService->updateIndustry($request);
        if($result){
            return redirect()->back()->with('success-msg', ' Industry updated successfully.');
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
