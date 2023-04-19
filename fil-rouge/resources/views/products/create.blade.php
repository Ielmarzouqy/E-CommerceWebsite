    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css
    " rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js
    "></script>
    @extends('dashboard')
    @section('create')
    <style>
    
        .cnt{
          
          background-color: rgb(232, 190, 237)
        }
      </style>
        <div class="wrapper p-2 cnt">
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
                  {{-- *****alert**** --}}
                <form class="form-horizontal" method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="ProductName" class="col-lg-2 col-sm-2 control-label"> Product Name </label>
                        <div class="col-lg-7">
                          <input type="text" name="title" class="form-control" id="product_name" required>
                        </div>
                      </div>
                    <div class="form-group ">
                      <label for="ProductStatus" class="control-label col-lg-2">Category</label>
                        <div class="col-lg-7">
                            <select class="form-control" name="category_id" >
                                <option value="">Select a Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" >{{ $category->name }}</option>
                    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group ">
                      <label for="ProductStatus" class="control-label col-lg-2"> Subcategory </label>
                      <div class="col-lg-7">
                            <select name="sub_category" id="subcategory_id" class="form-control" >
                            <option value="">Select a Subcategory</option>
                                @foreach ($categories as $category)
                                        @foreach ($category->children as $child)
                                            <option value="{{ $child->id }}" >{{ $child->name }}</option>
                                        @endforeach
                                @endforeach
                            </select>
                        </div>
                    </div>
                                    
                    <div class="form-group">
                      <label for="ProductSummary" class="col-lg-2 col-sm-2 control-label"> Product description </label>
                      <div class="col-lg-10">
                        <div class="form-group">
                          <div class="col-md-10">
                            <textarea name="description" class="form-control" id="summerOne" rows="9" required></textarea>
                          </div>
                        </div>
                      </div>
                    </div>								
                 
                    <div class="form-group">
                      <label for="ProductPrice" class="col-lg-2 col-sm-2 control-label"> Product Price </label>
                      <div class="col-lg-7">
                        <input type="number" step="any" name="price" class="form-control" id="product_price" required>
                      </div>
                    </div>
                  
                      <div class="form-group">
                        <label for="ProductPrice" class="col-lg-2 col-sm-2 control-label"> Product Price </label>
                        <div class="col-lg-7">
                          <input type="number" step="any" name="quantity" class="form-control" id="product_price" required>
                        </div>
                      </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-2 "> Product Master Image </label>
                      <div class="controls col-md-9">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                          <span class="btn btn-default btn-file">
                            <input type="file" name="cover" class="default"  set-to="div7" multiple required />
                          </span>
                          <span class="fileupload-preview" style="margin-left:5px;"></span>
                          <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="ProductName" class="col-lg-2 col-sm-2 control-label"> Product Tags </label>
                      <div class="col-md-7">
                        <input type="tags" name="slug" id="tag-input1" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-5">
                        <button name="create_product" class="btn btn-success" type="submit"> Save </button>
                      </div>
                    </div>
                  </form>
                </div>
              </section>
            </div>
          </div>
        </div>
          @endsection