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
<script src="https://cdn.jsdelivr.net/npm/micro-slider@1.0.9/dist/micro-slider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
    </body>
    
</html>