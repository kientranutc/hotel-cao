@extends('frontend.layouts.master')
@section('content')
{{--projects--}}
<!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
    _Hasync.push(['Histats.start', '1,4067886,4,406,165,100,00011111']);
    _Hasync.push(['Histats.fasi', '1']);
    _Hasync.push(['Histats.track_hits', '']);
    (function() {
        var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
        hs.src = ('//s10.histats.com/js15_as.js');
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
    })();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4067886&101" alt="" border="0"></a></noscript>
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
                <div class="col-sm-4 wowload fadeInUp">
                    <a href="" title="Click để xem chi tiết" class="gallery-image item">
                        <img src="{{asset('frontend/assets/img/duan_daewoo.jpg')}}" class="img-responsive">
                        <div class="info-project">
                            <p>Dự án x</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 wowload fadeInUp">
                    <a href="" title="Click để xem chi tiết" class="gallery-image item">
                        <img src="{{asset('frontend/assets/img/duan2.jpg')}}" class="img-responsive">
                        <div class="info-project">
                            <p>Dự án x</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 wowload fadeInUp">
                    <a href="" title="Click để xem chi tiết" class="gallery-image item">
                        <img src="{{asset('frontend/assets/img/duan.jpg')}}" class="img-responsive">
                        <div class="info-project">
                            <p>Dự án x</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 wowload fadeInUp">
                    <a href="" title="Click để xem chi tiết" class="gallery-image item">
                        <img src="{{asset('frontend/assets/img/duan2.jpg')}}" class="img-responsive">
                        <div class="info-project">
                            <p>Dự án x</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 wowload fadeInUp">
                    <a href="" title="Click để xem chi tiết" class="gallery-image item">
                        <img src="{{asset('frontend/assets/img/duan.jpg')}}" class="img-responsive">
                        <div class="info-project">
                            <p>Dự án x</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 wowload fadeInUp">
                    <a href="" title="Click để xem chi tiết" class="gallery-image item">
                        <img src="{{asset('frontend/assets/img/duan2.jpg')}}" class="img-responsive">
                        <div class="info-project">
                            <p>Dự án x</p>
                        </div>
                    </a>
                </div>
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
            <div class="col-sm-4">
                <!-- RoomCarousel -->
                <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active"><img src="{{asset('frontend/images/photos/8.jpg')}}" class="img-responsive" alt="slide">
                        </div>

                    </div>
                    <!-- Controls -->

                </div>
                <!-- RoomCarousel-->
                <div class="caption">Rooms<a href="" class="pull-right">Read more</a></div>
            </div>


            <div class="col-sm-4">
                <!-- RoomCarousel -->
                <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active"><img src="{{asset('frontend/images/photos/6.jpg')}}" class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="{{asset('frontend/images/photos/3.jpg')}}"  class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="{{asset('frontend/images/photos/4.jpg')}}"  class="img-responsive" alt="slide"></div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>
                <!-- RoomCarousel-->
                <div class="caption">Tour Packages<a href="" class="pull-right">Read more</a></div>
            </div>


            <div class="col-sm-4">
                <!-- RoomCarousel -->
                <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active"><img src="{{asset('frontend/images/photos/1.jpg')}}" class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="{{asset('frontend/images/photos/2.jpg')}}"  class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="{{asset('frontend/images/photos/5.jpg')}}"  class="img-responsive" alt="slide"></div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>
                <!-- RoomCarousel-->
                <div class="caption">Food and Drinks<a href="" class="pull-right">Read more</a></div>
            </div>
        </div>
    </div>
</div>

@stop