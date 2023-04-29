@extends('frontend.masterD')
@section('main')


<div class="page-header breadcrumb-wrap">
    <div class="container" style="padding: 0px 50px">
        <div class="breadcrumb">
            <a href="/" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> {{ $product['category']['category_name'] }}<span></span> {{$product->product_name}}
        </div>
    </div>
</div>
<div class="container mb-30">
    <div class="row">
        <div class="col-xl-10 col-lg-12 m-auto">
            <div class="product-detail accordion-detail">
                <div class="row mb-50 mt-30">
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                        <div class="detail-gallery">
                            <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                            <!-- MAIN SLIDES -->
                            <div class="product-image-slider">
                                <figure class="border-radius-10">
                                    <img src="{{ asset($product->product_image)}}" alt="product image" />
                                </figure>

                            </div>

                        </div>
                        <!-- End Gallery -->
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="detail-info pr-30 pl-30">


                            @if($product->product_qty > 0)
                            <span class="stock-status in-stock">In Stock </span>
                            @else
                            <span class="stock-status out-stock">Stock Out </span>
                            @endif


                            <h2 class="title-detail" id="pname">{{ $product->product_name}}</h2>
                            <div class="product-detail-rating">
                                <div class="product-rate-cover text-end">

                                    @php
                                    $reviewcount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();
                                    $avarage = App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
                                    @endphp
                                    <div class="product-rate d-inline-block">
                                        @if($avarage == 0)

                                        @elseif($avarage == 1 || $avarage < 2)                     
                                     <div class="product-rating" style="width: 20%"></div>
                                        @elseif($avarage == 2 || $avarage < 3)                     
                                     <div class="product-rating" style="width: 40%"></div>
                                        @elseif($avarage == 3 || $avarage < 4)                     
                                     <div class="product-rating" style="width: 60%"></div>
                                        @elseif($avarage == 4 || $avarage < 5)                     
                                     <div class="product-rating" style="width: 80%"></div>
                                        @elseif($avarage == 5 || $avarage < 5)                     
                                     <div class="product-rating" style="width: 100%"></div>
                                     @endif
                                    </div>
                                    <span class="font-small ml-5 text-muted"> ({{ count($reviewcount)}} reviews)</span>
                                </div>
                            </div>
                            <div class="clearfix product-price-cover">


                                @php
                                $amount = $product->selling_price - $product->discount_price;
                                $discount = ($amount/$product->selling_price) * 100;
                                @endphp

                                @if($product->discount_price == NULL)
                                <div class="product-price primary-color float-left">
                                    <span class="current-price text-brand" id="oldprice">{{ $product->selling_price
                                        }}JD</span>

                                </div>
                                @else

                                <div class="product-price primary-color float-left">
                                    <span class="current-price text-brand" id="pprice">{{ $product->discount_price
                                        }}JD</span>
                                    <span>
                                        <span class="save-price font-md color3 ml-15">{{ round($discount) }}% Off</span>
                                        <span class="old-price font-md ml-15" id="oldprice">{{ $product->selling_price
                                            }}JD</span>
                                    </span>
                                </div>

                                @endif




                            </div>
                            <div class="short-desc mb-30">
                                <p class="font-lg">{{$product->short_descp}}</p>
                            </div>
                            <form action="{{ url('cart/data/store/'.$product->id)}}" method="POST"
                                class="d-inline-block"">
                                @csrf
                               <div class=" attr-detail attr-size mb-30">
                                <strong class="mr-10">Size : </strong>
                                <p class="font-lg" id="size">{{$product->product_size}}</p>
                                <input type="hidden" name="size" value="{{$product->product_size}}">

                        </div>

                        <div class="attr-detail attr-color mb-30">
                            <strong class="mr-10">Color Available : </strong>
                            <p class="font-lg" id="color">{{$product->product_color}}</p>
                            <input type="hidden" name="color" value="{{$product->product_color}}">
                        </div>
                        <div class="detail-extralink mb-50">

                            <div class="detail-qty border radius">
                                <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                <input type="text" name="quantity" id="qty" class="qty-val" value="1" min="1">
                                <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>

                            </div>
                    
                            <div class="product-extra-link2">
                                @if($product->product_qty > 0)
                                <input type="submit" class="button button-add-to-cart input-field" value="Add to cart">
                                @else
                                <button style="background-color: #dc3545" class="button button-add-to-cart" value="Sold Out"> Sold Out </button>

                                @endif
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- Detail Info -->
                </div>
            </div>
            <div class="product-info">
                <div class="tab-style3">
                    <ul class="nav nav-tabs text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                href="#Description">Description</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab"
                                href="#Additional-info">Additional info</a>
                        </li> --}}

                        <li class="nav-item">
                            <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews ({{ count($reviewcount) }})</a>
                        </li>
                    </ul>
                    <div class="tab-content shop_info_tab entry-main-content">
                        <div class="tab-pane fade show active" id="Description">
                            <div class="">
                                <p> {!! $product->long_descp !!}</p>


                            </div>
                        </div>
      
             
                        <div class="tab-pane fade" id="Reviews">
                            <!--Comments-->
                            <div class="comments-area">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4 class="mb-30">Customer Reviews</h4>
                                        <div class="comment-list">
                                            @php
                                            $reviews =
                                            App\Models\Review::where('product_id',$product->id)->latest()->limit(5)->get();
                                            @endphp

                                            @foreach($reviews as $item)
                                            @if($item->status == 0)

                                            @else

                                            <div class="single-comment justify-content-between d-flex mb-30">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="thumb text-center">
                                                        <img src="{{ (!empty($item->user->photo)) ? url('upload/user_images/'.$item->user->photo):url('upload/no_image.jpg') }}"
                                                            alt="" />
                                                        <p  class="font-heading text-brand">{{ $item->user->name
                                                            }}</p>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="d-flex justify-content-between mb-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="font-xs text-muted"> {{
                                                                    Carbon\Carbon::parse($item->created_at)->diffForHumans()
                                                                    }} </span>
                                                            </div>
                                                          
                                                            <div class="product-rate d-inline-block">

                                                                @if($item->rating == NULL)
                                                                @elseif($item->rating == 1)
                                                                <div class="product-rating" style="width: 20%"></div>
                                                                @elseif($item->rating == 2)
                                                                <div class="product-rating" style="width: 40%"></div>
                                                                @elseif($item->rating == 3)
                                                                <div class="product-rating" style="width: 60%"></div>
                                                                @elseif($item->rating == 4)
                                                                <div class="product-rating" style="width: 80%"></div>
                                                                @elseif($item->rating == 5)
                                                                <div class="product-rating" style="width: 100%"></div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <p class="mb-10">{{ $item->comment }} 
                                                            {{-- <a href="#"class="reply">Reply</a> --}}
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>

                                            @endif


                                            @endforeach
                                        </div>
                                    </div>
                              
                                </div>
                            </div>
                            <!--comment form-->
                            <div class="comment-form">
                                <h4 class="mb-15">Add a review</h4>
                                @guest
                                <p> <b>For Add Product Review. You Need To Login First <a
                                            href="{{ route('login')}}">Login Here </a> </b></p>

                                @else

                                <div class="row">
                                    <div class="col-lg-8 col-md-12">
                                        <form class="form-contact comment_form" action="{{ route('store.review') }}"
                                            method="post" id="commentForm">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">

                                                <table class="table" style=" width: 60%;">
                                                    <thead>
                                                        <tr>
                                                            <th class="cell-level">&nbsp;</th>
                                                            <th>1 star</th>
                                                            <th>2 star</th>
                                                            <th>3 star</th>
                                                            <th>4 star</th>
                                                            <th>5 star</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class="cell-level">Quality</td>
                                                            <td><input type="radio" name="quality" class="radio-sm"
                                                                    value="1"></td>
                                                            <td><input type="radio" name="quality" class="radio-sm"
                                                                    value="2"></td>
                                                            <td><input type="radio" name="quality" class="radio-sm"
                                                                    value="3"></td>
                                                            <td><input type="radio" name="quality" class="radio-sm"
                                                                    value="4"></td>
                                                            <td><input type="radio" name="quality" class="radio-sm"
                                                                    value="5"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control w-100" name="comment" id="comment"
                                                            cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="button button-contactForm">Submit
                                                    Review</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @endguest

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-12">
                    <h2 class="section-title style-1 mb-30" style="   font-family: 'object-fit: contain, object-position: 50% 50%';
">Related products</h2>
                </div>
                <div class="col-12">
                    <div class="row related-products">

                        @foreach($relatedProduct as $product)
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap hover-up">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_name) }}"
                                            tabindex="0">
                                            <img class="default-img" src="{{ asset( $product->product_image ) }}"
                                                alt="" />
                                        </a>
                                    </div>

                                    <div class="product-badges product-badges-position product-badges-mrg">


                                        @php
                                        $amount = $product->selling_price - $product->discount_price;
                                        $discount = ($amount/$product->selling_price) * 100;
                                        @endphp

                                        @if($product->discount_price == NULL)
                                        <span class="new">New</span>
                                        @else
                                        <span class="hot"> {{ round($discount) }} %</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <h2><a href="shop-product-right.html" tabindex="0">{{ $product->product_name }}</a>
                                    </h2>
                                    <div class="rating-result" title="90%">
                                        <span> </span>
                                    </div>
                                    @if($product->discount_price == NULL)
                                    <div class="product-price">
                                        <span>${{ $product->selling_price }}</span>

                                    </div>

                                    @else
                                    <div class="product-price">
                                        <span>${{ $product->discount_price }}</span>
                                        <span class="old-price">${{ $product->selling_price }}</span>
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection