<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\checkout;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AllUserController extends Controller
{
    public function UserAccount(){
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('frontend.userdashboard.account_details',compact('userData'));

    } // End Method 

    public function UserChangePassword(){
        return view('frontend.userdashboard.user_change_password' );
   } // End Method 

   public function UserOrderPage(){
    $id = Auth::user()->id;
    $orders = checkout::where('user_id',$id)->orderBy('id','DESC')->get();
      return view('frontend.userdashboard.user_order_page',compact('orders'));
    }// End Method 

    public function UserOrderDetails($order_id){

        $order = checkout::with('user','country','city')->where('id',$order_id)->where('user_id',Auth::id())->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();

        return view('frontend.order.order_details',compact('order','orderItem'));

    }// End Method 

}
