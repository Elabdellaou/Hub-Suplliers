<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchProductRequest;
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
            return Product::where("title",$title)->first();
        });
        if($product === NULL)
            abort(404);
        return view("pages.product_detail",compact("product"));
    }
    //search product by title
    public function search(SearchProductRequest $req){
        $products=Product::where('title', 'LIKE', "%{$req->title}%")->simplePaginate(18);
        if($products === NULL)
            abort(404);
        return view("pages.products",compact("products"));
    }
    //search product by all attribute
    public function searchByAllAttribute(SearchProductRequest $req){
        $products=Product::where('title', 'LIKE', "%{$req->title}%")
        ->orWhere('brand', 'LIKE', "%{$req->title}%")
        ->orWhere('description', 'LIKE', "%{$req->title}%")
        ->orWhere('references', 'LIKE', "%{$req->title}%")
        ->simplePaginate(18);
        if($products === NULL)
            abort(404);
        return view("pages.products",compact("products"));
    }
}
