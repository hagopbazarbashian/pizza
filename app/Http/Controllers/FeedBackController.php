<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeedBack;
use App\Http\Requests\FeedBackRequest;

class FeedBackController extends Controller
{
     public  function sendus(FeedBackRequest $request){
        FeedBack::create([
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'message'=>$request->message
        ]);
        return redirect()->back()->with('successful' ,'your message successfully sending');
     }
}
  