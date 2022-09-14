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
                                  <th>#</th>
                                  <th>User</th> 
                                  <th>Phone/Email</th> 
                                  <th>Date/Time</th> 
                                  <th>Pizza</th> 
                                  <th>Small Pizza</th> 
                                  <th>Medium Pizza</th>
                                  <th>large Pizza</th>
                                  <th>Message</th>
                                  <th>Status</th>
                                  <th>accept</th>
                                  <th>Reject</th>
                                  <th>Completed</th>    
                               </tr> 
                            </thead> 
                            <tbody> 
                                  <tr> 
                                    <th scope="row">1</th> 
                                    <td>Table cell</td> 
                                    <td>Table cell</td> 
                                    <td>Table cell</td> 
                                    <td>Table cell</td> 
                                    <td>Table cell</td> 
                                    <td>Table cell</td> 
                                  </tr> 
                                </tbody> 
                               </table> 
                             </div>
                        </div>
                </div>
                </div>
        </div>
</div>
@endsection

