@extends('dashboard')
    @section('index')

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  
            

           
                <div class="">
                    <table class="table-hover table">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>cover</th>
                                {{-- <th>Category</th> --}}
                                <th>Aviability</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
               
                            <tr>
                                <th>3</th>
                                <td>{{$product->title}}</td>
                                <td> {{ Str::limit($product->description,22)}}</td>
                                <td>{{$product->price}}</td>
                               
                                <td>{{$product->quantity}}</td>
                                <td> <img src="{{ asset('images/' . $product->cover)}}" alt=""> </td>
                              
                                <td><span class="{{$product->Availability === "in stock" ? '  w-16 h-4 text-green-500': 'text-red-500  w-16 h-4 '}}">{{$product->Availability}}</span>
                                </td>
                                <td class="flex gap-2">
                                    <a href="{{route('editproduct',$product->id)}}">
                                        <button class="  gap-2 btn btn-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 18.414062 2 C 18.158062 2 17.902031 2.0979687 17.707031 2.2929688 L 15.707031 4.2929688 L 14.292969 5.7070312 L 3 17 L 3 21 L 7 21 L 21.707031 6.2929688 C 22.098031 5.9019687 22.098031 5.2689063 21.707031 4.8789062 L 19.121094 2.2929688 C 18.926094 2.0979687 18.670063 2 18.414062 2 z M 18.414062 4.4140625 L 19.585938 5.5859375 L 18.292969 6.8789062 L 17.121094 5.7070312 L 18.414062 4.4140625 z M 15.707031 7.1210938 L 16.878906 8.2929688 L 6.171875 19 L 5 19 L 5 17.828125 L 15.707031 7.1210938 z"/></svg>
                                            edit
                                        </button>
                                    </a>
                                    <form action="{{route('products.destroy',$product->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    <button class=" gap-2 btn btn-error">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32px" height="32px">
                                            <path d="M 15 4 C 14.476563 4 13.941406 4.183594 13.5625 4.5625 C 13.183594 4.941406 13 5.476563 13 6 L 13 7 L 7 7 L 7 9 L 8 9 L 8 25 C 8 26.644531 9.355469 28 11 28 L 23 28 C 24.644531 28 26 26.644531 26 25 L 26 9 L 27 9 L 27 7 L 21 7 L 21 6 C 21 5.476563 20.816406 4.941406 20.4375 4.5625 C 20.058594 4.183594 19.523438 4 19 4 Z M 15 6 L 19 6 L 19 7 L 15 7 Z M 10 9 L 24 9 L 24 25 C 24 25.554688 23.554688 26 23 26 L 11 26 C 10.445313 26 10 25.554688 10 25 Z M 12 12 L 12 23 L 14 23 L 14 12 Z M 16 12 L 16 23 L 18 23 L 18 12 Z M 20 12 L 20 23 L 22 23 L 22 12 Z"/></svg>
                                        
                                        delete
                                    </button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                
               
         
    @endsection