@extends('admin.layouts.adminLayouts2')
@section('title','Partner')

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Solution Providers</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>Providers List</b></h4>
                        </div>
                        <div class="col-sm-2">
                            @if(in_array('providers.create', $isAuthorize))
                            <a class="btn btn-default waves-effect waves-light" href="{{route('providers.create')}}"><i class="fa fa-plus"></i> Add Provider</a>
                            @endif
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>Provider Name</th>
                            <th>Company</th>
                            <th>Logo</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        @forelse($providers as $provider)
                            <tr>
                                <td class="editTd">
                                    {{$provider->getId()}}
                                </td>
                                <td class="editTd">
                                    {{$provider->getFirstName()}} {{$provider->getLastName()}}
                                </td>
                                <td class="editTd">
                                    {{$provider->getcompanyName()}}
                                </td>
                                <td class="editTd">
                                    <img src="{{asset($provider->getLogo())}}" class="img-thumbnail thumb-lg">
                                </td>
                                <td data-active="" class="editTd">
                                    <span class="label label-table label-{{ $provider->getIsActive()?"success":"danger" }}">
                                        {{ $provider->getIsActive()?"Active":"Inactive" }}
                                     </span>
                                </td>
                                <td>
                                    @if(in_array('providers.edit', $isAuthorize))
                                    <a href="{{route('providers.edit',['$providers' => $provider->getId()])}}" class="btn btn-icon waves-effect waves-light btn-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    @endif
                                    &nbsp;&nbsp;&nbsp;
                                    <!-- <button class="btn btn-icon waves-effect waves-light btn-white	">		<i class="fa fa-remove"></i>
                                    </button> -->
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