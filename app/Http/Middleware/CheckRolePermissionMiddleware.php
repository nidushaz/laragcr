<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\Route;
use App\Services\UserService;
use App\Services\RoleService;
use Response;
class CheckRolePermissionMiddleware
{
   protected $roleService,$userService;
   public function __construct(RoleService $roleService,UserService $userService)
   {
       $this->userService = $userService;
       $this->roleService = $roleService;
   }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userId = Auth::user()->getId();
        $isAdmin = Auth::user()->getIsAdmin();
        if($isAdmin){
            return $next($request);
        }else{
                $route = $request->route()->getName();
                $userObj = $this->userService->getUserById($userId);
                $permission=[];
                foreach ($userObj->getAdminRole() as $roles){
                    $permission=$roles->getRoleId()->getPermissions();
                }
                $routeArray = json_decode($permission,JSON_UNESCAPED_SLASHES);
           //echo $route;
            //print_r($routeArray);
                if(in_array($route,$routeArray)){
                    //$request->merge(array("permission" =>true));
                    return $next($request);
                }
                return Response::view('errors.admin403', [], 403);
                //$request->merge(array("permission" =>false));
                //$myVar = Request::instance()->query('myVar');
                //return $next($request);
        }

    }
}
