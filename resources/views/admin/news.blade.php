@extends('admin.layouts.adminLayouts2')
@section('title','News')

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">News</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>News List</b></h4>
                        </div>
                        <div class="col-sm-2">
                            @if(in_array('news.create', $isAuthorize))
                            <a class="btn btn-default waves-effect waves-light" href="{{route('news.create')}}"><i class="fa fa-plus"></i> Add News</a>
                            @endif
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>News Heading</th>
                            <th>News & Events</th>
                            <th>Image</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        @forelse($news as $new)
                            {{--<tr>--}}
                                <td class="editTd">
                                    {{$new->getId()}}
                                </td>
                                <td class="editTd">
                                    {{$new->getNewsHeading()}}
                                </td>
                            <td class="editTd">
                                @if($new->getType()=='1') News @elseif($new->getType()=='2') Event @endif
                            </td>
                                {{--<td class="editTd">--}}
                                    {{--{!! \Illuminate\Support\Str::words($partner->getDescription(), 20,'....')  !!}--}}
                                {{--</td>--}}
                                <td class="editTd">
                                    <img src="{{asset($new->getThumbnail())}}" class="img-thumbnail thumb-lg">
                                </td>
                                <td data-active="" class="editTd">
                                    <span class="label label-table label-{{ $new->getIsActive()?"success":"danger" }}">
                                        {{ $new->getIsActive()?"Active":"Inactive" }}
                                     </span>
                                </td>
                                <td>
                                    @if(in_array('news.edit', $isAuthorize))
                                    <a href="{{route('news.edit',['partners' => $new->getId()])}}" class="btn btn-icon waves-effect waves-light btn-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;@endif
                                     <button class="btn btn-icon waves-effect waves-light btn-white	">		<i class="fa fa-remove"></i>
                                    </button>
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