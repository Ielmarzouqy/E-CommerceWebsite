<!-- component -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css
" rel="stylesheet">
@extends('dashboard')
@section('category')

<div class="flex items-top bg-green-300 justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
      
      

      <form class="cmxform form-horizontal" id="signupForm" method="post" action="{{ route('category.store') }}">
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