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
            <a href="cart.html">
                <img src="/assets/login/icon-cart.svg" alt="cart-icon" class="hover:fill-customborder-customOrange">
            </a>
            <form class="bg-customOrange px-6 py-3 rounded-xl font-semibold hover:bg-transparent hover:text-customOrange border-customOrange border-2 transition-all" method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
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

    <!-- Add Menu popup -->

    <section id="add-menu-popup"
        class="hidden min-h-full w-full fixed z-[100] flex justify-center items-center bg-customBlack/50">
        <form method="POST" id="add-menu-form" action="{{ route('menu.create') }}" enctype="multipart/form-data"
            class="bg-customWhite w-4/5 p-8 rounded-2xl flex flex-col justify-center items-center gap-8">
            @csrf
            <h1 class="font-montserrat text-4xl font-bold text-customOrange">Add Menu Item</h1>
            <div
                class="bg-customOrange rounded-xl p-8 flex flex-col justify-center items-center w-full font-poppins text-customBlack gap-8 text-lg">
                <div class="w-full flex flex-col gap-2">
                    <label for="menu-name" class="font-semibold text-xl">Food Name</label>
                    <input name="food_name" id="menu-name" type="text" placeholder="Enter food name..." class="p-3 rounded-lg">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="menu-price" class="font-semibold text-xl">Food Price</label>
                    <input name="food_price" id="menu-price" type="number" placeholder="Enter food price..." class="p-3 rounded-lg">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="menu-image" class="font-semibold text-xl">Food Image</label>
                    <input name="food_image" id="menu-image" type="file" accept="image/png, image/gif, image/jpeg, image/jpg"
                        placeholder="Enter food name..." class="rounded-lg">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="menu_type" class="font-semibold text-xl">Food Type</label>
                    <select name="menu_type" id="menu_type" class="p-3 rounded-lg">
                        <option value="" selected disabled>Pick food type...</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->food_category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="promo-desc" class="font-semibold text-xl">Food Description</label>
                    <textarea name="food_description" id="promo-desc" type="" placeholder="Enter food description..."
                        class="p-3 rounded-lg h-[52px] max-h-[80px]"></textarea>
                </div>
                <p id="menu-validation" class="font-poppins font-bold"></p>
                @foreach ($errors->all() as $error)
                    <p class="text-white-600 lg:text-lg md:text-base text-sm">{{ $error }}</p>
                @endforeach
            </div>
            <div class="flex gap-8">
                <!-- cancel -->
                <button type="button" onclick="cancelAddMenu()"
                    class="bg-transparent px-6 py-3 rounded-xl font-medium hover:bg-customOrange hover:text-customWhite border-2 border-customOrange font-poppins transition-all text-customOrange text-2xl">Cancel</button>
                <!-- add -->
                <button type="submit"
                    class="bg-customOrange px-6 py-3 rounded-xl font-medium hover:bg-transparent hover:text-customOrange border-customOrange border-2 font-poppins transition-all text-customWhite text-2xl">Add
                    Item</button>
            </div>
        </form>
    </section>

    <!-- Add Promotion popup -->
    <section id="add-promo-popup"
        class="hidden min-h-full w-full fixed z-[100] flex justify-center items-center bg-customBlack/50">
        <form method="POST" onsubmit="submitPromo(event, this)" id="add-promo-form" action="{{ route('add.promo') }}"
            class="bg-customWhite w-4/5 p-8 rounded-2xl flex flex-col justify-center items-center gap-8">
            @csrf
            <h1 class="font-montserrat text-4xl font-bold text-customOrange">Add Promotion Item</h1>
            <div
                class="bg-customOrange rounded-xl p-8 flex flex-col justify-center items-center w-full font-poppins text-customBlack gap-8 text-lg">
                <div class="w-full flex flex-col gap-2">
                    <label for="menu_type" class="font-semibold text-xl">Pick Menu</label>
                    <select name="menu_type" id="menu_type" class="p-3 rounded-lg">
                        <option value="" selected disabled>Pick Food menu...</option>
                        @foreach($foodListMenu as $food)
                            <option value="{{ $food->id }}">{{ $food->food_name }}</option>
                        @endforeach
                    </select>
                </div>
                <p id="promo-validation" class="font-poppins font-bold"></p>
            </div>
            <div class="flex gap-8">
                <!-- cancel -->
                <button type="button" onclick="cancelAddPromo()"
                    class="bg-transparent px-6 py-3 rounded-xl font-medium hover:bg-customOrange hover:text-customWhite border-2 border-customOrange font-poppins transition-all text-customOrange text-2xl">Cancel</button>
                <!-- add -->
                <button type="submit"
                    class="bg-customOrange px-6 py-3 rounded-xl font-medium hover:bg-transparent hover:text-customOrange border-customOrange border-2 font-poppins transition-all text-customWhite text-2xl">Add
                    Item</button>
            </div>
        </form>
    </section>

    <!-- Edit Item popup -->
    @foreach($foodListMenu as $food)
        <section id="edit-menu-popup{{ $food->id }}"
        class="hidden min-h-full w-full fixed z-[100] flex justify-center items-center bg-customBlack/50">
        <form method="POST" id="edit-menu-form" action="{{ route('menu.update',['mid' => $food->id]) }}" enctype="multipart/form-data"
            class="bg-customWhite w-4/5 p-8 rounded-2xl flex flex-col justify-center items-center gap-8">
            @csrf
            <h1 class="font-montserrat text-4xl font-bold text-customOrange">Edit Item</h1>
            <div
                class="bg-customOrange rounded-xl p-8 flex flex-col justify-center items-center w-full font-poppins text-customBlack gap-8 text-lg">
                <div class="w-full flex flex-col gap-2">
                    <label for="menu-name" class="font-semibold text-xl">Food Name</label>
                    <input name="food_name" value="{{ $food->food_name }}" id="menu-name" type="text" placeholder="Enter food name..." class="p-3 rounded-lg">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="menu-price" class="font-semibold text-xl">Food Price</label>
                    <input name="food_price" value="{{ $food->food_price }}" id="menu-price" type="number" placeholder="Enter food price..." class="p-3 rounded-lg">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="menu-image" class="font-semibold text-xl">Food Image</label>
                    <input name="food_image" id="menu-image" type="file" accept="image/png, image/gif, image/jpeg, image/jpg"
                        placeholder="Enter food name..." class="rounded-lg">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="menu_type" class="font-semibold text-xl">Food Type</label>
                    <select name="menu_type" id="menu_type" class="p-3 rounded-lg">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if($category->id == $food->food_category_id) selected @endif>{{ $category->food_category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="menu-desc" class="font-semibold text-xl">Food Description</label>
                    <textarea name="food_description" id="menu-desc" type="" placeholder="Enter food description..."
                        class="p-3 rounded-lg h-[52px] max-h-[80px]">{{ $food->food_description }}</textarea>
                </div>
                <p id="menu-validation" class="font-poppins font-bold"></p>
                @foreach ($errors->all() as $error)
                    <p class="text-white-600 lg:text-lg md:text-base text-sm">{{ $error }}</p>
                @endforeach
            </div>
            <div class="flex gap-8">
                <!-- cancel -->
                <button type="button" onclick="cancelEditMenu({{ $food->id }})"
                    class="bg-transparent px-6 py-3 rounded-xl font-medium hover:bg-customOrange hover:text-customWhite border-2 border-customOrange font-poppins transition-all text-customOrange text-2xl">Cancel</button>
                <!-- update -->
                <button type="submit"
                    class="bg-customOrange px-6 py-3 rounded-xl font-medium hover:bg-transparent hover:text-customOrange border-customOrange border-2 font-poppins transition-all text-customWhite text-2xl">Update
                    Item</button>
                <!-- delete -->
                <a href="{{ route('menu.delete', ['mid' => $food->id]) }}"
                    class="bg-red-600 px-6 py-3 rounded-xl font-medium hover:bg-transparent hover:text-red-600 border-red-600 border-2 font-poppins transition-all text-customWhite text-2xl cursor-pointer">Delete
                    Item</a>
            </div>
        </form>
    </section>
    @endforeach

    <!-- Edit Promotion Countdown -->
    <section id="edit-countdown-popup"
        class="hidden min-h-full w-full fixed z-[100] flex justify-center items-center bg-customBlack/50">
        <form onsubmit="updateCountdown(event, this)" id="edit-countdown-form" action="{{ route('add.time.promo') }}" method="POST"
            class="bg-customWhite w-4/5 p-8 rounded-2xl flex flex-col justify-center items-center gap-8">
            @csrf
            <h1 class="font-montserrat text-4xl font-bold text-customOrange">Edit Promotion Countdown</h1>
            <div
                class="bg-customOrange rounded-xl p-8 flex flex-col justify-center items-center w-full font-poppins text-customBlack gap-8 text-lg">
                <div class="w-full flex flex-col gap-2">
                    <label for="countdown-date" class="font-semibold text-xl">Date When Promotion Ends</label>
                    <input name="end_promo" id="countdown-date" type="datetime-local" placeholder="Enter food name..."
                        class="p-3 rounded-lg">
                </div>

                <p id="countdown-validation" class="font-poppins font-bold"></p>
            </div>
            <div class="flex gap-8">
                <!-- cancel -->
                <button type="button" onclick="cancelEditCountdown()"
                    class="bg-transparent px-6 py-3 rounded-xl font-medium hover:bg-customOrange hover:text-customWhite border-2 border-customOrange font-poppins transition-all text-customOrange text-2xl">Cancel</button>
                <!-- update -->
                <button type="submit"
                    class="bg-customOrange px-6 py-3 rounded-xl font-medium hover:bg-transparent hover:text-customOrange border-customOrange border-2 font-poppins transition-all text-customWhite text-2xl">Update
                    Countdown</button>
            </div>
        </form>
    </section>

    <!-- Promotion section -->
    <section id="promotion"
        class="flex flex-col justify-center items-center bg-customOrange text-customWhite lg:px-[100px] md:px-12 px-6 lg:pt-40 md:pt-32 pt-28 pb-16 lg:gap-12 md:gap-6 gap-4">
        <div class="flex justify-between w-full">
            <div class="flex flex-col justify-center items-start font-montserrat lg:gap-4 md:gap-2 gap-1">
                    <input name="time_promo_count" value="
                    @empty($promoTime) 0 @else{{ $promoTime->end_promo }}@endif" id="time_promo_count" type="text" placeholder="Enter food name..." class="p-3 rounded-lg hidden">
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
            <div class="flex justify-center items-center font-poppins text-customBlack font-semibold text-2xl gap-8">
                <button onclick="editCountdown()"
                    class="bg-customYellow px-6 py-3 rounded-xl hover:bg-transparent border-4 border-customYellow hover:text-customYellow transition-all">Edit
                    Countdown</button>
                <button onclick="addPromo()"
                    class="bg-customYellow px-6 py-3 rounded-xl hover:bg-transparent border-4 border-customYellow hover:text-customYellow transition-all">Add
                    Item</button>
            </div>

        </div>
        <div class="flex flex-wrap font-poppins lg:gap-8 md:gap-4 gap-3 text-customWhite justify-center">
            @if(isset($displayMenuPromo))
                @for($i = 0; $i < count($displayMenuPromo); $i++)
                    <div class="flex bg-customBlack rounded-xl lg:p-5 md:p-4 p-3 lg:flex-[0_1_45%] gap-4">
                        <img src="{{ asset('storage/'.$displayMenuPromo[$i]->food_image) }}" alt="menu1" class="w-2/5 h-auto rounded">
                        <div class="flex flex-col justify-between gap-4 w-full">
                            <div class="flex flex-col lg:gap-3 md:gap-2 gap-0.5">
                                <h1 class="font-bold lg:text-4xl md:text-2xl text-lg">{{ $displayMenuPromo[$i]->food_name }}</h1>
                                <p class="lg:text-lg md:text-base text-xs">{{ $displayMenuPromo[$i]->food_description }}
                                </p>
                            </div>
                            <div class="flex justify-between items-center lg:text-lg md:text-base text-xs">
                                @php
                                    $foodPrice = 'Rp' .  number_format($displayMenuPromo[$i]->food_price,2,',','.');
                                @endphp
                                <span>{{ $foodPrice }}</span>
                                <button onclick="editMenu()"
                                    class="bg-customYellow px-8 py-2 rounded-xl hover:bg-transparent border-2 border-customYellow hover:text-customYellow transition-all text-customBlack font-semibold">Edit</button>
                            </div>
                        </div>
                    </div>
                @endfor
            @else
            @endif
        </div>
    </section>

    <!-- Menu section -->
    <section id="main-menu"
        class="min-h-screen flex flex-col justify-center items-center lg:px-[100px] md:px-12 px-6 lg:pt-40 md:pt-32 pt-28 pb-16 lg:gap-12 md:gap-6 gap-4">
        <div class="flex w-full justify-between items-center">
            <h1 class="font-montserrat lg:text-5xl md:text-3xl text-2xl font-bold text-center">Main Menu</h1>
            <button onclick="addMenu()"
                class="bg-customOrange px-6 py-3 rounded-xl font-semibold hover:bg-transparent hover:text-customOrange border-customOrange border-4 font-poppins transition-all text-customWhite text-2xl">Add
                Item</button>
        </div>

        <div class="flex flex-wrap font-poppins lg:gap-8 md:gap-4 gap-3 text-customWhite justify-center">

        @forelse ( $foodListMenu as $menu)
            <div class="flex bg-customBlack rounded-xl lg:p-5 md:p-4 p-3 lg:flex-[0_1_45%] gap-4">
                <img src="{{ asset('storage/'.$menu->food_image) }}" alt="menu1" class="w-2/5 h-auto rounded">
                <div class="flex flex-col justify-between gap-4 w-full">
                    <div class="flex flex-col lg:gap-3 md:gap-2 gap-0.5">
                        <h1 class="font-bold lg:text-4xl md:text-2xl text-lg">{{ $menu->food_name }}</h1>
                        <p class="lg:text-lg md:text-base text-xs">{{ $menu->food_description }}
                        </p>
                    </div>
                    <div class="flex justify-between items-center lg:text-lg md:text-base text-xs">
                        @php
                            $food_price = 'Rp'. number_format($menu->food_price,2,',','.');
                        @endphp
                        <span>{{ $food_price }}</span>
                        <button onclick="editMenu({{ $menu->id }})"
                            class="bg-customYellow px-8 py-2 rounded-xl hover:bg-transparent border-2 border-customYellow hover:text-customYellow transition-all text-customBlack font-semibold">Edit</button>
                    </div>
                </div>
            </div>
        @empty
            <p class="lg:text-9xl md:text-base text-9xl text-customBlack select-none">Menu is empty</p>
        @endforelse


        </div>
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
            <a href="/" class="hover:text-customOrange">Home</a>
            <a href="#menu" class="hover:text-customOrange">Menu</a>
            <a href="#" class="hover:text-customOrange">Checkout</a>
        </div>
        <h1 class="text-center lg:text-base md:text-sm text-xs">Copyright 2022 SeaShell, All rights reserved.</h1>
    </footer>

    <!-- javscript -->
    <script src="/js/admin.js"></script>
</body>

</html>