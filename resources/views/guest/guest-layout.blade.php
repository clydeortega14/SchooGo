<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">

        <!-- Responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} | @yield('title')</title>
        
        <!-- Bootstrap 4.3.1 -->
        <link href="/css/bootstrap.css" rel="stylesheet">

        <!-- Custom Styles -->
        <link rel="stylesheet" type="text/css" href="/css/style.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        @yield('custom_css')

    </head>

    <body>
        
        {{-- NAVIGATION BAR --}}
        @include('guest.partials.navigation-bar')
    
            @yield('content')
        

        {{-- SCRIPTS --}}
        <script src="/js/jquery.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap.js"></script>

        @yield('custom_js')
        
    </body>
</html>
