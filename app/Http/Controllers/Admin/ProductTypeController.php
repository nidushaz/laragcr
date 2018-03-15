<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ProductTypeService;
use App\Services\CheckPermissionService;
class ProductTypeController extends Controller
{
    protected $productTypeService,$checkPermissionService;
    public function __construct(ProductTypeService $productTypeService,CheckPermissionService $checkPermissionService)
    {
        $this->productTypeService  = $productTypeService;
        $this->checkPermissionService = $checkPermissionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productType = $this->productTypeService->getAllActiveProductType();
        $isAuthorize = $this->checkPermissionService->checkPermission();
        return view('admin.productType',compact('productType','isAuthorize'));
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
            'productType' => 'required'
        ]);
        $result  = $this->productTypeService->addProductType($request->get('productType'));
        if($result){
            return redirect()->back()->with('success-msg', ' Product Type added successfully.');
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
            'productTypeName' => 'required',
            'active' => 'required'
        ]);

        $result  = $this->productTypeService->updateProductType($request);
        if($result){
            return redirect()->back()->with('success-msg', ' Product Type updated successfully.');
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
