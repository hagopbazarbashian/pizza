<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Order;

class FrontController extends Controller
{
    public function index(Request $request){
        if(!$request->category){
            $Pizzas = Pizza::latest()->get();
            return view('pizza.frontpage',compact('Pizzas'));
        }
        $Pizzas = Pizza::where('category' ,$request->category)->get();
        return view('pizza.frontpage',compact('Pizzas'));
        
    }

    public function show(Request $request ,$id){
        $Pizzas_show = Pizza::find($id);
        return view('show',compact('Pizzas_show'));
    }

    public function store(Request $request){
        if($request->small_pizza == 0 && $request->medium_pizza == 0  && $request->large_pizza == 0){
            return  redirect()->back()->with('message' , 'Please order at last one Pizza');
        }

        if($request->small_pizza < 0 && $request->medium_pizza < 0  && $request->large_pizza < 0){
            return  redirect()->back()->with('message' , 'Order should not have negative number');
        }

        Order::create([
            'user_id'=>Auth()->user()->id,
            'date'=>$request->date,
            'time'=>$request->time,
            'pizza_id'=>$request->pizza_id,
            'small_pizza'=>$request->small_pizza,
            'medium_pizza'=>$request->medium_pizza,
            'large_pizza'=>$request->large_pizza,
            'body'=>$request->body,
            'phone'=>$request->phone
        ]);
        return redirect()->back()->with('message_ok' , 'Your order is successfull');
        
    }

    public function user_order(){
        $orders = Order::where('user_id' , auth()->user()->id)->get();
        return view('order.show_user_order',compact('orders'));
    }
}
 