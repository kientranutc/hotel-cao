<?php
$title = "title_".$local;
$description = "description_".$local
?>
@extends('frontend.layouts.master')
@section('title',$newsDetail->$title )
@section('meta_keyword', 'news detail')
@section('meta_description',$newsDetail->$title  )
@section('meta_author','news detail')

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

                            <h1 class="title single-title">{{$newsDetail->$title }}</h1>
                            <!-- End Title -->
                            <!-- Start Post Meta -->
                            <div class="post-info">
                                <span class="theauthor">
                                    <span><i class="fa fa-user" aria-hidden="true"></i>
                                    </span>&nbsp;<a href="#"  rel="author">{{$newsDetail->user_create}}</a></span>
                                <span class="theauthor"><span> &nbsp;
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    </span><a href="#"  rel="author">{{$newsDetail->created_at}}</a></span>
                            </div>

                        </header>
                        <br>

                        <div id="content" class="post-single-content box mark-links">
                            {!! $newsDetail->$description !!}
                        </div>
                        <div id="fb-root"></div>


                        <div class="fb-comments" data-href="{{ URL::current()}}"
                             data-width="100%" data-numposts="5"></div>
                    </div>

                      <div class="news-relationship">
                          <div class="news-related-top">
                              <h3>@lang('category.title_news_relation')</h3>
                          </div>
                          <div class="row">
                              @forelse($newsRelationship as $row)
                              <div class="col-md-4">
                                  <article class="content-news-related">
                                      <a href="{{URL::route('news-detail',['id'=>$row->id, 'slug'=>$row['slug_'.$local]])}}" title="{{$row->$title}}">
                                          <div class="featured-thumbnail">
                                              <img width="300" height="125" src="{{$row['image']}}" class="attachment-ribbon-lite-related size-ribbon-lite-related wp-post-image" alt="" title="">
                                          </div>
                                          <h4 class="content-news-related-title">{{$row->$title}}</h4>

                                      </a>
                                  </article>
                              </div>
                                  @empty
                              @endforelse
                          </div>
                      </div>

                  </article>
              </div>
          </div>
      </div>


    </div>

@stop