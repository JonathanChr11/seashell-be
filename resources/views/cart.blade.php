<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeaShell</title>
    <link rel="icon" href="assets/home/Logo-default.svg">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?t={{env("VERSION_TIME")}}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}?t={{env("VERSION_TIME")}}">
    <link rel="stylesheet" href="/css/login-regis-menu-cart.css">
</head>

<body>
    <!-- Proof of Payment -->
    <div id="payment"
        class="hidden h-screen z-[100] bg-customBlack/50 fixed w-full flex justify-center items-center font-poppins">
        <div class="bg-customWhite flex flex-col justify-center items-center p-16 gap-8 rounded-xl">
            <h1 class="lg:text-4xl md:text-2xl text-xl font-semibold">Upload Proof of Payment!</h1>
            <form id="payment-form" action=""
                class="flex flex-col gap-8 items-center justify-center lg:text-lg md:text-base text-xs"
                onsubmit="validatePayment(this, event)">
                <div class="flex items-center gap-4">
                    <label for="payment-proof">Proof of Payment:</label>
                    <input type="file" accept="image/png, image/gif, image/jpeg, image/jpg" id="payment-proof">
                </div>
                <p class="text-red-600 self-start" id="payment-validation"></p>
                <div class="flex gap-4"><button type="button"
                        class="bg-transparent text-customOrange font-semibold lg:text-xl md:text-lg text-base px-6 py-2 rounded-xl hover:bg-transparent hover:bg-customOrange hover:text-customWhite border-customOrange border-2 transition-all"
                        onclick="togglePayment(event)">
                        Cancel
                    </button>
                    <button type="submit"
                        class="bg-customOrange px-6 py-3 rounded-xl font-semibold hover:bg-transparent hover:text-customOrange border-customOrange border-2 transition-all text-customWhite w-fit">Submit</button>
                </div>

            </form>
        </div>
    </div>

    <!-- Navbar -->
    <nav id="navbar"
        class="lg:px-[100px] md:px-12 px-6 py-6 flex justify-between items-center bg-customBlack text-customWhite font-poppins text-xl w-full fixed z-50">
        <img src="/assets/home/logo-white.svg" alt="logo-white" class="lg:w-auto md:w-36 w-28">
        <div class="lg:flex hidden gap-14">
            <a href="/" class="hover:text-customOrange">Home</a>
            <a href="menu.html" class="hover:text-customOrange">Menu</a>
            <a href="#" class="hover:text-customOrange">About</a>
        </div>
        <div class="lg:flex hidden gap-6 justify-center items-center">
            <a href="{{ route('cart') }}">
                <img src="/assets/login/icon-cart.svg" alt="cart-icon" class="hover:fill-customborder-customOrange">
            </a>
            <a href="{{ route('dashboard') }}" class="bg-customOrange px-6 py-3 rounded-xl font-semibold hover:bg-transparent hover:text-customOrange border-customOrange border-2 transition-all">Dashboard</a>
        </div>
        <img src="/assets/login/menu-icon.svg" alt="menu-icon" class="lg:hidden" onclick="showMenu()" id="menu-icon">
        <img src="/assets/login/x-icon.svg" alt="x-icon" class="lg:hidden hidden" onclick="showMenu()" id="x-icon">
    </nav>
    <!-- navbar menu -->
    <section id="navbar-menu"
        class="lg:hidden flex flex-col w-full items-center justify-center bg-customBlack text-customWhite font-poppins text-xl text-center fixed translate-y-[-100%] transition-all md:mt-24 mt-20">
        <a href="/" class="w-full p-4">Home</a>
        <a href="menu.html" class="w-full p-4">Menu</a>
        <a href="#" class="w-full p-4">About</a>
    </section>


    <!-- Your Cart section -->
    <section id="cart"
        class="min-h-screen flex flex-col justify-center items-center lg:px-[100px] md:px-12 px-6 lg:pt-40 md:pt-32 pt-28 pb-16 lg:gap-12 md:gap-6 gap-4 font-poppins">
        <h1 class="font-montserrat lg:text-5xl md:text-3xl text-2xl font-bold text-center">Your Cart</h1>
        <p id="empty-cart" class="lg:text-lg md:text-base text-xs">You currently have these items in your cart</p>
        <div id="content-cart"
            class="flex flex-wrap font-poppins lg:gap-8 md:gap-4 gap-3 text-customWhite justify-center">
            <div class="cart-item flex bg-customBlack rounded-xl lg:p-5 md:p-4 p-3 lg:flex-[0_1_45%] gap-4">
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
                            <span>1</span>
                            <img src="./assets/login/plus-icon.svg" alt="plus-icon"
                                class="cursor-pointer lg:w-auto md:w-6 w-5 h-auto" onclick="addItem(this)">
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-item flex bg-customBlack rounded-xl lg:p-5 md:p-4 p-3 lg:flex-[0_1_45%] gap-4">
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
                            <span>1</span>
                            <img src="./assets/login/plus-icon.svg" alt="plus-icon"
                                class="cursor-pointer lg:w-auto md:w-6 w-5 h-auto" onclick="addItem(this)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkout -->
    <section id="checkout"
        class="bg-customOrange flex justify-start items-center lg:px-[100px] md:px-12 px-6 py-16 lg:text-4xl md:text-2xl text-xl font-semibold font-poppins lg:gap-8 md:gap-4 gap-3 md:flex-row flex-col text-center">
        <h1 class="text-customWhite ">Total Price: <span>Rp100.000,00</span></h1>
        <button onclick="togglePayment(event)"
            class="bg-customYellow lg:px-8 md:px-4 px-3 lg:py-4 md:py-2 py-1 rounded-xl hover:bg-transparent border-4 border-customYellow hover:text-customYellow transition-all">Proceed
            to Payment</button>
    </section>

    <!-- Footer -->
    <footer id="footer"
        class="flex flex-col justify-center items-center lg:px-[100px] md:px-12 px-6 lg:py-16 md:py-10 py-8 bg-customBlack text-customWhite font-poppins lg:gap-8 md:gap-6 gap-5">
        <img src="/src/asset/logo-white.svg" alt="logo-white" class="lg:w-auto md:w-36 w-28">
        <div class="flex gap-4 justify-center items-center">
            <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                <img src="/src/asset/instagram-icon.svg" alt="instagram-icon" class="h-auto lg:w-12 w-10">
            </a>
            <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
                <img src="/src/asset/facebook-icon.svg" alt="facebook-icon" class="h-auto lg:w-12 w-10">
            </a>
            <a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer">
                <img src="/src/asset/twitter-icon.svg" alt="twitter-icon" class="h-auto lg:w-12 w-10">
            </a>
        </div>
        <div
            class="flex justify-center items-center lg:gap-8 md:gap-6 gap-5 ;g:text-xl md:text-lg text-base font-medium">
            <a href="#" class="hover:text-customOrange">Home</a>
            <a href="menu.html" class="hover:text-customOrange">Menu</a>
            <a href="#" class="hover:text-customOrange">About</a>
        </div>
        <h1 class="text-center lg:text-base md:text-sm text-xs">Copyright 2022 SeaShell, All rights reserved.</h1>
    </footer>

    <!-- javscript -->
    <script src="/js/cart.js"></script>
</body>

</html>