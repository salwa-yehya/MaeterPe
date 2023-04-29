<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('AdminBackend/assets/images/logo-web.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Reflection</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{route('admin.dashboard')}}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
 
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.category')}}"><i class="bx bx-right-arrow-alt"></i>Category</a>
                </li>

                <li> <a href="{{ route('add.category')}}"><i class="bx bx-right-arrow-alt"></i>Add Category</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Product</div>
            </a>
            <ul>
                <ul>
                    <li> <a href="{{ route('all.product')}}"><i class="bx bx-right-arrow-alt"></i>Product</a>
                    </li>
                    <li> <a href="{{ route('add.product')}}"><i class="bx bx-right-arrow-alt"></i>Add Product</a>
                    </li>
    
                </ul>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Slider</div>
            </a>
            <ul>
                <ul>
                    <li> <a href="{{ route('all.slider')}}"><i class="bx bx-right-arrow-alt"></i>All Slider</a>
                    </li>
                    <li> <a href="{{ route('add.slider')}}"><i class="bx bx-right-arrow-alt"></i>Add Slider</a>
                    </li>
    
                </ul>
            </ul>
        </li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Shipping Area</div>
            </a>
            <ul>
                <ul>
                    <li> <a href="{{ route('all.country')}}"><i class="bx bx-right-arrow-alt"></i>Countries</a>
                    </li>
                    <li> <a href="{{ route('all.city')}}"><i class="bx bx-right-arrow-alt"></i>Cities</a>
                    </li>
    
                </ul>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Orders</div>
            </a>
            <ul>
                <ul>
                    <li> <a href="{{ route('pending.order')}}"><i class="bx bx-right-arrow-alt"></i>Pending Order</a>
                    </li>
                    <li> <a href="{{ route('admin.confirmed.order') }}"><i class="bx bx-right-arrow-alt"></i>Confirmed Order</a>
                    </li>
                    <li> <a href="{{ route('admin.processing.order') }}"><i class="bx bx-right-arrow-alt"></i>Processing Order</a>
                    </li>
                    <li> <a href="{{ route('admin.delivered.order') }}"><i class="bx bx-right-arrow-alt"></i>Delivered Order</a>
                    </li>
                </ul>
            </ul>
        </li>
        
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Review Manage</div>
            </a>
            <ul>
                <li> <a href="{{ route('pending.review') }}"><i class="bx bx-right-arrow-alt"></i>Pending Review</a>
                </li>
    
                <li> <a href="{{ route('publish.review') }}"><i class="bx bx-right-arrow-alt"></i>Publish Review</a>
              </li>
    
    
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Stock Manage</div>
            </a>
            <ul>
                <li> <a href="{{ route('product.stock') }}"><i class="bx bx-right-arrow-alt"></i>Product Stock</a>
                </li>
    
    
    
    
            </ul>
        </li>
        
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Contact Messages</div>
            </a>
            <ul>
                <li> <a href="{{route('all.message')}}"><i class="bx bx-right-arrow-alt"></i>All Message</a>
                </li>
                <li> <a href="{{ route('all.replymessage') }}"><i class="bx bx-right-arrow-alt"></i>reply Message</a>
                </li>
            </ul>
        </li>


    </ul>
    <!--end navigation-->
</div>
