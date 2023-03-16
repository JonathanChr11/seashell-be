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
    <!-- login -->
    <section id="login"
        class="min-h-screen bg-gradient-to-t from-customYellow to-customOrange flex items-center justify-center lg:px-[100px] md:px-12 px-6 py-16">

        <div
            class="flex flex-col justify-center items-center bg-customWhite py-12 px-8 lg:w-[800px] md:w-[600px] w-full font-poppins gap-10 rounded-2xl text-customBlack">
            <!-- Image kl diklik balik ke home -->
            <a href="#"><img src="/assets/login/logo-black.svg" alt="logo-black" class="lg:w-auto md:w-36 w-28"></a>
            <h1 class="font-bold lg:text-5xl md:text-3xl text-2xl">Login</h1>
            <form method="POST" action="{{ route('login') }}" class="flex flex-col justify-center items-center w-full gap-8"
                onsubmit="validateLogin(this, event)">
                @csrf
                <div class="flex flex-col w-full gap-2">
                    <label for="username" class="font-semibold lg:text-xl md:text-lg text-base">Username</label>
                    <input type="text" name="username" id="username"
                        class="lg:text-lg md:text-base text-sm p-3 rounded-lg drop-shadow-[0px_4px_8px_rgba(0,0,0,0.1)] focus:outline-customYellow border-red-600"
                        placeholder="Input your username..." onfocusout="validateUsername(this)">
                    <!-- validation message -->
                    <p class="text-red-600 lg:text-lg md:text-base text-sm"></p>
                </div>
                <div class="flex flex-col w-full gap-2">
                    <label for="password" class="font-semibold lg:text-xl md:text-lg text-base">Password</label>
                    <input type="password" name="password" id="password"
                        class="lg:text-lg md:text-base text-sm p-3 rounded-lg drop-shadow-[0px_4px_8px_rgba(0,0,0,0.1)] focus:outline-customYellow border-red-600"
                        placeholder="Input your password..." onfocusout="validatePassword(this)">
                    <!-- validation message -->
                    <p class="text-red-600 lg:text-lg md:text-base text-sm"></p>

                </div>
                
                @error('username')
                    <p class="error-msg text-customOrange sm:text-sm text-[8px] w-full  mt-1 pl-2">{{ $message }}</p>
                @enderror

                <p
                    class="lg:text-lg md:text-base text-sm flex md:justify-start justify-center items-center w-full text-center gap-2">
                    <span>Don't have
                        an account? </span><a href="{{ route('register') }}" class="text-customOrange">Register</a>
                </p>
                
                <button type="submit"
                    class="bg-customOrange text-customWhite font-semibold lg:text-xl md:text-lg text-base px-14 py-2 rounded-xl hover:bg-transparent hover:text-customOrange border-customOrange border-2 transition-all">Login</button>
            </form>
        </div>
    </section>

    <!-- javscript -->
    <script src="/js/login.js"></script>
</body>

</html>