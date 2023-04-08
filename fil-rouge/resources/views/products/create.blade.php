<!-- component -->
@extends('dashboard')
@section('create')

{{-- <div class="flex items-center justify-center p-12"> --}}
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    {{-- <div class="mx-auto w-full max-w-[550px]">
      <form action="" method="POST">
        <div class="mb-5">
          <label
            for="title"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Title
           </label>
          <input
            type="text"
            name="title"
            id="title"
            placeholder="Title"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
          <label
            for=""
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Category
          </label>
          <input
            type=""
            name="category"
            id="category"
            placeholder=""
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>

        <div class="form-group">
          <select class="form-control" name="parent_id">
            <option value="">Select Parent Category</option>

            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>

        
        <div class="mb-5">
          <label
            for=""
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Price
          </label>
          <input
            type="text"
            name="Price"
            id="Price"
            placeholder="Enter your Price"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
          <label
            for="description"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Description
          </label>
          <textarea
            rows="4"
            name="description"
            id="description"
            placeholder="Type your description"
            class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          ></textarea>
        </div>
        <div>
          <button
            class="hover:shadow-form rounded-md bg-[rgb(77,15,90)] py-3 px-8 text-base font-semibold text-white outline-none"
          >
            Add Product
          </button>
        </div>
      </form>
    </div>
  </div> --}}

  
    @endsection