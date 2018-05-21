@extends('frontend.layouts.master')
@section('title',trans('home.menu.home'))
@section('meta_keyword', trans('home.menu.home'))
@section('meta_description', trans('home.menu.home'))
@section('meta_author',trans('home.menu.home'))

@section('content')
{{--projects--}}
<!-- Histats.com  END  -->
<div class="projects">
    <div class="projects-title">
        <div class="container">
            <h3 class="text-center">@lang('category.title.project')</h3>
        </div>
    </div>
    <div class="projects-content">
        <div class="container">
            <div class="row gallery">
                @forelse($projectNew as $row)
                <div class="col-sm-4 wowload fadeInUp">
                    <a href="{{URL::route('project-detail', ['id'=>$row['id'], 'slug' => $row['slug_'.$local]])}}" title="Click để xem chi tiết" class="gallery-image item">
                        <img src="{{$row['image']}}" class="img-responsive">
                        <div class="info-project">
                            <p>{{$row['title_'.$local]}}</p>
                        </div>
                    </a>
                </div>
                    @empty
                @endforelse
                    @forelse($projectOld as $row)
                        <div class="col-sm-4 wowload fadeInUp">
                            <a href="{{URL::route('project-detail', ['id'=>$row['id'], 'slug' => $row['slug_'.$local]])}}" title="Click để xem chi tiết" class="gallery-image item">
                                <img src="{{$row['image']}}" class="img-responsive">
                                <div class="info-project">
                                    <p>{{$row['title_'.$local]}}</p>
                                </div>
                            </a>
                        </div>
                    @empty
                    @endforelse

            </div>
        </div>
    </div>
    <div class="load-more">
        <div class="container">
            <p><a href="{{URL::route('project')}}"><i class="fa fa-angle-double-right fa-sm animated fadeInLeft" aria-hidden="true"></i> @lang('category.load_more')</a></p>
        </div>
    </div>
</div>
<section id="section-why-value">
    <div class="why-value-title">
        <div class="container">
            <h3 class="text-center">@lang('category.title.core_value')</h3>
        </div>
    </div>
    <div class="why-us-value">
       <div class="container">
           <div class="row">
               <div class="col-md-4 col-md-offset-1 item">
                   <h4>@lang('category.core_value.title')</h4>
                   <div class="why-us-value-content">
                       <ul>
                           <li><i class="fa fa-check fa-lg" aria-hidden="true"></i> @lang('category.core_value.content.1')</li>
                           <li><i class="fa fa-check fa-lg" aria-hidden="true"></i> @lang('category.core_value.content.2')</li>
                           <li><i class="fa fa-check fa-lg" aria-hidden="true"></i> @lang('category.core_value.content.3')</li>
                           <li><i class="fa fa-check fa-lg" aria-hidden="true"></i> @lang('category.core_value.content.4')</li>
                           <li><i class="fa fa-check fa-lg" aria-hidden="true"></i> @lang('category.core_value.content.5')</li>
                           <li><i class="fa fa-check fa-lg" aria-hidden="true"></i> @lang('category.core_value.content.6')</li>
                       </ul>
                   </div>
               </div>
               <div class="col-md-4 col-md-offset-2 item">
                    <h4>@lang('category.why_us.title')</h4>
                   <div class="why-us-value-content">
                       <ul>
                           <li><i class="fa fa-check fa-lg" aria-hidden="true"></i> @lang('category.why_us.content.1')</li>
                           <li><i class="fa fa-check fa-lg" aria-hidden="true"></i> @lang('category.why_us.content.2')</li>
                           <li><i class="fa fa-check fa-lg" aria-hidden="true"></i> @lang('category.why_us.content.3')</li>
                           <li><i class="fa fa-check fa-lg" aria-hidden="true"></i> @lang('category.why_us.content.4')</li>
                           <li><i class="fa fa-check fa-lg" aria-hidden="true"></i> @lang('category.why_us.content.5')</li>
                           <li><i class="fa fa-check fa-lg" aria-hidden="true"></i> @lang('category.why_us.content.6')</li>
                       </ul>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-sm-12">
                   <div class="why-us-value-text">
                       <p>@lang('category.core_why_content')
                       </p>
                   </div>
               </div>
           </div>
       </div>
    </div>
    </div>
</section>
<div class="news">
    <div class="news-title">
        <div class="container">
            <h3 class="text-center">@lang('category.title.news')</h3>
        </div>
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
                    <a href="{{URL::route('news-detail',['id'=>$row->id, 'slug'=>$row['slug_'.$local]])}}" title="" id="featured-thumbnail">
                        <div class="featured-thumbnail">
                            <img width="150" height="150" src="{{$row['image']}}" class="attachment-ribbon-lite-featured size-ribbon-lite-featured wp-post-image" alt="" title="" srcset="https://demo.mythemeshop.com/ribbon/files/2017/01/fashion-glasses-go-pro-female-157888-150x150.jpeg 150w, https://demo.mythemeshop.com/ribbon/files/2017/01/fashion-glasses-go-pro-female-157888-60x60.jpeg 60w" sizes="(max-width: 150px) 100vw, 150px">
                        </div>
                    </a>
                    <div class="post-content">
                        {!! $row['contextual_'.$local] !!}
                    </div>
                    <div class="readMore">
                        <a href="{{URL::route('news-detail',['id'=>$row->id, 'slug'=>$row['slug_'.$local]])}}" title="A Post with Everything In It">
                            @lang('category.load_more') </a>
                    </div>
                </div>
            @empty
            @endforelse

        </div>
    </div>
</div>

@stop