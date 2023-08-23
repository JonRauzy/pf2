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
    <nav class="flex justify-end md:justify-between md:px-24 py-6 px-6 shadow-sm bg-slate-100">
        <div class="pr-4 md:pr-0">
            <button type="button" class="burger-btn md:hidden">Burger</button>
            <div class="menu hidden font-medium mt-6 md:mt-0 space-y-6 md:flex md:flex-row md:space-y-0 md:space-x-12 md:w-screen">
                <a href="/" class="block">Home</a>
                <a href="blog" class="block">Blog</a>
            </div>
        </div>
    </nav>
    
    @yield('content')

    <button class="fixed bottom-5 right-5 bg-slate-300 px-4 py-2 rounded-md shadow-md opacity-80"><a href="#top"><i class="fa-solid fa-arrow-up"></i></a></button>

    <footer class="text-center">
        <p>Copyright : Jon Rauzy - {{date('Y')}}</p>
        <a href="admin">Admin</a>
        @auth
            <a href="{{ route('user.logout') }}">deconnect</a>
        @endauth
    </footer>
</body>
</html>