<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
      $categories = Category::with('children')->whereNull('parent_id')->get();

      return view('categories.index')->with([
        'categories'  => $categories
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $category = new Category;
        $category->name = $request->name;
        $category->parent_id = null;

        $category->save();
        // In your controller

    // Your code to save data
    session()->flash('alert', 'Data saved successfully');
    return redirect()->back();

        // return redirect()->back()->with('message', 'category created successfuly');
      
        //   $validatedData = $this->($request);
        //    [
        //         'name'      => 'required|min:3|max:255|string',
        //         'parent_id' => 'sometimes|nullable|numeric'
        //   ]
       
    
    //       Category::create($validatedData);
    
    //       return redirect()->route('categories.index')->withSuccess('You have successfully created a Category!');
     }

    /**
     * Display the specified resource.
     */
    public function createSubCat($request){
        $category = new Category;
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;

        $category->save();
        return redirect()->back()->with('message', 'category created successfuly');
    }
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

   
public function destroy(Category $category)
{
        if ($category->children) {
            foreach ($category->children()->with('products')->get() as $child) {
                foreach ($child->products as $product) {
                    $product->update(['category_id' => NULL]);
                }
            }
            
            $category->children()->delete();
        }

        foreach ($category->products as $product) {
            $product->update(['category_id' => NULL]);
        }

        $category->delete();

        return redirect()->route('subcategories.index')->withSuccess('You have successfully deleted a Category!');
}
}
