<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ShippingInfo;
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

    public function GetShippingAdress()
    {
        return view('cart.shippinginfo');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function AddShippingInfo(Request $request)
    {
        echo 'hi';
        ShippingInfo::insert([
            'user_id'=>Auth::id(),
           
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'phone_number'=> $request->phone_number,
            'email'=> $request->email,
            'city_name'=> $request->city_name,
            'adress'=> $request->adress,
         
            'postal_code'=> $request->postal_code
        ]);
        return redirect()->route('checkout')->with('message','added info');
        // return redirect()->back()->with('message','added info');

    }

    
    public function checkout()
    {
        $userid = Auth::id();
        $cart_items = Cart::where('user_id',$userid)->get();
        $shipping_info = ShippingInfo::where('user_id',$userid)->first();
        return view('cart.checkout', compact('cart_items', 'shipping_info'))->with('message','added info');
        
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
