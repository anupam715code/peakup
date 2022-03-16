<?php
$theme = config('constants.ADMIN_THEME');
?>
@extends('admin.layouts.'. $theme .'.template')

@section('title', 'Change Password')

@section('content')

<?php
$breadcrumb = array(
    'javascript:void(0)' => 'Change Password'
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
                        Change Your Password
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        {{ Form::open(array('url' => config('constants.ADMIN_URL').'saveChangePassword', 'class' => 'm-form m-form--fit m-form--label-align-right', 'method' => 'post', 'id' => 'm_form_1', 'files' => true)) }}
        
            <div class="m-portlet__body">
                
                @include('admin.layouts.'. $theme .'.includes.message-block')

                <!-- old password -->
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Old Password *
                    </label>
                    <div class="col-lg-6 col-md-9 col-sm-12">
                        <div class="m-typeahead">
                            <input class="form-control m-input" id="opassword" type="password" name="opassword" placeholder="Old Password">
                        </div>
                    </div>
                </div>

                <!-- password -->
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Password *
                    </label>
                    <div class="col-lg-6 col-md-9 col-sm-12">
                        <div class="m-typeahead">
                            <input class="form-control m-input" id="password" type="password" name="password" placeholder="Password">
                        </div>
                    </div>
                </div>

                <!-- confirm password -->
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Confirm Password *
                    </label>
                    <div class="col-lg-6 col-md-9 col-sm-12">
                        <div class="m-typeahead">
                            <input class="form-control m-input" id="cpassword" type="password" name="cpassword" placeholder="Confirm Password">
                        </div>
                    </div>
                </div>
            </div>

            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit" class="btn btn-success">
                                Submit
                            </button>
                        </div>
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
                    opassword: {
                        required: true
                    },
                    password: {
                        required: true
                    },
                    cpassword: {
                        required: true,
                        equalTo: "#password"
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
