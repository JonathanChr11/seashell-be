<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?t={{env("VERSION_TIME")}}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}?t={{env("VERSION_TIME")}}">
    <title>SeaShell</title>
    <link rel="stylesheet" href="/css/login-regis-menu-cart.css">
</head>

<body>
    <!-- register -->
    <section id="register"
        class="min-h-screen bg-gradient-to-t from-customYellow to-customOrange flex items-center justify-center lg:px-[100px] md:px-12 px-6 py-16">

        <div
            class="flex flex-col justify-center items-center bg-customWhite py-12 px-8 lg:w-[800px] md:w-[600px] w-full font-poppins gap-10 rounded-2xl text-customBlack">
            <!-- Image kl diklik balik ke home -->
            <a href="#"><img src="/assets/login/logo-black.svg" alt="logo-black" class="lg:w-auto md:w-36 w-28"></a>
            <h1 class="font-bold lg:text-5xl md:text-3xl text-2xl">Register</h1>
            <form id="register-form" method="POST" action="{{ route('register') }}" class="flex flex-col justify-center items-center w-full gap-8"
                onsubmit="validateRegister(this,event)">
                @csrf
                <!-- Bagian 1 -->
                <div id="register-form-1" class="w-full flex flex-col gap-8 items-center justify-center">
                    <div class="flex flex-col w-full gap-2">
                        <label for="username" class="font-semibold lg:text-xl md:text-lg text-base">Username</label>
                        <input type="text" name="username" id="username"
                            class="lg:text-lg md:text-base text-sm p-3 rounded-lg drop-shadow-[0px_4px_8px_rgba(0,0,0,0.1)] focus:outline-customYellow border-red-600"
                            placeholder="Input your username..." onfocusout="validateUsername(this)">
                        <!-- validation message -->
                        <p class="text-red-600 lg:text-lg md:text-base text-sm"></p>
                    </div>
                    <div class="flex flex-col w-full gap-2">
                        <label for="email" class="font-semibold lg:text-xl md:text-lg text-base">Email</label>
                        <input type="email" name="email" id="email"
                            class="lg:text-lg md:text-base text-sm p-3 rounded-lg drop-shadow-[0px_4px_8px_rgba(0,0,0,0.1)] focus:outline-customYellow border-red-600"
                            placeholder="Input your email..." onfocusout="validateEmail(this)">
                        <!-- validation message -->
                        <p class="text-red-600 lg:text-lg md:text-base text-sm"></p>
                    </div>
                    <div class="flex flex-col w-full gap-2">
                        <label for="address" class="font-semibold lg:text-xl md:text-lg text-base">Address</label>
                        <input type="text" name="address" id="address"
                            class="lg:text-lg md:text-base text-sm p-3 rounded-lg drop-shadow-[0px_4px_8px_rgba(0,0,0,0.1)] focus:outline-customYellow border-red-600"
                            placeholder="Input your address..." onfocusout="validateAddress(this)">
                        <!-- validation message -->
                        <p class="text-red-600 lg:text-lg md:text-base text-sm"></p>
                    </div>
                    @foreach ($errors->all() as $error)
                        <p class="text-red-600 lg:text-lg md:text-base text-sm">{{ $error }}</p>
                    @endforeach
                    <p
                        class="lg:text-lg md:text-base text-sm flex md:justify-start justify-center items-center w-full text-center gap-2">
                        <span>Already have
                            an account? </span><a href="login.html" class="text-customOrange">Login</a>
                    </p>
                    <button type="button"
                        class="bg-customOrange text-customWhite font-semibold lg:text-xl md:text-lg text-base px-14 py-2 rounded-xl hover:bg-transparent hover:text-customOrange border-customOrange border-2 transition-all w-fit"
                        onclick="nextLogin()">Next</button>
                </div>
                <!-- Bagian 2 -->
                <div id="register-form-2" class="hidden w-full flex flex-col gap-8 justify-center items-center">
                    <div class="flex flex-col w-full gap-2">
                        <label for="password" class="font-semibold lg:text-xl md:text-lg text-base">Password</label>
                        <input type="password" name="password" id="password"
                            class="lg:text-lg md:text-base text-sm p-3 rounded-lg drop-shadow-[0px_4px_8px_rgba(0,0,0,0.1)] focus:outline-customYellow border-red-600"
                            placeholder="Input your password..." onfocusout="validatePassword(this)">
                        <!-- validation message -->
                        <p class="text-red-600 lg:text-lg md:text-base text-sm"></p>
                    </div>
                    <div class="flex flex-col w-full gap-2">
                        <label for="confirm-password" class="font-semibold lg:text-xl md:text-lg text-base">Confirm
                            Password</label>
                        <input type="password" name="password_confirmation" id="confirm-password"
                            class="lg:text-lg md:text-base text-sm p-3 rounded-lg drop-shadow-[0px_4px_8px_rgba(0,0,0,0.1)] focus:outline-customYellow border-red-600"
                            placeholder="Confirm your password..." onfocusout="validateReTypePassword(this)">
                        <!-- validation message -->
                        <p class="text-red-600 lg:text-lg md:text-base text-sm"></p>
                    </div>
                    <p
                        class="lg:text-lg md:text-base text-sm flex md:justify-start justify-center items-center w-full text-center gap-2">
                        <span>Already have
                            an account? </span><a href="login.html" class="text-customOrange">Login</a>
                    </p>
                    <div class="flex justify-center items-center gap-4">
                        <button type="button"
                            class="bg-transparent text-customOrange font-semibold lg:text-xl md:text-lg text-base px-14 py-2 rounded-xl hover:bg-transparent hover:bg-customOrange hover:text-customWhite border-customOrange border-2 transition-all"
                            onclick="backLogin()">Back</button>
                        <button type="submit"
                            class="bg-customOrange text-customWhite font-semibold lg:text-xl md:text-lg text-base px-14 py-2 rounded-xl hover:bg-transparent hover:text-customOrange border-customOrange border-2 transition-all">Register</button>
                    </div>
                </div>



            </form>
        </div>
    </section>

    <!-- javscript -->
    <script src="/js/register.js"></script>
</body>

</html>