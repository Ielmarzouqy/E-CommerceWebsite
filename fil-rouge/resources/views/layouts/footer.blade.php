<script src="https://cdn.tailwindcss.com"></script>




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
    @yield('home')
    @yield('shop')

    
  
 