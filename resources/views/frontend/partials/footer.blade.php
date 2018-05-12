



<footer class="spacer">
    <div class="container">
        <div class="footer-title">
            <h2>@lang('footer.title')</h2>
        </div>
        <div class="row">

            <div class="col-sm-4">
                <ul class="list-unstyled">
                    <li>
                        <h3><i class="fa fa-map-marker" aria-hidden="true"></i> <b>@lang('footer.head_office.title')</b>
                        </h3>
                        <div style="margin-left: 20px">
                            <p> <b>@lang('footer.head_office.company_name.title'):</b> @lang('footer.head_office.company_name.name')</p>
                            <p> <b>@lang('footer.head_office.address.title'):</b> @lang('footer.head_office.address.name')</p>
                            <p> <b>@lang('footer.head_office.tax_number.title'):</b> @lang('footer.head_office.tax_number.name')</p>

                        </div>
                    </li>
                    <li>
                        <h3><i class="fa fa-envelope" aria-hidden="true"></i> Email / Website</h3>
                        <div style="margin-left: 20px">
                            <p><b>Email:</b> @lang('footer.email_website.email')
                            </p>
                        </div>
                    </li>
                    <li>
                        <h3><i class="fa fa-mobile fa-lg" aria-hidden="true"></i> <b>@lang('footer.contact.title')
                            </b></h3>
                        <div style="margin-left: 20px">
                            <p><b>@lang('footer.contact.phone.title'): </b><a href="">@lang('footer.contact.phone.name')</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <h3><i class="fa fa-university" aria-hidden="true"></i> <b>@lang('footer.bank_account.title')</b>
                        </h3>
                        <div style="margin-left: 20px">
                            <p><b>@lang('footer.bank_account.name.title'):</b> @lang('footer.bank_account.name.name')</p>
                            <p><b>@lang('footer.bank_account.account_number.title'):</b> @lang('footer.bank_account.account_number.name')</p>
                            <p><b>@lang('footer.bank_account.bank.title'):</b> @lang('footer.bank_account.bank.name')</p>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="col-sm-8 subscribe">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control"  placeholder="@lang('footer.form.name')*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Email*" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="@lang('footer.form.subject')">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center"><button type="submit" class="form-control contact-submit">@lang('footer.form.send')</button></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->

    <!--/.footer-bottom-->
</footer>

<div class="text-center copyright">© 2018 by <a href="">CAO Hospitality</a></div>

<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>




<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>

<script src="{{asset('frontend/assets/jquery.js')}}"></script>

<!-- wow script -->
<script src="{{asset('frontend/assets/wow/wow.min.js')}}"></script>

<!-- uniform -->
<script src="{{asset('frontend/assets/uniform/js/jquery.uniform.js')}}"></script>


<!-- boostrap -->
<script src="{{asset('frontend/assets/bootstrap/js/bootstrap.js')}}" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="{{asset('frontend/assets/mobile/touchSwipe.min.js')}}"></script>

<!-- jquery mobile -->
<script src="{{asset('frontend/assets/respond/respond.js')}}"></script>

<!-- gallery -->
<script src="{{asset('frontend/assets/gallery/jquery.blueimp-gallery.min.js')}}"></script>
<!-- custom script -->
<script src="{{asset('frontend/assets/script.js')}}"></script>
</body>
</html>





