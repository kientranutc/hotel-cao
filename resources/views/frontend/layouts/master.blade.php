@include("frontend.partials.header")
<!-- banner -->
<div class="banner">
    @if(empty($banner))
    <div id="BannerCarousels" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#BannerCarousels" data-slide-to="0" class="active"></li>
            <li data-target="#BannerCarousels" data-slide-to="1"></li>
            <li data-target="#BannerCarousels" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <img src="{{asset('frontend/assets/img/banner1.jpg')}}" class="img-responsive" alt="slide">
                <div class="banner-content">
                    <p class="animated fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, veniam!</p>
                    <p class="animated fadeInUp"><a href="">Read more</a></p>
                </div>
            </div>
            <div class="item  height-full"><img src="{{asset('frontend/assets/img/banner2.jpg')}}"  class="img-responsive" alt="slide">
                <div class="banner-content">
                    <p class="animated fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, veniam!</p>
                    <p class="animated fadeInUp"><a href="">Read more</a></p>
                </div>
            </div>
            <div class="item  height-full"><img src="{{asset('frontend/assets/img/banner1.jpg')}}"  class="img-responsive" alt="slide">
                <div class="banner-content">
                    <p class="animated fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, veniam!</p>
                    <p class="animated fadeInUp"><a href="">Read more</a></p>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#BannerCarousels" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="right carousel-control" href="#BannerCarousels" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
    </div>
    @else
        <div id="BannerCarousels" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#BannerCarousels" data-slide-to="0" class="active"></li>
                @for($i = 1 ;$i<count($banner);$i++)
                <li data-target="#BannerCarousels" data-slide-to="{{$i}}"></li>
                @endfor
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{current($banner)['image']}}" class="img-responsive" alt="slide">
                    <div class="banner-content">
                        <p class="animated fadeInDown"> {{str_limit(current($banner)['title_'.$local], 12)}}</p>
                        <p class="animated fadeInUp"><a href="{{current($banner)['url']}}">Read more</a></p>
                    </div>
                </div>
                <?php
                    array_shift($banner);
                ?>
                @foreach($banner as $row)
                <div class="item  height-full"><img src="{{$row['image']}}"  class="img-responsive" alt="slide">
                    <div class="banner-content">
                        <p class="animated fadeInDown">{{str_limit($row['title_'.$local], 12)}}</p>
                        <p class="animated fadeInUp"><a href="">Read more</a></p>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#BannerCarousels" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right carousel-control" href="#BannerCarousels" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
    @endif
    <!-- RoomCarousel-->
    <!-- Content-->
    @yield('content')
</div>
</div>
</div>
<!-- banner-->
<!-- reservation-information -->

@include('frontend.partials.footer')
