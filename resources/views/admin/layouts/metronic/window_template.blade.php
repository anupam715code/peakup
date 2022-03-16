<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        @include('admin.layouts.metronic.includes.styles')
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body class="m-page--fluid m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default" style="margin: 0px;">
        <!-- begin:: Page -->        
                @yield('content')           
        <!-- end:: Page -->
        <!-- begin::Quick Sidebar -->
        <?php /* @include('admin.includes.quick_sidebar') */ ?>
        <!-- end::Quick Sidebar -->         
        <!-- begin::Scroll Top -->
        <div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
            <i class="la la-arrow-up"></i>
        </div>
        <!-- end::Scroll Top -->            
        @include('admin.layouts.metronic.includes.scripts')
    </body>
    <!-- end::Body -->
</html>