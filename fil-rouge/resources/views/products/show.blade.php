{{-- <script src="https://cdn.tailwindcss.com"></script> --}}

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
        <p class=" justify-self-center text-fuchsia-600 font-medium">Product</p>
    </div>
    <!-- ./breadcrumb -->
    @if (session()->has('alert'))
    <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700">
        {{ session('alert') }}
    </div>
@endif

@if(session()->has('message'))
<div class="flex bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-yellow-700">
   {{(session())}}
</div>
@endif
@if(session('error'))
<div class= "text-red-600">
     *{{ session('error')}}
</div>

@endif
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
                    <span class="{{$product->Availability === "in stock" ? 'text-green-600': 'text-red-600'}}">{{$product->Availability}}</span>
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
                        <input class="border-gray-950 border-2 border-spacing-1  flex  text-gray-600 divide-x p-1 font-bold divide-gray-300 w-max" type="number" value="1" name="quantity" id="" {{$product->Availability !== "in stock" ? "disabled=true" :''}}>
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
 
</div>
<footer class="bg-violet-100   gap-8" >
    <div class=" p-8 flex justify-between">
      <div class="w-32 ">
        <img src="../asset/images/logov3.png" alt="">
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
    @endsection
   