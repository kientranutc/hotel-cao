<?php
$title = "title_".$local;
$description = "description_".$local
?>
@extends('frontend.layouts.master')
@section('title',$projectDetail->$title )
@section('meta_keyword', 'product detail')
@section('meta_description',$projectDetail->$title  )
@section('meta_author','product detail')
@section('link')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/news_detail.css')}}">
@stop
@section('content')
    <div class="news-detail">
        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <article class="article">
                        <div class="single_post">
                            <header>
                                <!-- Start Title -->
                                <h1 class="title single-title">{{$projectDetail->$title }}</h1>
                                <!-- End Title -->
                                <!-- Start Post Meta -->
                                <div class="post-info">
                                <span class="theauthor">
                                    <span><i class="fa fa-user" aria-hidden="true"></i>
                                    </span>&nbsp;<a href="#"  rel="author">{{$projectDetail->user_create}}</a></span>
                                    <span class="theauthor"><span> &nbsp;
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    </span><a href="#"  rel="author">{{$projectDetail->created_at}}</a></span>
                                </div>

                            </header>
                            <br>

                            <div id="content" class="post-single-content box mark-links">
                                {!! $projectDetail->$description !!}
                            </div>
                            <div class="register-project">
                                <p><a style="border-radius: 4px"  class="btn btn-success" href="{{$projectDetail->url}}"><i class="fa fa-share" aria-hidden="true"></i> @lang('category.register')</a></p>
                            </div>
                            <div id="fb-root"></div>


                            <div class="fb-comments" data-href="{{ URL::current()}}"
                                 data-width="100%" data-numposts="5"></div>
                        </div>

                    </article>


                </div>
            </div>
        </div>


    </div>
@stop