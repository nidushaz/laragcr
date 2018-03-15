@extends('admin.layouts.adminLayouts2')
@section('title','Testimonials')

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Testimonials</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>Testimonials List</b></h4>
                        </div>
                        <div class="col-sm-2">
                            @if(in_array('testimonials.create', $isAuthorize))
                            <a class="btn btn-default waves-effect waves-light" href="{{route('testimonials.create')}}"><i class="fa fa-plus"></i> Testimonial</a>
                            @endif
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        @forelse($testimonials as $testimonial)
                            <tr>
                                <td class="editTd">
                                    {{$testimonial->getId()}}
                                </td>
                                <td class="editTd">
                                    {{$testimonial->getCompanyName()}}
                                </td>
                                <td class="editTd">
                                    {{$testimonial->getName()}}
                                </td>
                                <td class="editTd">
                                    {!! \Illuminate\Support\Str::words($testimonial->getTestimonial(), 20,'....')  !!}
                                </td>
                                <td data-active="" class="editTd">
                                    <span class="label label-table label-{{$label = $testimonial->getIsActive()?"success":"danger"}}">
                                        {{$labelText = $testimonial->getIsActive()?"Active":"Inactive"}}
                                     </span>
                                </td>
                                <td>
                                    @if(in_array('testimonials.edit', $isAuthorize))
                                    <a href="{{route('testimonials.edit',['$testimonials' => $testimonial->getId()])}}" class="btn btn-icon waves-effect waves-light btn-white">
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