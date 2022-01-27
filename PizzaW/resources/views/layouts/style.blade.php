<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<!-- Navbar  -->
<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <!-- Website Logo -->
                    <a href="#" class="flex items-center py-4 px-2">
                        <img src="https://image.freepik.com/vrije-vector/pizza-logo-ontwerpsjabloon_15146-192.jpg" alt="Logo" class="h-16 w-16 mr-2">
                        <span class="font-semibold text-gray-500 text-lg">StonksPizza</span>
                    </a>
                </div>
                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{url('index')}}" class="py-4 px-2 text-red-500 border-b-4 border-red-500 font-semibold ">Home</a>
                    <a href="{{route('pizzas')}}" class="py-4 px-2 text-gray-500 font-semibold hover:text-red-500 transition duration-300">Pizzas</a>
                    <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-red-500 transition duration-300">Contact</a>
                </div>
            </div>

            <div class="hidden md:flex items-center space-x-3 ">
                <a href="" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-red-500 hover:text-white transition duration-300">Log In</a>
                <a href="" class="py-2 px-2 font-medium text-white bg-red-500 rounded hover:bg-red-400 transition duration-300">Sign Up</a>
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
            <li class="active"><a href="/home" class="block text-sm px-2 py-4 text-white bg-red-500 font-semibold">Home</a></li>
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


@yield('home')



</body>
</html>
