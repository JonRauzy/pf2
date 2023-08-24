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
        <div class="md:pr-0">
            {{-- <button type="button" class="burger-btn md:hidden">Burger</button> --}}
            <button class="burger-btn md:hidden absolute -top-2 right-4" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
                <svg width="100" height="100" viewBox="0 0 100 100">
                    <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
            </button>
            <div class="p-4 md:p-0"></div>
            <div class="menu hidden font-medium mt-3 mr-6 md:mr-0 md:mt-0 space-y-6 md:flex md:flex-row md:space-y-0 md:space-x-12 md:max-w-screen text-gray-700">
                <a href="/" class="block hover:text-black"><i class="fa fa-home" aria-hidden="true"></i></a>
                <a href="/blog" class="block hover:text-black">Blog</a>
            </div>
        </div>
    </nav>
    
    @yield('content')

    <button class="fixed bottom-5 right-5 border border-white bg-slate-300 px-4 py-2 rounded-md shadow-md opacity-80"><a href="#top"><i class="fa-solid fa-arrow-up"></i></a></button>

    <footer class="text-center bg-slate-100">
        <p class="pt-6">Copyright &copy; Jon Rauzy - {{date('Y')}}</p>
        <div class="space-x-12 py-6 text-3xl text-gray-700">
            <a href="admin"><i class="fa-solid fa-screwdriver-wrench hover:text-black"></i></a>
            @auth
                <a href="{{ route('user.logout') }}"><i class="fa-solid fa-right-from-bracket hover:text-black"></i></a>
            @endauth
        </div>
    </footer>
</body>
</html>