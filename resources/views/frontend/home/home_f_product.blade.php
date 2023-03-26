 
 
 @php
 $offer = App\Models\Product::where('offer',1)->orderBy('id','DESC')->limit(5)->get();
 @endphp
 
  <section class="section-padding pb-5">
    <div class="container">
        <div class="section-title wow animate__animated animate__fadeIn">
            <h3 class="" style="   font-family: 'object-fit: contain, object-position: 50% 50%'; margin-left: 100px
            "> On Sale Products </h3>

        </div>
        <div class="row" style="padding : 25px 60px">
            <div class="col-lg-3 d-none d-lg-flex wow animate__animated animate__fadeIn">
                <div class="banner-img style-2">
                    <div class="banner-text">
                        {{-- <h2 class="mb-100">UP TO <br>
                            40%  OFF</h2> --}}
                        {{-- <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                <div class="tab-content" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">


                                @foreach($offer as $product)
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('product/details/'.$product->id.'/'.$product->product_name) }}">
                                                <img class="default-img" src="{{ asset( $product->product_image) }}" alt="" />
                        
                                            </a>
                                        </div>
                                      
                        
                                         @php
                                            $amount = $product->selling_price - $product->discount_price;
                                            $discount = ($amount/$product->selling_price) * 100;
                                            @endphp
                                        
                        
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                             @if($product->discount_price == NULL)
                                            <span class="new">New</span>
                                            @else
                                            <span class="hot"> {{ round($discount) }} %</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">{{ $product['category']['category_name'] }}</a>
                                        </div>
                                        <h2 style="padding-top: 0px ; margin-bottom : -12px"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_name) }}">{{ $product->product_name }}</a></h2>
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                        
                                        @if($product->discount_price == NULL)
                                         <div class="product-price mt-10" >
                                            <span>{{ $product->selling_price }} JD</span>
                        
                                        </div>
                                        @else
                                           <div class="product-price mt-10">
                                            <span>{{ $product->discount_price }} JD</span>
                                            <span class="old-price">{{ $product->selling_price }}JD</span>
                                        </div>
                                        @endif
                        
                                        <div class="sold mt-15 mb-15">
                                            {{-- <div class="progress mb-5">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div> --}}
                        
                                        </div>
                                        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_name) }}" class="btn w-100 hover-up" style="   font-family: 'object-fit: contain, object-position: 50% 50%' ;  font-weight:300"> Show More</a>
                                    </div>
                                </div>
                                <!--End product Wrap-->
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--End tab-pane-->


                </div>
                <!--End tab-content-->
            </div>
            <!--End Col-lg-9-->
        </div>
    </div>
</section>