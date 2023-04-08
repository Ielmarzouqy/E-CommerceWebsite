<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css
" rel="stylesheet">
{{-- @extends('dashboard')
@section('sub-category') --}}
<form class="cmxform form-horizontal" id="signupForm" method="post" action="">
    @csrf
        <div class="form-group ">
          <label for="CategoryName" class="control-label col-lg-2"> Category Name </label>
          <div class="col-lg-7">
            <input class=" form-control" name="name" type="text"/>
          </div>
        </div>
        <div class="form-group ">
          <label for="CategoryStatus" class="control-label col-lg-2"> shoose parent category </label>
          <div class="col-lg-7">
            <select class="form-control" name="parent_id">
              <option value="">Select Parent Category</option>

              @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
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
  {{-- @endsection --}}