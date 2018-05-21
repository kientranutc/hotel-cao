<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cao hospitality| @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{asset('backend/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Pace -->
    <link href="{{asset('backend/css/pace.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/jquery.dataTables_themeroller.css')}}" rel="stylesheet">
    <!-- Color box -->
    <link href="{{asset('backend/css/colorbox/colorbox.css')}}" rel="stylesheet">

    <!-- Morris -->


    <!-- Endless -->
    <link href="{{asset('backend/css/endless.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/endless-skin.css')}}" rel="stylesheet">
    <style>
        a.close {
            margin-right: 20px;
        }
    </style>
    @yield('link')


</head>

<body class="overflow-hidden">
<!-- Overlay Div -->
<div id="overlay" class="transparent"></div>

<a href="" id="theme-setting-icon"><i class="fa fa-cog fa-lg"></i></a>
<div id="theme-setting">
    <div class="title">
        <strong class="no-margin">Skin Color</strong>
    </div>
    <div class="theme-box">
        <a class="theme-color" style="background:#323447" id="default"></a>
        <a class="theme-color" style="background:#efefef" id="skin-1"></a>
        <a class="theme-color" style="background:#a93922" id="skin-2"></a>
        <a class="theme-color" style="background:#3e6b96" id="skin-3"></a>
        <a class="theme-color" style="background:#635247" id="skin-4"></a>
        <a class="theme-color" style="background:#3a3a3a" id="skin-5"></a>
        <a class="theme-color" style="background:#495B6C" id="skin-6"></a>
    </div>
    <div class="title">
        <strong class="no-margin">Sidebar Menu</strong>
    </div>
    <div class="theme-box">
        <label class="label-checkbox">
            <input type="checkbox" checked id="fixedSidebar">
            <span class="custom-checkbox"></span>
            Fixed Sidebar
        </label>
    </div>
</div><!-- /theme-setting -->

<div id="wrapper" class="preload">
    <div id="top-nav" class="fixed skin-6">
        <a href="#" class="brand">
            <span>Cao</span>
            <span class="text-toggle">hospitality</span>
        </a><!-- /brand -->
        <button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <button type="button" class="navbar-toggle pull-left hide-menu" id="menuToggle">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <ul class="nav-notification clearfix">
            <li class="profile dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <strong>{{Auth::user()->fullname}}</strong>
                    <span><i class="fa fa-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="clearfix" href="#">
                            <img src="{{(Auth::user()->image!="")?Auth::user()->image:asset('frontend/assets/img/user-icon.png')}}" alt="User Avatar">
                            <div class="detail">
                                <strong>{{Auth::user()->fullname}}</strong>

                            </div>
                        </a>
                    </li>
                    <li><a tabindex="-1" href="{{URL::route('user-edit')}}" class="main-link"><i class="fa fa-edit fa-lg"></i> Edit profile</a></li>
                    <li class="divider"></li>
                    <li><a tabindex="-1" class="main-link " href="{{URL::route('process-logout')}}"><i class="fa fa-lock fa-lg"></i> Log out</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /top-nav-->

        @include('backend.partials.sidebar')

    <div id="main-container">
        <div id="breadcrumb">
            <ul class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/admin"> Home</a></li>
                <li class="active">@yield('breadcrumb')</li>
            </ul>
        </div><!-- /breadcrumb-->


        <div class="padding-md">
            @include('backend.partials.message')
            @yield('content')
        </div><!-- /.padding-md -->
    </div><!-- /main-container -->
    <!-- Footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-sm-12">
                <p class="text-center">
                    &copy; 2018 <strong>CAO Hospitality</strong>
                </p>
            </div><!-- /.col -->
        </div><!-- /.row-->
    </footer>


    <!--Modal-->
    <div class="modal fade" id="newFolder">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4>Create new folder</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="folderName">Folder Name</label>
                            <input type="text" class="form-control input-sm" id="folderName" placeholder="Folder name here...">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>
                    <a href="#" class="btn btn-danger btn-sm">Save changes</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="text-center">Do you want to item?</h4>

                </div>
                <div class="modal-footer">
                    <a href="" id="btn-modal-delete"class="btn btn-success">Delete</a>
                    <a href="javscript:void(0)" class="btn btn-danger" data-dismiss="modal">Close</a>
                </div>
            </div>

        </div>
    </div>
    <div id="imageModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <iframe  width="100%" height="550" frameborder="0" src="{{url('/')}}/filemanager/dialog.php?type=&field_id=image-input">
                    </iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div id="contentModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>DISPLAY CONTENT</h4>
                </div>
                <div class="modal-body" id="content-modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div><!-- /wrapper -->

<a href="" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

<!-- Logout confirmation -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- Jquery -->
<script src="{{asset('backend/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('backend/tinymce/js/tinymce/tinymce.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('backend/bootstrap/js/bootstrap.js')}}"></script>

<script src="{{asset('backend/js/rapheal.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>
<!-- Colorbox -->
<script src="{{asset('backend/js/jquery.colorbox.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>

<!-- Pace -->
<script src="{{asset('backend/js/uncompressed/pace.js')}}"></script>

<!-- Popup Overlay -->
<script src="{{asset('backend/js/jquery.popupoverlay.min.js')}}"></script>

<!-- Slimscroll -->
<script src="{{asset('backend/js/jquery.slimscroll.min.js')}}"></script>

<!-- Modernizr -->
<script src="{{asset('backend/js/modernizr.min.js')}}"></script>

<!-- Cookie -->
<script src="{{asset('backend/js/jquery.cookie.min.js')}}"></script>

<!-- Endless -->
<script src="{{asset('backend/js/endless/endless.js')}}"></script>
<script src="{{asset('backend/show_modal_delete.js')}}"></script>
<script src="{{asset('backend/input_add_image.js')}}"></script>
@yield('script')
</body>
</html>
