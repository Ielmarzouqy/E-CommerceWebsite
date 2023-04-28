<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\ShippingInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    
    public function singleProduct($id)
    {
        $producut = Product::findOrFail($id);
    }

   
    public function AddToCart()
    {
        $userid = Auth::id();
        $cart_items = Cart::where('user_id',$userid)->get();
        // dd($userid);
        // if($userid == null){
        //     session()->flash('message', 'Please login with your account or register first');
        //     return back();
        //   }else{
        return view('cart.shipping-cart', compact('cart_items'));
    
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
      if($cart->user_id == null){
        session()->flash('alert', 'Please login with your account or register first');
        return back();
      }else{
        $product = Product::find($cart->product_id);
        $product->quantity -= $cart->quantity;

        if($product->quantity < 0)
            return redirect()->back()->with('error','quantity is not available');

        if(!$product->quantity){
            $product->availability = "not available";
        }
        $product->update();

        $cart->save();
    }
        return redirect()->route('addtocart')->with('message','your pro added successfuly');
    }

    public function GetShippingAdress()
    {
        return view('cart.shippinginfo');
    }

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
        $adress->price;
        // $cart= new Cart();
        // $cart = Cart::where('user_id',$adress->user_id)->get()->value('price');
        // dd($adress,$cart);
        $adress->save();
        
        return redirect()->route('checkout')->with('message','added info');

    }

    public function PendingOrder(){

         session()->flash('alert', 'your order placed successfully');

        return back();

        // return view('cart.pendingorder');
    }
    
    public function checkout()
    {
        $userid = Auth::id();
        $cart_items = Cart::where('user_id',$userid)->get();

        foreach( $cart_items as $item){
            $pro_title = Product::Where('id',$item->product_id)->get()->value('title');
            $pro_price = Product::Where('id',$item->product_id)->get()->value('price');
            $pro_cover = Product::Where('id',$item->product_id)->get()->value('cover');

        }
        
        // dd($item=$pro_title);
        $shipping_info = ShippingInfo::where('user_id',$userid)->first();
        
        return view('cart.checkout', compact('cart_items', 'shipping_info','pro_title', 'pro_price', 'pro_cover'))->with('message','added info');
          
    }

    public function PlaceOrder(){
        $userid = Auth::id();
        $shipping_info = ShippingInfo::where('user_id',$userid)->first();
        $cart_items = Cart::where('user_id', $userid)->get();
        dd($cart_items);
foreach($cart_items as $item){
    Order::insert([
        'userid'=>$userid,
        'shipping_phoneNumber'=>$shipping_info->phone_number,
        'shipping_city'=>$shipping_info->city_name,
        'shipping_postalCode'=>$shipping_info->postal_code,
        'product_id'=>$item->product_id,
        'quantity'=>$item->quantity,
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
