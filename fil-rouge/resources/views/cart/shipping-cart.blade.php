<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/rippleui@1.11.0/dist/css/styles.css"
/>
<script src="https://cdn.tailwindcss.com"></script>

@extends('layouts.navbar')
<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Dashboard-user') }}
        </h2>
    </x-slot>
@section ('wishlist')
<div>
    
        <div class="flex w-50 overflow-x-auto">
            <table class=" my-16 table-hover table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
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
                                $cover = App\Models\Product::Where('id',$item->product_id)->get()->value('cover');

                            @endphp
                    
                            <td><img src="{{ asset('images/' . $cover) }}" alt="{{ $pro_name }}" class="w-40 h-40 bg-gray-300 rounded-lg "></td>
                            <td>{{$pro_name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>
                                <a href="{{route('removeitem', $item->id)}}" class=" btn btn-error right-4 py-2 text-center text-sm text-white  border border-primary rounded hover:bg-pink-500  transition uppercase font-roboto font-medium">remove</a>                                             
                            </td>
                        </tr>
                        @php
                            $total +=  $item->price;
                        @endphp
                    @endforeach
                    @if($total > 0)

                    <tr>
                        <td></td>
                        <td>total</td>
                        <td class="font-bold text-black">{{$total}}</td>
                       

                        <td id=""> 
                            <a href="{{route('shippinginfo')}}"class="  bg-fuchsia-500   btn  right-4 py-2 text-center text-sm text-white  border border-primary rounded hover:bg-fuchsia-700 transition uppercase font-roboto font-medium">
                            checkout now
                        </a>
                    </td>
                    </tr>
                    @endif
</div>


<div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden">
  <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <div class="inline-block align-top right-0 mt-10 mr-6 bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full lg:max-w-2xl lg:w-4/5">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

        <!-- **********Modal content here ********-->

        <div class="container py-4 flex items-center gap-3">
            <a href="" class="text-primary text-base">
                <i class="fa-solid fa-house"></i>
            </a>
            <span class="text-sm text-gray-400">
                <i class="fa-solid fa-chevron-right"></i>
            </span>
            <p class="text-gray-600 font-medium">Checkout</p>
        </div>
       
        <form action="{{route('shipping')}}" method="post">
            @csrf
              
            <div class="container grid grid-cols-12 items-start pb-16 pt-4 gap-6">

                <div class="col-span-8 border border-gray-200 p-4 rounded">
                    <h3 class="text-lg font-medium capitalize mb-4">Checkout</h3>
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="first-name" class="  text-gray-600">First Name <span
                                        class="text-primary">*</span></label>
                                <input type="text" name="first_name" id="first-name" class=" border border-indigo-600 input-box" required>
                            </div>
                            <div>
                                <label for="last-name" class="text-gray-600">Last Name <span
                                        class="text-primary">*</span></label>
                                <input type="text" name="last_name" id="last-name" class="border border-indigo-600 input-box" required>
                            </div>
                        </div>
                    
                     
                        <div>
                            <label for="address" class="text-gray-600">Street address</label>
                            <input type="text" name="adress" id="address" class="border border-indigo-600 input-box" requuired>
                        </div>
                        <div>
                            <label for="city" class="text-gray-600">City</label>
                            <input type="text" name="city_name" id="city" class=" border border-indigo-600 input-box" required>
                        </div>
                        <div>
                            <label for="city" class="text-gray-600">Code Postal</label>
                            <input type="text" name="postal_code" id="city" class=" border border-indigo-600 input-box" required>
                        </div>
                        <div>
                            <label for="phone" class="text-gray-600">Phone number</label>
                            <input type="text" name="phone_number" id="phone" class="border border-indigo-600 input-box" required>
                        </div>
                        <div>
                            <label for="email" class="text-gray-600">Email address</label>
                            <input type="email" name="email" id="email" class="border border-indigo-600 input-box" required>
                        </div>
                        <div class="hidden">
                            <label for="price" class="text-gray-600">price</label>
                            <input type="number" name="price" id="price" class="border border-indigo-600 input-box" >
                        </div>
                    
                    </div>
        
                </div>
        
            </div>
    
            
        </div>
        <div class="flex justify-end">
          <button id="close-modal" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mr-2">Cancel</button>
          <button  type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">order</button>
        </div>
    </form>
      </div>
    </div>
  </div>
</div>
</x-app-layout>

<script>



const openModalButton = document.getElementById('open-modal');
const closeModalButton = document.getElementById('close-modal');
const modal = document.getElementById('modal');

openModalButton.addEventListener('click', function() {
  modal.classList.remove('hidden');
});

closeModalButton.addEventListener('click', function() {
  modal.classList.add('hidden');
});
</script>


                @endsection
                {{-- <div class="bg-white   gap-8" >
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
                </div> --}}