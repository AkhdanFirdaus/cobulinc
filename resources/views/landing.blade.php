<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="shortcut icon" href="{{ asset('logo/favicon.png') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body style="background-image: url({{ asset('img/intro-bg.jpg') }}); background-repeat: no-repeat; background-size: cover;">
        {{-- @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
        @endif --}}
        <div class="container">
            <div class="d-flex justify-content-start align-items-center" style="height: 100vh;">
                <div class="jumbotron my-5 bg-transparent" style="width: 40rem;">
                    <h4>Social Education App</h4>
                    <h1 class="display-4">Discuss Something</h1>
                    <p class="lead">Butuh tempat berdiskusi? Solusi menyediakan apa yang kamu butuhkan.</p>
                    <a class="btn btn-primary btn-lg" href="{{ route('start') }}">Get Started</a>
                </div>
            </div>
        </div>
    </body>
</html>
