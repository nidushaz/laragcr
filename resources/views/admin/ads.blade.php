@extends('admin.layouts.adminLayouts2')
@section('title','Ads')

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Ads</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>Ads List</b></h4>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="{{route('ads.create')}}"><i class="fa fa-plus"></i> Ads</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>Title</th>
                            <th>Detail</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        @forelse($ads as $ad)
                            <tr>
                                <td class="editTd">
                                    {{$ad->getId()}}
                                </td>
                                <td class="editTd">
                                    {{$ad->getTitle()}}
                                </td>
                                <td class="editTd">
                                    {!! \Illuminate\Support\Str::words($ad->getAddDetail(), 20,'....')  !!}
                                </td>
                                <td data-active="" class="editTd">
                                    <span class="label label-table label-{{$label = $ad->getIsActive()?"success":"danger"}}">
                                        {{$labelText = $ad->getIsActive()?"Active":"Inactive"}}
                                     </span>
                                </td>
                                <td>
                                    <a href="{{route('ads.edit',['$ads' => $ad->getId()])}}" class="btn btn-icon waves-effect waves-light btn-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
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