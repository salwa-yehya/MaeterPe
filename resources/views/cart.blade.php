@extends('user.layouts.Master')

@section('title')
     Cart
@endsection

@section ('css')

 <!-- Link Cart CSS -->
 <link rel="stylesheet" href="{{asset('css/cart.css')}}">

@endsection




@section('pages')
<div class="pages-title">
    <h1> Shopping Cart</h1>
</div>
<!-- ======= Cart Section ======= -->

<div class="container">

	<div class="cart">

		<div class="products">

			<div class="product">

				<img src="img/M1.jpg">

				<div class="product-info">

					<h3 class="product-name">New Shoes</h3>
                    <p class="product-quantity">Qnt: <input value="1" name="">
					<h4 class="product-price">₹ 1,000</h4>

					{{-- <h4 class="product-offer">50%</h4> --}}

					

					<p class="product-remove">

						<i class="fa fa-trash" aria-hidden="true"></i>

						<span class="remove">Remove</span>

					</p>

				</div>

			</div>

			<div class="product">

				<img src="img/M1.jpg">

				<div class="product-info">

					<h3 class="product-name">New Bag</h3>
                    <p class="product-quantity">Qnt: <input value="1" name="">
					<h4 class="product-price">₹ 2,000</h4>

					{{-- <h4 class="product-offer">40%</h4> --}}

					

					<p class="product-remove">

						<i class="fa fa-trash" aria-hidden="true"></i>

						<span class="remove">Remove</span>

					</p>

				</div>

			</div>

		</div>

		<div class="cart-total">

			<p>

				<span>Total Price</span>

				<span>₹ 3,000</span>

			</p>

			<p>

				<span>Number of Items</span>

				<span>2</span>

			</p>

			<p>

				<span>You Save</span>

				<span>₹ 1,000</span>

			</p>

			<a href="#">Proceed to Checkout</a>

		</div>

	</div>

</div>



@endsection