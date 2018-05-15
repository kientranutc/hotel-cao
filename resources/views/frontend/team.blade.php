@extends('frontend.layouts.master')
@section('link')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/team.css')}}">
    @stop
@section('content')
    <div class="team">
        <div class="team-title">
            <div class="container">
                <h3 class="text-center">our team</h3>
            </div>
        </div>
        <?php
        $local = (session('locale')!= null)?session('locale'):"vi";
        $name = "team.team_".$local;
        $team = config($name);
        ?>
        <div class="team-content">
           <div class="container">
               <div class="row first-tem">
                  <div class="col-md-4 col-md-offset-2 item-left">
                      <img src="{{asset('frontend/assets/img/'.current($team)['image'].'')}}" alt="">
                  </div>
                   <div class="col-md-5 item-right">
                        <div class="first-team-title">
                            <h3>{{current($team)['name']}}</h3>
                            <p>{{current($team)['level']}}</p>
                        </div>
                       <div class="first-team-content">
                           <ul>
                               @foreach(current($team)['exp'] as $k=>$v)
                                    <li>{{$v}}</li>
                               @endforeach
                           </ul>
                       </div>

                   </div>
               </div>
           </div>
        </div>
      <div class="container">
          <hr  class="style-one">
      </div>
        <div class="our-experts" id="our-experts-id">
            <div class="our-experts-content wowload fadeInDown">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- RoomCarousel -->
                            <?php
                                array_shift($team);
                            ?>
                            <div id="OurExpertCarousels" class="carousels slide" data-ride="carousels">
                                <ol class="carousel-indicators">

                                    <li data-target="#OurExpertCarousels" data-slide-to="0" class="active"></li>
                                    @for($i = 1 ;$i<count($team); $i++)
                                    <li data-target="#OurExpertCarousels" data-slide-to="{{$i}}"></li>
                                        @endfor
                                </ol>

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
                                                <img src="{{asset('frontend/assets/img/ns3.jpg')}}" alt="">
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
    </div>
@stop