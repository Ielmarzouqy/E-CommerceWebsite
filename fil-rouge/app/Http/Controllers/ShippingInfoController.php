<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShippingInfo;
use Illuminate\Support\Facades\Auth;


class ShippingInfoController extends Controller
{
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
        dd($adress);
        return redirect()->route('checkout')->with('message','added info');}}

    

