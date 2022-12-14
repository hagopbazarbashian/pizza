<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PizzaStoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Pizza;
class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pizza.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        $Pizza = Pizza::paginate(5);
        return view('pizza.view')->with([
            'pizzas'=>$Pizza
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PizzaStoreRequest $request)
    {
        $path = $request->image->store('public/pizza');
        Pizza::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'small_pizza_price'=>$request->small_pizza_price,
            'medium_pizza_price'=>$request->medium_pizza_price,
            'large_pizza_price'=>$request->large_pizza_price,
            'category'=>$request->category,
            'image'=>$path
        ]);
          return redirect()->back()->with('successful' , 'Pizza added  successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $pizzas = Pizza::findOrFail($id);
          return view('pizza.edit',compact('pizzas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $pizzas = Pizza::findOrFail($id);
        if($request->has('image')){
            $path = $request->image->store('public/pizza');
        }else{
            $pizzas->image;

            $pizzas->update([
                'name'=>$request->name,
                'description'=>$request->description,
                'small_pizza_price'=>$request->small_pizza_price,
                'medium_pizza_price'=>$request->medium_pizza_price,
                'large_pizza_price'=>$request->large_pizza_price,
                'category'=>$request->category,
                'image'=>$path
            ]);
        }
        
        return redirect()->route('pizza.create')->with('update' , 'Pizza Updated  successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id)->delete();
        return redirect()->back()->with('delate' , 'Pizza removed.');
    }
}
