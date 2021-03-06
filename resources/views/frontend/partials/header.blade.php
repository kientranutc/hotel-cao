<!DOCTYPE html>
<html lang="en" xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Cao-Hospitality | @yield('title')</title>
    <meta http-equiv="content-language" itemprop="inLanguage" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta itemprop="description" name="description" content="@yield('meta_description')" />
    <meta name="keywords" itemprop="keywords" content="@yield('meta_keyword')" />
    <meta name="author" itemprop="author" content="@yield('meta_author')" />
    <meta name="robots" content="index,follow" />
    <meta property="fb:app_id" content="100876217015412" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:title" content="cao hospitality" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="http://www.caohospitality.com/" />
    <meta property="og:image" content="http://www.caohospitality.com/frontend/assets/img/logo_1.jpg" />
    <meta property="og:site_name" content="www.caohospitality.com" />
    <meta property="article:section" content="Cao Hospitality" />
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}" />
    <!-- uniform -->
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/assets/uniform/css/uniform.default.min.css')}}" />
    <!-- animate.css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/wow/animate.css')}}" />
    <!-- gallery -->
    <link rel="stylesheet" href="{{asset('frontend/assets/gallery/blueimp-gallery.min.css')}}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/images/icon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('frontend/images/icon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('frontend/assets/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/banner.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/why-us.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/our-experts.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/news.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/project.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/why-us-value.css')}}">
    @yield('link')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">

</head>

<body id="home">
<!-- top
  <form class="navbar-form navbar-left newsletter" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Id Here">
        </div>
        <button type="submit" class="btn btn-inverse">Subscribe</button>
    </form>
 top -->

<!-- header -->
<nav class="navbar  navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
          <span class="logo-content">
              <img src="{{($logo->image!='')?$logo->image:asset('frontend/assets/img/logo_png1.png')}}"  alt="{{($logo->image!='')?$logo->image:asset('frontend/assets/img/logo_png1.png')}}">
          </span>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
                <li><a class="animated fadeInDown" href="/">@lang('home.menu.home')</a></li>
                <li><a class="animated fadeInDown" href="{{url('/')}}#section-why-value">@lang('home.menu.why_choose_us')</a></li>
                <li><a class="animated fadeInDown" href="{{url('/')}}/team">@lang('home.menu.team')</a></li>
                <li><a class="animated fadeInDown" href="{{url('/')}}/service">@lang('home.menu.service')</a></li>
                <li><a class="animated fadeInDown" href="{{URL::route('news')}}">@lang('home.menu.news')</a></li>
                <li><a class="animated fadeInDown" href="{{URL::route('contact')}}">@lang('home.menu.contact')</a></li>
                <li><div class="language">
                        <a href="{{URL::route('switchLang','en')}}"><img src="{{asset('frontend/assets/img/English.png')}}" alt=""></a>
                        <a href="{{URL::route('switchLang','vi')}}"><img src="{{asset('frontend/assets/img/vietnamese.png')}}" alt=""></a>
                    </div></li>
            </ul>
        </div><!-- Wnavbar-collapse -->
    </div><!-- container-fluid -->
</nav>
<!-- header -->

