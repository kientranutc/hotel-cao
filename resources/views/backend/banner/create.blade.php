@extends('backend.layouts.master')
@section('title', 'AddBanner')
@section('breadcrumb')
    Add Banner
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
            <a href="{{URL::route('banner-index')}}" class="btn btn-success">Back to</a>
        </div><!-- /page-title -->
        <div class="panel-heading"><h4 class="text-danger">Add New Banner</h4> </div>
        <div class="panel-body">
            <form class="no-margin" id="formValidate2" action="{{URL::route('banner-create')}}" method="post" data-validate="parsley" novalidate>
                {{csrf_field()}}
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 {{($errors->has('title_en'))?'has-error':''}}">
                            <div class="form-group ">
                                <label class="control-label">Title English</label>
                                <input type="text" placeholder="Title English" value="{{old('title_en')?old('title_en'):''}}"  name="title_en" class="form-control input-sm" data-required="true">
                                <p class="text-danger"> {{$errors->first('title_en')}}</p>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-md-6 {{($errors->has('title_vi'))?'has-error':''}}">
                            <div class="form-group ">
                                <label class="control-label">Title Vietnamese</label>
                                <input type="text" placeholder="Title Vietnamese" value="{{old('title_vi')?old('title_vi'):''}}"  name="title_vi" class="form-control input-sm" data-required="true">
                                <p class="text-danger"> {{$errors->first('title_vi')}}</p>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-6 {{($errors->has('image'))?'has-error':''}}">
                            <div class="form-group">
                                <div id="show-image-add">
                                    <img src="" class="img-thumbnail"  alt="Cinque Terre" width="304" height="236">
                                </div>
                                <label class="control-label">Image Banner</label>
                                <input type="text" placeholder="Click to add image" value="{{old('image')?old('image'):''}}"  name="image" class="form-control input-sm input-image" id="image-input" data-required="true" data-type="url">
                                <p class="text-danger"> {{$errors->first('image')}}</p>
                            </div>
                        </div>
                        <div class="col-md-6 {{($errors->has('url'))?'has-error':''}}">
                            <div class="form-group">
                                <label class="control-label">Url</label>
                                <input type="text" placeholder="link" value="{{old('url')?old('url'):''}}"  name="url" class="form-control input-sm" data-required="true" data-type="url">
                            </div>
                        </div>
                    </div>
                    <div class="row">


                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Active</label>
                                <div class="form-group">
                                    <label class="label-radio inline">
                                        <input type="radio" value="1" checked name="active">
                                        <span class="custom-radio"></span>
                                        Active
                                    </label>
                                    <label class="label-radio inline">
                                        <input type="radio" value="0" name="active">
                                        <span class="custom-radio"></span>
                                        Inactive
                                    </label>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="panel-footer text-center">
                    <button class="btn btn-success" type="submit">Add</button>
                    <button class="btn btn-danger" type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div><!-- /panel -->

@stop