<?php
    $theme = config('constants.ADMIN_THEME');
?>
@extends('admin.layouts.'. $theme .'.template')

@section('title', 'Modify User')

@section('content')

<?php
$breadcrumb = array(
    'javascript:void(0)' => 'Modify User'
);
?>
@include('admin.layouts.'. $theme .'.includes.breadcrumb')

<div class="m-content">
    <!--begin::Portlet-->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                       Modify User
                    </h3>
                </div>
            </div>
			 <div class="m--align-right m-portlet__head-caption " style="text-align:right;">
                   <a href="{{ url(config('constants.ADMIN_URL').'view-users') }}" class="btn btn-primary  m--align-right m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                        <span>
                            <i class="la la-search"></i>
                            <span>
                                View User
                            </span>
                        </span>
                     </a>
            </div>
			
        </div>
        <!--begin::Form-->
        {{ Form::open(array('url' => config('constants.ADMIN_URL').'modifyUser', 'class' => 'm-form m-form--fit m-form--label-align-right', 'method' => 'post', 'id' => 'm_form_1', 'files' => true)) }}
        <div class="m-portlet__body">
            @include('admin.layouts.'. $theme .'.includes.message-block')	
			
			<div class="row">
                <div class="col-sm-4">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">User Type</label>
                            <select name="usertype" class="form-control" required>
                                <option value="">Select Type</option>
								{{-- @foreach($titles as $title) --}}
                                <option value="{{ $titles->title_id }}" selected >{{ $titles->title }}</option>
									{{-- @endforeach --}}
                            </select>
							<br>
                    </div>
                </div> 
			</div>
            <!-- user name -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">First Name*</label>

                        {{ Form::text('firstname', ($userData->firstname)?$userData->firstname:'', ['class' => 'form-control m-input', 'placeholder' => 'First Name', 'id' => 'name']) }}

                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">Last Name*</label>

                        {{ Form::text('lastname', ($userData->lastname)?$userData->lastname:'', ['class' => 'form-control m-input', 'placeholder' => 'Last Name', 'id' => 'lastname']) }}

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">Email*</label>

                        {{ Form::text('email', ($userData->email)?$userData->email:'', ['class' => 'form-control m-input', 'placeholder' => 'Email', 'id' => 'email']) }}

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1" class="col-form-label">Phone*</label>

                        {{ Form::text('phone', ($userData->phone)?$userData->phone:'', ['class' => 'form-control m-input', 'placeholder' => 'Phone', 'id' => 'phone']) }}

                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-sm-6">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">Password</label>

                        {{ Form::text('password', '', ['class' => 'form-control m-input', 'placeholder' => 'Password', 'id' => 'pass']) }}

                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">Confirm Password</label>

                        {{ Form::text('repassword', '', ['class' => 'form-control m-input', 'placeholder' => 'Confirm Password', 'id' => 'repass']) }}
						{{ Form::hidden('userid', ($userData->id)?$userData->id:'', ['class' => 'form-control m-input']) }}

                    </div>
                </div>
            </div>
        </div>
		<hr>
        <div class="m-portlet__foot">
            <div class="row">
                <div class="col-lg-6 m--valign-middle pull-right">
					<button type="submit" class="btn btn-brand">
                        Update
                    </button>
                </div>
                <div class="col-lg-6 m--align-right">
					
				</div>
            </div>
        </div>
        <!-- </form> -->
        {{ Form::close() }}
        <!--end::Form-->
    </div>
    <!--end::Portlet-->
</div>
@stop
@section('js_footer_after_content')
<script type="text/javascript">
// delete from list
$(document).ready(function(){
    //== Class definition
    var FormWidgets = function () {
        //== Private functions
        var validator;       
        var initValidation = function () {
            validator = $( "#m_form_1" ).validate({
                // define validation rules
                rules: {
                    firstname: {
                        required: true
                    },
                    lastname: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        number: true,
                        minlength:10,
                        maxlength:10,
                    },
                },

                //display error alert on form submit  
                invalidHandler: function(event, validator) {             
                    var alert = $('#m_form_1_msg');
                    alert.removeClass('m--hide').show();
                    mApp.scrollTo(alert, -200);
                },

                submitHandler: function (form) {
                    form[0].submit(); // submit the form
                }
            });       
        }

        return {
            // public functions
            init: function() {
                initValidation();
            }
        };
    }();

    jQuery(document).ready(function() {    
        FormWidgets.init();
    });
});
</script>
@stop
