<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
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
        $cart = new Cart;
        $cart->user_id  =Auth::id();
        $cart->product_id = $request->product_id;
        $product_price = $request->price;
        $cart->quantity = $request->quantity;
        $price = $product_price * $cart->quantity;
        $cart->price = $price;
      
        $cart->save();
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
        $adress = new ShippingInfo;
        $adress->user_id = Auth::id();
        $adress->first_name =  $request->first_name;
        $adress->last_name =$request->last_name;
        $adress->phone_number = $request->phone_number;
        $adress->email= $request->email;
        $adress->city_name= $request->city_name;
        $adress->adress= $request->adress;
        $adress->postal_code= $request->postal_code;
        
        // dd($adress);
        $adress->save();
        // ShippingInfo::insert([
        //     'user_id'=>Auth::id(),
           
        //     'first_name'=> $request->first_name,
        //     'last_name'=> $request->last_name,
        //     'phone_number'=> $request->phone_number,
        //     'email'=> $request->email,
        //     'city_name'=> $request->city_name,
        //     'adress'=> $request->adress,
         
        //     'postal_code'=> $request->postal_code
        // ]);
        return redirect()->route('checkout')->with('message','added info');
        // return redirect()->back()->with('message','added info');

    }

    public function PendingOrder(){
        return view('cart.pendingorder');
    }
    
    public function checkout()
    {
        $userid = Auth::id();
        $cart_items = Cart::where('user_id',$userid)->get();
        $shipping_info = ShippingInfo::where('user_id',$userid)->first();
        return view('cart.checkout', compact('cart_items', 'shipping_info'))->with('message','added info');
        
    }

    public function PlaceOrder(){
        $userid = Auth::id();
        $shipping_info = ShippingInfo::where('user_id',$userid)->first();
        $cart_items = Cart::where('user_id', $userid)->get();
        
foreach($cart_items as $item){
    Order::insert([
        'userid'=>$userid,
        'shipping_phoneNumber'=>$shipping_info->phone_number,
        'shipping_city'=>$shipping_info->city_name,
        'shipping_postalCode'=>$shipping_info->postal_code,
        'product_id'=>$item->user_id,
        'quantity'=>$item->quentity,
        'total_price'=>$item->price,
    ]);
    // dd($item);

    $id = $item->id;
    $delete = Cart::findOrFail($id);
    $delete->delete();
    session()->flash('alert', 'your order placed successfully');
return redirect()->route('pendingorder');

}

    }
    public function removeCartItem($id)
    {
            $delete = Cart::findOrFail($id);
            $delete->delete();
        return redirect()->back();
    
    }
}
