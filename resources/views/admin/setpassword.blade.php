<!DOCTYPE html>
<html lang="en">
@section('title', 'Login') @include('admin.layouts.metronic.includes.styles')

<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
            <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
                <div class="m-stack m-stack--hor m-stack--desktop">
                    <div class="m-stack__item m-stack__item--fluid">
                        <div class="m-login__wrapper">
                            <div class="m-login__logo">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset(env('ASSETS_PATH').'assets/img/digital-dreams-logo-130X30.png') }}">
                                </a>
                            </div>
                            <div class="m-login__signin">
                                <div class="m-login__head">
                                    <h3 class="m-login__title">
                                        Set Password
                                    </h3>
                                </div>

                                <!-- BEGIN LOGIN FORM -->
                                {{ Form::open(array('url' => 'savePassword', 'method' => 'post', 'class' => 'm-login__form m-form', 'id' => 'm_form_setpwss')) }}

                                <input type="hidden" name="type" value="<?php echo $data['type']; ?>">
                                <input type="hidden" name="token" value="<?php echo $data['token']; ?>">

                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" id="password" type="password" name="password" placeholder="Password">
                                    <span class="error_pass" id="new_Password_error"></span>
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" id="cpassword" type="password" name="cpassword" placeholder="Confirm Password">
                                    <span class="error_pass" id="confirm_Password_error"></span>
                                </div>
                                <div class="m-login__form-action">
                                    <button type="submit" id="m_login_signin_submit" onclick="return changePassword();" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                        Set Password
                                    </button>
                                </div>
                                {{ Form::close() }}
                                <!-- END LOGIN FORM -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1  m-login__content" style="background-image: url({{ asset(env('ASSETS_PATH').'assets/metronic/app/media/img//bg/bg-4.jpg') }})">
                <div class="m-grid__item m-grid__item--middle">
                    <h3 class="m-login__welcome">
                    {{ config('constants.application_name') }}
                </h3>
                    <p class="m-login__msg">
                        Welcome to {{ config('constants.application_name') }} Set PassWord
                    </p>
                </div>
            </div>
        </div>
    </div>

    <style type="text/css">
        .error_pass {
            color: red;
        }
    </style>
    <!-- end:: Page -->
    @include('admin.layouts.metronic.includes.scripts')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        function changePassword() {
            $(".error_pass").html('');
            var new_Password = document.getElementById("password").value;
            var confirm_Password = document.getElementById("cpassword").value;
            if (new_Password == "") {
                $('#new_Password_error').html("Please enter new password");
                return false;
            } else if (new_Password.length < 6) {
                $('#new_Password_error').html("Please enter atleast 6 digit password");
                return false;
            }
            if (confirm_Password == "") {
                $('#confirm_Password_error').html("Please enter confirm password");
                return false;
            }
            if (new_Password != confirm_Password) {
                $("#confirm_Password_error").html("Please enter the same password as above ");
                return false;
            }

        }
    </script>

</body>
<!-- end::Body -->

</html>