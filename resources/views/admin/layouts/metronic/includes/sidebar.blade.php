<?php $adminURL = config('constants.ADMIN_URL'); ?>
<!-- BEGIN: Aside Menu -->
<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500">
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
        <?php $total = 0; ?>
        <!-- Dashboard -->
       {{-- <li class="m-menu__item{{ request()->is($adminURL.'dashboard') ? ' m-menu__item--active' : '' }}" aria-haspopup="true">
            <a href="{{ url($adminURL.'dashboard') }}" class="m-menu__link ">
                <i class="m-menu__link-icon flaticon-dashboard"></i>
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">
                            Dashboard
                        </span>
                    </span>
                </span>
            </a>
        </li>
        --}}
        <!-- components -->
        <li class="m-menu__section">
            <h4 class="m-menu__section-text"> Components </h4>
            <i class="m-menu__section-icon flaticon-more-v3"></i>
        </li>

{{--
        
        <li class="m-menu__item{{ (request()->is($adminURL.'view-users') || request()->is($adminURL.'view-app-users')) ? ' m-menu__item--active' : '' }}" aria-haspopup="true" data-menu-submenu-toggle="hover">
            <a href="{{ url($adminURL.'view-users') }}" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-layers"></i>
                <span class="m-menu__link-text">
                    Admin Users
                </span>
            </a>
        </li>
--}}
      
        <li class="m-menu__item{{ (request()->is($adminURL.'listMeeting') || request()->is($adminURL.'addMeeting') || request()->is($adminURL.'editMeeting'))? ' m-menu__item--active' : '' }}" aria-haspopup="true" data-menu-submenu-toggle="hover">
            <a href="{{ url($adminURL.'listMeeting') }}" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon fa fa-envelope"></i>
                <span class="m-menu__link-text">
                    Meeting
                </span>
            </a>
        </li>

        
    </ul>
</div>
<!-- END: Aside Menu -->