<aside class="fixed skin-6">
    <div class="sidebar-inner scrollable-sidebar">
        <div class="size-toggle">
            <a class="btn btn-sm" id="sizeToggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

        </div><!-- /size-toggle -->
        <div class="user-block clearfix">
            <img src="{{(Auth::user()->image!="")?Auth::user()->image:asset('frontend/assets/img/user-icon.png')}}" alt="User Avatar">
            <div class="detail">
                <strong>John Doe</strong><span class="badge badge-danger m-left-xs bounceIn animation-delay4"></span>
                <ul class="list-inline">

                </ul>
            </div>
        </div><!-- /user-block -->

        <div class="main-menu">
            <ul>
                <li class="active">
                    <a href="{{URL::route('dashboard')}}">
								<span class="menu-icon">
									<i class="fa fa-desktop fa-lg"></i>
								</span>
                        <span class="text">
									Dashboard
								</span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                <li class="{{(Route::currentRouteName()=='banner-index')
                            || (Route::currentRouteName()=='banner-create')
                            || (Route::currentRouteName()=='banner-edit')
                        ?'active':''}}">
                    <a href="{{URL::route('banner-index')}}">
								<span class="menu-icon">
									<i class="fa fa-sliders fa-lg" aria-hidden="true"></i>
								</span>
                        <span class="text">
									Banner
								</span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                <li class="{{(Route::currentRouteName()=='project-index')
                            || (Route::currentRouteName()=='project-create')
                            || (Route::currentRouteName()=='project-edit')
                        ?'active':''}}">
                    <a href="{{URL::route('project-index')}}">
								<span class="menu-icon">
									<i class="fa fa-desktop fa-lg"></i>
								</span>
                        <span class="text">
									Our Projects
								</span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                <li class="{{(Route::currentRouteName()=='news-index')
                            || (Route::currentRouteName()=='create-index')
                            || (Route::currentRouteName()=='news-index')

                ?'active':''}}">
                    <a href="{{URL::route('news-index')}}">
								<span class="menu-icon">
									<i class="fa fa-newspaper-o fa-lg"></i>
								</span>
                        <span class="text">
									News
								</span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                @if(Auth::user()->is_admin==1)
                <li class="{{(Route::currentRouteName()=='user-index')
                            || (Route::currentRouteName()=='user-index')
                            || (Route::currentRouteName()=='user-index')

                ?'active':''}}">
                    <a href="{{URL::route('user-index')}}">
								<span class="menu-icon">
									<i class="fa fa-user fa-lg"></i>
								</span>
                        <span class="text">
									User
								</span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                @endif
                <li class="{{(Route::currentRouteName()=='project-index')
                        ?'active':''}}">
                    <a href="{{URL::route('project-index')}}">
								<span class="menu-icon">
									<i class="fa fa-envelope fa-lg" aria-hidden="true"></i>
								</span>
                        <span class="text">
									Contact
								</span>
                        <span class="menu-hover"></span>
                    </a>
                </li>




            </ul>

        </div><!-- /main-menu -->
    </div><!-- /sidebar-inner -->
</aside>