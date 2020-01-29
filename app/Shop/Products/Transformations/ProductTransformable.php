<?php

namespace App\Shop\Products\Transformations;

use App\Shop\Products\Product;
use Illuminate\Support\Facades\Storage;

trait ProductTransformable
{
    /**
     * Transform the product
     *
     * @param Product $product
     * @return Product
     */
    protected function transformProduct(Product $product)
    {
        $prod = new Product;
        $prod->id = (int) $product->id;
        $prod->name = $product->name;
        $prod->sku = $product->sku;
        $prod->slug = $product->slug;
        $prod->description = $product->description;
        $prod->document = $product->document;
        $prod->cover = asset("storage/$product->cover");
        $prod->price = $product->price;
        $prod->status = $product->status;
        $prod->excluded = $product->excluded;
        $prod->included = $product->included;
        $prod->time = $product->time;


        return $prod;
    }
}
