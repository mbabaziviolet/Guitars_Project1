@extends('layouts.app')

@section('content')

<div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Our Products</h4>
                </div>

               
                <section class="text-center">
        <h4 class="mb-5"><strong></strong></h4>
        <div class="row">
      
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
              <img src="{{asset('/storage/images/'.$guitars['image']) }}" class="img-fluid">
                
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{$guitars->name}}</h5>
                <p class="card-text"> {{$guitars->price}}</p>
              
                
                
              </div>
            </div>
          </div>

        



@endsection