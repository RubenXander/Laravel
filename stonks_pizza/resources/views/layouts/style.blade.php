<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
</head>
<body>

<div class="items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden  top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
@endif




<!-- Navbar  -->
<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <!-- Website Logo -->
                    <a  class="flex items-center py-4 px-2">
                        <img src="https://image.freepik.com/vrije-vector/pizza-logo-ontwerpsjabloon_15146-192.jpg" alt="Logo" class="h-16 w-16 mr-2">
                        <span class="font-semibold text-gray-500 text-lg">StonksPizza</span>
                    </a>
                </div>
                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/" class="py-4 px-2 text-red-500 border-b-4 border-red-500 font-semibold ">Home</a>
                    <a href="/pizzas" class="py-4 px-2 text-gray-500 font-semibold hover:text-red-500 transition duration-300">Pizzas</a>
                    <a href="/Contact" class="py-4 px-2 text-gray-500 font-semibold hover:text-red-500 transition duration-300">Contact</a>
                </div>
            </div>

            <div class="hidden md:flex items-center space-x-3 ">
                <a href="https://image.flaticon.com/icons/png/512/4/4295.png" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300"></a>
            </div>
            <!-- Mobil -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class=" w-6 h-6 text-gray-500 hover:text-red-500 "
                         x-show="!showMenu"
                         fill="none"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         stroke-width="2"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- mobil menu -->
    <div class="hidden mobile-menu">
        <ul class="">
            <li class="active"><a href="/" class="block text-sm px-2 py-4 text-white bg-red-500 font-semibold">Home</a></li>
            <li><a href="#pizzas" class="block text-sm px-2 py-4 hover:bg-red-500 transition duration-300">Pizzas</a></li>
            <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-red-500 transition duration-300">Contact</a></li>
        </ul>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>


<div class="mx-auto">
    @yield('content')
</div>


        <footer class="bg-gray-200 text-center lg:text-left">
            <div class="text-gray-700 text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright:
                <a class="text-gray-800" href="#">StonksPizza</a>
            </div>
        </footer>

@livewireScripts
        <script src="{{ asset('js/app.js') }}" defer></script>
</div>
</body>
</html>
