@extends('admin.layouts.template')
@section('title', 'Dashboard')

@section('content')

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Profile</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="{{ url('admin/dashboard') }}" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">
                    -
                </li>
                <li class="m-nav__item">
                    <a href="javascript:void(0)" class="m-nav__link">
                        <span class="m-nav__link-text">
                            My Profile
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END: Subheader -->
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
        {{ Form::open(array('url' => 'admin/my-profile/save', 'class' => 'm-form m-form--fit m-form--label-align-right', 'method' => 'post', 'id' => 'm_form_1', 'files' => true)) }}
            <input type="hidden" name="id" value="{{ $id }}">
            <div class="m-portlet__body">
                
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

                @if(session('status'))
                    <div class="m-form__content">
                        <div class="m-alert m-alert--icon alert alert-success" role="alert">
                            <div class="m-alert__icon">
                                <i class="la la-check"></i>
                            </div>
                            <div class="m-alert__text">
                                Records have updated successfully.
                            </div>
                            <div class="m-alert__close">
                                <button type="button" class="close" data-close="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- user name -->
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Username *
                    </label>
                    <div class="col-lg-6 col-md-9 col-sm-12">
                        <div class="m-typeahead">
                            <input class="form-control m-input" id="user_name" type="text" name="user_name" placeholder="User Name" value="{{ $user_name }}">
                        </div>
                    </div>
                    
                </div>

                <!-- email -->
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Email *
                    </label>
                    <div class="col-lg-6 col-md-9 col-sm-12">
                        <div class="m-typeahead">
                            <input class="form-control m-input" id="email" type="text" name="email" placeholder="Email" value="{{ $email }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit" class="btn btn-success">
                                Update
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
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                    user_name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
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
