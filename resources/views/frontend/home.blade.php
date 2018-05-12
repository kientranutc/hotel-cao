@extends('frontend.layouts.master')
@section('content')
{{--projects--}}
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
    {{--why us --}}
{{--<section id="section-why-us">--}}
    {{--<div class="title">--}}
        {{--<div class="container">--}}
            {{--<h3 class="text-center">Why choose us</h3>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="content wowload fadeInDown">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-4">--}}
                    {{--<div class="info">--}}
                        {{--<div class="image">--}}
                            {{--<img src="{{asset('frontend/assets/img/image1.png')}}" alt="{{asset('frontend/assets/img/image1.png')}}">--}}
                        {{--</div>--}}
                        {{--<h5>Kế hoạch, định hướng theo từng giai đoạn</h5>--}}
                        {{--<div class="text">--}}
                            {{--Tư vấn hiệu quả ,cùng chủ đầu tư phát triển  kinh doanh và tối đa lợi nhuận--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4">--}}
                    {{--<div class="info">--}}
                        {{--<div class="image">--}}
                            {{--<img src="{{asset('frontend/assets/img/image2.png')}}" alt="{{asset('frontend/assets/img/image2.png')}}">--}}
                        {{--</div>--}}
                        {{--<h5>Làm việc nhóm hiệu quả</h5>--}}
                        {{--<div class="text">--}}
                            {{--Chúng tôi phát huy sức mạnh tập thể , thúc đẩy  đóng góp ý kiên  của các thành viên, cùng nhau  hoàn thành xuất sắc mục tiêu đặt ra.--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4">--}}
                    {{--<div class="info">--}}
                        {{--<div class="image">--}}
                            {{--<img src="{{asset('frontend/assets/img/image3.png')}}" alt="{{asset('frontend/assets/img/image3.png')}}">--}}
                        {{--</div>--}}
                        {{--<h5>Công nghệ</h5>--}}
                        {{--<div class="text">--}}
                            {{--Ứng dụng công nghệ, phền mền tiên tiến và hiệu quả cao phù hợp với từng dự án.--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-4">--}}
                    {{--<div class="info">--}}
                        {{--<div class="image">--}}
                            {{--<img src="{{asset('frontend/assets/img/image4.png')}}" alt="{{asset('frontend/assets/img/image4.png')}}">--}}
                        {{--</div>--}}
                        {{--<h5>Theo sát tiến trình</h5>--}}
                        {{--<div class="text">--}}
                            {{--Chúng tôi luôn đặt tâm huyết vào tất cả các dự án với việc theo dõi sát sao nhằm đưa ra các chiến lược kịp thời, sát với tình hình thực tế.--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4">--}}
                    {{--<div class="info">--}}
                        {{--<div class="image">--}}
                            {{--<img src="{{asset('frontend/assets/img/image5.png')}}" alt="{{asset('frontend/assets/img/image5.png')}}">--}}
                        {{--</div>--}}
                        {{--<h5>Nhân sự chất lượng cao</h5>--}}
                        {{--<div class="text">--}}
                            {{--Tất cả các nhân sự của chúng tôi đều được đào tạo  chuyên nghiệp và có rất nhiều năm kinh nghiệm.--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4">--}}
                    {{--<div class="info">--}}
                        {{--<div class="image">--}}
                            {{--<img src="{{asset('frontend/assets/img/image6.png')}}" alt="{{asset('frontend/assets/img/image5.png')}}">--}}
                        {{--</div>--}}
                        {{--<h5>Hợp tác hai bên cùng có lợi</h5>--}}
                        {{--<div class="text">--}}
                            {{--Chúng tôi đặt lợi ích của đối tác song hành cùng lợi ích của chúng tôi, tạo sự gắn bó cùng phát triển dài lâu..--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
    {{--why choose us--}}

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
                        <div class="item  height-full"><img src="{{asset('frontend/images/photos/9.jpg')}}"  class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="{{asset('frontend/images/photos/10.jpg')}}"  class="img-responsive" alt="slide"></div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
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