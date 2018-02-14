@extends('admin.layouts.adminLayouts2')
@section('title','Solution Type')

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Solution Catalog</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>Solution Catalog List</b></h4>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="{{route('solution-type.create')}}"><i class="fa fa-plus"></i> Solution Catalog</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>Solution Type</th>
                            <th>Description</th>
                            <th>Logo</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                            @forelse($types as $type)
                            <tr>
                                <td class="editTd">
                                    {{$type->getId()}}
                                </td>
                                <td class="editTd">
                                    {{$type->getName()}}
                                </td>
                                <td class="editTd">
                                    {!! \Illuminate\Support\Str::words($type->getDescription(), 20,'....')  !!}
                                </td>
                                <td class="editTd">
                                    <img src="{{asset($type->getImage())}}" class="img-thumbnail thumb-lg">
                                </td>
                                <td data-active="" class="editTd">
                                    <span class="label label-table label-{{$label = $type->getIsActive()?"success":"danger"}}">
                                        {{$labelText = $type->getIsActive()?"Active":"Inactive"}}
                                     </span>
                                </td>
                                <td>
                                    <a href="{{route('solution-type.edit',['solution-type' => $type->getId()])}}" class="btn btn-icon waves-effect waves-light btn-white">
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