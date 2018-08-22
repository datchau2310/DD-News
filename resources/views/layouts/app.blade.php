<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link href="{{ asset('fonts/icomoon/icomoon.css')}}" rel="stylesheet">
   <!--  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <link href="{{ asset('plugins/css/login/login.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('plugins/css/animate.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Shortcut icon -->
    <link rel="shortcut icon" href="{{ asset('images/shortcut-icon/fav.png') }}">
    
    
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>
