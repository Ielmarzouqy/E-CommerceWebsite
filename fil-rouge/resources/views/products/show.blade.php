<script src="https://cdn.tailwindcss.com"></script>

<div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 sm:grid-cols-1 xl:grid-cols-4 lg:grid-cols-4">
    <div class="category">
        {{-- <h2>{{ $category }}</h2> --}}

            <div class="product p-4 w-full">
                {{-- <p>{{ $product->description }}</p> --}}
                <img src="{{ asset('images/' . $product->cover) }}" alt="{{ $product->title }}" class="w-full h-64 bg-gray-300 rounded-lg ">
                <h3 class="w-56 h-2 mt-4 font-bold rounded-lg">{{ $product->title }}</h3>

                <p class="w-24 h-2 mt-4 rounded-lg">Price: {{ $product->price }}</p>
                <a href="" >
                <button class="btn my-8 w-24 h-8 rounded-lg text-white bg-fuchsia-600">see more</button>
                </a>
        <form action="{{url('addtocart')}}" method="post">
        @csrf
        <input hidden type="text" value="{{$product->id}}" name="product_id">
            <div class="form-group bg-red-300">
        <input hidden type="text" value="{{$product->price}}" name="price">

                <label class="bg-red-200" for="">how many pics?</label>
                <input class="bg-red-200 border-spacing-1" type="number" name="quentity" id="">
            </div>


            <input type="submit" name="submit"class="font-bold text-orange-600" value="Add To Cart">
        </form>
                    
            </div>
    </div>
    {{-- <a href="{{url('addtocart')}}">route addtocart</a> --}}