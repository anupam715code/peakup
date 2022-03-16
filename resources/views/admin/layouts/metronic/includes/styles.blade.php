<meta charset="utf-8" />
<title>@yield('title') :: {{ config('constants.application_name') }} Admin</title>
<meta name="description" content="Latest updates and statistic charts">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="_token" content="{{ csrf_token() }}" /> 
<!--begin::Web font -->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script>
  WebFont.load({
    google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
    active: function() {
        sessionStorage.fonts = true;
    }
  });
  var ADMIN_URL="{{ url('') }}/" + "{{ config('constants.ADMIN_URL') }}";
</script>
<!--end::Web font -->
<!--begin::Base Styles -->

@yield('css_header_before_content')
<link href="{{ asset(env('ASSETS_PATH').'assets/plugin/tel-input/build/css/intlTelInput.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/plugin/tel-input/build/css/demo.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset(env('ASSETS_PATH').'assets/metronic/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/metronic/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/admin/css/app.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/admin/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />
<!--end::Base Styles -->
<link rel="shortcut icon" href="{{ asset(env('ASSETS_PATH').'assets/img/get-favicon.ico') }}" />
<style>
.cstm-pointer{cursor:pointer}
.hidden{ display:none; }
.cerror { color:#ff0000; }
</style>
@yield('css_header_after_content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5ca437d16f05b20011c6d900&product='inline-share-buttons'" async="async"></script>