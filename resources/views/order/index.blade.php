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
@if(Session::has('successful-update'))
<div class="alert alert-success">
  {{ Session::get('successful-update')}}
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
                </ol>
            </nav>
        </div> --}}
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Order</div>
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="table-responsive"> 
                          <table class="table table-bordered"> 
                            <thead> 
                              <tr>
                                  {{-- <th>#</th> --}}
                                  <th>User</th> 
                                  <th>Phone/Email</th> 
                                  <th>Date/Time</th> 
                                  <th>Pizza</th> 
                                  <th>Small Pizza</th> 
                                  <th>Medium Pizza</th>
                                  <th>large Pizza</th>
                                  <th>Total($)</th>
                                  <th>Message</th>
                                  <th>Status</th>
                                  <th>accept</th>
                                  <th>Reject</th>
                                  <th>Completed</th>    
                               </tr> 
                            </thead> 
                            <tbody> 
                                    @if (count($orders)>0)
                                    @foreach ($orders as $key => $order)
                                    <tr>
                                    {{-- <th scope="row">{{ $key+1 }}</th>  --}}
                                    <td>{{ $order->user->name }}</td> 
                                    <td>{{ $order->user->email }}<br>{{ $order->phone }}</td> 
                                    <td>{{ $order->date }} / {{ $order->time }}</td> 
                                    <td>{{ $order->pizza->name }}</td> 
                                    <td>{{ $order->small_pizza }}</td> 
                                    <td>{{ $order->medium_pizza}}</td>
                                    <td>{{ $order->large_pizza}}</td>
                                    <td>{{ ($order->pizza->small_pizza_price * $order->small_pizza)+($order->pizza->medium_pizza_price * $order->medium_pizza)+($order->pizza->large_pizza_price * $order->large_pizza)}}</td>  
                                    <td>{{ $order->body}}</td> 
                                    <td>{{ $order->status}}</td> 
                                    <form action="{{ route('change',$order->id) }}"  method="post">
                                      @csrf
                                      <td>
                                        <input name="status"  type="submit" value="accepted" class="btn btn-primary btn-sm">
                                      </td> 
                                      <td>
                                        <input name="status"  type="submit" value="Reject" class="btn btn-danger btn-sm">
                                      </td>
                                      <td>
                                        <input name="status"  type="submit" value="Completed" class="btn btn-success btn-sm">
                                      </td>
                                    </form>
                                    </tr>
                                    @endforeach  
                                    @endif 
                                </tbody> 
                               </table> 
                             </div>
                        </div>
                </div>
                </div>
        </div>
</div>
@endsection

