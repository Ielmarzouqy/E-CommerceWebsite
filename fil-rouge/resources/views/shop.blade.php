
@extends('layouts.navbar')

@section ('shop')

  <script src="https://cdn.tailwindcss.com"></script>
  <section class="bg-white ">
      <div  id="shop" class="container px-6 py-10 mx-auto ">    
        @foreach ($productsByCategory as $category => $products)
        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 sm:grid-cols-1 xl:grid-cols-4 lg:grid-cols-4">
        @foreach ($products as $product)
    <div  class="category">
        {{-- <h2>{{ $category }}</h2> --}}

            <div  class=" cardd card product p-4 w-full">
                <img src="{{ asset('images/' . $product->cover) }}" alt="{{ $product->title }}" class="w-full h-64 bg-gray-300 rounded-lg ">
                {{-- <img src="{{ asset('images/' . $product->cover) }}" alt="{{ $product->title }}" class="absolute  "> --}}

                {{-- <div class="notval">Not available</div> --}}
                <h3 class="w-56 h-2 mt-4 font-bold rounded-lg" title="{{$product->title}}">{{ Str::limit($product->title,18)}}</h3>

                <p class="w-24 h-2 mt-4 rounded-lg">Price: {{ $product->price }}</p>
                <span class=" mt-4 {{$product->Availability === "in stock" ? '  w-16 h-4 text-green-500': 'text-red-500  w-16 h-4 '}}">{{$product->Availability}}</span>
                
                <a href="{{route('products.show',['product'=>$product['id']])}}" >
                <button class="btn my-8 w-30 h-8 rounded-lg text-white hover:text- bg-[#cd8193]">Learn More</button>
                </a>
               
            </div>
    </div>
    @endforeach


</div>

@endforeach

    </div>

  </section>

 
  <footer class="bg-violet-100   gap-8" >
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

{{-- @extends('layouts.footer') --}}
@endsection
  <style>
     .notval {
  /* position: absolute; */
  top: 50%;
  left: 40%;
  transform: translate(-50%, -50%);
}
  </style>