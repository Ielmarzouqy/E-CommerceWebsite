<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Minart</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- Styles -->
        
         <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="antialiased bg-violet-100">
        <div class="relative  sm:justify-center sm:items-center min-h-screen  bg-center  dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div dir="rtl" class="  sm:top-0 sm:right-0 p-6 text-right">
                    {{-- <img src="./asset/images/logo3.png" class="w-20 ml-4 " alt="logo"> --}}
                    
                    <a href="{{ route('products.index') }}" class="ml-4 font-semibold bg-fuchsia-900 text-white border-r-2 rounded-md p-2 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Shop</a>
                    <a href="" class="ml-4 font-semibold bg-fuchsia-900 text-white border-r-2 rounded-md p-2 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">About</a>
                    <a href="" class="ml-4 font-semibold bg-fuchsia-900 text-white border-r-2 rounded-md p-2 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Contact us</a>

                        @auth
                        {{-- @php
                        $user_id =Illuminate\Support\Facades\Auth::id();

                        @endphp --}}
                          @if ( Auth::user()->role == "admin")
                          <a href="{{ url('/dashboard') }}" class="font-semibold dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 bg-fuchsia-900 text-white border-r-2 rounded-md p-2 focus:rounded-sm hover:outline-fuchsia-900"> {{ Auth::user()->role }}  dashbord</a>

                            @else
                          
                            <a href="{{ url('/user-dashboard') }}" class="font-semibold dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 bg-fuchsia-900 text-white border-r-2 rounded-md p-2 focus:rounded-sm hover:outline-fuchsia-900">{{ Auth::user()->role }} user dashboard </a>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="font-semibold dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 bg-fuchsia-900 text-white border-r-2 rounded-md p-2 focus:rounded-sm hover:outline-fuchsia-900">Log in</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold bg-fuchsia-900 text-white border-r-2 rounded-md p-2 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif

                        @endauth
                        <div class="flex justify-center m-4 ">
                            <img src="./asset/images/logov.png" class="w-40 " alt="logo">
                        </div>
                        
                </div>
            @endif
            {{-- image for slide --}}
            <div class="p-2 flex justify-center">
                <img src="./asset/images/flower1.jpg" class="rounded-lg brightness-50 " alt="">
                <div class="centered font-bold md:font-normal sm:font-normal bg-black p-8 rounded-lg  text-white">Flower crochet</div>
                
            </div>
          
{{-- 
              <div class="relative h-screen bg-cover bg-center" style="background-image: url('background.jpg')">
                <div class="absolute inset-0 flex items-center justify-center">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="./asset/images/f1.jpg" alt="Slide 1">
                      </div>
                      <div class="swiper-slide">
                        <img src="./asset/images/d1.jpg" alt="Slide 2">
                      </div>
                      <div class="swiper-slide">
                        <img src="./asset/images/phone1.jpg" alt="Slide 3">
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div> --}}
              
              
              
              
              
              
              
              
        
    </div>
    <div class="font-bold bg-fuchsia-900 p-2  text-white" >Category <br></div>

    <div class=" grid grid-rows-3 grid-flow-col gap-4 p-2">
        <img src="./asset/images/phone1.jpg" class="w-64 hover: rounded-lg border-2 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
        <div>
          <h1 class="text-center text-violet-700 text-2xl">title</h1>
          <p class="font-bold text-center text-xl">20$</p>
        <button class="rounded-full mx-end bg-violet-400 w-24 h-8 text-white hover:bg-violet-700">add to card</button>

        </div>
    
        <img src="./asset/images/phone2.jpg" class="w-64 rounded-lg border-2 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
        <div>
          <h1 class="t">title</h1>
          <p>20$</p>
        <button>add to card</button>

        </div>
        
        <img src="./asset/images/phone3.jpg" class="w-64 rounded-lg border-2 bg-fuchsia-800 row-end-3 row-span-2 p-2"alt="">
        <div>
          <h1>title</h1>
          <p>20$</p>
          <button>add to card</button>

        </div>
        <img src="./asset/images/phone4.jpg" class="w-64 rounded-lg border-2 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
        <div>
          <h1>title</h1>
          <p>20$</p>
        <button>add to card</button>

        </div>
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
    <div class="font-bold bg-fuchsia-900 p-2  text-white" >Category <br></div>

    <div class=" grid grid-rows-3 grid-flow-col gap-4 p-2">
        <img src="./asset/images/d1.jpg" class="w-64 rounded-lg border-1 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
        <img src="./asset/images/d2.jpg" class="w-64 rounded-lg border-1 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
        <img src="./asset/images/d3.jpg" class="w-64 rounded-lg border-1 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
        <img src="./asset/images/d4.jpg" class="w-64 rounded-lg border-1 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">
    </div>
    <footer class="bg-amber-200 p-4 h-20 block" >
        <a href="">About</a>
        <a href="">About</a>
        <a href="">About</a>
        <a href="">About</a>


    </footer>
    </body>
</html>
