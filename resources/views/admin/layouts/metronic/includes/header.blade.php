<header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
    <div class="m-container m-container--fluid m-container--full-height">
        <div class="m-stack m-stack--ver m-stack--desktop">
            <!-- BEGIN: Brand -->
            <div class="m-stack__item m-brand  m-brand--skin-dark ">
                <div class="m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-stack__item--middle m-brand__logo">
                        <a href="{{ url(config('constants.ADMIN_URL').'dashboard')}}" class="m-brand__logo-wrapper">
                           <!--  <img alt="" src="{{ asset(env('ASSETS_PATH').'assets/img/get-logo.png') }}" width="130px" /> -->
							<h1 style="text-align:center; color:#e2e2e2; font-size:53px;">Online</h1>
                        </a>
                    </div>
                    <div class="m-stack__item m-stack__item--middle m-brand__tools">
                        <!-- BEGIN: Left Aside Minimize Toggle -->
                        <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block">
                            <span></span>
                        </a>
                        <!-- END -->
                        <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                        <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                            <span></span>
                        </a>
                        <!-- END -->
                
                        <!-- BEGIN: Topbar Toggler -->
                        <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                            <i class="flaticon-more"></i>
                        </a>
                        <!-- BEGIN: Topbar Toggler -->
                    </div>
                </div>
            </div>
            <!-- END: Brand -->
            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-topbar__nav-wrapper">
                        <!-- user session -->
                        <?php 
							$userData = Session::get('user_data'); 
							//pr($userData);die;
                        ?>
                        <ul class="m-topbar__nav m-nav m-nav--inline">
                            <?php //$notification = getNotification();  ?>
                          <!--  <li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click" id="atlas">
                                <a href="#" class="m-nav__link m-dropdown__toggle">
                                    <?php 
                                    /*if (!empty($notification)) { ?>
                                         <p id="examples">{{$notification}}</p>
                                         <?php
                                        echo '<span class="m-nav__link-icon m-animate-shake">
                                        <i class="flaticon-music-2"></i></span>';
                                        //pr($notification);die;
                                    } else {
                                        echo ' <span class="m-nav__link-icon m-animate-shake">
                                        <i class="flaticon-music-2"></i></span>';
                                    }*/
                                     ?> 
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
                                                        <div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                                            <div class="m-list-timeline m-list-timeline--skin-light">
                                                                <div class="m-list-timeline__items">
                                                                    <?php 
                                                               /* $listNotification = listNotification();
                                                                foreach ($listNotification as $key => $value) {  ?>
                                                                   <div class="m-list-timeline__item <?php if ($value->is_read == 0) { ?> unread-notification <?php } ?>">
                                                                        <span class="m-list-timeline__badge"></span>
                                                                        <span class="m-list-timeline__text">
                                                                            <a href="{{ url(config('constants.ADMIN_URL').'viewNotification')}}/{{ $value->id }}">{{ $value->title }}</a>
                                                                        </span>
                                                                        <span class="m-list-timeline__time">
                                                                            
                                                                        </span>
                                                                    </div>
                                                                    <?php } */?>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <button type="button" class="btn btn-sm btn-link">
												        <a href="{{ url(config('constants.ADMIN_URL').'listNotification')}}" class="m-link">
                                                            View All
                                                       </a>
												    </button>
                                                    <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                                        <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                                            <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                                <span class="">
                                                                    All caught up!
                                                                    <br>
                                                                    No new logs.
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>-->
                            <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
                                <a href="#" class="m-nav__link m-dropdown__toggle">
                                    <span class="m-topbar__userpic">
                                        <img src="{{ asset(env('ASSETS_PATH').'assets/img/user_avtar.png') }}" class="m--img-rounded m--marginless m--img-centered" alt=""/>
                                    </span>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__header m--align-center"
                                         style="background: url( {{ asset(env('ASSETS_PATH').'assets/metronic/app/media/img/misc/user_profile_bg.jpg')}} ); background-size: cover;">
                                            <div class="m-card-user m-card-user--skin-dark">
                                                <div class="m-card-user__pic">
                                                    <img src="{{ asset(env('ASSETS_PATH').'assets/img/user_avtar.png') }}" class="m--img-rounded m--marginless" alt=""/>
                                                </div>
                                                <?php if (!empty($userData['firstname'])) {
                                                    $name = ucwords($userData['firstname']);
                                                } else {
                                                    $name = '';
                                                }
                                                if (!empty($userData['lastname'])) {
                                                    $lastname = ucwords($userData['lastname']);
                                                } else {
                                                    $lastname = '';
                                                }
                                                $fullname = $name. ' ' .$lastname;
                                                 ?>
                                                <div class="m-card-user__details">
                                                    <span class="m-card-user__name m--font-weight-500">
                                                        {{ $fullname }}
                                                    </span>
                                                    <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                                        {{ ucwords($userData['email']) }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav m-nav--skin-light">
                                                    <!-- my profile -->
                                                    <li class="m-nav__item">
                                                        <a href="{{ url(config('constants.ADMIN_URL').'my-profile') }}" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                            <span class="m-nav__link-title">
                                                                <span class="m-nav__link-wrap">
                                                                    <span class="m-nav__link-text">
                                                                        My Profile
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <!-- change password -->
                                                    <li class="m-nav__item">
                                                        <a href="{{ url(config('constants.ADMIN_URL').'change-password') }}" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lock"></i>
                                                            <span class="m-nav__link-title">
                                                                <span class="m-nav__link-wrap">
                                                                    <span class="m-nav__link-text">
                                                                        Change Password
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="{{ url(config('constants.ADMIN_URL').'logout') }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Topbar -->
            </div>
        </div>
    </div>
</header>