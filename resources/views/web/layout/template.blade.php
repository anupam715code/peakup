<!DOCTYPE html>
<html lang="en">
     <head>
        @include('web.layout.includes.styles')
    </head>
  <body class="body-home-one">
    <div class="main-wrapper">
      <!-- BEGIN: Header -->
          @include('web.layout.includes.header')
      <!-- END: Header -->  

      <!-- BEGIN: breadcrumb -->
         {{--  @include('web.layout.includes.breadcrumb') --}}
      <!-- END: Header -->  

      <!-- BEGIN: content -->
           @yield('content')
      <!-- END: Header -->  
      
      <!-- BEGIN: footer -->
          @include('web.layout.includes.footer')
      <!-- END: footer -->  
    
    </div>
     @include('web.layout.includes.scripts')
  </body>
</html>