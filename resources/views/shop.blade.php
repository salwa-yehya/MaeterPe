@extends('user.layouts.Master')

@section('title')
     Shop
@endsection

@section ('css')

 <!-- Link shop CSS -->
 <link rel="stylesheet" href="{{asset('css/shop.css')}}">

@endsection


@section('pages')

<div class="pages-title">
    <h1> Shop</h1>
</div>
<!-- ======= Shop Section ======= -->
<section id="prodect1" class="section-p1">
<div class="pro-container">
  <div class="pro" onclick="window.location.href='{{'/single-product'}}';">
    <span class="Ribbon-Shape"></span>
    <img src="img/M4.jpg" alt="mirror">
    <div class="des">
      <h5>Circle mirror</h5>
      <span>60*60 cm</span>
      <h4>35 JOD</h4>
      <input type="submit" value="add to cart" class="Sbtn" name="addTOcart">
    </div>
  </div>
  <div class="pro">
    <span class="Ribbon-Shape"></span>

    <img src="img/M1.jpg" alt="mirror">
    <div class="des">
      <h5>mirror</h5>
      <span>90*60 cm</span>

      <h4>50 JOD</h4>
      <input type="submit" value="add to cart" class="Sbtn" name="addTOcart" />
    </div>
  </div>
  <div class="pro">
    <img src="img/M1.jpg" alt="mirror">
    <div class="des">
      <h5>mirror</h5>
      <span>90*60 cm</span>
      <h4>50 JOD</h4>
      <input type="submit" value="add to cart" class="Sbtn" name="addTOcart">

    </div>
  </div>
  <div class="pro">
    <img src="img/M1.jpg" alt="mirror">
    <div class="des">
      <h5>mirror</h5>
      <span>90*60 cm</span>
      <h4>50 JOD</h4>
      <input type="submit" value="add to cart" class="Sbtn" name="addTOcart">
    </div>
  </div>
  <div class="pro">
    <img src="img/M1.jpg" alt="mirror">
    <div class="des">
      <h5>mirror</h5>
      <span>90*60 cm</span>
      <h4>50 JOD</h4>
      <input type="submit" value="add to cart" class="Sbtn" name="addTOcart">
    </div>
  </div>
  <div class="pro">
    <img src="img/M1.jpg" alt="mirror">
    <div class="des">
      <h5>mirror</h5>
      <span>90*60 cm</span>
      <h4>50 JOD</h4>
      <input type="submit" value="add to cart" class="Sbtn" name="addTOcart">
    </div>
  </div>
  <div class="pro">
    <img src="img/M1.jpg" alt="mirror">
    <div class="des">
      <h5>mirror</h5>
      <span>90*60 cm</span>
      <h4>50 JOD</h4>
      <input type="submit" value="add to cart" class="Sbtn" name="addTOcart">
    </div>
  </div>
  <div class="pro">
    <img src="img/M1.jpg" alt="mirror">
    <div class="des">
      <h5>mirror</h5>
      <span>90*60 cm</span>
      <h4>50 JOD</h4>
      <input type="submit" value="add to cart" class="Sbtn" name="addTOcart">
    </div>
  </div>
  <div class="pro">
    <img src="img/M1.jpg" alt="mirror">
    <div class="des">
      <h5>mirror</h5>
      <span>90*60 cm</span>
      <h4>50 JOD</h4>
      <input type="submit" value="add to cart" class="Sbtn" name="addTOcart">
    </div>
  </div>
  <div class="pro">
    <img src="img/M1.jpg" alt="mirror">
    <div class="des">
      <h5>mirror</h5>
      <span>90*60 cm</span>
      <h4>50 JOD</h4>
      <input type="submit" value="add to cart" class="Sbtn" name="addTOcart">
    </div>
  </div>
  <div class="pro">
    <img src="img/M1.jpg" alt="mirror">
    <div class="des">
      <h5>mirror</h5>
      <span>90*60 cm</span>
      <h4>50 JOD</h4>
      <input type="submit" value="add to cart" class="Sbtn" name="addTOcart">
    </div>
  </div>
  <div class="pro">
    <img src="img/M1.jpg" alt="mirror">
    <div class="des">
      <h5>mirror</h5>
      <span>90*60 cm</span>
      <h4>50 JOD</h4>
      <input type="submit" value="add to cart" class="Sbtn" name="addTOcart">
    </div>
  </div>
  <div class="pro">
    <img src="img/M1.jpg" alt="mirror">
    <div class="des">
      <h5>mirror</h5>
      <span>90*60 cm</span>
      <h4>50 JOD</h4>
      <input type="submit" value="add to cart" class="Sbtn" name="addTOcart">
    </div>
  </div>
  </div>
</section><!-- =======End Shop Section ======= -->

@endsection