<?php

namespace App\Http\Controllers\Admin;

use App\Services\AdService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CheckPermissionService;
class AdController extends Controller
{
    private $adService,$checkPermissionService;
    public function __construct(AdService $adService,CheckPermissionService $checkPermissionService){
        $this->adService = $adService;
        $this->checkPermissionService = $checkPermissionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $ads = $this->adService->getAllAds();
        $isAuthorize = $this->checkPermissionService->checkPermission();
        return view('admin.ads',compact('ads','isAuthorize'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.ad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            "title" => "required",
            "image" => 'required',
            "addDetail" => "required"
        ]);
        $result = $this->adService->addAd($request);
        if($result){
            return redirect()->route('ads.index')->with('success-msg', 'Ad added successfully.');
        }else{
            return redirect()->route('ads.index')->with('error-msg', 'Please check the form and submit again.');
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
    public function edit($id){
        $ad = $this->adService->getActiveAd($id);
        return view('admin.ad', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $request->validate([
            "title" => "required",
            "addDetail" => "required"
        ]);
        $result = $this->adService->updateAd($request, $id);
        if($result){
            return redirect()->route('ads.edit', ['ads'=>$id])->with('success-msg', 'Ad updated successfully.');
        }else{
            return redirect()->route('ads.edit', ['ads'=>$id])->with('error-msg', 'Please check the form and submit again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }
}
