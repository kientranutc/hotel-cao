@extends('backend.layouts.master')
@section('title', 'Project')
@section('breadcrumb')
    project
@stop
@section('content')
    <div id="content-project">
<div class="padding-md">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                     Content Our Project
                </div>
                <div class="panel-tab clearfix">
                    <ul class="tab-bar">
                        <ul class="tab-bar">
                            <li class="active"><a href="#home1" data-toggle="tab"><img src="{{asset('frontend/assets/img/English.png')}}" alt="{{asset('frontend/assets/img/English.png')}}"> Content English</a></li>
                            <li><a href="#profile1" data-toggle="tab"><img src="{{asset('frontend/assets/img/vietnamese.png')}}" alt="{{asset('frontend/assets/img/vietnamese.png')}}"> Content Vietnamese</a></li>
                        </ul>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home1">
                            <p><b class="text-danger">Meta title:</b>{{$showContent->meta_title_en}}</p>
                            <p><b class="text-danger">Meta description:</b>{{$showContent->meta_description_en}}</p>
                            <p><b class="text-danger">Meta keyword:</b>{{$showContent->meta_keyword_en}}</p>
                            <hr>
                            <div style="padding: 10px; text-align: justify; margin-top: 20px; font-size: 14px">
                                {!! $showContent->description_en !!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile1">
                            <p><b class="text-danger">Meta title:</b>{{$showContent->meta_title_vi}}</p>
                            <p><b class="text-danger">Meta description:</b>{{$showContent->meta_description_vi}}</p>
                            <p><b class="text-danger">Meta keyword:</b>{{$showContent->meta_keyword_vi}}</p>
                            <hr>
                            <div style="padding: 10px; text-align: justify; margin-top: 20px; font-size: 14px">
                                {!! $showContent->description_vi !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /panel -->
        </div><!-- /.col -->
    </div>
</div></div>
@stop