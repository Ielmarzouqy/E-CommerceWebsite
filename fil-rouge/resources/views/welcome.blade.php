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

        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script> --}}


        <!-- Styles -->
        
         <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="antialiased bg-violet-100">

 
        <div class="relative  sm:justify-center sm:items-center min-h-screen  bg-center  dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div dir="rtl" class="  sm:top-0 sm:right-0 p-6 text-right">
                    {{-- <img src="./asset/images/logo3.png" class="w-20 ml-4 " alt="logo"> --}}
                    
                    <a href="{{ url('shop') }}" class="ml-4 font-semibold bg-fuchsia-900 text-white border-r-2 rounded-md p-2 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Shop</a>
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
                        <div class="flex justify-end  ">
                            <img src="./asset/images/logov.png" class="w-40 logo " alt="logo">
                        </div>
                        
                </div>
            @endif
            {{-- image for slide --}}
            {{-- <div class="p-2 flex justify-center">
                <img src="./asset/images/cov2.jpeg" class="rounded-lg brightness-50 " alt="">
                <div class="centered  lg:font-smaller  p-8 rounded-lg  text-white">VINTAGE ROSE
                  Exciting new additions to our Vintage Rose collection - inspired by all things vintage + romantic... ✨🥀</div>
            </div> --}}


            <div id="default-carousel" class="relative p-2 w-full" data-carousel="slide">
              <!-- Carousel wrapper -->
              <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                   <!-- Item 1 -->
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="./asset/images/cov2.jpeg" class="absolute  block w-full brightness-50 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                      <div class="centered  lg:font-smaller p-8 rounded-lg  text-white">MINART
                        Web site E-commerce for sell artistic product traditional and modern art inspired by all things vintage  ✨🥀</div>
                  </div>
                  <!-- Item 2 -->
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="./asset/images/covLiving.jpg" class="absolute block w-500 brightness-50 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                      <div class="centered  lg:font-smaller  p-8 rounded-lg  text-white">HOME DECORATION
                        🌜✨</div>
                  </div>
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./asset/images/cro2.png" class="absolute block w-full brightness-50 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="centered  lg:font-smaller  p-8 rounded-lg  text-white">CROCHET ART 🌸✨</div>
                  </div>
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./asset/images/ecov4.png" class="absolute block w-full brightness-50  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="centered  lg:font-smaller  p-8 rounded-lg  text-white">EMBROIDERY ART ✨🥀</div>
                  </div>
              </div>
            </div>
    <div class="font-bold bg-fuchsia-900 p-4 text-center  text-white" >Our Product <br></div>

    {{-- </div>
 
    <div class="grid grid-rows-3 grid-flow-col gap-4 p-2">
        <div class="card">
        <img src="./asset/images/phone1.jpg" class="w-64 hover: rounded-lg border-2 bg-fuchsia-800 row-end-3 row-span-2 p-2" alt="">

          <h1 class="text-center font-bold text-black text-2xl">title</h1>
          <p class="font-bold text-center text-[#cd8193] text-xl">20$</p>
        <button class="rounded-full mx-end bg-violet-400 w-24 h-8 text-white hover:bg-violet-700">add to card</button>
        </div>
      </div> --}}

      <section class=" ">
        
        <div  id="shop" class="container px-4 py-2 mx-auto ">
          <div class="  grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 sm:grid-cols-1 xl:grid-cols-4 lg:grid-cols-4">
      <div  class=" product category">
          {{-- <h2 class="text-center font-bold">PUNCH NEEDLE</h2> --}}
              <div  class=" cardd card pro p-2 w-full">
                  <img src="./asset/images/pn3.png" alt="" class=" image w-full h-64 bg-gray-400 rounded-lg ">
                  {{-- <h3 class="w-56 h-2 mt-4 font-bold rounded-lg" title="">title</h3> --}}
                  <div class="flex justify-center">
                    <p class="  btn my-8 w-36 h-8 text-center rounded-lg text-white hover:text- bg-[#cd8193]  font-bold">PUNCH NEEDLE</p>
                  </div>
              </div>
      </div>
      <div  class="product category">
        {{-- <h2 class="text-center font-bold">HOME DECOR</h2> --}}
            <div  class=" cardd card pro p-2 w-full">
                <img src="./asset/images/cov3.png" alt="" class=" image w-full h-64 bg-gray-300 rounded-lg ">
                {{-- <h3 class="w-56 h-2 mt-4 font-bold rounded-lg" title="">title</h3> --}}
                <div class="flex justify-center">
                  <p class="  btn my-8 w-36 h-8 text-center rounded-lg  text-white hover:text- bg-[#cd8193]   font-bold">HOME DECOR</p>
                </div>
            </div>
      </div>
   
    <div  class=" product category">
      {{-- <h2 class="text-center font-bold">CROCHET ART</h2> --}}
          <div  class=" cardd card pro p-2 w-full">
              <img src="./asset/images/f2.jpg" alt="" class=" image w-full h-64 bg-gray-300 rounded-lg ">
              {{-- <h3 class="w-56 h-2 mt-4 font-bold rounded-lg" title="">title</h3> --}}
              <div class="flex justify-center">
                 <p class="  btn my-8 w-36 h-8 text-center rounded-lg text-white hover:text- bg-[#cd8193] font-bold">CROCHET ART</p>
              </div>
          </div>
  </div>
  <div  class=" product category">
    {{-- <h2 class="text-center font-bold">EMBROIDERY ART</h2> --}}
        <div  class="product card pro p-2 w-full">
            <img src="./asset/images/e333.jpg" alt="" class="image w-full h-64 bg-gray-300 rounded-lg ">
            {{-- <h3 class="w-56 h-2 mt-4 font-bold rounded-lg" title="">title</h3> --}}
            <div class="flex justify-center">
               <p class="  btn my-8 w-36 h-8 text-center rounded-lg text-white hover:text- bg-[#cd8193]  font-bold ">EMBROIDERY ART</p>
            </div>
        </div>
</div>
  </div>
      </div>
    <div class=" p-4 flex justify-center" >
    <a href="{{url('shop')}}" class=" rounded-full  bg-violet-400 w-32 text-center h-8 text-white  hover:bg-violet-700 ">
        Show More
    </a>
   </div>
    </section>
   

<section>
    <div>
      <div class=" container px-4 py-2 mx-auto ">
        <ul class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 sm:grid-cols-1 xl:grid-cols-4 lg:grid-cols-3">
        
          <li class="promo">
            <img src="./asset/images/promonn.png" class="w-full h-50 bg-gray-300 rounded-lg" alt="">
            <p class="text">personalize work</p>
          </li>
          <li class="promo">
            <img src="./asset/images/promo3.png" class="w-full h-50 bg-gray-300 rounded-lg" alt="">
            <p class="text">cotton hight quality</p>
          </li>
          <li class="promo">
            <img src="./asset/images/new.png" class="w-full h-50 bg-gray-300 rounded-lg" alt="">
            <p class="text">Promotion </p>
          </li>
        </ul>
      </div>
    </div>
   </section>
    <footer class="bg-white   gap-8" >
      <div class=" p-8 flex justify-between">
        <div class="w-32 ">
          <img src="./asset/images/logov3.png" alt="">
        </div>
        <div>
          <a href="{{url('shop')}}"><ul class="font-bold   text-fuchsia-700 hover:text-fuchsia-900 " > SHOP</a>
            
            <a href="" class=" text-fuchsia-600 hover:text-fuchsia-800 "><li>HOME DECORATION</li></a>
            <a href="" class=" text-fuchsia-600 hover:text-fuchsia-800 "><li>EMBROIDERY ART</li></a>
            <a href="" class=" text-fuchsia-600 hover:text-fuchsia-800 "> <li>CROCHET ART</li></a>
          </ul> 
        </div>

        <div>
          <ul class="font-bold text-fuchsia-600 hover:text-fuchsia-800 ">INFORMATION
            <a href="" class=" text-fuchsia-600 hover:text-fuchsia-800 "> <li>ABOUT</li></a>
            <li class=" text-fuchsia-600 hover:text-fuchsia-800 ">FACEBOOK</li>
            <li  class=" text-fuchsia-600 hover:text-fuchsia-800 ">INSTAGRAM</li>
          </ul>
        </div>
      </div>

    </footer>
  
<style>
  .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.logo {
  position: absolute;
  top: 8px;
  left: 16px;
}
.product{
  cursor: pointer;
  /* background-color: rgb(154, 154, 246); */

}
.product:hover .pro {
  /* opacity: 0.3;
   */
   transform: scale(1.2);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.text {
  position: absolute; 
  bottom: 20px; 
  background: rgb(76, 14, 77);
  background: rgba(112, 4, 112, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 40px;
  padding: 40px;
  text-align: center;
}
.promo {
  position: relative;
 
}
.promo:hover .text {
  opacity: 2;
}

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>
</html>