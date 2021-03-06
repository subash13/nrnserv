<?php include 'header2.php';?>

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="cart_page_bg">
        <div class="container">
            <div class="shopping_cart_area">
                <form action="#">
                    <div class="row">
                        <div class="col-12">
                            <div class="table_desc">
                                <div class="cart_page table-responsive">
                                       <table>
                                        <thead>
                                            <tr>
                                                <th class="product_total">Total</th>
                                                <th class="product_thumb">Service Image</th>
                                                <th class="product_name">Service Name</th>
                                                <th class="product_quantity">Completion Date</th>
                                                <th class="product_total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product_total">DOC12USA</td>
                                                <td class="product_thumb"><a href="#"><img class="order" src="assets/img/s-product/product.jpg" alt=""></a></td>
                                                <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                                <td class="product_quantity">27 oct, 2020</td>
                                                <td class="product_total">£130.00</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--coupon code area start-->
                    <div class="coupon_area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code left">
                                    <h3>Upload Your Documents Here</h3>
                                    <div class="coupon_inner">
                                    <p><b>Document Required : </b></p>
                                    <p>Citizenship Certificate, Passport Size Photo-4, Passport Scan Copy-1 </p>
                                    <input type="File" name="first-name">
                                    <input placeolder="Document Title" type="text" name="last-name">
                                        <div class="col-md-12">
                                            <div class="col-md-6"><input class="form-control-file" type="File"></div>
                                            <div class="col-md-6">
                                                <input placeholder="Coupon code" type="text">
                                                <button type="submit">Apply coupon</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code right">
                                    <h3>Total Details</h3>
                                    <div class="coupon_inner">
                                        <div class="cart_subtotal">
                                            <p>Service Charge</p>
                                            <p class="cart_amount">$215.00</p>
                                        </div>
                                        <div class="cart_subtotal ">
                                            <p>Transportation & Accomodation Charge</p>
                                            <p class="cart_amount">$255.00</p>
                                        </div>

                                        <div class="cart_subtotal">
                                            <p>Total</p>
                                            <p class="cart_amount">£215.00</p>
                                        </div>
                                        <div class="checkout_btn">
                                            <a href="#">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--coupon code area end-->
                </form>
            </div>
        </div>
    </div>
    <!--shopping cart area end -->

<?php include 'footer.php';?>