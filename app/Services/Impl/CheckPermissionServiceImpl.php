<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 27/02/2018
 * Time: 3:52 PM
 */

namespace App\Services\Impl;

use App\Services\CheckPermissionService;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Route;
use App\Services\UserService;
class CheckPermissionServiceImpl implements CheckPermissionService
{

    private $userService,$request;
    public function __construct(UserService $userService,Request $request)
    {
       $this->userService = $userService;
       $this->request = $request;
    }

    public function checkPermission()
    {
        $route = $this->request->route()->getName();
        $isAdmin = Auth::user()->getIsAdmin();
        if($isAdmin){
            $routers = $this->allRoutes();
            $jsonRoute = json_encode($routers,JSON_FORCE_OBJECT);
            return json_decode($jsonRoute, JSON_UNESCAPED_SLASHES);
        }else {
            $userObj = $this->userService->getUserById(Auth::user()->getId());
            $permission = [];
            foreach ($userObj->getAdminRole() as $roles) {
                $permission = $roles->getRoleId()->getPermissions();
            }
            return json_decode($permission, JSON_UNESCAPED_SLASHES);
        }

    }
    public function allRoutes(){
        $routes = Route::getRoutes();
        $routesArray=[];
        $routesJson= [];
        foreach ($routes as $route){
            if($route->getPrefix()=='admin/'){
                if(in_array('DELETE',$route->methods()) || in_array('GET',$route->methods())){
                    // $routesArray[substr($route->getName(),0 ,strpos($route->getName(), "."))][] = ["page_name" =>substr($route->getName(),0 ,strpos($route->getName(), ".")),"page_method" => $route->getActionMethod(),"page_uri" =>$route->uri()];
                    $routesArray[substr($route->getName(),0 ,strpos($route->getName(), "."))][$route->getActionMethod()] = ["pageName" =>substr($route->getName(),0 ,strpos($route->getName(), ".")),"pageMethod" => $route->getActionMethod(),"pageUri" =>$route->uri()];
                }
            }
        }
        foreach($routesArray as $key => $router){
            foreach($router as $route){
                $routesJson[] = $route['pageName'].'.'.$route['pageMethod'];
            }
        }
        return $routesJson;

    }
}