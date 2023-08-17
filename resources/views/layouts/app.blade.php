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
    <nav class="flex justify-between px-24 py-6 shadow-sm sticky top-0 bg-gray-100">
        <button type="button" class="burger-btn md:hidden">Burger</button>
        <div class="menu hidden font-medium space-y-6 md:flex md:flex-row md:justify-between md:space-y-0 md:space-x-12 md:w-screen">
            <div class="md:flex flex-row md:space-x-10 space-y-6 md:space-y-0">
                <a href="/" class="block">Home</a>
                <a href="" class="block">About</a>
                <a href="" class="block">Projects</a>
            </div>
            <div class="md:flex flex-row md:space-x-10 space-y-6 md:space-y-0">
                <a href="blog" class="block">Blog</a>
                <a href="contact" class="block">Contact</a>
            </div>
        </div>
    </nav>
    
    @yield('content')

    <footer class="text-center">
        Copyright : Jon Rauzy - {{date('Y')}}
        <a href="admin">Admin</a>
        @auth
            <a href="{{ route('user.logout') }}">deconnect</a>
        @endauth
    </footer>
</body>
</html>