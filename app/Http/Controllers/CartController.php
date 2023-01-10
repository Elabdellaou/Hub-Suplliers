<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreToCart;
use App\Http\Requests\UpdateQuantityCart;
use App\Models\Command;
use App\Models\CommandDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=\Cart::getContent();
        return view("pages.cart",compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // store demande to cart
    public function store(StoreToCart $request)
    {
        $product = Product::findOrFail($request->id);
        \Cart::add(array(
            'id' => $product->references,
            'name'=>$product->title,
            'quantity' => isset($request->qty)?$request->qty:1,
            'price' => 0,
            'attributes' => array(),
            'associatedModel' => $product
        ));
        return response()->json(["count"=>\Cart::getContent()->count()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // update quantity of demande product
    public function update(UpdateQuantityCart $request, $id)
    {
        $product = Product::findOrFail($id);
        \Cart::update($product->references,[
            'quantity' =>array(
                'relative' => false,
                'value' => $request->qty
            ),
        ]);
        return response()->json(["count"=>\Cart::getContent()->count()]);
        // return response(\Cart::get($product->references),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //delete demande to cart
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        \Cart::remove($product->references);
        return response()->json(["count"=>\Cart::getContent()->count()]);
    }
    public function passDemands(Request $request){
        $items=\Cart::getContent();
        $command_id=Command::create(["user_id"=>$request->user()->id])->id;
        if(count($items) == 0)
            return redirect()->back()->with("warning","No demands.");

        foreach ($items as $key => $item) {
            CommandDetail::create([
                'command_id'=>$command_id,
                'product_id'=>$item->associatedModel->id,
                'qty'=>$item->quantity
            ]);
            \Cart::remove($item->associatedModel->references);
        }
        return redirect()->back()->with("success","All demands have been passed.");
    }
}
