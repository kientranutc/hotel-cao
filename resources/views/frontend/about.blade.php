@extends('frontend.layouts.master')
@section('title',trans('home.menu.contact'))
@section('meta_keyword', trans('home.menu.contact'))
@section('meta_description',trans('home.menu.contact'))
@section('meta_author',trans('home.menu.contact'))
@section('link')
    <style>
        .about-content {
            margin-top: 30px;
        }
        .about-content p {
            text-align: justify;
            color: #555555;
            text-indent: 20px;
        }
        .about-content h3 a{
            color: #23527c;
        }
    </style>
    @stop
@section('content')
    <div class="projects about-end">
        <div class="projects-title">
            <div class="container">
                <h3 class="text-center">@lang('category.about.title')</h3>
            </div>
        </div>
        <div class="about-content">
            <div class="container">
                <h3><a href="">CAO HOSPITALITY</a></h3>
                <p>@lang('category.about.content')</p>
            </div>
        </div>
    </div>
    <div class="container">

        <h1 class="title contact-title">@lang('footer.title')</h1>
        <!-- form -->
        <div class="contact">
            <div class="row">

                <div class="col-sm-12">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.2633252280416!2d105.85175141438664!3d21.022147186002037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abece78b8b5b%3A0x87357580055c35c9!2zMjcgTMO9IFRoxrDhu51uZyBLaeG7h3QsIEjDoG5nIELDoGksIEhvw6BuIEtp4bq_bSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1526093494061" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="spacer">

                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- form -->

    </div>
@stop