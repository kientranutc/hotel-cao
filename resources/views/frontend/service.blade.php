@extends('frontend.layouts.master')
@section('link')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/service.css')}}">
@stop
@section('content')
    <div class="service">
        <div class="service-title">
            <div class="container">
                <h3 class="text-center">dịch vụ</h3>
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
                <h3 class="text-center">OUR EXPERTS</h3>
            </div>
        </div>
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
                                            <img src="assets/img/ns1.png" alt="">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>Nguyễn Thị Thu Huyền</h3>
                                            <p>HĐQT –  NGƯỜI SÁNG LẬP
                                            </p>
                                            <p class="text-justify">
                                                Tốt nghiệp Học Viện Tài Chính chuyên ngành tài chính ngân hàng.<br/> Ngoài ra Bà còn tham gia các khóa học đào tạo nghiệp vụ tài chính doanh nghiệp của PhòngThương mại và Công nghiệp Versailles C.C.I.V.
                                                Trên 10 năm kinh nghiệm tại các vị trí kế toán trưởng tại Tập đoàn Đại Dương; Tập đoàn Sungroup;
                                                Chủ tịch Hội đồng quản trị Công ty Cổ phần Truyền thông Kim Cương - Lotte Hàn Quốc.
                                                Trưởng ban kiểm toán nội bộ của Công ty CP TVShopping, Thời báo Doanh nhân, Công ty cổ phần Greenmedia
                                                Giám đốc tài Chính tại STS Hospitality.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item  height-full">
                                    <div class="row">
                                        <div class="col-md-5 img">
                                            <img src="assets/img/ns2.png" alt="">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>Cao Đức Trung
                                            </h3>
                                            <p>HĐQT – ĐỒNG SÁNG LẬP
                                                GIÁM ĐỐC TÀI CHÍNH
                                            </p>
                                            <p class="text-justify">
                                                Tốt nghiệp Học Viện Tài Chính chuyên ngành tài chính doanh nghiệp
                                                Tốt nghiệp loại giỏi khóa học Quản lý khách sạn theo tiêu chuẩn nghề du lịch Việt Nam do Trung tâm Đào tạo Quốc tế Pegasus thuộc Tập đoàn giáo dục KinderWorld đào tạo và cấp chứng chỉ
                                                Phó phòng Kiểm toán nội bộ tại Tổng Công ty Hàng hải Việt Nam
                                                Trưởng phòng Kiểm soát tuân thủ tại Tập đoàn SUNGROUP (đơn vị sở hữu Thương hiệu SUNWORLD và các bất động sản nghỉ dưỡng nổi tiếng như Intercontinent Đà Nẵng, Primer Village, khách sạn Novotel Đà Nẵng,…).
                                                Kế toán trưởng tại Tập đoàn Thành Nam
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item  height-full">
                                    <div class="row">
                                        <div class="col-md-5 img">
                                            <img src="assets/img/ns3.jpg" alt="">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>Phạm Bá Tước

                                            </h3>
                                            <p>HĐQT – ĐỒNG SÁNG LẬP
                                                GIÁM ĐỐC ĐIỀU HÀNH
                                            </p>
                                            <p class="text-justify">
                                                Cử nhân chuyên ngành kinh tế quản trị kinh doanh tổng hợp.
                                                Đào tạo nghiệp vụ chuyên ngành khách sạn tại Hàn quốc
                                                Với hơn 20 năm kinh nghiệm trong ngành  khách sạn  :
                                                Khách sạn Hanoi Deawoo – Phụ trách kinh doanh hội thảo & tiệc
                                                Tập đoàn SWISS BEL – Phụ trách kinh doanh Mihrin Hạ long
                                                Khách sạn Lan Viên – Tổng Quản Lý
                                                Tập đoàn Nam Cường – Phụ trách khối kinh doanh khách sạn
                                                Khách san THE REED Ninh Bình – Giám đốc kinh doanh & QC
                                                Giám đốc phát triển kinh doanh tại STS Hospitality 
                                                Giám đốc điều hành khách sạn Hòa Bình 4 sao

                                            </p>
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
@stop
