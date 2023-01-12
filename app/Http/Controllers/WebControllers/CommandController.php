<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use App\Models\Command;
use App\Models\CommandDetail;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    public function myOrders(){
        $commands=auth()->user()->commands;
        // foreach($commands as $command){
        //     foreach($command->details as $detail)
        //         echo $detail->product;
        // }
        return view("pages.my_orders",compact("commands"));
    }
    public function allDeleteCompleted(){
        $commands=Command::where("user_id",auth()->user()->id)->where("delivered",true)->get();
        if(count($commands) == 0)
            return redirect()->back()->with("warning","Not found any commands");
        Command::where("user_id",auth()->user()->id)->where("delivered",true)->delete();
        return redirect()->back()->with("success","Successfully Deleted all orders completed");
    }
    public function allDeleteProcessing(){
        $commands=Command::where("user_id",auth()->user()->id)->where("delivered",false)->get();
        if(count($commands) == 0)
            return redirect()->back()->with("warning","Not found any commands");
        $commands=Command::where("user_id",auth()->user()->id)->where("delivered",false)->delete();
        return redirect()->back()->with("success","Successfully Deleted all orders processing");
    }
    public function delete($id){
        $detail=CommandDetail::findOrFail($id);
        $detail->delete();
        return response()->json(["title"=>$detail->product->title]);
    }
}
