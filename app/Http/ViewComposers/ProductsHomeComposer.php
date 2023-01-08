<?php
namespace App\Http\ViewComposers;

use App\Models\Product;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class ProductsHomeComposer{

    public function compose(View $view){
        $products=Cache::remember("products",now()->addMinutes(10),function(){
            return Product::inRandomOrder()->get();
            // return Product::orderBy("created_at","desc")->get();
        });
        $view->with("products",$products->take(20));
    }
}
