<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class IndexController extends Controller
{
    public function ProductDetails($id,$name){

        $product = Product::findOrFail($id);
        $cat_id = $product->category_id;
        $relatedProduct = Product::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->limit(4)->get();

        return view('frontend.product.product_details',compact('product','relatedProduct'));

     } // End Method 

     public function CatWiseProduct(Request $request,$id,$name){
        $products = Product::where('status',1)->where('category_id',$id)->orderBy('id','DESC')->get();
        $categories = Category::orderBy('category_name','ASC')->get();
  
        return view('frontend.product.category_view',compact('products','categories'));
  
       }// End Method 
}
