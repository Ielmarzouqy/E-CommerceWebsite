<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function singleProduct($id)
    {
        $producut = Product::findOrFail($id);
    }

   
    public function AddToCart()
    {
        $userid = Auth::id();
        $cart_items = Cart::where('user_id',$userid)->get();
        return view('cart.show-single-product', compact('cart_items'));
    }


    public function addProductToCart(Request $request)
    {
        echo 'add product to cart function';
        $product_price = $request->price;
        $quantity = $request->quentity;
        $price = $product_price * $quantity;
        // dd($request);
        Cart::insert([
        'product_id'=>$request->product_id,
        'user_id'=> Auth::id(),
        'quentity'=>$request->quentity,
        'price'=>$price,
        ]);
        return redirect()->route('addtocart')->with('message','your pro added successfuly');
    }

    /**
     * Store a newly created resource in storage.
     */
   
    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function removeCartItem($id)
    {
       
            $delete = Cart::findOrFail($id);
            // dd($id);
            $delete->delete();
        // return view('cart.show-single-product')->with('message','your pro added successfuly');
        return redirect()->back();
            
        
    
    }
}
