@extends('backend.layouts.master')
@section('title', 'AddBanner')
@section('breadcrumb')
    Add Project
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
            <a href="{{URL::route('project-index')}}" class="btn btn-success">Back to</a>
        </div><!-- /page-title -->
        <div class="panel-heading"><h4 class="text-danger">Add New Project</h4> </div>
        <div class="panel-body">
            <form class="no-margin" id="formValidate2" action="{{URL::route('project-create')}}" method="post" data-validate="parsley" novalidate>
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
                        <div class="col-md-6 {{($errors->has('url'))?'has-error':''}}">
                            <div class="form-group ">
                                <label class="control-label">Link</label>
                                <input type="text" placeholder="Link" value="{{old('url')?old('url'):''}}"  name="url" class="form-control input-sm" data-required="true">
                                <p class="text-danger"> {{$errors->first('url')}}</p>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-md-6 {{($errors->has('title_vi'))?'has-error':''}}">
                            <div class="form-group">
                                <label class="control-label">Project status</label>
                                <div class="form-group">
                                    <label class="label-radio inline">
                                        <input type="radio" value="1" checked name="project_old">
                                        <span class="custom-radio"></span>
                                        News
                                    </label>
                                    <label class="label-radio inline">
                                        <input type="radio" value="0" name="project_old">
                                        <span class="custom-radio"></span>
                                        Old
                                    </label>
                                </div>

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
                                <label class="control-label">Image Project</label>
                                <input type="text" placeholder="Click to add image" value="{{old('image')?old('image'):''}}"  name="image" class="form-control input-sm input-image" id="image-input" data-required="true" data-type="url">
                                <p class="text-danger"> {{$errors->first('image')}}</p>
                            </div>
                        </div>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Content
                                </div>
                                <div class="panel-tab clearfix">
                                    <ul class="tab-bar">
                                        <li class="active"><a href="#home1" data-toggle="tab"><img src="{{asset('frontend/assets/img/English.png')}}" alt="{{asset('frontend/assets/img/English.png')}}"> Content English</a></li>
                                        <li><a href="#profile1" data-toggle="tab"><img src="{{asset('frontend/assets/img/vietnamese.png')}}" alt="{{asset('frontend/assets/img/vietnamese.png')}}"> Content Vietnamese</a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="home1">
                                            <div class="row">
                                                <div class="col-md-4 {{($errors->has('meta_title_en'))?'has-error':''}}">
                                                    <div class="form-group ">
                                                        <label class="control-label">Meta Title English</label>
                                                        <input type="text" placeholder="Meta Title" value="{{old('meta_title_en')?old('meta_title_en'):''}}"  name="meta_title_en" class="form-control input-sm" data-required="true">
                                                        <p class="text-danger"> {{$errors->first('meta_title_en')}}</p>
                                                    </div>
                                                </div><!-- /.col -->
                                                <div class="col-md-4 {{($errors->has('meta_description_en'))?'has-error':''}}">
                                                    <div class="form-group ">
                                                        <label class="control-label">Meta Description English</label>
                                                        <input type="text" placeholder="Meta description" value="{{old('meta_description_en')?old('meta_description_en'):''}}"  name="meta_description_en" class="form-control input-sm" data-required="true">
                                                        <p class="text-danger"> {{$errors->first('meta_description_en')}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 {{($errors->has('meta_keyword_en'))?'has-error':''}}">
                                                    <div class="form-group ">
                                                        <label class="control-label">Meta Keyword English</label>
                                                        <input type="text" placeholder="Meta Keyword" value="{{old('meta_keyword_en')?old('meta_keyword_en'):''}}"  name="meta_keyword_en" class="form-control input-sm" data-required="true">
                                                        <p class="text-danger"> {{$errors->first('meta_keyword_en')}}</p>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div><!-- /.row -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Description English</label>
                                                        <textarea class="form-control" placeholder="Description" name="description_en" rows="3" data-required="true">{{old('description_en')?old('description_en'):''}}</textarea>
                                                    </div><!-- /form-group -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile1">
                                            <div class="row">
                                                <div class="col-md-4 {{($errors->has('meta_title_vi'))?'has-error':''}}">
                                                    <div class="form-group ">
                                                        <label class="control-label">Meta Title Vietnamese</label>
                                                        <input type="text" placeholder="Meta Title " value="{{old('meta_title_vi')?old('meta_title_vi'):''}}"  name="meta_title_vi" class="form-control input-sm" data-required="true">
                                                        <p class="text-danger"> {{$errors->first('meta_title_vi')}}</p>
                                                    </div>
                                                </div><!-- /.col -->
                                                <div class="col-md-4 {{($errors->has('meta_description_vi'))?'has-error':''}}">
                                                    <div class="form-group ">
                                                        <label class="control-label">Meta Description Vietnamese</label>
                                                        <input type="text" placeholder="Meta description" value="{{old('meta_description_vi')?old('meta_description_vi'):''}}"  name="meta_description_vi" class="form-control input-sm" data-required="true">
                                                        <p class="text-danger"> {{$errors->first('meta_description_vi')}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 {{($errors->has('meta_keyword_en'))?'has-error':''}}">
                                                    <div class="form-group ">
                                                        <label class="control-label">Meta Keyword Vietnamese</label>
                                                        <input type="text" placeholder="Meta Keyword" value="{{old('meta_keyword_vi')?old('meta_keyword_vi'):''}}"  name="meta_keyword_vi" class="form-control input-sm" data-required="true">
                                                        <p class="text-danger"> {{$errors->first('meta_keyword_vi')}}</p>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div><!-- /.row -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Description Vietnamese</label>
                                                        <textarea class="form-control" placeholder="Description" name="description_vi" rows="3" data-required="true">{{old('description_vi')?old('description_vi'):''}}</textarea>
                                                    </div><!-- /form-group -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div><!-- /panel -->
                        </div><!-- /.col -->

                    </div><!-- /.row -->

                </div>
                <div class="panel-footer text-center">
                    <button class="btn btn-success" type="submit">Add</button>
                    <button class="btn btn-danger" type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div><!-- /panel -->

@stop
@section('script')
    <script src="{{asset('backend/tinymce_customize.js')}}"></script>
@stop