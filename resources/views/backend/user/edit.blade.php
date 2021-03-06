@extends('backend.layouts.master')
@section('title', 'AddBanner')
@section('breadcrumb')
    Edit user
@stop
@section('link')
    <style>
        #show-image-add{
            display: none;
        }
    </style>

@stop
@section('content')
    <div class="panel panel-default table-responsive">
        <div class="panel-heading clearfix">

        </div><!-- /page-title -->
        <div class="panel-heading"><h4 class="text-danger">Edit User</h4> </div>
        <div class="panel-body">
            <form class="no-margin" id="formValidate2" action="{{URL::route('user-edit')}}" method="post" data-validate="parsley" novalidate>
                {{csrf_field()}}
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 {{($errors->has('username'))?'has-error':''}}">
                            <div class="form-group ">
                                <label class="control-label">Username</label>
                                <input type="text" placeholder="Username" disabled="disabled" value="{{old('username')?old('username'):''}}"  name="username" class="form-control input-sm" data-required="true">
                                <p class="text-danger"> {{$errors->first('username')}}</p>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-md-6 {{($errors->has('fullname'))?'has-error':''}}">
                            <div class="form-group ">
                                <label class="control-label">Fullname</label>
                                <input type="text" placeholder="Fullname" value="{{old('fullname')?old('fullname'):Auth::user()->fullname}}"  name="fullname" class="form-control input-sm" data-required="true">
                                <p class="text-danger"> {{$errors->first('fullname')}}</p>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-6 {{($errors->has('email'))?'has-error':''}}">
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="text" placeholder="Email" disabled="disabled"  value="{{old('email')?old('email'):''}}"  name="email" class="form-control input-sm" data-required="true" data-type="url">
                            </div>
                        </div>
                        <div class="col-md-6 {{($errors->has('image'))?'has-error':''}}">
                            <div class="form-group">
                                <div id="show-image-add" style="display:{{(Auth::user()->image!='')?'block':'none'}}">
                                    <img src="{{(Auth::user()->image!='')?Auth::user()->image:asset('frontend/assets/img/user-icon.png')}}" class="img-thumbnail"  alt="" width="304" height="236">
                                </div>
                                <label class="control-label">Avatar</label>
                                <input type="text" placeholder="Click to add image" value="{{old('image')?old('image'):Auth::user()->image}}"  name="image" class="form-control input-sm input-image" id="image-input" data-required="true" data-type="url">
                                <p class="text-danger"> {{$errors->first('image')}}</p>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 {{($errors->has('password'))?'has-error':''}}">
                            <div class="form-group ">
                                <label class="control-label">Password</label>
                                <input type="password" placeholder="Password" value=""  name="password" class="form-control input-sm" data-required="true">
                                <p class="text-danger"> {{$errors->first('password')}}</p>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-md-6 {{($errors->has('confirm_password'))?'has-error':''}}">
                            <div class="form-group ">
                                <label class="control-label">Confirm Password</label>
                                <input type="password" placeholder="Confirm Password" value=""  name="confirm_password" class="form-control input-sm" data-required="true">
                                <p class="text-danger"> {{$errors->first('confirm_password')}}</p>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div><!-- /.row -->
                </div>
                <div class="panel-footer text-center">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div><!-- /panel -->

@stop