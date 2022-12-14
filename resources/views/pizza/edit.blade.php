@extends('layouts.app')
@section('content')
<style>
    .form-group{
        margin: 0 0 25px 0;
    }  
</style>
@if(Session::has('successful'))
<div class="alert alert-success">
  {{ Session::get('successful')}}
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>
                <div class="card-body">
                    <form action="{{ route('pizza.update',$pizzas->id) }}" method="post" enctype="multipart/form-data">
                        @method('PATCH') 
                        @csrf
                        <div class="form-group">
                            <label for="name">Name Of Pizza</label>
                            <input type="text" class="form-control" name="name" value="{{ $pizzas->name }}">
                            <span style="color:red">@error('name') {{ $message }}@enderror</span>
                           </div>
                        
                            <div class="form-group">
                             <label for="name">Description Of Pizza</label>
                             <textarea type="text" class="form-control" name="description" value="{{ $pizzas->description }}">{{ $pizzas->description }}</textarea>
                             <span style="color:red">@error('description') {{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label >pizza price($)</label>
                                    <input type="number" class="form-control" name="small_pizza_price" value="{{ $pizzas->small_pizza_price}}">
                                    <span style="color:red">@error('small_pizza_price') {{ $message }}@enderror</span>
                                    <input type="number" class="form-control" name="medium_pizza_price" value="{{ $pizzas->medium_pizza_price}}">
                                    <span style="color:red">@error('medium_pizza_price') {{ $message }}@enderror</span>
                                    <input type="number" class="form-control" name="large_pizza_price" value="{{ $pizzas->large_pizza_price}}">
                                    <span style="color:red">@error('large_pizza_price') {{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category" class="form-control">
                                    <option value="vegetarion">Vegetarion</option>
                                    <option value="nonvegetarion"> Non Vegetarion Pizza</option>
                                    <option value="traditional"> Traditional Pizza</option>
                                </select>
                                <span style="color:red">@error('category') {{ $message }}@enderror</span>
                            </div>
        
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image">
                                <span style="color:red">@error('image') {{ $message }}@enderror</span>
                                <img src="{{ Storage::url($pizzas->image) }}" width="80">
                            </div>
        
                            <div class="form-group text-center">
                               <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                    </form>
                   
            </div>
        </div>
    </div>
</div>
@endsection
