<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Services\RoleService;
use App\Services\CheckPermissionService;
class RoleController extends Controller
{
    protected $roleService,$checkPermissionService;
    public function __construct(RoleService $roleService,CheckPermissionService $checkPermissionService)
    {
       $this->roleService = $roleService;
       $this->checkPermissionService = $checkPermissionService;
    }

    public function allRoutes(){
        $routes = Route::getRoutes();
        $routesArray=[];
        foreach ($routes as $route){
            if($route->getPrefix()=='admin/'){
                if(in_array('DELETE',$route->methods()) || in_array('GET',$route->methods())){
                    // $routesArray[substr($route->getName(),0 ,strpos($route->getName(), "."))][] = ["page_name" =>substr($route->getName(),0 ,strpos($route->getName(), ".")),"page_method" => $route->getActionMethod(),"page_uri" =>$route->uri()];
                    $routesArray[substr($route->getName(),0 ,strpos($route->getName(), "."))][$route->getActionMethod()] = ["pageName" =>substr($route->getName(),0 ,strpos($route->getName(), ".")),"pageMethod" => $route->getActionMethod(),"pageUri" =>$route->uri()];
                }
            }
        }
        return $routesArray;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        //echo json_encode('page.index page.create page.show page.edit page.destroy country.index country.create country.show country.edit country.destroy industry.index industry.create industry.show industry.edit industry.destroy product-type.index product-type.create product-type.show product-type.edit product-type.destroy solution-type.index solution-type.create solution-type.show solution-type.edit solution-type.destroy category.index category.create category.show category.edit category.destroy partners.index partners.create partners.show partners.edit partners.destroy providers.index providers.create providers.show providers.edit providers.destroy experience-centre.index experience-centre.create experience-centre.show experience-centre.edit experience-centre.destroy solutions.index solutions.create solutions.show solutions.edit solutions.destroy ads.index ads.create ads.show ads.edit ads.destroy testimonials.index testimonials.create testimonials.show testimonials.edit testimonials.destroy news.index news.create news.show news.edit news.destroy roles.index roles.create roles.show roles.edit roles.destroy users.index users.create users.show users.edit users.destroy',JSON_FORCE_OBJECT);exit;
        $roles = $this->roleService->getAllRoles();
        $isAuthorize = $this->checkPermissionService->checkPermission();
        return view('admin.roles',compact('roles','isAuthorize'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes  = $this->allRoutes();
        return view('admin.role',['routers' => $routes]);
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
           "role" => "required",
            "permission" => "required"
        ]);
        $result = $this->roleService->saveRole($request);
        if($result){
            return redirect()->route('roles.index')->with('success-msg', 'Role added successfully.');
        }else{
            return redirect()->route('roles.index')->with('error-msg', 'Please check the form and submit again.');
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
        $role = $this->roleService->getRoleById($id);
        $permissions = json_decode($role->getPermissions());
        $routes  = $this->allRoutes();
        return view('admin.role',['routers' => $routes,'role'=>$role,'permissions'=>$permissions]);
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
            "role" => "required",
            "permission" => "required",
            "active" => "required"
        ]);
        $result = $this->roleService->updateRole($request,$id);
        if($result){
            return redirect()->route('roles.edit',['roles'=>$id])->with('success-msg', 'Role updated successfully.');
        }else{
            return redirect()->route('roles.edit',['roles'=>$id])->with('error-msg', 'Please check the form and submit again.');
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
