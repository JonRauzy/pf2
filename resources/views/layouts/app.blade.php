<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('pageTitle')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Metrophobic&family=Roboto&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
</head>
<body class="antialiased">
    <nav class="px-12 py-6 shadow-sm space-x-12 max-w-full font-medium sticky top-0 bg-white w-screen">
        <a href="/">Home</a>
        <a href="blog">Blog</a>
        <a href="contact">Contact</a>
        <a href="admin">Admin</a>
        @auth
            <a href="{{ route('user.logout') }}">deconnect</a>
        @endauth
    </nav>
    
    @yield('content')

    <footer class="text-center">
        Copyright : Jon Rauzy - {{date('Y')}}
    </footer>
</body>
</html>