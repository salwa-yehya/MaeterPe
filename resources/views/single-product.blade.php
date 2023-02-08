@extends('user.layouts.Master')

@section('title')
     Single Product
@endsection

@section ('css')

 <!-- Link single product CSS -->
 <link rel="stylesheet" href="{{asset('css/product.css')}}">

@endsection


@section('pages')
<!-- ======= Sigle product Section ======= -->

<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
    <img src="./img/M4.jpg" alt="product-image" width="100%">

    </div>

    <div class="single-pro-details">
        <h4 class="titles"> Circle Mirror</h4>
        <h5><span>size :</span> 60*60</h5>
        <h2>50 jd</h2>
        <input type="number" value="1">
        <button class="normal">Add To Cart</button>
        <h4>Product Details :</h4>
        <pre> - Gold Frame
 - Handcrafted and finished
 - Wall mount in portrait position only
 
</pre>
</div>

  </section><!-- ======= End Sigle product Section ======= -->



@endsection
