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

  {{-- <div class="wrapper">
	<div class="row">
		<div class="col-lg-12">
			<ul class="breadcrumb panel">
				<li> <a href="dashboard.php"><i class="fa fa-home"></i> Home </a> </li>
				<li> <a href="dashboard.php"> Dashboard </a> </li>
				<li class="active"> Create Sub Category </li>
			</ul>
			<section class="panel">
				<header class="panel-heading">
					CREATE A NEW SUB CATEGORY
				</header>
				<div class="panel-body">
					
					
					
					<div class="form">
						<form class="form-horizontal" id="subCategory" method="post" action="" enctype="multipart/form-data">
							<div class="form-group ">
								<label for="SubCategoryName" class="control-label col-lg-2">Sub Category Name</label>
								<div class="col-lg-7">
									<input class="form-control" id="subcategory_name" name="subcategory_name" type="text" />
								</div>
							</div>
							<div class="form-group ">
								<label for="CategoryName" class="control-label col-lg-2">Main Category Name</label>
								<div class="col-lg-7">
									<select name="category_id" id="category_id" class="form-control">
										<option>Select a Category</option>
										
										
										
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="SubCatBanner" class="control-label col-md-2 "> Sub Category Banner </label>
								<div class="controls col-md-9">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<span class="btn btn-default btn-file">
											<input name="subcategory_banner" type="file" class="default"  set-to="div5" required />
										</span>
										<span class="fileupload-preview" style="margin-left:5px;"></span>
										<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
									</div>
								</div>
							</div>
							<div class="form-group last">
								<label for="BannerPreview" class="control-label col-md-2"> Sub Category Preview </label>
								<div class="col-md-9">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="fileupload-new thumbnail" style="width: 400px; height: 200px;">
											<img src="http://www.placehold.it/400x200/EFEFEF/AAAAAA&amp;text=no+image" alt="" id="div5" style="width: 100%; height: 100%;"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group ">
								<label for="SubCategoryStatus" class="control-label col-lg-2"> Sub-Category Status </label>
								<div class="col-lg-7">
									<select name="subcategory_status" class="form-control m-bot15">
										<option> Active </option>
										<option> Inactive </option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button name="create_subcategory" class="btn btn-success" type="submit"> Save </button>
									<button class="btn btn-default" type="reset"> Reset </button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
		</div>
	</div>
</div> --}}