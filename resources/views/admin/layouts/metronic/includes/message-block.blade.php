<div class="m-form__content">
    <div class="m-alert m-alert--icon alert alert-danger m--hide" role="alert" id="m_form_1_msg">
        <div class="m-alert__icon">
            <i class="la la-warning"></i>
        </div>
        <div class="m-alert__text">
            Oh snap! Change a few things up and try submitting again.
        </div>
        <div class="m-alert__close">
            <button type="button" class="close" data-close="alert" aria-label="Close"></button>
        </div>
    </div>
</div>


@if (count($errors) > 0 && !session('error_msg'))
<div class="m-form__content">
    <div class="m-alert m-alert--icon alert alert-danger" role="alert" id="m_form_1_msg">
        <div class="m-alert__icon">
            <i class="la la-warning"></i>
        </div>
        <div class="m-alert__text">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <div class="m-alert__close">
            <button type="button" class="close" data-close="alert" aria-label="Close"></button>
        </div>
    </div>
</div>
@else
	@if(session('error_msg'))
		<div class="m-form__content">
			<div class="m-alert m-alert--icon alert alert-danger" role="alert">
				 <div class="m-alert__icon">
					<i class="la la-warning"></i>
				</div>
				<div class="m-alert__text">
					{{ session('error_msg') }}
				</div>
				<div class="m-alert__close">
					<button type="button" class="close" data-close="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	@endif
@endif


	
@if(session('success_msg'))
    <div class="m-form__content">
        <div class="m-alert m-alert--icon alert alert-success" role="alert">
            <div class="m-alert__icon">
                <i class="la la-check"></i>
            </div>
            <div class="m-alert__text">
                {{ session('success_msg') }}
            </div>
            <div class="m-alert__close">
                <button type="button" class="close" data-close="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif







