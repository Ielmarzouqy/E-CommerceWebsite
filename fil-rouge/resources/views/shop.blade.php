

  <script src="https://cdn.tailwindcss.com"></script>

  <section class="bg-white ">
      <div class="container px-6 py-10 mx-auto animate-pulse">
          <h1 class="w-48 h-2 mx-auto bg-gray-200 rounded-lg "></h1>
  
          <p class="w-64 h-2 mx-auto mt-4 bg-gray-200 rounded-lg "></p>
          <p class="w-64 h-2 mx-auto mt-4 bg-gray-200 rounded-lg sm:w-80 "></p>
  
          <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 sm:grid-cols-1 xl:grid-cols-4 lg:grid-cols-4">
  
           
        </div>
        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 sm:grid-cols-1 xl:grid-cols-4 lg:grid-cols-4">

        @foreach ($productsByCategory as $category => $products)
        @foreach ($products as $product)

    <div class="category">
        <h2>{{ $category }}</h2>

            <div class="product w-full">
                {{-- <p>{{ $product->description }}</p> --}}
                <img src="{{ asset('images/' . $product->cover) }}" alt="{{ $product->title }}" class="w-full h-64 bg-gray-300 rounded-lg ">
                <h3 class="w-56 h-2 mt-4  rounded-lg">{{ $product->title }}</h3>

                <p class="w-24 h-2 mt-4 rounded-lg">Price: {{ $product->price }}</p>
            </div>
    </div>
    @endforeach

@endforeach
</div>


      </div>
  </section>
  
  