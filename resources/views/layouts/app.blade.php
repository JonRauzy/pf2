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
    <h1 class="text-3xl font-bold text-center">Jon Rauzy</h1>
    <nav class="m-12 space-x-12 font-medium">
        <a href="./">Home</a>
        <a href="./blog">Blog</a>
        <a href="" class="bg-red-500 p-5 hover:bg-red-800 hover:text-yellow-50">Contact</a>
        <a href="./connect">Connect</a>
        @auth
            <a href="./crud">Admin Page</a>
            <a href="./logout">deconnect</a>
        @endauth
    </nav>
    
    @yield('content')

    <footer class="text-center">
        Copyright : Jon Rauzy - {{date('Y')}}
    </footer>
</body>
</html>