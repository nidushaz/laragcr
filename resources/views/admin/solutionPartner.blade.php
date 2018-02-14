@extends('admin.layouts.adminLayouts2')
@section('title','Partner')

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Partners</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>Partners List</b></h4>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="{{route('partners.create')}}"><i class="fa fa-plus"></i> Add Partner</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>Partner Name</th>
                            <th>Description</th>
                            <th>Logo</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        @forelse($partners as $partner)
                            <tr>
                                <td class="editTd">
                                    {{$partner->getId()}}
                                </td>
                                <td class="editTd">
                                    {{$partner->getTitle()}}
                                </td>
                                <td class="editTd">
                                    {!! \Illuminate\Support\Str::words($partner->getDescription(), 20,'....')  !!}
                                </td>
                                <td class="editTd">
                                    <img src="{{asset($partner->getLogo())}}" class="img-thumbnail thumb-lg">
                                </td>
                                <td data-active="" class="editTd">
                                    <span class="label label-table label-{{ $partner->getIsActive()?"success":"danger" }}">
                                        {{ $partner->getIsActive()?"Active":"Inactive" }}
                                     </span>
                                </td>
                                <td>
                                    <a href="{{route('partners.edit',['partners' => $partner->getId()])}}" class="btn btn-icon waves-effect waves-light btn-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
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