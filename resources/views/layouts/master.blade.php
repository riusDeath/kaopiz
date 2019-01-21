<!doctype html>
<html lang="zxx">
    
<!-- Mirrored from envytheme.com/tf-demo/edufield/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 19:58:08 GMT -->
<head>
        <base href="{{ asset('/') }}">
        @include('layouts.style')
        <title>@yield('title')</title>
        @yield('style')
    </head>
    <body>
        <!-- Start Preloader Area -->
        <div class="preloader-area">
            <div class="loader">
                <div class="dots">
                    <i class="dots-item dots-item-move-down"></i>
                    <i class="dots-item dots-item-move-left"></i>
                    <i class="dots-item dots-item-move-left"></i>
                    <i class="dots-item dots-item-move-left"></i>
                    <i class="dots-item dots-item-move-left"></i>
                    <i class="dots-item dots-item-move-down"></i>
                    <i class="dots-item dots-item-move-right"></i>
                    <i class="dots-item dots-item-move-right"></i>
                    <i class="dots-item dots-item-move-down"></i>
                    <i class="dots-item dots-item-move-up"></i>
                    <i class="dots-item dots-item-move-down"></i>
                    <i class="dots-item dots-item-move-up"></i>

                    <i class="dots-item"></i>

                    <i class="dots-item dots-item-move-down"></i>
                    <i class="dots-item dots-item-move-up"></i>
                    <i class="dots-item dots-item-move-down"></i>
                    <i class="dots-item dots-item-move-up"></i>
                    <i class="dots-item dots-item-move-left"></i>
                    <i class="dots-item dots-item-move-left"></i>
                    <i class="dots-item dots-item-move-up"></i>
                    <i class="dots-item dots-item-move-right"></i>
                    <i class="dots-item dots-item-move-right"></i>
                    <i class="dots-item dots-item-move-right"></i>
                    <i class="dots-item dots-item-move-right"></i>
                    <i class="dots-item dots-item-move-up"></i>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->
       
        <!-- Start Main Menu Area -->
        @include('layouts.header')
        <!-- End Main Menu Area -->
        
        <!-- Start Search Popup Area -->
        <div id="search-area">
            <button type="button" class="close">×</button>
            <form method="get" action="{{ route('home') }}">
                <input type="search" value="" placeholder="Search Kewword(s)" name="search">
                <input type="submit" class="btn btn-primary" value="Search">
            </form>
        </div>
        <!-- End Search Popup Area -->
        
        <!-- Start Main Banner Area -->
        @yield('banner')
        <!-- End Main Banner Area -->
        
        {{-- content --}}
        @yield('content')
        {{-- content --}}
        
        <!-- Start NewsLetter Area -->
        @include('layouts.footer')
        <!-- End Footer Area -->
        
        <!-- Back to top -->
        <a class="scrolltop" href="#top"><i class="icofont-hand-drawn-up"></i></a>
        <!-- End Back to top -->
        
        @include('layouts.script')
        @yield('script')
    </body>

<!-- Mirrored from envytheme.com/tf-demo/edufield/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 19:58:10 GMT -->
</html>