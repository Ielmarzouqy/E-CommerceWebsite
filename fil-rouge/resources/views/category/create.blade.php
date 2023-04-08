<!-- component -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css
" rel="stylesheet">
@extends('dashboard')
@section('category')

<div class="flex items-top justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
      {{-- <form action="{{ route('categories.store') }}" method="POST">
        @csrf
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
        <div class="hover:shadow-form rounded-md bg-green-500 py-3 px-8 text-base font-semibold text-black outline-none">
          <button type="submit" class="hover:shadow-form rounded-md bg-green-500 py-3 px-8 text-base font-semibold text-black outline-none" 
          >Create</button>
        </div>
          {{-- <button
            class="hover:shadow-form rounded-md bg-[rgb(89,149,26)] py-3 px-8 text-base font-semibold text-white outline-none" 
          >
            Add categorymkjnjn jinininuip jihbjkllllllllllllllllllln ,jkmibuhbbhuuhybhhbbhbhbhhbu
          </button> --}}
        {{-- </div>
      </form> --}}

      <form class="cmxform form-horizontal" id="signupForm" method="post" action="{{ route('categories.store') }}">
        @csrf
            <div class="form-group ">
              <label for="CategoryName" class="control-label col-lg-2"> Category Name </label>
              <div class="col-lg-7">
                <input class=" form-control" name="name" type="text"/>
              </div>
            </div>
            <div class="form-group ">
              <label for="CategoryStatus" class="control-label col-lg-2"> Category Status </label>
              <div class="col-lg-7">
                <select class="form-control m-bot15" name="category_status">
                  <option value="Active"> Active </option>
                  <option value="Inactive"> Inactive </option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <button name="create_category" class="btn btn-success" type="submit"> Save </button>
                <button class="btn btn-default" type="reset"> Reset </button>
              </div>
            </div>
      </form>

     
    </div>
  </div>
  @endsection