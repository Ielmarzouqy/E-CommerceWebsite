<?php

namespace App\Http\Controllers;

use Stripe;
use Session;
use Stripe\Charge;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function stripe()
    {
        return view('payment');
    }

    public function stripePost(Request $request)
    {
        $user_id = Auth::id();
        $user_id = $request->user_id;
        $userid = Auth::id();
        $totalPrice = DB::table('carts')->where('user_id',$userid)->sum('price');
        // $amount = $price =Cart::where('user_id',$user_id)->get()->value('price');
        // $request->amount ;
        // $cart= new Cart();
        // $cart = Cart::where('user_id',$user_id)->get()->value('price');

        // return $request;
        dd($totalPrice) ;

        // $money = $request->money ;
        // $stripe = new \Stripe\StripeClient(
        //     'sk_test_51N1R8VLogd3U0qRPgzI51VUQ5nFiIJvsdQvmYUC030lQpMloy0vxQkRr2qf0Jn4a7pfSLbGRRpDC5coojC99mw9G000vVpTeMJ'
        // );
        // $res = $stripe->tokens->create([
        //     'card' => [
        //         'number' => '4242424242424242',
        //         'exp_month' => 4,
        //         'exp_year' => 2024,
        //         'cvc' => '314',
        //     ],
        // ]);
        // $stripe = new \Stripe\StripeClient(
        //     'sk_test_51N1R8VLogd3U0qRPgzI51VUQ5nFiIJvsdQvmYUC030lQpMloy0vxQkRr2qf0Jn4a7pfSLbGRRpDC5coojC99mw9G000vVpTeMJ'
        // );
        // $stripe->charges->create([
        //     'amount' => 2400,
        //     'currency' => 'usd',
        //     'source' => $res->id,
        //     'description' => 'My First Test Charge (created for API docs at https://www.stripe.com/docs/api)',
        // ]);

        // Session::flash('success', 'Payment successful!');

        // return back();
    }
}
