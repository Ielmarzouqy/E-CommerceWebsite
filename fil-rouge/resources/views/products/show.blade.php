<script src="https://cdn.tailwindcss.com"></script>

{{-- <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 sm:grid-cols-1 xl:grid-cols-4 lg:grid-cols-4">
    <div class="category">
            <div class="product p-4 w-full">
                <img src="{{ asset('images/' . $product->cover) }}" alt="{{ $product->title }}" class="w-full h-64 bg-gray-300 rounded-lg ">
                <h3 class="w-56 h-2 mt-4 font-bold rounded-lg">{{ $product->title }}</h3>

                <p class="w-24 h-2 mt-4 rounded-lg">Price: {{ $product->price }}</p>
                <a href="" >
                <button class="btn my-8 w-24 h-8 rounded-lg text-white bg-fuchsia-600">see more</button>
                </a>
        <form action="{{url('addtocart')}}" method="post">
        @csrf
        <input hidden type="text" value="{{$product->id}}" name="product_id">
            <div class="form-group border-gray-950">
        <input hidden type="text" value="{{$product->price}}" name="price">

                <label class="" for="">how many pics?</label>
                <input class="border-gray-950 border-2 border-spacing-1" type="number" name="quentity" id="">
            </div>

            <div class="groups-btn-tree p-4 ">                 
                <input data-btn-addtocart="" style="
               
                
                padding: 13px !important;
                
                margin-bottom: 20px;
                width: 100%;
                text-transform: uppercase;
                letter-spacing: 1.5px;
                font-weight: 700;" type="submit" name="add" class="btn bg-[#de94a5]  rounded-lg text-white" id="product-add-to-cart" value="Add To Cart " data-form-id="#add-to-cart-form">
                               
              </div>

        </form>
                    
            </div>
</div> --}}




@extends('layouts.navbar')
@section ('detail')
<div class=" grid justify-items-stretch p-4">
    <div class="container py-4 flex items-center">
        <a href="../index.html" class="text-primary text-base">
            <i class="fa-solid fa-house"></i>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
        <p class=" justify-self-center text-gray-600 font-medium">Product</p>
    </div>
    <!-- ./breadcrumb -->

    <!-- product-detail -->
    <div class="container flex items-center justify-evenly ">
        <div>
            <img src="{{ asset('images/' . $product->cover) }}" alt="{{ $product->title }}" width="450 px" class=" ">
           
        </div>

        <div>
            <h2 class="text-3xl font-medium uppercase mb-2">{{$product->title}}</h2>
            <div class="flex items-center mb-4">
                <div class="flex gap-1 text-sm text-yellow-400">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                </div>
                {{-- <div class="text-xs text-gray-500 ml-3">(150 Reviews)</div> --}}
            </div>
            <div class="space-y-2">
                <p class="text-gray-800 font-semibold space-x-2">
                    <span>Availability: </span>
                    <span class="text-green-600">In Stock</span>
                </p>
               
                
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Category: </span>
                    <span class="text-gray-600">{{$product->category->name}}</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">SKU: </span>
                    <span class="text-gray-600">BE45VGRT</span>
                </p>
            </div>
           

            <p class="mt-4 text-gray-600">  <span class="text-gray-800 font-semibold">Description: <br></span>{{$product->description}}</p>

            <form action="{{url('addtocart')}}" method="post">
                @csrf
                <div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">
                    <p class="text-xl text-fuchsia-600 font-semibold"> {{$product->price}} </p>
                    {{-- <p class="text-base text-gray-400 line-through">$55.00</p> --}}
                </div>
            <div class="form-group border-gray-950">
                <input hidden type="text" value="{{$product->price}}" name="price">
        
                        <label class="text-sm text-gray-800 uppercase" for="">how many pics?</label>
                        <input class="border-gray-950 border-2 border-spacing-1  flex  text-gray-600 divide-x p-1 font-bold divide-gray-300 w-max" type="number" value="1" name="quentity" id="">
                    </div>

            <div class=" flex gap-3  border-gray-200 pb-5 pt-5">
                {{-- <a href="#"
                    class="bg-primary border border-primary text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-primary transition">
                    <i class="fa-solid fa-bag-shopping"></i> Add to cart
                </a> --}}
             <input hidden type="text" value="{{$product->id}}" name="product_id">            
                <div class="groups-btn-tree grid md:grid-cols-2 gap-4 sm:grid-cols-1 p-4 ">                 
                    <input data-btn-addtocart="" style=" letter-spacing: 1.5px;font-weight: 700;" type="submit" name="add" class="btn bg-[#de94a5]  border   px-8 py-2 font-medium  uppercase flex items-center gap-2 hover:bg-[#ce6d84] transition  rounded-lg text-white" id="product-add-to-cart" value="Add To Cart " data-form-id="#add-to-cart-form">
                    <a href="#"
                        class="border btn border-blue-300 text-sky-600 px-8 py-2 font-medium rounded uppercase flex items-center gap-2 space-x-2 hover:text-white bg-white hover:bg-sky-500 transition">
                        <i class="fa-solid fa-heart"></i> Wishlist
                    </a>
                </div>
            </div>
        </form>

        </div>
    </div>
    <!-- ./product-detail -->
    <!-- description -->
    <div class=" pb-16">
        <h3 class="border-b border-gray-200 font-roboto text-gray-800 pb-3 p-4 font-medium">Product details</h3>
        <div class="w-3/5 pt-6">
            <div class="text-gray-600"> {{$product->description}}</div>
        </div>
    </div>
    <!-- ./description -->

    <!-- related product -->
    {{-- <div class="container pb-16">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">Related products</h2>
        <div class="grid grid-cols-4 gap-6">
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="../assets/images/products/product1.jpg" alt="product 1" class="w-full">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                            title="view product">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                            title="add to wishlist">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer
                            Chair</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 line-through">$55.90</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
                    to cart</a>
            </div>
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="../assets/images/products/product4.jpg" alt="product 1" class="w-full">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                            title="view product">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                            title="add to wishlist">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Bed
                            King Size</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 line-through">$55.90</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
                    to cart</a>
            </div>
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="../assets/images/products/product2.jpg" alt="product 1" class="w-full">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                            title="view product">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                            title="add to wishlist">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            Couple Sofa</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 line-through">$55.90</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
                    to cart</a>
            </div>
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="../assets/images/products/product3.jpg" alt="product 1" class="w-full">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                            title="view product">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                            title="add to wishlist">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            Mattrass X</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 line-through">$55.90</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
                    to cart</a>
            </div>
        </div>
    </div> --}}
    <!-- ./related product -->
</div>
    @endsection
   

