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
        // $productsByCategory = Product::leftJoin('categories', 'products.sub_category', '=', 'categories.id')
        // ->orderBy('categories.name')
        // ->select('products.*', 'categories.name as category_name')
        // ->get()
        // ->groupBy('category_name');

       

         $products = Product::all();
        return view('products.index', compact('products'));
    // return view('/shop')->with(['products' => $productsByCategory]);
    }

    public function shop()
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

    public function edit($id)
{
    $product_to_edit = Product::findOrFail($id);
  
      $categories = Category::with('children')->whereNull('parent_id')->get()->all();
    //   dd($product_to_edit->description);
      return view('products.edit',[
        'product' => $product_to_edit,
        'categories'=>$categories,
      ]);
    // return view('products.edit');
}

    public function update(Request $request,  $id)
    {
            $request->validate([
                'title'=>'required',
                'category_id'=>'required',
                'sub_category'=>'required',
                'description'=>'required',
                'price'=>'required',
                'quantity'=>'required',
                'cover'=>'required',
                'slug'=>'required',
            
            ]);
        
                $pro_to_update=Product::findOrFail($id);
                $pro_to_update->title= $request->input('title');
                $pro_to_update->category_id= $request->input('category_id');
                $pro_to_update->sub_category= $request->input('sub_category');
                $pro_to_update->description= $request->input('description');
                $pro_to_update->price= $request->input('price');
                $pro_to_update->quantity= $request->input('quantity');
                $pro_to_update->cover= $request->input('cover');
                $pro_to_update->slug= $request->input('slug');

              
        
                if($cover = $request->file('cover')){
                    $dist_path = 'images/';
                    $cover_name= date('YmdHis') . '.' . $cover->getClientOriginalExtension();
                    $cover->move( $dist_path,  $cover_name);
                }
                $inp['cover']="$cover_name";
                
                $pro_to_update->fill($inp);
                $pro_to_update->save();
                session()->flash('alert', 'Data saved successfully');
                return redirect()->back();
                // return redirect()->route('products.index', $id);
            
    }

    public function destroy(string $id)
    {

        Product::findOrFail($id)->delete();
        return redirect()->back();
    }
}
