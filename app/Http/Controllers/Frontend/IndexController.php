<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class IndexController extends Controller
{
    public function ProductDetails($id,$name){

        $product = Product::findOrFail($id);
        return view('frontend.product.product_details',compact('product'));

     } // End Method 

}
