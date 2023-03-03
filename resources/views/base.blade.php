<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ManualsLib</title>
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">
        @vite(['resources/css/style.css', 'resources/js/script.js'])
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        
    </head>
    <body>
                        {{-- @if (session('status') != Auth()->user())
                            <div class="success success-password">
                                <p>We have send reset link in your email address.</p>
                            </div>
                        @endif --}}


        @include('incs.navbar')
        
        @yield('content')

        @include('incs.footer')
<script src="https://cdn.jsdelivr.net/npm/micro-slider@1.0.9/dist/micro-slider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>

    </body>
    
</html>