@extends('dashboard')
    @section('order')

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  
            @if(session()->has('success'))
            {{-- <div class=""> --}}
               
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline"> {{session('success')}}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                      <svg class="fill-current h-6 w-6 text-green-500" role="button" type="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
            {{-- </div> --}}
            @endif

           
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product Title</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Price</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($orders as $order)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $order->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $order->user->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $order->title }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $order->quantity }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $order->total_price }}</td>
                {{-- <td class="px-6 py-4 whitespace-nowrap">{{ $order->status }}</td> --}}
                <td>
                    <form action="{{ route('update.order.status', $order->id) }}" method="POST">
                        @csrf
                        @method('put')
                        {{-- <select name="status" class="border-none"> --}}
                            <select name="status" class="text-white rounded px-4 py-1 {{ $order->status === 'paid' ? 'bg-green-500 ' : ($order->status === 'failed' ? 'bg-red-500 ' : 'bg-yellow-500 ') }}">

                        {{-- <select name="status" class="text-white rounded px-2 py-1 {{$order->status === 'paid'  ? ' bg-green-500 ':($order->status === 'failed' ? 'bg-red-500': 'bg-yellow-500  )'}}"> --}}
                            {{-- <select name="status" class="rounded-full px-2 py-1 {{$order->status === 'paid' ? 'bg-green-500 text-white' : 'bg-yellow-500 text-white'}}">
                                <option value="paid" {{ $order->status === 'paid' ? 'selected' : '' }}>Paid</option>
                                <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="failed" {{ $order->status === 'failed' ? 'selected' : '' }}>Failed</option>
                            </select> --}}



                            <option class="bg-white text-black" value="paid" {{ $order->status == 'paid' ? 'selected' : '' }}> Paid </option>
                            <option class="bg-white text-black" value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}> Pending</option>
                            <option class="bg-white text-black" value="failed" {{ $order->status == 'failed' ? 'selected' : '' }}> Failed </option>
                        </select>
                        <button class="" type="submit"><span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width=" 12px" height="12px" viewBox="0 0 24 24">

                                <title/>
                                
                                <g id="Complete">
                                
                                <g id="edit">
                                
                                <g>
                                
                                <path d="M20,16v4a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V6A2,2,0,0,1,4,4H8" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                
                                <polygon fill="none" points="12.5 15.8 22 6.2 17.8 2 8.3 11.5 8 16 12.5 15.8" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                
                                </g>
                                
                                </g>
                                
                                </g>
                                
                                </svg>
                        
                        </span></button>
                    </form>
                    
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    
         
    @endsection
  