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
                <a class="language-dropdown-active" href="#">English <i class="fi-rs-angle-small-down"></i></a>
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
                    <a href="index.html"><img src="{{ asset('frontend/assets/imgs/theme/logo-web.png') }}" alt="logo" width="160px" /></a>
                </div>
<div class="header-right">
    <div class="search-style-2">
        <form action="#">
            <input type="text" placeholder="Search for items..." />
        </form>

    </div>
    
    <div class="header-action-right">
        <div class="header-action-2">
            <div class="search-location">
                <form action="#">
                  
                </form>
            </div>

            <div class="header-action-icon-2">
                <a href="shop-wishlist.html">
                    <img class="svgInject" alt="Nest" src="{{ asset('frontend/assets/imgs/theme/icons/icon-heart.svg') }}" />
                    <span class="pro-count blue">6</span>
                </a>
                <a href="shop-wishlist.html"><span class="lable">Wishlist</span></a>
            </div>
            <div class="header-action-icon-2">
                <a class="mini-cart-icon" href="shop-cart.html">
                    <img alt="Nest" src="{{ asset('frontend/assets/imgs/theme/icons/icon-cart.svg') }}" />
                    <span class="pro-count blue">2</span>
                </a>
                <a href="shop-cart.html"><span class="lable">Cart</span></a>
                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                    <ul>
                        <li>
                            <div class="shopping-cart-img">
                                <a href="shop-product-right.html"><img alt="Nest" src="{{ asset('frontend/assets/imgs/shop/thumbnail-3.jpg') }}" /></a>
                            </div>
                            <div class="shopping-cart-title">
                                <h4><a href="shop-product-right.html">Daisy Casual Bag</a></h4>
                                <h4><span>1 × </span>$800.00</h4>
                            </div>
                            <div class="shopping-cart-delete">
                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                            </div>
                        </li>
                        <li>
                            <div class="shopping-cart-img">
                                <a href="shop-product-right.html"><img alt="Nest" src="{{ asset('frontend/assets/imgs/shop/thumbnail-2.jpg') }}" /></a>
                            </div>
                            <div class="shopping-cart-title">
                                <h4><a href="shop-product-right.html">Corduroy Shirts</a></h4>
                                <h4><span>1 × </span>$3200.00</h4>
                            </div>
                            <div class="shopping-cart-delete">
                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                            </div>
                        </li>
                    </ul>
                    <div class="shopping-cart-footer">
                        <div class="shopping-cart-total">
                            <h4>Total <span>$4000.00</span></h4>
                        </div>
                        <div class="shopping-cart-button">
                            <a href="shop-cart.html" class="outline">View cart</a>
                            <a href="shop-checkout.html">Checkout</a>
                        </div>
                                    </div>
                                </div>
                            </div>





                            <div class="header-action-icon-2">
                                <a href="page-account.html">
                                    <img class="svgInject" alt="Nest" src="{{ asset('frontend/assets/imgs/theme/icons/icon-user.svg') }}" />
                                </a>

                                 @auth
                                  <a href="{{ route('dashboard')}}"><span class="lable ml-0">Account</span></a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                    <ul>
                                        <li>
                                            <a href="{{ route('dashboard')}}"><i class="fi fi-rs-user mr-10"></i>My Account</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashboard')}}"><i class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashboard')}}"><i class="fi fi-rs-label mr-10"></i>My Voucher</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashboard')}}"><i class="fi fi-rs-heart mr-10"></i>My Wishlist</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashboard')}}"><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user.logout')}}"><i class="fi fi-rs-sign-out mr-10"></i>Sign out</a>
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
                    <a href="index.html"><img src="{{ asset('frontend/assets/imgs/theme/logo-web.png') }}" alt="logo" /></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                       
                     
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                        <nav>
                            <ul>

                                <li>
                                    <a class="active" href="index.html">Home</a>

                                </li>
                               
                                <li>
                                    <a href="page-about.html">Mirrors</a>
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
            <img alt="Nest" src="{{ asset('frontend/assets/imgs/theme/icons/icon-heart.svg') }}" />
            <span class="pro-count white">4</span>
        </a>
    </div>
    <div class="header-action-icon-2">
        <a class="mini-cart-icon" href="#">
            <img alt="Nest" src="{{ asset('frontend/assets/imgs/theme/icons/icon-cart.svg') }}" />
            <span class="pro-count white">2</span>
        </a>
        <div class="cart-dropdown-wrap cart-dropdown-hm2">
            <ul>
                <li>
                    <div class="shopping-cart-img">
                        <a href="shop-product-right.html"><img alt="Nest" src="{{ asset('frontend/assets/imgs/shop/thumbnail-3.jpg') }}" /></a>
                    </div>
                    <div class="shopping-cart-title">
                        <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                        <h3><span>1 × </span>$800.00</h3>
                    </div>
                    <div class="shopping-cart-delete">
                        <a href="#"><i class="fi-rs-cross-small"></i></a>
                    </div>
                </li>
                <li>
                    <div class="shopping-cart-img">
                        <a href="shop-product-right.html"><img alt="Nest" src="{{ asset('frontend/assets/imgs/shop/thumbnail-4.jpg') }}" /></a>
                    </div>
                    <div class="shopping-cart-title">
                        <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                        <h3><span>1 × </span>$3500.00</h3>
                    </div>
                    <div class="shopping-cart-delete">
                        <a href="#"><i class="fi-rs-cross-small"></i></a>
                    </div>
                </li>
            </ul>
            <div class="shopping-cart-footer">
                <div class="shopping-cart-total">
                    <h4>Total <span>$383.00</span></h4>
                </div>
                <div class="shopping-cart-button">
                    <a href="shop-cart.html">View cart</a>
                    <a href="shop-checkout.html">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- End Header  -->




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
                            <a href="index.html">Home</a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="index.html">Mirrors</a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="index.html">About</a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="index.html">Contact</a>

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
                <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-facebook-white.svg') }}" alt="" /></a>
                <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-twitter-white.svg') }}" alt="" /></a>
                <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-instagram-white.svg') }}" alt="" /></a>
                <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-pinterest-white.svg') }}" alt="" /></a>
                <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-youtube-white.svg') }}" alt="" /></a>
            </div>
            <div class="site-copyright">Copyright 2023 © Nest. All rights reserved. Reflection.</div>
        </div>
    </div>
</div>