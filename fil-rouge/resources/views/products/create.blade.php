<!-- component -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css
" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js
"></script>
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
<style>

  .cnt{
    margin-left: 25%;
    background-color: aqua
  }
</style>
  <div class="wrapper cnt">
    <div class="row">
      <div class="col-lg-12">
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
                  
                  <select name="category_id" id="category_id" class="form-control" required>
                    <option value="">Select a Category</option> 
                    
                
                    
                  </select>
                </div>
              </div>
              <div class="form-group ">
                <label for="ProductStatus" class="control-label col-lg-2"> Subcategory </label>
                <div class="col-lg-7">
                  <select name="subcategory_id" id="subcategory_id" class="form-control" required>
                    <option value="">Select a Subcategory</option>
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
                <label class="control-label col-md-2"> Product Master Preview </label>
                <div class="col-md-9">
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 160px; height: 160px;">
                      <img style="height: 100%; width: 100%;" alt="" id="div7"/>
                    </div>
                  </div>
                </div>
              </div>
              
              <!--=*= PRODUCT ADDITIONAL IMAGE =*=-->
              <div class="d-flex d-inline">
                <div class="form-group">
                  <label class="control-label col-md-2 "> Product Additional Image </label>
                  <div class="controls col-md-3">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <span class="btn btn-default btn-file">
                        <input type="file" name="products_image_one" class="default" onchange="readURL(this);" set-to="div8"/>
                      </span>
                      <span class="fileupload-preview" style="margin-left:5px;"></span>
                      <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                    </div>
                  </div>
                  <div class="controls col-md-3">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <span class="btn btn-default btn-file">
                        <input type="file" name="products_image_two" class="default" onchange="readURL(this);" set-to="div9"/>
                      </span>
                      <span class="fileupload-preview" style="margin-left:5px;"></span>
                      <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                    </div>
                  </div>
                  <div class="controls col-md-3">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <span class="btn btn-default btn-file">
                        <input type="file" name="products_image_three" class="default" onchange="readURL(this);" set-to="div10"/>
                      </span>
                      <span class="fileupload-preview" style="margin-left:5px;"></span>
                      <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2"> Product Additional Preview </label>
                  <div class="col-md-3">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 160px; height: 160px;">
                        <img style="height: 100%; width: 100%;" alt="" id="div8"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 160px; height: 160px;">
                        <img style="height: 100%; width: 100%;" alt="" id="div9"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 160px; height: 160px;">
                        <img style="height: 100%; width: 100%;" alt="" id="div10"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--=*= PRODUCT ADDITIONAL IMAGE =*=-->
              
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