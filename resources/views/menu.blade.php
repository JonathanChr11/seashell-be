<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeaShell</title>
    <link rel="icon" href="assets/home/Logo-default.svg">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?t={{env("VERSION_TIME")}}">
    <link rel="stylesheet" href="/css/login-regis-menu-cart.css">
</head>

<body>
    <!-- Navbar -->
    <nav id="navbar"
        class="lg:px-[100px] md:px-12 px-6 py-6 flex justify-between items-center bg-customBlack text-customWhite font-poppins text-xl w-full fixed z-50">
        <img src="/assets/login/logo-white.svg" alt="logo-white" class="lg:w-auto md:w-36 w-28">
        <div class="lg:flex hidden gap-14">
            <a href="/" class="hover:text-customOrange">Home</a>
            <a href="{{ route('menu.view') }}" class="font-semibold hover:text-customOrange">Menu</a>
            <!-- <a href="#" class="hover:text-customOrange">About</a> -->
        </div>
        <div class="lg:flex hidden gap-6 justify-center items-center">
            <a href="{{ route('cart') }}">
                <img src="/assets/login/icon-cart.svg" alt="cart-icon" class="hover:fill-customborder-customOrange">
            </a>
            <a href="{{ route('login') }}"
                class="bg-customOrange px-6 py-3 rounded-xl font-semibold hover:bg-transparent hover:text-customOrange border-customOrange border-2 transition-all">@if(Auth::check())Dashboard @else Sign In @endif</a>
        </div>
        <img src="/assets/login/menu-icon.svg" alt="menu-icon" class="lg:hidden" onclick="showMenu()" id="menu-icon">
        <img src="/assets/login/x-icon.svg" alt="x-icon" class="lg:hidden hidden" onclick="showMenu()" id="x-icon">
    </nav>
    <!-- navbar menu -->
    <section id="navbar-menu"
        class="lg:hidden flex flex-col w-full items-center justify-center bg-customBlack text-customWhite font-poppins text-xl text-center fixed translate-y-[-100%] transition-all md:mt-24 mt-20">
        <a href="/" class="w-full p-4">Home</a>
        <a href="{{ route('menu.view') }}" class="font-semibold w-full p-4">Menu</a>
        <!-- <a href="#" class="w-full p-4">About</a> -->
    </section>

    <!-- Promotion section -->
    <section id="promotion"
        class="flex flex-col justify-center items-center bg-customOrange text-customWhite lg:px-[100px] md:px-12 px-6 lg:pt-40 md:pt-32 pt-28 pb-16 lg:gap-12 md:gap-6 gap-4">
        <div class="flex flex-col justify-center items-center font-montserrat lg:gap-4 md:gap-2 gap-1">
            <h1 class="lg:text-5xl md:text-3xl text-2xl font-bold text-center">Special Promotion</h1>
            <!-- Countdown Timer -->
            <!-- kalo timer 0 section promotion akan hilang -->
            <!-- kl hilang ganti timer di file JavaScript menu.js -->
            <div id="countdown" class="lg:text-5xl md:text-3xl text-2xl font-bold">
                <div class="flex gap-2">
                    <span id="days"></span>
                    <span>:</span>
                    <span id="hours"></span>
                    <span>:</span>
                    <span id="minutes"></span>
                    <span>:</span>
                    <span id="seconds"></span>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap lg:flex-row flex-col font-poppins lg:gap-8 md:gap-4 gap-3 justify-center">
            <div class="flex bg-customBlack rounded-xl lg:p-5 md:p-4 p-3 lg:flex-[0_1_45%] gap-4">
                <img src="/assets/login/menu1.jpg" alt="menu1" class="w-2/5 h-auto rounded">
                <div class="flex flex-col justify-between gap-4 w-full">
                    <div class="flex flex-col lg:gap-3 md:gap-2 gap-0.5">
                        <h1 class="font-bold lg:text-4xl md:text-2xl text-lg">Food 1</h1>
                        <p class="lg:text-lg md:text-base text-xs">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Officiis, iste.
                        </p>
                    </div>
                    <div class="flex justify-between items-center lg:text-lg md:text-base text-xs">
                        <span>Rp 49.000,00</span>
                        <div class="flex lg:gap-4 md:gap-3 gap-2 justify-center items-center">
                            <img src="./assets/login/minus-icon.svg" alt="minus-icon"
                                class="cursor-pointer lg:w-auto md:w-6 w-5 h-auto" onclick="minusItem(this)">
                            <span>0</span>
                            <img src="./assets/login/plus-icon.svg" alt="plus-icon"
                                class="cursor-pointer lg:w-auto md:w-6 w-5 h-auto" onclick="addItem(this)">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex bg-customBlack rounded-xl lg:p-5 md:p-4 p-3 lg:flex-[0_1_45%] gap-4">
                <img src="/src/asset/menu2.jpg" alt="menu2" class="w-2/5 h-auto rounded">
                <div class="flex flex-col justify-between gap-4 w-full">
                    <div class="flex flex-col lg:gap-3 md:gap-2 gap-0.5">
                        <h1 class="font-bold lg:text-4xl md:text-2xl text-lg">Food 1</h1>
                        <p class="lg:text-lg md:text-base text-xs">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Officiis, iste.
                        </p>
                    </div>
                    <div class="flex justify-between items-center lg:text-lg md:text-base text-xs">
                        <span>Rp 49.000,00</span>
                        <div class="flex lg:gap-4 md:gap-3 gap-2 justify-center items-center">
                            <img src="./asset/minus-icon.svg" alt="minus-icon"
                                class="cursor-pointer lg:w-auto md:w-6 w-5 h-auto" onclick="minusItem(this)">
                            <span>0</span>
                            <img src="./asset/plus-icon.svg" alt="plus-icon"
                                class="cursor-pointer lg:w-auto md:w-6 w-5 h-auto" onclick="addItem(this)">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex bg-customBlack rounded-xl lg:p-5 md:p-4 p-3 lg:flex-[0_1_45%] gap-4">
                <img src="/src/asset/menu3.jpg" alt="menu3" class="w-2/5 h-auto rounded">
                <div class="flex flex-col justify-between gap-4 w-full">
                    <div class="flex flex-col lg:gap-3 md:gap-2 gap-0.5">
                        <h1 class="font-bold lg:text-4xl md:text-2xl text-lg">Food 1</h1>
                        <p class="lg:text-lg md:text-base text-xs">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Officiis, iste.
                        </p>
                    </div>
                    <div class="flex justify-between items-center lg:text-lg md:text-base text-xs">
                        <span>Rp 49.000,00</span>
                        <div class="flex lg:gap-4 md:gap-3 gap-2 justify-center items-center">
                            <img src="./asset/minus-icon.svg" alt="minus-icon"
                                class="cursor-pointer lg:w-auto md:w-6 w-5 h-auto" onclick="minusItem(this)">
                            <span>0</span>
                            <img src="./asset/plus-icon.svg" alt="plus-icon"
                                class="cursor-pointer lg:w-auto md:w-6 w-5 h-auto" onclick="addItem(this)">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex bg-customBlack rounded-xl lg:p-5 md:p-4 p-3 lg:flex-[0_1_45%] gap-4">
                <img src="/src/asset/menu4.jpg" alt="menu4" class="w-2/5 h-auto rounded">
                <div class="flex flex-col justify-between gap-4 w-full">
                    <div class="flex flex-col lg:gap-3 md:gap-2 gap-0.5">
                        <h1 class="font-bold lg:text-4xl md:text-2xl text-lg">Food 1</h1>
                        <p class="lg:text-lg md:text-base text-xs">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Officiis, iste.
                        </p>
                    </div>
                    <div class="flex justify-between items-center lg:text-lg md:text-base text-xs">
                        <span>Rp 49.000,00</span>
                        <div class="flex lg:gap-4 md:gap-3 gap-2 justify-center items-center">
                            <img src="./asset/minus-icon.svg" alt="minus-icon"
                                class="cursor-pointer lg:w-auto md:w-6 w-5 h-auto" onclick="minusItem(this)">
                            <span>0</span>
                            <img src="./asset/plus-icon.svg" alt="plus-icon"
                                class="cursor-pointer lg:w-auto md:w-6 w-5 h-auto" onclick="addItem(this)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu section -->
    <section id="our-menu"
        class="min-h-screen flex flex-col justify-center items-center lg:px-[100px] md:px-12 px-6 lg:pt-40 md:pt-32 pt-28 pb-16 lg:gap-12 md:gap-6 gap-4">
        <h1 class="font-montserrat lg:text-5xl md:text-3xl text-2xl font-bold text-center">Our Menu</h1>
        <div class="flex w-full font-poppins lg:text-2xl md:text-xl text-lg gap-4">
            <form action="{{ route('search.menu') }}" method="GET" class="w-full flex relative">
                <input type="text" name="search" value="{{ old('search') }}"
                    class="h-full w-full rounded-xl lg:pl-16 md:pl-12 pl-10 pr-5 border-2 py-2 border-customBlack"
                    placeholder="Search menu...">
                <img src="/assets/login/search-icon.svg" alt="search-icon"
                    class="absolute top-0 bottom-0 my-auto lg:left-5 md:left-4 left-3 h-auto lg:w-8 md:w-6 w-5">
            </form>
            <button
                class="bg-customOrange rounded-xl flex text-customWhite justify-center items-center px-8 py-2 gap-2">Filter
                <img src="/assets/login/filter-icon.svg" alt="filter-icon" class="h-auto lg:w-12 md:w-8 w-6"></button>
        </div>
        <div class="flex flex-wrap font-poppins lg:gap-8 md:gap-4 gap-3 text-customWhite justify-center">
            @forelse ($menus as $food)
                <div class="flex bg-customBlack rounded-xl lg:p-5 md:p-4 p-3 lg:flex-[0_1_45%] gap-4">
                    <img src="{{ asset('storage/'.$food->food_image) }}" alt="menu1" class="w-2/5 h-auto rounded">
                    <div class="flex flex-col justify-between gap-4 w-full">
                        <div class="flex flex-col lg:gap-3 md:gap-2 gap-0.5">
                            <h1 class="font-bold lg:text-4xl md:text-2xl text-lg">{{ $food->food_name }}</h1>
                            <p class="lg:text-lg md:text-base text-xs">{{ $food->food_description }}
                            </p>
                        </div>
                        <div class="flex justify-between items-center lg:text-lg md:text-base text-xs">
                            @php
                                $food_price = 'Rp'. number_format($food->food_price,2,',','.');
                            @endphp
                            <span>{{ $food_price }}</span>
                            <div class="flex lg:gap-4 md:gap-3 gap-2 justify-center items-center">
                                <img src="./assets/login/minus-icon.svg" alt="minus-icon"
                                    class="cursor-pointer lg:w-auto md:w-6 w-5 h-auto" onclick="minusItem(this)">
                                <span>0</span>
                                <img src="./assets/login/plus-icon.svg" alt="plus-icon"
                                    class="cursor-pointer lg:w-auto md:w-6 w-5 h-auto" onclick="addItem(this)">
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                @if(empty($message)){
                    <p class="lg:text-9xl md:text-base text-9xl text-customBlack select-none">Menu is empty</p>
                }
                @else
                    <p class="lg:text-9xl md:text-base text-9xl text-customBlack select-none">{{ $message }}</p>
                @endif
            @endforelse
        </div>
    </section>

    <!-- Checkout -->
    <section id="checkout"
        class="bg-customOrange flex justify-start items-center lg:px-[100px] md:px-12 px-6 py-16 lg:text-4xl md:text-2xl text-xl font-semibold font-poppins lg:gap-8 md:gap-4 gap-3 md:flex-row flex-col text-center">
        <h1 class="text-customWhite ">Satisfied with your Order?</h1>
        <a href="{{ route('cart') }}"
            class="bg-customYellow lg:px-8 md:px-4 px-3 lg:py-4 md:py-2 py-1 rounded-xl hover:bg-transparent border-4 border-customYellow hover:text-customYellow transition-all">Checkout
            Now</a>
    </section>

    <!-- Footer -->
    <footer id="footer"
        class="flex flex-col justify-center items-center lg:px-[100px] md:px-12 px-6 lg:py-16 md:py-10 py-8 bg-customBlack text-customWhite font-poppins lg:gap-8 md:gap-6 gap-5">
        <img src="/assets/login/logo-white.svg" alt="logo-white" class="lg:w-auto md:w-36 w-28">
        <div class="flex gap-4 justify-center items-center">
            <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                <img src="/assets/login/instagram-icon.svg" alt="instagram-icon" class="h-auto lg:w-12 w-10">
            </a>
            <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
                <img src="/assets/login/facebook-icon.svg" alt="facebook-icon" class="h-auto lg:w-12 w-10">
            </a>
            <a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer">
                <img src="/assets/login/twitter-icon.svg" alt="twitter-icon" class="h-auto lg:w-12 w-10">
            </a>
        </div>
        <div
            class="flex justify-center items-center lg:gap-8 md:gap-6 gap-5 ;g:text-xl md:text-lg text-base font-medium">
            <a href="#" class="hover:text-customOrange">Home</a>
            <a href="menu.html" class="hover:text-customOrange">Menu</a>
            <a href="cart.html" class="hover:text-customOrange">Checkout</a>
        </div>
        <h1 class="text-center lg:text-base md:text-sm text-xs">Copyright 2022 SeaShell, All rights reserved.</h1>
    </footer>

    <!-- javscript -->
    <script src="/js/menu.js"></script>
</body>

</html>