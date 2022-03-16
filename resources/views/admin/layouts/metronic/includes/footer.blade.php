<footer class="m-grid__item m-footer ">
    <div class="m-container m-container--fluid m-container--full-height m-page__container">
        <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                <span class="m-footer__copyright">
                    <a href="javascript:void(0)" class="m-link">
                        {{ config('constants.application_name') }}
                    </a>
                    &copy; {{ date('Y') }} | All Rights Reserved
                </span> | 
				<span class="m-footer__copyright">
					Developed By : 
				    <a href="{{ config('constants.application_author_link') }}" class="m-link" target="_blank">
                        {{ config('constants.application_author') }}
                    </a>
                </span>
            </div>
        </div>
    </div>
</footer>
