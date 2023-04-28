
@extends('layouts.navbar')
@section ('checkout')

{{-- <link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/rippleui@1.11.0/dist/css/styles.css"
/> --}}


{{-- <script src="https://cdn.tailwindcss.com"></script> --}}


 <!-- breadcrumb -->
 <div class="container py-4 flex items-center gap-3">
    <a href="../index.html" class="text-primary text-base">
        <i class="fa-solid fa-house"></i>
    </a>
    <span class="text-sm text-gray-400">
        <i class="fa-solid fa-chevron-right"></i>
    </span>
    <p class="text-gray-600 font-medium">Profile</p>
</div>
@if (session()->has('alert'))
    <div class="flex bg-blue-100 rounded-lg p-4 mb-4 text-sm text-blue-700">
        {{session('alert')}}
    </div>




@endif

<!-- wrapper -->
<div class="container grid grid-cols-12 items-start gap-6 pt-4 pb-16">

    <!-- wishlist -->

    <div class="col-span-12  space-x-8 space-y-4">
        {{-- @php
                    $total = 0;
                @endphp --}}
                @foreach ($cart_items as $item)
                     
                        @php
                            // $pro_name = App\Models\Product::Where('id',$item->product_id)->get()->value('title');
                            // $cover = App\Models\Product::Where('id',$item->product_id)->get()->value('cover');
                            // $avbl = App\Models\Product::Where('id',$item->product_id)->get()->value('Availability');



                        @endphp
        <div class="flex items-center justify-between border gap-6 p-4 border-gray-200 rounded">
            <div class="w-28">
                <img src="{{ asset('images/' . $pro_cover) }}" alt="product 6" class="w-full">
            </div>
            <div class="w-1/3">
                <h2 class="text-gray-800 text-xl font-medium uppercase">{{$pro_title}}</h2>
                {{-- <p class="text-gray-500 text-sm">Availability: <span class="{{$pro->Availability ==="in stock"?'text-green-600':'text-red-600'}}">{{$pro->Availability}}</span></p> --}}
            </div>
            <div class="text-primary text-lg font-semibold">{{$item->price}}</div>
          
                @php
                $total +=  $item->price;
            @endphp
       
       
            <div class="text-gray-600 cursor-pointer hover:text-primary">
                <i class="fa-solid fa-trash"></i>
            </div>
        </div>
        @endforeach
        <div  class="flex  p-2 gap-4 justify-center">
            <form action="" method="post">
                @csrf
                <input class=" bg-red-600 text-white rounded-lg p-2 transition uppercase font-roboto" type="submit" value="cancel" name="" id="">
            </form>
            <form action=" {{route('placeorder')}}" method="post" >
                @csrf
                    <button type="submit" class="bg-fuchsia-700 text-white  p-2 text-center text-sm   hover:bg-fuchsia-900 font-bold  rounded   transition uppercase font-roboto ">
                        Place Order
                    </button>
            </form>
        </div>
        
    </div>
</div>              
                @endsection