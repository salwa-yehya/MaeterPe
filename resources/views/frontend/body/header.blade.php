<!-- Header  -->
<header class="header-area header-style-1 header-height-2">
    <div class="mobile-promotion">
        <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
    </div>
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>

                            <li><a href="page-account.html">My Cart</a></li>
                            <li><a href="shop-wishlist.html">Checkout</a></li>
                            <li><a href="shop-order.html">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">

                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>

                            <li>
                                <a class="language-dropdown-active" href="#">English <i
                                        class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li>
                                        <a href="#">Arabic</a>
                                    </li>

                                </ul>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="index.html"><img src="{{ asset('frontend/assets/imgs/theme/logo-web.png') }}" alt="logo"
                            width="160px" /></a>
                </div>
                <div class="header-right">
                    <div class="search-style-2">
                        <form action="{{ route('product.search') }}" method="post">
                            @csrf
                            <input onfocus="search_result_show()" onblur="search_result_hide()" name="search" id="search" placeholder="Search for items..." />                            <div id="searchProducts"></div>
                        </form>

                    </div>

                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="search-location">
                                <form action="{{ route('product.search') }}" method="post">
                                    @csrf

                                </form>
                            </div>

                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.html">
                                    <img class="svgInject" alt="img"
                                        src="{{ asset('frontend/assets/imgs/theme/icons/icon-heart.svg') }}" />
                                    <span class="pro-count blue">6</span>
                                </a>
                                <a href="shop-wishlist.html"><span class="lable">Wishlist</span></a>
                            </div>


                            <div class="header-action-icon-2">
                                @php
                                if (Auth::check()) {
                                $user_id = Auth::user()->id;
                                $carts = App\Models\Cart::where('user_id',$user_id)->get();
                                $count = $carts->count();
                                }
                                @endphp

                                <a class="mini-cart-icon" href="{{ route('mycart')}}">
                                    <img alt="img"
                                        src="{{ asset('frontend/assets/imgs/theme/icons/icon-cart.svg') }}" />
                                    @if (Auth::check())
                                    <span class="pro-count blue">{{$count}}</span>
                                    @else
                                    <span class="pro-count blue">0</span>
                                    @endif
                                </a>

                                <a href="{{ route('mycart')}}"><span class="lable">Cart</span></a>

                                @if (Auth::check())
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        @foreach ($carts as $cart)
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a
                                                    href="{{url('product/details/'.$cart['product']['id'].'/'.$cart['product']['product_name'])}}"><img
                                                        alt="img"
                                                        src="{{asset($cart['product']['product_image'])}} " /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a
                                                        href="{{url('product/details/'.$cart['product']['id'].'/'.$cart['product']['product_name'])}}">{{$cart['product']['product_name']}}</a>
                                                </h4>
                                                @if ($cart['product']['discount_price'] == NULL)
                                                <h4><span>{{$cart->quantity}} ×
                                                    </span>{{$cart['product']['selling_price']}} JD</h4>

                                                @else
                                                <h4><span>{{$cart->quantity}} ×
                                                    </span>{{$cart['product']['discount_price']}} JD</h4>
                                                @endif
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a type="submit" href="{{route('delete.cart',$cart->id)}}"><i
                                                        class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>

                                        @endforeach

                                    </ul>
                                    <div class="shopping-cart-footer">
                                        @php
                                        $AllTotal = 0;
                                        foreach ($carts as $cart) {
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
                                        }
                                        @endphp
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>{{$AllTotal}} JD</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="{{route('mycart')}}" class="outline">View cart</a>
                                            @php
                                            $finaltotal = $AllTotal + 10 ;
                                            @endphp
                                            <a href="{{ route('checkout' , $finaltotal) }}">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif





                            <div class="header-action-icon-2">
                                <a href="page-account.html">
                                    <img class="svgInject" alt="img"
                                        src="{{ asset('frontend/assets/imgs/theme/icons/icon-user.svg') }}" />
                                </a>

                                @auth
                                <a href="{{ route('dashboard')}}"><span class="lable ml-0">Account</span></a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                    <ul>
                                        <li>
                                            <a href="{{ route('dashboard')}}"><i class="fi fi-rs-user mr-10"></i>My
                                                Account</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashboard')}}"><i
                                                    class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashboard')}}"><i class="fi fi-rs-label mr-10"></i>My
                                                Voucher</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashboard')}}"><i class="fi fi-rs-heart mr-10"></i>My
                                                Wishlist</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashboard')}}"><i
                                                    class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user.logout')}}"><i
                                                    class="fi fi-rs-sign-out mr-10"></i>Sign out</a>
                                        </li>
                                    </ul>
                                </div>
                                @else
                                <a href="{{ route('login') }}"><span class="lable ml-0">Login</span></a>
                                <span class="lable " style="margin-left: 3px; margin-right: 3px;"> |</span>
                                <a href="{{ route('register') }}"><span class="lable ml-0">Register</span></a>

                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="index.html"><img src="{{ asset('frontend/assets/imgs/theme/logo-web.png') }}"
                            alt="logo" /></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">


                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                        <nav>
                            <ul>

                                <li>
                                    <a class="active" href="{{ url('/')}}">Home</a>

                                </li>

                                <li>
                                    <a href="{{url ('/mirror_shop')}}">Mirrors</a>
                                </li>
                                <li>
                                    <a href="page-about.html">About</a>
                                </li>
                                <li>
                                    <a href="page-contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>

                <div class="hotline d-none d-lg-flex">
                    <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-headphone.svg')}}" alt="hotline" />
                    <p>65 - 12345<span>24/7 Support Center</span></p>
                </div>


                <div class="header-action-icon-2 d-block d-lg-none">
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.html">
                                <img alt="img" src="{{ asset('frontend/assets/imgs/theme/icons/icon-heart.svg') }}" />
                                <Wishlistspan class="pro-count white">4</Wishlistspan>
                            </a>
                        </div>


                        <div class="header-action-icon-2">
                            @php
                            if (Auth::check()) {
                            $user_id = Auth::user()->id;
                            $carts = App\Models\Cart::where('user_id',$user_id)->get();
                            $count = $carts->count();
                            }
                            @endphp
                            <a class="mini-cart-icon" href="#">
                                <img alt="img" src="{{ asset('frontend/assets/imgs/theme/icons/icon-cart.svg') }}" />
                                @if (Auth::check())
                                <span class="pro-count blue">{{$count}}</span>
                                @else
                                <span class="pro-count blue">0</span>
                                @endif
                            </a>


                            @if (Auth::check())
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    @foreach ($carts as $cart)
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a
                                                href="{{url('product/details/'.$cart['product']['id'].'/'.$cart['product']['product_name'])}}"><img
                                                    alt="img" src="{{asset($cart['product']['product_image'])}} " /></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a
                                                    href="{{url('product/details/'.$cart['product']['id'].'/'.$cart['product']['product_name'])}}">{{$cart['product']['product_name']}}</a>
                                            </h4>
                                            @if ($cart['product']['discount_price'] == NULL)
                                            <h4><span>{{$cart->quantity}} × </span>{{$cart['product']['selling_price']}}
                                                JD</h4>

                                            @else
                                            <h4><span>{{$cart->quantity}} ×
                                                </span>{{$cart['product']['discount_price']}} JD</h4>
                                            @endif
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a type="submit" href="{{route('delete.cart',$cart->id)}}"><i
                                                    class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>

                                    @endforeach

                                </ul>
                                <div class="shopping-cart-footer">
                                    @php
                                    $AllTotal = 0;
                                    foreach ($carts as $cart) {
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
                                    }
                                    @endphp
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>${{$AllTotal}}</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="{{route('mycart')}}" class="outline">View cart</a>
                                        <a href="shop-checkout.html">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- End Header  -->

<style>
    #searchProducts{
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #ffffff;
        z-index: 999;
        border-radius: 8px;
        margin-top: 5px;
    }
</style>

<script>
    function search_result_show(){
        $("#searchProducts").slideDown();
    }
    function search_result_hide(){
        $("#searchProducts").slideUp();
    }
</script>

<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="index.html"><img src="{{ asset('frontend/assets/imgs/theme/logo-web.png') }}" alt="logo" /></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>



        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="Search for items…" />
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu font-heading">
                        <li class="menu-item-has-children">
                            <a href="{{ url('/')}}">Home</a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ url('/shop')}}">Mirrors</a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ url('/about')}}">About</a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ url('/contact')}}">Contact</a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Language</a>
                            <ul class="dropdown">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Arabic</a></li>

                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap">
                {{-- <div class="single-mobile-header-info">
                    <a href="page-contact.html"><i class="fi-rs-marker"></i> Our location </a>
                </div> --}}
                <div class="single-mobile-header-info">
                    <a href="page-login.html"><i class="fi-rs-user"></i>Log In / Sign Up </a>
                </div>
                {{-- <div class="single-mobile-header-info">
                    <a href="#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                </div> --}}
            </div>
            <div class="mobile-social-icon mb-50">
                <h6 class="mb-15">Follow Us</h6>
                <a href="https://www.facebook.com/"><img
                        src="{{ asset('frontend/assets/imgs/theme/icons/icon-facebook-white.svg') }}" alt="" /></a>
                <a href="https://www.twitter.com/"><img
                        src="{{ asset('frontend/assets/imgs/theme/icons/icon-twitter-white.svg') }}" alt="" /></a>
                <a href="https://www.instagram.com/"><img
                        src="{{ asset('frontend/assets/imgs/theme/icons/icon-instagram-white.svg') }}" alt="" /></a>
                <a href="https://www.pinterest.com/"><img
                        src="{{ asset('frontend/assets/imgs/theme/icons/icon-pinterest-white.svg') }}" alt="" /></a>
            </div>
            <div class="site-copyright">Copyright 2023 © Reflection. All rights reserved. </div>
        </div>
    </div>
</div>