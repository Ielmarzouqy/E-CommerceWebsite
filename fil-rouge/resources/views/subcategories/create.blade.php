<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css
" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js
"></script>

  <style>

	.content{
		
		margin-left: 24%;
		background-color: aliceblue
	}
  </style>
@extends('dashboard')
@section('sub-category')
  <div class=" wrapper  content" >
	<div class="row">
		<div class="col-lg-12 p-4">
			{{-- <ul class="breadcrumb panel">
				<li> <a href="dashboard.php"><i class="fa fa-home"></i> Home </a> </li>
				<li> <a href="dashboard.php"> Dashboard </a> </li>
				<li class="active"> Create Sub Category </li>
			</ul> --}}
			<section class="panel ">
				<header class="panel-heading text-blod">
					<h1>CREATE A NEW SUB CATEGORY<h1>
				</header>
				<div class="panel-body ">
					<div class="form p-4">
						<form class="form-horizontal" id="subCategory" method="post" action="{{route('subcategories.store')}}" enctype="multipart/form-data">
							@csrf
							<div class="form-group p-2">
								<label for="SubCategoryName" class="control-label col-lg-2">Sub-Category </label>
								<div class="col-lg-7">
									<input class="form-control" id="subcategory_name" name="name" type="text" />
								</div>
							</div>
							<div class="form-group p-2">
								<label for="CategoryStatus" class="control-label col-lg-2"> shoose category </label>
								<div class="col-lg-7">
								  <select class="form-control" name="id">
									<option value="">Select Parent Category</option>
					  
									@foreach ($categories as $category)
									  <option value="{{ $category->id }}">{{ $category->name }}</option>
									@endforeach
								  </select>
								</div>
							  </div>
							<div class="form-group p-2">
								<div class="col-lg-offset-2  col-lg-10">
									<button name="submit" class="btn btn-success text-success" type="submit"> Save </button>
									<button class="btn btn-info " type="reset"> Reset </button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
@endsection
