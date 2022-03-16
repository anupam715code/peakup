<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        @include('admin.layouts.metronic.includes.styles')
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">

            <!-- BEGIN: Header -->
            @include('admin.layouts.metronic.includes.header')
            <!-- END: Header -->        

            <!-- begin::Body -->
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
                <!-- BEGIN: Left Aside -->
                <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
                    <i class="la la-close"></i>
                </button>

                <div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">
                    @include('admin.layouts.metronic.includes.sidebar')
                </div>
                <!-- END: Left Aside -->

                <div class="m-grid__item m-grid__item--fluid m-wrapper">
                    @yield('content')
                </div>

                <div class="modal fade bs-modal-md" id="iframe-modal" tabindex="-1" role="basic"  aria-hidden="true">
                    <div class="modal-dialog modal-md" >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="iframe-modal-title">
                                    Iframe modal title
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">
                                        &times;
                                    </span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe src="" style="width:100%; height: 100%;" style="overflow:hidden;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
<div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>
            <!-- end:: Body -->
            <!-- begin::Footer -->
            @include('admin.layouts.metronic.includes.footer')
            <!-- end::Footer -->

        </div>
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