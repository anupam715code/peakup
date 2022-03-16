<?php
    $adminURL = config('constants.ADMIN_URL');
?>

<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">@yield('title')</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="{{ url($adminURL.'dashboard') }}" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">
                    -
                </li>
                
                
                @foreach ($breadcrumb as $link => $title)
                
                    

                    @if(!$loop->last)
                    
                        <li class="m-nav__item">
                            <a href="{{ url($adminURL . $link) }}" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    {{ $title }}
                                </span>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        
                    @else
                    
                        <li class="m-nav__item">
                            <a href="{{ $link }}" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    {{ $title }}
                                </span>
                            </a>
                        </li>
                    
                    @endif
                    
                
                @endforeach
                
                
            </ul>
        </div>
    </div>
</div>