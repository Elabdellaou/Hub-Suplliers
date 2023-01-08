<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    //show all product
    public function index(){
        $products=Product::inRandomOrder()->simplePaginate(18);
        // $products=Cache::remember("products",now()->addMinutes(10),function(){
        //     return Product::inRandomOrder()->get();
        // });
        // $products=$products->simplePaginate(12);
        return view("pages.products",compact("products"));
    }
    //show detail of product
    public function show($title){
        $product=Cache::remember("product.{!! $title !!}",now()->addMinutes(10),function() use($title){
            return Product::with("images")->where("title",$title)->first();
        });
        return view("pages.product_detail",compact("product"));
    }
    //search product by title
    public function search(Request $req){
        $products=Product::where('title', 'LIKE', "%{$req->title}%")->simplePaginate(18);
        return view("pages.products",compact("products"));
    }
    //search product by all attribute
    public function searchByAllAttribute(Request $req){
        $products=Product::where('title', 'LIKE', "%{$req->title}%")
        ->orWhere('business', 'LIKE', "%{$req->title}%")
        ->orWhere('description', 'LIKE', "%{$req->title}%")
        ->orWhere('references', 'LIKE', "%{$req->title}%")
        ->simplePaginate(18);
        return view("pages.products",compact("products"));
    }
}
