<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo">
        <span class="logo-lg"><b>TOEIC</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                {{-- <img src="#" class="user-image" alt="User Image"> --}}
                <span class="hidden-xs">
                    {{ Auth::user()->name }}
                </span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                {{-- <img src="#" class="img-circle" alt="User Image"> --}}

                <p>
                    {{ Auth::user()->name }}
                    <small>{{ Auth::user()->created_at }}</small>
                </p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                <div class="pull-left">
                    <a href="{{ route('user.account') }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
                </li>
            </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
        </ul>
        </div>
    </nav>
</header>