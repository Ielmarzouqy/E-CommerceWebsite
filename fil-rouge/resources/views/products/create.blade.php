    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css
    " rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js
    "></script> --}}
{{-- 
    <link
   rel="stylesheet"
   href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css"
/> --}}
    @extends('dashboard')
    @section('create')
    <style>
    
        .cnt{
          
          background-color: rgb(232, 190, 237)
        }
      </style>
        

        <section class="bg-gray-2 rounded-xl">
          <div class="p-8 shadow-lg">
            @if (session()->has('alert'))
            <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700">
                {{ session('alert') }}
            </div>
        @endif
            <form class="form-horizontal" method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
              @csrf

              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <label class="sr-only" for="name">Title of Product</label>
                <input class="input input-solid rounded-lg" name="title" placeholder="title" type="text" id="name" />
              </div>
        
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              
        
                <div class=" ">
                  <label for="ProductStatus" class="sr-only">Category</label>
                    <div class="">
                        <select class="input input-solid rounded-lg" name="category_id" >
                            <option value="">Select a Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" >{{ $category->name }}</option>
                
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="">
                  <label for="ProductStatus" class="sr-only"> Subcategory </label>
                  <div class="">
                        <select name="sub_category" id="subcategory_id" class="input input-solid rounded-lg" >
                        <option value="">Select a Subcategory</option>
                            @foreach ($categories as $category)
                                    @foreach ($category->children as $child)
                                        <option value="{{ $child->id }}" >{{ $child->name }}</option>
                                    @endforeach
                            @endforeach
                        </select>
                    </div>
                </div>


                <div>
                  <label class="sr-only" for="quantity">Quantity</label>
                  <input class="input input-solid rounded-lg"  name="quantity" placeholder="quantity" type="number" id="quantity" />
                </div>

                <div>
                  <label class="sr-only" for="price">Price</label>
                  <input class="input input-solid rounded-lg" name="price" placeholder="Price" type="number" id="price" />
                </div>
              </div>

        
              <div class="w-full">
                <label class="sr-only" for="description">Description</label>
        
                <textarea class="textarea textarea-solid max-w-full" name="description" placeholder="description" rows="8" id="description"></textarea>
              </div>
              <div>
                <label class="sr-only" for="image">Image</label>
                <input type="file" name="cover" class="input input-solid"  set-to="div7" multiple required />
              </div>
              
              <div>
                <label class="sr-only border-4" for="slug">Slug</label>
                <input class="input input-solid rounded-lg   " name="slug" placeholder="Slug" type="" id="slug" />
              </div>
              <div class=" flex justify-center">
                <button name="create_product" class="btn bg-red-500 btn-success" type="submit"> Save </button>
                {{-- <button type="submit" style="background-color:rgb(184, 115, 249);" class="rounded-lg h-8 w-20 text-white  btn-block">Save</button> --}}
              </div>
            </form>
          </div>
        </section>
          @endsection