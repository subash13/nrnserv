@extends('layouts.front.app')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="checkout_page_bg">
        <div class="container">
            <div class="Checkout_section">
                <div class="checkout_form">
                    @if(!$products->isEmpty())
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="checkout_form_left">
                                    <form action="#">
                                        <h3>Billing Details</h3>
                                        <div class="row">

                                            <div class="col-12 mb-20">
                                                <label for="country">country <span>*</span></label>
                                                <select name="country_id" id="country_id" class="form-control">
                                                    @foreach($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-12 mb-20">
                                                <label>Street address <span>*</span></label>
                                                <input placeholder="House number and street name" type="text">
                                            </div>
                                            <!--  <div class="col-12 mb-20">
                                                 <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                             </div> -->
                                            <div class="col-12 mb-20">
                                                <label>Town / City <span>*</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <label>State / County <span>*</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="col-lg-6 mb-20">
                                                <label>Phone<span>*</span></label>
                                                <input type="text">

                                            </div>
                                            <div class="col-lg-6 mb-20">
                                                <label> Email Address <span>*</span></label>
                                                <input type="text">

                                            </div>
                                            <div class="col-12 mb-20">
                                                <input id="account" type="checkbox" data-target="createp_account"/>
                                                <label for="account" data-toggle="collapse" data-target="#collapseOne"
                                                       aria-controls="collapseOne">Create an account?</label>

                                                <div id="collapseOne" class="collapse one" data-parent="#accordion">
                                                    <div class="card-body1">
                                                        <label> Account password <span>*</span></label>
                                                        <input placeholder="password" type="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  <div class="col-12 mb-20">
                                                 <input id="address" type="checkbox" data-target="createp_account" />
                                                 <label class="righ_0" for="address" data-toggle="collapse" data-target="#collapsetwo" aria-controls="collapseOne">Ship to a different address?</label>

                                                 <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                                     <div class="row">
                                                         <div class="col-lg-6 mb-20">
                                                             <label>First Name <span>*</span></label>
                                                             <input type="text">
                                                         </div>
                                                         <div class="col-lg-6 mb-20">
                                                             <label>Last Name <span>*</span></label>
                                                             <input type="text">
                                                         </div>
                                                         <div class="col-12 mb-20">
                                                             <label>Company Name</label>
                                                             <input type="text">
                                                         </div>
                                                         <div class="col-12 mb-20">
                                                             <div class="select_form_select">
                                                                 <label for="countru_name">country <span>*</span></label>
                                                                 <select class="niceselect_option" name="cuntry" id="countru_name">
                                                                     <option value="2">bangladesh</option>
                                                                     <option value="3">Algeria</option>
                                                                     <option value="4">Afghanistan</option>
                                                                     <option value="5">Ghana</option>
                                                                     <option value="6">Albania</option>
                                                                     <option value="7">Bahrain</option>
                                                                     <option value="8">Colombia</option>
                                                                     <option value="9">Dominican Republic</option>

                                                                 </select>
                                                             </div>
                                                         </div>

                                                         <div class="col-12 mb-20">
                                                             <label>Street address <span>*</span></label>
                                                             <input placeholder="House number and street name" type="text">
                                                         </div>
                                                         <div class="col-12 mb-20">
                                                             <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                                         </div>
                                                         <div class="col-12 mb-20">
                                                             <label>Town / City <span>*</span></label>
                                                             <input type="text">
                                                         </div>
                                                         <div class="col-12 mb-20">
                                                             <label>State / County <span>*</span></label>
                                                             <input type="text">
                                                         </div>
                                                         <div class="col-lg-6 mb-20">
                                                             <label>Phone<span>*</span></label>
                                                             <input type="text">

                                                         </div>
                                                         <div class="col-lg-6">
                                                             <label> Email Address <span>*</span></label>
                                                             <input type="text">

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="checkout_form_right">
                                    <form action="#">
                                        <h3>Your order</h3>
                                        <div class="order_table table-responsive">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Details</th>
                                                    <th>Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($cartItems as $cartItem)
                                                <tr>
                                                    <td>{{ $cartItem->name }}</td>
                                                    <td>{{ number_format($cartItem->price, 2) }}</td>
                                                </tr>
                                                @endforeach


                                                </tbody>
                                                <tfoot>
                                                <tr class="order_total">
                                                    <th>Order Total</th>
                                                    <td><strong>NPR.{{ number_format($total, 2, '.', ',') }}</strong></td>
                                                </tr>

                                                <tr class="order_total">
                                                    <th>Received</th>
                                                    <td><strong>$220.00</strong></td>
                                                </tr>

                                                <tr class="order_total">
                                                    <th>Remaining Due</th>
                                                    <td><strong>$220.00</strong></td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="payment_method">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <legend><i class="fa fa-credit-card"></i> Payment</legend>
                                                    @if(isset($payments) && !empty($payments))
                                                        <table class="table table-striped">
                                                            <thead>
                                                            <th class="col-md-4">Name</th>
                                                            <th class="col-md-4">Description</th>
                                                            <th class="col-md-4 text-right">Choose payment</th>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($payments as $payment)
                                                                @include('layouts.front.payment-options', compact('payment', 'total', 'shipment_object_id'))
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    @else
                                                        <p class="alert alert-danger">No payment method set</p>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="checkout_form_left">
                                    <form action="#">
                                        <h3>Region of Service</h3>
                                        <div class="row">

                                            <div class="col-12 mb-20">
                                                <label>Street address <span>*</span></label>
                                                <input placeholder="Ward number and street name" type="text">
                                            </div>
                                            <div class="col-lg-6 mb-20">
                                                <label>Town / City <span>*</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="col-lg-6 mb-20">
                                                <label>State <span>*</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="col-lg-6 mb-20">
                                                <label>Phone</label>
                                                <input type="text">

                                            </div>
                                            <div class="col-lg-6 mb-20">
                                                <label> Mobile No.<span>*</span></label>
                                                <input type="text">

                                            </div>

                                            <div class="col-12">
                                                <div class="order-notes">
                                                    <label for="order_note">Order Notes</label>
                                                    <textarea rows="4" id="order_note"
                                                              placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!--Checkout page section end-->
@endsection
@section('js')
    <script type="text/javascript">

        function setTotal(total, shippingCost) {
            let computed = +shippingCost + parseFloat(total);
            $('#total').html(computed.toFixed(2));
        }

        function setShippingFee(cost) {
            el = '#shippingFee';
            $(el).html(cost);
            $('#shippingFeeC').val(cost);
        }

        function setCourierDetails(courierId) {
            $('.courier_id').val(courierId);
        }

        $(document).ready(function () {

            let clicked = false;

            $('#sameDeliveryAddress').on('change', function () {
                clicked = !clicked;
                if (clicked) {
                    $('#sameDeliveryAddressRow').show();
                } else {
                    $('#sameDeliveryAddressRow').hide();
                }
            });

            let billingAddress = 'input[name="billing_address"]';
            $(billingAddress).on('change', function () {
                let chosenAddressId = $(this).val();
                $('.address_id').val(chosenAddressId);
                $('.delivery_address_id').val(chosenAddressId);
            });

            let deliveryAddress = 'input[name="delivery_address"]';
            $(deliveryAddress).on('change', function () {
                let chosenDeliveryAddressId = $(this).val();
                $('.delivery_address_id').val(chosenDeliveryAddressId);
            });

            let courier = 'input[name="courier"]';
            $(courier).on('change', function () {
                let shippingCost = $(this).data('cost');
                let total = $('#total').data('total');

                setCourierDetails($(this).val());
                setShippingFee(shippingCost);
                setTotal(total, shippingCost);
            });

            if ($(courier).is(':checked')) {
                let shippingCost = $(courier + ':checked').data('cost');
                let courierId = $(courier + ':checked').val();
                let total = $('#total').data('total');

                setShippingFee(shippingCost);
                setCourierDetails(courierId);
                setTotal(total, shippingCost);
            }
        });
    </script>
@endsection