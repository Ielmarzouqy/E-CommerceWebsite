<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productsByCategory = Product::leftJoin('categories', 'products.sub_category', '=', 'categories.id')
        ->orderBy('categories.name')
        ->select('products.*', 'categories.name as category_name')
        ->get()
        ->groupBy('category_name');

        // Product::leftjoin('categories', 'products.sub_category', '=', 'categories.id')
        // ->orderBy('categories.name')
        // ->select('products.*', 'categories.name as category_name')
        // ->get()
        // ->groupBy('category_name');


        //  $products = Product::all();
        // return view('products.index', compact('productsByCategory'));
        return view('/shop', compact('productsByCategory'));



    // return view('/shop')->with(['products' => $productsByCategory]);
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
            'quantity'   => 'required',


            
        ]);
     

        $data['user_id'] = Auth::id();
        $data['slug'] = Str::slug($data['slug'], '-');
    
         // Upload the image file
    $imageName = time() . '.' . $request->cover->getClientOriginalExtension();
    $request->cover->move(public_path('images'), $imageName);
    $data['cover'] = $imageName;

    $product = Product::create($data);
        // $product= Product::create($data);
        
       
        return redirect()->back()->with('message', 'category created successfuly');

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('products.show',[
            'product'=> Product::findOrFail($id),
        ]);
    }
    public function singlePageProduct(string $id)
    {
        $pro = Product::findOrFail($id);
        // $cat =Categroy::findOrFail($id)
        return view('products.show',[
            'product'=> $pro,
            // 'category'=>$cat,
        ]);
    // });
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
