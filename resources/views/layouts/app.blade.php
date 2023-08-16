<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('pageTitle')</title>
    @vite('resources/js/app.js')
</head>
<body class="antialiased">
    <nav class="p-12 space-x-12 font-medium sticky top-0 bg-white w-screen">
        <a href="/">Home</a>
        <a href="blog">Blog</a>
        <a href="" class="bg-red-500 p-5 hover:bg-red-800 hover:text-yellow-50">Contact</a>
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