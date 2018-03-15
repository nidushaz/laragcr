@extends('admin.layouts.adminLayouts2')
@section('title','Roles & Permission')

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Roles & Permission</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>Roles List</b></h4>
                        </div>
                        <div class="col-sm-2">
                            @if(in_array('roles.create', $isAuthorize))
                            <a class="btn btn-default waves-effect waves-light" href="{{route('roles.create')}}"><i class="fa fa-plus"></i> Role & Permission</a>
                            @endif
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>Role</th>
                            <th>Permission</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        @forelse($roles as $role)
                            <tr>
                                <td class="editTd">
                                    {{$role->getId()}}
                                </td>
                                <td class="editTd">
                                    {{$role->getRole()}}
                                </td>
                                <td class="editTd">

                                </td>
                                <td data-active="" class="editTd">
                                    <span class="label label-table label-{{$label = $role->getIsActive()?"success":"danger"}}">
                                        {{$labelText = $role->getIsActive()?"Active":"Inactive"}}
                                     </span>
                                </td>
                                <td>
                                    @if(in_array('roles.edit', $isAuthorize))
                                    <a href="{{route('roles.edit',['roles' => $role->getId()])}}" class="btn btn-icon waves-effect waves-light btn-white">
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