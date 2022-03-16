<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        @include('admin.layouts.metronic.includes.styles')
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <style type="text/css">
        .m-top{
            margin-top: 0px;
        }
    </style>
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default m-top ">
        <!-- begin:: Page -->
                
                <div class="m-grid__item m-grid__item--fluid m-wrapper m-bottom" style="margin-bottom:0px;">
                    @yield('content')
                </div>

        <div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
            <i class="la la-arrow-up"></i>
        </div>
        <!-- end::Scroll Top -->            
        @include('admin.layouts.metronic.includes.scripts')
    </body>
    <!-- end::Body -->
</html>