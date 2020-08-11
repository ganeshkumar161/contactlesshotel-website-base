<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Accounting | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{asset('admin-assets//css/loader.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="{{asset('admin-assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('admin-assets/plugins/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/assets/css/accounting-dashboard/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/plugins/charts/c3charts/c3.min.css')}}" rel="stylesheet" type="text/css" />    
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
</head>
<body>
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>
    <!--  BEGIN NAVBAR  -->

@include('layouts.admin.scripts')

    <!-- <div id="toaster"></div> -->

    <div class="wrapper">

        @include('layouts.admin.sidebar')

        <div class="page-wrapper">

            @include('layouts.admin.header')

            <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="ps-overlay"></div>
        <div class="search-overlay"></div>
        
        <!--  BEGIN MODERN  -->
        @include('layouts.admin.nav')

        <!--  END MODERN  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
                @yield('content')
        </div>
        <!--  END CONTENT PART  -->
                
    </div>
            
            @include('layouts.admin.footer')

        </div>

    </div>

    @include('layouts.admin._logout_model')

    @yield('scripts')

</body>

</html>