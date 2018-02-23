<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class RoleController extends Controller
{

    public function allRoutes(){
        return $routes = Route::getRoutes();

//         echo json_encode($routes,JSON_FORCE_OBJECT);exit;
//        echo "<pre>";
//        foreach ($routes as $route){
//           echo $route->getName();
//
//            echo "\n";
//        }
//        exit;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $routes  = $this->allRoutes();
        $routers = [];
        foreach ($routes as $route){
         //echo  json_encode($route->methods(),JSON_FORCE_OBJECT);
            if($route->getPrefix()=='admin/'){
                if(in_array('DELETE',$route->methods()) || in_array('GET',$route->methods())){
                    $routesArray['page_name'] = substr($route->getName(),0 ,strpos($route->getName(), "."));
                    $routesArray['page_method'] = $route->getActionMethod();
                    $routesArray['page_uri'] = $route->uri();
                    array_push($routers,$routesArray);
                }

            }
        }
         //$routers = array_chunk($routers,5);
        //print_r($routers);
        $rout = [];
        foreach ($routers as $r){
                $r2[$r['page_name']]['page_name'] = $r['page_name'];
                $r2[$r['page_name']]['page_method'] = $r['page_method'];
                $r2[$r['page_name']]['page_uri'] = $r['page_uri'];
                array_push($rout,$r2);
        }
        //$routers1 = array_chunk($rout,5);
        print_r($rout);
        //return view('admin.role',compact('routers'));
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
        //
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
