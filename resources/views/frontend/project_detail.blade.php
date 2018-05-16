@extends('frontend.layouts.master')
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
                                <?php
                                $title = "title_".$local;
                                $description = "description_".$local
                                ?>
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
                        </div>

                    </article>


                </div>
            </div>
        </div>


    </div>
@stop