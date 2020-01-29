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
                                                <th class="product_remove">Delete</th>
                                                <th class="product_thumb">Service Image</th>
                                                <th class="product_name">Service Name</th>
                                                <th class="product-name">Category</th>
                                                <th class="product_quantity">Duration</th>
                                                <th class="product_total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a></td>
                                                <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                                <td class="product-price">Certificate</td>
                                                <td class="product_quantity">45<label> Days</label></td>
                                                <td class="product_total">£130.00</td>


                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="">

                                    <div class="coupon_code right">
                                        <div class="coupon_inner">
                                            <div class="cart_subtotal">
                                                <p class="cart_amount">Total</p>
                                                <p class="cart_amount totala_amount">£215.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout_btn">
                                <a href="checkout.php">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!--shopping cart area end -->

<?php include 'footer.php';?>