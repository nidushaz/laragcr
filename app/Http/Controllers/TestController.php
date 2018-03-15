<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TestService;


class TestController extends Controller
{
    private $testService;

    public function __construct(TestService $testService)
    {
        $this->testService = $testService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* gets the data from a URL */
        function get_data($url) {
            $ch = curl_init();
            $timeout = 5;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
                $returned_content = get_data('http://   www.gcrcloud.com/solutions-2');
        $keywords = array();
        $domain = array('http://www.gcrcloud.com/solutions');
        $doc = new \DOMDocument();
        $doc->preserveWhiteSpace = FALSE;
        foreach ($domain as $key => $value) {
            @$doc->loadHTMLFile($value);

            $anchor_tags = $doc->getElementsByTagName('body');

            foreach ($anchor_tags as $tag) {
                $keywords[] = strtolower($tag->nodeValue);
            }
        }
       print_r($keywords);

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $return  = $this->testService->saveTest($request);
        if($return){
            return redirect('test')->with('success_message', 'Task added successfully!');
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
