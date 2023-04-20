<!-- component -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css
" rel="stylesheet">
@extends('dashboard')
@section('category')

<div class="flex items-top bg-yellow-300 justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
      
        @if (session()->has('alert'))
            <div class="flex bg-blue-100 rounded-lg p-4 mb-4 text-sm text-blue-700">
                {{ session('alert') }}
            </div>
        @endif

      <form class="cmxform form-horizontal" id="signupForm" method="post" action="{{route('category.update', ['category'=>$cate_to_up->id])}}">
        @csrf
        @method('put')
            <div class="form-group ">
              <label for="CategoryName" class="control-label col-lg-2">  Category Name </label>
              <div class="col-lg-7">
                <input class=" form-control"  value="{{$cate_to_up->name}}" name="name" type="text"/>
              </div>
            </div>
           
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <button name="create_category" class="btn btn-success" type="submit"> update </button>
                <button class="btn btn-default" type="reset"> Reset </button>
              </div>
            </div>
      </form>

     
    </div>
  </div>
  @endsection