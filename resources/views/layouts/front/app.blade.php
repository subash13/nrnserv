<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Services2NRN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}assets/img/favicon.ico">

    <!-- CSS
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">

</head>

<body>

<!--Offcanvas menu area start-->
<div class="off_canvars_overlay"></div>
<div class="Offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="Offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="antomi_message">
                        <p>Get free shipping – Free 30 day money back guarantee</p>
                    </div>
                    <div class="header_top_settings text-right">l
                        <ul>
                            <li><a href="#">Store Locations</a></li>
                            <li>Hotline: <a href="tel:+(012)800456789">(012) 800 456 789 </a></li>
                            @if(auth()->check())
                            <li><a href="{{ route('accounts', ['tab' => 'profile']) }}"><i class="fa fa-home"></i> My Account</a></li>
                            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
                            @else
                                <li><a href="{{ route('login') }}"> <i class="fa fa-lock"></i> Login</a></li>
                                <li><a href="{{ route('register') }}"> <i class="fa fa-sign-in"></i> Register</a></li>
                            @endif
                            {{--<li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>--}}
                            <li><a href=""></a> </li>
                        </ul>
                    </div>
                    <div class="header_configure_area">
                        <div class="mini_cart_wrapper">
                            <a href="javascript:void(0)">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="cart_price">Ram Prasad Gajurel<i class="ion-ios-arrow-down"></i></span>
                                <span class="cart_count">{{ $cartCount }}</span>

                            </a>

                            <div class="mini_cart">
                                <div class="mini_cart_inner">
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">Your Service request has been accepted.</a>
                                            <p><span> BIrth certificate </span></p>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">$50 has been added as transportaion and Accomodation Charge</a>
                                            <p><span> Extra Charge</span></p>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mini_cart_footer">
                                    <div class="cart_button">
                                        <a href="cart.html">My Account</a>
                                    </div>
                                    <div class="cart_button">
                                        <a href="checkout.html">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search_container">
                        <form action="#">
                            <div class="hover_category">
                                <select class="select_option" name="select" id="categori1">
                                    <option selected value="1">All Services</option>
                                    <option value="2">Accessories</option>
                                    <option value="3">Accessories & More</option>
                                    <option value="4">Butters & Eggs</option>
                                    <option value="5">Camera & Video </option>
                                    <option value="6">Mornitors</option>
                                    <option value="7">Tablets</option>
                                    <option value="8">Laptops</option>
                                    <option value="9">Handbags</option>
                                    <option value="10">Headphone & Speaker</option>
                                    <option value="11">Herbs & botanicals</option>
                                    <option value="12">Vegetables</option>
                                    <option value="13">Shop</option>
                                    <option value="14">Laptops & Desktops</option>
                                    <option value="15">Watchs</option>
                                    <option value="16">Electronic</option>
                                </select>
                            </div>
                            <div class="search_box">
                                <input placeholder="Search product..." type="text">
                                <button type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="#">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop Layouts</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">shop</a></li>
                                            <li><a href="shop-fullwidth.html">Full Width</a></li>
                                            <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                            <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                            <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                            <li><a href="shop-list.html">List View</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">other Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="my-account.html">my account</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Product Types</a>
                                        <ul class="sub-menu">
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="product-sidebar.html">product sidebar</a></li>
                                            <li><a href="product-grouped.html">product grouped</a></li>
                                            <li><a href="variable-product.html">product variable</a></li>
                                            <li><a href="product-countdown.html">product countdown</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li class="menu-item-has-children">
                                <a href="#">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                </ul>

                            </li> -->
                            <!-- <li class="menu-item-has-children">
                                <a href="#">pages </a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="faq.html">Frequently Questions</a></li>
                                    <li><a href="privacy-policy.html">privacy policy</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                </ul>
                            </li> -->
                            <li class="menu-item-has-children">
                                <a href="my-account.html">my account</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="about.html">About Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact.php"> Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="Offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas menu area end-->
<!--header area start-->
<header>
    <div class="main_header">
        <div class="container">
            <!--header top start-->
            <div class="header_top">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5">
                        <div class="antomi_message">
                            <p>Get free shipping – Free 30 day money back guarantee</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="header_top_settings text-right">
                            <ul>
                                <li><a href="#">Store Locations</a></li>
                                <li>Hotline: <a href="tel:+(012)800456789">(012) 800 456 789 </a></li>
                                @if(auth()->check())
                                    <li><a href="{{ route('accounts', ['tab' => 'profile']) }}"> My Account</a></li>
                                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                @else
                                    <li><a href="{{ route('login') }}"> Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->

            <!--header middel start-->
            <div class="header_middle sticky-header">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-6">
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo.png" class="logoa" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="main_menu menu_position text-center">
                            <nav>
                                <ul>
                                    <li><a href="index.php">home</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php"> Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="header_configure_area">
                            <div class="mini_cart_wrapper">
                                <a href="{{ route('cart.index') }}">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="cart_price">{{auth()->check()?auth()->user()['name']:'Guest'}}<i class="ion-ios-arrow-down"></i></span>
                                    <span class="cart_count">{{ $cartCount }}</span>

                                </a>
                                <div class="mini_cart">
                                    <div class="mini_cart_inner">
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Your Service item has been approved.</a>
                                                <p><span> Birth Certificate</span></p>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">$50 has been estimated for Transportation and Accomodation Charge. </a>
                                                <p><span>Extra Charge</span></p>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini_cart_footer">
                                        <div class="cart_button">
                                            <a href="my-account.php">My Account</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="checkout.html">Logout</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->

            <!--header bottom satrt-->
            <div class="header_bottom">
                <div class="row align-items-center">
                    <div class="column1 col-lg-3 col-md-6">
                        <div class="categories_menu">
                            <div class="categories_title">
                                <h2 class="categori_toggle">ALL Services</h2>
                            </div>
                            <div class="categories_menu_toggle">
                                <ul>
                                    @foreach($categories as $category)
                                    <li class="menu_item_children"><a href="#">{{$category->name}} <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu">
                                            @foreach($category->products as $product)
                                            <li class="menu_item_children"><a href="{{ route('front.get.product', str_slug($product->slug)) }}">{{$product['name']}}</a>
                                                {{--<ul class="categorie_sub_menu">
                                                    <li><a href="">Sweater</a></li>
                                                    <li><a href="">Evening</a></li>
                                                    <li><a href="">Day</a></li>
                                                    <li><a href="">Sports</a></li>
                                                </ul>--}}
                                            </li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    @endforeach
                                    <li id="cat_toggle" class="has-sub"><a href="#"> More Categories</a>
                                        <ul class="categorie_sub">
                                            <li><a href="#">Hide Categories</a></li>
                                        </ul>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column2 col-lg-6 ">
                        <div class="search_container">
                            <form action="#">
                                <div class="hover_category">
                                    <select class="select_option" name="select" id="categori2">
                                        <option selected value="1">All Categories</option>
                                        <option value="2">Accessories</option>
                                        <option value="3">Accessories & More</option>
                                        <option value="4">Butters & Eggs</option>
                                        <option value="5">Camera & Video </option>
                                        <option value="6">Mornitors</option>
                                        <option value="7">Tablets</option>
                                        <option value="8">Laptops</option>
                                        <option value="9">Handbags</option>
                                        <option value="10">Headphone & Speaker</option>
                                        <option value="11">Herbs & botanicals</option>
                                        <option value="12">Vegetables</option>
                                        <option value="13">Shop</option>
                                        <option value="14">Laptops & Desktops</option>
                                        <option value="15">Watchs</option>
                                        <option value="16">Electronic</option>
                                    </select>
                                </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="column3 col-lg-3 col-md-6">
                        <div class="header_bigsale">
                            <a href="#">BIG SALE BLACK FRIDAY</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div>
    </div>
</header>
<!--header area end-->

@yield('content')

@include('layouts.front.footer')

<script src="{{ asset('js/front.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@yield('js')
</body>
</html>