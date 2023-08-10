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
    <a href="./">Home</a>
    <a href="./blog">Blog</a>
    @yield('content')
</body>
</html>