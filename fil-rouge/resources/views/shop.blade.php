
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
                <h3 class="w-56 h-2 mt-4 font-bold rounded-lg" title="{{$product->title}}">{{ Str::limit($product->title,18)}}</h3>

                <p class="w-24 h-2 mt-4 rounded-lg">Price: {{ $product->price }}</p>
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
  
  @endsection