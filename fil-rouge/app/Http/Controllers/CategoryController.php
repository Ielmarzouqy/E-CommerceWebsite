<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
      $categories = Category::with('children')->whereNull('parent_id')->get();

      return view('category.index')->with([
        'categories'  => $categories
      ]);
    }

    public function create()
    {
       
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
    public function update(Request $request ,$id)
    {
        
        $request->validate([
            'name'=>'required',
        ]);

        $pro_to_update=Category::findOrFail($id);
        
        $pro_to_update->name= $request->input('name');
        // dd($pro_to_update);
        $pro_to_update->save();

        session()->flash('alert', 'category changed successfully');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $cate_to_up = Category::findOrFail($id);
        // dd($cate_to_up->name);
        return view('category.edit', compact('cate_to_up'));
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
        session()->flash('alert', 'subcategory deleted  successfully');
        return redirect()->route('category.index')->withSuccess('You have successfully deleted a Category!');
}
}
