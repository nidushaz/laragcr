@extends('admin.layouts.adminLayouts2')
@section('title','Contact')

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Contact Mail Content </h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>Mail Content</b></h4>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="{{route('contact.index')}}"><i class="fa fa-reply"></i> Back</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box m-t-20">
                                <div class="media m-b-30 ">
                                    <div class="media-body">
                                        <span class="media-meta pull-right"> {{$contact->getCreatedAt()->format('l d-M-Y m:i A')}}</span>
                                        <h4 class="text-primary m-0">{{$contact->getFirstName()}} {{$contact->getLastName()}}</h4>
                                        <small class="text-muted">From:{{$contact->getEmail()}} <br/> Contact : {{$contact->getOfficeNumber()}} </small> <br/>
                                        <small class="text-muted">Website:{{$contact->getWebsite()}} </small><br/>
                                        <small class="text-muted">Address:{{$contact->getAddress()}} </small>
                                    </div>
                                </div> <!-- media -->
                                <p><b>Country : </b>{{$contact->getCountry()}}</p>
                                <p><b>Company Name : </b>{{$contact->getCompanyName()}}</p>


                            </div>

                        </div>
                    </div>




                    <!-- End row -->
                </div>
            </div>
        </div>
    </div>


@endsection