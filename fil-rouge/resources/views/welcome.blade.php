<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />


        <!-- Styles -->
        
         <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="antialiased bg-orange-100">
        <div class="relative  sm:justify-center sm:items-center min-h-screen  bg-center  dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div dir="rtl" class="  sm:top-0 sm:right-0 p-6 text-right">
                    <a href="" class="ml-4 font-semibold bg-fuchsia-900 text-white border-r-2 rounded-md p-2 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">About</a>
                    <a href="" class="ml-4 font-semibold bg-fuchsia-900 text-white border-r-2 rounded-md p-2 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Contact us</a>
                    <a href="" class="ml-4 font-semibold bg-fuchsia-900 text-white border-r-2 rounded-md p-2 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Shop</a>

                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 bg-fuchsia-900 text-white border-r-2 rounded-md p-2 focus:rounded-sm hover:outline-fuchsia-900">Log in</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold bg-fuchsia-900 text-white border-r-2 rounded-md p-2 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                        <div class="flex justify-center m-4 ">
                            <img src="./asset/images/logo1.png" class="w-40 " alt="logo">
                        </div>
                </div>
            @endif
            <div class="p-2 flex justify-center">
                <img src="./asset/images/flower1.jpg" class="rounded-lg brightness-50 " alt="">
                <div class="centered font-bold md:font-normal sm:font-normal bg-black p-8 rounded-lg  text-white">Flower crochet</div>
                
            </div>
            
        
    </div>
    <div class="font-bold bg-fuchsia-900 p-2  text-white" >Category <br></div>

    <div class=" grid grid-rows-3 grid-flow-col gap-4 p-2">
        <img src="./asset/images/phone1.jpg" class="w-64 rounded-lg border-2 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
        <img src="./asset/images/phone2.jpg" class="w-64 rounded-lg border-2 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
        <img src="./asset/images/phone3.jpg" class="w-64 rounded-lg border-2 bg-fuchsia-800 row-end-3 row-span-2 p-2"alt="">
        <img src="./asset/images/phone4.jpg" class="w-64 rounded-lg border-2 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
    </div>
    <div class="font-bold bg-fuchsia-900 p-2  text-white" >Category <br></div>

    <div class=" grid grid-rows-3 grid-flow-col gap-4 p-2">
        <img src="./asset/images/f1.jpg" class="w-64 rounded-lg border-1 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
        <img src="./asset/images/f2.jpg" class="w-64 rounded-lg border-1 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
        <img src="./asset/images/f3.jpg" class="w-64 rounded-lg border-1 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
        <img src="./asset/images/f4.jpg" class="w-64 rounded-lg border-1 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
    </div>
    <div class="font-bold bg-fuchsia-900 p-2  text-white" >Category <br></div>

    <div class=" grid grid-rows-3 grid-flow-col gap-4 p-2">
        <img src="./asset/images/e1.jpg" class="w-64 rounded-lg border-1 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
        <img src="./asset/images/e2.jpg" class="w-64 rounded-lg border-1 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
        <img src="./asset/images/e3.jpg" class="w-64 rounded-lg border-1 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
        <img src="./asset/images/e4.jpg" class="w-64 rounded-lg border-1 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
    </div>
    <footer class="bg-amber-200 p-4 h-20 block" >
        <a href="">About</a>
        <a href="">About</a>
        <a href="">About</a>
        <a href="">About</a>


    </footer>
    </body>
</html>
