<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CountryService;
class CountryController extends Controller
{
    private $countryService;
    public function __construct(CountryService $countryService)
    {
      $this->countryService = $countryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $countries = $this->countryService->getAllActiveCountry();
        return view('admin.country',compact('countries'));
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
            'country' => 'required'
        ]);
        $country = $request->get('country');
        $result  = $this->countryService->addCountry($country);
        if($result){
            return redirect()->back()->with('success-msg', ' Country added successfully.');
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
            'country' => 'required',
            'active' => 'required'
        ]);

        $result  = $this->countryService->updateCountry($request);
        if($result){
            return redirect()->back()->with('success-msg', ' Country updated successfully.');
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
