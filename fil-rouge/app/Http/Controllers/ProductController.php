<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index');
    }
    public function create()
    {
          $categories = Category::with('children')->whereNull('parent_id')->get();
        //   $sub_categories = Category::whereNotNull('parent_id')->get();
    
          return view('product.create')->with([ 'categories'=>$categories]);
        // return $categories;
    }

    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'title'         => 'required|min:3|max:255',
            'slug'          => 'required|min:3|max:255|unique:posts',
            'image'         => 'sometimes|image',
            'category_id'   => 'required|numeric',
            'description'   => 'required|min:3'
        ]);
    
        $validatedData['user_id'] = Auth::id();
        $validatedData['slug'] = Str::slug($validatedData['slug'], '-');
    
        $product = Product::create($validatedData);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(Product $product)
{
    //   if (optional($product->user_id != Auth::id())) {
    //     return redirect()->back();
    // dd();
    //   }

      $categories = Category::with('children')->whereNull('parent_id')->get();

      return view('product.edit')->with($product)->with($categories);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
