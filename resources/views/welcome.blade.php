<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeaShell</title>
    <link rel="icon" href="assets/home/Logo-default.svg">

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?t={{env("VERSION_TIME")}}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}?t={{env("VERSION_TIME")}}">
</head>
<body class="font-poppins">

    <!--Landing Page-->
    <section
        style="background-image: linear-gradient(rgba(27,27,27,0.6),rgba(27,27,27,0.6)),url('assets/home/raw-giant-shrimps-dark-table_1220-4998.jpg');"
        class="w-full min-h-screen bg-center bg-cover relative">

        <!--Navbar-->

        <!--1280px-->
        <nav class="xl:flex md:hidden hidden justify-between items-center xl:px-24 md:px-12 px-6 py-6">
            <img class="xl:w-40 md:w-40 w-24" src="assets/home/Logo-default.svg" alt="">
            <div class="flex text-xl">
                <a class="text-orange p-5 font-semibold" href="">Home</a>
                <a class="text-white p-5 transition-all ease-in-out duration-200" href="#menu">Menu</a>
                <a class="text-white p-5 transition-all ease-in-out duration-200" href="#about">About</a>
            </div>
            <div class="flex items-center">
                <a class="mr-5" href="{{ route('cart') }}">
                    <svg class="group" width="45" height="45" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="group-hover:fill-orange transition-all ease-in-out duration-300" d="M13.5 32C14.8807 32 16 30.8807 16 29.5C16 28.1193 14.8807 27 13.5 27C12.1193 27 11 28.1193 11 29.5C11 30.8807 12.1193 32 13.5 32Z" fill="#FFFAF7"/>
                        <path class="group-hover:fill-orange transition-all ease-in-out duration-300" d="M26.5 32C27.8807 32 29 30.8807 29 29.5C29 28.1193 27.8807 27 26.5 27C25.1193 27 24 28.1193 24 29.5C24 30.8807 25.1193 32 26.5 32Z" fill="#FFFAF7"/>
                        <path class="group-hover:fill-orange transition-all ease-in-out duration-300" d="M33.1 6.39003C33.0068 6.26901 32.8872 6.17094 32.7503 6.10334C32.6133 6.03573 32.4627 6.00039 32.31 6.00003H9.20999L8.75999 4.57003C8.71056 4.41648 8.62472 4.27718 8.50979 4.164C8.39487 4.05081 8.25427 3.96711 8.09999 3.92003L3.99999 2.66003C3.87392 2.62129 3.74145 2.60776 3.61016 2.62021C3.47886 2.63266 3.3513 2.67086 3.23476 2.73261C2.9994 2.85732 2.82323 3.07042 2.74499 3.32503C2.66675 3.57963 2.69286 3.85489 2.81757 4.09025C2.94228 4.32561 3.15538 4.50179 3.40999 4.58003L6.99999 5.68003L11.58 20.15L9.94999 21.49L9.81999 21.62C9.41689 22.0868 9.1885 22.6791 9.17391 23.2957C9.15932 23.9122 9.35942 24.5147 9.73999 25C10.0125 25.3315 10.3589 25.5946 10.7513 25.7682C11.1438 25.9418 11.5714 26.0212 12 26H28.69C28.9552 26 29.2096 25.8947 29.3971 25.7071C29.5846 25.5196 29.69 25.2652 29.69 25C29.69 24.7348 29.5846 24.4805 29.3971 24.2929C29.2096 24.1054 28.9552 24 28.69 24H11.84C11.7248 23.9961 11.6126 23.9625 11.5142 23.9026C11.4159 23.8426 11.3346 23.7583 11.2783 23.6578C11.222 23.5573 11.1926 23.4439 11.1929 23.3287C11.1932 23.2135 11.2232 23.1003 11.28 23L13.69 21H29.12C29.3484 21.0067 29.5722 20.9349 29.7542 20.7966C29.9361 20.6583 30.0652 20.4619 30.12 20.24L33.32 7.24003C33.3504 7.09094 33.3464 6.93689 33.3083 6.78959C33.2701 6.64229 33.1989 6.50563 33.1 6.39003Z" fill="#FFFAF7"/>
                    </svg>
                </a>
                <a class="text-white text-xl px-4 py-3 bg-orange hover:bg-transparent border-2 border-transparent hover:border-orange hover:text-orange rounded-xl font-semibold transition-all ease-in-out duration-300" href="{{ route('login') }}">@if(Auth::check())Dashboard @else Sign In @endif</a>
            </div>
        </nav>

        <!--768px 320px-->
        <nav class="flex xl:hidden justify-between px-6 py-4 md:px-14 md:py-8 text-lg text-white top-0">
            <img class="xl:w-40 md:w-40 w-24" src="assets/home/Logo-default.svg" alt="">
            <button id="navToggler"><img src="assets/home/charm_menu-hamburger.svg" class="w-8 md:w-12" alt="Burger Button"></button>
            <div id="navMobile" class="navMobile fixed h-[calc(100vh)] right-[-400px] top-0 md:py-10 py-5 md:px-[60px] px-7 z-50 rounded-tl-3xl bg-black transition-all duration-300">
                <img src="assets/home/bi_x-lg.svg" class="ml-auto mb-14 cursor-pointer w-6 md:w-10" id="xButtonNav" alt="">
                <div class="flex flex-col space-y-12 md:space-y-14 lg:space-y-12 text-sm text-right pl-0 md:text-xl lg:text-xl md:pl-4 lg:pb-0 md:pb-16">
                    <a class="text-orange font-semibold" id="homeClose" href="">Home</a>
                    <a class="text-white hover:text-orange transition-all ease-in-out duration-200" id="menuClose" href="#menu">Menu</a>
                    <a class="text-white hover:text-orange transition-all ease-in-out duration-200" id="aboutClose" href="#about">About</a>
                </div>
                <div class="flex items-center mt-40">
                    <a class="md:mr-10 mr-5" href="#">
                        <svg class="group md:w-[45px] w-[40px]" width="45" height="45" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="group-hover:fill-orange transition-all ease-in-out duration-300" d="M13.5 32C14.8807 32 16 30.8807 16 29.5C16 28.1193 14.8807 27 13.5 27C12.1193 27 11 28.1193 11 29.5C11 30.8807 12.1193 32 13.5 32Z" fill="#FFFAF7"/>
                            <path class="group-hover:fill-orange transition-all ease-in-out duration-300" d="M26.5 32C27.8807 32 29 30.8807 29 29.5C29 28.1193 27.8807 27 26.5 27C25.1193 27 24 28.1193 24 29.5C24 30.8807 25.1193 32 26.5 32Z" fill="#FFFAF7"/>
                            <path class="group-hover:fill-orange transition-all ease-in-out duration-300" d="M33.1 6.39003C33.0068 6.26901 32.8872 6.17094 32.7503 6.10334C32.6133 6.03573 32.4627 6.00039 32.31 6.00003H9.20999L8.75999 4.57003C8.71056 4.41648 8.62472 4.27718 8.50979 4.164C8.39487 4.05081 8.25427 3.96711 8.09999 3.92003L3.99999 2.66003C3.87392 2.62129 3.74145 2.60776 3.61016 2.62021C3.47886 2.63266 3.3513 2.67086 3.23476 2.73261C2.9994 2.85732 2.82323 3.07042 2.74499 3.32503C2.66675 3.57963 2.69286 3.85489 2.81757 4.09025C2.94228 4.32561 3.15538 4.50179 3.40999 4.58003L6.99999 5.68003L11.58 20.15L9.94999 21.49L9.81999 21.62C9.41689 22.0868 9.1885 22.6791 9.17391 23.2957C9.15932 23.9122 9.35942 24.5147 9.73999 25C10.0125 25.3315 10.3589 25.5946 10.7513 25.7682C11.1438 25.9418 11.5714 26.0212 12 26H28.69C28.9552 26 29.2096 25.8947 29.3971 25.7071C29.5846 25.5196 29.69 25.2652 29.69 25C29.69 24.7348 29.5846 24.4805 29.3971 24.2929C29.2096 24.1054 28.9552 24 28.69 24H11.84C11.7248 23.9961 11.6126 23.9625 11.5142 23.9026C11.4159 23.8426 11.3346 23.7583 11.2783 23.6578C11.222 23.5573 11.1926 23.4439 11.1929 23.3287C11.1932 23.2135 11.2232 23.1003 11.28 23L13.69 21H29.12C29.3484 21.0067 29.5722 20.9349 29.7542 20.7966C29.9361 20.6583 30.0652 20.4619 30.12 20.24L33.32 7.24003C33.3504 7.09094 33.3464 6.93689 33.3083 6.78959C33.2701 6.64229 33.1989 6.50563 33.1 6.39003Z" fill="#FFFAF7"/>
                        </svg>
                    </a>
                    <a class="text-white md:text-xl text-sm px-4 py-2 bg-orange hover:bg-transparent border-2 border-transparent hover:border-orange hover:text-orange rounded-xl font-semibold transition-all ease-in-out duration-300" id="contactClose" href="{{ route('login') }}">@if(Auth::check())Dashboard @else Sign In @endif</a>
                    
                </div>
            </div>
            <script>
                document.getElementById("navToggler").onclick = function() {
                    document.getElementById("navMobile").style.right = "0px";
                }
                document.getElementById("xButtonNav").onclick = function() {
                    document.getElementById("navMobile").style.right = "-400px";
                }
                document.getElementById("homeClose").onclick = function() {
                    document.getElementById("navMobile").style.right = "-400px";
                }
                document.getElementById("menuClose").onclick = function() {
                    document.getElementById("navMobile").style.right = "-400px";
                }
                document.getElementById("aboutClose").onclick = function() {
                    document.getElementById("navMobile").style.right = "-400px";
                }
                document.getElementById("contactClose").onclick = function() {
                    document.getElementById("navMobile").style.right = "-400px";
                }
            </script>
        </nav>
        <!--End Navbar-->

        <div class="text-white xl:p-24 md:px-12 px-6 xl:translate-y-0 md:translate-y-1/4 translate-y-1/4 xl:w-[750px] md:w-[600px] w-[320px]">
            <h1 class="xl:text-6xl md:text-4xl text-4xl font-semibold xl:text-left md:text-left text-center">Seafood Restaurant</h1>
            <p class="mt-8 xl:mb-20 md:mb-20 mb-10 text-xl xl:text-left md:text-left text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis nisi rem atque ipsum dolores velit veniam commodi eum sequi deleniti labore, iure praesentium explicabo necessitatibus veritatis delectus soluta perspiciatis omnis!</p>
            <a class="text-white xl:text-xl md:text-xl text-lg px-10 xl:py-3 md:py-3 py-2 xl:ml-0 md:ml-0 ml-12 bg-orange hover:bg-transparent border-2 border-transparent hover:border-orange hover:text-orange rounded-xl font-semibold transition-all ease-in-out duration-300" href="{{ route('menu.view') }}">Order Now</a>
        </div>
    </section>
    <!--End Landing Page-->

    <!--Promo-->
    <section class="w-full min-h-[50vh] xl:mt-[100px] md:mt-0 mt-20">
        <div class="xl:flex md:block block justify-center items-center xl:px-0 md:px-32 px-5 xl:py-0 md:py-32 py-0 text-white">
            <!--Card 1-->
            <div class="flex items-center xl:mx-10 md:mx-0 mx-0 px-6 py-6 xl:mb-0 md:mb-10 mb-10 bg-black rounded-xl shadow-black shadow-md">
                <div class="xl:w-[225px] md:w-[225px] w-[150px] xl:h-[225px] md:h-[225px] h-[75px] rounded-full">
                    <img class="xl:w-[225px] md:w-[225px] w-[150px] xl:h-[225px] md:h-[225px] h-[75px] rounded-full object-cover" src="assets/home/unsplash_qvIrI4ueqzY.jpg" alt="">
                </div>
                <div class="ml-4 w-[275px]">
                    <p class="font-semibold xl:text-xl md:text-lg text-end">23:59:00</p>
                    <h2 class="xl:text-[40px] md:text-[32px] font-semibold">Promo 1</h2>
                    <p class="xl:text-[40px] md:text-[32px] mb-4 font-semibold">10%<span class="text-xl font-normal"> Off</span></p>
                    <a class="flex items-center xl:w-[187px] md:w-[187px] w-[130px] text-white xl:text-xl md:text-xl text-base xl:px-4 md:px-4 px-1 py-2 bg-orange hover:bg-transparent border-2 border-transparent hover:border-orange hover:text-orange rounded-xl font-semibold transition-all ease-in-out duration-300 group" href="{{ route('menu.view') }}">
                        Order Now
                        <svg class="xl:ml-3 md:ml-3 ml-2 group xl:w-9 md:w-9 w-5 xl:h-9 md:h-9 h-5" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="group-hover:fill-orange transition-all ease-in-out duration-300" d="M13.5 32C14.8807 32 16 30.8807 16 29.5C16 28.1193 14.8807 27 13.5 27C12.1193 27 11 28.1193 11 29.5C11 30.8807 12.1193 32 13.5 32Z" fill="#FFFAF7"/>
                            <path class="group-hover:fill-orange transition-all ease-in-out duration-300" d="M26.5 32C27.8807 32 29 30.8807 29 29.5C29 28.1193 27.8807 27 26.5 27C25.1193 27 24 28.1193 24 29.5C24 30.8807 25.1193 32 26.5 32Z" fill="#FFFAF7"/>
                            <path class="group-hover:fill-orange transition-all ease-in-out duration-300" d="M33.1 6.39003C33.0068 6.26901 32.8872 6.17094 32.7503 6.10334C32.6133 6.03573 32.4627 6.00039 32.31 6.00003H9.20999L8.75999 4.57003C8.71056 4.41648 8.62472 4.27718 8.50979 4.164C8.39487 4.05081 8.25427 3.96711 8.09999 3.92003L3.99999 2.66003C3.87392 2.62129 3.74145 2.60776 3.61016 2.62021C3.47886 2.63266 3.3513 2.67086 3.23476 2.73261C2.9994 2.85732 2.82323 3.07042 2.74499 3.32503C2.66675 3.57963 2.69286 3.85489 2.81757 4.09025C2.94228 4.32561 3.15538 4.50179 3.40999 4.58003L6.99999 5.68003L11.58 20.15L9.94999 21.49L9.81999 21.62C9.41689 22.0868 9.1885 22.6791 9.17391 23.2957C9.15932 23.9122 9.35942 24.5147 9.73999 25C10.0125 25.3315 10.3589 25.5946 10.7513 25.7682C11.1438 25.9418 11.5714 26.0212 12 26H28.69C28.9552 26 29.2096 25.8947 29.3971 25.7071C29.5846 25.5196 29.69 25.2652 29.69 25C29.69 24.7348 29.5846 24.4805 29.3971 24.2929C29.2096 24.1054 28.9552 24 28.69 24H11.84C11.7248 23.9961 11.6126 23.9625 11.5142 23.9026C11.4159 23.8426 11.3346 23.7583 11.2783 23.6578C11.222 23.5573 11.1926 23.4439 11.1929 23.3287C11.1932 23.2135 11.2232 23.1003 11.28 23L13.69 21H29.12C29.3484 21.0067 29.5722 20.9349 29.7542 20.7966C29.9361 20.6583 30.0652 20.4619 30.12 20.24L33.32 7.24003C33.3504 7.09094 33.3464 6.93689 33.3083 6.78959C33.2701 6.64229 33.1989 6.50563 33.1 6.39003Z" fill="#FFFAF7"/>
                        </svg>
                    </a>
                </div>
            </div>
            <!--Card 2-->
            <div class="flex items-center xl:mx-10 md:mx-0 mx-0 px-6 py-6 xl:mb-0 md:mb-0 mb-16 bg-black rounded-xl shadow-black shadow-md">
                <div class="xl:w-[225px] md:w-[225px] w-[150px] xl:h-[225px] md:h-[225px] h-[75px] rounded-full">
                    <img class="xl:w-[225px] md:w-[225px] w-[150px] xl:h-[225px] md:h-[225px] h-[75px] rounded-full object-cover" src="assets/home/unsplash_qvIrI4ueqzY.jpg" alt="">
                </div>
                <div class="ml-4 w-[275px]">
                    <p class="font-semibold xl:text-xl md:text-lg text-end">23:59:00</p>
                    <h2 class="xl:text-[40px] md:text-[32px] font-semibold">Promo 2</h2>
                    <p class="xl:text-[40px] md:text-[32px] mb-4 font-semibold">20%<span class="text-xl font-normal"> Off</span></p>
                    <a class="flex items-center xl:w-[187px] md:w-[187px] w-[130px] text-white xl:text-xl md:text-xl text-base xl:px-4 md:px-4 px-1 py-2 bg-orange hover:bg-transparent border-2 border-transparent hover:border-orange hover:text-orange rounded-xl font-semibold transition-all ease-in-out duration-300 group" href="{{ route('menu.view') }}">
                        Order Now
                        <svg class="xl:ml-3 md:ml-3 ml-2 group xl:w-9 md:w-9 w-5 xl:h-9 md:h-9 h-5" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="group-hover:fill-orange transition-all ease-in-out duration-300" d="M13.5 32C14.8807 32 16 30.8807 16 29.5C16 28.1193 14.8807 27 13.5 27C12.1193 27 11 28.1193 11 29.5C11 30.8807 12.1193 32 13.5 32Z" fill="#FFFAF7"/>
                            <path class="group-hover:fill-orange transition-all ease-in-out duration-300" d="M26.5 32C27.8807 32 29 30.8807 29 29.5C29 28.1193 27.8807 27 26.5 27C25.1193 27 24 28.1193 24 29.5C24 30.8807 25.1193 32 26.5 32Z" fill="#FFFAF7"/>
                            <path class="group-hover:fill-orange transition-all ease-in-out duration-300" d="M33.1 6.39003C33.0068 6.26901 32.8872 6.17094 32.7503 6.10334C32.6133 6.03573 32.4627 6.00039 32.31 6.00003H9.20999L8.75999 4.57003C8.71056 4.41648 8.62472 4.27718 8.50979 4.164C8.39487 4.05081 8.25427 3.96711 8.09999 3.92003L3.99999 2.66003C3.87392 2.62129 3.74145 2.60776 3.61016 2.62021C3.47886 2.63266 3.3513 2.67086 3.23476 2.73261C2.9994 2.85732 2.82323 3.07042 2.74499 3.32503C2.66675 3.57963 2.69286 3.85489 2.81757 4.09025C2.94228 4.32561 3.15538 4.50179 3.40999 4.58003L6.99999 5.68003L11.58 20.15L9.94999 21.49L9.81999 21.62C9.41689 22.0868 9.1885 22.6791 9.17391 23.2957C9.15932 23.9122 9.35942 24.5147 9.73999 25C10.0125 25.3315 10.3589 25.5946 10.7513 25.7682C11.1438 25.9418 11.5714 26.0212 12 26H28.69C28.9552 26 29.2096 25.8947 29.3971 25.7071C29.5846 25.5196 29.69 25.2652 29.69 25C29.69 24.7348 29.5846 24.4805 29.3971 24.2929C29.2096 24.1054 28.9552 24 28.69 24H11.84C11.7248 23.9961 11.6126 23.9625 11.5142 23.9026C11.4159 23.8426 11.3346 23.7583 11.2783 23.6578C11.222 23.5573 11.1926 23.4439 11.1929 23.3287C11.1932 23.2135 11.2232 23.1003 11.28 23L13.69 21H29.12C29.3484 21.0067 29.5722 20.9349 29.7542 20.7966C29.9361 20.6583 30.0652 20.4619 30.12 20.24L33.32 7.24003C33.3504 7.09094 33.3464 6.93689 33.3083 6.78959C33.2701 6.64229 33.1989 6.50563 33.1 6.39003Z" fill="#FFFAF7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--End Promo-->

    <!--Menu-->
    <a name="menu"></a>
    <section class="w-full min-h-screen">
        <h1 class="text-center xl:text-[40px] md:text-4xl text-3xl font-semibold">Our Menu</h1>
        <!--Card-->
        <div class="xl:py-8 md:py-8 py-4">
            <div class="flex justify-center flex-wrap px-5 mt-8">

                <!--Card 1-->
                @forelse ($menus as $food)
                    <div class="px-4">
                        <div class="bg-black xl:w-[375px] md:w-[300px] h-fit rounded-xl">
                            <div class="flex justify-center bg-white xl:w-[375px] md:w-[300px] xl:h-[315px] md:h-[300px] rounded-bl-3xl rounded-t-lg p-5">
                                <img class="xl:w-[300px] hover:w-[310px] md:w-[250px] md:h-[250px] transition-all ease-in-out duration-300" src="{{ asset('storage/'.$food->food_image) }}" alt="">
                            </div>
                            <div class="text-white p-5">
                                <h2 class="xl:text-2xl md:text-xl font-semibold">{{ $food->food_name }}</h2>
                                <p class="mt-4 xl:text-lg md:text-base">{{ $food->food_description }}</p>
                                @php
                                    $foodPrice = 'Rp' .  number_format($food->food_price,2,',','.');
                                @endphp
                                <p class="mt-6 xl:text-lg md:text-base">{{ $foodPrice }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="lg:text-9xl md:text-base text-9xl text-customBlack select-none">Menu is empty</p>
                @endforelse

            </div>
        </div>
        <center>
            <div class="mt-10">
                <a class="text-white xl:text-xl md:text-xl text-base px-10 xl:py-3 md:py-3 py-2 bg-orange hover:bg-transparent border-2 border-transparent hover:border-orange hover:text-orange rounded-xl font-semibold transition-all ease-in-out duration-300" href="{{ route('menu.view') }}">View More</a>
            </div>
        </center>
    </section>
    <!--End Menu-->

    <!--About-->
    <a name="about"></a>
    <section class="w-full min-h-[70vh] bg-black mt-[100px] xl:py-0 md:py-10 py-8">
        <div class="xl:flex md:block block justify-between items-center p-10 xl:px-20 md:px-20 px-10">
            <img class="xl:w-[500px] md:w-[400px] xl:translate-x-0 xl:static md:relative left-1/2 md:-translate-x-1/2" src="assets/home/SeekPng.com_steak-png_308418.png" alt="">
            <div class="text-white xl:px-20 md:px-20 px-0">
                <h1 class="xl:text-[40px] md:text-4xl text-3xl font-semibold xl:text-left md:text-center text-center xl:mt-0 md:mt-10 mt-5">About SeaShell</h1>
                <p class="xl:text-xl md:text-lg text-base xl:text-left md:text-center text-center xl:mt-0 md:mt-4 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque laborum quam sequi iusto veniam voluptatibus ipsum optio veritatis eveniet ducimus. Quibusdam nam autem ut beatae iusto dolorum at. Hic, dolore.</p>
            </div>
        </div>
    </section>
    <!--End About-->

    <!--Testimoni-->
    <section class="w-full min-h-screen mt-[100px]">
        <h1 class="text-center xl:text-[40px] md:text-4xl text-3xl font-semibold">Testimoni</h1>
        <!--Card 1-->
        <div class="slide-container xl:w-[900px] md:w-[600px] relative left-1/2 -translate-x-1/2 active">
            <div class="w-full h-full overflow-hidden">
                <div class="slide flex mt-12 w-fit">
                    <div class="px-[70px]">
                        <div class="bg-black p-5 text-white xl:w-[800px] md:w-[500px] w-[190px] rounded-xl">
                            <p class="xl:text-lg md:text-base text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id non quam nostrum dolores nisi consequatur, est vel autem, hic suscipit dolor alias in? At aperiam quos cumque consectetur ad eaque!</p>
                            <h3 class="xl:text-2xl md:text-xl text-lg font-semibold mt-4">Kim Jisoo</h3>
                            <p class="xl:text-lg md:text-base text-sm mt-4">27 Years Old</p>
                        </div>
                        <div class="xl:w-[175px] md:w-[175px] w-[125px] xl:h-[175px] md:h-[175px] h-[125px] rounded-full bg-orange flex items-center justify-center mt-10">
                            <img class="xl:w-[150px] md:w-[150px] w-[105px] xl:h-[150px] md:h-[150px] h-[105px] rounded-full object-cover" src="assets/home/testimoni-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Card 2-->
        <div class="slide-container xl:w-[900px] md:w-[600px] relative left-1/2 -translate-x-1/2">
            <div class="w-full h-full overflow-hidden">
                <div class="slide flex mt-12 w-fit">
                    <div class="px-[70px]">
                        <div class="bg-black p-5 text-white xl:w-[800px] md:w-[500px] w-[190px] rounded-xl">
                            <p class="xl:text-lg md:text-base text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id non quam nostrum dolores nisi consequatur, est vel autem, hic suscipit dolor alias in? At aperiam quos cumque consectetur ad eaque!</p>
                            <h3 class="xl:text-2xl md:text-xl text-lg font-semibold mt-4">Jennie Kim</h3>
                            <p class="xl:text-lg md:text-base text-sm mt-4">26 Years Old</p>
                        </div>
                        <div class="xl:w-[175px] md:w-[175px] w-[125px] xl:h-[175px] md:h-[175px] h-[125px] rounded-full bg-orange flex items-center justify-center mt-10">
                            <img class="xl:w-[150px] md:w-[150px] w-[105px] xl:h-[150px] md:h-[150px] h-[105px] rounded-full object-cover" src="assets/home/testimoni-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Card 3-->
        <div class="slide-container xl:w-[900px] md:w-[600px] relative left-1/2 -translate-x-1/2">
            <div class="w-full h-full overflow-hidden">
                <div class="slide flex mt-12 w-fit">
                    <div class="px-[70px]">
                        <div class="bg-black p-5 text-white xl:w-[800px] md:w-[500px] w-[190px] rounded-xl">
                            <p class="xl:text-lg md:text-base text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id non quam nostrum dolores nisi consequatur, est vel autem, hic suscipit dolor alias in? At aperiam quos cumque consectetur ad eaque!</p>
                            <h3 class="xl:text-2xl md:text-xl text-lg font-semibold mt-4">Sowon</h3>
                            <p class="xl:text-lg md:text-base text-sm mt-4">26 Years Old</p>
                        </div>
                        <div class="xl:w-[175px] md:w-[175px] w-[125px] xl:h-[175px] md:h-[175px] h-[125px] rounded-full bg-orange flex items-center justify-center mt-10">
                            <img class="xl:w-[150px] md:w-[150px] w-[105px] xl:h-[150px] md:h-[150px] h-[105px] rounded-full object-cover" src="assets/home/testimoni-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Card 4-->
        <div class="slide-container xl:w-[900px] md:w-[600px] relative left-1/2 -translate-x-1/2">
            <div class="w-full h-full overflow-hidden">
                <div class="slide flex mt-12 w-fit">
                    <div class="px-[70px]">
                        <div class="bg-black p-5 text-white xl:w-[800px] md:w-[500px] w-[190px] rounded-xl">
                            <p class="xl:text-lg md:text-base text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id non quam nostrum dolores nisi consequatur, est vel autem, hic suscipit dolor alias in? At aperiam quos cumque consectetur ad eaque!</p>
                            <h3 class="xl:text-2xl md:text-xl text-lg font-semibold mt-4">Zhang Yi Shang</h3>
                            <p class="xl:text-lg md:text-base text-sm mt-4">19 Years Old</p>
                        </div>
                        <div class="xl:w-[175px] md:w-[175px] w-[125px] xl:h-[175px] md:h-[175px] h-[125px] rounded-full bg-orange flex items-center justify-center mt-10">
                            <img class="xl:w-[150px] md:w-[150px] w-[105px] xl:h-[150px] md:h-[150px] h-[105px] rounded-full object-cover" src="assets/home/testimoni-4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-20">
            <img class="mx-5 cursor-pointer xl:w-16 md:w-16 w-12" src="assets/home/bi_arrow-left-circle-fill.svg" onclick="prev()" alt="">
            <img class="mx-5 cursor-pointer xl:w-16 md:w-16 w-12" src="assets/home/bi_arrow-right-circle-fill.svg" onclick="next()" alt="">
        </div>
        <script>

            let slides = document.querySelectorAll('.slide-container');
            let index = 0;

            function next() {
                slides[index].classList.remove('active');
                index = [index + 1] % slides.length;
                slides[index].classList.add('active');
            }

            function prev() {
                slides[index].classList.remove('active');
                index = [index - 1 + slides.length] % slides.length;
                slides[index].classList.add('active');
            }

        </script>
    </section>
    <!--End Testimoni-->

    <!--Contact Us-->
    <a name="contact"></a>
    <section class="w-full min-h-screen">
        <div class="xl:flex md:block block justify-center xl:px-20 md:px-20 px-5">
            <div class="xl:mx-20 md:mx-0 mx-0">
                <h1 class="xl:text-[40px] md:text-4xl text-3xl xl:text-left md:text-center text-center font-semibold mb-10">Feel free to ask</h1>
                <form action="https://formspree.io/f/mzbozjjv" method="POST">
                    <div class="form-control flex flex-col">
                        <label class="xl:text-xl md:text-xl text-lg font-semibold" for="name">Name</label><br>
                        <input class="peer px-3 xl:py-4 md:py-4 py-3 xl:w-[500px] md:w-[600px] rounded-lg bg-white shadow-black shadow-sm border-[1px] border-transparent ring-1 ring-transparent focus:outline-none focus:border-yellow focus:ring-yellow focus:invalid:border-red-600 focus:invalid:ring-red-600" type="text" name="name" id="name" placeholder="Input your name..."><br>
                        <small class="text-sm">Error message</small>
                    </div>
                    <div class="form-control flex flex-col">
                        <label class="xl:text-xl md:text-xl text-lg font-semibold" for="phone">Phone Number</label><br>
                        <input class="px-3 xl:py-4 md:py-4 py-3 xl:w-[500px] md:w-[600px] rounded-lg bg-white shadow-black shadow-sm border-[1px] border-transparent ring-1 ring-transparent focus:outline-none focus:border-yellow focus:ring-yellow focus:invalid:border-red-600 focus:invalid:ring-red-600" type="number" name="phone" id="phone" placeholder="Input your phone number..."><br>
                        <small class="text-sm">Error message</small>
                    </div>
                    <div class="form-control flex flex-col">
                        <label class="xl:text-xl md:text-xl text-lg font-semibold" for="email">Email</label><br>
                        <input class="peer px-3 xl:py-4 md:py-4 py-3 xl:w-[500px] md:w-[600px] rounded-lg bg-white shadow-black shadow-sm border-[1px] border-transparent ring-1 ring-transparent focus:outline-none focus:border-yellow focus:ring-yellow focus:invalid:border-red-600 focus:invalid:ring-red-600" type="email" name="email" id="email" placeholder="Input your email..."><br>
                        <small class="invisible peer-invalid:visible text-red-600 text-sm">Email is invalid!</small>
                    </div>
                    <div class="form-control flex flex-col">
                        <label class="xl:text-xl md:text-xl text-lg font-semibold" for="message">Message</label><br>
                        <textarea class="px-3 xl:py-4 md:py-4 py-3 xl:w-[500px] md:w-[600px] resize-none rounded-lg bg-white shadow-black shadow-sm border-[1px] border-transparent ring-1 ring-transparent focus:outline-none focus:border-yellow focus:ring-yellow focus:invalid:border-red-600 focus:invalid:ring-red-600" name="message" id="message" cols="30" rows="10" placeholder="Input your message..."></textarea><br>
                        <small class="text-sm">Error message</small>
                    </div>
                    <center>
                        <div class="xl:mt-14 md:mt-14 mt-10">
                            <button type="submit" class="text-white xl:text-xl md:text-xl text-base px-10 xl:py-3 md:py-3 py-2 bg-orange hover:bg-transparent border-2 border-transparent hover:border-orange hover:text-orange rounded-xl font-semibold transition-all ease-in-out duration-300">Submit</button>
                        </div>
                    </center>
                    {{-- <script>
                        const form = document.getElementById('form');
                        const fname = document.getElementById('name');
                        const phone = document.getElementById('phone');
                        const email = document.getElementById('email');
                        const message = document.getElementById('message');
                        
                        form.addEventListener('submit', (e) => {
                            e.preventDefault();
                            
                            checkInputs();
                        });
                        
                        function checkInputs() {
                            const nameValue = fname.value.trim();
                            const phoneValue = phone.value.trim();
                            const emailValue = email.value.trim();
                            const messageValue = message.value.trim();
                            
                            const validateEmail = (email) => {
                                return email.match(
                                    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                                    );
                                };
                                
                                if (nameValue === '') {
                                    setErrorFor(fname, 'Name cannot be blank');
                                } else {
                                    setSuccessFor(fname);
                                }
                                
                                if (emailValue === '') {
                                    setErrorFor(email, 'Email cannot be blank');
                                }else if (validateEmail(emailValue)) {
                                    setSuccessFor(email);
                                } else {
                                    setErrorFor(email, 'Email is invalid!');
                                }
                                
                                if (phoneValue === '') {
                                    setErrorFor(phone, 'Phone Number cannot be blank');
                                } else if (phoneValue.length < 10){
                                    setErrorFor(phone, 'Phone Number is not valid!');
                                }else if (phoneValue.length > 12){
                                    setErrorFor(phone, 'Phone Number is not valid!');
                                }else {
                                    setSuccessFor(phone);
                                }
                                
                                if (messageValue === '') {
                                    setErrorFor(message, 'Message cannot be blank');
                                } else if (messageValue.length < 5) {
                                    setErrorFor(message, 'Minimum Message must be at least 5 words!');
                                } else {
                                    setSuccessFor(message);
                                }
                            }
                            
                            function setErrorFor(input, message){
                                const formControl = input.parentElement;
                                const small = formControl.querySelector('small');
                                small.innerText = message;
                                
                                formControl.className = 'form-control error';
                            }
                            
                            function setSuccessFor(input) {
                                const formControl = input.parentElement;
                                formControl.className = 'form-control success';
                            }
                    </script> --}}
                </form>
            </div>
            <div class="xl:mx-20 md:mx-0 mx-0">
                <h1 class="xl:text-[40px] md:text-4xl text-3xl xl:text-left md:text-center text-center font-semibold xl:mt-0 md:mt-20 mt-16">Location</h1>
                <div class="mapouter mt-10 xl:w-[500px] md:w-[500px] w-[225px] xl:h-[500px] md:h-[500px] h-[225px] xl:static md:relative relative xl:left-0 md:left-1/2 left-1/2 xl:translate-x-0 md:-translate-x-1/2 -translate-x-1/2"><div class="gmap_canvas">
                    <iframe class="xl:w-[500px] md:w-[500px] w-[225px] xl:h-[500px] md:h-[500px] h-[225px]" width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Jakarta&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <br>
                    <style>
                        .mapouter{position:relative;text-align:right;}
                    </style>
                    <style>
                        .gmap_canvas {overflow:hidden;background:none!important;}
                    </style>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Us-->

    <!--Footer-->
    <section class="w-full min-h-[40vh] bg-black mt-[100px]">
        <center>
            <div class="p-10 text-white">
                <img class="xl:w-40 md:w-40 w-24" src="assets/home/Logo-white.svg" alt="">
                <div class="flex justify-center mt-5">
                    <a class="xl:px-3 md:px-3 px-2" href="https://www.instagram.com/"><img class="xl:w-12 md:w-12 w-10" src="assets/home/instagram.svg" alt=""></a>
                    <a class="xl:px-3 md:px-3 px-2" href="https://www.facebook.com/"><img class="xl:w-12 md:w-12 w-10" src="assets/home/facebook.svg" alt=""></a>
                    <a class="xl:px-3 md:px-3 px-2" href="https://twitter.com/"><img class="xl:w-12 md:w-12 w-10" src="assets/home/twitter.svg" alt=""></a>
                </div>
                <div class="flex justify-center mt-5 font-medium xl:text-xl md:text-xl text-base">
                    <a class="xl:px-3 md:px-3 px-2" href="home.html">Home</a>
                    <a class="xl:px-3 md:px-3 px-2" href="#menu">Menu</a>
                    <a class="xl:px-3 md:px-3 px-2" href="{{ route('cart') }}">Checkout</a>
                </div>
                <p class="xl:text-xl md:text-xl text-base mt-5">Copyright 2022 SeaShell, All rights reserved.</p>
            </div>
        </center>
    </section>
    <!--End Footer-->

    <!-- javscript -->
    <script src="/js/home.js"></script>
</body>
</html>