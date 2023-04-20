<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css
" rel="stylesheet">
@extends('dashboard')
    @section('allsubcategories')
{{-- <div class=" ">

    <div class="modal" tabindex="-1" role="dialog" id="editCategoryModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Category</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <form action="" method="POST">
            @csrf
            @method('PUT')

            <div class="modal-body">
              <div class="form-group">
                <input type="text" name="name" class="form-control" value="" placeholder="Category Name" required>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
          </form>
      </div>
    </div>

  <div class="row">
    <div class="col-md-8">

      <div class="card">
        <div class="card-header">
          <h3>Categories</h3>
        </div>
        <div class="card-body">
          <ul class="list-group">
            @foreach ($categories as $category)
              <li class="list-group-item">
                <div class="d-flex justify-content-between">
                  {{ $category->name }}

                  <div class="button-group d-flex">
                    <button type="button" class="btn btn-info btn-xs edit-category" style="width: 76px;"data-toggle="modal" data-target="#editCategoryModal" data-id="{{ $category->id }}" data-name="{{ $category->name }}">Edit</button>

                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                      @csrf
                      @method('DELETE')

                      <button type="submit" class="btn btn-warning btn-xs" style="width: 76px;" >Delete</button>
                    </form>
                  </div>
                </div>

                @if ($category->children)
                  <ul class="list-group mt-2">
                    @foreach ($category->children as $child)
                      <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                          {{ $child->name }}

                          <div class="button-group d-flex">
                            <button type="button" class="btn btn-sm btn-primary mr-1 edit-category" data-toggle="modal" data-target="#editCategoryModal" data-id="{{ $child->id }}" data-name="{{ $child->name }}">Edit</button>

                            <form action="{{ route('categories.destroy', $child->id) }}" method="POST">
                              @csrf
                              @method('DELETE')

                              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                          </div>
                        </div>
                      </li>
                    @endforeach
                  </ul>
                @endif
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div> --}}

    <div class="">
      <table class="table-hover table">
          <thead>
              <tr>
                  <th>Number</th>
                  <th>Name</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($subcategories as $subcategory)
 
              <tr>
                  <th>3</th>
                  <td>{{$subcategory->name}} </td>
                  
                
                  {{-- <td> <img src="{{ asset('images/' . $product->cover)}}" alt=""> </td> --}}
                
               
                
                  <td class="flex gap-2">
                      <a href="{{route('editsubcategory',$subcategory->id)}}">
                          <button class="  gap-2 btn btn-warning">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 18.414062 2 C 18.158062 2 17.902031 2.0979687 17.707031 2.2929688 L 15.707031 4.2929688 L 14.292969 5.7070312 L 3 17 L 3 21 L 7 21 L 21.707031 6.2929688 C 22.098031 5.9019687 22.098031 5.2689063 21.707031 4.8789062 L 19.121094 2.2929688 C 18.926094 2.0979687 18.670063 2 18.414062 2 z M 18.414062 4.4140625 L 19.585938 5.5859375 L 18.292969 6.8789062 L 17.121094 5.7070312 L 18.414062 4.4140625 z M 15.707031 7.1210938 L 16.878906 8.2929688 L 6.171875 19 L 5 19 L 5 17.828125 L 15.707031 7.1210938 z"/></svg>
                              edit
                          </button>
                      </a>
                      <form action="{{ route('subcategories.destroy', $subcategory->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                      <button class=" gap-2 btn btn-error">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32px" height="32px">
                              <path d="M 15 4 C 14.476563 4 13.941406 4.183594 13.5625 4.5625 C 13.183594 4.941406 13 5.476563 13 6 L 13 7 L 7 7 L 7 9 L 8 9 L 8 25 C 8 26.644531 9.355469 28 11 28 L 23 28 C 24.644531 28 26 26.644531 26 25 L 26 9 L 27 9 L 27 7 L 21 7 L 21 6 C 21 5.476563 20.816406 4.941406 20.4375 4.5625 C 20.058594 4.183594 19.523438 4 19 4 Z M 15 6 L 19 6 L 19 7 L 15 7 Z M 10 9 L 24 9 L 24 25 C 24 25.554688 23.554688 26 23 26 L 11 26 C 10.445313 26 10 25.554688 10 25 Z M 12 12 L 12 23 L 14 23 L 14 12 Z M 16 12 L 16 23 L 18 23 L 18 12 Z M 20 12 L 20 23 L 22 23 L 22 12 Z"/></svg>
                          
                          delete
                      </button>
                  </form>
                  </td>
              </tr>
              @endforeach
              
          </tbody>
      </table>
  </div>
   @endsection