@extends('layouts.app')
@section('content')
<style>
    .form-group{
        margin: 0 0 25px 0;
    }  
</style>
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
                <div class="card-header">Customers</div>
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="table-responsive"> 
                          <table class="table table-bordered"> 
                            <thead> 
                              <tr>
                                  <th>#</th>
                                  <th>User name</th> 
                                  <th>user email</th> 
                                  <th>Member Since</th> 
                               </tr> 
                            </thead> 
                            <tbody> 
                                    @if (count($users)>0)
                                    @foreach ($users as $key => $user)
                                    <tr>
                                    <th scope="row">{{ $key+1 }}</th> 
                                    <td>{{ $user->name }}</td> 
                                    <td>{{ $user->email }}</td>
                                    <td>{{\Carbon\Carbon::parse($user->created_at )->format('M d Y') }}</td>
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

