<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('pageTitle')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Metrophobic&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/js/app.js')
</head>

<body class="antialiased bg-slate-50">
    <nav class="flex justify-between pl-6 pr-12 md:px-24 py-6 shadow-sm sticky top-0 bg-slate-100">
        <button type="button" class="burger-btn md:hidden">Burger</button>
        <div class="menu hidden font-medium space-y-6 md:flex md:flex-row md:justify-between md:space-y-0 md:space-x-12 md:w-screen">
            <div class="md:flex flex-row md:space-x-10 space-y-6 md:space-y-0">
                <a href="/" class="block">Home</a>
                <a href="#about" class="block">About</a>
                <a href="#project" class="block">Projects</a>
            </div>
            <div class="md:flex flex-row md:space-x-10 space-y-6 md:space-y-0">
                <a href="blog" class="block">Blog</a>
                <a href="#contact" class="block">Contact</a>
            </div>
        </div>
    </nav>
    
    @yield('content')

    <footer class="text-center">
        <p>Copyright : Jon Rauzy - {{date('Y')}}</p>
        <a href="admin">Admin</a>
        @auth
            <a href="{{ route('user.logout') }}">deconnect</a>
        @endauth
    </footer>
</body>
</html>