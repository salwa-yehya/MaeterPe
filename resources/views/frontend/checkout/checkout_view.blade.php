@extends('frontend.masterD')
@section('main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-header breadcrumb-wrap">
    <div class="container" style="padding: 0px 50px">
        <div class="breadcrumb" >
            <a href="/" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span>
            <a href="{{ route('checkout' , $finaltotal) }}">Checkout</a>
        </div>
    </div>
</div>
<div class="container mb-80 mt-50" style="padding: 0px 50px">
    <div class="row">
        <div class="col-lg-8 mb-40">
            <h3 class="heading-2 mb-10">Checkout</h3>
            <div class="d-flex justify-content-between">
                <h6 class="text-body">There are products in your cart</h6>
            </div>
            <br>
            <h5 class="text-brand">Free shipping for orders over 100 JD</h5>
            <br> <br>
        </div>
    </div>

    <form method="post" action="{{route('stripe.order')}}">
        @csrf

        <div class="row">
            <div class="col-lg-6">

                <div class="row" style="padding: 5px 25px">
                    <h4 class="mb-30">Billing Details</h4>


                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" placeholder="User Name" required="" name="shipping_name" value="{{Auth::user()->name}}">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" placeholder="User Email" required="" name="shipping_email" value="{{Auth::user()->email}}">
                        </div>
                    </div>



                    <div class="row shipping_calculator">
                            <div class="form-group col-lg-6">
                                <div class="custom_select">
                                    <select name="country_id" class="form-control">
                                        <option value="">Select Country...</option>
                                        @foreach($countries as $item)
                                        <option value="{{ $item->id }}">{{ $item->country_name }}</option>
                                        @endforeach
                    
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <div class="custom_select">
                                    <select name="city_id" class="form-control">
                                        <option value="">Select City...</option>
                    
                    
                                    </select>
                                </div>
                            </div>
                        
                    </div>


                    <div class="row shipping_calculator">
                        <div class="form-group col-lg-6">
                            <input required="" type="text" placeholder="Mobile Phone" name="shipping_phone" value="{{Auth::user()->phone}}" >
                        </div>
                        
                    </div>

                    <div class="form-group mb-20">
                        <textarea rows="5" placeholder="Additional information" name="notes"></textarea>
                    </div>

                </div>
            </div>


            <div class="col-lg-6">
                <div class="border p-40 cart-totals ml-30 mb-50">
                    <div class="d-flex align-items-end justify-content-between mb-30">
                        <h4>Your Order</h4>
                        <h6 class="text-muted"></h6>
                    </div>
                    <div class="divider-2 mb-30"></div>
                    <div class="table-responsive order_table checkout">
                        <table class="table no-border">
                            <tbody>
                                @php
                                $AllTotal = 0;
                               @endphp
                              
                                @foreach ($carts as $cart)
                                    <tr>
                                        <td class="image product-thumbnail"><img src="{{asset($cart['product']['product_image'])}}" alt="#">
                                        </td>
                                        <td>
                                            <h6 class="w-160 mb-5"><a href="{{url('product/details/'.$cart['product']['id'].'/'.$cart['product']['product_name'])}}"
                                                    class="text-heading">{{$cart['product']['product_name']}}</a></h6></span>
                                            <div class="product-rate-cover">

                                                    <strong>Color : {{$cart->color}}</strong>
                                                
                                                <br>
                                                    <strong>Size : {{$cart->size}}</strong>
                            
                                               
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="text-muted pl-20 pr-20">x {{$cart->quantity}}</h6>
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
                                            <td>
                                                <h4 class="text-brand">{{$total}} JD</h4>

                                            </td>
                                       

                                    
                                    </tr>
                                @endforeach
                            
                            </tbody>
                        </table>

                        <table class="table no-border">
                            <tbody>
                                <tr>
                                    <td class="cart_total_label">

                                  
                                     
                                        <h6 class="text-muted">Total With Shipping :</h6>

                                        
                                    </td>
                                    
                                    <td class="cart_total_amount">
                                        <h4 class="text-end"  style="color: red"> {{$finaltotal}} JD </h4>
                                        <input type="hidden" value="{{$finaltotal}}" name="amount" />

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                       <button type="submit" class="btn btn-fill-out btn-block mt-30">Place an Order<i class="fi-rs-sign-out ml-15"></i>
                    </button>  

                </div>
        
                 
                </div>
            </div>
        </div>
    </form>

</div>

<script>
    var checkboxes = document.querySelectorAll('input[type="radio"]');
// Add an event listener to each checkbox
checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('click', function() {
        // Uncheck all other checkboxes
        checkboxes.forEach(function(otherCheckbox) {
            if (otherCheckbox !== checkbox) {
                otherCheckbox.checked = false;
            }
        });
    });
});
</script>

<script type="text/javascript">
  		
  		$(document).ready(function(){
  			$('select[name="country_id"]').on('change', function(){
  				var country_id = $(this).val();
  				if (country_id) {
  					$.ajax({
  						url: "{{ url('/city-get/ajax') }}/"+country_id,
  						type: "GET",
  						dataType:"json",
  						success:function(data){
  							$('select[name="city_id"]').html('');
  							var d =$('select[name="city_id"]').empty();
  							$.each(data, function(key, value){
  								$('select[name="city_id"]').append('<option value="'+ value.id + '">' + value.city_name + '</option>');
  							});
  						},
  					});
  				} else {
  					alert('danger');
  				}
  			});
  		});
</script>


@endsection
