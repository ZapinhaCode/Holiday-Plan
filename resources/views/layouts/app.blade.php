<!DOCTYPE html>
<html lang="en" data-bs-theme="projeto">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Holiday Plan') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="screen-style">
        <nav class="navbar-style">
            <a class="style-logo-navbar" href="{{ URL('/api/holiday') }}">
                <img src="{{ asset('images/buzzvel.png') }}" alt="BuzzvelLogo"/>
            </a>
            {{-- <a class="nav-link" href="{{ route('api.getRegister') }}">Register</a>
            <a class="nav-link" href="{{ route('api.getLogin') }}">Login</a> --}}
            <a>Holiday Plan</a>
        </nav>

        @yield('content')
        @vite(['resources/js/app.js'])
    </body>
</html>

