
@extends('backend.layouts.master')
@section('title', 'quản lý chung')
@section('breadcrumb')
    quản lý chung
@stop
@section('content')

    <div class="main-header clearfix">
        <div class="page-title">
            <h3 class="no-margin">Quản lý chung</h3>
            <span>Chào bạn:{{\Auth::user()->username}}</span>
        </div><!-- /page-title -->

        <ul class="page-stats">
            <li>
                <div class="value">
                    <span>Doanh thu đến hiện tại</span>
                </div>
                <span id="balances" class="sparkline"></span>
            </li>
        </ul><!-- /page-stats -->
    </div><!-- /main-header -->

    <div class="grey-container shortcut-wrapper">
        <h2 class="text-center">Quản lý hệ thống website Cao-hospitality</h2>
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
        <img src="{{asset('frontend/assets/img/banner1.jpg')}}" alt="">
    </div><!-- /grey-container -->
@endsection
