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
          $sub_categories = Category::whereNotNull('parent_id')->get();
    
          return view('products.create')->with([ 'categories'=>$categories,'sub_categories'=>$sub_categories]);
        // return $categories;
    }

    public function store(Request $request)
    {
        $data=$this->validate($request, [
            'title'         => 'required|min:3|max:255',
            'slug'          => 'required|min:3|max:255',
            'description'   => 'required|min:3',
            'cover'         => 'required',
            'price'         => 'required',

            'category_id'   => 'required',
            'sub_category'   => 'required',

            
        ]);
        // $product = new Product;
        // $product->title =   $request->input('title');
        // $product->slug =   $request->input('slug');
        // $product->description =   $request->input('description');
        // $product->cover =   $request->input('cover');
        // $product->price =   $request->input('price');
        // $product->category();

        $data['user_id'] = Auth::id();
        $data['slug'] = Str::slug($data['slug'], '-');
    
        // $product = Product::create($validatedData);
        $product= Product::create($data);
        // return redirect()->route('products.index');;
        return redirect()->back()->with('message', 'category created successfuly');

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
