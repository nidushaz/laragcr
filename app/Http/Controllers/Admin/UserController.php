<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\UserService;
use App\Services\RoleService;
use App\Services\CheckPermissionService;
class UserController extends Controller
{
    protected $userService,$roleService,$checkPermissionService;
    public function __construct(UserService $userService,RoleService $roleService,CheckPermissionService $checkPermissionService)
    {
        $this->userService = $userService;
        $this->roleService = $roleService;
        $this->checkPermissionService = $checkPermissionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$permission = Request::instance()->query('permission');
       // echo $permission;exit;
        $isAuthorize = $this->checkPermissionService->checkPermission();
        $users = $this->userService->getAllUsers();
        return view('admin.users',compact('users','isAuthorize'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(RoleService $roleService)
    {
        $roles = $roleService->getAllActiveRoles();
        return view('admin.user',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,UserService $userService)
    {
        $request->validate([
           "firstName" => "required",
            "lastName" => "required",
            "profilePic" => "required",
            "contactNumber" => "required",
            "email" => "required",
            "password" => "required",
            "role" => "required",
        ]);

        $result = $userService->save($request);
        if($result){
            return redirect()->route('users.index')->with('success-msg', ' User added successfully.');
        }else{
            return redirect()->route('users.index')->with('error-msg', 'Image is not set OR something went wrong.');
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
        $roles = $this->roleService->getAllActiveRoles();
        $user = $this->userService->getUserById($id);
        return view('admin.user',compact('roles','user'));
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
            "firstName" => "required",
            "lastName" => "required",
            "active" => "required",
            "contactNumber" => "required",
            "email" => "required",
            "password" => "required",
            "role" => "required",
        ]);

        $result = $this->userService->updateUser($request,$id);
        if($result){
            return redirect()->route('users.index')->with('success-msg', ' User updated successfully.');
        }else{
            return redirect()->route('users.index')->with('error-msg', 'Something went wrong.');
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
