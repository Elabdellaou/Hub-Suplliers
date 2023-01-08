<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        $items=\Cart::getContent();
        return view("pages.checkout",compact("items"));
    }
}
