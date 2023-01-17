<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ManualsLib</title>
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">
        @vite(['resources/css/style.css', 'resources/js/script.js'])
        
    </head>
    <body>

        @include('incs.navbar')
        
        @yield('content')

        @include('incs.footer')


    </body>
    
</html>