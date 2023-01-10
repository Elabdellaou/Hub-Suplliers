<?php

namespace App\Http\Controllers\WebControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function index(){
        $items=\Cart::getContent();
        return view("pages.checkout",compact("items"));
    }
}
