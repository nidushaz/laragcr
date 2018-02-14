<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SolutionTypeService;
class SolutionTypeController extends Controller
{

    private $solutionTypeService;
    public function __construct(SolutionTypeService $solutionTypeService)
    {
        $this->solutionTypeService = $solutionTypeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = $this->solutionTypeService->getAllActiveSolutionType();
        return view('admin.solutionType',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createSolutionType');
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
           "solutiontype" => "required",
            "image" => 'required',
            "description" => "required"
        ]);
        $result = $this->solutionTypeService->addSolutionType($request);
        if($result){
            return redirect()->route('solution-type.index')->with('success-msg', ' Solution type added successfully.');
        }else{
            return redirect()->route('solution-type.index')->with('error-msg', 'Image is not set OR something went wrong.');
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
        $type = $this->solutionTypeService->getActiveSolutionType($id);
        return view('admin.createSolutionType',compact('type'));
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
            "solutiontype" => "required",
            "description" => "required",
            "active" => "required"
        ]);
        $result = $this->solutionTypeService->updateSolutionType($request,$id);
        if($result){
            return redirect()->route('solution-type.edit',['solution-type'=>$id])->with('success-msg', ' Solution type updated successfully.');
        }else{
            return redirect()->route('solution-type.edit',['solution-type'=>$id])->with('error-msg', 'Something went wrong.');
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
