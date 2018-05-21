@extends('frontend.layouts.master')
@section('title',trans('home.menu.service'))
@section('meta_keyword', trans('home.menu.service'))
@section('meta_description',trans('home.menu.service'))
@section('meta_author',trans('home.menu.service'))

@section('link')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/service.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/team.css')}}">
@stop
@section('content')
    <div class="service">
        <div class="service-title">
            <div class="container">
                <h3 class="text-center">@lang('category.title_service')</h3>
            </div>
        </div>
        <div class="service-content">
            <div class="container">
                <div class="row">
                    <?php
                    $local = (session('locale')!= null)?session('locale'):"vi";
                    $name = "service.service_".$local;
                    $service = config($name);
                    ?>
                    <div class="col-sm-4 item wowload fadeInLeft">
                        <img src="{{asset('frontend/assets/img/service_pen.png')}}" alt="">
                        <h4>{{ $service[0]['title']}}
                        </h4>
                        <p>
                            {{ $service[0]['content']}}
                        </p>
                    </div>
                    <div class="col-sm-4 item">
                        <img src="{{asset('frontend/assets/img/service_intro.png')}}" alt="">
                        <h4>{{ $service[1]['title']}}
                        </h4>
                        <p>
                            {{ $service[1]['content']}}
                        </p>
                    </div>
                    <div class="col-sm-4 item wowload fadeInRight">
                        <img src="{{asset('frontend/assets/img/service_pr.png')}}" alt="">
                        <h4>{{ $service[2]['title']}}
                        </h4>
                        <p>
                            {{ $service[2]['content']}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="service-content-ab">

            </div>
        </div>
    </div>
    <div class="our-experts" id="our-experts-id">
        <div class="our-experts-title">
            <div class="container">
                <h3 class="text-center">@lang('category.title_team')</h3>
            </div>
        </div>
        <div class="our-experts-content wowload fadeInDown">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- RoomCarousel -->
                        <?php
                        $local = (session('locale')!= null)?session('locale'):"vi";
                        $name = "team.team_".$local;
                        $team = config($name);
                        ?>

                        <div id="OurExpertCarousels" class="carousels slide" data-ride="carousels">


                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-5 img">
                                            <img src="{{asset('frontend/assets/img/'.current($team)['image'].'')}}" alt="">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>{{current($team)['name']}}</h3>
                                            <p>{{current($team)['level']}}</p>
                                            </p>
                                            <ul class="team-other">
                                                @foreach(current($team)['exp'] as $k=>$v)
                                                    <li>{{$v}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    array_shift($team);
                                ?>
                                @foreach($team as $rows)
                                <div class="item  height-full">
                                    <div class="row">
                                        <div class="col-md-5 img">
                                            <img src="{{asset('frontend/assets/img/'.$rows['image'].'')}}" alt="">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>{{$rows['name']}}</h3>
                                            <p>{{$rows['level']}}</p>
                                            <ul class="team-other">
                                                @foreach($rows['exp'] as $k=>$v)
                                                    <li>{{$v}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach

                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#OurExpertCarousels" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="right carousel-control" href="#OurExpertCarousels" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <!-- RoomCarousel-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
