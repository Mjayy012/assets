<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
    {{-- @laravelPWA --}}
    <!-- CSRF Token -->

    <title>{{ config('app.name', 'ASSETS') }}</title>
    <link rel="shortcut icon" href="{{url('assets/images/library-icon.png')}}">
    <link rel="icon" href="{{url('assets/images/library-icon.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ASSETS') }}</title>

    {{-- <!-- Layout config Js -->
    <script src="{{asset('assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{asset('assets/css/app.css')}}" rel="stylesheet" type="text/css" /> -->
    <!-- custom Css-->
    <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" /> --}}
 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url("{{ asset('login_css/images/loader.gif')}}") 50% 50% no-repeat white ;
            opacity: .8;
            background-size:120px 120px;
        }
      
    </style>
    <!-- LogIN CSS -->
  

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
=======
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{url('images/aaa.png')}}">
    <link rel="icon" href="{{url('images/aaa.png')}}">

    <!-- custom Css-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-x: hidden;
        }
        
        #app {
            height: 100%;
        }
    </style>
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
<<<<<<< HEAD

    {{-- <script src="{{asset('login_css/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('login_css/js/popper.min.jss')}}"></script>
    <script src="{{asset('login_css/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('login_css/js/main.js')}}"></script> --}}
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>

    <!-- particles js -->
    <script src="{{asset('assets/libs/particles.js/particles.js')}}"></script>
    <!-- particles app js -->
    <script src="{{asset('assets/js/pages/particles.app.js')}}"></script>
    <!-- password-addon init -->
    <script src="{{asset('assets/js/pages/password-addon.init.js')}}"></script>
    <script>
        function show() {
            document.getElementById("loader").style.display = "block";
        }
    </script>
    <script>
        window.addEventListener('load', function() {
            document.getElementById('loader').style.display = 'none';
        });
    </script>
=======
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
</body>
</html>