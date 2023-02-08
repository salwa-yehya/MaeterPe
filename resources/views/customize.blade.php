@extends('user.layouts.Master')

@section('title')
     Customize
@endsection



@section ('css')

 <!-- Link customize CSS -->
 <link rel="stylesheet" href="{{asset('css/customize.css')}}">

@endsection

@section('pages')
<div class="pages-title">
    <h1> Customize</h1>
</div>

<section id="Customize-page" class="section-p1">
    <div class="Customize-detiles">
        <p class="req">After the Selections, Check Below for the Calculated Price.</p>

        <div class="shape">
            <h2>Shape</h2>
            <p>(choose shape you like)</p>
            <br>
            <div class="shape-img">
                <img src="./img/cp1.jpeg" alt="" width="250px">
                <img src="./img/img1.png" alt="" width="280px">
                <img src="./img/img2.png" alt="" width="250px">
                <img src="./img/img3.png" alt="" width="250px">
            </div>
        </div>
        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="./img/img1.png" alt="" width="100%">
            </div>

            <div class="single-pro-details">
                <!-- <h4 class="titles"> Circle Mirror</h4> -->
                <div class="sec-flex">
                    <div class="led">
                        <h2>Led</h2>
                        <p>(Do you like to have a led behind your mirror?)</p>
                        <select>
                            <option value="0">Led </option>
                            <option value="1">With Led</option>
                            <option value="2">WithOut Led</option>
                        </select>
                    </div>
                    <br>
                    <div class="color">
                        <h2>Frame Color</h2>
                        <p>(Choose a mirror color we like !)</p>
                        <select>
                            <option value="0">Select Frame Color</option>
                            <option value="1"> Gold</option>
                            <option value="2"> Black</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="third-flex">
                    <div class="size">
                        <h2>Size</h2>
                        <p>(Choose a mirror size you like !)</p>
                        <label for="">width:</label>
                        <input type="number">
                        <label for="">height:</label>
                        <input type="number">
                    </div>

                    <div class="quantity">
                        <h2>quantity</h2>
                        <p>(Choose a mirror quantity we like !)</p>
                        <input type="number" value="1">
                    </div>

                </div>
                <br>
                <h2>50 jd</h2>
                <button class="normal">Add To Cart</button>
            </div>

        </section>

</section>


@endsection