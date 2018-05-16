@extends('frontend.layouts.master')
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
                @forelse($project as $row)
                <div class="col-sm-4 wowload fadeInUp">
                    <a href="" title="Click để xem chi tiết" class="gallery-image item">
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
            <p><a href=""><i class="fa fa-angle-double-right fa-sm animated fadeInLeft" aria-hidden="true"></i> @lang('category.load_more')</a></p>
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
<div class="spacer services wowload fadeInUp">
    <div class="container">
        <div class="row">
            @forelse($news as $row)
            <div class="col-sm-4 item-news">
                <!-- RoomCarousel -->

                <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active"><img src="{{$row['image']}}" class="img-responsive" alt="slide">
                        </div>

                    </div>
                    <!-- Controls -->
                </div>
                <!-- RoomCarousel-->
                <div class="caption">{{$row['title_'.$local]}}
                </div>
                <a href="{{URL::route('news-detail',['id'=>$row->id, 'slug'=>$row['slug_'.$local]])}}" class="pull-right news-load-more" ><i class="fa fa-search-plus fa-lg" aria-hidden="true"></i></a></div>
                @empty
            @endforelse
        </div>
    </div>
</div>

@stop