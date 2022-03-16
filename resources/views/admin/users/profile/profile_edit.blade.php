<?php
    $theme = config('constants.ADMIN_THEME');
?>
@extends('admin.layouts.'. $theme .'.template')

@section('title', 'My Profile')

@section('content')

<?php
$breadcrumb = array(
    'javascript:void(0)' => 'My Profile'
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
                        My Profile
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        {{ Form::open(array('url' => config('constants.ADMIN_URL').'saveMyProfile', 'class' => 'm-form m-form--fit m-form--label-align-right', 'method' => 'post', 'id' => 'm_form_1', 'files' => true)) }}
        <input type="hidden" name="id" value="{{ $userData->id }}">
        <div class="m-portlet__body">
            @include('admin.layouts.'. $theme .'.includes.message-block')
            <!-- user name -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">First Name*</label>
                        {{ Form::text('firstname', (isset($userData->firstname) ? $userData->firstname : ''), ['class' => 'form-control m-input', 'placeholder' => 'First Name', 'id' => 'name']) }}
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">Last Name*</label>
                        {{ Form::text('lastname', (isset($userData->lastname) ? $userData->lastname : ''), ['class' => 'form-control m-input', 'placeholder' => 'Last Name', 'id' => 'lastname']) }}
                    </div>
                </div>
                
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">Email*</label>
                        {{ Form::text('email', (isset($userData->email) ? $userData->email : ''), ['class' => 'form-control m-input', 'placeholder' => 'Email', 'id' => 'email', 'disabled']) }}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1" class="col-form-label">Phone*</label>
                        {{ Form::text('phone', (isset($userData->phone) ? $userData->phone : ''), ['class' => 'form-control m-input', 'placeholder' => 'Phone', 'id' => '<p></p>hone']) }}
                    </div>
                </div>
            </div>
        </div>
		<hr>
        <div class="m-portlet__foot">
            <div class="row align-items-center">
                <div class="col-lg-6 m--valign-middle">

                </div>
                <div class="col-lg-6 m--align-right">
                    <button type="submit" class="btn btn-brand">
                        Update
                    </button>
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
