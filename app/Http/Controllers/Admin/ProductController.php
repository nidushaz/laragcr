<?php

namespace App\Http\Controllers\Admin;

use App\Services\CountryService;
use App\Services\IndustryService;
use App\Services\ProductService;
use App\Services\ProductTypeService;
use App\Services\SolutionTypeService;
use App\Services\SolutionProviderService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CheckPermissionService;
class ProductController extends Controller
{
    private $productService, $countryService, $industryService, $productTypeService, $solutionTypeService,$solutionProvider,$checkPermissionService;
    public function __construct(ProductService $productService, CountryService $countryService, IndustryService $industryService, ProductTypeService $productTypeService, SolutionTypeService $solutionTypeService,SolutionProviderService $solutionProviderService,CheckPermissionService $checkPermissionService){
        $this->productService = $productService;
        $this->productTypeService = $productTypeService;
        $this->countryService = $countryService;
        $this->industryService = $industryService;
        $this->solutionTypeService = $solutionTypeService;
        $this->solutionProvider =  $solutionProviderService;
        $this->checkPermissionService = $checkPermissionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $solutions = $this->productService->getAllProducts();
        $isAuthorize = $this->checkPermissionService->checkPermission();
        return view('admin.products', compact('solutions','isAuthorize'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $productTypes = $this->productTypeService->getAllActiveProductType();
        $countries = $this->countryService->getAllActiveCountry();
        $industryTypes = $this->industryService->getAllActiveIndustries();
        $solutionTypes = $this->solutionTypeService->getAllActiveSolutionType();
        $providers = $this->solutionProvider->getAllActiveSolutionProvider();
        return view('admin.product', compact('productTypes','countries', 'industryTypes', 'solutionTypes','providers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            "productName" => "required",
            "description" => 'required',
            "productSolutionTypeId" => "required",
            "productImage" => "required"
        ]);
        $result = $this->productService->saveProduct($request);
        if($result){
            return redirect()->route('solutions.index')->with('success-msg', 'Solutions added successfully.');
        }else{
            return redirect()->route('solutions.index')->with('error-msg', 'Please check the form and submit again.');
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
        $product = $this->productService->getProduct($id);
        $providers = $this->solutionProvider->getAllActiveSolutionProvider();
        $selectedSolutions = [];
        foreach ($product->getProductSolutionX() as $productSolutionX){
            $selectedSolutions[] = $productSolutionX->getProductSolutionTypeId()->getId();
        }
        $productTypes = $this->productTypeService->getAllActiveProductType();
        $countries = $this->countryService->getAllActiveCountry();
        $industryTypes = $this->industryService->getAllActiveIndustries();
        $solutionTypes = $this->solutionTypeService->getAllActiveSolutionType();
        return view('admin.product', compact('productTypes','countries', 'industryTypes', 'solutionTypes', 'product', 'selectedSolutions','providers'));
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
            "productName" => "required",
            "description" => 'required',
            "productSolutionTypeId" => "required"
        ]);
        $result = $this->productService->updateProduct($request, $id);
        if($result){
            return redirect()->route('solutions.edit',['solutions'=>$id])->with('success-msg', 'Solutions updated successfully.');
        }else{
            return redirect()->route('solutions.edit',['solutions'=>$id])->with('error-msg', 'Please check the form and submit again.');
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
