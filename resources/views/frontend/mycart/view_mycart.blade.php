@extends('frontend.masterD')
@section('main')

@php
if (Auth::check()) {
    $user_id = Auth::user()->id;
    $carts = App\Models\Cart::where('user_id',$user_id)->get();
    $count = $carts->count();
}
@endphp

<div class="page-header breadcrumb-wrap">
    <div class="container" style="padding: 0 50px">
        <div class="breadcrumb">
            <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> Shop
            <span></span> Cart
        </div>
    </div>
</div>
<div class="container mb-80 mt-50">
    <div class="row" style="padding: 25px 50px">
        <div class="col-lg-8 mb-40">
            <h3 class="heading-2 mb-10">Your Cart</h3>
            <div class="d-flex justify-content-between">
                <h6 class="text-body">There are <span class="text-brand">{{$count}}</span> products in your cart</h6>
            </div>
            <br>
            <h5 class="text-brand">Free shipping for orders over 100 JD</h5>

        </div>
    </div>
    <div class="row" style="padding: 25px 50px">
        <div class="col-lg-12">
            <div class="table-responsive shopping-summery">
                <table class="table table-wishlist">
                    <thead>
                        <tr class="main-heading">
                            <th class="custome-checkbox start pl-30">
                                
                            </th>
                            <th scope="col" >Product Image</th>
                            <th scope="col" >Product Name</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Color</th>
                            <th scope="col">Size</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col" class="end">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                       

                        @php
                        $AllTotal = 0;
                       @endphp
                      
                       @foreach ($carts as $cart)
                        <tr class="pt-30">
                            <td class="custome-checkbox pl-30">
                              
                            </td>
                            <td class="image product-thumbnail pt-40"><img src="{{asset($cart['product']['product_image'])}}" alt="#"></td>
                    
                            <td class="product-des product-name">

                                <h6><a href="{{url('product/details/'.$cart['product']['id'].'/'.$cart['product']['product_name'])}}">{{$cart['product']['product_name']}}</a></h6>

                                {{-- <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width:90%">
                                        </div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div> --}}
                            </td>
                            <td class="price" data-title="Price">
                                @if ($cart['product']['discount_price'] == NULL)
                                <h6 class="text-body">{{$cart['product']['selling_price']}} JD</h6>
                                
                            @else
                                <h6 class="text-body">{{$cart['product']['discount_price']}} JD</h6>
                            @endif
                            </td>
                            <td class="color" data-title="color">
                                <h6 class="text-body">{{$cart['product']['product_color']}}</h6>
                            </td>
                            <td class="size" data-title="size">
                                <h6 class="text-body">{{$cart['product']['product_size']}}</h6>
                            </td>
                            
                            <td class="text-center detail-info" data-title="Stock">
                                <div class="detail-extralink mr-15">
                                    <div class="detail-qty" >
                                        {{-- <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a> --}}
                                        <input type="text" name="quantity" class="qty-val" value="{{$cart->quantity}}" min="1" disabled>
                                        {{-- <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a> --}}
                                    </div>
                                </div>
                            </td>
                            @php
                            $qty = $cart->quantity;
                            if ($cart['product']['discount_price'] == NULL) {
                                $selling_price = $cart['product']['selling_price'];
                                $total = $qty * $selling_price;
                                $AllTotal +=$total;
                            }else {
                                $discount_price = $cart['product']['discount_price'];
                                $total = $qty * $discount_price; 
                                $AllTotal +=$total;
                            }
                        @endphp
                            <td class="price" data-title="Price">
                                <h6 class="text-brand">{{$total}} JD</h6>
                            </td>
                            <td class="action text-center" data-title="Remove"><a href="{{route('delete.cart',$cart->id)}}" class="text-body"><i class="fi-rs-trash"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
           





            <div class="row mt-50">

                    <div class="col-lg-5">
                    <div class="p-40">
                        {{-- <h4 class="mb-10">Apply Coupon</h4>
                        <p class="mb-30"><span class="font-lg text-muted">Using A Promo Code?</p>
                        <form action="#">
                            <div class="d-flex justify-content-between">
                                <input class="font-medium mr-15 coupon" name="Coupon" placeholder="Enter Your Coupon">
                                <button class="btn"><i class="fi-rs-label mr-10"></i>Apply</button>
                            </div>
                        </form> --}}
                    </div>
                </div>


                <div class="col-lg-7">
                     <div class="divider-2 mb-30"></div>
             


                    <div class="border p-md-4 cart-totals ml-30">
                <div class="table-responsive">
                    <table class="table no-border">
                        <tbody>
                            <tr>
                                <td class="cart_total_label">
                                    <h6 class="text-muted">Subtotal</h6>
                                </td>
                                <td class="cart_total_amount">
                                    <h6 class="text-brand text-end" >{{$AllTotal}} JD</h6>
                                </td>
                            </tr>
                                {{-- <td scope="col" colspan="2">
                                    <div class="divider-2 mt-10 mb-10"></div>
                                </td> --}}
                            
                            <tr>
                                <td class="cart_total_label">
                                    <h6 class="text-muted">Shipping</h6>
                                </td>
                                <td class="cart_total_amount">
                                    @php 
                                    $Shipping=0;
                                        if ( $AllTotal > 0 && $AllTotal < 100 ) {
                                            $Shipping = 10 ;
                                        
                                        }
                                    @endphp
                                    <h6 class="text-heading text-end">{{$Shipping}}</h6></td>
                                
                                {{-- <td scope="col" colspan="2">
                                    <div class="divider-2 mt-10 mb-10"></div>
                                </td> --}}
                            </tr>
                            <tr>
                                <td class="cart_total_label">
                                    <h6 class="text-muted">Total</h6>
                                </td>
                                <td class="cart_total_amount">

                                    @php
                                    $finaltotal = $AllTotal  ;
                                    // no shipping cost
                                   // assign $AllTotal to $finaltotal
                                     if ($Shipping == 0 ) {
                                      $finaltotal ;
                                     }else if ($AllTotal > 0 ){
                                     // add shipping cost of 10 to $AllTotal
                                        $finaltotal = $AllTotal + 10  ; 
                                     }else {
                                    // Alltotal is 0 , final total should be 0
                                        $finaltotal == 0 ;
                                     }
                                    @endphp
                                    <h5 class="text-end" style="color: red">{{$finaltotal}} JD </h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="{{ route('checkout' , $finaltotal) }}" class="btn mb-10 w-50">Proceed To CheckOut<i class="fi-rs-sign-out ml-15"></i></a>
            </div>
                </div>


            
            </div>
        </div>
         
    </div>
</div>




@endsection