<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function AllProduct(){
        $products  = Product::latest()->get();
        return view('backend.product.product_all',compact('products'));
    } // End Method 

    public function AddProduct(){
        $categories  = Category::latest()->get();

        return view('backend.product.product_add' , compact('categories'));
    }// End Method 

     
    public function StoreProduct(Request $request){

        $image = $request->file('product_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/products/'), $name_gen);
        $save_url = 'upload/products/'.$name_gen;

        $product_id = Product::insertGetId([
          'category_id' => $request->category_id ,
          'product_name' => $request->product_name ,
          'product_qty' => $request->	product_qty ,
          'product_size' => $request->product_size ,
          'product_color' => $request->product_color ,
          'product_image' => $save_url ,
          'selling_price' => $request->selling_price ,
          'discount_price' => $request->discount_price	 ,
          'short_descp' => $request->short_descp		 ,
          'long_descp' => $request->long_descp	 ,
          'offer' => $request->offer	 ,
          'status' => 1	 ,
          'created_at' => Carbon::now() ,



        ]);
                 $notification = array(
            'message' => 'Product Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.product')->with($notification); 

    

    }// End Method 

    public function EditProduct($id){
         $categories = Category::latest()->get();
         $products = Product::findOrFail($id);
         return view('backend.product.product_edit',compact('categories','products'));
     }// End Method 
   

     public function UpdateProduct(Request $request){

        $product_id = $request->id; //req =hidden id 

        Product::findOrFail($product_id)->update([

       'category_id' => $request->category_id,
       'product_name' => $request->product_name,

       'product_qty' => $request->product_qty,
       'product_size' => $request->product_size,
       'product_color' => $request->product_color,

       'selling_price' => $request->selling_price,
       'discount_price' => $request->discount_price,
       'short_descp' => $request->short_descp,
       'long_descp' => $request->long_descp, 

       'offer' => $request->offer,


       'status' => 1,
       'created_at' => Carbon::now(), 

   ]);


    $notification = array(
       'message' => 'Product Updated Successfully',
       'alert-type' => 'success'
   );

   return redirect()->route('all.product')->with($notification); 

    }// End Method 

    public function UpdateProductImage(Request $request){
        $pro_id = $request->id;
        $oldImage = $request->old_img;
        $image = $request->file('product_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/products/'), $name_gen);
        $save_url = 'upload/products/'.$name_gen;
        
        if (file_exists($oldImage)){
            unlink($oldImage);
        }

        Product::findOrFail($pro_id )->update([
             'product_image' =>$save_url,
             'updated_at'=> Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Product Image Updated Successfully',
            'alert-type' => 'success'
        );
     
        return redirect()->back()->with($notification); 
     
    }// End Method 
    

    public function ProductInactive($id){

        Product::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Product Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method 


      public function ProductActive($id){

        Product::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Product Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method 

    public function ProductDelete($id){

        $product = Product::findOrFail($id);
        unlink($product->product_image);
        Product::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method 

}
?>