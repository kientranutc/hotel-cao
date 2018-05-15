@extends('frontend.layouts.master')
@section('link')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/news.css')}}">
@stop
@section('content')
    <div class="news">
        <div class="news-title">
            <div class="container">
                <h3 class="text-center">@lang('category.title.news')</h3>
            </div>
        </div>
        <div class="news-content">
            <div class="container">
                <div class="row">
                    @forelse($news as $row)
                    <div class="col-md-6 post excerpt">
                        <h2 class="title">
                            <a href="" title="A Post with Everything In It" rel="bookmark">{{$row['title_'.$local]}}</a>
                        </h2>
                        <div class="post-info">
                            <span class="theauthor"><span><i class="fa fa-user" aria-hidden="true"></i> </span>&nbsp;<a href=""  rel="author">{{$row['user_create']}}</a></span>   <span class="theauthor"><span> &nbsp;  <i class="fa fa-clock-o" aria-hidden="true"></i> </span><a href=""  rel="author">{{$row['created_at']}}</a></span>
                        </div>
                        <a href="https://demo.mythemeshop.com/ribbon/2017/01/07/a-post-with-everything-in-it/" title="A Post with Everything In It" id="featured-thumbnail">
                            <div class="featured-thumbnail">
                                <img width="150" height="150" src="{{$row['image']}}" class="attachment-ribbon-lite-featured size-ribbon-lite-featured wp-post-image" alt="" title="" srcset="https://demo.mythemeshop.com/ribbon/files/2017/01/fashion-glasses-go-pro-female-157888-150x150.jpeg 150w, https://demo.mythemeshop.com/ribbon/files/2017/01/fashion-glasses-go-pro-female-157888-60x60.jpeg 60w" sizes="(max-width: 150px) 100vw, 150px">
                            </div>
                        </a>
                        <div class="post-content">
                            {!! str_limit($row['description_'.$local],50) !!}
                        </div>
                        <div class="readMore">
                            <a href="https://demo.mythemeshop.com/ribbon/2017/01/07/a-post-with-everything-in-it/" title="A Post with Everything In It">
                                @lang('category.load_more') </a>
                        </div>
                    </div>
                        @empty
                    @endforelse

                </div>
            </div>
            <div class="pagination-news">
                <div class="row">
                    <div class="col-md-12 text-center">
                        {{
                         $news->links()
                         }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop