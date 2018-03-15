@extends('admin.layouts.adminLayouts2')
@section('title','Contact')

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Contact Mail </h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>Who Contact Us</b></h4>
                        </div>
                        <div class="col-sm-2">
                            {{--@if(in_array('ads.create', $isAuthorize))--}}
                            {{--<a class="btn btn-default waves-effect waves-light" href="{{route('ads.create')}}"><i class="fa fa-plus"></i> Ads</a>--}}
                            {{--@endif--}}
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>Customer Name</th>
                            <th>Partner Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Support</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        @forelse($contacts as $contact)
                            <tr>
                                <td>
                                    {{$contact->getId()}}
                                </td>
                                <td class="editTd">
                                    {{$contact->getCustomerName()}}
                                </td>
                                <td class="editTd">
                                    {{$contact->getPartnerName()}}
                                </td>
                                <td class="editTd">
                                    {{$contact->getEmail()}}
                                </td>
                                <td class="editTd">
                                    {{$contact->getNumber()}}
                                </td>
                                <td class="editTd">
                                    {{$contact->getSupport()}}
                                </td>
                                <td data-active="" class="editTd">
                                    {{$contact->getCreatedAt()->format('l d-M-Y')}}
                                </td>
                                <td>
                                    @if(in_array('support.show', $isAuthorize))
                                        <a href="{{route('support.show',['$contact' => $contact->getId()])}}" class="btn btn-icon waves-effect waves-light btn-white">
                                            <i class="fa fa-eye"></i>
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