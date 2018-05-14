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
        <div class="team-content">
           <div class="container">
               <div class="row first-tem">
                  <div class="col-md-4 col-md-offset-2 item-left">
                      <img src="{{asset('frontend/assets/img/ns1.png')}}" alt="">
                  </div>
                   <div class="col-md-4 item-right">
                        <div class="first-team-title">
                            <h3>Nguyễn Thị Thu Huyền</h3>
                            <p>HĐQT – NGƯỜI SÁNG LẬP</p>
                        </div>
                       <div class="first-team-content">
                           <ul>
                               <li>Lorem ipsum dolor sit amet.</li>
                               <li>Beatae commodi doloribus libero quo?</li>
                               <li>Ab animi eius pariatur vitae?</li>
                               <li>Aperiam architecto aspernatur nesciunt saepe.</li>
                               <li>At ea exercitationem quos reiciendis.</li>
                               <li>Amet hic placeat quo recusandae.</li>
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
                            <div id="OurExpertCarousels" class="carousels slide" data-ride="carousels">
                                <ol class="carousel-indicators">
                                    <li data-target="#OurExpertCarousels" data-slide-to="0" class="active"></li>
                                    <li data-target="#OurExpertCarousels" data-slide-to="1"></li>
                                    <li data-target="#OurExpertCarousels" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner">

                                    <div class="item active">
                                        <div class="row">
                                            <div class="col-md-5 img">
                                                <img src="{{asset('frontend/assets/img/ns2.png')}}" alt="">
                                            </div>
                                            <div class="col-md-5">
                                                <h3>Nguyễn Thị Thu Huyền</h3>
                                                <p>HĐQT –  NGƯỜI SÁNG LẬP
                                                </p>
                                                <ul class="team-other">
                                                    <li>Lorem ipsum dolor sit amet.</li>
                                                    <li>Beatae commodi doloribus libero quo?</li>
                                                    <li>Ab animi eius pariatur vitae?</li>
                                                    <li>Aperiam architecto aspernatur nesciunt saepe.</li>
                                                    <li>At ea exercitationem quos reiciendis.</li>
                                                    <li>Amet hic placeat quo recusandae.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item  height-full">
                                        <div class="row">
                                            <div class="col-md-5 img">
                                                <img src="{{asset('frontend/assets/img/ns2.png')}}" alt="">
                                            </div>
                                            <div class="col-md-5">
                                                <h3>Cao Đức Trung
                                                </h3>
                                                <p>HĐQT – ĐỒNG SÁNG LẬP
                                                    GIÁM ĐỐC TÀI CHÍNH
                                                </p>
                                                <ul class="team-other">
                                                    <li>Lorem ipsum dolor sit amet.</li>
                                                    <li>Beatae commodi doloribus libero quo?</li>
                                                    <li>Ab animi eius pariatur vitae?</li>
                                                    <li>Aperiam architecto aspernatur nesciunt saepe.</li>
                                                    <li>At ea exercitationem quos reiciendis.</li>
                                                    <li>Amet hic placeat quo recusandae.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item  height-full">
                                        <div class="row">
                                            <div class="col-md-5 img">
                                                <img src="{{asset('frontend/assets/img/ns3.jpg')}}" alt="">
                                            </div>
                                            <div class="col-md-5">
                                                <h3>Phạm Bá Tước

                                                </h3>
                                                <p>HĐQT – ĐỒNG SÁNG LẬP
                                                    GIÁM ĐỐC ĐIỀU HÀNH
                                                </p>
                                                <ul class="team-other">
                                                    <li>Lorem ipsum dolor sit amet.</li>
                                                    <li>Beatae commodi doloribus libero quo?</li>
                                                    <li>Ab animi eius pariatur vitae?</li>
                                                    <li>Aperiam architecto aspernatur nesciunt saepe.</li>
                                                    <li>At ea exercitationem quos reiciendis.</li>
                                                    <li>Amet hic placeat quo recusandae.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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