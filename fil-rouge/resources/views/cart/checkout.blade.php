
@extends('layouts.navbar')
@section ('checkout')

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/rippleui@1.11.0/dist/css/styles.css"
/>


<script src="https://cdn.tailwindcss.com"></script>

    {{-- @if (session()->has('alert'))
        <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
        {{ session('alert') }}
    </div>
@endif --}}



      
{{-- <div class="flex w-50 overflow-x-auto">       
            <table class=" my-16 table-hover table">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Where</th>
                        <th>Description</th>
                                           
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($cart_items as $item)
                        <tr>    
                            @php
                                $pro_name = App\Models\Product::Where('id',$item->product_id)->get()->value('title');

                            @endphp
                            <td>{{$pro_name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->quantity}}</td>
                            
                        </tr>
                        @php
                            $total +=  $item->price;
                        @endphp
                    @endforeach
                    <tr>
                        <td></td>
                        <td>total</td>
                        <td>{{$total}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                    <input class="btn bg-red-500 text-white" type="submit" value="cancel" name="" id="">
                                </form>
                        </td>
                        
                        <td>
                            
                            <form action=" {{route('placeorder')}}" method="post" >
                                @csrf
                                <button type="submit" class="bg-fuchsia-500 btn  hover:bg-fuchsia-700 text-white font-bold py-2 px-4 rounded">
                                    Place Order
                                </button>
                            </form>
                        </td>
                    </tr>
</div> --}}
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


<!-- wrapper -->
<div class="container grid grid-cols-12 items-start gap-6 pt-4 pb-16">

    <!-- wishlist -->
    <div class="col-span-9 space-y-4">
        @php
                    $total = 0;
                @endphp
                @foreach ($cart_items as $item)
                    <tr>    
                        @php
                            $pro_name = App\Models\Product::Where('id',$item->product_id)->get()->value('title');
                            $cover = App\Models\Product::Where('id',$item->product_id)->get()->value('cover');


                        @endphp
        <div class="flex items-center justify-between border gap-6 p-4 border-gray-200 rounded">
            <div class="w-28">
                <img src="{{ asset('images/' . $cover) }}" alt="product 6" class="w-full">
            </div>
            <div class="w-1/3">
                <h2 class="text-gray-800 text-xl font-medium uppercase">{{$pro_name}}</h2>
                <p class="text-gray-500 text-sm">Availability: <span class="text-green-600">In Stock</span></p>
            </div>
            <div class="text-primary text-lg font-semibold">{{$item->price}}</div>
          
                @php
                $total +=  $item->price;
            @endphp
       
        <form action="" method="post">
            @csrf
                <input class="btn btn-error text-white" type="submit" value="cancel" name="" id="">
            </form>
                <form action=" {{route('placeorder')}}" method="post" >
                    @csrf
                    <button type="submit" class="bg-fuchsia-700 text-fuchsia-700   px-6 py-2 text-center text-sm   hover:bg-fuchsia-700 font-bold  rounded   transition uppercase font-roboto ">
                        Place Order
                    </button>
                </form>
            <div class="text-gray-600 cursor-pointer hover:text-primary">
                <i class="fa-solid fa-trash"></i>
            </div>
        </div>
        @endforeach
      
    </div>
</div>              
                @endsection