@extends('admin.layouts.adminLayouts2')
@section('title','Partner')

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Experience Centre</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b> List</b></h4>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="{{route('experience-centre.create')}}"><i class="fa fa-plus"></i> Add</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Media</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        @forelse($videos as $video)
                            <tr>
                                <td class="editTd">
                                    {{$video->getTitle()}}
                                </td>
                                <td class="editTd">
                                    {{$video->getCategoryId()->getName()}}
                                </td>
                                <td class="editTd">

                                </td>
                                <td data-active="" class="editTd">
                                    <span class="label label-table label-{{ $video->getIsActive()?"success":"danger" }}">
                                        {{ $video->getIsActive()?"Active":"Inactive" }}
                                     </span>
                                </td>
                                <td class="editTd">
                                    {{$video->getCreatedAt()->format('D d-M-Y')}}
                                </td>
                                <td>
                                    <a href="{{route('experience-centre.edit',['experience-centre' => $video->getId()])}}" class="btn btn-icon waves-effect waves-light btn-white">
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