<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SolutionProviderService;
use App\Services\CountryService;
class SolutionProviderController extends Controller
{
    protected  $solutionProviderService,$countryService;
    public function __construct(SolutionProviderService $solutionProviderService,CountryService $countryService)
    {
        $this->solutionProviderService = $solutionProviderService;
        $this->countryService = $countryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers =$this->solutionProviderService->getAllActiveSolutionProvider();
        return view('admin.solutionProviders',compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = $this->countryService->getAllActiveCountry();
        return view('admin.solutionProvider',compact('countries'));
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
            "first_name" => "required",
            "last_name" => "required",
            "company" => "required",
            "contact" => "required",
            "country" => "required",
            "image" => 'required',
            "address" => "required"
        ]);
        $result = $this->solutionProviderService->addSolutionProvider($request);
        if($result){
            return redirect()->route('providers.index')->with('success-msg', 'Provider added successfully.');
        }else{
            return redirect()->route('providers.index')->with('error-msg', 'Image is not set OR something went wrong.');
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
        $provider = $this->solutionProviderService->findById($id);
        $countries = $this->countryService->getAllActiveCountry();
        return view('admin.solutionProvider',compact('provider','countries'));
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
            "first_name" => "required",
            "last_name" => "required",
            "company" => "required",
            "contact" => "required",
            "country" => "required",
            "address" => "required",
            "active" => "required"
        ]);
        $result = $this->solutionProviderService->updateSolutionProvider($request,$id);
        if($result){
            return redirect()->route('providers.edit',['providers'=>$id])->with('success-msg', 'Provider updated successfully.');
        }else{
            return redirect()->route('providers.edit',['providers'=>$id])->with('error-msg', 'Something went wrong.');
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
