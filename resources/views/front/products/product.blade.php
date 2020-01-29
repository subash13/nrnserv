@extends('layouts.front.app')
@section('content')
<!--slider area start-->
<section class="slider_section slider_s_two mb-60 mt-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3 col-md-12">
                <h2>Document Procurement - {{$product->name}}</h2>
                <h4>Description :</h4><p>{!! $product->description !!}</p>
                <p><b>Time Required : </b>{{$product->time}}Days </p>
                <p><b>Document Required : </b>{!! $product->document !!}</p>
                <p><b>Price : NPR.{{$product->price}}</b></p>
                <p><b>What's Included :</b> {!! $product->included !!}</p>
                <p><b>What's Not Included :</b>{!! $product->excluded !!}</p>
                <a class="button" href="cart.php">Purchase Now</a>

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
@endsection
{{--
@section('og')
    <meta property="og:type" content="product"/>
    <meta property="og:title" content="{{ $product->name }}"/>
    <meta property="og:description" content="{{ strip_tags($product->description) }}"/>
    @if(!is_null($product->cover))
        <meta property="og:image" content="{{ asset("storage/$product->cover") }}"/>
    @endif
@endsection

@section('content')
    <div class="container product">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}"> <i class="fa fa-home"></i> Home</a></li>
                    @if(isset($category))
                    <li><a href="{{ route('front.category.slug', $category->slug) }}">{{ $category->name }}</a></li>
                    @endif
                    <li class="active">Product</li>
                </ol>
            </div>
        </div>
        @include('layouts.front.product')
    </div>
@endsection--}}
