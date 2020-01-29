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
                                        @foreach($cartItems as $cartItem)
                                        <tr>
                                            <td class="product_remove">
                                                <form action="{{ route('cart.destroy', $cartItem->rowId) }}" method="post">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
                                            <td class="product_thumb"><a href="{{ route('front.get.product', [$cartItem->product->slug]) }}" class="hover-border">
                                                    @if(isset($cartItem->cover))
                                                        <img src="{{$cartItem->cover}}" alt="{{ $cartItem->name }}" class="img-responsive img-thumbnail">
                                                    @else
                                                        <img src="https://placehold.it/120x120" alt="" class="img-responsive img-thumbnail">
                                                    @endif
                                                </td>
                                            <td class="product_name"><a href="{{ route('front.get.product', [$cartItem->product->slug]) }}">{{ $cartItem->name }}</a></td>
                                            <td class="product-price">{{ $cartItem->category['name'] }}</td>
                                            <td class="product_quantity">{{$cartItem->time}}<label> Days</label></td>
                                            <td class="product_total">NPR.{{ number_format($cartItem->price, 2) }}</td>


                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="">

                                    <div class="coupon_code right">
                                        <div class="coupon_inner">
                                            <div class="cart_subtotal">
                                                <p class="cart_amount">Total</p>
                                                <p class="cart_amount totala_amount">NPR.{{ number_format($total, 2, '.', ',') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout_btn">
                                <a href="{{ route('checkout.index') }}">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!--shopping cart area end -->

@endsection
@section('css')
    <style type="text/css">
        .product-description {
            padding: 10px 0;
        }
        .product-description p {
            line-height: 18px;
            font-size: 14px;
        }
    </style>
@endsection