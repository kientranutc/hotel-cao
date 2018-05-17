@extends('frontend.layouts.master')
@section('title','team')
@section('meta_keyword', 'team')
@section('meta_description', 'team')
@section('meta_author','team')
@section('content')
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

                            <h4>Write to us</h4>
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <input type="phone" class="form-control" id="phone" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <textarea type="email" class="form-control"  placeholder="Message" rows="4"></textarea>
                                </div>

                                <button type="submit" class="btn btn-default">Send</button>
                            </form>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- form -->

    </div>
@stop