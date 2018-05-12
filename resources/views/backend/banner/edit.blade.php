@extends('backend.layouts.master')
@section('title', 'EditBanner')
@section('breadcrumb')
    Edit Banner
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
        <div class="panel-heading"><h4 class="text-danger">Edit New Banner</h4> </div>
        <div class="panel-body">
            <form class="no-margin" id="formValidate2" action="{{URL::route('banner-edit', $editBanner->id)}}" method="post" data-validate="parsley" novalidate>
                {{csrf_field()}}
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 {{($errors->has('title_en'))?'has-error':''}}">
                            <div class="form-group ">
                                <label class="control-label">Title English</label>
                                <input type="text" placeholder="Title English" value="{{old('title_en')?old('title_en'):$editBanner->title_en}}"  name="title_en" class="form-control input-sm" data-required="true">
                                <p class="text-danger"> {{$errors->first('title_en')}}</p>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-md-6 {{($errors->has('title_vi'))?'has-error':''}}">
                            <div class="form-group ">
                                <label class="control-label">Title Vietnamese</label>
                                <input type="text" placeholder="Title Vietnamese" value="{{old('title_vi')?old('title_vi'):$editBanner->title_vi}}"  name="title_vi" class="form-control input-sm" data-required="true">
                                <p class="text-danger"> {{$errors->first('title_vi')}}</p>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-6 {{($errors->has('image'))?'has-error':''}}">
                            <div class="form-group">
                                <div id="show-image-add" style="display: {{($editBanner->image!='')?'block':''}}">
                                    <img src="{{$editBanner->image}}" class="img-thumbnail"  alt="{{$editBanner->image}}" width="304" height="236">
                                </div>
                                <label class="control-label">Image Banner</label>
                                <input type="text" placeholder="Click to add image" value="{{old('image')?old('image'):$editBanner->image}}"  name="image" class="form-control input-sm input-image" id="image-input" data-required="true" data-type="url">
                                <p class="text-danger"> {{$errors->first('image')}}</p>
                            </div>
                        </div>
                        <div class="col-md-6 {{($errors->has('url'))?'has-error':''}}">
                            <div class="form-group">
                                <label class="control-label">Url</label>
                                <input type="text" placeholder="link" value="{{old('url')?old('url'):$editBanner->url}}"  name="url" class="form-control input-sm" data-required="true" data-type="url">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Active</label>
                                <div class="form-group">
                                    <label class="label-radio inline">
                                        <input type="radio" value="1" {{($editBanner->active==1)?'checked':''}} name="active">
                                        <span class="custom-radio"></span>
                                        Active
                                    </label>
                                    <label class="label-radio inline">
                                        <input type="radio" value="0" {{($editBanner->active==0)?'checked':''}} name="active">
                                        <span class="custom-radio"></span>
                                        Inactive
                                    </label>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="panel-footer text-center">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div><!-- /panel -->

@stop