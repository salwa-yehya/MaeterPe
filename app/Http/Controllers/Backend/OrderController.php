<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\checkout;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function PendingOrder(){
        $orders = checkout::where('status','pending')->orderBy('id','DESC')->get();
        return view('backend.orders.pending_orders',compact('orders'));
    } // End Method 

    public function AdminOrderDetails($checkout_id){

        $order = checkout::with('country','city','user')->where('id',$checkout_id)->first();
        $orderItem = OrderItem::with('product')->where('checkout_id',$checkout_id)->orderBy('id','DESC')->get();

        return view('backend.orders.admin_order_details',compact('order','orderItem'));

    }// End Method 

    public function AdminConfirmedOrder(){
        $orders = checkout::where('status','confirm')->orderBy('id','DESC')->get();
        return view('backend.orders.confirmed_orders',compact('orders'));
    } // End Method 


 public function AdminProcessingOrder(){
        $orders = checkout::where('status','processing')->orderBy('id','DESC')->get();
        return view('backend.orders.processing_orders',compact('orders'));
    } // End Method 


    public function AdminDeliveredOrder(){
        $orders = checkout::where('status','deliverd')->orderBy('id','DESC')->get();
        return view('backend.orders.delivered_orders',compact('orders'));
    } // End Method 

    public function PendingToConfirm($checkout_id){
        checkout::findOrFail($checkout_id)->update(['status' => 'confirm']);

        $notification = array(
            'message' => 'Order Confirm Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.confirmed.order')->with($notification); 


    }// End Method 

    public function ConfirmToProcess($checkout_id){
        checkout::findOrFail($checkout_id)->update(['status' => 'processing']);

        $notification = array(
            'message' => 'Order Processing Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.processing.order')->with($notification); 


    }// End Method 


      public function ProcessToDelivered($checkout_id){
        $product = OrderItem::where('checkout_id',$checkout_id)->get();
        foreach($product as $item){
        Product::where('id',$item->product_id)
                ->update(['product_qty' => DB::raw('product_qty-'.$item->qty) ]);
    } 

        checkout::findOrFail($checkout_id)->update(['status' => 'deliverd']);

        $notification = array(
            'message' => 'Order Deliverd Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.delivered.order')->with($notification); 


    }// End Method 
}
