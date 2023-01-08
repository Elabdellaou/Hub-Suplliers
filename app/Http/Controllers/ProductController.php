<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function index(){
        $products=Product::inRandomOrder()->simplePaginate(18);
        // $products=Cache::remember("products",now()->addMinutes(10),function(){
        //     return Product::inRandomOrder()->get();
        // });
        // $products=$products->simplePaginate(12);
        return view("pages.products",compact("products"));
    }
    public function show($title){
        $product=Cache::remember("product.{!! $title !!}",now()->addMinutes(10),function() use($title){
            return Product::with("images")->where("title",$title)->first();
        });
        return view("pages.product_detail",compact("product"));
    }
}
