<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/brand/favicon.png') }}" rel="icon" type="image/png">

    <!-- Icons -->
    <link href="{{ asset('vendor/nucleo/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome/fontawesome.min.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link type="text/css" href="{{ asset('vendor/argon/argon.min.css') }}" rel="stylesheet">
</head>
</head>
<body>
    @include('partial.sidenav')

    <!-- Main content -->
    <div class="main-content">
        @include('partial.top-navbar')
        @yield('content')
    </div>
    
    <!-- Core -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('vendor/argon/argon.min.js') }}"></script>
</body>
</html>
