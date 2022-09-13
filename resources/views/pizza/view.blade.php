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
@if(Session::has('update'))
<div class="alert alert-success">
  {{ Session::get('update')}}
</div>
@endif
@if(Session::has('delate'))
<div class="alert alert-danger">
  {{ Session::get('delate')}}
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                   <ul class="list-group">
                    <a href="{{ route('pizza.create') }}" class="list-group-item list-group-item-action">View</a>
                    <a href="{{ route('pizza.index') }}" class="list-group-item list-group-item-action">Create</a>
                    
                   </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">View All Pizza</div>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image Pizza</th>
                        <th scope="col">Pizza Name</th>
                        <th scope="col">Description Pizza</th>
                        <th scope="col">Small pizza price</th>
                        <th scope="col">Medium pizza price</th>
                        <th scope="col">Large pizza price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead> 
                    <tbody>
                        @if (count($pizzas)>0)
                        @foreach ($pizzas as $key=>$pizza)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td><img src="{{ Storage::url($pizza->image) }}" width="80"></td>
                            <td>{{ $pizza->name }}</td>
                            <td>{{ $pizza->description }}</td>
                            <td>{{ $pizza->small_pizza_price }}</td>
                            <td>{{ $pizza->medium_pizza_price }}</td>
                            <td>{{ $pizza->large_pizza_price }}</td>
                            <td>{{ $pizza->category }}</td>
                            <td>
                                <a href="{{ route('pizza.edit',$pizza->id ) }}"><button class="btn btn-primary">Edit</button></a>
                                
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    Delate
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delate Confermation</h5>
                                        </div>
                                        <div class="modal-body">
                                        Are you sure ?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <form action="{{ route('pizza.destroy', $pizza->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </td>
                          </tr>
                        @endforeach
                        @else
                        <p>No Pizza to Show</p>
                        @endif
                    </tbody>
                  </table>
                  {{ $pizzas->links() }}
        </div>
    </div>
</div>

@endsection

