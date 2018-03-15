@extends('admin.layouts.adminLayouts2')
@section('title')
    {{ ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1)) }} | Roles
@endsection

@section('content')

    <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"> {{ ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1)) }} Roles</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="{{route('roles.index')}}"><i class="fa fa-reply"></i> Back</a>
                        </div>
                    </div>
                    <hr/>
                    <form action="@if(@isset($role)){{route('roles.update',['roles'=>$role->getId()])}}@else{{route('roles.store')}}@endif" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Role : </label>
                                    <input class="form-control" required="required" placeholder="Role" type="text" name="role"  value="@isset($role){{$role->getRole()}} @endisset">
                                    {{csrf_field()}}
                                    @isset($role)
                                        <input type="hidden" name="_method" value="PUT">
                                    @endisset
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Permission : </label>
                                    <ul class="file-tree">
                                        @foreach($routers as $key => $router)
                                        <li><a href="#">{{ucfirst($key)}}</a>
                                            @foreach($router as $route)
                                                <ul>
                                                    <li>
                                                        <input type="checkbox" name="permission[]" value="{{$route['pageName'].'.'.$route['pageMethod']}}" @isset($role)  @isset($role)
                                                        @foreach($permissions as $permission)
                                                        @if($route['pageName'].'.'.$route['pageMethod']==$permission) checked @else  @endif
                                                                @endforeach
                                                                @endisset @endisset>@if($route['pageMethod']=='destroy')  Delete @else  {{ucfirst($route['pageMethod'])}} @endif</li>
                                                    {{--{{$route['pageName']}}--}}
                                                    {{--{{$route['pageUri']}}--}}
                                                </ul>
                                            @endforeach
                                            @endforeach
                                        </li>
                                     </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                        @isset($role)
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 control-label text-left" for="cat">Status : </label>
                                    <div class="col-md-6">
                                        <div class="radio radio-success radio-inline">
                                            <input type="radio" id="active_1" name="active" value="1" {{$role->getIsActive()?'checked':''}}>
                                            <label for="active_1">Active</label>
                                        </div>
                                        <div class="radio radio-danger radio-inline">
                                            <input type="radio" id="active_0" name="active" value="0" {{$role->getIsActive()?'':'checked'}}>
                                            <label for="active_0">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endisset
                        <div class="row">
                            <button type="submit" class="btn btn-default waves-effect waves-light btn-md">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection