@extends('layouts.app')
@section('content')
<style>
    .form-group{
        margin: 0 0 25px 0;
    }  
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                   <ul class="list-group">
                    <a href="" class="list-group-item list-group-item-action">View</a>
                    <a href="" class="list-group-item list-group-item-action">Create</a>
                    
                   </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>
                <div class="card-body">
                   <div class="form-group">
                    <label for="name">Name Of Pizza</label>
                    <input type="text" class="form-control" name="name">
                   </div>
                
                    <div class="form-group">
                     <label for="name">Description Of Pizza</label>
                     <textarea type="text" class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-inline">
                            <label >pizza price($)</label>
                            <input type="number" class="form-control" placeholder="small pizza price">
                            <input type="number" class="form-control" placeholder="medium pizza price">
                            <input type="number" class="form-control" placeholder="larg pizza price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control">
                            <option value="vegetarion">Vegetarion</option>
                            <option value="nonvegetarion"> Non Vegetarion Pizza</option>
                            <option value="traditional"> Traditional Pizza</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="form-group text-center">
                       <button class="btn btn-primary" type="submit">Save</button>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
