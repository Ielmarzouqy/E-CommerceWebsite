<!-- component -->
@extends('layouts.sidebar')
@section('category')

<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
      <form action="" method="POST">
        <div class="mb-5">
          <label
            for="name"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            name
           </label>
          <input
            type="name"
            name="name"
            id="name"
            placeholder="Name"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        
          <button
            class="hover:shadow-form rounded-md bg-[rgb(89,149,26)] py-3 px-8 text-base font-semibold text-white outline-none"
          >
            Add category
          </button>
        </div>
      </form>
    </div>
  </div>
  @endsection