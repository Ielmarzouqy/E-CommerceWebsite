
    {{-- <select class="form-control" name="category_id" required>
        <option value="">Select a Category</option>

        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id === old('category_id') ? 'selected' : '' }}>{{ $category->name }}</option>
            @if ($category->children)
                @foreach ($category->children as $child)
                    <option value="{{ $child->id }}" {{ $child->id === old('category_id') ? 'selected' : '' }}>&nbsp;&nbsp;{{ $child->name }}</option>
                @endforeach
            @endif
        @endforeach
    </select> --}}


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css
" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js
"></script>
@extends('dashboard')
@section('create')
<style>

    .cnt{
      margin-left: 25%;
      background-color: rgb(234, 174, 244)
    }
  </style>
    <div class="wrapper cnt">
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <ul class="breadcrumb panel">
            <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li class="active">Create Product</li>
          </ul>
          <section class="panel">
            <header class="panel-heading">
              CREATE PRODUCTS
            </header>
            <div class="panel-body">
              
              
                {{-- #== INSERT CONFIRMATION MESSAGE
               '<div class="alert alert-success fade in"> 
                          <button type="button" class="close close-sm" data-dismiss="alert"> <i class="fa fa-times"></i> </button>
                          THE PRODUCT DATA IS <strong> INSERTED SUCCESSFULLY </strong>
                        </div>';
                  
                  else
                  
                     '<div class="alert alert-warning fade in"> 
                          <button type="button" class="close close-sm" data-dismiss="alert"> <i class="fa fa-times"></i> </button> 
                          SOMETHING WENT WRONG TO INSERT DATA! <strong> PLEASE RECHECK </strong>
                        </div>'; --}}
              
              <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                <div class="form-group ">
                  <label for="ProductStatus" class="control-label col-lg-2">Category</label>
                  <div class="col-lg-7">
                    
                    <select class="form-control" name="category_id" required>
        <option value="">Select a Category</option>
{{-- {{print_r($categories)}}      --}}
   @foreach ($categories as $category)
            <option value="{{ $category->id }}" >{{ $category->name }}</option>
            {{-- @if ($category->children)
                @foreach ($category->children as $child)
                    <option value="{{ $child->id }}" {{ $child->id === old('category_id') ? 'selected' : '' }}>&nbsp;&nbsp;{{ $child->name }}</option>
                @endforeach
            @endif --}}
        @endforeach
    </select>
                  </div>
                </div>
                <div class="form-group ">
                  <label for="ProductStatus" class="control-label col-lg-2"> Subcategory </label>
                  <div class="col-lg-7">
                    <select name="subcategory_id" id="subcategory_id" class="form-control" required>
                      <option value="">Select a Subcategory</option>
                      @foreach ($category->children as $child)
                      <option value="{{ $child->id }}" {{ $child->id === old('category_id') ? 'selected' : '' }}>{{ $child->name }}</option>
                  @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="ProductName" class="col-lg-2 col-sm-2 control-label"> Product Name </label>
                  <div class="col-lg-7">
                    <input type="text" name="product_name" class="form-control" id="product_name" required>
                  </div>
                </div>								
                <div class="form-group">
                  <label for="ProductSummary" class="col-lg-2 col-sm-2 control-label"> Product Summary </label>
                  <div class="col-lg-10">
                    <div class="form-group">
                      <div class="col-md-10">
                        <textarea name="product_summary" class="form-control" id="summerOne" rows="9" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>								
                <div class="form-group">
                  <label for="ProductDetails" class="col-lg-2 col-sm-2 control-label"> Product Details </label>
                  <div class="col-lg-10">
                    <div class="form-group">
                      <div class="col-md-10">
                        <textarea name="product_details" class="form-control" id="summerTwo" rows="9" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>								
                <div class="form-group">
                  <label for="ProductQuantity" class="col-lg-2 col-sm-2 control-label">Product Quantity</label>
                  <div class="col-lg-7">
                    <input type="number" name="product_quantity" class="form-control" id="product_quantity" required>
                  </div>
                </div>								
                <div class="form-group">
                  <label for="ProductPrice" class="col-lg-2 col-sm-2 control-label"> Product Price </label>
                  <div class="col-lg-7">
                    <input type="number" step="any" name="product_price" class="form-control" id="product_price" required>
                  </div>
                </div>
                <div class="form-group ">
                  <label for="ProductStatus" class="control-label col-lg-2"> Product Status </label>
                  <div class="col-lg-7">
                    <select name="product_status" class="form-control" required>
                      <option>Out of Stock</option>
                      <option>In Stock</option>
                    </select>
                  </div>
                </div>						
                <div class="form-group ">
                  <label for="ProductStatus" class="control-label col-lg-2"> Product Feature </label>
                  <div class="col-lg-7">
                    <select name="product_featured" class="form-control" required>
                      <option>NO</option>
                      <option>YES</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2 "> Product Master Image </label>
                  <div class="controls col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <span class="btn btn-default btn-file">
                        <input type="file" name="product_master_image" class="default" onchange="readURL(this);" set-to="div7" required />
                      </span>
                      <span class="fileupload-preview" style="margin-left:5px;"></span>
                      <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="ProductName" class="col-lg-2 col-sm-2 control-label"> Product Tags </label>
                  <div class="col-md-7">
                    <input type="tags" name="product_tag" id="tag-input1" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-5">
                    <button name="create_product" class="btn btn-success" type="submit"> Save </button>
                    <button class="btn btn-default" type="reset"> Reset </button>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    </div>
      @endsection