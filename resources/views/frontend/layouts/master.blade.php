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
                    <p class="animated fadeInDown text-center">Cao hospitality</p>
                    <p class="animated fadeInUp"><a href="/">@lang('category.read_more')</a></p>
                </div>
            </div>
            <div class="item  height-full"><img src="{{asset('frontend/assets/img/banner2.jpg')}}"  class="img-responsive" alt="slide">
                <div class="banner-content">
                    <p class="animated fadeInDown text-center">Cao hospitality</p>
                    <p class="animated fadeInUp"><a href="/">@lang('category.read_more')</a></p>
                </div>
            </div>
            <div class="item  height-full"><img src="{{asset('frontend/assets/img/banner1.jpg')}}"  class="img-responsive" alt="slide">
                <div class="banner-content">
                    <p class="animated fadeInDown text-center">Cao hospitality</p>
                    <p class="animated fadeInUp"><a href="/">@lang('category.read_more')</a></p>
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
                        <p class="animated fadeInDown"> {{current($banner)['title_'.$local]}}</p>
                        <p class="animated fadeInUp"><a href="{{current($banner)['url']}}">@lang('category.read_more')</a></p>
                    </div>
                </div>
                <?php
                    array_shift($banner);
                ?>
                @foreach($banner as $row)
                <div class="item  height-full"><img src="{{$row['image']}}"  class="img-responsive" alt="slide">
                    <div class="banner-content">
                        <p class="animated fadeInDown">{{$row['title_'.$local] }}</p>
                        <p class="animated fadeInUp"><a href="{{$row['url']}}">@lang('category.read_more')</a></p>
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
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src =   "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=100876217015412";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
@include('frontend.partials.footer')
