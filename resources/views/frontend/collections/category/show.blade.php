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
             
              <div class="category-card-body">
                                <h5>{{$guitars->name}}</h5>
                                <div class="product-card-img">
                            <label class="stock bg-success">In Stock</label>
                            <div>
                                <span class="selling-price">$500</span>
                                <span class="original-price">$799</span>
                            </div>
                            <div class="mt-2">
                                <a href="" class="btn btn1">Add To Cart</a>
                                <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                <a href="" class="btn btn1"> View </a>
                            </div>
                            
                        </div>
                            </div>
                

@endsection