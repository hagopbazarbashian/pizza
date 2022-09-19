@extends('layouts.app')
@section('content')
<style>
    .form-group{
        margin: 0 0 25px 0;
    }
    a.list-group-item{
        font-size: 18px
    }
    a.list-group-item:hover{
        background-color: red;
        color: #fff;
    }
    .card-header{
        background-color: red;
        color: #fff;
        font-size: 20px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                        <ul class="list-group">
                            <form action="{{ route('filter') }}" method="get">
                                <input type="submit" value="vegetarion" name="category" class="list-group-item list-group-item-action">
                                <input type="submit" value="Non Vegetarion" name="category" class="list-group-item list-group-item-action">
                                <input type="submit" value="Traditional" name="category" class="list-group-item list-group-item-action">
                            </form>
                        </ul>
                </div>
           </div>
        </div>


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ count($Pizzas) }} Pizza</div>
                <div class="card-body">
                    <div class="row">
                        @if (count($Pizzas)>0)
                        @foreach ($Pizzas as $Pizza)
                        <div class="col-md-4 mt-4 text-center" style="border:1px solid black">
                            <img src="{{ Storage::url($Pizza->image) }}" class="img-thumbnail" style="width:100%">
                            <p>{{$Pizza->name}}</p>
                            <p>{{$Pizza->description}}</p>
                            <a href="{{ route('pizza',$Pizza->id) }}">
                                <button class="btn btn-danger mb-1">Order Now</button>
                            </a>
                        </div>
                        @endforeach
                        @else
                        <p>No Pizza</p>
                        @endif
                        
                    </div>
                </div>
           </div>
        </div>
   </div>
</div>
@endsection
