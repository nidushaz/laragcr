<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Impl\PageBannerServiceImpl;
use App\Services\Impl\CountryServiceImpl;
class PageBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $pageBannerService;
    private $countryService;

    public function __construct(PageBannerServiceImpl $pageBannerService,CountryServiceImpl $countryService)
    {
        $this->pageBannerService = $pageBannerService;
        $this->countryService = $countryService;
    }

    public function index()
    {

        return view('admin.dashboard');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$page = $request->input('returnRouteName');
        $result = $this->pageBannerService->saveData($request);
        if($result){
            return redirect()->back()->with('success-msg', ' Successfully Done.');
        }else{
            return redirect()->back()->with('error-msg', ' Banner Image is not set OR something went wrong.');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($page)
    {
        $page_id = $this->pageBannerService->getPageId($page);
        $pageContentData = $this->pageBannerService->getPageContent($page_id);
        $pageBannerData = $this->pageBannerService->getPageBanner($page_id);
        $countries = $this->countryService->getAllActiveCountry();
        return view('admin.page',['pageContentData' => $pageContentData,'pageBannerData' => $pageBannerData ,'countries' => $countries, 'pageid' => $page_id]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "edit";
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
        //
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
