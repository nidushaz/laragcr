@extends('admin.layouts.adminLayouts2')
@section('title','Users')

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Users</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>User List</b></h4>
                        </div>
                        <div class="col-sm-2">
                            @if(in_array('users.create', $isAuthorize))
                            <a class="btn btn-default waves-effect waves-light" href="{{route('users.create')}}"><i class="fa fa-plus"></i> User</a>
                                @endif
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>User</th>
                            <th>Role</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody class="responseData">
                        @forelse($users as $user)
                            <tr>
                                <td class="editTd">
                                    {{$user->getId()}}
                                </td>
                                <td class="editTd">
                                    {{$user->getFirstName()}} {{$user->getLastName()}}
                                </td>
                                <td class="editTd">
                                    @foreach($user->getAdminRole() as $role)
                                        <span>{{$role->getRoleId()->getRole()}}</span>
                                        @endforeach
                                </td>
                                <td data-active="" class="editTd">
                                    <span class="label label-table label-{{$label = $user->getIsActive()?"success":"danger"}}">
                                        {{$labelText = $user->getIsActive()?"Active":"Inactive"}}
                                     </span>
                                </td>
                                <td>
                                    @if(in_array('users.edit', $isAuthorize))
                                    <a href="{{route('users.edit',['users' => $user->getId()])}}" class="btn btn-icon waves-effect waves-light btn-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    @endsection