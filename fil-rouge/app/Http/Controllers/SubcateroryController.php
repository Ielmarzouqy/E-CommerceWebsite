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

    public function edit($id)
    {

        $subcategory= Category::findOrFail($id);
        $categories = Category::with('children')->whereNull('parent_id')->get();

        // return view('product.edit')->with($product)->with($categories);
        // return view('subcategories.edit')->with($categories)->with($subcategory);
        // dd($subcategory);
        return view('subcategories.edit',[
"subcategory"=>$subcategory,
"categories"=>$categories
        ]);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'parent_id'=>'required',

        ]);

        $subcat_to_update = Category::findOrFail($id);
        // dd($subcat_to_update);
         $subcat_to_update->name= $request->input('name');
         $subcat_to_update->parent_id= $request->input('parent_id');
         
        $subcat_to_update->update();
        session()->flash('alert', 'Data saved successfully');
        return redirect()->back();
        // return view('subcategories.index');
    }

 public function destroy($id){
            $delete = category::findOrFail($id);
            $delete->delete();
            return redirect()->route('subcategories.index');
        }
    
}
