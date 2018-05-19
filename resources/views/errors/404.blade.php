@extends('frontend.layouts.master404')
@section('title','not found page')
@section('link')
    <style>
        .img-404 {
            text-align: center;
            margin-top: 30px;
        }
        .go-back {
            text-align: center;
            margin-top: 10px;
        }
        .go-back a {
            padding: 5px 15px;
            border: 1px solid #0d88c1;
            border-radius: 5px;
        }
        .go-back a:hover {
            background: #0d88c1;
            color: #ffffff;
        }
    </style>
@stop
@section('content')
<div class="container">
    <div class="img-404">
        <img src="{{asset('frontend/images/404.png')}}" alt="">
    </div>
    <div class="go-back">
        <p><a href="/">@lang('category.go_back')</a></p>
    </div>
</div>
@stop