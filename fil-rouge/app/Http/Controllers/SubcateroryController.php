<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SubcateroryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = Category::with('children')->whereNotNull('parent_id')->get();

        // return view('subcategories.create')->with([
        //   'categories'  => $categories
        // ]);
        return view('subcategories.index')->with([
            'message'=> 'category created successfuly',
            'subcategories'  => $subcategories
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();
        return view('subcategories.create',
        [
            'categories'=>$categories
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subcategory = new Category;
        $subcategory->name = $request->name;
        $subcategory->parent_id = $request->id;

        $subcategory->save();
        // In your controller
  // Your code to save data
    session()->flash('alert', 'Data saved successfully');
    return redirect()->back();

        // return redirect()->back()->with('message', 'sub-category created successfuly');
      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();

        // return view('product.edit')->with($product)->with($categories);
        return view('subcategories.edit')->with($categories);
    }

    public function update(Request $request, string $id)
    {
        
    }

 public function destroy($id){
            $delete = category::findOrFail($id);
            $delete->delete();
            return redirect()->route('subcategories.index');
        }
    
}
