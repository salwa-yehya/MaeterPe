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

}
