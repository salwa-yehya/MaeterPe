<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\checkout;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    public function StripeOrder(Request $request){
        $user_id = Auth::user()->id;
        

        $checkout_id = checkout::insertGetId([
            'user_id' => Auth::id(),
            'state_id' => 1 ,
            'name' => $request->shipping_name,
            'email' => $request->shipping_email,
            'phone' => $request->shipping_phone,
            'country' => $request->country_id,
            'city' => $request->city_id,
            'notes' => $request->notes,
            'amount' => $request->amount,
            
            'order_number' => 1,

            'invoice_no' => 'EOS'.mt_rand(10000000,99999999),
            'order_date' => Carbon::now()->format('d F Y'),
            'order_month' => Carbon::now()->format('F'),
            'order_year' => Carbon::now()->format('Y'), 
            'status' => 'pending',
            'created_at' => Carbon::now(),  

        ]);
        $carts = Cart::where('user_id',$user_id)->get();
        foreach($carts as $cart){

            OrderItem::insert([
                'checkout_id' => $checkout_id,
                'product_id' => $cart->product_id,
                'color' => $cart->color,
                'size' => $cart->size,
                'qty' => $cart->quantity,
                'price' => $request->amount,
                'created_at' =>Carbon::now(),

            ]);

        } // End Foreach
        $CartDelete = Cart::where('user_id', $user_id)->delete();
        if ( $CartDelete) {

            $notification = array(
                'message' => 'Your Order Place Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('user.order.page')->with($notification); 
        } else {
            return "noo";
        }
        }
}
