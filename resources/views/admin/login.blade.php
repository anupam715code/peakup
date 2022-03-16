<!DOCTYPE html>
<html lang="en" >
@section('title', 'Login')
@include('admin.layouts.metronic.includes.styles')

@section('css_header_after_content')
.m-login--signup .m-login__wrapper
{
    padding:0px !important;
 }
@stop
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
            <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
                <div class="m-stack m-stack--hor m-stack--desktop">
                    <div class="m-stack__item m-stack__item--fluid">
                        <div class="m-login__wrapper" style="padding-top: 0%;">
                            <div class="m-login__logo">
                                <a href="javascript:void(0)" style="text-decoration: none;">
								<!-- <h1 class="get-logo">Online</h1> -->
                                   <img src="{{ asset(env('ASSETS_PATH').'assets/img/logo.png') }}" width="300" height="100">
                                </a>
                            </div>
                            <div class="m-login__signin">
                                <div class="m-login__head">
                                    <h3 class="m-login__title">
                                        Sign In
                                    </h3>
                                </div>
                                <!-- BEGIN LOGIN FORM -->
                            {{ Form::open(array('url' => config('constants.ADMIN_URL').'get_login', 'class' => 'm-login__form m-form')) }}

                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off" value="{{ Cookie::get('email') }}">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" id="pw" value="{{ Cookie::get('password') }}"><i class="la la-eye" id="viewp" style="cursor: pointer;position: absolute;top: 10px;right: 0;"></i>
                                </div>
                                <div class="row m-login__form-sub">
                                    <!-- <div class="col m--align-left">
                                        <label class="m-checkbox m-checkbox--focus">
                                        <input type="checkbox" name="remember" value="1"  {{ Cookie::get("remember") ? "checked" : "" }}>
                                            Remember me
                                            <span></span>
                                        </label>
                                    </div> -->
                                     <a href="javascript:void(0)" id="m_login_signup" class="m-link">
                                            Register Here
                                        </a>
                                    <div class="col m--align-right">
                                        <a href="javascript:void(0)" id="m_login_forget_password" class="m-link">
                                            Forgot Password ?
                                        </a>
                                    </div>
                                </div>
                                <div class="m-login__form-action">
                                    <button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                        Sign In
                                    </button>
                                </div>

                            {{ Form::close() }}
                                <!-- END LOGIN FORM -->
                            </div>
                            <div class="m-login__signup">
                               {{-- <div class="m-login__head">
                                    <!-- <h3 class="m-login__title">
                                        Register Here ?
                                    </h3> -->
                                    <div class="m-login__desc">
                                        Enter following info and register
                                    </div>
                                </div>
                                --}}
<!--------------------   Start Register form ------------------- -->
    {{ Form::open(array('url' => config('constants.ADMIN_URL'), 'class' => 'm-login__form m-form')) }}
            <!-- user name -->
                <div class="col-sm-12">
                    <div class="form-group m-form__group">
                       <!--  <label for="exampleInputEmail1">First Name*</label> -->
                        {{ Form::text('firstname', '', ['class' => 'form-control m-input', 'placeholder' => 'First Name', 'id' => 'name']) }}
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group m-form__group">
                       <!--  <label for="exampleInputEmail1">Last Name*</label> -->
                        {{ Form::text('lastname', '', ['class' => 'form-control m-input', 'placeholder' => 'Last Name', 'id' => 'lastname']) }}
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group m-form__group">
                        <!-- <label for="exampleInputEmail1">Email*</label> -->
                        {{ Form::text('email', '', ['class' => 'form-control m-input', 'placeholder' => 'Email', 'id' => 'email']) }}
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group m-form__group">
                       <!--  <label for="exampleInputEmail1" class="col-form-label">Phone*</label> -->
                        {{ Form::text('phone', '', ['class' => 'form-control m-input', 'placeholder' => 'Phone', 'id' => '<p></p>phone']) }}
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group m-form__group">
                       <!--  <label for="exampleInputEmail1">Password*</label> -->
                        {{ Form::text('password', '', ['class' => 'form-control m-input', 'placeholder' => 'Password', 'id' => 'pass']) }}
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group m-form__group">
                       <!--  <label for="exampleInputEmail1">Confirm Password*</label> -->
                        {{ Form::text('repassword', '', ['class' => 'form-control m-input', 'placeholder' => 'Confirm Password', 'id' => 'repass']) }}
                    </div>
                </div>
                <div class="row m-login__form-sub">
                   <!--  <div class="col m--align-left">
                        <label class="m-checkbox m-checkbox--focus">
                        <input type="checkbox" name="remember" value="1"  {{ Cookie::get("remember") ? "checked" : "" }}>
                            Remember me
                            <span></span>
                        </label>
                    </div> -->
                    <div class="col m--align-right">
                        <a href="javascript:;" id="m_login_forget_password_cancel1" class="m-link">
                            Already have account? SIGN IN
                        </a>
                    </div>
                </div>
                <div class="m-login__form-action">
                    <button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                        Register
                    </button>
                    <!-- <button id="m_login_forget_password_cancel1" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
                        Register
                    </button> -->
                </div>

    {{ Form::close() }}
            </div>

<!-------------------- Start Forgot Form --------------------->    

            <div class="m-login__forget-password">
                <div class="m-login__head">
                    <h3 class="m-login__title">
                        Forgotten Password ?
                    </h3>
                    <div class="m-login__desc">
                        Enter your email to reset your password:
                    </div>
                </div>

                {{ Form::open(array('url' => 'get_login', 'class' => 'm-login__form m-form')) }}
                <!-- BEGIN FORGOT PASSWORD FORM -->
                <div class="form-group m-form__group">
                    <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
                </div>
                <div class="m-login__form-action">
                    <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                        Request
                    </button>
                    <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
                        Cancel
                    </button>
                </div>
                {{ Form::close() }}
               
                <!-- END FORGOT PASSWORD FORM -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" style="background-image: url({{ asset(env('ASSETS_PATH').'assets/img/welcome-bg.png') }})">
            <div class="m-grid__item m-grid__item--middle">
                {{--<h3 class="m-login__welcome m-grid--center text-center">
                     config('constants.application_name') --}}
    				<img src="{{ asset(env('ASSETS_PATH').'assets/img/student-banner.gif') }}" width="365">
                    <!--<img src="{{ asset(env('ASSETS_PATH').'assets/img/login-gif-image.gif') }}" width="300">
                </h3>-->
                <!--<p class="m-login__msg">
                    Welcome to {{ config('constants.application_name') }} Admin
                </p>-->
            </div>
        </div>
    </div>
</div>
            <!-- end:: Page -->
 @include('admin.layouts.metronic.includes.scripts')


            <script type="text/javascript">
            //== Class Definition
            var SnippetLogin = function () {

                var login = $('#m_login');

                var showErrorMsg = function (form, type, msg) {
                    var alert = $('<div class="m-alert m-alert--outline alert alert-' + type + ' alert-dismissible" role="alert">\
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\
                        <span></span>\
                        </div>');

                    form.find('.alert').remove();
                    alert.prependTo(form);
                    alert.animateClass('fadeIn animated');
                    alert.find('span').html(msg);
                }

                //== Private Functions 

                var displaySignInForm = function () {
                    login.removeClass('m-login--forget-password');
                    login.removeClass('m-login--signup');

                    login.addClass('m-login--signin');
                    login.find('.m-login__signin').animateClass('flipInX animated');
                }

                var displayRegisterForm = function () {
                    login.removeClass('m-login--signin');
                    login.removeClass('m-login--forget-password');

                    //login.addClass('m-login--forget-password');
                    login.addClass('m-login--signup');
                    login.find('.m-login__signup').animateClass('flipInX animated');
                }

                var displayForgetPasswordForm = function () {
                    login.removeClass('m-login--signin');
                    login.removeClass('m-login--signup');

                    login.addClass('m-login--forget-password');
                    login.find('.m-login__forget-password').animateClass('flipInX animated');
                }



                var handleFormSwitch = function () {
                    $('#m_login_forget_password').click(function (e) {
                        e.preventDefault();
                        displayForgetPasswordForm();
                    });

                    $('#m_login_forget_password_cancel').click(function (e) {
                        e.preventDefault();
                        displaySignInForm();
                    });
                    
                    $('#m_login_forget_password_cancel1').click(function (e) {
                        e.preventDefault();
                        displaySignInForm();
                    });

                    $('#m_login_signup').click(function (e) {
                        e.preventDefault();
                        displayRegisterForm();
                    });
                }


                var handleSignInFormSubmit = function () {
                    $('#m_login_signin_submit').click(function (e) {
                        e.preventDefault();
                        var btn = $(this);
                        var form = $(this).closest('form');

                        form.validate({
                            rules: {
                                email: {
                                    required: true,
                                    email: true
                                },
                                password: {
                                    required: true
                                }
                            }
                        });

                        if (!form.valid()) {
                            return;
                        }

                        btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

                        form.ajaxSubmit({
                            url: ADMIN_URL + 'doLogin',
                            success: function (response, status, xhr, $form) {
                                //alert(response);
                                console.log(response);
                                if (response == 1) {
                                var url_string = window.location.href;
                                var url = new URL(url_string);
                                var ref = url.searchParams.get("ref");
                                if(ref){ window.location.href = ref; }
                                else {    window.location.href = ADMIN_URL + 'dashboard'; }
                                }
                                else if (response == 0) {
                                    // similate 2s delay
                                    setTimeout(function () {
                                        btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
                                        showErrorMsg(form, 'danger', 'Incorrect username or password. <br/>Please try again.');
                                    }, 2000);
                                } 
                            }
                        });
                    });
                }

            var handleSingupFormSubmit = function () {
                    $('#m_login_signup_submit').click(function (e) {
                        e.preventDefault();
                        var btn = $(this);
                        var form = $(this).closest('form');

                        form.validate({
                            rules: {
                                firstname: {
                                    required: true
                                },
                                phone: {
                                    required: true
                                },
                                email: {
                                    required: true,
                                    email: true
                                },
                                password: {
                                    required: true
                                },
                                repassword: {
                                    required: true
                                }
                            }
                        });

                        if (!form.valid()) {
                            return;
                        }

                        btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

                        form.ajaxSubmit({
                            url: ADMIN_URL + 'doRegister',
                            success: function (response, status, xhr, $form) {
                                //alert(response);
                                console.log(response);
                                if (response == 1) {
                                var url_string = window.location.href;
                                var url = new URL(url_string);
                                var ref = url.searchParams.get("ref");
                                if(ref){ window.location.href = ref; }
                                else {    window.location.href = ADMIN_URL + 'dashboard'; }
                                }
                                else if (response == 2) {
                                    // similate 2s delay
                                    setTimeout(function () {
                                        btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
                                        showErrorMsg(form, 'danger', 'Password & re-Password not same<br/>Please try again!');
                                    }, 2000);
                                }else if (response == 3) {
                                    // similate 2s delay
                                    setTimeout(function () {
                                        btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
                                        showErrorMsg(form, 'danger', 'Mobile or Email already exist <br/>Please try again!');
                                    }, 2000);
                                } 
                            }
                        });
                    });
                }    


                var handleForgetPasswordFormSubmit = function () {
                    $('#m_login_forget_password_submit').click(function (e) {
                        e.preventDefault();

                        var btn = $(this);
                        var form = $(this).closest('form');

                        form.validate({
                            rules: {
                                email: {
                                    required: true,
                                    email: true
                                }
                            }
                        });

                        if (!form.valid()) {
                            return;
                        }

                        btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

                        form.ajaxSubmit({

                            url: ADMIN_URL+'forgotPassword',
                            success: function (response, status, xhr, $form) {
                                // similate 2s delay
                                alert(response);

                                if(response == "1")
                                {
                                    setTimeout(function () {
                                        btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false); // remove 
                                        form.clearForm(); // clear form
                                        form.validate().resetForm(); // reset validation states

                                        // display signup form
                                        displaySignInForm();
                                        var signInForm = login.find('.m-login__signin form');
                                        signInForm.clearForm();
                                        signInForm.validate().resetForm();

                                        showErrorMsg(signInForm, 'success', 'Cool! Password recovery instruction has been sent to your email.');
                                    }, 2000);

                                }else{
                                    setTimeout(function () {

                                        btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false); // remove 
                                        form.clearForm(); // clear form
                                        form.validate().resetForm(); // reset validation states
                                        // display signup form
                                        displaySignInForm();
                                        var signInForm = login.find('.m-login__signin form');
                                        signInForm.clearForm();
                                        signInForm.validate().resetForm();

                                        showErrorMsg(signInForm, 'danger', 'Oh Snap! Password you entered is incorrect.');
                                    }, 1000);
                                }
                               
                            }
                        });
                    });
                }

                //== Public Functions
                return {
                    // public functions
                    init: function () {
                        handleFormSwitch();
                        handleSignInFormSubmit();
                        handleSingupFormSubmit();
                        handleForgetPasswordFormSubmit();
                    }
                };
            }();

        //== Class Initialization
        jQuery(document).ready(function () {
            SnippetLogin.init();
            $('#viewp').click(function () {
                var x = document.getElementById("pw");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
            });
        });
    </script>


</body>
<!-- end::Body -->
</html>