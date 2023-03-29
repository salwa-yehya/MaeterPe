<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ShipCity;
use App\Models\ShipCountry;

class CheckoutController extends Controller
{
    public function CityGetAjax($country_id){

        $ship = ShipCity::where('country_id',$country_id)->orderBy('city_name','ASC')->get();
        return json_encode($ship);

    } // End Method 

    // public function CheckoutStore(Request $request){

    //     $data = array();
    //     $data['shipping_name'] = $request->shipping_name;
    //     $data['shipping_email'] = $request->shipping_email;
    //     $data['shipping_phone'] = $request->shipping_phone;
    //     $data['country_id'] = $request->country_id;
    //     $data['city_id'] = $request->city_id;
    //     $data['notes'] = $request->notes; 

    //     return view('frontend.payment.cash',compact('data'));
        


    // }// End Method 
}
