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
          $validatedData = $this->validate($request, [
                'name'      => 'required|min:3|max:255|string',
                'parent_id' => 'sometimes|nullable|numeric'
          ]);
    
          Category::create($validatedData);
    
          return redirect()->route('categories.index')->withSuccess('You have successfully created a Category!');
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

  


}
