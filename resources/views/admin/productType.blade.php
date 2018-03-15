@extends('admin.layouts.adminLayouts2')
@section('title','Product Type Setting')

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Product Type Setting</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            @if(in_array('product-type.create', $isAuthorize))
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Add Product Type</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Ex : Hardware,Software.
                    </p>
                    <form class="form-horizontal" role="form" id="addForm" action="{{route('product-type.store')}}" method="POST">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="cat">Product Type : </label>
                            <div class="col-md-6">
                                {{ csrf_field() }}
                                <input id="productType" name="productType" class="form-control shaz-validator-text" required="" placeholder="Ex : Hardware">
                            </div>
                            <button type="submit" class="btn btn-inverse waves-effect waves-light">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
                @endif
        </div>



        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Product Type List</b></h4>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>Product</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        @forelse($productType as $ptype )
                            <tr>
                                <td data-id="{{$ptype->getId()}}" class="editTd">
                                    {{$ptype->getId()}}
                                </td>
                                <td data-name="{{$ptype->getName()}}" class="editTd">
                                    {{$ptype->getName()}}
                                </td>
                                <td data-active="{{$ptype->getIsActive()?1:0}}" class="editTd">
                            <span class="label label-table label-{{$label = $ptype->getIsActive()?"success":"danger"}}">
                                  {{$labelText = $ptype->getIsActive()?"Active":"Inactive"}}
                            </span>
                                </td>
                                <td>
                                    @if(in_array('product-type.edit', $isAuthorize))
                                    <a href="#dataEdit" class="btn btn-icon waves-effect waves-light btn-white dataEdit" data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;@endif
                                    <button class="btn btn-icon waves-effect waves-light btn-danger rmv">
                                        <i class="fa fa-trash"></i>
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





    <!-- Modal -->
    <div id="dataEdit" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Edit Product Type</h4>
        <div class="custom-modal-text">
            <form class="form-horizontal" role="form" id="editCategoryForm" method="POST" action="{{route('product-type.update',['product-type' =>'0'])}}">
                <div class="form-group">
                    <label class="col-md-2 control-label" for="cat">Product Type : </label>
                    <div class="col-md-6">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" id="id"/>
                        <input type="text" name="productTypeName" id="name" class="form-control shaz-validator-text" required="" placeholder="Ex :Hardware">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="cat">Status : </label>
                    <div class="col-md-6">
                        <div class="radio radio-success radio-inline">
                            <input type="radio" id="active_1" name="active" value="1">
                            <label for="active_1">Active</label>
                        </div>
                        <div class="radio radio-danger radio-inline">
                            <input type="radio" id="active_0" name="active" value="0">
                            <label for="active_0">Inactive</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-inverse waves-effect waves-light">Update</button>
            </form>
        </div>
    </div>


    <!-- seperate js for each page -->
@endsection