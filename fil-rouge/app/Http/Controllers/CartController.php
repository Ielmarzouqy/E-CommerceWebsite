<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\ShippingInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $cart_items = Cart::with("products")->where('user_id',$userid)->get();
        $totalPrice = DB::table('carts')->where('user_id',$userid)->sum('price');

        // dd($cart_items);
        // dd($userid);
        // if($userid == null){
        //     session()->flash('message', 'Please login with your account or register first');
        //     return back();
        //   }else{
// foreach($cart_items as $item){
//     $pro_title = Product::Where('id',$item->product_id)->get()->value('title');
//     $pro_price = Product::Where('id',$item->product_id)->get()->value('price');
//     $pro_cover = Product::Where('id',$item->product_id)->get()->value('cover');
// }
           
            // dd($pro_title);
return view('cart.shipping-cart', compact('cart_items', 'totalPrice' /*,'pro_title', 'pro_cover'*/ ));
    
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
        $userid = Auth::id();
        // $totalPrice = DB::table('carts')->where('user_id',$userid)->sum('price');
        // $cart_items = Cart::with("products")->where('user_id',$userid)->get();

        $totalPrice = Cart::with("shipping")->where('user_id',$userid)->sum('price');

        return view('cart.shippinginfo', compact('totalPrice'));
    }

    public function AddShippingInfo(Request $request)
    {

        $adress = new ShippingInfo;
        $adress->user_id = Auth::id();
        $cart = Cart::where('user_id',$adress->user_id)->get();
        $totalPrice = $cart->sum('price');
        // $adress->cart_id = $cart->get('id');

       

        // $totalPrice = DB::table('carts')->where('user_id',$adress->user_id)->sum('price');
        // $totalPrice = Cart::with("shipping")->where('user_id',$adress->user_id)->sum('price');

        // $total_price = self::GetShippingAdress()->totalPrice;
      
        $adress->first_name =  $request->first_name;
        $adress->last_name =$request->last_name;
        $adress->phone_number = $request->phone_number;
        $adress->email= $request->email;
        $adress->city_name= $request->city_name;
        $adress->adress= $request->adress;
        $adress->postal_code= $request->postal_code;
        $adress->total_price =$totalPrice ;
        $adress->number = $request->number;
        $adress->exp_month = $request->exp_month;
        $adress->exp_year = $request->exp_year;
        $adress->cvc = $request->cvc;

        // dd($adress->cart_id);

       

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
        $cart_items = Cart::with("products")->where('user_id',$userid)->get();
        // $totalPrice = DB::table('carts')->where('user_id',$userid)->sum('price');
        $totalPrice = ShippingInfo::where('user_id',$userid)->sum('total_price');


        
        
        // dd($item=$pro_title);
        $shipping_info = ShippingInfo::where('user_id',$userid)->first();
        if($totalPrice == null){
            session()->flash('danger', 'Please login with your account or register first');
            return back();
        };
  
        return view('cart.checkout', compact('cart_items', 'shipping_info','totalPrice'))->with('message','added info');
          
    }

//     public function PlaceOrder(){
        
//         $userid = Auth::id();
//             $shipping_info = ShippingInfo::where('user_id',$userid)->first();
//             $cart_items = Cart::where('user_id', $userid)->get();
//             $totalPrice = DB::table('carts')->where('user_id',$userid)->sum('price');
//             // $totalPricePayed = ShippingInfo::where('total_price',$totalPrice)->get();
//             // $totalPricePayed;
//             $order_items = [];

//             foreach($cart_items as $item){
//                 $order_items[] = [
//                     'user_id'=>$userid,
//                     'shipping_phoneNumber'=>$shipping_info->phone_number,
//                     'shipping_city'=>$shipping_info->city_name,
//                     'shipping_postalCode'=>$shipping_info->postal_code,
//                     'product_id'=>$item->product_id,
//                     'quantity'=>$item->quantity,
//                     'total_price'=>$item->price,
//                 ];
            
//             dd($totalPrice);
            
//                 if(!$totalPrice ){
//                     session()->flash('newdanger', 'khalas');
//                     return back();
//                 }else{
//                     $id = $item->id;
//                 $delete = Cart::findOrFail($id);
//                 $delete->delete();
//                 }    
//         }
//         Order::insert($order_items);
//             session()->flash('alert', 'your order placed successfully');
//         return redirect()->route('pendingorder');

// }

public function PlaceOrder(){
    $userid = Auth::id();
    $shipping_info = ShippingInfo::where('user_id', $userid)->first();
    $cart_items = Cart::where('user_id', $userid)->get();
    
    $totalPrice = $shipping_info->total_price; // get the total price from shipping info
    $cartTotalPrice = $cart_items->sum('price'); // sum the prices of all items in the cart
    
    // dd($totalPrice,$cartTotalPrice);
    if($totalPrice != $cartTotalPrice){
        session()->flash('newdanger', 'The total price does not match. Please check your cart items and shipping information again.');
        return back();
    }
    
    $order_items = [];
    
    foreach($cart_items as $item){
        $order_items[] = [
            'user_id' => $userid,
            'shipping_phoneNumber' => $shipping_info->phone_number,
            'shipping_city' => $shipping_info->city_name,
            'shipping_postalCode' => $shipping_info->postal_code,
            'product_id' => $item->product_id,
            'quantity' => $item->quantity,
            'total_price' => $item->price,
        ];
        
        // delete the cart item
        $item->delete();
    }
    
    Order::insert($order_items);
    session()->flash('alert', 'Your order has been placed successfully.');
    
    // return redirect()->route('pendingorder');
    return back();
}

    public function removeCartItem($id)
    {
            $item = Cart::findOrFail($id);
            // dd($delete);
            $product = Product::find($item->product_id);
            $product->quantity += $item->quantity;
            $product->update();
            $item->delete();

        return redirect()->back();
    
    }
    
    public function getAllCarts(){
        $carts = Cart::with("products")->get()->all();

        return view('cart.index', compact('carts'));
    }
    // public function getAllOrders(){
        
    //     $orders = Order::with("user")
    //     ->join("products", "product_id", "=", "products.id")
    //     ->select("orders.*", "products.title")
    //     ->get();
      
    //     return view('cart.order', compact('orders'));
    // }

    public function getAllOrders(){
        $orders = Order::with("user")
            ->join("products", "product_id", "=", "products.id")
            ->select("orders.*", "products.title")
            ->get();
    
        // loop through each order and add the status
        // foreach($orders as $order) {
        //     if($order->is_paid) {
        //         $order->status = 'Paid';
        //     } else if($order->is_pending) {
        //         $order->status = 'Pending';
        //     } else {
        //         $order->status = 'Failed';
        //     }
        // }
    
        return view('cart.order', compact('orders'));
    }
    
    public function updateOrderStatus(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);
        $order->status = $request->input('status');
        $order->update();
    session()->flash('success',' the order item status is updated successfully ');
        return redirect()->back();
    }


    public function getPayment(){
        $payments =  ShippingInfo::get();
        
        // $payment->get()->all();
        // dd($payment);
        return view('cart.payment', compact('payments'));
    }
}
