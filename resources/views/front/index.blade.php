@extends('layouts.front.app')

@section('og')
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection

@section('content')
    <!--slider area start-->
    <section class="slider_section slider_s_two mb-60 mt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-3 col-md-12">
                    <div class="swiper-container gallery-top">
                        <div class="slider_area swiper-wrapper">
                            <div class="single_slider swiper-slide d-flex align-items-center"
                                 data-bgimg="assets/img/slider/slider5.jpg">
                                <div class="slider_content">
                                    <h3>new collection</h3>
                                    <h1>new collection <br> sport clothes for mens</h1>
                                    <p>discount <span> -30% off</span> this week</p>
                                    <a class="button" href="shop.html">DISCOVER NOW</a>
                                </div>
                            </div>
                            <div class="single_slider swiper-slide d-flex align-items-center"
                                 data-bgimg="assets/img/slider/slider6.jpg">
                                <div class="slider_content">
                                    <h3>big sale products</h3>
                                    <h1>clear & modern <br> minimalist chair 2019</h1>
                                    <p>discount <span> -50% off</span> this week</p>
                                    <a class="button" href="shop.html">DISCOVER NOW</a>
                                </div>
                            </div>
                            <div class="single_slider swiper-slide d-flex align-items-center"
                                 data-bgimg="assets/img/slider/slider7.jpg">
                                <div class="slider_content color_white">
                                    <h3>new arrivals</h3>
                                    <h1>new arrivals <br> cellphone mobile apps</h1>
                                    <p>discount <span> -10% off</span> this week</p>
                                    <a class="button" href="shop.html">DISCOVER NOW</a>
                                </div>
                            </div>
                            <div class="single_slider swiper-slide d-flex align-items-center"
                                 data-bgimg="assets/img/slider/slider8.jpg">
                                <div class="slider_content">
                                    <h3>big sale products</h3>
                                    <h1>wooden <br> minimalist chair 2019</h1>
                                    <p>discount <span> -60% off</span> this week</p>
                                    <a class="button" href="shop.html">DISCOVER NOW</a>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->

                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                New Collection Sport Clothes For Men’s
                            </div>
                            <div class="swiper-slide">
                                <a href="#"></a>
                                Clear & Modern Minimalist Chair 2019
                            </div>
                            <div class="swiper-slide">
                                Eodem modo vel mattis ante facilisis nec
                            </div>
                            <div class="swiper-slide">
                                Wooden Minimalist Chair 2019
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->


    <!--shipping area start-->
    <div class="shipping_area mb-60">
        <div class="container">
            <div class="shipping_inner">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping1.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>100% Reliable</h4>
                        <p>For all kinds of Services</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping2.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Fastest Delivery </h4>
                        <p>For all kinds of Services</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping3.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>All Services</h4>
                        <p>Available under a Roof</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping4.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Track Order</h4>
                        <p>For all your Orders</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--shipping area end-->

    <!--home section bg area start-->
    <div class="home_section_bg kp">

        <!--about section area -->
        <section class="about_section mb-60">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="about_content">
                        <h1>We are a digital agency focused on delivering content and utility user-experiences.</h1>
                        <p>Adipiscing lacus ut elementum, nec duis, tempor litora turpis dapibus. Imperdiet cursus odio
                            tortor in elementum. Egestas nunc eleifend feugiat lectus laoreet, vel nunc taciti integer
                            cras. Hac pede dis, praesent nibh ac dui mauris sit. Pellentesque mi, facilisi mauris, elit
                            sociis leo sodales accumsan. Iaculis ac fringilla torquent lorem consectetuer, sociosqu
                            phasellus risus urna aliquam, ornare.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--about section end-->


        <!--product area start-->
        <div class="product_area">
            <div class="container">
                <div class="row col-md-12 cen-ter">
                    <div class="section_title ">
                        <h2>Our Services</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="product_header ">
                            <div class="product_tab_btn">
                                <ul class="nav" role="tablist">
                                    @foreach($categories as $category)
                                        <li>
                                            <a class="active" data-toggle="tab" href="#Computer{{$category['id']}}"
                                               role="tab" aria-controls="Computer{{$category['id']}}" aria-selected="true">
                                                {{$category['name']}}
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content">
                    @php $count2=1 @endphp
                    @foreach($categories as $category)
                        <div class="tab-pane fade show {{$count2=1?'active':''}}"
                             id="Computer{{$category['id']}}" role="tabpanel">
                            <div class="product_carousel product_style product_column5 owl-carousel">
                                @foreach($category->products as $product)
                                    <article class="single_product">
                                        <figure>

                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('front.get.product', str_slug($product->slug)) }}"><img
                                                            src="{{ URL::asset('/storage/'.$product->cover) }}" alt=""></a>
                                                <a class="secondary_img" href="{{ route('front.get.product', str_slug($product->slug)) }}"><img
                                                            src="{{ URL::asset('/storage/'.$product->cover) }}" alt=""></a>
                                                <!--    <div class="label_product">
                                                    <span class="label_sale">Sale</{{$product->cover}}span>
                                                </div>
                                             <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="{{ route('front.get.product', str_slug($product->slug)) }}">{{$product['name']}}</a></h4>
                                                    <div class="price_box">
                                                        <span class="current_price">NPR.{{$product->price}}</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart ">

                                                        <form action="{{ route('cart.store') }}" class="form-inline" id="cartform" method="post">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="quantity" value="1" />
                                                            <input type="hidden" name="product" value="{{ $product->id }}">
                                                             <a id="add-to-cart-btn" onclick="document.getElementById('cartform').submit()"  data-toggle="modal" data-target="#cart-modal"> Purchase Now</a>
                                                        </form>

                                                    {{--<a href="cart.html" title="Add to cart">Purchase Now</a>--}}
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                @endforeach

                            </div>
                        </div>
                        @php $count2++ @endphp

                    @endforeach

                </div>

            </div>
        </div>
        <!--product area end-->

        <!--testomonials area start-->
        <div class="faq-client-say-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="section_title">
                            <h2>What can we do for you ?</h2>
                        </div>
                        <div class="faq-style-wrap" id="faq-five">
                            <!-- Panel-default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <a id="octagon" class="collapsed" role="button" data-toggle="collapse"
                                           data-target="#faq-collapse1" aria-expanded="true"
                                           aria-controls="faq-collapse1"> <span class="button-faq"></span>Fast Free
                                            Delivery</a>
                                    </h5>
                                </div>
                                <div id="faq-collapse1" class="collapse show" aria-expanded="true" role="tabpanel"
                                     data-parent="#faq-five">
                                    <div class="panel-body">
                                        <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                        <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi
                                            non habent claritatem insitam est usus legentis in iis qui facit eorum
                                            claritatem. Investigationes demonstraverunt lectores legere me.
                                        </p>
                                        <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                            lectorum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--// Panel-default -->

                            <!-- Panel-default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-target="#faq-collapse2" aria-expanded="false"
                                           aria-controls="faq-collapse2"> <span class="button-faq"></span>More Than 30
                                            Years In The Business</a>
                                    </h5>
                                </div>
                                <div id="faq-collapse2" class="collapse" aria-expanded="false" role="tabpanel"
                                     data-parent="#faq-five">
                                    <div class="panel-body">
                                        <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                        <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi
                                            non habent claritatem insitam est usus legentis in iis qui facit eorum
                                            claritatem. Investigationes demonstraverunt lectores legere me.
                                        </p>
                                        <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                            lectorum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--// Panel-default -->

                            <!-- Panel-default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-target="#faq-collapse3" aria-expanded="false"
                                           aria-controls="faq-collapse3"> <span class="button-faq"></span>100% Organic
                                            Foods</a>
                                    </h5>
                                </div>
                                <div id="faq-collapse3" class="collapse" role="tabpanel" data-parent="#faq-five">
                                    <div class="panel-body">
                                        <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                        <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi
                                            non habent claritatem insitam est usus legentis in iis qui facit eorum
                                            claritatem. Investigationes demonstraverunt lectores legere me.
                                        </p>
                                        <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                            lectorum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--// Panel-default -->

                            <!-- Panel-default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-target="#faq-collapse4" aria-expanded="false"
                                           aria-controls="faq-collapse4"> <span class="button-faq"></span>Best Shopping
                                            Strategies</a>
                                    </h5>
                                </div>
                                <div id="faq-collapse4" class="collapse" role="tabpanel" data-parent="#faq-five">
                                    <div class="panel-body">
                                        <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                        <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi
                                            non habent claritatem insitam est usus legentis in iis qui facit eorum
                                            claritatem. Investigationes demonstraverunt lectores legere me.
                                        </p>
                                        <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                            lectorum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--// Panel-default -->
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="testimonials-area">
                            <div class="section_title">
                                <h2>What Our Customers Says ?</h2>
                            </div>
                            <div class="testimonial-two owl-carousel">
                                <div class="testimonial-wrap-two text-center">
                                    <div class="quote-container">
                                        <div class="quote-image">
                                            <img src="assets/img/about/testimonial1.jpg" alt="">
                                        </div>
                                        <div class="testimonials-text">
                                            <p>Support and response has been amazing, helping me with several issues I
                                                came across and got them solved almost the same day. A pleasure to work
                                                with them!</p>
                                        </div>
                                        <div class="author">
                                            <h6>Kathy Young</h6>
                                            <p>CEO of SunPark</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="testimonial-wrap-two text-center">
                                    <div class="quote-container">
                                        <div class="quote-image">
                                            <img src="assets/img/about/testimonial2.jpg" alt="">
                                        </div>
                                        <div class="testimonials-text">
                                            <p>Support and response has been amazing, helping me with several issues I
                                                came across and got them solved almost the same day. A pleasure to work
                                                with them!</p>
                                        </div>
                                        <div class="author">
                                            <h6>Kathy Young</h6>
                                            <p>CEO of SunPark</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-wrap-two text-center">
                                    <div class="quote-container">
                                        <div class="quote-image">
                                            <img src="assets/img/about/testimonial3.jpg" alt="">
                                        </div>
                                        <div class="testimonials-text">
                                            <p>Support and response has been amazing, helping me with several issues I
                                                came across and got them solved almost the same day. A pleasure to work
                                                with them!</p>
                                        </div>
                                        <div class="author">
                                            <h6>Kathy Young</h6>
                                            <p>CEO of SunPark</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--banner area end-->

    </div>
    <!--home section bg area end-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig5.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"
                                                   aria-controls="tab1" aria-selected="false"><img
                                                            src="assets/img/product/product1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                                   aria-controls="tab2" aria-selected="false"><img
                                                            src="assets/img/product/product6.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3"
                                                   role="tab" aria-controls="tab3" aria-selected="false"><img
                                                            src="assets/img/product/product9.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"
                                                   aria-controls="tab4" aria-selected="false"><img
                                                            src="assets/img/product/product14.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Sit voluptatem rhoncus sem lectus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price">$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                            laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                            in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                            recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->
@endsection