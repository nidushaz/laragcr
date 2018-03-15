@extends('admin.layouts.adminLayouts2')
@section('title','Office')

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Office</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>Office List</b></h4>
                        </div>
                        <div class="col-sm-2">
                            @if(in_array('office.create', $isAuthorize))
                                <a class="btn btn-default waves-effect waves-light" href="{{route('office.create')}}"><i class="fa fa-plus"></i> Add Office</a>
                            @endif
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>Office Name</th>
                            <th>Country</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Contact Person</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        @forelse($offices as $office)
                            <tr>
                                <td class="editTd">
                                    {{$office->getId()}}
                                </td>
                                <td class="editTd">
                                    {{$office->getOfficeName()}}
                                </td>
                                <td class="editTd">
                                    {{$office->getCountry()}}
                                </td>
                                <td class="editTd">
                                    {!! \Illuminate\Support\Str::words($office->getAddress1(), 20,'....')  !!}
                                </td>
                                <td class="editTd">
                                    {{$office->getContactNo()}}
                                </td>
                                <td class="editTd">
                                    {{$office->getContactPerson()}}
                                </td>
                                <td data-active="" class="editTd">
                                    <span class="label label-table label-{{ $office->getIsActive()?"success":"danger" }}">
                                        {{ $office->getIsActive()?"Active":"Inactive" }}
                                     </span>
                                </td>
                                <td>
                                    @if(in_array('office.edit', $isAuthorize))
                                        <a href="{{route('office.edit',['partners' => $office->getId()])}}" class="btn btn-icon waves-effect waves-light btn-white">
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