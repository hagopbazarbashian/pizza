@extends('layouts.app')
@section('content')
@if(Session::has('message'))
<div class="alert alert-danger">
  {{ Session::get('message')}}
</div>
@endif
@if(Session::has('message_ok'))
<div class="alert alert-success">
  {{ Session::get('message_ok')}}  
</div>
@endif
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

    #neonShadow{
  height:50px;
  width:100px;
  border:none;
  border-radius:50px;
  transition:0.3s;
  background-color:rgba(156, 161, 160,0.3);
  animation: glow 1s infinite ;
  transition:0.5s;
}
span{
    display: block;
    width: 100%;
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 700;
    padding-top: 15%;
    padding-right: 2.5%;
    margin-right: 0px;
    font-size: 1.2rem;
    transition: 0.3s;
    opacity: 0;
    }
span:hover{
    transition: 0.3s;
    opacity: 1;
    font-weight: 700;
    }

#neonShadow:hover{
  transform:translateX(-20px)rotate(30deg);
  border-radius:5px;
  background-color:#c3bacc;
  transition:0.5s;
}

@keyframes glow{
  0%{
  box-shadow: 5px 5px 20px rgb(93, 52, 168),-5px -5px 20px rgb(93, 52, 168);}
  
  50%{
  box-shadow: 5px 5px 20px rgb(81, 224, 210),-5px -5px 20px rgb(81, 224, 210)
  }
  100%{
  box-shadow: 5px 5px 20px rgb(93, 52, 168),-5px -5px 20px rgb(93, 52, 168)
  }
}


</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                    @if (Auth::check())
                     <form action="{{ route('order') }}" method="post">
                        <a href="/"><i class="fa fa-arrow-left" style="font-size:22px" aria-hidden="true"></i></a>
                        @csrf
                        <div class="form-group text-center" >
                            <p>Name:{{ auth()->user()->name }}</p>
                            <p>Email:{{ auth()->user()->email }}</p>
                            <p>Phone Number:<input type="number" class="form-control" name="phone" required></p>
                            <p>Small Pizza Order:<input type="number" class="form-control" name="small_pizza" value="0"></p>
                            <p>Medium Pizza Order:<input type="number" class="form-control" name="medium_pizza" value="0"></p>
                            <p>Large Pizza Order:<input type="number" class="form-control" name="large_pizza" value="0"></p>
                            <p><input type="hidden" name="pizza_id" value="{{ $Pizzas_show->id }}"></p>
                            <p><input type="date" name="date" class="form-control" required></p>
                            <p><input type="time" name="time" class="form-control" required></p>
                            <p><textarea class="form-control" name="body" required></textarea ></p>
                            <button class="btn btn-danger">Order Pizza</button>
                        </div>
                     </form>
                    @else
                    <a href="/login">Please login to make order</a>   
                    @endif
                </div>
           </div>
        </div>



        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>
                <div class="card-body">
                    <img src="{{ Storage::url($Pizzas_show->image) }}" class="img-thumbnail" style="width:100%">
                    <p><h3>{{$Pizzas_show->name}}</h3></p>
                    <p><h3>{{$Pizzas_show->description}}</h3></p>
                    <p>Small pizza price : AMD{{$Pizzas_show->small_pizza_price}}</h3></p>
                    <p>Medium pizza price : AMD{{$Pizzas_show->medium_pizza_price}}</h3></p>
                    <p>Larg pizza price : AMD{{$Pizzas_show->large_pizza_price}}</h3></p>
                </div>
           </div>
        </div>
   </div>
</div>
@endsection
