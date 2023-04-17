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
        $categories = Category::with('children')->whereNull('parent_id')->get();

        // return view('subcategories.create')->with([
        //   'categories'  => $categories
        // ]);
        return view('subcategories.index')->with([
            'message'=> 'category created successfuly',
            'categories'  => $categories
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subcategories.create',[
            'categories'=>self::index()->categories
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
 public function destroy($id){
            $delete = category::findOrFail($id);
            $delete->delete();
            return redirect()->route('subcategories.index');
        }
    
}
