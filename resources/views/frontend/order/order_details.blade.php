@extends('dashboard')
@section('user')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> My Account
        </div>
    </div>
</div>
<div class="page-content pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="row">

                    <!-- // Start Col md 3 menu -->

                    @include('frontend.body.dashboard_sidebar_menu')
                    <!-- // End Col md 3 menu -->



                    <!-- // Start Col md 9  -->
                    <div class="col-md-9">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Shipping Details</h4>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <table class="table" style="background:#F4F6FA;font-weight: 600;">
                                            <tr>
                                                <th>Shipping Name:</th>
                                                <th>{{ $order->name }}</th>
                                            </tr>

                                            <tr>
                                                <th>Shipping Phone:</th>
                                                <th>{{ $order->phone }}</th>
                                            </tr>

                                            <tr>
                                                <th>Shipping Email:</th>
                                                <th>{{ $order->email }}</th>
                                            </tr>

                                            <tr>
                                                <th>Orders :</th>
                                                @foreach($orderItem as $item)

                                                <td style="display:block" >
                                                    <img src="{{ asset($item->product->product_image) }}" style="width:50px; height:50px; padding-right:10px" ><br>
                                                    {{ $item->product->product_name }} 
                                                    ×{{ $item->qty }} <br>
                                                    
                                                </td>
                                                @endforeach
                                            </tr>

   

                                            {{-- <tr>
                                                <th>Country:</th>
                                                
                                                <th>{{ $order->country->country_name }}</th>
                                            </tr>

                                            <tr>
                                                <th>City:</th>
                                                <th>{{ $order->city->city_name }}</th>
                                            </tr> --}}

                                            <tr>
                                                <th>Order Date :</th>
                                                <th>{{ $order->order_date }}</th>
                                            </tr>
                                      

                                        </table>

                                    </div>

                                </div>
                            </div>
                            <!-- // End col-md-6  -->


                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Order Details
                                            <span class="text-danger">Invoice : {{ $order->invoice_no }} </span>
                                        </h4>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <table class="table" style="background:#F4F6FA;font-weight: 600;">
                                            <tr>
                                                <th> Name :</th>
                                                <th>{{ $order->user->name }}</th>
                                            </tr>

                                            <tr>
                                                <th>Phone :</th>
                                                <th>{{ $order->user->phone }}</th>
                                            </tr>

                                            <tr>
                                                <th>Payment Type:</th>
                                                <th>Cash on delivery</th>
                                            </tr>

                                            <tr>
                                                <th>Invoice:</th>
                                                <th class="text-danger">{{ $order->invoice_no }}</th>
                                            </tr>

                                            <tr>
                                                <th>Order Amonut:</th>
                                                <th>${{ $order->amount }}</th>
                                            </tr>

                                            <tr>
                                                <th>Order Status:</th>
                                                <th><span class="badge rounded-pill bg-warning">{{ $order->status
                                                        }}</span></th>
                                            </tr>

                                        </table>

                                    </div>

                                </div>
   
                             
                            </div>

                            <!-- // End col-md-6  -->
                        </div><!-- // End Row  -->




                    </div>
                    <!-- // End Col md 9  -->
 
                </div>
               
            <!--  // Start Return Order Option  -->

                @if($order->status !== 'deliverd')

                @else 

                <div class="form-group" style=" font-weight: 600; font-size: initial; color: #000000;
                ">
                                    <label>Order Return Reason</label>
                                    <textarea name="return_reason" class="form-control"></textarea>
                                </div>
                    <button type="submit" class="btn-sm btn-danger">Order Return</button>
                @endif
                <!--  // End Return Order Option  -->
        </div>
    </div>











@endsection