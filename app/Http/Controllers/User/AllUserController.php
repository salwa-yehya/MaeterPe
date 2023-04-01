<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\checkout;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

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

    public function UserOrderDetails($checkout_id){

        $order = checkout::with('user','country','city')->where('id',$checkout_id)->where('user_id',Auth::id())->first();
        $orderItem = OrderItem::with('product')->where('checkout_id',$checkout_id)->orderBy('id','DESC')->get();

        return view('frontend.order.order_details',compact('order','orderItem'));

    }// End Method 

    public function UserOrderInvoice($checkout_id){

        // $order = checkout::with('country','city','user')->where('id',$checkout_id)->where('user_id',Auth::id())->first();
        // $orderItem = OrderItem::with('product')->where('checkout_id',$checkout_id)->orderBy('id','DESC')->get();

        // $pdf = Pdf::loadView('frontend.order.order_invoice', compact('order','orderItem'))->setPaper('a4')->setOption([
        //         'tempDir' => public_path(),
        //         'chroot' => public_path(),
        // ]);
        // return $pdf->download('invoice.pdf');

    }// End Method 

}
