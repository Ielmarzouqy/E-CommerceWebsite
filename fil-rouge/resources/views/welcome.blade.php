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
                            <img src="./asset/images/logov.png" class="w-40 " alt="logo">
                        </div>
                        
                </div>
            @endif
            {{-- image for slide --}}
            <div class="p-2 flex justify-center">
                {{-- <img src="./asset/images/flower1.jpg" class="rounded-lg brightness-50 " alt=""> --}}
                <img src="./asset/images/cov2.jpeg" class="rounded-lg brightness-50 " alt="">

                <div class="centered  lg:font-smaller  p-8 rounded-lg  text-white">VINTAGE ROSE
                  Exciting new additions to our Vintage Rose collection - inspired by all things vintage + romantic... ✨🥀</div>
                
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
          <h1 class="text-center font-bold text-black text-2xl">title</h1>
          <p class="font-bold text-center text-[#cd8193] text-xl">20$</p>
        {{-- <button class="rounded-full mx-end bg-violet-400 w-24 h-8 text-white hover:bg-violet-700">add to card</button> --}}

        </div>
       
       
      
    </div class="flex justify-center" >
    <a href="{{url('shop')}}" class="btn rounded-full p-4 text-[#cd8193] bg-white text-center flex justify-center   hover:bg-[#cd8193] ">  <span class="hover:text-white group-hover:text-white" >
      Show More
    </span>
     </a>

   {{-- <section>
    <div>
      <img src="" alt="">
      <img data-srcset="//cdn.shopify.com/s/files/1/2026/1775/articles/unnamed_37b5ffa9-38e4-47a5-ae00-74506d79fdd8_570x.jpg?v=1679667910" alt="Monthly Phone Wallpaper" class=" ls-is-cached lazyloaded" loading="lazy" srcset="//cdn.shopify.com/s/files/1/2026/1775/articles/unnamed_37b5ffa9-38e4-47a5-ae00-74506d79fdd8_570x.jpg?v=1679667910">
      <p>New month, new phone wallpaper! 🌜✨
        This March, we are bringing you the very special Japanese Sakura season perfect for spring time 🌸✨ Get extra organised and pair with our free calendar printable!
        As always, you can use it digitally on your mobile phone, or print + stick into your fav bullet journal spread for a scrapbook aesthetic!
        To get yours, simply pop your email address into the box below!</p>
    </div>
    <div class="carousel-container">
      <ul class="carousel-items">
        <li class="carousel-item">Item 1</li>
        <li class="carousel-item">Item 2</li>
        <li class="carousel-item">Item 3</li>
      </ul>
    </div> 
    <div class="carousel-container flex justify-center items-center">
      <ul class="carousel-items flex">
        <li class="carousel-item w-64 h-64 bg-gray-300 flex-shrink-0"></li>
        <li class="carousel-item w-64 h-64 bg-gray-400 flex-shrink-0"></li>
        <li class="carousel-item w-64 h-64 bg-gray-500 flex-shrink-0"></li>
      </ul>
    </div>
    
   </section> --}}


   <section>
    <div>
      <div>
        <ul>
          <li>
            <p>Free Shipping</p>
          </li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>
   </section>
    <footer class="bg-white p-4  gap-8 flex justify-center" >
     
      <ul class="font-bold" > info
        <li></li>
        <li>blog</li>
        <li>contanc</li>
      </ul> 
      <ul class="font-bold">shop
        <li>wall art</li>
        <li>crochet</li>
        <li>flower</li>
      </ul>


    </footer>
  
<script>
  $(document).ready(function() {
  $('.carousel-items').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true
  });
});
</script>
<style>
  .carousel-items {
  display: flex;
  transition: transform 0.5s ease-in-out;
}

.carousel-items.active {
  transform: translateX(-50%);
}
.carousel-container:hover .carousel-items {
  transform: translateX(-50%);
}
</style>
</body>
</html>